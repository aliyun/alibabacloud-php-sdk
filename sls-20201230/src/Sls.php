<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sls\V20201230\Models\ApplyConfigToMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupHeartBeatRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupHeartBeatResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupUpdateCheckPointRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupUpdateCheckPointResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAlertRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAnnotationDataSetRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAnnotationDataSetResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAnnotationLabelRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAnnotationLabelResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDashboardRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDashboardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateETLRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLoggingRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogtailPipelineConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogtailPipelineConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSHDFSExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSIngestionRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateRdsExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateRdsExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateScheduledSQLRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateScheduledSQLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSqlInstanceRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSqlInstanceResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateStoreViewRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateStoreViewResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAnnotationDataResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAnnotationDataSetResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAnnotationLabelResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteCollectionPolicyRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteCollectionPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteDashboardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLogtailPipelineConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteScheduledSQLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteShipperResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteStoreViewResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DisableAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DisableScheduledSQLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\EnableAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\EnableScheduledSQLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAnnotationDataResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAnnotationDataSetResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAnnotationLabelResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAppliedConfigsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAppliedMachineGroupsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCheckPointRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCheckPointResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCollectionPolicyRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCollectionPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetDashboardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogStoreMeteringModeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2Headers;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2Request;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2Response;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogtailPipelineConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetMetricStoreMeteringModeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetMLServiceResultsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetMLServiceResultsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetScheduledSQLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetShipperStatusRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetShipperStatusResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetSlsServiceResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetSqlInstanceResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetStoreViewIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetStoreViewResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAlertsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAlertsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAnnotationDataRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAnnotationDataResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAnnotationDataSetsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAnnotationDataSetsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAnnotationLabelsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAnnotationLabelsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesShrinkRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDashboardRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDashboardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListETLsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListETLsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogStoresRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogStoresResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogtailPipelineConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogtailPipelineConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachinesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachinesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListOSSExportsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListOSSExportsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListOSSHDFSExportsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListOSSHDFSExportsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListOSSIngestionsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListOSSIngestionsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListScheduledSQLsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListScheduledSQLsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListShardsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListShipperResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListStoreViewsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListStoreViewsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\MergeShardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\OpenSlsServiceResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutAnnotationDataRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutAnnotationDataResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectPolicyRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectTransferAccelerationRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectTransferAccelerationResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutWebtrackingRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutWebtrackingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\QueryMLServiceResultsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\QueryMLServiceResultsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\RefreshTokenRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\RefreshTokenResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\RemoveConfigFromMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StartETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StartOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StartOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StartOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StopETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StopOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StopOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StopOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAlertRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAnnotationDataSetRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAnnotationDataSetResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAnnotationLabelRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAnnotationLabelResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateDashboardRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateDashboardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateETLRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLoggingRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreMeteringModeRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreMeteringModeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogtailPipelineConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogtailPipelineConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupMachineRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupMachineResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMetricStoreMeteringModeRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMetricStoreMeteringModeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOssExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOssExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSHDFSExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSIngestionRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateRdsExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateRdsExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateScheduledSQLRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateScheduledSQLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateSqlInstanceRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateSqlInstanceResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateStoreViewRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateStoreViewResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpsertCollectionPolicyRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpsertCollectionPolicyResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewaySls\Client as DarabonbaGatewaySlsClient;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sls extends OpenApiClient
{
    protected $_client;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->_client             = new DarabonbaGatewaySlsClient();
        $this->_spi                = $this->_client;
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'central';
    }

    /**
     * @summary Applies a Logtail configuration to a machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $machineGroup
     * @param string         $configName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return ApplyConfigToMachineGroupResponse ApplyConfigToMachineGroupResponse
     */
    public function applyConfigToMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ApplyConfigToMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/configs/' . $configName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ApplyConfigToMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Applies a Logtail configuration to a machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $machineGroup
     * @param string $configName
     *
     * @return ApplyConfigToMachineGroupResponse ApplyConfigToMachineGroupResponse
     */
    public function applyConfigToMachineGroup($project, $machineGroup, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyConfigToMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime);
    }

    /**
     * @summary Modifies the resource group of a resource.
     *  *
     * @param string                     $project
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resourcegroup',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the resource group of a resource.
     *  *
     * @param string                     $project
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Sends heartbeats to a server from a consumer.
     *  *
     * @description ### Usage notes
     * *   Connections between consumers and servers are established by sending heartbeats at regular intervals. If a server does not receive heartbeats from a consumer on schedule, the server deletes the consumer.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param string                        $logstore
     * @param string                        $consumerGroup
     * @param ConsumerGroupHeartBeatRequest $request       ConsumerGroupHeartBeatRequest
     * @param string[]                      $headers       map
     * @param RuntimeOptions                $runtime       runtime options for this request RuntimeOptions
     *
     * @return ConsumerGroupHeartBeatResponse ConsumerGroupHeartBeatResponse
     */
    public function consumerGroupHeartBeatWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->consumer)) {
            $query['consumer'] = $request->consumer;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'ConsumerGroupHeartBeat',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '?type=heartbeat',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ConsumerGroupHeartBeatResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Sends heartbeats to a server from a consumer.
     *  *
     * @description ### Usage notes
     * *   Connections between consumers and servers are established by sending heartbeats at regular intervals. If a server does not receive heartbeats from a consumer on schedule, the server deletes the consumer.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param string                        $logstore
     * @param string                        $consumerGroup
     * @param ConsumerGroupHeartBeatRequest $request       ConsumerGroupHeartBeatRequest
     *
     * @return ConsumerGroupHeartBeatResponse ConsumerGroupHeartBeatResponse
     */
    public function consumerGroupHeartBeat($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->consumerGroupHeartBeatWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * @summary 更新指定消费组消费数据时Shard的checkpoint。
     *  *
     * @param string                               $project
     * @param string                               $logstore
     * @param string                               $consumerGroup
     * @param ConsumerGroupUpdateCheckPointRequest $request       ConsumerGroupUpdateCheckPointRequest
     * @param string[]                             $headers       map
     * @param RuntimeOptions                       $runtime       runtime options for this request RuntimeOptions
     *
     * @return ConsumerGroupUpdateCheckPointResponse ConsumerGroupUpdateCheckPointResponse
     */
    public function consumerGroupUpdateCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->consumer)) {
            $query['consumer'] = $request->consumer;
        }
        if (!Utils::isUnset($request->forceSuccess)) {
            $query['forceSuccess'] = $request->forceSuccess;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action'      => 'ConsumerGroupUpdateCheckPoint',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '?type=checkpoint',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ConsumerGroupUpdateCheckPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新指定消费组消费数据时Shard的checkpoint。
     *  *
     * @param string                               $project
     * @param string                               $logstore
     * @param string                               $consumerGroup
     * @param ConsumerGroupUpdateCheckPointRequest $request       ConsumerGroupUpdateCheckPointRequest
     *
     * @return ConsumerGroupUpdateCheckPointResponse ConsumerGroupUpdateCheckPointResponse
     */
    public function consumerGroupUpdateCheckPoint($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->consumerGroupUpdateCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * @summary CreateAlert
     *  *
     * @param string             $project
     * @param CreateAlertRequest $request CreateAlertRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAlertResponse CreateAlertResponse
     */
    public function createAlertWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->schedule)) {
            $body['schedule'] = $request->schedule;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alerts',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary CreateAlert
     *  *
     * @param string             $project
     * @param CreateAlertRequest $request CreateAlertRequest
     *
     * @return CreateAlertResponse CreateAlertResponse
     */
    public function createAlert($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlertWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a dataset.
     *  *
     * @param CreateAnnotationDataSetRequest $request CreateAnnotationDataSetRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAnnotationDataSetResponse CreateAnnotationDataSetResponse
     */
    public function createAnnotationDataSetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['datasetId'] = $request->datasetId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateAnnotationDataSet',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationdataset',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateAnnotationDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a dataset.
     *  *
     * @param CreateAnnotationDataSetRequest $request CreateAnnotationDataSetRequest
     *
     * @return CreateAnnotationDataSetResponse CreateAnnotationDataSetResponse
     */
    public function createAnnotationDataSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAnnotationDataSetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a tag table.
     *  *
     * @param CreateAnnotationLabelRequest $request CreateAnnotationLabelRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAnnotationLabelResponse CreateAnnotationLabelResponse
     */
    public function createAnnotationLabelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateAnnotationLabel',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationlabel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateAnnotationLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a tag table.
     *  *
     * @param CreateAnnotationLabelRequest $request CreateAnnotationLabelRequest
     *
     * @return CreateAnnotationLabelResponse CreateAnnotationLabelResponse
     */
    public function createAnnotationLabel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAnnotationLabelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a Logtail configuration.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 100 Logtail configurations in a project.
     * *   The Logtail configuration is planned out. For more information, see [Logtail configurations](https://help.aliyun.com/document_detail/29058.html).
     *  *
     * @param string              $project
     * @param CreateConfigRequest $request CreateConfigRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConfigResponse CreateConfigResponse
     */
    public function createConfigWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/configs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a Logtail configuration.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 100 Logtail configurations in a project.
     * *   The Logtail configuration is planned out. For more information, see [Logtail configurations](https://help.aliyun.com/document_detail/29058.html).
     *  *
     * @param string              $project
     * @param CreateConfigRequest $request CreateConfigRequest
     *
     * @return CreateConfigResponse CreateConfigResponse
     */
    public function createConfig($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a consumer group for a Logstore.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   You can create up to 30 consumer groups for a Logstore.
     * *   Simple Log Service provides examples of both regular log consumption and consumer group-based log consumption by using Simple Log Service SDKs for Java. For more information, see [Consume log data](https://help.aliyun.com/document_detail/120035.html) and [Use consumer groups to consume data](https://help.aliyun.com/document_detail/28998.html).
     *  *
     * @param string                     $project
     * @param string                     $logstore
     * @param CreateConsumerGroupRequest $request  CreateConsumerGroupRequest
     * @param string[]                   $headers  map
     * @param RuntimeOptions             $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateConsumerGroupResponse CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->consumerGroup)) {
            $body['consumerGroup'] = $request->consumerGroup;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a consumer group for a Logstore.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   You can create up to 30 consumer groups for a Logstore.
     * *   Simple Log Service provides examples of both regular log consumption and consumer group-based log consumption by using Simple Log Service SDKs for Java. For more information, see [Consume log data](https://help.aliyun.com/document_detail/120035.html) and [Use consumer groups to consume data](https://help.aliyun.com/document_detail/28998.html).
     *  *
     * @param string                     $project
     * @param string                     $logstore
     * @param CreateConsumerGroupRequest $request  CreateConsumerGroupRequest
     *
     * @return CreateConsumerGroupResponse CreateConsumerGroupResponse
     */
    public function createConsumerGroup($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerGroupWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a dashboard.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string                 $project
     * @param CreateDashboardRequest $request CreateDashboardRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDashboardResponse CreateDashboardResponse
     */
    public function createDashboardWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateDashboard',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dashboards',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a dashboard.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string                 $project
     * @param CreateDashboardRequest $request CreateDashboardRequest
     *
     * @return CreateDashboardResponse CreateDashboardResponse
     */
    public function createDashboard($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDashboardWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Binds a new custom domain name to a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string              $project
     * @param CreateDomainRequest $request CreateDomainRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['domainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/domains',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Binds a new custom domain name to a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string              $project
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 创建数据加工任务
     *  *
     * @param string           $project
     * @param CreateETLRequest $request CreateETLRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateETLResponse CreateETLResponse
     */
    public function createETLWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateETL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etls',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建数据加工任务
     *  *
     * @param string           $project
     * @param CreateETLRequest $request CreateETLRequest
     *
     * @return CreateETLResponse CreateETLResponse
     */
    public function createETL($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createETLWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Creates indexes for a Logstore.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string             $project
     * @param string             $logstore
     * @param CreateIndexRequest $request  CreateIndexRequest
     * @param string[]           $headers  map
     * @param RuntimeOptions     $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateIndexResponse CreateIndexResponse
     */
    public function createIndexWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->keys)) {
            $body['keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->line)) {
            $body['line'] = $request->line;
        }
        if (!Utils::isUnset($request->logReduce)) {
            $body['log_reduce'] = $request->logReduce;
        }
        if (!Utils::isUnset($request->logReduceBlackList)) {
            $body['log_reduce_black_list'] = $request->logReduceBlackList;
        }
        if (!Utils::isUnset($request->logReduceWhiteList)) {
            $body['log_reduce_white_list'] = $request->logReduceWhiteList;
        }
        if (!Utils::isUnset($request->maxTextLen)) {
            $body['max_text_len'] = $request->maxTextLen;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates indexes for a Logstore.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string             $project
     * @param string             $logstore
     * @param CreateIndexRequest $request  CreateIndexRequest
     *
     * @return CreateIndexResponse CreateIndexResponse
     */
    public function createIndex($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @summary Create a Logstore
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                $project
     * @param CreateLogStoreRequest $request CreateLogStoreRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLogStoreResponse CreateLogStoreResponse
     */
    public function createLogStoreWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->appendMeta)) {
            $body['appendMeta'] = $request->appendMeta;
        }
        if (!Utils::isUnset($request->autoSplit)) {
            $body['autoSplit'] = $request->autoSplit;
        }
        if (!Utils::isUnset($request->enableTracking)) {
            $body['enable_tracking'] = $request->enableTracking;
        }
        if (!Utils::isUnset($request->encryptConf)) {
            $body['encrypt_conf'] = $request->encryptConf;
        }
        if (!Utils::isUnset($request->hotTtl)) {
            $body['hot_ttl'] = $request->hotTtl;
        }
        if (!Utils::isUnset($request->infrequentAccessTTL)) {
            $body['infrequentAccessTTL'] = $request->infrequentAccessTTL;
        }
        if (!Utils::isUnset($request->logstoreName)) {
            $body['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->maxSplitShard)) {
            $body['maxSplitShard'] = $request->maxSplitShard;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $body['shardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->telemetryType)) {
            $body['telemetryType'] = $request->telemetryType;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a Logstore
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                $project
     * @param CreateLogStoreRequest $request CreateLogStoreRequest
     *
     * @return CreateLogStoreResponse CreateLogStoreResponse
     */
    public function createLogStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLogStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Enables the service log feature for a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string               $project
     * @param CreateLoggingRequest $request CreateLoggingRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoggingResponse CreateLoggingResponse
     */
    public function createLoggingWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->loggingDetails)) {
            $body['loggingDetails'] = $request->loggingDetails;
        }
        if (!Utils::isUnset($request->loggingProject)) {
            $body['loggingProject'] = $request->loggingProject;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLogging',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logging',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables the service log feature for a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string               $project
     * @param CreateLoggingRequest $request CreateLoggingRequest
     *
     * @return CreateLoggingResponse CreateLoggingResponse
     */
    public function createLogging($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLoggingWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a Logtail pipeline configuration.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string                             $project
     * @param CreateLogtailPipelineConfigRequest $request CreateLogtailPipelineConfigRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLogtailPipelineConfigResponse CreateLogtailPipelineConfigResponse
     */
    public function createLogtailPipelineConfigWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->aggregators)) {
            $body['aggregators'] = $request->aggregators;
        }
        if (!Utils::isUnset($request->configName)) {
            $body['configName'] = $request->configName;
        }
        if (!Utils::isUnset($request->flushers)) {
            $body['flushers'] = $request->flushers;
        }
        if (!Utils::isUnset($request->global_)) {
            $body['global'] = $request->global_;
        }
        if (!Utils::isUnset($request->inputs)) {
            $body['inputs'] = $request->inputs;
        }
        if (!Utils::isUnset($request->logSample)) {
            $body['logSample'] = $request->logSample;
        }
        if (!Utils::isUnset($request->processors)) {
            $body['processors'] = $request->processors;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLogtailPipelineConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pipelineconfigs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a Logtail pipeline configuration.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string                             $project
     * @param CreateLogtailPipelineConfigRequest $request CreateLogtailPipelineConfigRequest
     *
     * @return CreateLogtailPipelineConfigResponse CreateLogtailPipelineConfigResponse
     */
    public function createLogtailPipelineConfig($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLogtailPipelineConfigWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a machine group.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                    $project
     * @param CreateMachineGroupRequest $request CreateMachineGroupRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMachineGroupResponse CreateMachineGroupResponse
     */
    public function createMachineGroupWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->groupAttribute)) {
            $body['groupAttribute'] = $request->groupAttribute;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['groupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $body['groupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->machineIdentifyType)) {
            $body['machineIdentifyType'] = $request->machineIdentifyType;
        }
        if (!Utils::isUnset($request->machineList)) {
            $body['machineList'] = $request->machineList;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a machine group.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                    $project
     * @param CreateMachineGroupRequest $request CreateMachineGroupRequest
     *
     * @return CreateMachineGroupResponse CreateMachineGroupResponse
     */
    public function createMachineGroup($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMachineGroupWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 创建OSS投递任务
     *  *
     * @param string                 $project
     * @param CreateOSSExportRequest $request CreateOSSExportRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOSSExportResponse CreateOSSExportResponse
     */
    public function createOSSExportWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOSSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossexports',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建OSS投递任务
     *  *
     * @param string                 $project
     * @param CreateOSSExportRequest $request CreateOSSExportRequest
     *
     * @return CreateOSSExportResponse CreateOSSExportResponse
     */
    public function createOSSExport($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOSSExportWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 创建OSSHDFS投递任务
     *  *
     * @param string                     $project
     * @param CreateOSSHDFSExportRequest $request CreateOSSHDFSExportRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOSSHDFSExportResponse CreateOSSHDFSExportResponse
     */
    public function createOSSHDFSExportWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOSSHDFSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/osshdfsexports',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建OSSHDFS投递任务
     *  *
     * @param string                     $project
     * @param CreateOSSHDFSExportRequest $request CreateOSSHDFSExportRequest
     *
     * @return CreateOSSHDFSExportResponse CreateOSSHDFSExportResponse
     */
    public function createOSSHDFSExport($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOSSHDFSExportWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 创建OSS导入任务
     *  *
     * @param string                    $project
     * @param CreateOSSIngestionRequest $request CreateOSSIngestionRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOSSIngestionResponse CreateOSSIngestionResponse
     */
    public function createOSSIngestionWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->schedule)) {
            $body['schedule'] = $request->schedule;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOSSIngestion',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossingestions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建OSS导入任务
     *  *
     * @param string                    $project
     * @param CreateOSSIngestionRequest $request CreateOSSIngestionRequest
     *
     * @return CreateOSSIngestionResponse CreateOSSIngestionResponse
     */
    public function createOSSIngestion($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOSSIngestionWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an Object Storage Service (OSS) external store.
     *  *
     * @description ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param CreateOssExternalStoreRequest $request CreateOssExternalStoreRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOssExternalStoreResponse CreateOssExternalStoreResponse
     */
    public function createOssExternalStoreWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $body['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->parameter)) {
            $body['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOssExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateOssExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an Object Storage Service (OSS) external store.
     *  *
     * @description ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param CreateOssExternalStoreRequest $request CreateOssExternalStoreRequest
     *
     * @return CreateOssExternalStoreResponse CreateOssExternalStoreResponse
     */
    public function createOssExternalStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOssExternalStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a project.
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataRedundancyType)) {
            $body['dataRedundancyType'] = $request->dataRedundancyType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['projectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a project.
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates an ApsaraDB RDS external store.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param CreateRdsExternalStoreRequest $request CreateRdsExternalStoreRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRdsExternalStoreResponse CreateRdsExternalStoreResponse
     */
    public function createRdsExternalStoreWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $body['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->parameter)) {
            $body['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRdsExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateRdsExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an ApsaraDB RDS external store.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param CreateRdsExternalStoreRequest $request CreateRdsExternalStoreRequest
     *
     * @return CreateRdsExternalStoreResponse CreateRdsExternalStoreResponse
     */
    public function createRdsExternalStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRdsExternalStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a saved search.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                   $project
     * @param CreateSavedSearchRequest $request CreateSavedSearchRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSavedSearchResponse CreateSavedSearchResponse
     */
    public function createSavedSearchWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->logstore)) {
            $body['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->savedsearchName)) {
            $body['savedsearchName'] = $request->savedsearchName;
        }
        if (!Utils::isUnset($request->searchQuery)) {
            $body['searchQuery'] = $request->searchQuery;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a saved search.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                   $project
     * @param CreateSavedSearchRequest $request CreateSavedSearchRequest
     *
     * @return CreateSavedSearchResponse CreateSavedSearchResponse
     */
    public function createSavedSearch($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSavedSearchWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 创建定时SQL任务
     *  *
     * @param string                    $project
     * @param CreateScheduledSQLRequest $request CreateScheduledSQLRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScheduledSQLResponse CreateScheduledSQLResponse
     */
    public function createScheduledSQLWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->schedule)) {
            $body['schedule'] = $request->schedule;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateScheduledSQL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scheduledsqls',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建定时SQL任务
     *  *
     * @param string                    $project
     * @param CreateScheduledSQLRequest $request CreateScheduledSQLRequest
     *
     * @return CreateScheduledSQLResponse CreateScheduledSQLResponse
     */
    public function createScheduledSQL($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScheduledSQLWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 创建独享sql实例
     *  *
     * @param string                   $project
     * @param CreateSqlInstanceRequest $request CreateSqlInstanceRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSqlInstanceResponse CreateSqlInstanceResponse
     */
    public function createSqlInstanceWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->cu)) {
            $body['cu'] = $request->cu;
        }
        if (!Utils::isUnset($request->useAsDefault)) {
            $body['useAsDefault'] = $request->useAsDefault;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSqlInstance',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sqlinstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateSqlInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建独享sql实例
     *  *
     * @param string                   $project
     * @param CreateSqlInstanceRequest $request CreateSqlInstanceRequest
     *
     * @return CreateSqlInstanceResponse CreateSqlInstanceResponse
     */
    public function createSqlInstance($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSqlInstanceWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 创建StoreView
     *  *
     * @param string                 $project
     * @param CreateStoreViewRequest $request CreateStoreViewRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStoreViewResponse CreateStoreViewResponse
     */
    public function createStoreViewWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        if (!Utils::isUnset($request->stores)) {
            $body['stores'] = $request->stores;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateStoreView',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/storeviews',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateStoreViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建StoreView
     *  *
     * @param string                 $project
     * @param CreateStoreViewRequest $request CreateStoreViewRequest
     *
     * @return CreateStoreViewResponse CreateStoreViewResponse
     */
    public function createStoreView($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createStoreViewWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 创建Ticket
     *  *
     * @param CreateTicketRequest $request CreateTicketRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTicketResponse CreateTicketResponse
     */
    public function createTicketWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessTokenExpirationTime)) {
            $query['accessTokenExpirationTime'] = $request->accessTokenExpirationTime;
        }
        if (!Utils::isUnset($request->expirationTime)) {
            $query['expirationTime'] = $request->expirationTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTicket',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tickets',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建Ticket
     *  *
     * @param CreateTicketRequest $request CreateTicketRequest
     *
     * @return CreateTicketResponse CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除告警
     *  *
     * @param string         $project
     * @param string         $alertName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteAlertResponse DeleteAlertResponse
     */
    public function deleteAlertWithOptions($project, $alertName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alerts/' . $alertName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除告警
     *  *
     * @param string $project
     * @param string $alertName
     *
     * @return DeleteAlertResponse DeleteAlertResponse
     */
    public function deleteAlert($project, $alertName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertWithOptions($project, $alertName, $headers, $runtime);
    }

    /**
     * @summary Removes data from a dataset.
     *  *
     * @param string         $datasetId
     * @param string         $annotationdataId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteAnnotationDataResponse DeleteAnnotationDataResponse
     */
    public function deleteAnnotationDataWithOptions($datasetId, $annotationdataId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteAnnotationData',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationdataset/' . $datasetId . '/annotationdata/' . $annotationdataId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteAnnotationDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Removes data from a dataset.
     *  *
     * @param string $datasetId
     * @param string $annotationdataId
     *
     * @return DeleteAnnotationDataResponse DeleteAnnotationDataResponse
     */
    public function deleteAnnotationData($datasetId, $annotationdataId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAnnotationDataWithOptions($datasetId, $annotationdataId, $headers, $runtime);
    }

    /**
     * @summary Deletes a dataset.
     *  *
     * @description You can delete a dataset only if no data exists in the dataset.
     *  *
     * @param string         $datasetId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteAnnotationDataSetResponse DeleteAnnotationDataSetResponse
     */
    public function deleteAnnotationDataSetWithOptions($datasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteAnnotationDataSet',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationdataset/' . $datasetId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteAnnotationDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a dataset.
     *  *
     * @description You can delete a dataset only if no data exists in the dataset.
     *  *
     * @param string $datasetId
     *
     * @return DeleteAnnotationDataSetResponse DeleteAnnotationDataSetResponse
     */
    public function deleteAnnotationDataSet($datasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAnnotationDataSetWithOptions($datasetId, $headers, $runtime);
    }

    /**
     * @summary Deletes a tag table.
     *  *
     * @description Only non-built-in tags can be deleted.
     *  *
     * @param string         $labelId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAnnotationLabelResponse DeleteAnnotationLabelResponse
     */
    public function deleteAnnotationLabelWithOptions($labelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteAnnotationLabel',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationlabel/' . $labelId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteAnnotationLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a tag table.
     *  *
     * @description Only non-built-in tags can be deleted.
     *  *
     * @param string $labelId
     *
     * @return DeleteAnnotationLabelResponse DeleteAnnotationLabelResponse
     */
    public function deleteAnnotationLabel($labelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAnnotationLabelWithOptions($labelId, $headers, $runtime);
    }

    /**
     * @summary 通过调用DeleteCollectionPolicy删除配置的日志采集规则
     *  *
     * @param string                        $policyName
     * @param DeleteCollectionPolicyRequest $request    DeleteCollectionPolicyRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteCollectionPolicyResponse DeleteCollectionPolicyResponse
     */
    public function deleteCollectionPolicyWithOptions($policyName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataCode)) {
            $query['dataCode'] = $request->dataCode;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['productCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCollectionPolicy',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/collectionpolicy/' . $policyName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCollectionPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 通过调用DeleteCollectionPolicy删除配置的日志采集规则
     *  *
     * @param string                        $policyName
     * @param DeleteCollectionPolicyRequest $request    DeleteCollectionPolicyRequest
     *
     * @return DeleteCollectionPolicyResponse DeleteCollectionPolicyResponse
     */
    public function deleteCollectionPolicy($policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCollectionPolicyWithOptions($policyName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a Logtail configuration.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   If a Logtail configuration is applied to a machine group, you cannot collect data from the machine group after you delete the Logtail configuration.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The name of the required Logtail configuration is obtained. For more information, see [ListConfig](https://help.aliyun.com/document_detail/29043.html).
     *  *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteConfigResponse DeleteConfigResponse
     */
    public function deleteConfigWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/configs/' . $configName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Logtail configuration.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   If a Logtail configuration is applied to a machine group, you cannot collect data from the machine group after you delete the Logtail configuration.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The name of the required Logtail configuration is obtained. For more information, see [ListConfig](https://help.aliyun.com/document_detail/29043.html).
     *  *
     * @param string $project
     * @param string $configName
     *
     * @return DeleteConfigResponse DeleteConfigResponse
     */
    public function deleteConfig($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * @summary Deletes a consumer group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param string         $consumerGroup
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteConsumerGroupResponse DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($project, $logstore, $consumerGroup, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a consumer group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $logstore
     * @param string $consumerGroup
     *
     * @return DeleteConsumerGroupResponse DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($project, $logstore, $consumerGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupWithOptions($project, $logstore, $consumerGroup, $headers, $runtime);
    }

    /**
     * @summary Deletes a dashboard.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string         $project
     * @param string         $dashboardName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteDashboardResponse DeleteDashboardResponse
     */
    public function deleteDashboardWithOptions($project, $dashboardName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDashboard',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dashboards/' . $dashboardName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a dashboard.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string $project
     * @param string $dashboardName
     *
     * @return DeleteDashboardResponse DeleteDashboardResponse
     */
    public function deleteDashboard($project, $dashboardName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDashboardWithOptions($project, $dashboardName, $headers, $runtime);
    }

    /**
     * @summary Deletes a custom domain name that is bound to a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $domainName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($project, $domainName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/domains/' . $domainName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a custom domain name that is bound to a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $domainName
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($project, $domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($project, $domainName, $headers, $runtime);
    }

    /**
     * @summary 删除数据加工任务
     *  *
     * @param string         $project
     * @param string         $etlName
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteETLResponse DeleteETLResponse
     */
    public function deleteETLWithOptions($project, $etlName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteETL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etls/' . $etlName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除数据加工任务
     *  *
     * @param string $project
     * @param string $etlName
     *
     * @return DeleteETLResponse DeleteETLResponse
     */
    public function deleteETL($project, $etlName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteETLWithOptions($project, $etlName, $headers, $runtime);
    }

    /**
     * @summary Deletes an external store.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $externalStoreName
     * @param string[]       $headers           map
     * @param RuntimeOptions $runtime           runtime options for this request RuntimeOptions
     *
     * @return DeleteExternalStoreResponse DeleteExternalStoreResponse
     */
    public function deleteExternalStoreWithOptions($project, $externalStoreName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores/' . $externalStoreName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an external store.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $externalStoreName
     *
     * @return DeleteExternalStoreResponse DeleteExternalStoreResponse
     */
    public function deleteExternalStore($project, $externalStoreName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExternalStoreWithOptions($project, $externalStoreName, $headers, $runtime);
    }

    /**
     * @summary Deletes an index of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteIndexResponse DeleteIndexResponse
     */
    public function deleteIndexWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an index of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $logstore
     *
     * @return DeleteIndexResponse DeleteIndexResponse
     */
    public function deleteIndex($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @summary Deletes a Logstore, including all shards and indexes in the Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteLogStoreResponse DeleteLogStoreResponse
     */
    public function deleteLogStoreWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Logstore, including all shards and indexes in the Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $logstore
     *
     * @return DeleteLogStoreResponse DeleteLogStoreResponse
     */
    public function deleteLogStore($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLogStoreWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @summary 关闭项目的服务日志记录。
     *  *
     * @param string         $project
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoggingResponse DeleteLoggingResponse
     */
    public function deleteLoggingWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLogging',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logging',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 关闭项目的服务日志记录。
     *  *
     * @param string $project
     *
     * @return DeleteLoggingResponse DeleteLoggingResponse
     */
    public function deleteLogging($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLoggingWithOptions($project, $headers, $runtime);
    }

    /**
     * @summary Deletes a Logtail pipeline configuration.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteLogtailPipelineConfigResponse DeleteLogtailPipelineConfigResponse
     */
    public function deleteLogtailPipelineConfigWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLogtailPipelineConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pipelineconfigs/' . $configName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Logtail pipeline configuration.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string $project
     * @param string $configName
     *
     * @return DeleteLogtailPipelineConfigResponse DeleteLogtailPipelineConfigResponse
     */
    public function deleteLogtailPipelineConfig($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLogtailPipelineConfigWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * @summary Deletes a machine group. If the Logtail configurations for log collection are applied to a machine group, the configurations are disassociated from the machine group after the machine group is deleted.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $machineGroup
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteMachineGroupResponse DeleteMachineGroupResponse
     */
    public function deleteMachineGroupWithOptions($project, $machineGroup, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a machine group. If the Logtail configurations for log collection are applied to a machine group, the configurations are disassociated from the machine group after the machine group is deleted.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $machineGroup
     *
     * @return DeleteMachineGroupResponse DeleteMachineGroupResponse
     */
    public function deleteMachineGroup($project, $machineGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMachineGroupWithOptions($project, $machineGroup, $headers, $runtime);
    }

    /**
     * @summary 删除OSS投递任务
     *  *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteOSSExportResponse DeleteOSSExportResponse
     */
    public function deleteOSSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteOSSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossexports/' . $ossExportName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除OSS投递任务
     *  *
     * @param string $project
     * @param string $ossExportName
     *
     * @return DeleteOSSExportResponse DeleteOSSExportResponse
     */
    public function deleteOSSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOSSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * @summary 删除OSSHDFS投递任务
     *  *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteOSSHDFSExportResponse DeleteOSSHDFSExportResponse
     */
    public function deleteOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteOSSHDFSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/osshdfsexports/' . $ossExportName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除OSSHDFS投递任务
     *  *
     * @param string $project
     * @param string $ossExportName
     *
     * @return DeleteOSSHDFSExportResponse DeleteOSSHDFSExportResponse
     */
    public function deleteOSSHDFSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * @summary 删除OSS导入任务
     *  *
     * @param string         $project
     * @param string         $ossIngestionName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteOSSIngestionResponse DeleteOSSIngestionResponse
     */
    public function deleteOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteOSSIngestion',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossingestions/' . $ossIngestionName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除OSS导入任务
     *  *
     * @param string $project
     * @param string $ossIngestionName
     *
     * @return DeleteOSSIngestionResponse DeleteOSSIngestionResponse
     */
    public function deleteOSSIngestion($project, $ossIngestionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime);
    }

    /**
     * @summary 删除project
     *  *
     * @param string         $project
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProjectWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除project
     *  *
     * @param string $project
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProject($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($project, $headers, $runtime);
    }

    /**
     * @summary Deletes a project policy.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectPolicyResponse DeleteProjectPolicyResponse
     */
    public function deleteProjectPolicyWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProjectPolicy',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/policy',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteProjectPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a project policy.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     *
     * @return DeleteProjectPolicyResponse DeleteProjectPolicyResponse
     */
    public function deleteProjectPolicy($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectPolicyWithOptions($project, $headers, $runtime);
    }

    /**
     * @summary Deletes a saved search.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $savedsearchName
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return DeleteSavedSearchResponse DeleteSavedSearchResponse
     */
    public function deleteSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches/' . $savedsearchName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a saved search.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $savedsearchName
     *
     * @return DeleteSavedSearchResponse DeleteSavedSearchResponse
     */
    public function deleteSavedSearch($project, $savedsearchName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime);
    }

    /**
     * @summary 删除定时SQL任务
     *  *
     * @param string         $project
     * @param string         $scheduledSQLName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteScheduledSQLResponse DeleteScheduledSQLResponse
     */
    public function deleteScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteScheduledSQL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scheduledsqls/' . $scheduledSQLName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除定时SQL任务
     *  *
     * @param string $project
     * @param string $scheduledSQLName
     *
     * @return DeleteScheduledSQLResponse DeleteScheduledSQLResponse
     */
    public function deleteScheduledSQL($project, $scheduledSQLName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DeleteShipper is deprecated
     *  *
     * @summary Deletes the log shipping job of a Logstore.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * Deprecated
     *
     * @param string         $project
     * @param string         $logstore
     * @param string         $shipperName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteShipperResponse DeleteShipperResponse
     */
    public function deleteShipperWithOptions($project, $logstore, $shipperName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteShipper',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper/' . $shipperName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteShipperResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DeleteShipper is deprecated
     *  *
     * @summary Deletes the log shipping job of a Logstore.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * Deprecated
     *
     * @param string $project
     * @param string $logstore
     * @param string $shipperName
     *
     * @return DeleteShipperResponse DeleteShipperResponse
     */
    public function deleteShipper($project, $logstore, $shipperName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteShipperWithOptions($project, $logstore, $shipperName, $headers, $runtime);
    }

    /**
     * @summary 删除StoreView
     *  *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStoreViewResponse DeleteStoreViewResponse
     */
    public function deleteStoreViewWithOptions($project, $name, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteStoreView',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/storeviews/' . $name . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteStoreViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除StoreView
     *  *
     * @param string $project
     * @param string $name
     *
     * @return DeleteStoreViewResponse DeleteStoreViewResponse
     */
    public function deleteStoreView($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteStoreViewWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * @summary 禁用告警
     *  *
     * @param string         $project
     * @param string         $alertName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DisableAlertResponse DisableAlertResponse
     */
    public function disableAlertWithOptions($project, $alertName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DisableAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alerts/' . $alertName . '?action=disable',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DisableAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 禁用告警
     *  *
     * @param string $project
     * @param string $alertName
     *
     * @return DisableAlertResponse DisableAlertResponse
     */
    public function disableAlert($project, $alertName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableAlertWithOptions($project, $alertName, $headers, $runtime);
    }

    /**
     * @summary 禁用定时SQL任务
     *  *
     * @param string         $project
     * @param string         $scheduledSQLName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DisableScheduledSQLResponse DisableScheduledSQLResponse
     */
    public function disableScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DisableScheduledSQL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scheduledsqls/' . $scheduledSQLName . '?action=disable',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DisableScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 禁用定时SQL任务
     *  *
     * @param string $project
     * @param string $scheduledSQLName
     *
     * @return DisableScheduledSQLResponse DisableScheduledSQLResponse
     */
    public function disableScheduledSQL($project, $scheduledSQLName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime);
    }

    /**
     * @summary 启用告警
     *  *
     * @param string         $project
     * @param string         $alertName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return EnableAlertResponse EnableAlertResponse
     */
    public function enableAlertWithOptions($project, $alertName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'EnableAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alerts/' . $alertName . '?action=enable',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return EnableAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 启用告警
     *  *
     * @param string $project
     * @param string $alertName
     *
     * @return EnableAlertResponse EnableAlertResponse
     */
    public function enableAlert($project, $alertName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableAlertWithOptions($project, $alertName, $headers, $runtime);
    }

    /**
     * @summary 启用定时SQL任务
     *  *
     * @param string         $project
     * @param string         $scheduledSQLName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return EnableScheduledSQLResponse EnableScheduledSQLResponse
     */
    public function enableScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'EnableScheduledSQL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scheduledsqls/' . $scheduledSQLName . '?action=enable',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return EnableScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 启用定时SQL任务
     *  *
     * @param string $project
     * @param string $scheduledSQLName
     *
     * @return EnableScheduledSQLResponse EnableScheduledSQLResponse
     */
    public function enableScheduledSQL($project, $scheduledSQLName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime);
    }

    /**
     * @summary GetAlert
     *  *
     * @param string         $project
     * @param string         $alertName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetAlertResponse GetAlertResponse
     */
    public function getAlertWithOptions($project, $alertName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alerts/' . $alertName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary GetAlert
     *  *
     * @param string $project
     * @param string $alertName
     *
     * @return GetAlertResponse GetAlertResponse
     */
    public function getAlert($project, $alertName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlertWithOptions($project, $alertName, $headers, $runtime);
    }

    /**
     * @summary Queries data in a dataset based on the unique identifier of the data.
     *  *
     * @param string         $datasetId
     * @param string         $annotationdataId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetAnnotationDataResponse GetAnnotationDataResponse
     */
    public function getAnnotationDataWithOptions($datasetId, $annotationdataId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAnnotationData',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationdataset/' . $datasetId . '/annotationdata/' . $annotationdataId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAnnotationDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries data in a dataset based on the unique identifier of the data.
     *  *
     * @param string $datasetId
     * @param string $annotationdataId
     *
     * @return GetAnnotationDataResponse GetAnnotationDataResponse
     */
    public function getAnnotationData($datasetId, $annotationdataId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAnnotationDataWithOptions($datasetId, $annotationdataId, $headers, $runtime);
    }

    /**
     * @summary Queries a dataset.
     *  *
     * @param string         $datasetId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetAnnotationDataSetResponse GetAnnotationDataSetResponse
     */
    public function getAnnotationDataSetWithOptions($datasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAnnotationDataSet',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationdataset/' . $datasetId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAnnotationDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a dataset.
     *  *
     * @param string $datasetId
     *
     * @return GetAnnotationDataSetResponse GetAnnotationDataSetResponse
     */
    public function getAnnotationDataSet($datasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAnnotationDataSetWithOptions($datasetId, $headers, $runtime);
    }

    /**
     * @summary Queries a tag table by using a label id.
     *  *
     * @param string         $labelId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAnnotationLabelResponse GetAnnotationLabelResponse
     */
    public function getAnnotationLabelWithOptions($labelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAnnotationLabel',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationlabel/' . $labelId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAnnotationLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a tag table by using a label id.
     *  *
     * @param string $labelId
     *
     * @return GetAnnotationLabelResponse GetAnnotationLabelResponse
     */
    public function getAnnotationLabel($labelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAnnotationLabelWithOptions($labelId, $headers, $runtime);
    }

    /**
     * @summary Queries the Logtail configurations that are applied to a machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $machineGroup
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetAppliedConfigsResponse GetAppliedConfigsResponse
     */
    public function getAppliedConfigsWithOptions($project, $machineGroup, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAppliedConfigs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppliedConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the Logtail configurations that are applied to a machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $machineGroup
     *
     * @return GetAppliedConfigsResponse GetAppliedConfigsResponse
     */
    public function getAppliedConfigs($project, $machineGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppliedConfigsWithOptions($project, $machineGroup, $headers, $runtime);
    }

    /**
     * @summary Queries the machine groups to which a Logtail configuration is bound.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetAppliedMachineGroupsResponse GetAppliedMachineGroupsResponse
     */
    public function getAppliedMachineGroupsWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAppliedMachineGroups',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/configs/' . $configName . '/machinegroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppliedMachineGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the machine groups to which a Logtail configuration is bound.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $configName
     *
     * @return GetAppliedMachineGroupsResponse GetAppliedMachineGroupsResponse
     */
    public function getAppliedMachineGroups($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppliedMachineGroupsWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * @summary Queries the checkpoints of a shard from which data is consumed by a consumer group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string               $project
     * @param string               $logstore
     * @param string               $consumerGroup
     * @param GetCheckPointRequest $request       GetCheckPointRequest
     * @param string[]             $headers       map
     * @param RuntimeOptions       $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetCheckPointResponse GetCheckPointResponse
     */
    public function getCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->shard)) {
            $query['shard'] = $request->shard;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCheckPoint',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetCheckPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the checkpoints of a shard from which data is consumed by a consumer group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string               $project
     * @param string               $logstore
     * @param string               $consumerGroup
     * @param GetCheckPointRequest $request       GetCheckPointRequest
     *
     * @return GetCheckPointResponse GetCheckPointResponse
     */
    public function getCheckPoint($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * @summary 调用GetCollectionPolicy获取对应的规则
     *  *
     * @param string                     $policyName
     * @param GetCollectionPolicyRequest $request    GetCollectionPolicyRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetCollectionPolicyResponse GetCollectionPolicyResponse
     */
    public function getCollectionPolicyWithOptions($policyName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataCode)) {
            $query['dataCode'] = $request->dataCode;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['productCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCollectionPolicy',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/collectionpolicy/' . $policyName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCollectionPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 调用GetCollectionPolicy获取对应的规则
     *  *
     * @param string                     $policyName
     * @param GetCollectionPolicyRequest $request    GetCollectionPolicyRequest
     *
     * @return GetCollectionPolicyResponse GetCollectionPolicyResponse
     */
    public function getCollectionPolicy($policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCollectionPolicyWithOptions($policyName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a Logtail configuration.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The name of the required Logtail configuration is obtained. For more information, see [ListConfig](https://help.aliyun.com/document_detail/29043.html).
     *  *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetConfigResponse GetConfigResponse
     */
    public function getConfigWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/configs/' . $configName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a Logtail configuration.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The name of the required Logtail configuration is obtained. For more information, see [ListConfig](https://help.aliyun.com/document_detail/29043.html).
     *  *
     * @param string $project
     * @param string $configName
     *
     * @return GetConfigResponse GetConfigResponse
     */
    public function getConfig($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConfigWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * @summary Queries the contextual logs of a specified log.
     *  *
     * @description *   You can specify a log as the start log. The time range of a contextual query is one day before and one day after the generation time of the start log.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                $project
     * @param string                $logstore
     * @param GetContextLogsRequest $request  GetContextLogsRequest
     * @param string[]              $headers  map
     * @param RuntimeOptions        $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetContextLogsResponse GetContextLogsResponse
     */
    public function getContextLogsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->backLines)) {
            $query['back_lines'] = $request->backLines;
        }
        if (!Utils::isUnset($request->forwardLines)) {
            $query['forward_lines'] = $request->forwardLines;
        }
        if (!Utils::isUnset($request->packId)) {
            $query['pack_id'] = $request->packId;
        }
        if (!Utils::isUnset($request->packMeta)) {
            $query['pack_meta'] = $request->packMeta;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetContextLogs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetContextLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the contextual logs of a specified log.
     *  *
     * @description *   You can specify a log as the start log. The time range of a contextual query is one day before and one day after the generation time of the start log.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                $project
     * @param string                $logstore
     * @param GetContextLogsRequest $request  GetContextLogsRequest
     *
     * @return GetContextLogsResponse GetContextLogsResponse
     */
    public function getContextLogs($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContextLogsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a cursor based on a point in time.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   The following content describes the relationships among a cursor, project, Logstore, and shard:
     *     *   A project can have multiple Logstores.
     *     *   A Logstore can have multiple shards.
     *     *   You can use a cursor to obtain a log in a shard.
     *  *
     * @param string           $project
     * @param string           $logstore
     * @param string           $shardId
     * @param GetCursorRequest $request  GetCursorRequest
     * @param string[]         $headers  map
     * @param RuntimeOptions   $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetCursorResponse GetCursorResponse
     */
    public function getCursorWithOptions($project, $logstore, $shardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCursor',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardId . '?type=cursor',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCursorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a cursor based on a point in time.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   The following content describes the relationships among a cursor, project, Logstore, and shard:
     *     *   A project can have multiple Logstores.
     *     *   A Logstore can have multiple shards.
     *     *   You can use a cursor to obtain a log in a shard.
     *  *
     * @param string           $project
     * @param string           $logstore
     * @param string           $shardId
     * @param GetCursorRequest $request  GetCursorRequest
     *
     * @return GetCursorResponse GetCursorResponse
     */
    public function getCursor($project, $logstore, $shardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCursorWithOptions($project, $logstore, $shardId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the server time of a cursor.
     *  *
     * @param string               $project
     * @param string               $logstore
     * @param string               $shardId
     * @param GetCursorTimeRequest $request  GetCursorTimeRequest
     * @param string[]             $headers  map
     * @param RuntimeOptions       $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetCursorTimeResponse GetCursorTimeResponse
     */
    public function getCursorTimeWithOptions($project, $logstore, $shardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->cursor)) {
            $query['cursor'] = $request->cursor;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCursorTime',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardId . '?type=cursor_time',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCursorTimeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the server time of a cursor.
     *  *
     * @param string               $project
     * @param string               $logstore
     * @param string               $shardId
     * @param GetCursorTimeRequest $request  GetCursorTimeRequest
     *
     * @return GetCursorTimeResponse GetCursorTimeResponse
     */
    public function getCursorTime($project, $logstore, $shardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCursorTimeWithOptions($project, $logstore, $shardId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a dashboard.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string         $project
     * @param string         $dashboardName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetDashboardResponse GetDashboardResponse
     */
    public function getDashboardWithOptions($project, $dashboardName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDashboard',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dashboards/' . $dashboardName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a dashboard.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string $project
     * @param string $dashboardName
     *
     * @return GetDashboardResponse GetDashboardResponse
     */
    public function getDashboard($project, $dashboardName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDashboardWithOptions($project, $dashboardName, $headers, $runtime);
    }

    /**
     * @summary 获取数据加工任务信息
     *  *
     * @param string         $project
     * @param string         $etlName
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetETLResponse GetETLResponse
     */
    public function getETLWithOptions($project, $etlName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetETL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etls/' . $etlName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取数据加工任务信息
     *  *
     * @param string $project
     * @param string $etlName
     *
     * @return GetETLResponse GetETLResponse
     */
    public function getETL($project, $etlName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getETLWithOptions($project, $etlName, $headers, $runtime);
    }

    /**
     * @summary Queries the details of an external store.
     *  *
     * @description *   The supported data sources of external stores include Object Storage Service (OSS) buckets and ApsaraDB RDS for MySQL databases in a virtual private cloud (VPC).
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $externalStoreName
     * @param string[]       $headers           map
     * @param RuntimeOptions $runtime           runtime options for this request RuntimeOptions
     *
     * @return GetExternalStoreResponse GetExternalStoreResponse
     */
    public function getExternalStoreWithOptions($project, $externalStoreName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores/' . $externalStoreName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an external store.
     *  *
     * @description *   The supported data sources of external stores include Object Storage Service (OSS) buckets and ApsaraDB RDS for MySQL databases in a virtual private cloud (VPC).
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $externalStoreName
     *
     * @return GetExternalStoreResponse GetExternalStoreResponse
     */
    public function getExternalStore($project, $externalStoreName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExternalStoreWithOptions($project, $externalStoreName, $headers, $runtime);
    }

    /**
     * @summary Queries the distribution of logs that meet the specified search conditions in a Logstore.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   The time range is evenly divided into subintervals in the responses. If the time range that is specified in the request remains unchanged, the subintervals in the responses also remain unchanged.
     * *   If the number of logs in a Logstore significantly changes, Simple Log Service cannot predict the number of times that you must call this operation to obtain the complete result. In this case, you must check the value of the progress parameter in the response of each request and determine whether to call this operation one more time to obtain the complete result. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * *   After a log is written to a Logstore, you can call the GetHistograms or GetLogs operation to query the log after a short latency. The latency of a query varies based on the type of the log. Simple Log Service classifies logs into the following types based on the log time:
     *     *   Real-time data: The difference between the time record in a log and the current time on Simple Log Service is within the interval (-180 seconds,900 seconds]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as real-time data. After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds.
     *     *   Historical data: The difference between the time record in a log and the current time on Simple Log Service is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as historical data. This type of log is usually generated in data backfill scenarios.
     *     After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds. For 99.9% of queries, the latency is no more than 1 second.
     * > Simple Log Service calculates the difference between the log time that is specified by the __time__ field and the receiving time that is specified by the __tag__:__receive_time__ field for each log. The receiving time indicates the time at which Simple Log Service receives the log. If the difference is within the interval (-180 seconds,900 seconds], Simple Log Service processes the log as real-time data. If the difference is within the interval [-604,800 seconds,-180 seconds), Simple Log Service processes the log as historical data.
     * *   Simple Log Service provides examples on how to call the GetHistograms operation by using Simple Log Service SDK for Java. For more information, see [Use GetHistograms to query the distribution of logs](https://help.aliyun.com/document_detail/462234.html).
     *  *
     * @param string               $project
     * @param string               $logstore
     * @param GetHistogramsRequest $request  GetHistogramsRequest
     * @param string[]             $headers  map
     * @param RuntimeOptions       $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetHistogramsResponse GetHistogramsResponse
     */
    public function getHistogramsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistograms',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index?type=histogram',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetHistogramsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the distribution of logs that meet the specified search conditions in a Logstore.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   The time range is evenly divided into subintervals in the responses. If the time range that is specified in the request remains unchanged, the subintervals in the responses also remain unchanged.
     * *   If the number of logs in a Logstore significantly changes, Simple Log Service cannot predict the number of times that you must call this operation to obtain the complete result. In this case, you must check the value of the progress parameter in the response of each request and determine whether to call this operation one more time to obtain the complete result. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * *   After a log is written to a Logstore, you can call the GetHistograms or GetLogs operation to query the log after a short latency. The latency of a query varies based on the type of the log. Simple Log Service classifies logs into the following types based on the log time:
     *     *   Real-time data: The difference between the time record in a log and the current time on Simple Log Service is within the interval (-180 seconds,900 seconds]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as real-time data. After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds.
     *     *   Historical data: The difference between the time record in a log and the current time on Simple Log Service is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as historical data. This type of log is usually generated in data backfill scenarios.
     *     After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds. For 99.9% of queries, the latency is no more than 1 second.
     * > Simple Log Service calculates the difference between the log time that is specified by the __time__ field and the receiving time that is specified by the __tag__:__receive_time__ field for each log. The receiving time indicates the time at which Simple Log Service receives the log. If the difference is within the interval (-180 seconds,900 seconds], Simple Log Service processes the log as real-time data. If the difference is within the interval [-604,800 seconds,-180 seconds), Simple Log Service processes the log as historical data.
     * *   Simple Log Service provides examples on how to call the GetHistograms operation by using Simple Log Service SDK for Java. For more information, see [Use GetHistograms to query the distribution of logs](https://help.aliyun.com/document_detail/462234.html).
     *  *
     * @param string               $project
     * @param string               $logstore
     * @param GetHistogramsRequest $request  GetHistogramsRequest
     *
     * @return GetHistogramsResponse GetHistogramsResponse
     */
    public function getHistograms($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHistogramsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the index of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetIndexResponse GetIndexResponse
     */
    public function getIndexWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the index of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $logstore
     *
     * @return GetIndexResponse GetIndexResponse
     */
    public function getIndex($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetLogStoreResponse GetLogStoreResponse
     */
    public function getLogStoreWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $logstore
     *
     * @return GetLogStoreResponse GetLogStoreResponse
     */
    public function getLogStore($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogStoreWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @summary 获取LogStore计量模式
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetLogStoreMeteringModeResponse GetLogStoreMeteringModeResponse
     */
    public function getLogStoreMeteringModeWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLogStoreMeteringMode',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/meteringmode',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLogStoreMeteringModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取LogStore计量模式
     *  *
     * @param string $project
     * @param string $logstore
     *
     * @return GetLogStoreMeteringModeResponse GetLogStoreMeteringModeResponse
     */
    public function getLogStoreMeteringMode($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogStoreMeteringModeWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @summary Queries the service log configuration of a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLoggingResponse GetLoggingResponse
     */
    public function getLoggingWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLogging',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logging',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the service log configuration of a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     *
     * @return GetLoggingResponse GetLoggingResponse
     */
    public function getLogging($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLoggingWithOptions($project, $headers, $runtime);
    }

    /**
     * @summary Queries the logs of a Logstore in a project.
     *  *
     * @description ### Usage notes
     * > Simple Log Service allows you to create a Scheduled SQL job. For more information, see [Create a Scheduled SQL job](https://help.aliyun.com/document_detail/286457.html).
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   If the number of logs in a Logstore significantly changes, Simple Log Service cannot forecast the number of times that you must call this operation to obtain the complete result. In this case, you must check the value of the x-log-progress parameter in the response of each request and determine whether to call this operation one more time to obtain the complete result. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * *   After a log is written to a Logstore, you can call the GetHistograms or GetLogs operation to query the log after a short latency. The latency of a query varies based on the type of the log. Simple Log Service classifies logs into the following types based on the log time:
     *         Real-time data: The difference between the time record in a log and the current time on Simple Log Service is within the interval (-180 seconds,900 seconds]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as real-time data. This type of log is usually generated in common scenarios.
     *     *   Historical data: The difference between the time record in a log and the current time on Simple Log Service is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as historical data. This type of log is usually generated in data backfill scenarios.
     *     After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds. For 99.9% of queries, the latency is no more than 1 second.
     * > Simple Log Service calculates the difference between the log time that is specified by the __time__ field and the receiving time that is specified by the __tag__:**receive_time** field for each log. The receiving time indicates the time at which Simple Log Service receives the log. If the difference is within the interval (-180 seconds,900 seconds], Simple Log Service processes the log as real-time data. If the difference is within the interval [-604,800 seconds,-180 seconds), Simple Log Service processes the log as historical data.
     * *   Simple Log Service provides examples on how to call the GetLogs operation by using Simple Log Service SDK for Java and Simple Log Service SDK for Python. For more information, see [Examples of calling the GetLogs operation by using Simple Log Service SDK for Java](https://help.aliyun.com/document_detail/407683.html) and [Examples of calling the GetLogs operation by using Simple Log Service SDK for Python](https://help.aliyun.com/document_detail/407684.html).
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param GetLogsRequest $request  GetLogsRequest
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetLogsResponse GetLogsResponse
     */
    public function getLogsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->line)) {
            $query['line'] = $request->line;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->powerSql)) {
            $query['powerSql'] = $request->powerSql;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLogs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '?type=log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the logs of a Logstore in a project.
     *  *
     * @description ### Usage notes
     * > Simple Log Service allows you to create a Scheduled SQL job. For more information, see [Create a Scheduled SQL job](https://help.aliyun.com/document_detail/286457.html).
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   If the number of logs in a Logstore significantly changes, Simple Log Service cannot forecast the number of times that you must call this operation to obtain the complete result. In this case, you must check the value of the x-log-progress parameter in the response of each request and determine whether to call this operation one more time to obtain the complete result. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * *   After a log is written to a Logstore, you can call the GetHistograms or GetLogs operation to query the log after a short latency. The latency of a query varies based on the type of the log. Simple Log Service classifies logs into the following types based on the log time:
     *         Real-time data: The difference between the time record in a log and the current time on Simple Log Service is within the interval (-180 seconds,900 seconds]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as real-time data. This type of log is usually generated in common scenarios.
     *     *   Historical data: The difference between the time record in a log and the current time on Simple Log Service is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as historical data. This type of log is usually generated in data backfill scenarios.
     *     After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds. For 99.9% of queries, the latency is no more than 1 second.
     * > Simple Log Service calculates the difference between the log time that is specified by the __time__ field and the receiving time that is specified by the __tag__:**receive_time** field for each log. The receiving time indicates the time at which Simple Log Service receives the log. If the difference is within the interval (-180 seconds,900 seconds], Simple Log Service processes the log as real-time data. If the difference is within the interval [-604,800 seconds,-180 seconds), Simple Log Service processes the log as historical data.
     * *   Simple Log Service provides examples on how to call the GetLogs operation by using Simple Log Service SDK for Java and Simple Log Service SDK for Python. For more information, see [Examples of calling the GetLogs operation by using Simple Log Service SDK for Java](https://help.aliyun.com/document_detail/407683.html) and [Examples of calling the GetLogs operation by using Simple Log Service SDK for Python](https://help.aliyun.com/document_detail/407684.html).
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param GetLogsRequest $request  GetLogsRequest
     *
     * @return GetLogsResponse GetLogsResponse
     */
    public function getLogs($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the raw log data in a Logstore of a project. The returned result shows the raw log data in a specific time range. The returned results are compressed and transmitted.
     *  *
     * @description *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   If the number of logs in a Logstore significantly changes, Simple Log Service cannot predict the number of times you must call this API operation to obtain a complete result. In this case, you must check the value of the progress parameter in the response of each request and determine whether to call this operation again to obtain the complete result. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * *   After a log is written to a Logstore, you can call the GetHistograms or GetLogs operation to query the log. The latency of the query varies based on the type of the log. Simple Log Service classifies logs into the following types based on log timestamps:
     * 1.  1.  Real-time data: The difference between the time record in the log and the current server time is within the interval (-180 seconds,900 seconds]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and the server received the log at 12:05:00, September 25, 2014 (UTC), the server processes the log as real-time data. This type of log is usually generated in common scenarios.
     * 2.  2.  Historical data: The difference between the time record in the log and the current server time is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and the server received the log at 12:05:00, September 25, 2014 (UTC), the server processes the log as historical data. This type of log is usually generated in data backfill scenarios. After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds. For 99.9% of queries, the latency is no more than 1 second.
     *  *
     * @param string           $project
     * @param string           $logstore
     * @param GetLogsV2Request $request  GetLogsV2Request
     * @param GetLogsV2Headers $headers  GetLogsV2Headers
     * @param RuntimeOptions   $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetLogsV2Response GetLogsV2Response
     */
    public function getLogsV2WithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->forward)) {
            $body['forward'] = $request->forward;
        }
        if (!Utils::isUnset($request->from)) {
            $body['from'] = $request->from;
        }
        if (!Utils::isUnset($request->highlight)) {
            $body['highlight'] = $request->highlight;
        }
        if (!Utils::isUnset($request->line)) {
            $body['line'] = $request->line;
        }
        if (!Utils::isUnset($request->offset)) {
            $body['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->powerSql)) {
            $body['powerSql'] = $request->powerSql;
        }
        if (!Utils::isUnset($request->query)) {
            $body['query'] = $request->query;
        }
        if (!Utils::isUnset($request->reverse)) {
            $body['reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->session)) {
            $body['session'] = $request->session;
        }
        if (!Utils::isUnset($request->to)) {
            $body['to'] = $request->to;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->acceptEncoding)) {
            $realHeaders['Accept-Encoding'] = Utils::toJSONString($headers->acceptEncoding);
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLogsV2',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/logs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLogsV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the raw log data in a Logstore of a project. The returned result shows the raw log data in a specific time range. The returned results are compressed and transmitted.
     *  *
     * @description *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   If the number of logs in a Logstore significantly changes, Simple Log Service cannot predict the number of times you must call this API operation to obtain a complete result. In this case, you must check the value of the progress parameter in the response of each request and determine whether to call this operation again to obtain the complete result. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * *   After a log is written to a Logstore, you can call the GetHistograms or GetLogs operation to query the log. The latency of the query varies based on the type of the log. Simple Log Service classifies logs into the following types based on log timestamps:
     * 1.  1.  Real-time data: The difference between the time record in the log and the current server time is within the interval (-180 seconds,900 seconds]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and the server received the log at 12:05:00, September 25, 2014 (UTC), the server processes the log as real-time data. This type of log is usually generated in common scenarios.
     * 2.  2.  Historical data: The difference between the time record in the log and the current server time is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and the server received the log at 12:05:00, September 25, 2014 (UTC), the server processes the log as historical data. This type of log is usually generated in data backfill scenarios. After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds. For 99.9% of queries, the latency is no more than 1 second.
     *  *
     * @param string           $project
     * @param string           $logstore
     * @param GetLogsV2Request $request  GetLogsV2Request
     *
     * @return GetLogsV2Response GetLogsV2Response
     */
    public function getLogsV2($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetLogsV2Headers([]);

        return $this->getLogsV2WithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a Logtail pipeline configuration.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetLogtailPipelineConfigResponse GetLogtailPipelineConfigResponse
     */
    public function getLogtailPipelineConfigWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLogtailPipelineConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pipelineconfigs/' . $configName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a Logtail pipeline configuration.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string $project
     * @param string $configName
     *
     * @return GetLogtailPipelineConfigResponse GetLogtailPipelineConfigResponse
     */
    public function getLogtailPipelineConfig($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogtailPipelineConfigWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * @summary GetMLServiceResults
     *  *
     * @param string                     $serviceName
     * @param GetMLServiceResultsRequest $request     GetMLServiceResultsRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetMLServiceResultsResponse GetMLServiceResultsResponse
     */
    public function getMLServiceResultsWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowBuiltin)) {
            $query['allowBuiltin'] = $request->allowBuiltin;
        }
        if (!Utils::isUnset($request->version)) {
            $query['version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'GetMLServiceResults',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/service/' . $serviceName . '/analysis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMLServiceResultsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary GetMLServiceResults
     *  *
     * @param string                     $serviceName
     * @param GetMLServiceResultsRequest $request     GetMLServiceResultsRequest
     *
     * @return GetMLServiceResultsResponse GetMLServiceResultsResponse
     */
    public function getMLServiceResults($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMLServiceResultsWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $machineGroup
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetMachineGroupResponse GetMachineGroupResponse
     */
    public function getMachineGroupWithOptions($project, $machineGroup, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $machineGroup
     *
     * @return GetMachineGroupResponse GetMachineGroupResponse
     */
    public function getMachineGroup($project, $machineGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMachineGroupWithOptions($project, $machineGroup, $headers, $runtime);
    }

    /**
     * @summary 获取 MetricStore 计量模式
     *  *
     * @param string         $project
     * @param string         $metricStore
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetMetricStoreMeteringModeResponse GetMetricStoreMeteringModeResponse
     */
    public function getMetricStoreMeteringModeWithOptions($project, $metricStore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetMetricStoreMeteringMode',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/metricstores/' . $metricStore . '/meteringmode',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMetricStoreMeteringModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取 MetricStore 计量模式
     *  *
     * @param string $project
     * @param string $metricStore
     *
     * @return GetMetricStoreMeteringModeResponse GetMetricStoreMeteringModeResponse
     */
    public function getMetricStoreMeteringMode($project, $metricStore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMetricStoreMeteringModeWithOptions($project, $metricStore, $headers, $runtime);
    }

    /**
     * @summary 获取OSS投递任务
     *  *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetOSSExportResponse GetOSSExportResponse
     */
    public function getOSSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOSSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossexports/' . $ossExportName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取OSS投递任务
     *  *
     * @param string $project
     * @param string $ossExportName
     *
     * @return GetOSSExportResponse GetOSSExportResponse
     */
    public function getOSSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOSSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * @summary Get OSSHDFS Exports
     *  *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetOSSHDFSExportResponse GetOSSHDFSExportResponse
     */
    public function getOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOSSHDFSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/osshdfsexports/' . $ossExportName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get OSSHDFS Exports
     *  *
     * @param string $project
     * @param string $ossExportName
     *
     * @return GetOSSHDFSExportResponse GetOSSHDFSExportResponse
     */
    public function getOSSHDFSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * @summary 获取oss导入任务信息
     *  *
     * @param string         $project
     * @param string         $ossIngestionName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetOSSIngestionResponse GetOSSIngestionResponse
     */
    public function getOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOSSIngestion',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossingestions/' . $ossIngestionName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取oss导入任务信息
     *  *
     * @param string $project
     * @param string $ossIngestionName
     *
     * @return GetOSSIngestionResponse GetOSSIngestionResponse
     */
    public function getOSSIngestion($project, $ossIngestionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a project.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProjectWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a project.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     *
     * @return GetProjectResponse GetProjectResponse
     */
    public function getProject($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($project, $headers, $runtime);
    }

    /**
     * @summary Queries logs in a project. You can use this operation to query logs at the project level.
     *  *
     * @description ### Usage notes
     * *   You can use the query parameter to specify a standard SQL statement.
     * *   You must specify a project in the domain name of the request.
     * *   You must specify a Logstore in the FROM clause of the SQL statement. A Logstore can be used as an SQL table.
     * *   You must specify a time range in the SQL statement by using the __date__ parameter or __time__ parameter. The value of the __date__ parameter is a timestamp, and the value of the __time__ parameter is an integer. The unit of the __time__ parameter is seconds.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                $project
     * @param GetProjectLogsRequest $request GetProjectLogsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectLogsResponse GetProjectLogsResponse
     */
    public function getProjectLogsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->powerSql)) {
            $query['powerSql'] = $request->powerSql;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectLogs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetProjectLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries logs in a project. You can use this operation to query logs at the project level.
     *  *
     * @description ### Usage notes
     * *   You can use the query parameter to specify a standard SQL statement.
     * *   You must specify a project in the domain name of the request.
     * *   You must specify a Logstore in the FROM clause of the SQL statement. A Logstore can be used as an SQL table.
     * *   You must specify a time range in the SQL statement by using the __date__ parameter or __time__ parameter. The value of the __date__ parameter is a timestamp, and the value of the __time__ parameter is an integer. The unit of the __time__ parameter is seconds.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                $project
     * @param GetProjectLogsRequest $request GetProjectLogsRequest
     *
     * @return GetProjectLogsResponse GetProjectLogsResponse
     */
    public function getProjectLogs($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectLogsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a project policy.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectPolicyResponse GetProjectPolicyResponse
     */
    public function getProjectPolicyWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectPolicy',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/policy',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return GetProjectPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a project policy.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     *
     * @return GetProjectPolicyResponse GetProjectPolicyResponse
     */
    public function getProjectPolicy($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectPolicyWithOptions($project, $headers, $runtime);
    }

    /**
     * @summary Queries a saved search.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $savedsearchName
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetSavedSearchResponse GetSavedSearchResponse
     */
    public function getSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches/' . $savedsearchName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a saved search.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $savedsearchName
     *
     * @return GetSavedSearchResponse GetSavedSearchResponse
     */
    public function getSavedSearch($project, $savedsearchName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime);
    }

    /**
     * @summary 查看定时SQL任务
     *  *
     * @param string         $project
     * @param string         $scheduledSQLName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetScheduledSQLResponse GetScheduledSQLResponse
     */
    public function getScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetScheduledSQL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scheduledsqls/' . $scheduledSQLName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查看定时SQL任务
     *  *
     * @param string $project
     * @param string $scheduledSQLName
     *
     * @return GetScheduledSQLResponse GetScheduledSQLResponse
     */
    public function getScheduledSQL($project, $scheduledSQLName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI GetShipperStatus is deprecated
     *  *
     * @summary Queries the status of a log shipping job.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * Deprecated
     *
     * @param string                  $project
     * @param string                  $logstore
     * @param string                  $shipperName
     * @param GetShipperStatusRequest $request     GetShipperStatusRequest
     * @param string[]                $headers     map
     * @param RuntimeOptions          $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetShipperStatusResponse GetShipperStatusResponse
     */
    public function getShipperStatusWithOptions($project, $logstore, $shipperName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetShipperStatus',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper/' . $shipperName . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetShipperStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetShipperStatus is deprecated
     *  *
     * @summary Queries the status of a log shipping job.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * Deprecated
     *
     * @param string                  $project
     * @param string                  $logstore
     * @param string                  $shipperName
     * @param GetShipperStatusRequest $request     GetShipperStatusRequest
     *
     * @return GetShipperStatusResponse GetShipperStatusResponse
     */
    public function getShipperStatus($project, $logstore, $shipperName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShipperStatusWithOptions($project, $logstore, $shipperName, $request, $headers, $runtime);
    }

    /**
     * @summary getSlsService
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSlsServiceResponse GetSlsServiceResponse
     */
    public function getSlsServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSlsService',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/slsservice',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSlsServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary getSlsService
     *  *
     * @return GetSlsServiceResponse GetSlsServiceResponse
     */
    public function getSlsService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSlsServiceWithOptions($headers, $runtime);
    }

    /**
     * @summary 查询独享sql实例
     *  *
     * @param string         $project
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSqlInstanceResponse GetSqlInstanceResponse
     */
    public function getSqlInstanceWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSqlInstance',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sqlinstance',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetSqlInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询独享sql实例
     *  *
     * @param string $project
     *
     * @return GetSqlInstanceResponse GetSqlInstanceResponse
     */
    public function getSqlInstance($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSqlInstanceWithOptions($project, $headers, $runtime);
    }

    /**
     * @summary 查询StoreView
     *  *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStoreViewResponse GetStoreViewResponse
     */
    public function getStoreViewWithOptions($project, $name, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetStoreView',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/storeviews/' . $name . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetStoreViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询StoreView
     *  *
     * @param string $project
     * @param string $name
     *
     * @return GetStoreViewResponse GetStoreViewResponse
     */
    public function getStoreView($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStoreViewWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * @summary 查询StoreView索引
     *  *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStoreViewIndexResponse GetStoreViewIndexResponse
     */
    public function getStoreViewIndexWithOptions($project, $name, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetStoreViewIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/storeviews/' . $name . '/index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetStoreViewIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询StoreView索引
     *  *
     * @param string $project
     * @param string $name
     *
     * @return GetStoreViewIndexResponse GetStoreViewIndexResponse
     */
    public function getStoreViewIndex($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStoreViewIndexWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * @summary 查询告警列表
     *  *
     * @param string            $project
     * @param ListAlertsRequest $request ListAlertsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlertsResponse ListAlertsResponse
     */
    public function listAlertsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->logstore)) {
            $query['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlerts',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alerts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlertsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询告警列表
     *  *
     * @param string            $project
     * @param ListAlertsRequest $request ListAlertsRequest
     *
     * @return ListAlertsResponse ListAlertsResponse
     */
    public function listAlerts($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries data in a dataset.
     *  *
     * @param string                    $datasetId
     * @param ListAnnotationDataRequest $request   ListAnnotationDataRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListAnnotationDataResponse ListAnnotationDataResponse
     */
    public function listAnnotationDataWithOptions($datasetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnnotationData',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationdataset/' . $datasetId . '/annotationdata',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAnnotationDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries data in a dataset.
     *  *
     * @param string                    $datasetId
     * @param ListAnnotationDataRequest $request   ListAnnotationDataRequest
     *
     * @return ListAnnotationDataResponse ListAnnotationDataResponse
     */
    public function listAnnotationData($datasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnnotationDataWithOptions($datasetId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of datasets.
     *  *
     * @param ListAnnotationDataSetsRequest $request ListAnnotationDataSetsRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnnotationDataSetsResponse ListAnnotationDataSetsResponse
     */
    public function listAnnotationDataSetsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnnotationDataSets',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationdataset',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAnnotationDataSetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of datasets.
     *  *
     * @param ListAnnotationDataSetsRequest $request ListAnnotationDataSetsRequest
     *
     * @return ListAnnotationDataSetsResponse ListAnnotationDataSetsResponse
     */
    public function listAnnotationDataSets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnnotationDataSetsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of tag tables.
     *  *
     * @param ListAnnotationLabelsRequest $request ListAnnotationLabelsRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnnotationLabelsResponse ListAnnotationLabelsResponse
     */
    public function listAnnotationLabelsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAnnotationLabels',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationlabel',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAnnotationLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of tag tables.
     *  *
     * @param ListAnnotationLabelsRequest $request ListAnnotationLabelsRequest
     *
     * @return ListAnnotationLabelsResponse ListAnnotationLabelsResponse
     */
    public function listAnnotationLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnnotationLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通过调用ListCollectionPolicies接口查看配置的日志采集规则
     *  *
     * @param ListCollectionPoliciesRequest $tmpReq  ListCollectionPoliciesRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCollectionPoliciesResponse ListCollectionPoliciesResponse
     */
    public function listCollectionPoliciesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCollectionPoliciesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->attribute)) {
            $request->attributeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attribute, 'attribute', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attributeShrink)) {
            $query['attribute'] = $request->attributeShrink;
        }
        if (!Utils::isUnset($request->dataCode)) {
            $query['dataCode'] = $request->dataCode;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['policyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['productCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCollectionPolicies',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/collectionpolicy',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCollectionPoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 通过调用ListCollectionPolicies接口查看配置的日志采集规则
     *  *
     * @param ListCollectionPoliciesRequest $request ListCollectionPoliciesRequest
     *
     * @return ListCollectionPoliciesResponse ListCollectionPoliciesResponse
     */
    public function listCollectionPolicies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCollectionPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries all Logtail configurations in a project.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string            $project
     * @param ListConfigRequest $request ListConfigRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConfigResponse ListConfigResponse
     */
    public function listConfigWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->configName)) {
            $query['configName'] = $request->configName;
        }
        if (!Utils::isUnset($request->logstoreName)) {
            $query['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all Logtail configurations in a project.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string            $project
     * @param ListConfigRequest $request ListConfigRequest
     *
     * @return ListConfigResponse ListConfigResponse
     */
    public function listConfig($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConfigWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries all consumer groups of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListConsumerGroupResponse ListConsumerGroupResponse
     */
    public function listConsumerGroupWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all consumer groups of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $logstore
     *
     * @return ListConsumerGroupResponse ListConsumerGroupResponse
     */
    public function listConsumerGroup($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @summary Queries a list of dashboards.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string               $project
     * @param ListDashboardRequest $request ListDashboardRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDashboardResponse ListDashboardResponse
     */
    public function listDashboardWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDashboard',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dashboards',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of dashboards.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *  *
     * @param string               $project
     * @param ListDashboardRequest $request ListDashboardRequest
     *
     * @return ListDashboardResponse ListDashboardResponse
     */
    public function listDashboard($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the custom domain names that are bound to projects.
     *  *
     * @description *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Only one custom domain name can be bound to each project.
     *  *
     * @param string             $project
     * @param ListDomainsRequest $request ListDomainsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomainsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['domainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDomains',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/domains',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the custom domain names that are bound to projects.
     *  *
     * @description *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Only one custom domain name can be bound to each project.
     *  *
     * @param string             $project
     * @param ListDomainsRequest $request ListDomainsRequest
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomains($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 列出数据加工任务
     *  *
     * @param string          $project
     * @param ListETLsRequest $request ListETLsRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListETLsResponse ListETLsResponse
     */
    public function listETLsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->logstore)) {
            $query['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListETLs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etls',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListETLsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 列出数据加工任务
     *  *
     * @param string          $project
     * @param ListETLsRequest $request ListETLsRequest
     *
     * @return ListETLsResponse ListETLsResponse
     */
    public function listETLs($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listETLsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of external stores.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                   $project
     * @param ListExternalStoreRequest $request ListExternalStoreRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExternalStoreResponse ListExternalStoreResponse
     */
    public function listExternalStoreWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $query['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->sizs)) {
            $query['sizs'] = $request->sizs;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of external stores.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                   $project
     * @param ListExternalStoreRequest $request ListExternalStoreRequest
     *
     * @return ListExternalStoreResponse ListExternalStoreResponse
     */
    public function listExternalStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExternalStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries all Logstores or Logstores that match specific conditions in a project.
     *  *
     * @description ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ListLogStores`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/*`|
     *  *
     * @param string               $project
     * @param ListLogStoresRequest $request ListLogStoresRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLogStoresResponse ListLogStoresResponse
     */
    public function listLogStoresWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->logstoreName)) {
            $query['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->telemetryType)) {
            $query['telemetryType'] = $request->telemetryType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogStores',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogStoresResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all Logstores or Logstores that match specific conditions in a project.
     *  *
     * @description ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ListLogStores`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/*`|
     *  *
     * @param string               $project
     * @param ListLogStoresRequest $request ListLogStoresRequest
     *
     * @return ListLogStoresResponse ListLogStoresResponse
     */
    public function listLogStores($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogStoresWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of Logtail pipeline configurations that meet the specified conditions.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string                           $project
     * @param ListLogtailPipelineConfigRequest $request ListLogtailPipelineConfigRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLogtailPipelineConfigResponse ListLogtailPipelineConfigResponse
     */
    public function listLogtailPipelineConfigWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->configName)) {
            $query['configName'] = $request->configName;
        }
        if (!Utils::isUnset($request->logstoreName)) {
            $query['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogtailPipelineConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pipelineconfigs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of Logtail pipeline configurations that meet the specified conditions.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string                           $project
     * @param ListLogtailPipelineConfigRequest $request ListLogtailPipelineConfigRequest
     *
     * @return ListLogtailPipelineConfigResponse ListLogtailPipelineConfigResponse
     */
    public function listLogtailPipelineConfig($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogtailPipelineConfigWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the machine groups of a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                  $project
     * @param ListMachineGroupRequest $request ListMachineGroupRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMachineGroupResponse ListMachineGroupResponse
     */
    public function listMachineGroupWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['groupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the machine groups of a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                  $project
     * @param ListMachineGroupRequest $request ListMachineGroupRequest
     *
     * @return ListMachineGroupResponse ListMachineGroupResponse
     */
    public function listMachineGroup($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMachineGroupWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of machines that are connected to Simple Log Service in a specified machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string              $project
     * @param string              $machineGroup
     * @param ListMachinesRequest $request      ListMachinesRequest
     * @param string[]            $headers      map
     * @param RuntimeOptions      $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListMachinesResponse ListMachinesResponse
     */
    public function listMachinesWithOptions($project, $machineGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMachines',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/machines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMachinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of machines that are connected to Simple Log Service in a specified machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string              $project
     * @param string              $machineGroup
     * @param ListMachinesRequest $request      ListMachinesRequest
     *
     * @return ListMachinesResponse ListMachinesResponse
     */
    public function listMachines($project, $machineGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMachinesWithOptions($project, $machineGroup, $request, $headers, $runtime);
    }

    /**
     * @summary 列出OSS投递任务
     *  *
     * @param string                $project
     * @param ListOSSExportsRequest $request ListOSSExportsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOSSExportsResponse ListOSSExportsResponse
     */
    public function listOSSExportsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->logstore)) {
            $query['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOSSExports',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossexports',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOSSExportsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 列出OSS投递任务
     *  *
     * @param string                $project
     * @param ListOSSExportsRequest $request ListOSSExportsRequest
     *
     * @return ListOSSExportsResponse ListOSSExportsResponse
     */
    public function listOSSExports($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOSSExportsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 列举OSSHDFS投递任务
     *  *
     * @param string                    $project
     * @param ListOSSHDFSExportsRequest $request ListOSSHDFSExportsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOSSHDFSExportsResponse ListOSSHDFSExportsResponse
     */
    public function listOSSHDFSExportsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->logstore)) {
            $query['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOSSHDFSExports',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/osshdfsexports',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOSSHDFSExportsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 列举OSSHDFS投递任务
     *  *
     * @param string                    $project
     * @param ListOSSHDFSExportsRequest $request ListOSSHDFSExportsRequest
     *
     * @return ListOSSHDFSExportsResponse ListOSSHDFSExportsResponse
     */
    public function listOSSHDFSExports($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOSSHDFSExportsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 列出oss导入任务
     *  *
     * @param string                   $project
     * @param ListOSSIngestionsRequest $request ListOSSIngestionsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOSSIngestionsResponse ListOSSIngestionsResponse
     */
    public function listOSSIngestionsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->logstore)) {
            $query['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOSSIngestions',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossingestions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOSSIngestionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 列出oss导入任务
     *  *
     * @param string                   $project
     * @param ListOSSIngestionsRequest $request ListOSSIngestionsRequest
     *
     * @return ListOSSIngestionsResponse ListOSSIngestionsResponse
     */
    public function listOSSIngestions($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOSSIngestionsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the projects that meet specified conditions.
     *  *
     * @description ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param ListProjectRequest $request ListProjectRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectResponse ListProjectResponse
     */
    public function listProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fetchQuota)) {
            $query['fetchQuota'] = $request->fetchQuota;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['projectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the projects that meet specified conditions.
     *  *
     * @description ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param ListProjectRequest $request ListProjectRequest
     *
     * @return ListProjectResponse ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of saved searches.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                 $project
     * @param ListSavedSearchRequest $request ListSavedSearchRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSavedSearchResponse ListSavedSearchResponse
     */
    public function listSavedSearchWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of saved searches.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                 $project
     * @param ListSavedSearchRequest $request ListSavedSearchRequest
     *
     * @return ListSavedSearchResponse ListSavedSearchResponse
     */
    public function listSavedSearch($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSavedSearchWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 列举定时SQL任务
     *  *
     * @param string                   $project
     * @param ListScheduledSQLsRequest $request ListScheduledSQLsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScheduledSQLsResponse ListScheduledSQLsResponse
     */
    public function listScheduledSQLsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->logstore)) {
            $query['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScheduledSQLs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scheduledsqls',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScheduledSQLsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 列举定时SQL任务
     *  *
     * @param string                   $project
     * @param ListScheduledSQLsRequest $request ListScheduledSQLsRequest
     *
     * @return ListScheduledSQLsResponse ListScheduledSQLsResponse
     */
    public function listScheduledSQLs($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScheduledSQLsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of shards in a Logstore.
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListShardsResponse ListShardsResponse
     */
    public function listShardsWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListShards',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListShardsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of shards in a Logstore.
     *  *
     * @param string $project
     * @param string $logstore
     *
     * @return ListShardsResponse ListShardsResponse
     */
    public function listShards($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShardsWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI ListShipper is deprecated
     *  *
     * @summary Queries a list of log shipping jobs in a Logstore.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * Deprecated
     *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListShipperResponse ListShipperResponse
     */
    public function listShipperWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListShipper',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListShipperResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI ListShipper is deprecated
     *  *
     * @summary Queries a list of log shipping jobs in a Logstore.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * Deprecated
     *
     * @param string $project
     * @param string $logstore
     *
     * @return ListShipperResponse ListShipperResponse
     */
    public function listShipper($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShipperWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @summary 查询StoreView列表
     *  *
     * @param string                $project
     * @param ListStoreViewsRequest $request ListStoreViewsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStoreViewsResponse ListStoreViewsResponse
     */
    public function listStoreViewsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->storeType)) {
            $query['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStoreViews',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/storeviews',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListStoreViewsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询StoreView列表
     *  *
     * @param string                $project
     * @param ListStoreViewsRequest $request ListStoreViewsRequest
     *
     * @return ListStoreViewsResponse ListStoreViewsResponse
     */
    public function listStoreViews($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStoreViewsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of tags for one or more resources. You can query tags for resources by resource type or filter resources by tag. Each tag is a key-value pair.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param ListTagResourcesRequest $tmpReq  ListTagResourcesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceId)) {
            $request->resourceIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->resourceIdShrink)) {
            $query['resourceId'] = $request->resourceIdShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of tags for one or more resources. You can query tags for resources by resource type or filter resources by tag. Each tag is a key-value pair.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 合并两个相邻的readwrite状态的Shards。在参数中指定一个shardID，服务端自动找相邻的下一个Shard进行合并。
     *  *
     * @param string         $project
     * @param string         $logstore
     * @param string         $shard
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return MergeShardResponse MergeShardResponse
     */
    public function mergeShardWithOptions($project, $logstore, $shard, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'MergeShard',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shard . '?action=merge',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return MergeShardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 合并两个相邻的readwrite状态的Shards。在参数中指定一个shardID，服务端自动找相邻的下一个Shard进行合并。
     *  *
     * @param string $project
     * @param string $logstore
     * @param string $shard
     *
     * @return MergeShardResponse MergeShardResponse
     */
    public function mergeShard($project, $logstore, $shard)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->mergeShardWithOptions($project, $logstore, $shard, $headers, $runtime);
    }

    /**
     * @summary openSlsService
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenSlsServiceResponse OpenSlsServiceResponse
     */
    public function openSlsServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'OpenSlsService',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/slsservice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return OpenSlsServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary openSlsService
     *  *
     * @return OpenSlsServiceResponse OpenSlsServiceResponse
     */
    public function openSlsService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openSlsServiceWithOptions($headers, $runtime);
    }

    /**
     * @summary Adds data to a dataset for storage.
     *  *
     * @param string                   $datasetId
     * @param PutAnnotationDataRequest $request   PutAnnotationDataRequest
     * @param string[]                 $headers   map
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return PutAnnotationDataResponse PutAnnotationDataResponse
     */
    public function putAnnotationDataWithOptions($datasetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->annotationdataId)) {
            $query['annotationdataId'] = $request->annotationdataId;
        }
        $body = [];
        if (!Utils::isUnset($request->mlDataParam)) {
            $body['mlDataParam'] = $request->mlDataParam;
        }
        if (!Utils::isUnset($request->rawLog)) {
            $body['rawLog'] = $request->rawLog;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutAnnotationData',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationdataset/' . $datasetId . '/annotationdata',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PutAnnotationDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds data to a dataset for storage.
     *  *
     * @param string                   $datasetId
     * @param PutAnnotationDataRequest $request   PutAnnotationDataRequest
     *
     * @return PutAnnotationDataResponse PutAnnotationDataResponse
     */
    public function putAnnotationData($datasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putAnnotationDataWithOptions($datasetId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a project policy.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Alibaba Cloud Simple Log Service allows you to configure a project policy to authorize other users to access the specified Log Service resources.
     *     *   You must configure a project policy based on policy syntax. Before you configure a project policy, you must be familiar with the Action, Resource, and Condition parameters. For more information, see [RAM](https://help.aliyun.com/document_detail/128139.html).
     *     *   If you set the Principal element to an asterisk (\\*) and do not configure the Condition element when you configure a project policy, the policy applies to all users except for the project owner. If you set the Principal element to an asterisk (\\*) and configure the Condition element when you configure a project policy, the policy applies to all users including the project owner.
     *     *   You can configure multiple project policies for a project. The total size of the policies cannot exceed 16 KB.
     *  *
     * @param string                  $project
     * @param PutProjectPolicyRequest $request PutProjectPolicyRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return PutProjectPolicyResponse PutProjectPolicyResponse
     */
    public function putProjectPolicyWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'PutProjectPolicy',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/policy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PutProjectPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a project policy.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Alibaba Cloud Simple Log Service allows you to configure a project policy to authorize other users to access the specified Log Service resources.
     *     *   You must configure a project policy based on policy syntax. Before you configure a project policy, you must be familiar with the Action, Resource, and Condition parameters. For more information, see [RAM](https://help.aliyun.com/document_detail/128139.html).
     *     *   If you set the Principal element to an asterisk (\\*) and do not configure the Condition element when you configure a project policy, the policy applies to all users except for the project owner. If you set the Principal element to an asterisk (\\*) and configure the Condition element when you configure a project policy, the policy applies to all users including the project owner.
     *     *   You can configure multiple project policies for a project. The total size of the policies cannot exceed 16 KB.
     *  *
     * @param string                  $project
     * @param PutProjectPolicyRequest $request PutProjectPolicyRequest
     *
     * @return PutProjectPolicyResponse PutProjectPolicyResponse
     */
    public function putProjectPolicy($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProjectPolicyWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 设置project传输加速状态
     *  *
     * @param string                                $project
     * @param PutProjectTransferAccelerationRequest $request PutProjectTransferAccelerationRequest
     * @param string[]                              $headers map
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return PutProjectTransferAccelerationResponse PutProjectTransferAccelerationResponse
     */
    public function putProjectTransferAccelerationWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->enabled)) {
            $body['enabled'] = $request->enabled;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutProjectTransferAcceleration',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/transferacceleration',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PutProjectTransferAccelerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 设置project传输加速状态
     *  *
     * @param string                                $project
     * @param PutProjectTransferAccelerationRequest $request PutProjectTransferAccelerationRequest
     *
     * @return PutProjectTransferAccelerationResponse PutProjectTransferAccelerationResponse
     */
    public function putProjectTransferAcceleration($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProjectTransferAccelerationWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Sends multiple logs to Simple Log Service in one request.
     *  *
     * @description ### [](#)Usage notes
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * *   You can call this operation to collect logs from web pages or clients.
     * *   If you use web tracking to collect logs and you do not call this operation, you can send only one log to Simple Log Service in a request. For more information, see [Use web tracking to collect logs](https://help.aliyun.com/document_detail/31752.html).
     * *   If you want to collect a large amount of log data, you can call this operation to send multiple logs to Simple Log Service in one request.
     * *   Before you can call this operation to send logs to a Logstore, you must enable web tracking for the Logstore. For more information, see [Use web tracking to collect logs](https://help.aliyun.com/document_detail/31752.html).
     * *   You cannot call this operation to send the logs of multiple topics to Simple Log Service at a time.
     * *   If you call this operation, anonymous users from the Internet are granted the write permissions on the Logstore. This may generate dirty data because AccessKey pair-based authentication is not performed.
     *  *
     * @param string                $project
     * @param string                $logstoreName
     * @param PutWebtrackingRequest $request      PutWebtrackingRequest
     * @param string[]              $headers      map
     * @param RuntimeOptions        $runtime      runtime options for this request RuntimeOptions
     *
     * @return PutWebtrackingResponse PutWebtrackingResponse
     */
    public function putWebtrackingWithOptions($project, $logstoreName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->logs)) {
            $body['__logs__'] = $request->logs;
        }
        if (!Utils::isUnset($request->source)) {
            $body['__source__'] = $request->source;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['__tags__'] = $request->tags;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['__topic__'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutWebtracking',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstoreName . '/track',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PutWebtrackingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Sends multiple logs to Simple Log Service in one request.
     *  *
     * @description ### [](#)Usage notes
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * *   You can call this operation to collect logs from web pages or clients.
     * *   If you use web tracking to collect logs and you do not call this operation, you can send only one log to Simple Log Service in a request. For more information, see [Use web tracking to collect logs](https://help.aliyun.com/document_detail/31752.html).
     * *   If you want to collect a large amount of log data, you can call this operation to send multiple logs to Simple Log Service in one request.
     * *   Before you can call this operation to send logs to a Logstore, you must enable web tracking for the Logstore. For more information, see [Use web tracking to collect logs](https://help.aliyun.com/document_detail/31752.html).
     * *   You cannot call this operation to send the logs of multiple topics to Simple Log Service at a time.
     * *   If you call this operation, anonymous users from the Internet are granted the write permissions on the Logstore. This may generate dirty data because AccessKey pair-based authentication is not performed.
     *  *
     * @param string                $project
     * @param string                $logstoreName
     * @param PutWebtrackingRequest $request      PutWebtrackingRequest
     *
     * @return PutWebtrackingResponse PutWebtrackingResponse
     */
    public function putWebtracking($project, $logstoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putWebtrackingWithOptions($project, $logstoreName, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI QueryMLServiceResults is deprecated
     *  *
     * @summary queryMLServiceResults
     *  *
     * Deprecated
     *
     * @param string                       $serviceName
     * @param QueryMLServiceResultsRequest $request     QueryMLServiceResultsRequest
     * @param string[]                     $headers     map
     * @param RuntimeOptions               $runtime     runtime options for this request RuntimeOptions
     *
     * @return QueryMLServiceResultsResponse QueryMLServiceResultsResponse
     */
    public function queryMLServiceResultsWithOptions($serviceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowBuiltin)) {
            $query['allowBuiltin'] = $request->allowBuiltin;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryMLServiceResults',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/service/' . $serviceName . '/analysis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryMLServiceResultsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI QueryMLServiceResults is deprecated
     *  *
     * @summary queryMLServiceResults
     *  *
     * Deprecated
     *
     * @param string                       $serviceName
     * @param QueryMLServiceResultsRequest $request     QueryMLServiceResultsRequest
     *
     * @return QueryMLServiceResultsResponse QueryMLServiceResultsResponse
     */
    public function queryMLServiceResults($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryMLServiceResultsWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * @summary 刷新token
     *  *
     * @param RefreshTokenRequest $request RefreshTokenRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshTokenResponse RefreshTokenResponse
     */
    public function refreshTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessTokenExpirationTime)) {
            $query['accessTokenExpirationTime'] = $request->accessTokenExpirationTime;
        }
        if (!Utils::isUnset($request->ticket)) {
            $query['ticket'] = $request->ticket;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshToken',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/token/refresh',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefreshTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 刷新token
     *  *
     * @param RefreshTokenRequest $request RefreshTokenRequest
     *
     * @return RefreshTokenResponse RefreshTokenResponse
     */
    public function refreshToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Removes a Logtail configuration from a machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string         $project
     * @param string         $machineGroup
     * @param string         $configName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return RemoveConfigFromMachineGroupResponse RemoveConfigFromMachineGroupResponse
     */
    public function removeConfigFromMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveConfigFromMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/configs/' . $configName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return RemoveConfigFromMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Removes a Logtail configuration from a machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string $project
     * @param string $machineGroup
     * @param string $configName
     *
     * @return RemoveConfigFromMachineGroupResponse RemoveConfigFromMachineGroupResponse
     */
    public function removeConfigFromMachineGroup($project, $machineGroup, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeConfigFromMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime);
    }

    /**
     * @summary Splits a shard in the readwrite state.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Each shard has an MD5 hash range, and each range is a left-closed, right-open interval. The interval is in the `[BeginKey,EndKey)` format. A shard can be in the readwrite or readonly state. You can split a shard and merge shards. For more information, see [Shard](https://help.aliyun.com/document_detail/28976.html).
     *  *
     * @param string            $project
     * @param string            $logstore
     * @param string            $shard
     * @param SplitShardRequest $request  SplitShardRequest
     * @param string[]          $headers  map
     * @param RuntimeOptions    $runtime  runtime options for this request RuntimeOptions
     *
     * @return SplitShardResponse SplitShardResponse
     */
    public function splitShardWithOptions($project, $logstore, $shard, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->key)) {
            $query['key'] = $request->key;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $query['shardCount'] = $request->shardCount;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SplitShard',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shard . '?action=split',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return SplitShardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Splits a shard in the readwrite state.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Each shard has an MD5 hash range, and each range is a left-closed, right-open interval. The interval is in the `[BeginKey,EndKey)` format. A shard can be in the readwrite or readonly state. You can split a shard and merge shards. For more information, see [Shard](https://help.aliyun.com/document_detail/28976.html).
     *  *
     * @param string            $project
     * @param string            $logstore
     * @param string            $shard
     * @param SplitShardRequest $request  SplitShardRequest
     *
     * @return SplitShardResponse SplitShardResponse
     */
    public function splitShard($project, $logstore, $shard, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->splitShardWithOptions($project, $logstore, $shard, $request, $headers, $runtime);
    }

    /**
     * @summary 启动数据加工任务
     *  *
     * @param string         $project
     * @param string         $etlName
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StartETLResponse StartETLResponse
     */
    public function startETLWithOptions($project, $etlName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartETL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etls/' . $etlName . '?action=START',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StartETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 启动数据加工任务
     *  *
     * @param string $project
     * @param string $etlName
     *
     * @return StartETLResponse StartETLResponse
     */
    public function startETL($project, $etlName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startETLWithOptions($project, $etlName, $headers, $runtime);
    }

    /**
     * @summary 启动OSS投递任务
     *  *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return StartOSSExportResponse StartOSSExportResponse
     */
    public function startOSSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartOSSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossexports/' . $ossExportName . '?action=START',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StartOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 启动OSS投递任务
     *  *
     * @param string $project
     * @param string $ossExportName
     *
     * @return StartOSSExportResponse StartOSSExportResponse
     */
    public function startOSSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startOSSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * @summary 启动OSSHDFS投递任务
     *  *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return StartOSSHDFSExportResponse StartOSSHDFSExportResponse
     */
    public function startOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartOSSHDFSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/osshdfsexports/' . $ossExportName . '?action=START',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StartOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 启动OSSHDFS投递任务
     *  *
     * @param string $project
     * @param string $ossExportName
     *
     * @return StartOSSHDFSExportResponse StartOSSHDFSExportResponse
     */
    public function startOSSHDFSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * @summary 启动OSS导入任务
     *  *
     * @param string         $project
     * @param string         $ossIngestionName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return StartOSSIngestionResponse StartOSSIngestionResponse
     */
    public function startOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartOSSIngestion',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossingestions/' . $ossIngestionName . '?action=START',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StartOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 启动OSS导入任务
     *  *
     * @param string $project
     * @param string $ossIngestionName
     *
     * @return StartOSSIngestionResponse StartOSSIngestionResponse
     */
    public function startOSSIngestion($project, $ossIngestionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime);
    }

    /**
     * @summary 停止数据加工任务
     *  *
     * @param string         $project
     * @param string         $etlName
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StopETLResponse StopETLResponse
     */
    public function stopETLWithOptions($project, $etlName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopETL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etls/' . $etlName . '?action=STOP',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StopETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 停止数据加工任务
     *  *
     * @param string $project
     * @param string $etlName
     *
     * @return StopETLResponse StopETLResponse
     */
    public function stopETL($project, $etlName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopETLWithOptions($project, $etlName, $headers, $runtime);
    }

    /**
     * @summary 停止OSS投递任务
     *  *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return StopOSSExportResponse StopOSSExportResponse
     */
    public function stopOSSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopOSSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossexports/' . $ossExportName . '?action=STOP',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StopOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 停止OSS投递任务
     *  *
     * @param string $project
     * @param string $ossExportName
     *
     * @return StopOSSExportResponse StopOSSExportResponse
     */
    public function stopOSSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopOSSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * @summary 停止OSSHDFS投递任务
     *  *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return StopOSSHDFSExportResponse StopOSSHDFSExportResponse
     */
    public function stopOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopOSSHDFSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/osshdfsexports/' . $ossExportName . '?action=STOP',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StopOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 停止OSSHDFS投递任务
     *  *
     * @param string $project
     * @param string $ossExportName
     *
     * @return StopOSSHDFSExportResponse StopOSSHDFSExportResponse
     */
    public function stopOSSHDFSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * @summary 停止OSS导入任务
     *  *
     * @param string         $project
     * @param string         $ossIngestionName
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return StopOSSIngestionResponse StopOSSIngestionResponse
     */
    public function stopOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopOSSIngestion',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossingestions/' . $ossIngestionName . '?action=STOP',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StopOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 停止OSS导入任务
     *  *
     * @param string $project
     * @param string $ossIngestionName
     *
     * @return StopOSSIngestionResponse StopOSSIngestionResponse
     */
    public function stopOSSIngestion($project, $ossIngestionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime);
    }

    /**
     * @summary Creates and adds one or more tags to a specified resource. You can add tags only to projects.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceId)) {
            $body['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tag',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates and adds one or more tags to a specified resource. You can add tags only to projects.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Detaches one or more tags from a resource. You can detach tags only from Simple Log Service projects. You can detach multiple or all tags from a Simple Log Service project at a time.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->all)) {
            $body['all'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/untag',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Detaches one or more tags from a resource. You can detach tags only from Simple Log Service projects. You can detach multiple or all tags from a Simple Log Service project at a time.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新告警
     *  *
     * @param string             $project
     * @param string             $alertName
     * @param UpdateAlertRequest $request   UpdateAlertRequest
     * @param string[]           $headers   map
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateAlertResponse UpdateAlertResponse
     */
    public function updateAlertWithOptions($project, $alertName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->schedule)) {
            $body['schedule'] = $request->schedule;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alerts/' . $alertName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新告警
     *  *
     * @param string             $project
     * @param string             $alertName
     * @param UpdateAlertRequest $request   UpdateAlertRequest
     *
     * @return UpdateAlertResponse UpdateAlertResponse
     */
    public function updateAlert($project, $alertName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertWithOptions($project, $alertName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a dataset.
     *  *
     * @param string                         $datasetId
     * @param UpdateAnnotationDataSetRequest $request   UpdateAnnotationDataSetRequest
     * @param string[]                       $headers   map
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateAnnotationDataSetResponse UpdateAnnotationDataSetResponse
     */
    public function updateAnnotationDataSetWithOptions($datasetId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAnnotationDataSet',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationdataset/' . $datasetId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateAnnotationDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a dataset.
     *  *
     * @param string                         $datasetId
     * @param UpdateAnnotationDataSetRequest $request   UpdateAnnotationDataSetRequest
     *
     * @return UpdateAnnotationDataSetResponse UpdateAnnotationDataSetResponse
     */
    public function updateAnnotationDataSet($datasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAnnotationDataSetWithOptions($datasetId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a tag table.
     *  *
     * @description You can update only the names of the tags in a tag set.
     *  *
     * @param UpdateAnnotationLabelRequest $request UpdateAnnotationLabelRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAnnotationLabelResponse UpdateAnnotationLabelResponse
     */
    public function updateAnnotationLabelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAnnotationLabel',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ml/annotationlabel',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateAnnotationLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a tag table.
     *  *
     * @description You can update only the names of the tags in a tag set.
     *  *
     * @param UpdateAnnotationLabelRequest $request UpdateAnnotationLabelRequest
     *
     * @return UpdateAnnotationLabelResponse UpdateAnnotationLabelResponse
     */
    public function updateAnnotationLabel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAnnotationLabelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates a Logtail configuration.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   After you update a Logtail configuration that is applied to a machine group, the new configuration immediately takes effect.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The Logtail configuration is planned out. For more information, see [Logtail configurations](https://help.aliyun.com/document_detail/29058.html).
     *  *
     * @param string              $project
     * @param string              $configName
     * @param UpdateConfigRequest $request    UpdateConfigRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateConfigResponse UpdateConfigResponse
     */
    public function updateConfigWithOptions($project, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/configs/' . $configName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a Logtail configuration.
     *  *
     * @description ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   After you update a Logtail configuration that is applied to a machine group, the new configuration immediately takes effect.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The Logtail configuration is planned out. For more information, see [Logtail configurations](https://help.aliyun.com/document_detail/29058.html).
     *  *
     * @param string              $project
     * @param string              $configName
     * @param UpdateConfigRequest $request    UpdateConfigRequest
     *
     * @return UpdateConfigResponse UpdateConfigResponse
     */
    public function updateConfig($project, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConfigWithOptions($project, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the attributes of a consumer group.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                     $project
     * @param string                     $logstore
     * @param string                     $consumerGroup
     * @param UpdateConsumerGroupRequest $request       UpdateConsumerGroupRequest
     * @param string[]                   $headers       map
     * @param RuntimeOptions             $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateConsumerGroupResponse UpdateConsumerGroupResponse
     */
    public function updateConsumerGroupWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the attributes of a consumer group.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                     $project
     * @param string                     $logstore
     * @param string                     $consumerGroup
     * @param UpdateConsumerGroupRequest $request       UpdateConsumerGroupRequest
     *
     * @return UpdateConsumerGroupResponse UpdateConsumerGroupResponse
     */
    public function updateConsumerGroup($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerGroupWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a dashboard.
     *  *
     * @description ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                 $project
     * @param string                 $dashboardName
     * @param UpdateDashboardRequest $request       UpdateDashboardRequest
     * @param string[]               $headers       map
     * @param RuntimeOptions         $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateDashboardResponse UpdateDashboardResponse
     */
    public function updateDashboardWithOptions($project, $dashboardName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->attribute)) {
            $body['attribute'] = $request->attribute;
        }
        if (!Utils::isUnset($request->charts)) {
            $body['charts'] = $request->charts;
        }
        if (!Utils::isUnset($request->dashboardName)) {
            $body['dashboardName'] = $request->dashboardName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDashboard',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dashboards/' . $dashboardName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a dashboard.
     *  *
     * @description ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                 $project
     * @param string                 $dashboardName
     * @param UpdateDashboardRequest $request       UpdateDashboardRequest
     *
     * @return UpdateDashboardResponse UpdateDashboardResponse
     */
    public function updateDashboard($project, $dashboardName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDashboardWithOptions($project, $dashboardName, $request, $headers, $runtime);
    }

    /**
     * @summary 更新数据加工任务
     *  *
     * @param string           $project
     * @param string           $etlName
     * @param UpdateETLRequest $request UpdateETLRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateETLResponse UpdateETLResponse
     */
    public function updateETLWithOptions($project, $etlName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateETL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etls/' . $etlName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新数据加工任务
     *  *
     * @param string           $project
     * @param string           $etlName
     * @param UpdateETLRequest $request UpdateETLRequest
     *
     * @return UpdateETLResponse UpdateETLResponse
     */
    public function updateETL($project, $etlName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateETLWithOptions($project, $etlName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the indexes of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string             $project
     * @param string             $logstore
     * @param UpdateIndexRequest $request  UpdateIndexRequest
     * @param string[]           $headers  map
     * @param RuntimeOptions     $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateIndexResponse UpdateIndexResponse
     */
    public function updateIndexWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->keys)) {
            $body['keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->line)) {
            $body['line'] = $request->line;
        }
        if (!Utils::isUnset($request->logReduce)) {
            $body['log_reduce'] = $request->logReduce;
        }
        if (!Utils::isUnset($request->logReduceBlackList)) {
            $body['log_reduce_black_list'] = $request->logReduceBlackList;
        }
        if (!Utils::isUnset($request->logReduceWhiteList)) {
            $body['log_reduce_white_list'] = $request->logReduceWhiteList;
        }
        if (!Utils::isUnset($request->maxTextLen)) {
            $body['max_text_len'] = $request->maxTextLen;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the indexes of a Logstore.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string             $project
     * @param string             $logstore
     * @param UpdateIndexRequest $request  UpdateIndexRequest
     *
     * @return UpdateIndexResponse UpdateIndexResponse
     */
    public function updateIndex($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIndexWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the attributes of a Logstore.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     * *   You can call the UpdateLogStore operation to change only the time-to-live (TTL) attribute.
     *  *
     * @param string                $project
     * @param string                $logstore
     * @param UpdateLogStoreRequest $request  UpdateLogStoreRequest
     * @param string[]              $headers  map
     * @param RuntimeOptions        $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateLogStoreResponse UpdateLogStoreResponse
     */
    public function updateLogStoreWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->appendMeta)) {
            $body['appendMeta'] = $request->appendMeta;
        }
        if (!Utils::isUnset($request->autoSplit)) {
            $body['autoSplit'] = $request->autoSplit;
        }
        if (!Utils::isUnset($request->enableTracking)) {
            $body['enable_tracking'] = $request->enableTracking;
        }
        if (!Utils::isUnset($request->encryptConf)) {
            $body['encrypt_conf'] = $request->encryptConf;
        }
        if (!Utils::isUnset($request->hotTtl)) {
            $body['hot_ttl'] = $request->hotTtl;
        }
        if (!Utils::isUnset($request->infrequentAccessTTL)) {
            $body['infrequentAccessTTL'] = $request->infrequentAccessTTL;
        }
        if (!Utils::isUnset($request->logstoreName)) {
            $body['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->maxSplitShard)) {
            $body['maxSplitShard'] = $request->maxSplitShard;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $body['shardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->telemetryType)) {
            $body['telemetryType'] = $request->telemetryType;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the attributes of a Logstore.
     *  *
     * @description ### Usage notes
     * *   Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     * *   You can call the UpdateLogStore operation to change only the time-to-live (TTL) attribute.
     *  *
     * @param string                $project
     * @param string                $logstore
     * @param UpdateLogStoreRequest $request  UpdateLogStoreRequest
     *
     * @return UpdateLogStoreResponse UpdateLogStoreResponse
     */
    public function updateLogStore($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogStoreWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @summary 更新LogStore计量模式
     *  *
     * @param string                            $project
     * @param string                            $logstore
     * @param UpdateLogStoreMeteringModeRequest $request  UpdateLogStoreMeteringModeRequest
     * @param string[]                          $headers  map
     * @param RuntimeOptions                    $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateLogStoreMeteringModeResponse UpdateLogStoreMeteringModeResponse
     */
    public function updateLogStoreMeteringModeWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->meteringMode)) {
            $body['meteringMode'] = $request->meteringMode;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLogStoreMeteringMode',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/meteringmode',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateLogStoreMeteringModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新LogStore计量模式
     *  *
     * @param string                            $project
     * @param string                            $logstore
     * @param UpdateLogStoreMeteringModeRequest $request  UpdateLogStoreMeteringModeRequest
     *
     * @return UpdateLogStoreMeteringModeResponse UpdateLogStoreMeteringModeResponse
     */
    public function updateLogStoreMeteringMode($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogStoreMeteringModeWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the service log configurations of a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string               $project
     * @param UpdateLoggingRequest $request UpdateLoggingRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoggingResponse UpdateLoggingResponse
     */
    public function updateLoggingWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->loggingDetails)) {
            $body['loggingDetails'] = $request->loggingDetails;
        }
        if (!Utils::isUnset($request->loggingProject)) {
            $body['loggingProject'] = $request->loggingProject;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLogging',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logging',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the service log configurations of a project.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string               $project
     * @param UpdateLoggingRequest $request UpdateLoggingRequest
     *
     * @return UpdateLoggingResponse UpdateLoggingResponse
     */
    public function updateLogging($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLoggingWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a Logtail pipeline configuration.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string                             $project
     * @param string                             $configName
     * @param UpdateLogtailPipelineConfigRequest $request    UpdateLogtailPipelineConfigRequest
     * @param string[]                           $headers    map
     * @param RuntimeOptions                     $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateLogtailPipelineConfigResponse UpdateLogtailPipelineConfigResponse
     */
    public function updateLogtailPipelineConfigWithOptions($project, $configName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->aggregators)) {
            $body['aggregators'] = $request->aggregators;
        }
        if (!Utils::isUnset($request->configName)) {
            $body['configName'] = $request->configName;
        }
        if (!Utils::isUnset($request->flushers)) {
            $body['flushers'] = $request->flushers;
        }
        if (!Utils::isUnset($request->global_)) {
            $body['global'] = $request->global_;
        }
        if (!Utils::isUnset($request->inputs)) {
            $body['inputs'] = $request->inputs;
        }
        if (!Utils::isUnset($request->logSample)) {
            $body['logSample'] = $request->logSample;
        }
        if (!Utils::isUnset($request->processors)) {
            $body['processors'] = $request->processors;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLogtailPipelineConfig',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/pipelineconfigs/' . $configName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a Logtail pipeline configuration.
     *  *
     * @description The UK (London) region is supported. Supported regions are constantly updated.
     *  *
     * @param string                             $project
     * @param string                             $configName
     * @param UpdateLogtailPipelineConfigRequest $request    UpdateLogtailPipelineConfigRequest
     *
     * @return UpdateLogtailPipelineConfigResponse UpdateLogtailPipelineConfigResponse
     */
    public function updateLogtailPipelineConfig($project, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogtailPipelineConfigWithOptions($project, $configName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the configuration of a machine group.
     *  *
     * @description Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                    $project
     * @param string                    $groupName
     * @param UpdateMachineGroupRequest $request   UpdateMachineGroupRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateMachineGroupResponse UpdateMachineGroupResponse
     */
    public function updateMachineGroupWithOptions($project, $groupName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->groupAttribute)) {
            $body['groupAttribute'] = $request->groupAttribute;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['groupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $body['groupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->machineIdentifyType)) {
            $body['machineIdentifyType'] = $request->machineIdentifyType;
        }
        if (!Utils::isUnset($request->machineList)) {
            $body['machineList'] = $request->machineList;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $groupName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of a machine group.
     *  *
     * @description Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                    $project
     * @param string                    $groupName
     * @param UpdateMachineGroupRequest $request   UpdateMachineGroupRequest
     *
     * @return UpdateMachineGroupResponse UpdateMachineGroupResponse
     */
    public function updateMachineGroup($project, $groupName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMachineGroupWithOptions($project, $groupName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies the machines in a machine group. You can add machine to or remove machines from the machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                           $project
     * @param string                           $machineGroup
     * @param UpdateMachineGroupMachineRequest $request      UpdateMachineGroupMachineRequest
     * @param string[]                         $headers      map
     * @param RuntimeOptions                   $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateMachineGroupMachineResponse UpdateMachineGroupMachineResponse
     */
    public function updateMachineGroupMachineWithOptions($project, $machineGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->action)) {
            $query['action'] = $request->action;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateMachineGroupMachine',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/machines',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateMachineGroupMachineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the machines in a machine group. You can add machine to or remove machines from the machine group.
     *  *
     * @description Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                           $project
     * @param string                           $machineGroup
     * @param UpdateMachineGroupMachineRequest $request      UpdateMachineGroupMachineRequest
     *
     * @return UpdateMachineGroupMachineResponse UpdateMachineGroupMachineResponse
     */
    public function updateMachineGroupMachine($project, $machineGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMachineGroupMachineWithOptions($project, $machineGroup, $request, $headers, $runtime);
    }

    /**
     * @summary 更新 MetricStore 计量模式
     *  *
     * @param string                               $project
     * @param string                               $metricStore
     * @param UpdateMetricStoreMeteringModeRequest $request     UpdateMetricStoreMeteringModeRequest
     * @param string[]                             $headers     map
     * @param RuntimeOptions                       $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateMetricStoreMeteringModeResponse UpdateMetricStoreMeteringModeResponse
     */
    public function updateMetricStoreMeteringModeWithOptions($project, $metricStore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->meteringMode)) {
            $body['meteringMode'] = $request->meteringMode;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMetricStoreMeteringMode',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/metricstores/' . $metricStore . '/meteringmode',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateMetricStoreMeteringModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新 MetricStore 计量模式
     *  *
     * @param string                               $project
     * @param string                               $metricStore
     * @param UpdateMetricStoreMeteringModeRequest $request     UpdateMetricStoreMeteringModeRequest
     *
     * @return UpdateMetricStoreMeteringModeResponse UpdateMetricStoreMeteringModeResponse
     */
    public function updateMetricStoreMeteringMode($project, $metricStore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMetricStoreMeteringModeWithOptions($project, $metricStore, $request, $headers, $runtime);
    }

    /**
     * @summary 更新OSS投递任务
     *  *
     * @param string                 $project
     * @param string                 $ossExportName
     * @param UpdateOSSExportRequest $request       UpdateOSSExportRequest
     * @param string[]               $headers       map
     * @param RuntimeOptions         $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateOSSExportResponse UpdateOSSExportResponse
     */
    public function updateOSSExportWithOptions($project, $ossExportName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateOSSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossexports/' . $ossExportName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新OSS投递任务
     *  *
     * @param string                 $project
     * @param string                 $ossExportName
     * @param UpdateOSSExportRequest $request       UpdateOSSExportRequest
     *
     * @return UpdateOSSExportResponse UpdateOSSExportResponse
     */
    public function updateOSSExport($project, $ossExportName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOSSExportWithOptions($project, $ossExportName, $request, $headers, $runtime);
    }

    /**
     * @summary 更新OSSHDFS投递任务
     *  *
     * @param string                     $project
     * @param string                     $ossExportName
     * @param UpdateOSSHDFSExportRequest $request       UpdateOSSHDFSExportRequest
     * @param string[]                   $headers       map
     * @param RuntimeOptions             $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateOSSHDFSExportResponse UpdateOSSHDFSExportResponse
     */
    public function updateOSSHDFSExportWithOptions($project, $ossExportName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateOSSHDFSExport',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/osshdfsexports/' . $ossExportName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新OSSHDFS投递任务
     *  *
     * @param string                     $project
     * @param string                     $ossExportName
     * @param UpdateOSSHDFSExportRequest $request       UpdateOSSHDFSExportRequest
     *
     * @return UpdateOSSHDFSExportResponse UpdateOSSHDFSExportResponse
     */
    public function updateOSSHDFSExport($project, $ossExportName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOSSHDFSExportWithOptions($project, $ossExportName, $request, $headers, $runtime);
    }

    /**
     * @summary 更新oss导入任务
     *  *
     * @param string                    $project
     * @param string                    $ossIngestionName
     * @param UpdateOSSIngestionRequest $request          UpdateOSSIngestionRequest
     * @param string[]                  $headers          map
     * @param RuntimeOptions            $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateOSSIngestionResponse UpdateOSSIngestionResponse
     */
    public function updateOSSIngestionWithOptions($project, $ossIngestionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->schedule)) {
            $body['schedule'] = $request->schedule;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateOSSIngestion',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ossingestions/' . $ossIngestionName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新oss导入任务
     *  *
     * @param string                    $project
     * @param string                    $ossIngestionName
     * @param UpdateOSSIngestionRequest $request          UpdateOSSIngestionRequest
     *
     * @return UpdateOSSIngestionResponse UpdateOSSIngestionResponse
     */
    public function updateOSSIngestion($project, $ossIngestionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOSSIngestionWithOptions($project, $ossIngestionName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates an Object Storage Service (OSS) external store.
     *  *
     * @description ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param string                        $externalStoreName
     * @param UpdateOssExternalStoreRequest $request           UpdateOssExternalStoreRequest
     * @param string[]                      $headers           map
     * @param RuntimeOptions                $runtime           runtime options for this request RuntimeOptions
     *
     * @return UpdateOssExternalStoreResponse UpdateOssExternalStoreResponse
     */
    public function updateOssExternalStoreWithOptions($project, $externalStoreName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $body['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->parameter)) {
            $body['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateOssExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores/' . $externalStoreName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateOssExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates an Object Storage Service (OSS) external store.
     *  *
     * @description ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param string                        $externalStoreName
     * @param UpdateOssExternalStoreRequest $request           UpdateOssExternalStoreRequest
     *
     * @return UpdateOssExternalStoreResponse UpdateOssExternalStoreResponse
     */
    public function updateOssExternalStore($project, $externalStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOssExternalStoreWithOptions($project, $externalStoreName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a project.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string               $project
     * @param UpdateProjectRequest $request UpdateProjectRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProjectWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a project.
     *  *
     * @description ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string               $project
     * @param UpdateProjectRequest $request UpdateProjectRequest
     *
     * @return UpdateProjectResponse UpdateProjectResponse
     */
    public function updateProject($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary Updates an ApsaraDB RDS external store.
     *  *
     * @description Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param string                        $externalStoreName
     * @param UpdateRdsExternalStoreRequest $request           UpdateRdsExternalStoreRequest
     * @param string[]                      $headers           map
     * @param RuntimeOptions                $runtime           runtime options for this request RuntimeOptions
     *
     * @return UpdateRdsExternalStoreResponse UpdateRdsExternalStoreResponse
     */
    public function updateRdsExternalStoreWithOptions($project, $externalStoreName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $body['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->parameter)) {
            $body['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRdsExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores/' . $externalStoreName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateRdsExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates an ApsaraDB RDS external store.
     *  *
     * @description Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *  *
     * @param string                        $project
     * @param string                        $externalStoreName
     * @param UpdateRdsExternalStoreRequest $request           UpdateRdsExternalStoreRequest
     *
     * @return UpdateRdsExternalStoreResponse UpdateRdsExternalStoreResponse
     */
    public function updateRdsExternalStore($project, $externalStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRdsExternalStoreWithOptions($project, $externalStoreName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a saved search.
     *  *
     * @param string                   $project
     * @param string                   $savedsearchName
     * @param UpdateSavedSearchRequest $request         UpdateSavedSearchRequest
     * @param string[]                 $headers         map
     * @param RuntimeOptions           $runtime         runtime options for this request RuntimeOptions
     *
     * @return UpdateSavedSearchResponse UpdateSavedSearchResponse
     */
    public function updateSavedSearchWithOptions($project, $savedsearchName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->logstore)) {
            $body['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->savedsearchName)) {
            $body['savedsearchName'] = $request->savedsearchName;
        }
        if (!Utils::isUnset($request->searchQuery)) {
            $body['searchQuery'] = $request->searchQuery;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches/' . $savedsearchName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a saved search.
     *  *
     * @param string                   $project
     * @param string                   $savedsearchName
     * @param UpdateSavedSearchRequest $request         UpdateSavedSearchRequest
     *
     * @return UpdateSavedSearchResponse UpdateSavedSearchResponse
     */
    public function updateSavedSearch($project, $savedsearchName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSavedSearchWithOptions($project, $savedsearchName, $request, $headers, $runtime);
    }

    /**
     * @summary 更新定时SQL任务
     *  *
     * @param string                    $project
     * @param string                    $scheduledSQLName
     * @param UpdateScheduledSQLRequest $request          UpdateScheduledSQLRequest
     * @param string[]                  $headers          map
     * @param RuntimeOptions            $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateScheduledSQLResponse UpdateScheduledSQLResponse
     */
    public function updateScheduledSQLWithOptions($project, $scheduledSQLName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->configuration)) {
            $body['configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->schedule)) {
            $body['schedule'] = $request->schedule;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateScheduledSQL',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/scheduledsqls/' . $scheduledSQLName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新定时SQL任务
     *  *
     * @param string                    $project
     * @param string                    $scheduledSQLName
     * @param UpdateScheduledSQLRequest $request          UpdateScheduledSQLRequest
     *
     * @return UpdateScheduledSQLResponse UpdateScheduledSQLResponse
     */
    public function updateScheduledSQL($project, $scheduledSQLName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateScheduledSQLWithOptions($project, $scheduledSQLName, $request, $headers, $runtime);
    }

    /**
     * @summary 更新独享sql实例
     *  *
     * @param string                   $project
     * @param UpdateSqlInstanceRequest $request UpdateSqlInstanceRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSqlInstanceResponse UpdateSqlInstanceResponse
     */
    public function updateSqlInstanceWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->cu)) {
            $body['cu'] = $request->cu;
        }
        if (!Utils::isUnset($request->useAsDefault)) {
            $body['useAsDefault'] = $request->useAsDefault;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSqlInstance',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sqlinstance',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateSqlInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新独享sql实例
     *  *
     * @param string                   $project
     * @param UpdateSqlInstanceRequest $request UpdateSqlInstanceRequest
     *
     * @return UpdateSqlInstanceResponse UpdateSqlInstanceResponse
     */
    public function updateSqlInstance($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSqlInstanceWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @summary 更新StoreView
     *  *
     * @param string                 $project
     * @param string                 $name
     * @param UpdateStoreViewRequest $request UpdateStoreViewRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStoreViewResponse UpdateStoreViewResponse
     */
    public function updateStoreViewWithOptions($project, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        if (!Utils::isUnset($request->stores)) {
            $body['stores'] = $request->stores;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStoreView',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/storeviews/' . $name . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateStoreViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新StoreView
     *  *
     * @param string                 $project
     * @param string                 $name
     * @param UpdateStoreViewRequest $request UpdateStoreViewRequest
     *
     * @return UpdateStoreViewResponse UpdateStoreViewResponse
     */
    public function updateStoreView($project, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateStoreViewWithOptions($project, $name, $request, $headers, $runtime);
    }

    /**
     * @summary 调用UpsertCollectionPolicy接口更新采集策略的属性信息
     *  *
     * @param UpsertCollectionPolicyRequest $request UpsertCollectionPolicyRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpsertCollectionPolicyResponse UpsertCollectionPolicyResponse
     */
    public function upsertCollectionPolicyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attribute)) {
            $body['attribute'] = $request->attribute;
        }
        if (!Utils::isUnset($request->centralizeConfig)) {
            $body['centralizeConfig'] = $request->centralizeConfig;
        }
        if (!Utils::isUnset($request->centralizeEnabled)) {
            $body['centralizeEnabled'] = $request->centralizeEnabled;
        }
        if (!Utils::isUnset($request->dataCode)) {
            $body['dataCode'] = $request->dataCode;
        }
        if (!Utils::isUnset($request->enabled)) {
            $body['enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->policyConfig)) {
            $body['policyConfig'] = $request->policyConfig;
        }
        if (!Utils::isUnset($request->policyName)) {
            $body['policyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['productCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpsertCollectionPolicy',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/collectionpolicy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpsertCollectionPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 调用UpsertCollectionPolicy接口更新采集策略的属性信息
     *  *
     * @param UpsertCollectionPolicyRequest $request UpsertCollectionPolicyRequest
     *
     * @return UpsertCollectionPolicyResponse UpsertCollectionPolicyResponse
     */
    public function upsertCollectionPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upsertCollectionPolicyWithOptions($request, $headers, $runtime);
    }
}
