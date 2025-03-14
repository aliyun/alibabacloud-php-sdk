<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\DescribeSellerInstancesRequest;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\DescribeSellerInstancesResponse;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\NoticeInstanceUserRequest;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\NoticeInstanceUserResponse;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataRequest;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 卖家查询实例列表
     *  *
     * @param DescribeSellerInstancesRequest $request DescribeSellerInstancesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSellerInstancesResponse DescribeSellerInstancesResponse
     */
    public function describeSellerInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['InstanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSellerInstances',
            'version' => '2022-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSellerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSellerInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 卖家查询实例列表
     *  *
     * @param DescribeSellerInstancesRequest $request DescribeSellerInstancesRequest
     *
     * @return DescribeSellerInstancesResponse DescribeSellerInstancesResponse
     */
    public function describeSellerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSellerInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary isv推送实例消息给用户
     *  *
     * @param NoticeInstanceUserRequest $request NoticeInstanceUserRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return NoticeInstanceUserResponse NoticeInstanceUserResponse
     */
    public function noticeInstanceUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->noticeParam)) {
            $body['NoticeParam'] = $request->noticeParam;
        }
        if (!Utils::isUnset($request->noticeType)) {
            $body['NoticeType'] = $request->noticeType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'NoticeInstanceUser',
            'version' => '2022-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return NoticeInstanceUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return NoticeInstanceUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary isv推送实例消息给用户
     *  *
     * @param NoticeInstanceUserRequest $request NoticeInstanceUserRequest
     *
     * @return NoticeInstanceUserResponse NoticeInstanceUserResponse
     */
    public function noticeInstanceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->noticeInstanceUserWithOptions($request, $runtime);
    }

    /**
     * @summary 国际云市场推送计量数据
     *  *
     * @param PushMeteringDataRequest $request PushMeteringDataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return PushMeteringDataResponse PushMeteringDataResponse
     */
    public function pushMeteringDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gmtCreate)) {
            $body['GmtCreate'] = $request->gmtCreate;
        }
        if (!Utils::isUnset($request->meteringData)) {
            $body['MeteringData'] = $request->meteringData;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushMeteringData',
            'version' => '2022-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PushMeteringDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PushMeteringDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 国际云市场推送计量数据
     *  *
     * @param PushMeteringDataRequest $request PushMeteringDataRequest
     *
     * @return PushMeteringDataResponse PushMeteringDataResponse
     */
    public function pushMeteringData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMeteringDataWithOptions($request, $runtime);
    }
}
