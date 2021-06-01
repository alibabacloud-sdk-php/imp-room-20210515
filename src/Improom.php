<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Improom\V20210515\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Improom\V20210515\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Improom\V20210515\Models\CreateRoomRequest;
use AlibabaCloud\SDK\Improom\V20210515\Models\CreateRoomResponse;
use AlibabaCloud\SDK\Improom\V20210515\Models\DestroyRoomRequest;
use AlibabaCloud\SDK\Improom\V20210515\Models\DestroyRoomResponse;
use AlibabaCloud\SDK\Improom\V20210515\Models\GetLoginTokenRequest;
use AlibabaCloud\SDK\Improom\V20210515\Models\GetLoginTokenResponse;
use AlibabaCloud\SDK\Improom\V20210515\Models\GetLoginTokenShrinkRequest;
use AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomDetailRequest;
use AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomDetailResponse;
use AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomListRequest;
use AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomListResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Improom extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imp-room', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param GetLoginTokenRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginTokenWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetLoginTokenShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestParams)) {
            $request->requestParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->requestParams), 'RequestParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLoginTokenResponse::fromMap($this->doRPCRequest('GetLoginToken', '2021-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLoginTokenRequest $request
     *
     * @return GetLoginTokenResponse
     */
    public function getLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoginTokenWithOptions($request, $runtime);
    }

    /**
     * @param CreateRoomRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoomResponse
     */
    public function createRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRoomResponse::fromMap($this->doRPCRequest('CreateRoom', '2021-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRoomRequest $request
     *
     * @return CreateRoomResponse
     */
    public function createRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoomWithOptions($request, $runtime);
    }

    /**
     * @param DestroyRoomRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DestroyRoomResponse
     */
    public function destroyRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DestroyRoomResponse::fromMap($this->doRPCRequest('DestroyRoom', '2021-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DestroyRoomRequest $request
     *
     * @return DestroyRoomResponse
     */
    public function destroyRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyRoomWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2021-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetRoomDetailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRoomDetailResponse
     */
    public function getRoomDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRoomDetailResponse::fromMap($this->doRPCRequest('GetRoomDetail', '2021-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRoomDetailRequest $request
     *
     * @return GetRoomDetailResponse
     */
    public function getRoomDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoomDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetRoomListRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetRoomListResponse
     */
    public function getRoomListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRoomListResponse::fromMap($this->doRPCRequest('GetRoomList', '2021-05-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRoomListRequest $request
     *
     * @return GetRoomListResponse
     */
    public function getRoomList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoomListWithOptions($request, $runtime);
    }
}
