<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\NoticeInstanceUserRequest;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\NoticeInstanceUserResponse;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataRequest;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class MarketplaceIntl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('marketplaceintl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * isv推送实例消息给用户.
     *
     * @param request - NoticeInstanceUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns NoticeInstanceUserResponse
     *
     * @param NoticeInstanceUserRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return NoticeInstanceUserResponse
     */
    public function noticeInstanceUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->noticeParam) {
            @$body['NoticeParam'] = $request->noticeParam;
        }

        if (null !== $request->noticeType) {
            @$body['NoticeType'] = $request->noticeType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'NoticeInstanceUser',
            'version'     => '2022-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return NoticeInstanceUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return NoticeInstanceUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * isv推送实例消息给用户.
     *
     * @param request - NoticeInstanceUserRequest
     * @returns NoticeInstanceUserResponse
     *
     * @param NoticeInstanceUserRequest $request
     *
     * @return NoticeInstanceUserResponse
     */
    public function noticeInstanceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->noticeInstanceUserWithOptions($request, $runtime);
    }

    /**
     * 国际云市场推送计量数据.
     *
     * @param request - PushMeteringDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PushMeteringDataResponse
     *
     * @param PushMeteringDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PushMeteringDataResponse
     */
    public function pushMeteringDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gmtCreate) {
            @$body['GmtCreate'] = $request->gmtCreate;
        }

        if (null !== $request->meteringData) {
            @$body['MeteringData'] = $request->meteringData;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushMeteringData',
            'version'     => '2022-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PushMeteringDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PushMeteringDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 国际云市场推送计量数据.
     *
     * @param request - PushMeteringDataRequest
     * @returns PushMeteringDataResponse
     *
     * @param PushMeteringDataRequest $request
     *
     * @return PushMeteringDataResponse
     */
    public function pushMeteringData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMeteringDataWithOptions($request, $runtime);
    }
}
