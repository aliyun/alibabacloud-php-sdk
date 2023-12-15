<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20161125;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ARMS\V20161125\Models\ARMSQueryDataSetRequest;
use AlibabaCloud\SDK\ARMS\V20161125\Models\ARMSQueryDataSetResponse;
use AlibabaCloud\SDK\ARMS\V20161125\Models\WhereInDimQueryRequest;
use AlibabaCloud\SDK\ARMS\V20161125\Models\WhereInDimQueryResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ARMS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'arms.aliyuncs.com',
            'cn-beijing-finance-1'        => 'arms.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'arms.aliyuncs.com',
            'cn-beijing-gov-1'            => 'arms.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'arms.aliyuncs.com',
            'cn-edge-1'                   => 'arms.aliyuncs.com',
            'cn-fujian'                   => 'arms.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'arms.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'arms.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'arms.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'arms.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'arms.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'arms.aliyuncs.com',
            'cn-qingdao-nebula'           => 'arms.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'arms.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'arms.aliyuncs.com',
            'cn-shanghai-inner'           => 'arms.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'arms.aliyuncs.com',
            'cn-shenzhen-inner'           => 'arms.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'arms.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'arms.aliyuncs.com',
            'cn-wuhan'                    => 'arms.aliyuncs.com',
            'cn-yushanfang'               => 'arms.aliyuncs.com',
            'cn-zhangbei'                 => 'arms.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'arms.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'arms.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'arms.aliyuncs.com',
            'eu-west-1-oxs'               => 'arms.aliyuncs.com',
            'me-east-1'                   => 'arms.aliyuncs.com',
            'rus-west-1-pop'              => 'arms.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('arms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ARMSQueryDataSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ARMSQueryDataSetResponse
     */
    public function aRMSQueryDataSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->dateStr)) {
            $query['DateStr'] = $request->dateStr;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->hungryMode)) {
            $query['HungryMode'] = $request->hungryMode;
        }
        if (!Utils::isUnset($request->intervalInSec)) {
            $query['IntervalInSec'] = $request->intervalInSec;
        }
        if (!Utils::isUnset($request->isDrillDown)) {
            $query['IsDrillDown'] = $request->isDrillDown;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->maxTime)) {
            $query['MaxTime'] = $request->maxTime;
        }
        if (!Utils::isUnset($request->measures)) {
            $query['Measures'] = $request->measures;
        }
        if (!Utils::isUnset($request->minTime)) {
            $query['MinTime'] = $request->minTime;
        }
        if (!Utils::isUnset($request->optionalDims)) {
            $query['OptionalDims'] = $request->optionalDims;
        }
        if (!Utils::isUnset($request->orderByKey)) {
            $query['OrderByKey'] = $request->orderByKey;
        }
        if (!Utils::isUnset($request->reduceTail)) {
            $query['ReduceTail'] = $request->reduceTail;
        }
        if (!Utils::isUnset($request->requiredDims)) {
            $query['RequiredDims'] = $request->requiredDims;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ARMSQueryDataSet',
            'version'     => '2016-11-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ARMSQueryDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ARMSQueryDataSetRequest $request
     *
     * @return ARMSQueryDataSetResponse
     */
    public function aRMSQueryDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aRMSQueryDataSetWithOptions($request, $runtime);
    }

    /**
     * @param WhereInDimQueryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return WhereInDimQueryResponse
     */
    public function whereInDimQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->dateStr)) {
            $query['DateStr'] = $request->dateStr;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->intervalInSec)) {
            $query['IntervalInSec'] = $request->intervalInSec;
        }
        if (!Utils::isUnset($request->isDrillDown)) {
            $query['IsDrillDown'] = $request->isDrillDown;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->maxTime)) {
            $query['MaxTime'] = $request->maxTime;
        }
        if (!Utils::isUnset($request->measures)) {
            $query['Measures'] = $request->measures;
        }
        if (!Utils::isUnset($request->minTime)) {
            $query['MinTime'] = $request->minTime;
        }
        if (!Utils::isUnset($request->orderByKey)) {
            $query['OrderByKey'] = $request->orderByKey;
        }
        if (!Utils::isUnset($request->reduceTail)) {
            $query['ReduceTail'] = $request->reduceTail;
        }
        if (!Utils::isUnset($request->whereInKey)) {
            $query['WhereInKey'] = $request->whereInKey;
        }
        if (!Utils::isUnset($request->whereInValues)) {
            $query['WhereInValues'] = $request->whereInValues;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WhereInDimQuery',
            'version'     => '2016-11-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WhereInDimQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param WhereInDimQueryRequest $request
     *
     * @return WhereInDimQueryResponse
     */
    public function whereInDimQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->whereInDimQueryWithOptions($request, $runtime);
    }
}
