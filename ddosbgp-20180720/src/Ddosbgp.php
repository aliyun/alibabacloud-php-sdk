<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpRequest;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AddIpResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ddosbgp extends OpenApiClient
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
     * @param AddIpRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return AddIpResponse
     */
    public function addIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddIpResponse::fromMap($this->doRPCRequest('AddIp', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckGrantRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CheckGrantResponse
     */
    public function checkGrantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return CheckGrantResponse::fromMap($this->doRPCRequest('CheckGrant', '2018-07-20', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param ConfigSchedruleOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfigSchedruleOnDemandResponse
     */
    public function configSchedruleOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigSchedruleOnDemandResponse::fromMap($this->doRPCRequest('ConfigSchedruleOnDemand', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSchedruleOnDemandResponse::fromMap($this->doRPCRequest('CreateSchedruleOnDemand', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteBlackholeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteBlackholeResponse
     */
    public function deleteBlackholeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBlackholeResponse::fromMap($this->doRPCRequest('DeleteBlackhole', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteIpRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteIpResponse
     */
    public function deleteIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteIpResponse::fromMap($this->doRPCRequest('DeleteIp', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteSchedruleOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSchedruleOnDemandResponse
     */
    public function deleteSchedruleOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSchedruleOnDemandResponse::fromMap($this->doRPCRequest('DeleteSchedruleOnDemand', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDdosEventRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDdosEventResponse
     */
    public function describeDdosEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosEventResponse::fromMap($this->doRPCRequest('DescribeDdosEvent', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeExcpetionCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeExcpetionCountResponse
     */
    public function describeExcpetionCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExcpetionCountResponse::fromMap($this->doRPCRequest('DescribeExcpetionCount', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceListResponse
     */
    public function describeInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceListResponse::fromMap($this->doRPCRequest('DescribeInstanceList', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceSpecsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceSpecsResponse::fromMap($this->doRPCRequest('DescribeInstanceSpecs', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeOnDemandDdosEventRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOnDemandDdosEventResponse
     */
    public function describeOnDemandDdosEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOnDemandDdosEventResponse::fromMap($this->doRPCRequest('DescribeOnDemandDdosEvent', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeOnDemandInstanceStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeOnDemandInstanceStatusResponse
     */
    public function describeOnDemandInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOnDemandInstanceStatusResponse::fromMap($this->doRPCRequest('DescribeOnDemandInstanceStatus', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeOpEntitiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOpEntitiesResponse::fromMap($this->doRPCRequest('DescribeOpEntities', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribePackIpListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePackIpListResponse
     */
    public function describePackIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePackIpListResponse::fromMap($this->doRPCRequest('DescribePackIpList', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribePackPaidTrafficRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePackPaidTrafficResponse
     */
    public function describePackPaidTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePackPaidTrafficResponse::fromMap($this->doRPCRequest('DescribePackPaidTraffic', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeResourcePackInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeResourcePackInstancesResponse
     */
    public function describeResourcePackInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourcePackInstancesResponse::fromMap($this->doRPCRequest('DescribeResourcePackInstances', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeResourcePackStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResourcePackStatisticsResponse
     */
    public function describeResourcePackStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourcePackStatisticsResponse::fromMap($this->doRPCRequest('DescribeResourcePackStatistics', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeResourcePackUsageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeResourcePackUsageResponse
     */
    public function describeResourcePackUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourcePackUsageResponse::fromMap($this->doRPCRequest('DescribeResourcePackUsage', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeTrafficRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTrafficResponse
     */
    public function describeTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTrafficResponse::fromMap($this->doRPCRequest('DescribeTraffic', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyRemarkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyRemarkResponse
     */
    public function modifyRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRemarkResponse::fromMap($this->doRPCRequest('ModifyRemark', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySchedruleOnDemandRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySchedruleOnDemandResponse
     */
    public function querySchedruleOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySchedruleOnDemandResponse::fromMap($this->doRPCRequest('QuerySchedruleOnDemand', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetInstanceModeOnDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetInstanceModeOnDemandResponse
     */
    public function setInstanceModeOnDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetInstanceModeOnDemandResponse::fromMap($this->doRPCRequest('SetInstanceModeOnDemand', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2018-07-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
