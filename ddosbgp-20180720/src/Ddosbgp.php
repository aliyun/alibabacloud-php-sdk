<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckAccessLogAuthRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckAccessLogAuthResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckGrantRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CheckGrantResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ConfigSchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ConfigSchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreateSchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\CreateSchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteBlackholeRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteBlackholeResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteIpResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteSchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DeleteSchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosEventRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosEventResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeExcpetionCountRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeExcpetionCountResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandDdosEventRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandDdosEventResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandInstanceStatusRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandInstanceStatusResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOpEntitiesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOpEntitiesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackIpListRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackIpListResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackPaidTrafficRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackPaidTrafficResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackInstancesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackInstancesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackStatisticsRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackStatisticsResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackUsageRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeResourcePackUsageResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\GetSlsOpenStatusRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\GetSlsOpenStatusResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListOpenedAccessLogInstancesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyRemarkRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyRemarkResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\SetInstanceModeOnDemandRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\SetInstanceModeOnDemandResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\UntagResourcesResponse;
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
     * @param DescribeOnDemandInstanceStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeOnDemandInstanceStatusResponse
     */
    public function describeOnDemandInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeOnDemandInstanceStatusResponse::fromMap($this->doRequest('DescribeOnDemandInstanceStatus', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeOnDemandInstanceStatusRequest $request
     *
     * @return DescribeOnDemandInstanceStatusResponse
     */
    public function describeOnDemandInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnDemandInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetInstanceModeOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetInstanceModeOnDemandResponse
     */
    public function setInstanceModeOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetInstanceModeOnDemandResponse::fromMap($this->doRequest('SetInstanceModeOnDemand', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetInstanceModeOnDemandRequest $request
     *
     * @return SetInstanceModeOnDemandResponse
     */
    public function setInstanceModeOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceModeOnDemandWithOptions($request, $runtime);
    }

    /**
     * @param QuerySchedruleOnDemandRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySchedruleOnDemandResponse
     */
    public function querySchedruleOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySchedruleOnDemandResponse::fromMap($this->doRequest('QuerySchedruleOnDemand', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QuerySchedruleOnDemandRequest $request
     *
     * @return QuerySchedruleOnDemandResponse
     */
    public function querySchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSchedruleOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSchedruleOnDemandResponse
     */
    public function deleteSchedruleOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSchedruleOnDemandResponse::fromMap($this->doRequest('DeleteSchedruleOnDemand', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteSchedruleOnDemandRequest $request
     *
     * @return DeleteSchedruleOnDemandResponse
     */
    public function deleteSchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @param ConfigSchedruleOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfigSchedruleOnDemandResponse
     */
    public function configSchedruleOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigSchedruleOnDemandResponse::fromMap($this->doRequest('ConfigSchedruleOnDemand', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ConfigSchedruleOnDemandRequest $request
     *
     * @return ConfigSchedruleOnDemandResponse
     */
    public function configSchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configSchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @param CreateSchedruleOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateSchedruleOnDemandResponse
     */
    public function createSchedruleOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSchedruleOnDemandResponse::fromMap($this->doRequest('CreateSchedruleOnDemand', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSchedruleOnDemandRequest $request
     *
     * @return CreateSchedruleOnDemandResponse
     */
    public function createSchedruleOnDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSchedruleOnDemandWithOptions($request, $runtime);
    }

    /**
     * @param GetSlsOpenStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSlsOpenStatusResponse
     */
    public function getSlsOpenStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSlsOpenStatusResponse::fromMap($this->doRequest('GetSlsOpenStatus', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSlsOpenStatusRequest $request
     *
     * @return GetSlsOpenStatusResponse
     */
    public function getSlsOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSlsOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param CheckAccessLogAuthRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckAccessLogAuthResponse
     */
    public function checkAccessLogAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckAccessLogAuthResponse::fromMap($this->doRequest('CheckAccessLogAuth', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckAccessLogAuthRequest $request
     *
     * @return CheckAccessLogAuthResponse
     */
    public function checkAccessLogAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccessLogAuthWithOptions($request, $runtime);
    }

    /**
     * @param ListOpenedAccessLogInstancesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListOpenedAccessLogInstancesResponse
     */
    public function listOpenedAccessLogInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOpenedAccessLogInstancesResponse::fromMap($this->doRequest('ListOpenedAccessLogInstances', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListOpenedAccessLogInstancesRequest $request
     *
     * @return ListOpenedAccessLogInstancesResponse
     */
    public function listOpenedAccessLogInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenedAccessLogInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOnDemandDdosEventRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOnDemandDdosEventResponse
     */
    public function describeOnDemandDdosEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeOnDemandDdosEventResponse::fromMap($this->doRequest('DescribeOnDemandDdosEvent', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeOnDemandDdosEventRequest $request
     *
     * @return DescribeOnDemandDdosEventResponse
     */
    public function describeOnDemandDdosEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnDemandDdosEventWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagKeysResponse::fromMap($this->doRequest('ListTagKeys', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExcpetionCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeExcpetionCountResponse
     */
    public function describeExcpetionCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeExcpetionCountResponse::fromMap($this->doRequest('DescribeExcpetionCount', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeExcpetionCountRequest $request
     *
     * @return DescribeExcpetionCountResponse
     */
    public function describeExcpetionCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExcpetionCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribePackIpListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePackIpListResponse
     */
    public function describePackIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePackIpListResponse::fromMap($this->doRequest('DescribePackIpList', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribePackIpListRequest $request
     *
     * @return DescribePackIpListResponse
     */
    public function describePackIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackIpListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRemarkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyRemarkResponse
     */
    public function modifyRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyRemarkResponse::fromMap($this->doRequest('ModifyRemark', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyRemarkRequest $request
     *
     * @return ModifyRemarkResponse
     */
    public function modifyRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRemarkWithOptions($request, $runtime);
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

        return DescribeTrafficResponse::fromMap($this->doRequest('DescribeTraffic', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeResourcePackUsageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeResourcePackUsageResponse
     */
    public function describeResourcePackUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourcePackUsageResponse::fromMap($this->doRequest('DescribeResourcePackUsage', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeResourcePackStatisticsResponse::fromMap($this->doRequest('DescribeResourcePackStatistics', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeResourcePackInstancesResponse::fromMap($this->doRequest('DescribeResourcePackInstances', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribePackPaidTrafficRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePackPaidTrafficResponse
     */
    public function describePackPaidTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePackPaidTrafficResponse::fromMap($this->doRequest('DescribePackPaidTraffic', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeOpEntitiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeOpEntitiesResponse::fromMap($this->doRequest('DescribeOpEntities', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeInstanceSpecsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceSpecsResponse::fromMap($this->doRequest('DescribeInstanceSpecs', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeInstanceSpecsRequest $request
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecsWithOptions($request, $runtime);
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

        return DescribeInstanceListResponse::fromMap($this->doRequest('DescribeInstanceList', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDdosEventRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDdosEventResponse
     */
    public function describeDdosEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDdosEventResponse::fromMap($this->doRequest('DescribeDdosEvent', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteIpRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteIpResponse
     */
    public function deleteIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteIpResponse::fromMap($this->doRequest('DeleteIp', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteBlackholeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteBlackholeResponse
     */
    public function deleteBlackholeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBlackholeResponse::fromMap($this->doRequest('DeleteBlackhole', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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

        return CheckGrantResponse::fromMap($this->doRequest('CheckGrant', 'HTTPS', 'GET', '2018-07-20', 'AK', Tea::merge($request), null, $runtime));
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
     * @param AddIpRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return AddIpResponse
     */
    public function addIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddIpResponse::fromMap($this->doRequest('AddIp', 'HTTPS', 'POST', '2018-07-20', 'AK', null, Tea::merge($request), $runtime));
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
