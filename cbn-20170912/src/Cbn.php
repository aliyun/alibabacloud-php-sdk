<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ActiveFlowLogRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ActiveFlowLogResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AssociateCenBandwidthPackageRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AssociateCenBandwidthPackageResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AttachCenChildInstanceRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\AttachCenChildInstanceResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenBandwidthPackageRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenBandwidthPackageResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenChildInstanceRouteEntryToCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenChildInstanceRouteEntryToCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenRouteMapRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateCenRouteMapResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateFlowlogRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateFlowlogResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeactiveFlowLogRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeactiveFlowLogResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenBandwidthPackageRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenBandwidthPackageResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenChildInstanceRouteEntryToCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenChildInstanceRouteEntryToCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenRouteMapRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteCenRouteMapResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteFlowlogRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteFlowlogResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteRouteServiceInCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DeleteRouteServiceInCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpanRemainingBandwidthRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpanRemainingBandwidthResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeChildInstanceRegionsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeChildInstanceRegionsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGeographicRegionMembershipRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGeographicRegionMembershipResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteConflictRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteConflictResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DetachCenChildInstanceRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DetachCenChildInstanceResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DisableCenVbrHealthCheckRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DisableCenVbrHealthCheckResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\EnableCenVbrHealthCheckRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\EnableCenVbrHealthCheckResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenBandwidthPackageAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenBandwidthPackageAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenBandwidthPackageSpecRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenBandwidthPackageSpecResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenRouteMapRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyCenRouteMapResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyFlowLogAttributeRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyFlowLogAttributeResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\PublishRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\PublishRouteEntriesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ResolveAndRouteServiceInCenRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ResolveAndRouteServiceInCenResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RoutePrivateZoneInCenToVpcRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\RoutePrivateZoneInCenToVpcResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\SetCenInterRegionBandwidthLimitRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\SetCenInterRegionBandwidthLimitResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\TempUpgradeCenBandwidthPackageSpecRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\TempUpgradeCenBandwidthPackageSpecResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UnassociateCenBandwidthPackageRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UnassociateCenBandwidthPackageResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UnroutePrivateZoneInCenToVpcRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UnroutePrivateZoneInCenToVpcResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Cbn\V20170912\Models\WithdrawPublishedRouteEntriesRequest;
use AlibabaCloud\SDK\Cbn\V20170912\Models\WithdrawPublishedRouteEntriesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Cbn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'cbn.aliyuncs.com',
            'cn-beijing'                  => 'cbn.aliyuncs.com',
            'cn-chengdu'                  => 'cbn.aliyuncs.com',
            'cn-zhangjiakou'              => 'cbn.aliyuncs.com',
            'cn-huhehaote'                => 'cbn.aliyuncs.com',
            'cn-hangzhou'                 => 'cbn.aliyuncs.com',
            'cn-shanghai'                 => 'cbn.aliyuncs.com',
            'cn-shenzhen'                 => 'cbn.aliyuncs.com',
            'cn-heyuan'                   => 'cbn.aliyuncs.com',
            'cn-wulanchabu'               => 'cbn.aliyuncs.com',
            'cn-hongkong'                 => 'cbn.aliyuncs.com',
            'ap-southeast-1'              => 'cbn.aliyuncs.com',
            'ap-southeast-2'              => 'cbn.aliyuncs.com',
            'ap-southeast-3'              => 'cbn.aliyuncs.com',
            'ap-southeast-5'              => 'cbn.aliyuncs.com',
            'ap-northeast-1'              => 'cbn.aliyuncs.com',
            'eu-west-1'                   => 'cbn.aliyuncs.com',
            'us-west-1'                   => 'cbn.aliyuncs.com',
            'us-east-1'                   => 'cbn.aliyuncs.com',
            'eu-central-1'                => 'cbn.aliyuncs.com',
            'me-east-1'                   => 'cbn.aliyuncs.com',
            'ap-south-1'                  => 'cbn.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'cbn.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'cbn.aliyuncs.com',
            'cn-north-2-gov-1'            => 'cbn.aliyuncs.com',
            'ap-northeast-2-pop'          => 'cbn.aliyuncs.com',
            'cn-beijing-finance-1'        => 'cbn.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cbn.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cbn.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cbn.aliyuncs.com',
            'cn-edge-1'                   => 'cbn.aliyuncs.com',
            'cn-fujian'                   => 'cbn.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cbn.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cbn.aliyuncs.com',
            'cn-hangzhou-finance'         => 'cbn.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cbn.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cbn.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cbn.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cbn.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cbn.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cbn.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'cbn.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cbn.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cbn.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cbn.aliyuncs.com',
            'cn-shanghai-inner'           => 'cbn.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cbn.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cbn.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cbn.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cbn.aliyuncs.com',
            'cn-wuhan'                    => 'cbn.aliyuncs.com',
            'cn-yushanfang'               => 'cbn.aliyuncs.com',
            'cn-zhangbei'                 => 'cbn.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cbn.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cbn.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cbn.aliyuncs.com',
            'eu-west-1-oxs'               => 'cbn.aliyuncs.com',
            'rus-west-1-pop'              => 'cbn-share.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cbn', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActiveFlowLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ActiveFlowLogResponse
     */
    public function activeFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActiveFlowLogResponse::fromMap($this->doRPCRequest('ActiveFlowLog', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ActiveFlowLogRequest $request
     *
     * @return ActiveFlowLogResponse
     */
    public function activeFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeFlowLogWithOptions($request, $runtime);
    }

    /**
     * @param AssociateCenBandwidthPackageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AssociateCenBandwidthPackageResponse
     */
    public function associateCenBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateCenBandwidthPackageResponse::fromMap($this->doRPCRequest('AssociateCenBandwidthPackage', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateCenBandwidthPackageRequest $request
     *
     * @return AssociateCenBandwidthPackageResponse
     */
    public function associateCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param AttachCenChildInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AttachCenChildInstanceResponse
     */
    public function attachCenChildInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachCenChildInstanceResponse::fromMap($this->doRPCRequest('AttachCenChildInstance', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachCenChildInstanceRequest $request
     *
     * @return AttachCenChildInstanceResponse
     */
    public function attachCenChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachCenChildInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateCenResponse
     */
    public function createCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCenResponse::fromMap($this->doRPCRequest('CreateCen', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCenRequest $request
     *
     * @return CreateCenResponse
     */
    public function createCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenWithOptions($request, $runtime);
    }

    /**
     * @param CreateCenBandwidthPackageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCenBandwidthPackageResponse
     */
    public function createCenBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCenBandwidthPackageResponse::fromMap($this->doRPCRequest('CreateCenBandwidthPackage', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCenBandwidthPackageRequest $request
     *
     * @return CreateCenBandwidthPackageResponse
     */
    public function createCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param CreateCenChildInstanceRouteEntryToCenRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return CreateCenChildInstanceRouteEntryToCenResponse
     */
    public function createCenChildInstanceRouteEntryToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCenChildInstanceRouteEntryToCenResponse::fromMap($this->doRPCRequest('CreateCenChildInstanceRouteEntryToCen', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCenChildInstanceRouteEntryToCenRequest $request
     *
     * @return CreateCenChildInstanceRouteEntryToCenResponse
     */
    public function createCenChildInstanceRouteEntryToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenChildInstanceRouteEntryToCenWithOptions($request, $runtime);
    }

    /**
     * @param CreateCenRouteMapRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCenRouteMapResponse
     */
    public function createCenRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCenRouteMapResponse::fromMap($this->doRPCRequest('CreateCenRouteMap', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCenRouteMapRequest $request
     *
     * @return CreateCenRouteMapResponse
     */
    public function createCenRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenRouteMapWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowlogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowlogResponse
     */
    public function createFlowlogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowlogResponse::fromMap($this->doRPCRequest('CreateFlowlog', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowlogRequest $request
     *
     * @return CreateFlowlogResponse
     */
    public function createFlowlog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowlogWithOptions($request, $runtime);
    }

    /**
     * @param DeactiveFlowLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeactiveFlowLogResponse
     */
    public function deactiveFlowLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeactiveFlowLogResponse::fromMap($this->doRPCRequest('DeactiveFlowLog', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeactiveFlowLogRequest $request
     *
     * @return DeactiveFlowLogResponse
     */
    public function deactiveFlowLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveFlowLogWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteCenResponse
     */
    public function deleteCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCenResponse::fromMap($this->doRPCRequest('DeleteCen', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCenRequest $request
     *
     * @return DeleteCenResponse
     */
    public function deleteCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCenBandwidthPackageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCenBandwidthPackageResponse
     */
    public function deleteCenBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCenBandwidthPackageResponse::fromMap($this->doRPCRequest('DeleteCenBandwidthPackage', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCenBandwidthPackageRequest $request
     *
     * @return DeleteCenBandwidthPackageResponse
     */
    public function deleteCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCenChildInstanceRouteEntryToCenRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DeleteCenChildInstanceRouteEntryToCenResponse
     */
    public function deleteCenChildInstanceRouteEntryToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCenChildInstanceRouteEntryToCenResponse::fromMap($this->doRPCRequest('DeleteCenChildInstanceRouteEntryToCen', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCenChildInstanceRouteEntryToCenRequest $request
     *
     * @return DeleteCenChildInstanceRouteEntryToCenResponse
     */
    public function deleteCenChildInstanceRouteEntryToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenChildInstanceRouteEntryToCenWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCenRouteMapRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCenRouteMapResponse
     */
    public function deleteCenRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCenRouteMapResponse::fromMap($this->doRPCRequest('DeleteCenRouteMap', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCenRouteMapRequest $request
     *
     * @return DeleteCenRouteMapResponse
     */
    public function deleteCenRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenRouteMapWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowlogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteFlowlogResponse
     */
    public function deleteFlowlogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowlogResponse::fromMap($this->doRPCRequest('DeleteFlowlog', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowlogRequest $request
     *
     * @return DeleteFlowlogResponse
     */
    public function deleteFlowlog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowlogWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRouteServiceInCenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteRouteServiceInCenResponse
     */
    public function deleteRouteServiceInCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRouteServiceInCenResponse::fromMap($this->doRPCRequest('DeleteRouteServiceInCen', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRouteServiceInCenRequest $request
     *
     * @return DeleteRouteServiceInCenResponse
     */
    public function deleteRouteServiceInCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRouteServiceInCenWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenAttachedChildInstanceAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeCenAttachedChildInstanceAttributeResponse
     */
    public function describeCenAttachedChildInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenAttachedChildInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeCenAttachedChildInstanceAttribute', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenAttachedChildInstanceAttributeRequest $request
     *
     * @return DescribeCenAttachedChildInstanceAttributeResponse
     */
    public function describeCenAttachedChildInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenAttachedChildInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenAttachedChildInstancesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeCenAttachedChildInstancesResponse
     */
    public function describeCenAttachedChildInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenAttachedChildInstancesResponse::fromMap($this->doRPCRequest('DescribeCenAttachedChildInstances', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenAttachedChildInstancesRequest $request
     *
     * @return DescribeCenAttachedChildInstancesResponse
     */
    public function describeCenAttachedChildInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenAttachedChildInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenBandwidthPackagesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCenBandwidthPackagesResponse
     */
    public function describeCenBandwidthPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenBandwidthPackagesResponse::fromMap($this->doRPCRequest('DescribeCenBandwidthPackages', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenBandwidthPackagesRequest $request
     *
     * @return DescribeCenBandwidthPackagesResponse
     */
    public function describeCenBandwidthPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenBandwidthPackagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenChildInstanceRouteEntriesRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeCenChildInstanceRouteEntriesResponse
     */
    public function describeCenChildInstanceRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenChildInstanceRouteEntriesResponse::fromMap($this->doRPCRequest('DescribeCenChildInstanceRouteEntries', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenChildInstanceRouteEntriesRequest $request
     *
     * @return DescribeCenChildInstanceRouteEntriesResponse
     */
    public function describeCenChildInstanceRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenChildInstanceRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenGeographicSpanRemainingBandwidthRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeCenGeographicSpanRemainingBandwidthResponse
     */
    public function describeCenGeographicSpanRemainingBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenGeographicSpanRemainingBandwidthResponse::fromMap($this->doRPCRequest('DescribeCenGeographicSpanRemainingBandwidth', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenGeographicSpanRemainingBandwidthRequest $request
     *
     * @return DescribeCenGeographicSpanRemainingBandwidthResponse
     */
    public function describeCenGeographicSpanRemainingBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenGeographicSpanRemainingBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenGeographicSpansRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCenGeographicSpansResponse
     */
    public function describeCenGeographicSpansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenGeographicSpansResponse::fromMap($this->doRPCRequest('DescribeCenGeographicSpans', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenGeographicSpansRequest $request
     *
     * @return DescribeCenGeographicSpansResponse
     */
    public function describeCenGeographicSpans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenGeographicSpansWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenInterRegionBandwidthLimitsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeCenInterRegionBandwidthLimitsResponse
     */
    public function describeCenInterRegionBandwidthLimitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenInterRegionBandwidthLimitsResponse::fromMap($this->doRPCRequest('DescribeCenInterRegionBandwidthLimits', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenInterRegionBandwidthLimitsRequest $request
     *
     * @return DescribeCenInterRegionBandwidthLimitsResponse
     */
    public function describeCenInterRegionBandwidthLimits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenInterRegionBandwidthLimitsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenPrivateZoneRoutesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCenPrivateZoneRoutesResponse
     */
    public function describeCenPrivateZoneRoutesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenPrivateZoneRoutesResponse::fromMap($this->doRPCRequest('DescribeCenPrivateZoneRoutes', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenPrivateZoneRoutesRequest $request
     *
     * @return DescribeCenPrivateZoneRoutesResponse
     */
    public function describeCenPrivateZoneRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenPrivateZoneRoutesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenRegionDomainRouteEntriesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCenRegionDomainRouteEntriesResponse
     */
    public function describeCenRegionDomainRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenRegionDomainRouteEntriesResponse::fromMap($this->doRPCRequest('DescribeCenRegionDomainRouteEntries', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenRegionDomainRouteEntriesRequest $request
     *
     * @return DescribeCenRegionDomainRouteEntriesResponse
     */
    public function describeCenRegionDomainRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenRegionDomainRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenRouteMapsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCenRouteMapsResponse
     */
    public function describeCenRouteMapsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenRouteMapsResponse::fromMap($this->doRPCRequest('DescribeCenRouteMaps', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenRouteMapsRequest $request
     *
     * @return DescribeCenRouteMapsResponse
     */
    public function describeCenRouteMaps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenRouteMapsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCensRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeCensResponse
     */
    public function describeCensWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCensResponse::fromMap($this->doRPCRequest('DescribeCens', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCensRequest $request
     *
     * @return DescribeCensResponse
     */
    public function describeCens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCensWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCenVbrHealthCheckRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCenVbrHealthCheckResponse
     */
    public function describeCenVbrHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCenVbrHealthCheckResponse::fromMap($this->doRPCRequest('DescribeCenVbrHealthCheck', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCenVbrHealthCheckRequest $request
     *
     * @return DescribeCenVbrHealthCheckResponse
     */
    public function describeCenVbrHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenVbrHealthCheckWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChildInstanceRegionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeChildInstanceRegionsResponse
     */
    public function describeChildInstanceRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeChildInstanceRegionsResponse::fromMap($this->doRPCRequest('DescribeChildInstanceRegions', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeChildInstanceRegionsRequest $request
     *
     * @return DescribeChildInstanceRegionsResponse
     */
    public function describeChildInstanceRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChildInstanceRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowlogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeFlowlogsResponse
     */
    public function describeFlowlogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowlogsResponse::fromMap($this->doRPCRequest('DescribeFlowlogs', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowlogsRequest $request
     *
     * @return DescribeFlowlogsResponse
     */
    public function describeFlowlogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowlogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGeographicRegionMembershipRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeGeographicRegionMembershipResponse
     */
    public function describeGeographicRegionMembershipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGeographicRegionMembershipResponse::fromMap($this->doRPCRequest('DescribeGeographicRegionMembership', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGeographicRegionMembershipRequest $request
     *
     * @return DescribeGeographicRegionMembershipResponse
     */
    public function describeGeographicRegionMembership($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGeographicRegionMembershipWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGrantRulesToCenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGrantRulesToCenResponse
     */
    public function describeGrantRulesToCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGrantRulesToCenResponse::fromMap($this->doRPCRequest('DescribeGrantRulesToCen', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGrantRulesToCenRequest $request
     *
     * @return DescribeGrantRulesToCenResponse
     */
    public function describeGrantRulesToCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGrantRulesToCenWithOptions($request, $runtime);
    }

    /**
     * @param DescribePublishedRouteEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePublishedRouteEntriesResponse
     */
    public function describePublishedRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePublishedRouteEntriesResponse::fromMap($this->doRPCRequest('DescribePublishedRouteEntries', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePublishedRouteEntriesRequest $request
     *
     * @return DescribePublishedRouteEntriesResponse
     */
    public function describePublishedRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePublishedRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouteConflictRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRouteConflictResponse
     */
    public function describeRouteConflictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouteConflictResponse::fromMap($this->doRPCRequest('DescribeRouteConflict', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRouteConflictRequest $request
     *
     * @return DescribeRouteConflictResponse
     */
    public function describeRouteConflict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteConflictWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRouteServicesInCenRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeRouteServicesInCenResponse
     */
    public function describeRouteServicesInCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRouteServicesInCenResponse::fromMap($this->doRPCRequest('DescribeRouteServicesInCen', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRouteServicesInCenRequest $request
     *
     * @return DescribeRouteServicesInCenResponse
     */
    public function describeRouteServicesInCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRouteServicesInCenWithOptions($request, $runtime);
    }

    /**
     * @param DetachCenChildInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetachCenChildInstanceResponse
     */
    public function detachCenChildInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachCenChildInstanceResponse::fromMap($this->doRPCRequest('DetachCenChildInstance', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachCenChildInstanceRequest $request
     *
     * @return DetachCenChildInstanceResponse
     */
    public function detachCenChildInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachCenChildInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DisableCenVbrHealthCheckRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableCenVbrHealthCheckResponse
     */
    public function disableCenVbrHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableCenVbrHealthCheckResponse::fromMap($this->doRPCRequest('DisableCenVbrHealthCheck', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableCenVbrHealthCheckRequest $request
     *
     * @return DisableCenVbrHealthCheckResponse
     */
    public function disableCenVbrHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableCenVbrHealthCheckWithOptions($request, $runtime);
    }

    /**
     * @param EnableCenVbrHealthCheckRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableCenVbrHealthCheckResponse
     */
    public function enableCenVbrHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableCenVbrHealthCheckResponse::fromMap($this->doRPCRequest('EnableCenVbrHealthCheck', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableCenVbrHealthCheckRequest $request
     *
     * @return EnableCenVbrHealthCheckResponse
     */
    public function enableCenVbrHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCenVbrHealthCheckWithOptions($request, $runtime);
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyCenAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyCenAttributeResponse
     */
    public function modifyCenAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCenAttributeResponse::fromMap($this->doRPCRequest('ModifyCenAttribute', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCenAttributeRequest $request
     *
     * @return ModifyCenAttributeResponse
     */
    public function modifyCenAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCenBandwidthPackageAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyCenBandwidthPackageAttributeResponse
     */
    public function modifyCenBandwidthPackageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCenBandwidthPackageAttributeResponse::fromMap($this->doRPCRequest('ModifyCenBandwidthPackageAttribute', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCenBandwidthPackageAttributeRequest $request
     *
     * @return ModifyCenBandwidthPackageAttributeResponse
     */
    public function modifyCenBandwidthPackageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenBandwidthPackageAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCenBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyCenBandwidthPackageSpecResponse
     */
    public function modifyCenBandwidthPackageSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCenBandwidthPackageSpecResponse::fromMap($this->doRPCRequest('ModifyCenBandwidthPackageSpec', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCenBandwidthPackageSpecRequest $request
     *
     * @return ModifyCenBandwidthPackageSpecResponse
     */
    public function modifyCenBandwidthPackageSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenBandwidthPackageSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCenRouteMapRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyCenRouteMapResponse
     */
    public function modifyCenRouteMapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCenRouteMapResponse::fromMap($this->doRPCRequest('ModifyCenRouteMap', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCenRouteMapRequest $request
     *
     * @return ModifyCenRouteMapResponse
     */
    public function modifyCenRouteMap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenRouteMapWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowLogAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowLogAttributeResponse::fromMap($this->doRPCRequest('ModifyFlowLogAttribute', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFlowLogAttributeRequest $request
     *
     * @return ModifyFlowLogAttributeResponse
     */
    public function modifyFlowLogAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowLogAttributeWithOptions($request, $runtime);
    }

    /**
     * @param PublishRouteEntriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PublishRouteEntriesResponse
     */
    public function publishRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishRouteEntriesResponse::fromMap($this->doRPCRequest('PublishRouteEntries', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PublishRouteEntriesRequest $request
     *
     * @return PublishRouteEntriesResponse
     */
    public function publishRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishRouteEntriesWithOptions($request, $runtime);
    }

    /**
     * @param ResolveAndRouteServiceInCenRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ResolveAndRouteServiceInCenResponse
     */
    public function resolveAndRouteServiceInCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResolveAndRouteServiceInCenResponse::fromMap($this->doRPCRequest('ResolveAndRouteServiceInCen', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResolveAndRouteServiceInCenRequest $request
     *
     * @return ResolveAndRouteServiceInCenResponse
     */
    public function resolveAndRouteServiceInCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resolveAndRouteServiceInCenWithOptions($request, $runtime);
    }

    /**
     * @param RoutePrivateZoneInCenToVpcRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RoutePrivateZoneInCenToVpcResponse
     */
    public function routePrivateZoneInCenToVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RoutePrivateZoneInCenToVpcResponse::fromMap($this->doRPCRequest('RoutePrivateZoneInCenToVpc', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RoutePrivateZoneInCenToVpcRequest $request
     *
     * @return RoutePrivateZoneInCenToVpcResponse
     */
    public function routePrivateZoneInCenToVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->routePrivateZoneInCenToVpcWithOptions($request, $runtime);
    }

    /**
     * @param SetCenInterRegionBandwidthLimitRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetCenInterRegionBandwidthLimitResponse
     */
    public function setCenInterRegionBandwidthLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetCenInterRegionBandwidthLimitResponse::fromMap($this->doRPCRequest('SetCenInterRegionBandwidthLimit', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetCenInterRegionBandwidthLimitRequest $request
     *
     * @return SetCenInterRegionBandwidthLimitResponse
     */
    public function setCenInterRegionBandwidthLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCenInterRegionBandwidthLimitWithOptions($request, $runtime);
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

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TempUpgradeCenBandwidthPackageSpecRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return TempUpgradeCenBandwidthPackageSpecResponse
     */
    public function tempUpgradeCenBandwidthPackageSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TempUpgradeCenBandwidthPackageSpecResponse::fromMap($this->doRPCRequest('TempUpgradeCenBandwidthPackageSpec', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TempUpgradeCenBandwidthPackageSpecRequest $request
     *
     * @return TempUpgradeCenBandwidthPackageSpecResponse
     */
    public function tempUpgradeCenBandwidthPackageSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempUpgradeCenBandwidthPackageSpecWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateCenBandwidthPackageRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UnassociateCenBandwidthPackageResponse
     */
    public function unassociateCenBandwidthPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnassociateCenBandwidthPackageResponse::fromMap($this->doRPCRequest('UnassociateCenBandwidthPackage', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnassociateCenBandwidthPackageRequest $request
     *
     * @return UnassociateCenBandwidthPackageResponse
     */
    public function unassociateCenBandwidthPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateCenBandwidthPackageWithOptions($request, $runtime);
    }

    /**
     * @param UnroutePrivateZoneInCenToVpcRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnroutePrivateZoneInCenToVpcResponse
     */
    public function unroutePrivateZoneInCenToVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnroutePrivateZoneInCenToVpcResponse::fromMap($this->doRPCRequest('UnroutePrivateZoneInCenToVpc', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnroutePrivateZoneInCenToVpcRequest $request
     *
     * @return UnroutePrivateZoneInCenToVpcResponse
     */
    public function unroutePrivateZoneInCenToVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unroutePrivateZoneInCenToVpcWithOptions($request, $runtime);
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

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param WithdrawPublishedRouteEntriesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return WithdrawPublishedRouteEntriesResponse
     */
    public function withdrawPublishedRouteEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return WithdrawPublishedRouteEntriesResponse::fromMap($this->doRPCRequest('WithdrawPublishedRouteEntries', '2017-09-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param WithdrawPublishedRouteEntriesRequest $request
     *
     * @return WithdrawPublishedRouteEntriesResponse
     */
    public function withdrawPublishedRouteEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawPublishedRouteEntriesWithOptions($request, $runtime);
    }
}
