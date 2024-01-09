<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Hdr\V20170925\Models\ChangeRecoveryPointRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\ChangeRecoveryPointResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\CommitFailoverRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\CommitFailoverResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\CreateRecoveryPlanRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\CreateRecoveryPlanResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\CreateSitePairRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\CreateSitePairResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DeleteRecoveryPlanRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DeleteRecoveryPlanResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DeleteSitePairRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DeleteSitePairResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeAvailableInstanceTypesRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeAvailableInstanceTypesResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeInfrastructuresRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeInfrastructuresResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPlanRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPlanResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPlansRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPlansResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPointsRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPointsResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeServerRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeServerResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeServersRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeServersResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairsRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairsResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairStatisticsRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairStatisticsResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSiteRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSiteResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSummaryResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeTaskRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeTaskResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DisableReplicationRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DisableReplicationResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\EnableReplicationRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\EnableReplicationResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\FailbackRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\FailbackResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\ForcedFailoverRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\ForcedFailoverResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\RegisterServersRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\RegisterServersResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\ReversedDisableReplicationRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\ReversedDisableReplicationResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\ReversedEnableReplicationRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\ReversedEnableReplicationResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\TestCleanupRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\TestCleanupResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\TestFailoverRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\TestFailoverResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\TriggerReversedRegisterRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\TriggerReversedRegisterResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\UnregisterServerRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\UnregisterServerResponse;
use AlibabaCloud\SDK\Hdr\V20170925\Models\UpdateRecoveryPlanRequest;
use AlibabaCloud\SDK\Hdr\V20170925\Models\UpdateRecoveryPlanResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Hdr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hdr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ChangeRecoveryPointRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeRecoveryPointResponse
     */
    public function changeRecoveryPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eipAddressId)) {
            $query['EipAddressId'] = $request->eipAddressId;
        }
        if (!Utils::isUnset($request->recoveryCpu)) {
            $query['RecoveryCpu'] = $request->recoveryCpu;
        }
        if (!Utils::isUnset($request->recoveryEssdPerformanceLevel)) {
            $query['RecoveryEssdPerformanceLevel'] = $request->recoveryEssdPerformanceLevel;
        }
        if (!Utils::isUnset($request->recoveryInstanceName)) {
            $query['RecoveryInstanceName'] = $request->recoveryInstanceName;
        }
        if (!Utils::isUnset($request->recoveryInstanceType)) {
            $query['RecoveryInstanceType'] = $request->recoveryInstanceType;
        }
        if (!Utils::isUnset($request->recoveryIpAddress)) {
            $query['RecoveryIpAddress'] = $request->recoveryIpAddress;
        }
        if (!Utils::isUnset($request->recoveryMemory)) {
            $query['RecoveryMemory'] = $request->recoveryMemory;
        }
        if (!Utils::isUnset($request->recoveryNetwork)) {
            $query['RecoveryNetwork'] = $request->recoveryNetwork;
        }
        if (!Utils::isUnset($request->recoveryPointId)) {
            $query['RecoveryPointId'] = $request->recoveryPointId;
        }
        if (!Utils::isUnset($request->recoveryPointTime)) {
            $query['RecoveryPointTime'] = $request->recoveryPointTime;
        }
        if (!Utils::isUnset($request->recoveryPostScriptContent)) {
            $query['RecoveryPostScriptContent'] = $request->recoveryPostScriptContent;
        }
        if (!Utils::isUnset($request->recoveryPostScriptType)) {
            $query['RecoveryPostScriptType'] = $request->recoveryPostScriptType;
        }
        if (!Utils::isUnset($request->recoveryReserveIp)) {
            $query['RecoveryReserveIp'] = $request->recoveryReserveIp;
        }
        if (!Utils::isUnset($request->recoveryUseDhcp)) {
            $query['RecoveryUseDhcp'] = $request->recoveryUseDhcp;
        }
        if (!Utils::isUnset($request->recoveryUseEssd)) {
            $query['RecoveryUseEssd'] = $request->recoveryUseEssd;
        }
        if (!Utils::isUnset($request->recoveryUseSsd)) {
            $query['RecoveryUseSsd'] = $request->recoveryUseSsd;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeRecoveryPoint',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeRecoveryPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeRecoveryPointRequest $request
     *
     * @return ChangeRecoveryPointResponse
     */
    public function changeRecoveryPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeRecoveryPointWithOptions($request, $runtime);
    }

    /**
     * @param CommitFailoverRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CommitFailoverResponse
     */
    public function commitFailoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CommitFailover',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommitFailoverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommitFailoverRequest $request
     *
     * @return CommitFailoverResponse
     */
    public function commitFailover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitFailoverWithOptions($request, $runtime);
    }

    /**
     * @param CreateRecoveryPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRecoveryPlanResponse
     */
    public function createRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sitePairId)) {
            $query['SitePairId'] = $request->sitePairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRecoveryPlan',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRecoveryPlanRequest $request
     *
     * @return CreateRecoveryPlanResponse
     */
    public function createRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateSitePairRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSitePairResponse
     */
    public function createSitePairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->primarySiteName)) {
            $query['PrimarySiteName'] = $request->primarySiteName;
        }
        if (!Utils::isUnset($request->primarySiteRegionId)) {
            $query['PrimarySiteRegionId'] = $request->primarySiteRegionId;
        }
        if (!Utils::isUnset($request->primarySiteType)) {
            $query['PrimarySiteType'] = $request->primarySiteType;
        }
        if (!Utils::isUnset($request->primarySiteVpcId)) {
            $query['PrimarySiteVpcId'] = $request->primarySiteVpcId;
        }
        if (!Utils::isUnset($request->primarySiteZoneId)) {
            $query['PrimarySiteZoneId'] = $request->primarySiteZoneId;
        }
        if (!Utils::isUnset($request->secondarySiteName)) {
            $query['SecondarySiteName'] = $request->secondarySiteName;
        }
        if (!Utils::isUnset($request->secondarySiteRegionId)) {
            $query['SecondarySiteRegionId'] = $request->secondarySiteRegionId;
        }
        if (!Utils::isUnset($request->secondarySiteType)) {
            $query['SecondarySiteType'] = $request->secondarySiteType;
        }
        if (!Utils::isUnset($request->secondarySiteVpcId)) {
            $query['SecondarySiteVpcId'] = $request->secondarySiteVpcId;
        }
        if (!Utils::isUnset($request->secondarySiteZoneId)) {
            $query['SecondarySiteZoneId'] = $request->secondarySiteZoneId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sitePairType)) {
            $query['SitePairType'] = $request->sitePairType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSitePair',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSitePairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSitePairRequest $request
     *
     * @return CreateSitePairResponse
     */
    public function createSitePair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSitePairWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRecoveryPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRecoveryPlanResponse
     */
    public function deleteRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recoveryPlanId)) {
            $query['RecoveryPlanId'] = $request->recoveryPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRecoveryPlan',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRecoveryPlanRequest $request
     *
     * @return DeleteRecoveryPlanResponse
     */
    public function deleteRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSitePairRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSitePairResponse
     */
    public function deleteSitePairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sitePairId)) {
            $query['SitePairId'] = $request->sitePairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSitePair',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSitePairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSitePairRequest $request
     *
     * @return DeleteSitePairResponse
     */
    public function deleteSitePair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSitePairWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableInstanceTypesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAvailableInstanceTypesResponse
     */
    public function describeAvailableInstanceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->network)) {
            $query['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->userClient)) {
            $query['UserClient'] = $request->userClient;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableInstanceTypes',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableInstanceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableInstanceTypesRequest $request
     *
     * @return DescribeAvailableInstanceTypesResponse
     */
    public function describeAvailableInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInfrastructuresRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInfrastructuresResponse
     */
    public function describeInfrastructuresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInfrastructures',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInfrastructuresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInfrastructuresRequest $request
     *
     * @return DescribeInfrastructuresResponse
     */
    public function describeInfrastructures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInfrastructuresWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecoveryPlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRecoveryPlanResponse
     */
    public function describeRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recoveryPlanId)) {
            $query['RecoveryPlanId'] = $request->recoveryPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecoveryPlan',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecoveryPlanRequest $request
     *
     * @return DescribeRecoveryPlanResponse
     */
    public function describeRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecoveryPlansRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRecoveryPlansResponse
     */
    public function describeRecoveryPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sitePairId)) {
            $query['SitePairId'] = $request->sitePairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecoveryPlans',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecoveryPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecoveryPlansRequest $request
     *
     * @return DescribeRecoveryPlansResponse
     */
    public function describeRecoveryPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecoveryPlansWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecoveryPointsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRecoveryPointsResponse
     */
    public function describeRecoveryPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecoveryPoints',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecoveryPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecoveryPointsRequest $request
     *
     * @return DescribeRecoveryPointsResponse
     */
    public function describeRecoveryPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecoveryPointsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeServerResponse
     */
    public function describeServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServer',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServerRequest $request
     *
     * @return DescribeServerResponse
     */
    public function describeServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeServersResponse
     */
    public function describeServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverIds)) {
            $query['ServerIds'] = $request->serverIds;
        }
        if (!Utils::isUnset($request->sitePairId)) {
            $query['SitePairId'] = $request->sitePairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServers',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServersRequest $request
     *
     * @return DescribeServersResponse
     */
    public function describeServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSiteRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeSiteResponse
     */
    public function describeSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSite',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSiteRequest $request
     *
     * @return DescribeSiteResponse
     */
    public function describeSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSitePairRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSitePairResponse
     */
    public function describeSitePairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sitePairId)) {
            $query['SitePairId'] = $request->sitePairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSitePair',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSitePairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSitePairRequest $request
     *
     * @return DescribeSitePairResponse
     */
    public function describeSitePair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSitePairWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSitePairStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSitePairStatisticsResponse
     */
    public function describeSitePairStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sitePairId)) {
            $query['SitePairId'] = $request->sitePairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSitePairStatistics',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSitePairStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSitePairStatisticsRequest $request
     *
     * @return DescribeSitePairStatisticsResponse
     */
    public function describeSitePairStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSitePairStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSitePairsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSitePairsResponse
     */
    public function describeSitePairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sitePairType)) {
            $query['SitePairType'] = $request->sitePairType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSitePairs',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSitePairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSitePairsRequest $request
     *
     * @return DescribeSitePairsResponse
     */
    public function describeSitePairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSitePairsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSummaryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSummaryResponse
     */
    public function describeSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSummary',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSummaryRequest $request
     *
     * @return DescribeSummaryResponse
     */
    public function describeSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTaskResponse
     */
    public function describeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTask',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTaskRequest $request
     *
     * @return DescribeTaskResponse
     */
    public function describeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sitePairId)) {
            $query['SitePairId'] = $request->sitePairId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTasksRequest $request
     *
     * @return DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
    }

    /**
     * @param DisableReplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DisableReplicationResponse
     */
    public function disableReplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableReplication',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableReplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableReplicationRequest $request
     *
     * @return DisableReplicationResponse
     */
    public function disableReplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableReplicationWithOptions($request, $runtime);
    }

    /**
     * @param EnableReplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableReplicationResponse
     */
    public function enableReplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->crashConsistentPointPolicy)) {
            $query['CrashConsistentPointPolicy'] = $request->crashConsistentPointPolicy;
        }
        if (!Utils::isUnset($request->recoveryNetwork)) {
            $query['RecoveryNetwork'] = $request->recoveryNetwork;
        }
        if (!Utils::isUnset($request->replicationNetwork)) {
            $query['ReplicationNetwork'] = $request->replicationNetwork;
        }
        if (!Utils::isUnset($request->replicationUseEssd)) {
            $query['ReplicationUseEssd'] = $request->replicationUseEssd;
        }
        if (!Utils::isUnset($request->replicationUseSsd)) {
            $query['ReplicationUseSsd'] = $request->replicationUseSsd;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableReplication',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableReplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableReplicationRequest $request
     *
     * @return EnableReplicationResponse
     */
    public function enableReplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableReplicationWithOptions($request, $runtime);
    }

    /**
     * @param FailbackRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return FailbackResponse
     */
    public function failbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recoveryCpu)) {
            $query['RecoveryCpu'] = $request->recoveryCpu;
        }
        if (!Utils::isUnset($request->recoveryInfrastructureId)) {
            $query['RecoveryInfrastructureId'] = $request->recoveryInfrastructureId;
        }
        if (!Utils::isUnset($request->recoveryInstanceName)) {
            $query['RecoveryInstanceName'] = $request->recoveryInstanceName;
        }
        if (!Utils::isUnset($request->recoveryInstanceType)) {
            $query['RecoveryInstanceType'] = $request->recoveryInstanceType;
        }
        if (!Utils::isUnset($request->recoveryIpAddress)) {
            $query['RecoveryIpAddress'] = $request->recoveryIpAddress;
        }
        if (!Utils::isUnset($request->recoveryMemory)) {
            $query['RecoveryMemory'] = $request->recoveryMemory;
        }
        if (!Utils::isUnset($request->recoveryNetwork)) {
            $query['RecoveryNetwork'] = $request->recoveryNetwork;
        }
        if (!Utils::isUnset($request->recoveryPointId)) {
            $query['RecoveryPointId'] = $request->recoveryPointId;
        }
        if (!Utils::isUnset($request->recoveryPostScriptContent)) {
            $query['RecoveryPostScriptContent'] = $request->recoveryPostScriptContent;
        }
        if (!Utils::isUnset($request->recoveryPostScriptType)) {
            $query['RecoveryPostScriptType'] = $request->recoveryPostScriptType;
        }
        if (!Utils::isUnset($request->recoveryReserveIp)) {
            $query['RecoveryReserveIp'] = $request->recoveryReserveIp;
        }
        if (!Utils::isUnset($request->recoveryUseDhcp)) {
            $query['RecoveryUseDhcp'] = $request->recoveryUseDhcp;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Failback',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FailbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FailbackRequest $request
     *
     * @return FailbackResponse
     */
    public function failback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failbackWithOptions($request, $runtime);
    }

    /**
     * @param ForcedFailoverRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ForcedFailoverResponse
     */
    public function forcedFailoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eipAddressId)) {
            $query['EipAddressId'] = $request->eipAddressId;
        }
        if (!Utils::isUnset($request->recoveryCpu)) {
            $query['RecoveryCpu'] = $request->recoveryCpu;
        }
        if (!Utils::isUnset($request->recoveryEssdPerformanceLevel)) {
            $query['RecoveryEssdPerformanceLevel'] = $request->recoveryEssdPerformanceLevel;
        }
        if (!Utils::isUnset($request->recoveryInstanceName)) {
            $query['RecoveryInstanceName'] = $request->recoveryInstanceName;
        }
        if (!Utils::isUnset($request->recoveryInstanceType)) {
            $query['RecoveryInstanceType'] = $request->recoveryInstanceType;
        }
        if (!Utils::isUnset($request->recoveryIpAddress)) {
            $query['RecoveryIpAddress'] = $request->recoveryIpAddress;
        }
        if (!Utils::isUnset($request->recoveryMemory)) {
            $query['RecoveryMemory'] = $request->recoveryMemory;
        }
        if (!Utils::isUnset($request->recoveryNetwork)) {
            $query['RecoveryNetwork'] = $request->recoveryNetwork;
        }
        if (!Utils::isUnset($request->recoveryPointId)) {
            $query['RecoveryPointId'] = $request->recoveryPointId;
        }
        if (!Utils::isUnset($request->recoveryPointTime)) {
            $query['RecoveryPointTime'] = $request->recoveryPointTime;
        }
        if (!Utils::isUnset($request->recoveryPostScriptContent)) {
            $query['RecoveryPostScriptContent'] = $request->recoveryPostScriptContent;
        }
        if (!Utils::isUnset($request->recoveryPostScriptType)) {
            $query['RecoveryPostScriptType'] = $request->recoveryPostScriptType;
        }
        if (!Utils::isUnset($request->recoveryReserveIp)) {
            $query['RecoveryReserveIp'] = $request->recoveryReserveIp;
        }
        if (!Utils::isUnset($request->recoveryUseDhcp)) {
            $query['RecoveryUseDhcp'] = $request->recoveryUseDhcp;
        }
        if (!Utils::isUnset($request->recoveryUseEssd)) {
            $query['RecoveryUseEssd'] = $request->recoveryUseEssd;
        }
        if (!Utils::isUnset($request->recoveryUseSsd)) {
            $query['RecoveryUseSsd'] = $request->recoveryUseSsd;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ForcedFailover',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ForcedFailoverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ForcedFailoverRequest $request
     *
     * @return ForcedFailoverResponse
     */
    public function forcedFailover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forcedFailoverWithOptions($request, $runtime);
    }

    /**
     * @param RegisterServersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterServersResponse
     */
    public function registerServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentPort)) {
            $query['AgentPort'] = $request->agentPort;
        }
        if (!Utils::isUnset($request->serverInstancesInfo)) {
            $query['ServerInstancesInfo'] = $request->serverInstancesInfo;
        }
        if (!Utils::isUnset($request->sitePairId)) {
            $query['SitePairId'] = $request->sitePairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterServers',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterServersRequest $request
     *
     * @return RegisterServersResponse
     */
    public function registerServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerServersWithOptions($request, $runtime);
    }

    /**
     * @param ReversedDisableReplicationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ReversedDisableReplicationResponse
     */
    public function reversedDisableReplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReversedDisableReplication',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReversedDisableReplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReversedDisableReplicationRequest $request
     *
     * @return ReversedDisableReplicationResponse
     */
    public function reversedDisableReplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reversedDisableReplicationWithOptions($request, $runtime);
    }

    /**
     * @param ReversedEnableReplicationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ReversedEnableReplicationResponse
     */
    public function reversedEnableReplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appConsistentPointPolicy)) {
            $query['AppConsistentPointPolicy'] = $request->appConsistentPointPolicy;
        }
        if (!Utils::isUnset($request->crashConsistentPointPolicy)) {
            $query['CrashConsistentPointPolicy'] = $request->crashConsistentPointPolicy;
        }
        if (!Utils::isUnset($request->recoveryNetwork)) {
            $query['RecoveryNetwork'] = $request->recoveryNetwork;
        }
        if (!Utils::isUnset($request->replicationComputeResource)) {
            $query['ReplicationComputeResource'] = $request->replicationComputeResource;
        }
        if (!Utils::isUnset($request->replicationDatastore)) {
            $query['ReplicationDatastore'] = $request->replicationDatastore;
        }
        if (!Utils::isUnset($request->replicationDns)) {
            $query['ReplicationDns'] = $request->replicationDns;
        }
        if (!Utils::isUnset($request->replicationGateway)) {
            $query['ReplicationGateway'] = $request->replicationGateway;
        }
        if (!Utils::isUnset($request->replicationInfrastructureId)) {
            $query['ReplicationInfrastructureId'] = $request->replicationInfrastructureId;
        }
        if (!Utils::isUnset($request->replicationIpAddress)) {
            $query['ReplicationIpAddress'] = $request->replicationIpAddress;
        }
        if (!Utils::isUnset($request->replicationLocation)) {
            $query['ReplicationLocation'] = $request->replicationLocation;
        }
        if (!Utils::isUnset($request->replicationNetMask)) {
            $query['ReplicationNetMask'] = $request->replicationNetMask;
        }
        if (!Utils::isUnset($request->replicationNetwork)) {
            $query['ReplicationNetwork'] = $request->replicationNetwork;
        }
        if (!Utils::isUnset($request->replicationUseDhcp)) {
            $query['ReplicationUseDhcp'] = $request->replicationUseDhcp;
        }
        if (!Utils::isUnset($request->replicationUseOriginalInstance)) {
            $query['ReplicationUseOriginalInstance'] = $request->replicationUseOriginalInstance;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        if (!Utils::isUnset($request->shadowInstanceType)) {
            $query['ShadowInstanceType'] = $request->shadowInstanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReversedEnableReplication',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReversedEnableReplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReversedEnableReplicationRequest $request
     *
     * @return ReversedEnableReplicationResponse
     */
    public function reversedEnableReplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reversedEnableReplicationWithOptions($request, $runtime);
    }

    /**
     * @param TestCleanupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TestCleanupResponse
     */
    public function testCleanupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TestCleanup',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TestCleanupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TestCleanupRequest $request
     *
     * @return TestCleanupResponse
     */
    public function testCleanup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testCleanupWithOptions($request, $runtime);
    }

    /**
     * @param TestFailoverRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TestFailoverResponse
     */
    public function testFailoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eipAddressId)) {
            $query['EipAddressId'] = $request->eipAddressId;
        }
        if (!Utils::isUnset($request->recoveryCpu)) {
            $query['RecoveryCpu'] = $request->recoveryCpu;
        }
        if (!Utils::isUnset($request->recoveryEssdPerformanceLevel)) {
            $query['RecoveryEssdPerformanceLevel'] = $request->recoveryEssdPerformanceLevel;
        }
        if (!Utils::isUnset($request->recoveryInstanceName)) {
            $query['RecoveryInstanceName'] = $request->recoveryInstanceName;
        }
        if (!Utils::isUnset($request->recoveryInstanceType)) {
            $query['RecoveryInstanceType'] = $request->recoveryInstanceType;
        }
        if (!Utils::isUnset($request->recoveryIpAddress)) {
            $query['RecoveryIpAddress'] = $request->recoveryIpAddress;
        }
        if (!Utils::isUnset($request->recoveryMemory)) {
            $query['RecoveryMemory'] = $request->recoveryMemory;
        }
        if (!Utils::isUnset($request->recoveryNetwork)) {
            $query['RecoveryNetwork'] = $request->recoveryNetwork;
        }
        if (!Utils::isUnset($request->recoveryPointId)) {
            $query['RecoveryPointId'] = $request->recoveryPointId;
        }
        if (!Utils::isUnset($request->recoveryPointTime)) {
            $query['RecoveryPointTime'] = $request->recoveryPointTime;
        }
        if (!Utils::isUnset($request->recoveryPostScriptContent)) {
            $query['RecoveryPostScriptContent'] = $request->recoveryPostScriptContent;
        }
        if (!Utils::isUnset($request->recoveryPostScriptType)) {
            $query['RecoveryPostScriptType'] = $request->recoveryPostScriptType;
        }
        if (!Utils::isUnset($request->recoveryReserveIp)) {
            $query['RecoveryReserveIp'] = $request->recoveryReserveIp;
        }
        if (!Utils::isUnset($request->recoveryUseDhcp)) {
            $query['RecoveryUseDhcp'] = $request->recoveryUseDhcp;
        }
        if (!Utils::isUnset($request->recoveryUseEssd)) {
            $query['RecoveryUseEssd'] = $request->recoveryUseEssd;
        }
        if (!Utils::isUnset($request->recoveryUseSsd)) {
            $query['RecoveryUseSsd'] = $request->recoveryUseSsd;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TestFailover',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TestFailoverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TestFailoverRequest $request
     *
     * @return TestFailoverResponse
     */
    public function testFailover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testFailoverWithOptions($request, $runtime);
    }

    /**
     * @param TriggerReversedRegisterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return TriggerReversedRegisterResponse
     */
    public function triggerReversedRegisterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TriggerReversedRegister',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerReversedRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TriggerReversedRegisterRequest $request
     *
     * @return TriggerReversedRegisterResponse
     */
    public function triggerReversedRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerReversedRegisterWithOptions($request, $runtime);
    }

    /**
     * @param UnregisterServerRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnregisterServerResponse
     */
    public function unregisterServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnregisterServer',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnregisterServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnregisterServerRequest $request
     *
     * @return UnregisterServerResponse
     */
    public function unregisterServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unregisterServerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRecoveryPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateRecoveryPlanResponse
     */
    public function updateRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->recoveryPlanId)) {
            $query['RecoveryPlanId'] = $request->recoveryPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRecoveryPlan',
            'version'     => '2017-09-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRecoveryPlanRequest $request
     *
     * @return UpdateRecoveryPlanResponse
     */
    public function updateRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecoveryPlanWithOptions($request, $runtime);
    }
}
