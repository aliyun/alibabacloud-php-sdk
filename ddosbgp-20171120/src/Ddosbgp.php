<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\AddIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\AddIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\AddProductRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\AddProductResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\CheckGrantRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\CheckGrantResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DeleteBlackholeRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DeleteBlackholeResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DeleteIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DeleteIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DeleteProductRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DeleteProductResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeDdosEventRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeDdosEventResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeInstanceListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeInstanceListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeOnDemandInstanceRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeOnDemandInstanceResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeOpEntitiesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeOpEntitiesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackPaidTrafficRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackPaidTrafficResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeResourcePackInstancesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeResourcePackInstancesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeResourcePackStatisticsRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeResourcePackStatisticsResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeResourcePackUsageRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeResourcePackUsageResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeTopTrafficRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeTopTrafficResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeTrafficRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeTrafficResponse;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\ModifyOnDemaondDefenseStatusRequest;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\ModifyOnDemaondDefenseStatusResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ddosbgp extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'ddosbgp.aliyuncs.com',
            'cn-beijing'            => 'ddosbgp.aliyuncs.com',
            'cn-zhangjiakou'        => 'ddosbgp.aliyuncs.com',
            'cn-huhehaote'          => 'ddosbgp.aliyuncs.com',
            'cn-hangzhou'           => 'ddosbgp.aliyuncs.com',
            'cn-shanghai'           => 'ddosbgp.aliyuncs.com',
            'cn-shenzhen'           => 'ddosbgp.aliyuncs.com',
            'ap-northeast-1'        => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'cn-chengdu'            => 'ddosbgp.aliyuncs.com',
            'eu-central-1'          => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'ddosbgp.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'ddosbgp.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'ddosbgp.aliyuncs.com',
            'cn-shanghai-finance-1' => 'ddosbgp.aliyuncs.com',
            'cn-north-2-gov-1'      => 'ddosbgp.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddosbgp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DescribeOnDemandInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeOnDemandInstanceResponse
     */
    public function describeOnDemandInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeOnDemandInstanceResponse::fromMap($this->doRequest('DescribeOnDemandInstance', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeOnDemandInstanceRequest $request
     *
     * @return DescribeOnDemandInstanceResponse
     */
    public function describeOnDemandInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnDemandInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOnDemaondDefenseStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyOnDemaondDefenseStatusResponse
     */
    public function modifyOnDemaondDefenseStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyOnDemaondDefenseStatusResponse::fromMap($this->doRequest('ModifyOnDemaondDefenseStatus', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyOnDemaondDefenseStatusRequest $request
     *
     * @return ModifyOnDemaondDefenseStatusResponse
     */
    public function modifyOnDemaondDefenseStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOnDemaondDefenseStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOpEntitiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeOpEntitiesResponse::fromMap($this->doRequest('DescribeOpEntities', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeOpEntitiesRequest $request
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpEntitiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePackPaidTrafficRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePackPaidTrafficResponse
     */
    public function describePackPaidTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePackPaidTrafficResponse::fromMap($this->doRequest('DescribePackPaidTraffic', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribePackPaidTrafficRequest $request
     *
     * @return DescribePackPaidTrafficResponse
     */
    public function describePackPaidTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackPaidTrafficWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourcePackUsageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeResourcePackUsageResponse
     */
    public function describeResourcePackUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourcePackUsageResponse::fromMap($this->doRequest('DescribeResourcePackUsage', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeResourcePackUsageRequest $request
     *
     * @return DescribeResourcePackUsageResponse
     */
    public function describeResourcePackUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcePackUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourcePackStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResourcePackStatisticsResponse
     */
    public function describeResourcePackStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourcePackStatisticsResponse::fromMap($this->doRequest('DescribeResourcePackStatistics', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeResourcePackStatisticsRequest $request
     *
     * @return DescribeResourcePackStatisticsResponse
     */
    public function describeResourcePackStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcePackStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourcePackInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeResourcePackInstancesResponse
     */
    public function describeResourcePackInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourcePackInstancesResponse::fromMap($this->doRequest('DescribeResourcePackInstances', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeResourcePackInstancesRequest $request
     *
     * @return DescribeResourcePackInstancesResponse
     */
    public function describeResourcePackInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcePackInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBlackholeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteBlackholeResponse
     */
    public function deleteBlackholeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBlackholeResponse::fromMap($this->doRequest('DeleteBlackhole', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteBlackholeRequest $request
     *
     * @return DeleteBlackholeResponse
     */
    public function deleteBlackhole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBlackholeWithOptions($request, $runtime);
    }

    /**
     * @param CheckGrantRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CheckGrantResponse
     */
    public function checkGrantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckGrantResponse::fromMap($this->doRequest('CheckGrant', 'HTTPS', 'GET', '2017-11-20', 'AK', Tea::merge($request), null, $runtime));
    }

    /**
     * @param CheckGrantRequest $request
     *
     * @return CheckGrantResponse
     */
    public function checkGrant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkGrantWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteProductResponse::fromMap($this->doRequest('DeleteProduct', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteProductRequest $request
     *
     * @return DeleteProductResponse
     */
    public function deleteProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProductWithOptions($request, $runtime);
    }

    /**
     * @param AddProductRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddProductResponse
     */
    public function addProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddProductResponse::fromMap($this->doRequest('AddProduct', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddProductRequest $request
     *
     * @return AddProductResponse
     */
    public function addProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProductWithOptions($request, $runtime);
    }

    /**
     * @param AddIpRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return AddIpResponse
     */
    public function addIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddIpResponse::fromMap($this->doRequest('AddIp', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddIpRequest $request
     *
     * @return AddIpResponse
     */
    public function addIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceListResponse
     */
    public function describeInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceListResponse::fromMap($this->doRequest('DescribeInstanceList', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeInstanceListRequest $request
     *
     * @return DescribeInstanceListResponse
     */
    public function describeInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTopTrafficRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTopTrafficResponse
     */
    public function describeTopTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeTopTrafficResponse::fromMap($this->doRequest('DescribeTopTraffic', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeTopTrafficRequest $request
     *
     * @return DescribeTopTrafficResponse
     */
    public function describeTopTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopTrafficWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosEventRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDdosEventResponse
     */
    public function describeDdosEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDdosEventResponse::fromMap($this->doRequest('DescribeDdosEvent', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDdosEventRequest $request
     *
     * @return DescribeDdosEventResponse
     */
    public function describeDdosEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosEventWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTrafficRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTrafficResponse
     */
    public function describeTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeTrafficResponse::fromMap($this->doRequest('DescribeTraffic', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeTrafficRequest $request
     *
     * @return DescribeTrafficResponse
     */
    public function describeTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteIpResponse
     */
    public function deleteIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteIpResponse::fromMap($this->doRequest('DeleteIp', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteIpRequest $request
     *
     * @return DeleteIpResponse
     */
    public function deleteIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribePackRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribePackResponse
     */
    public function describePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePackResponse::fromMap($this->doRequest('DescribePack', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribePackRequest $request
     *
     * @return DescribePackResponse
     */
    public function describePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackWithOptions($request, $runtime);
    }

    /**
     * @param DescribePackListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePackListResponse
     */
    public function describePackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePackListResponse::fromMap($this->doRequest('DescribePackList', 'HTTPS', 'POST', '2017-11-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribePackListRequest $request
     *
     * @return DescribePackListResponse
     */
    public function describePackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackListWithOptions($request, $runtime);
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
}
