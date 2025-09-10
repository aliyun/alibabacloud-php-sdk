<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Sls\V20201230\Models\ApplyConfigToMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CallAiToolsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CallAiToolsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupHeartBeatRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupHeartBeatResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupUpdateCheckPointRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupUpdateCheckPointResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAgentInstanceConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAgentInstanceConfigResponse;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDownloadJobRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDownloadJobResponse;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMaxComputeExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMaxComputeExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMetricStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMetricStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSHDFSExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSIngestionRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectResponse;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAgentInstanceConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAgentInstanceConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAgentInstanceConfigShrinkRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAnnotationDataResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAnnotationDataSetResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAnnotationLabelResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteCollectionPolicyRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteCollectionPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteConsumeProcessorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteDashboardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteDownloadJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteIngestProcessorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLogtailPipelineConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteMaxComputeExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteMetricStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteScheduledSQLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteStoreViewResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DisableAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DisableScheduledSQLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\EnableAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\EnableScheduledSQLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAgentInstanceConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAgentInstanceConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAgentInstanceConfigShrinkRequest;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\GetConsumeProcessorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetDashboardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetDownloadJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetIngestProcessorResponse;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\GetMaxComputeExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetMetricStoreMeteringModeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetMetricStoreResponse;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\GetSlsServiceResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetSqlInstanceResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetStoreViewIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetStoreViewResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAgentInstanceConfigsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAgentInstanceConfigsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAiToolsResponse;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConsumeProcessorsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConsumeProcessorsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDashboardRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDashboardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDashboardShrinkRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDownloadJobsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDownloadJobsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListETLsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListETLsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListIngestProcessorsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListIngestProcessorsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogStoresRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogStoresResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogtailPipelineConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogtailPipelineConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachinesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachinesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMaxComputeExportsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMaxComputeExportsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMetricStoresRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMetricStoresResponse;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\ListStoreViewsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListStoreViewsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\MergeShardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\OpenSlsServiceResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PullLogsHeaders;
use AlibabaCloud\SDK\Sls\V20201230\Models\PullLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PullLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutAnnotationDataRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutAnnotationDataResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutConsumeProcessorRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutConsumeProcessorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutIngestProcessorRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutIngestProcessorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutLogsHeaders;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectPolicyRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectTransferAccelerationRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectTransferAccelerationResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutWebtrackingRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutWebtrackingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\RefreshTokenRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\RefreshTokenResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\RemoveConfigFromMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StartETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StartMaxComputeExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StartOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StartOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StartOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StopETLResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StopMaxComputeExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StopOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StopOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\StopOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAgentInstanceConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAgentInstanceConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAgentInstanceConfigShrinkRequest;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreEncryptionRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreEncryptionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreMeteringModeRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreMeteringModeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreProcessorRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreProcessorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogtailPipelineConfigRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogtailPipelineConfigResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupMachineRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupMachineResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMaxComputeExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMaxComputeExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMetricStoreMeteringModeRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMetricStoreMeteringModeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMetricStoreProcessorRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMetricStoreProcessorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMetricStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMetricStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSHDFSExportRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSHDFSExportResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSIngestionRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOSSIngestionResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectResponse;
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
use Darabonba\GatewaySls\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Sls extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'Sls';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'central';
    }

    /**
     * Applies a Logtail configuration to a machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyConfigToMachineGroupResponse
     *
     * @param string         $project
     * @param string         $machineGroup
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ApplyConfigToMachineGroupResponse
     */
    public function applyConfigToMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ApplyConfigToMachineGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups/' . $machineGroup . '/configs/' . $configName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return ApplyConfigToMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Applies a Logtail configuration to a machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns ApplyConfigToMachineGroupResponse
     *
     * @param string $project
     * @param string $machineGroup
     * @param string $configName
     *
     * @return ApplyConfigToMachineGroupResponse
     */
    public function applyConfigToMachineGroup($project, $machineGroup, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyConfigToMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime);
    }

    /**
     * 调用 ai 工具.
     *
     * @param request - CallAiToolsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CallAiToolsResponse
     *
     * @param CallAiToolsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CallAiToolsResponse
     */
    public function callAiToolsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        if (null !== $request->regionId) {
            @$body['regionId'] = $request->regionId;
        }

        if (null !== $request->toolName) {
            @$body['toolName'] = $request->toolName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CallAiTools',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/tool/call',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return CallAiToolsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 调用 ai 工具.
     *
     * @param request - CallAiToolsRequest
     *
     * @returns CallAiToolsResponse
     *
     * @param CallAiToolsRequest $request
     *
     * @return CallAiToolsResponse
     */
    public function callAiTools($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->callAiToolsWithOptions($request, $headers, $runtime);
    }

    /**
     * Changes the resource group to which a resource belongs.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param string                     $project
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/resourcegroup',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Changes the resource group to which a resource belongs.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param string                     $project
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Sends heartbeats to a server from a consumer.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * Connections between consumers and Simple Log Service are established by sending heartbeat messages at regular intervals. If Simple Log Service does not receive heartbeat messages from a consumer on schedule, Simple Log Service deletes the consumer.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * The name of the consumer group is obtained. For more information, see [ListConsumerGroup](https://help.aliyun.com/document_detail/74964.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ConsumerGroupHeartBeat`|`acs:log:${regionId}:${accountId}:project/{#ProjectName}/logstore/{#LogstoreName}/consumergroup/{#ConsumerGroupName}`|
     *
     * @param request - ConsumerGroupHeartBeatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConsumerGroupHeartBeatResponse
     *
     * @param string                        $project
     * @param string                        $logstore
     * @param string                        $consumerGroup
     * @param ConsumerGroupHeartBeatRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ConsumerGroupHeartBeatResponse
     */
    public function consumerGroupHeartBeatWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->consumer) {
            @$query['consumer'] = $request->consumer;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'ConsumerGroupHeartBeat',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '?type=heartbeat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return ConsumerGroupHeartBeatResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sends heartbeats to a server from a consumer.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * Connections between consumers and Simple Log Service are established by sending heartbeat messages at regular intervals. If Simple Log Service does not receive heartbeat messages from a consumer on schedule, Simple Log Service deletes the consumer.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * The name of the consumer group is obtained. For more information, see [ListConsumerGroup](https://help.aliyun.com/document_detail/74964.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ConsumerGroupHeartBeat`|`acs:log:${regionId}:${accountId}:project/{#ProjectName}/logstore/{#LogstoreName}/consumergroup/{#ConsumerGroupName}`|
     *
     * @param request - ConsumerGroupHeartBeatRequest
     *
     * @returns ConsumerGroupHeartBeatResponse
     *
     * @param string                        $project
     * @param string                        $logstore
     * @param string                        $consumerGroup
     * @param ConsumerGroupHeartBeatRequest $request
     *
     * @return ConsumerGroupHeartBeatResponse
     */
    public function consumerGroupHeartBeat($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->consumerGroupHeartBeatWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * Updates the checkpoint of a shard for a consumer group.
     *
     * @remarks
     *   If you do not specify a consumer, you must set **forceSuccess** to **true**. Otherwise, the checkpoint cannot be updated.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - ConsumerGroupUpdateCheckPointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConsumerGroupUpdateCheckPointResponse
     *
     * @param string                               $project
     * @param string                               $logstore
     * @param string                               $consumerGroup
     * @param ConsumerGroupUpdateCheckPointRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ConsumerGroupUpdateCheckPointResponse
     */
    public function consumerGroupUpdateCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->consumer) {
            @$query['consumer'] = $request->consumer;
        }

        if (null !== $request->forceSuccess) {
            @$query['forceSuccess'] = $request->forceSuccess;
        }

        $body = [];
        if (null !== $request->checkpoint) {
            @$body['checkpoint'] = $request->checkpoint;
        }

        if (null !== $request->shard) {
            @$body['shard'] = $request->shard;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConsumerGroupUpdateCheckPoint',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '?type=checkpoint',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return ConsumerGroupUpdateCheckPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the checkpoint of a shard for a consumer group.
     *
     * @remarks
     *   If you do not specify a consumer, you must set **forceSuccess** to **true**. Otherwise, the checkpoint cannot be updated.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     *
     * @param request - ConsumerGroupUpdateCheckPointRequest
     *
     * @returns ConsumerGroupUpdateCheckPointResponse
     *
     * @param string                               $project
     * @param string                               $logstore
     * @param string                               $consumerGroup
     * @param ConsumerGroupUpdateCheckPointRequest $request
     *
     * @return ConsumerGroupUpdateCheckPointResponse
     */
    public function consumerGroupUpdateCheckPoint($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->consumerGroupUpdateCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * CreateAgentInstanceConfig.
     *
     * @param request - CreateAgentInstanceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentInstanceConfigResponse
     *
     * @param CreateAgentInstanceConfigRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAgentInstanceConfigResponse
     */
    public function createAgentInstanceConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['attributes'] = $request->attributes;
        }

        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->configType) {
            @$body['configType'] = $request->configType;
        }

        if (null !== $request->grayConfigs) {
            @$body['grayConfigs'] = $request->grayConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentInstanceConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/agentinstanceconfigs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateAgentInstanceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * CreateAgentInstanceConfig.
     *
     * @param request - CreateAgentInstanceConfigRequest
     *
     * @returns CreateAgentInstanceConfigResponse
     *
     * @param CreateAgentInstanceConfigRequest $request
     *
     * @return CreateAgentInstanceConfigResponse
     */
    public function createAgentInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentInstanceConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an alert rule in a project.
     *
     * @param request - CreateAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAlertResponse
     *
     * @param string             $project
     * @param CreateAlertRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAlertResponse
     */
    public function createAlertWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->schedule) {
            @$body['schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAlert',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alerts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an alert rule in a project.
     *
     * @param request - CreateAlertRequest
     *
     * @returns CreateAlertResponse
     *
     * @param string             $project
     * @param CreateAlertRequest $request
     *
     * @return CreateAlertResponse
     */
    public function createAlert($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlertWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates a dataset.
     *
     * @param request - CreateAnnotationDataSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAnnotationDataSetResponse
     *
     * @param CreateAnnotationDataSetRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAnnotationDataSetResponse
     */
    public function createAnnotationDataSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['datasetId'] = $request->datasetId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateAnnotationDataSet',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationdataset',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateAnnotationDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a dataset.
     *
     * @param request - CreateAnnotationDataSetRequest
     *
     * @returns CreateAnnotationDataSetResponse
     *
     * @param CreateAnnotationDataSetRequest $request
     *
     * @return CreateAnnotationDataSetResponse
     */
    public function createAnnotationDataSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAnnotationDataSetWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a tag table.
     *
     * @param request - CreateAnnotationLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAnnotationLabelResponse
     *
     * @param CreateAnnotationLabelRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAnnotationLabelResponse
     */
    public function createAnnotationLabelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateAnnotationLabel',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationlabel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateAnnotationLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a tag table.
     *
     * @param request - CreateAnnotationLabelRequest
     *
     * @returns CreateAnnotationLabelResponse
     *
     * @param CreateAnnotationLabelRequest $request
     *
     * @return CreateAnnotationLabelResponse
     */
    public function createAnnotationLabel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAnnotationLabelWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a Logtail configuration.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 100 Logtail configurations in a project.
     * *   The Logtail configuration is planned out. For more information, see [Logtail configurations](https://help.aliyun.com/document_detail/29058.html).
     *
     * @param request - CreateConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigResponse
     *
     * @param string              $project
     * @param CreateConfigRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateConfigResponse
     */
    public function createConfigWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/configs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Logtail configuration.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 100 Logtail configurations in a project.
     * *   The Logtail configuration is planned out. For more information, see [Logtail configurations](https://help.aliyun.com/document_detail/29058.html).
     *
     * @param request - CreateConfigRequest
     *
     * @returns CreateConfigResponse
     *
     * @param string              $project
     * @param CreateConfigRequest $request
     *
     * @return CreateConfigResponse
     */
    public function createConfig($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConfigWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates a consumer group for a Logstore.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * You can create up to 30 consumer groups for a Logstore. The name of a consumer group must be unique in a project.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Simple Log Service provides examples of both regular log consumption and consumer group-based log consumption by using Simple Log Service SDK for Java. For more information, see [Consume log data](https://help.aliyun.com/document_detail/120035.html) and [Use consumer groups to consume data](https://help.aliyun.com/document_detail/28998.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:CreateConsumerGroup`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`|
     *
     * @param request - CreateConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param string                     $project
     * @param string                     $logstore
     * @param CreateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->consumerGroup) {
            @$body['consumerGroup'] = $request->consumerGroup;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->timeout) {
            @$body['timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/consumergroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a consumer group for a Logstore.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * You can create up to 30 consumer groups for a Logstore. The name of a consumer group must be unique in a project.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Simple Log Service provides examples of both regular log consumption and consumer group-based log consumption by using Simple Log Service SDK for Java. For more information, see [Consume log data](https://help.aliyun.com/document_detail/120035.html) and [Use consumer groups to consume data](https://help.aliyun.com/document_detail/28998.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:CreateConsumerGroup`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`|
     *
     * @param request - CreateConsumerGroupRequest
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param string                     $project
     * @param string                     $logstore
     * @param CreateConsumerGroupRequest $request
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroup($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerGroupWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Creates a dashboard.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param request - CreateDashboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDashboardResponse
     *
     * @param string                 $project
     * @param CreateDashboardRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDashboardResponse
     */
    public function createDashboardWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateDashboard',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dashboards',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a dashboard.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param request - CreateDashboardRequest
     *
     * @returns CreateDashboardResponse
     *
     * @param string                 $project
     * @param CreateDashboardRequest $request
     *
     * @return CreateDashboardResponse
     */
    public function createDashboard($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDashboardWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Binds a new custom domain name to a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - CreateDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainResponse
     *
     * @param string              $project
     * @param CreateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->domainName) {
            @$body['domainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDomain',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/domains',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Binds a new custom domain name to a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - CreateDomainRequest
     *
     * @returns CreateDomainResponse
     *
     * @param string              $project
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * 创建下载任务
     *
     * @param request - CreateDownloadJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDownloadJobResponse
     *
     * @param string                   $project
     * @param CreateDownloadJobRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDownloadJobResponse
     */
    public function createDownloadJobWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDownloadJob',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/downloadjobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateDownloadJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建下载任务
     *
     * @param request - CreateDownloadJobRequest
     *
     * @returns CreateDownloadJobResponse
     *
     * @param string                   $project
     * @param CreateDownloadJobRequest $request
     *
     * @return CreateDownloadJobResponse
     */
    public function createDownloadJob($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDownloadJobWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates a data transformation job in a project.
     *
     * @param request - CreateETLRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateETLResponse
     *
     * @param string           $project
     * @param CreateETLRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateETLResponse
     */
    public function createETLWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateETL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/etls',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a data transformation job in a project.
     *
     * @param request - CreateETLRequest
     *
     * @returns CreateETLResponse
     *
     * @param string           $project
     * @param CreateETLRequest $request
     *
     * @return CreateETLResponse
     */
    public function createETL($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createETLWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates indexes for a Logstore.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - CreateIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIndexResponse
     *
     * @param string             $project
     * @param string             $logstore
     * @param CreateIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateIndexResponse
     */
    public function createIndexWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateIndex',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/index',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates indexes for a Logstore.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - CreateIndexRequest
     *
     * @returns CreateIndexResponse
     *
     * @param string             $project
     * @param string             $logstore
     * @param CreateIndexRequest $request
     *
     * @return CreateIndexResponse
     */
    public function createIndex($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Creates a Logstore.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * * You can create up to 200 Logstores in each project.
     * * If the retention period of a log reaches the data retention period that you specified for the Logstore, the log is deleted.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:CreateLogStore`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`|
     *
     * @param request - CreateLogStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogStoreResponse
     *
     * @param string                $project
     * @param CreateLogStoreRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLogStoreResponse
     */
    public function createLogStoreWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->appendMeta) {
            @$body['appendMeta'] = $request->appendMeta;
        }

        if (null !== $request->autoSplit) {
            @$body['autoSplit'] = $request->autoSplit;
        }

        if (null !== $request->enableTracking) {
            @$body['enable_tracking'] = $request->enableTracking;
        }

        if (null !== $request->encryptConf) {
            @$body['encrypt_conf'] = $request->encryptConf;
        }

        if (null !== $request->hotTtl) {
            @$body['hot_ttl'] = $request->hotTtl;
        }

        if (null !== $request->infrequentAccessTTL) {
            @$body['infrequentAccessTTL'] = $request->infrequentAccessTTL;
        }

        if (null !== $request->logstoreName) {
            @$body['logstoreName'] = $request->logstoreName;
        }

        if (null !== $request->maxSplitShard) {
            @$body['maxSplitShard'] = $request->maxSplitShard;
        }

        if (null !== $request->mode) {
            @$body['mode'] = $request->mode;
        }

        if (null !== $request->processorId) {
            @$body['processorId'] = $request->processorId;
        }

        if (null !== $request->shardCount) {
            @$body['shardCount'] = $request->shardCount;
        }

        if (null !== $request->telemetryType) {
            @$body['telemetryType'] = $request->telemetryType;
        }

        if (null !== $request->ttl) {
            @$body['ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLogStore',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Logstore.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * * You can create up to 200 Logstores in each project.
     * * If the retention period of a log reaches the data retention period that you specified for the Logstore, the log is deleted.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:CreateLogStore`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`|
     *
     * @param request - CreateLogStoreRequest
     *
     * @returns CreateLogStoreResponse
     *
     * @param string                $project
     * @param CreateLogStoreRequest $request
     *
     * @return CreateLogStoreResponse
     */
    public function createLogStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLogStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Enables the service log feature for a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - CreateLoggingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoggingResponse
     *
     * @param string               $project
     * @param CreateLoggingRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateLoggingResponse
     */
    public function createLoggingWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->loggingDetails) {
            @$body['loggingDetails'] = $request->loggingDetails;
        }

        if (null !== $request->loggingProject) {
            @$body['loggingProject'] = $request->loggingProject;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLogging',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logging',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables the service log feature for a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - CreateLoggingRequest
     *
     * @returns CreateLoggingResponse
     *
     * @param string               $project
     * @param CreateLoggingRequest $request
     *
     * @return CreateLoggingResponse
     */
    public function createLogging($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLoggingWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates a Logtail pipeline configuration.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @param request - CreateLogtailPipelineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogtailPipelineConfigResponse
     *
     * @param string                             $project
     * @param CreateLogtailPipelineConfigRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateLogtailPipelineConfigResponse
     */
    public function createLogtailPipelineConfigWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->aggregators) {
            @$body['aggregators'] = $request->aggregators;
        }

        if (null !== $request->configName) {
            @$body['configName'] = $request->configName;
        }

        if (null !== $request->flushers) {
            @$body['flushers'] = $request->flushers;
        }

        if (null !== $request->global) {
            @$body['global'] = $request->global;
        }

        if (null !== $request->inputs) {
            @$body['inputs'] = $request->inputs;
        }

        if (null !== $request->logSample) {
            @$body['logSample'] = $request->logSample;
        }

        if (null !== $request->processors) {
            @$body['processors'] = $request->processors;
        }

        if (null !== $request->task) {
            @$body['task'] = $request->task;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLogtailPipelineConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/pipelineconfigs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Logtail pipeline configuration.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @param request - CreateLogtailPipelineConfigRequest
     *
     * @returns CreateLogtailPipelineConfigResponse
     *
     * @param string                             $project
     * @param CreateLogtailPipelineConfigRequest $request
     *
     * @return CreateLogtailPipelineConfigResponse
     */
    public function createLogtailPipelineConfig($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLogtailPipelineConfigWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates a machine group.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - CreateMachineGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMachineGroupResponse
     *
     * @param string                    $project
     * @param CreateMachineGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMachineGroupResponse
     */
    public function createMachineGroupWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->groupAttribute) {
            @$body['groupAttribute'] = $request->groupAttribute;
        }

        if (null !== $request->groupName) {
            @$body['groupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$body['groupType'] = $request->groupType;
        }

        if (null !== $request->machineIdentifyType) {
            @$body['machineIdentifyType'] = $request->machineIdentifyType;
        }

        if (null !== $request->machineList) {
            @$body['machineList'] = $request->machineList;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMachineGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a machine group.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - CreateMachineGroupRequest
     *
     * @returns CreateMachineGroupResponse
     *
     * @param string                    $project
     * @param CreateMachineGroupRequest $request
     *
     * @return CreateMachineGroupResponse
     */
    public function createMachineGroup($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMachineGroupWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param request - CreateMaxComputeExportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMaxComputeExportResponse
     *
     * @param string                        $project
     * @param CreateMaxComputeExportRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMaxComputeExportResponse
     */
    public function createMaxComputeExportWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMaxComputeExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/maxcomputeexports',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateMaxComputeExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param request - CreateMaxComputeExportRequest
     *
     * @returns CreateMaxComputeExportResponse
     *
     * @param string                        $project
     * @param CreateMaxComputeExportRequest $request
     *
     * @return CreateMaxComputeExportResponse
     */
    public function createMaxComputeExport($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMaxComputeExportWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates a Metricstore to store metric data.
     *
     * @remarks
     * Metricstores are used to store metric data. For more information, see [Metric data](https://help.aliyun.com/document_detail/174965.html).
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 200 Logstores or Metricstores in a project.
     * *   Metric data is automatically deleted when the retention period of the metric data ends.
     *
     * @param request - CreateMetricStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMetricStoreResponse
     *
     * @param string                   $project
     * @param CreateMetricStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMetricStoreResponse
     */
    public function createMetricStoreWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->autoSplit) {
            @$body['autoSplit'] = $request->autoSplit;
        }

        if (null !== $request->hotTtl) {
            @$body['hot_ttl'] = $request->hotTtl;
        }

        if (null !== $request->infrequentAccessTTL) {
            @$body['infrequentAccessTTL'] = $request->infrequentAccessTTL;
        }

        if (null !== $request->maxSplitShard) {
            @$body['maxSplitShard'] = $request->maxSplitShard;
        }

        if (null !== $request->metricType) {
            @$body['metricType'] = $request->metricType;
        }

        if (null !== $request->mode) {
            @$body['mode'] = $request->mode;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->shardCount) {
            @$body['shardCount'] = $request->shardCount;
        }

        if (null !== $request->ttl) {
            @$body['ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMetricStore',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/metricstores',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateMetricStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Metricstore to store metric data.
     *
     * @remarks
     * Metricstores are used to store metric data. For more information, see [Metric data](https://help.aliyun.com/document_detail/174965.html).
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 200 Logstores or Metricstores in a project.
     * *   Metric data is automatically deleted when the retention period of the metric data ends.
     *
     * @param request - CreateMetricStoreRequest
     *
     * @returns CreateMetricStoreResponse
     *
     * @param string                   $project
     * @param CreateMetricStoreRequest $request
     *
     * @return CreateMetricStoreResponse
     */
    public function createMetricStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMetricStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Ships logs from a Simple Log Service Logstore to an Object Storage Service (OSS) bucket.
     *
     * @param request - CreateOSSExportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOSSExportResponse
     *
     * @param string                 $project
     * @param CreateOSSExportRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateOSSExportResponse
     */
    public function createOSSExportWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOSSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossexports',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Ships logs from a Simple Log Service Logstore to an Object Storage Service (OSS) bucket.
     *
     * @param request - CreateOSSExportRequest
     *
     * @returns CreateOSSExportResponse
     *
     * @param string                 $project
     * @param CreateOSSExportRequest $request
     *
     * @return CreateOSSExportResponse
     */
    public function createOSSExport($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOSSExportWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates an OSS-HDFS data shipping job in a project.
     *
     * @param request - CreateOSSHDFSExportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOSSHDFSExportResponse
     *
     * @param string                     $project
     * @param CreateOSSHDFSExportRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateOSSHDFSExportResponse
     */
    public function createOSSHDFSExportWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOSSHDFSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/osshdfsexports',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an OSS-HDFS data shipping job in a project.
     *
     * @param request - CreateOSSHDFSExportRequest
     *
     * @returns CreateOSSHDFSExportResponse
     *
     * @param string                     $project
     * @param CreateOSSHDFSExportRequest $request
     *
     * @return CreateOSSHDFSExportResponse
     */
    public function createOSSHDFSExport($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOSSHDFSExportWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates an Object Storage Service (OSS) data import job in a project.
     *
     * @param request - CreateOSSIngestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOSSIngestionResponse
     *
     * @param string                    $project
     * @param CreateOSSIngestionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateOSSIngestionResponse
     */
    public function createOSSIngestionWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->schedule) {
            @$body['schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOSSIngestion',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossingestions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an Object Storage Service (OSS) data import job in a project.
     *
     * @param request - CreateOSSIngestionRequest
     *
     * @returns CreateOSSIngestionResponse
     *
     * @param string                    $project
     * @param CreateOSSIngestionRequest $request
     *
     * @return CreateOSSIngestionResponse
     */
    public function createOSSIngestion($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOSSIngestionWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates a project.
     *
     * @param request - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataRedundancyType) {
            @$body['dataRedundancyType'] = $request->dataRedundancyType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->projectName) {
            @$body['projectName'] = $request->projectName;
        }

        if (null !== $request->recycleBinEnabled) {
            @$body['recycleBinEnabled'] = $request->recycleBinEnabled;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a project.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a saved search.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Limits are imposed when you use Simple Log Service to query logs. We recommend that you specify query statements and query time ranges based on the limits. For more information, see [Log search overview](https://help.aliyun.com/document_detail/43772.html) and [Log analysis overview](https://help.aliyun.com/document_detail/53608.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:CreateSavedSearch`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`|
     *
     * @param request - CreateSavedSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSavedSearchResponse
     *
     * @param string                   $project
     * @param CreateSavedSearchRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSavedSearchResponse
     */
    public function createSavedSearchWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->logstore) {
            @$body['logstore'] = $request->logstore;
        }

        if (null !== $request->savedsearchName) {
            @$body['savedsearchName'] = $request->savedsearchName;
        }

        if (null !== $request->searchQuery) {
            @$body['searchQuery'] = $request->searchQuery;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSavedSearch',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/savedsearches',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a saved search.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Limits are imposed when you use Simple Log Service to query logs. We recommend that you specify query statements and query time ranges based on the limits. For more information, see [Log search overview](https://help.aliyun.com/document_detail/43772.html) and [Log analysis overview](https://help.aliyun.com/document_detail/53608.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:CreateSavedSearch`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`|
     *
     * @param request - CreateSavedSearchRequest
     *
     * @returns CreateSavedSearchResponse
     *
     * @param string                   $project
     * @param CreateSavedSearchRequest $request
     *
     * @return CreateSavedSearchResponse
     */
    public function createSavedSearch($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSavedSearchWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Creates a Scheduled SQL job in a project.
     *
     * @param request - CreateScheduledSQLRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledSQLResponse
     *
     * @param string                    $project
     * @param CreateScheduledSQLRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateScheduledSQLResponse
     */
    public function createScheduledSQLWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->schedule) {
            @$body['schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledSQL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/scheduledsqls',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Scheduled SQL job in a project.
     *
     * @param request - CreateScheduledSQLRequest
     *
     * @returns CreateScheduledSQLResponse
     *
     * @param string                    $project
     * @param CreateScheduledSQLRequest $request
     *
     * @return CreateScheduledSQLResponse
     */
    public function createScheduledSQL($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScheduledSQLWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * If you use the Standard SQL feature to analyze a large amount of data, the logs within the specified time range cannot be fully scanned in a single query request. In this case, the returned results may not contain all matched data. You can increase the number of shards to improve data read and write capabilities. However, this method takes effect only for incremental data. You can enable the Dedicated SQL feature to increase computing resources and the amount of data that can be analyzed in a single query request.
     *
     * @remarks
     * *Before you call this operation, make sure that you fully understand the [billing](https://help.aliyun.com/document_detail/223777.html) of Dedicated SQL.
     *
     * @param request - CreateSqlInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSqlInstanceResponse
     *
     * @param string                   $project
     * @param CreateSqlInstanceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSqlInstanceResponse
     */
    public function createSqlInstanceWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->cu) {
            @$body['cu'] = $request->cu;
        }

        if (null !== $request->useAsDefault) {
            @$body['useAsDefault'] = $request->useAsDefault;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSqlInstance',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/sqlinstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateSqlInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If you use the Standard SQL feature to analyze a large amount of data, the logs within the specified time range cannot be fully scanned in a single query request. In this case, the returned results may not contain all matched data. You can increase the number of shards to improve data read and write capabilities. However, this method takes effect only for incremental data. You can enable the Dedicated SQL feature to increase computing resources and the amount of data that can be analyzed in a single query request.
     *
     * @remarks
     * *Before you call this operation, make sure that you fully understand the [billing](https://help.aliyun.com/document_detail/223777.html) of Dedicated SQL.
     *
     * @param request - CreateSqlInstanceRequest
     *
     * @returns CreateSqlInstanceResponse
     *
     * @param string                   $project
     * @param CreateSqlInstanceRequest $request
     *
     * @return CreateSqlInstanceResponse
     */
    public function createSqlInstance($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSqlInstanceWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * 创建StoreView.
     *
     * @param request - CreateStoreViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStoreViewResponse
     *
     * @param string                 $project
     * @param CreateStoreViewRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateStoreViewResponse
     */
    public function createStoreViewWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->storeType) {
            @$body['storeType'] = $request->storeType;
        }

        if (null !== $request->stores) {
            @$body['stores'] = $request->stores;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateStoreView',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/storeviews',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateStoreViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建StoreView.
     *
     * @param request - CreateStoreViewRequest
     *
     * @returns CreateStoreViewResponse
     *
     * @param string                 $project
     * @param CreateStoreViewRequest $request
     *
     * @return CreateStoreViewResponse
     */
    public function createStoreView($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createStoreViewWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Obtains a ticket. Simple Log Service allows you to share the query and analysis pages and dashboard pages with other users and embed the console pages into third-party systems. This way, other users can view your logs in password-free mode. The URLs of the shared pages are referred to as password-free URLs. You can call the CreateTicket operation to obtain a ticket and generate a password-free URL based on the ticket and the URL of the console page that you want to share.
     *
     * @param request - CreateTicketRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessTokenExpirationTime) {
            @$query['accessTokenExpirationTime'] = $request->accessTokenExpirationTime;
        }

        if (null !== $request->expirationTime) {
            @$query['expirationTime'] = $request->expirationTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTicket',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tickets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains a ticket. Simple Log Service allows you to share the query and analysis pages and dashboard pages with other users and embed the console pages into third-party systems. This way, other users can view your logs in password-free mode. The URLs of the shared pages are referred to as password-free URLs. You can call the CreateTicket operation to obtain a ticket and generate a password-free URL based on the ticket and the URL of the console page that you want to share.
     *
     * @param request - CreateTicketRequest
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     *
     * @return CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * DeleteAgentInstanceConfig.
     *
     * @param tmpReq - DeleteAgentInstanceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentInstanceConfigResponse
     *
     * @param string                           $configType
     * @param DeleteAgentInstanceConfigRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteAgentInstanceConfigResponse
     */
    public function deleteAgentInstanceConfigWithOptions($configType, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAgentInstanceConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attributes) {
            $request->attributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'attributes', 'json');
        }

        $query = [];
        if (null !== $request->attributesShrink) {
            @$query['attributes'] = $request->attributesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAgentInstanceConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/agentinstanceconfigs/' . $configType . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteAgentInstanceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * DeleteAgentInstanceConfig.
     *
     * @param request - DeleteAgentInstanceConfigRequest
     *
     * @returns DeleteAgentInstanceConfigResponse
     *
     * @param string                           $configType
     * @param DeleteAgentInstanceConfigRequest $request
     *
     * @return DeleteAgentInstanceConfigResponse
     */
    public function deleteAgentInstanceConfig($configType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentInstanceConfigWithOptions($configType, $request, $headers, $runtime);
    }

    /**
     * Deletes an alert rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlertResponse
     *
     * @param string         $project
     * @param string         $alertName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAlertResponse
     */
    public function deleteAlertWithOptions($project, $alertName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAlert',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alerts/' . $alertName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an alert rule.
     *
     * @returns DeleteAlertResponse
     *
     * @param string $project
     * @param string $alertName
     *
     * @return DeleteAlertResponse
     */
    public function deleteAlert($project, $alertName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertWithOptions($project, $alertName, $headers, $runtime);
    }

    /**
     * Removes data from a dataset.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAnnotationDataResponse
     *
     * @param string         $datasetId
     * @param string         $annotationdataId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAnnotationDataResponse
     */
    public function deleteAnnotationDataWithOptions($datasetId, $annotationdataId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAnnotationData',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationdataset/' . $datasetId . '/annotationdata/' . $annotationdataId . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteAnnotationDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes data from a dataset.
     *
     * @returns DeleteAnnotationDataResponse
     *
     * @param string $datasetId
     * @param string $annotationdataId
     *
     * @return DeleteAnnotationDataResponse
     */
    public function deleteAnnotationData($datasetId, $annotationdataId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAnnotationDataWithOptions($datasetId, $annotationdataId, $headers, $runtime);
    }

    /**
     * Deletes a dataset.
     *
     * @remarks
     * You can delete a dataset only if no data exists in the dataset.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAnnotationDataSetResponse
     *
     * @param string         $datasetId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAnnotationDataSetResponse
     */
    public function deleteAnnotationDataSetWithOptions($datasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAnnotationDataSet',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationdataset/' . $datasetId . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteAnnotationDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a dataset.
     *
     * @remarks
     * You can delete a dataset only if no data exists in the dataset.
     *
     * @returns DeleteAnnotationDataSetResponse
     *
     * @param string $datasetId
     *
     * @return DeleteAnnotationDataSetResponse
     */
    public function deleteAnnotationDataSet($datasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAnnotationDataSetWithOptions($datasetId, $headers, $runtime);
    }

    /**
     * Deletes a tag table.
     *
     * @remarks
     * Only non-built-in tags can be deleted.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAnnotationLabelResponse
     *
     * @param string         $labelId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAnnotationLabelResponse
     */
    public function deleteAnnotationLabelWithOptions($labelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAnnotationLabel',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationlabel/' . $labelId . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteAnnotationLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a tag table.
     *
     * @remarks
     * Only non-built-in tags can be deleted.
     *
     * @returns DeleteAnnotationLabelResponse
     *
     * @param string $labelId
     *
     * @return DeleteAnnotationLabelResponse
     */
    public function deleteAnnotationLabel($labelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAnnotationLabelWithOptions($labelId, $headers, $runtime);
    }

    /**
     * Deletes a log collection policy from a cloud service.
     *
     * @remarks
     * You must use the Simple Log Service endpoint for the China (Shanghai), Singapore, or Heyuan ACDR Auto region to call the operation.
     *
     * @param request - DeleteCollectionPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCollectionPolicyResponse
     *
     * @param string                        $policyName
     * @param DeleteCollectionPolicyRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteCollectionPolicyResponse
     */
    public function deleteCollectionPolicyWithOptions($policyName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataCode) {
            @$query['dataCode'] = $request->dataCode;
        }

        if (null !== $request->productCode) {
            @$query['productCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCollectionPolicy',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/collectionpolicy/' . $policyName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteCollectionPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a log collection policy from a cloud service.
     *
     * @remarks
     * You must use the Simple Log Service endpoint for the China (Shanghai), Singapore, or Heyuan ACDR Auto region to call the operation.
     *
     * @param request - DeleteCollectionPolicyRequest
     *
     * @returns DeleteCollectionPolicyResponse
     *
     * @param string                        $policyName
     * @param DeleteCollectionPolicyRequest $request
     *
     * @return DeleteCollectionPolicyResponse
     */
    public function deleteCollectionPolicy($policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCollectionPolicyWithOptions($policyName, $request, $headers, $runtime);
    }

    /**
     * Deletes a Logtail configuration.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   If a Logtail configuration is applied to a machine group, you cannot collect data from the machine group after you delete the Logtail configuration.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The name of the required Logtail configuration is obtained. For more information, see [ListConfig](https://help.aliyun.com/document_detail/29043.html).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConfigResponse
     *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConfigResponse
     */
    public function deleteConfigWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/configs/' . $configName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a Logtail configuration.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   If a Logtail configuration is applied to a machine group, you cannot collect data from the machine group after you delete the Logtail configuration.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The name of the required Logtail configuration is obtained. For more information, see [ListConfig](https://help.aliyun.com/document_detail/29043.html).
     *
     * @returns DeleteConfigResponse
     *
     * @param string $project
     * @param string $configName
     *
     * @return DeleteConfigResponse
     */
    public function deleteConfig($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConfigWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * DeleteConsumeProcessor.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumeProcessorResponse
     *
     * @param string         $project
     * @param string         $processorName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumeProcessorResponse
     */
    public function deleteConsumeProcessorWithOptions($project, $processorName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumeProcessor',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/consumeprocessors/' . $processorName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteConsumeProcessorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * DeleteConsumeProcessor.
     *
     * @returns DeleteConsumeProcessorResponse
     *
     * @param string $project
     * @param string $processorName
     *
     * @return DeleteConsumeProcessorResponse
     */
    public function deleteConsumeProcessor($project, $processorName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumeProcessorWithOptions($project, $processorName, $headers, $runtime);
    }

    /**
     * Deletes a consumer group.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * The name of the consumer group is obtained. For more information, see [ListConsumerGroup](https://help.aliyun.com/document_detail/74964.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:DeleteConsumerGroup`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`|
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param string         $consumerGroup
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($project, $logstore, $consumerGroup, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a consumer group.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * The name of the consumer group is obtained. For more information, see [ListConsumerGroup](https://help.aliyun.com/document_detail/74964.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:DeleteConsumerGroup`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`|
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param string $project
     * @param string $logstore
     * @param string $consumerGroup
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($project, $logstore, $consumerGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupWithOptions($project, $logstore, $consumerGroup, $headers, $runtime);
    }

    /**
     * Deletes a dashboard.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDashboardResponse
     *
     * @param string         $project
     * @param string         $dashboardName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDashboardResponse
     */
    public function deleteDashboardWithOptions($project, $dashboardName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDashboard',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dashboards/' . $dashboardName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a dashboard.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @returns DeleteDashboardResponse
     *
     * @param string $project
     * @param string $dashboardName
     *
     * @return DeleteDashboardResponse
     */
    public function deleteDashboard($project, $dashboardName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDashboardWithOptions($project, $dashboardName, $headers, $runtime);
    }

    /**
     * Deletes a custom domain name that is bound to a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param string         $project
     * @param string         $domainName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($project, $domainName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/domains/' . $domainName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a custom domain name that is bound to a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns DeleteDomainResponse
     *
     * @param string $project
     * @param string $domainName
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($project, $domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($project, $domainName, $headers, $runtime);
    }

    /**
     * Deletes a download task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDownloadJobResponse
     *
     * @param string         $project
     * @param string         $downloadJobName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDownloadJobResponse
     */
    public function deleteDownloadJobWithOptions($project, $downloadJobName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDownloadJob',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/downloadjobs/' . $downloadJobName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteDownloadJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a download task.
     *
     * @returns DeleteDownloadJobResponse
     *
     * @param string $project
     * @param string $downloadJobName
     *
     * @return DeleteDownloadJobResponse
     */
    public function deleteDownloadJob($project, $downloadJobName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDownloadJobWithOptions($project, $downloadJobName, $headers, $runtime);
    }

    /**
     * Deletes a data transformation job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteETLResponse
     *
     * @param string         $project
     * @param string         $etlName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteETLResponse
     */
    public function deleteETLWithOptions($project, $etlName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteETL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/etls/' . $etlName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a data transformation job.
     *
     * @returns DeleteETLResponse
     *
     * @param string $project
     * @param string $etlName
     *
     * @return DeleteETLResponse
     */
    public function deleteETL($project, $etlName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteETLWithOptions($project, $etlName, $headers, $runtime);
    }

    /**
     * Deletes an index of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndexResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndexWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteIndex',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/index',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an index of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns DeleteIndexResponse
     *
     * @param string $project
     * @param string $logstore
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndex($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * Deletes an ingest processor.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIngestProcessorResponse
     *
     * @param string         $project
     * @param string         $processorName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteIngestProcessorResponse
     */
    public function deleteIngestProcessorWithOptions($project, $processorName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteIngestProcessor',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ingestprocessors/' . $processorName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteIngestProcessorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an ingest processor.
     *
     * @returns DeleteIngestProcessorResponse
     *
     * @param string $project
     * @param string $processorName
     *
     * @return DeleteIngestProcessorResponse
     */
    public function deleteIngestProcessor($project, $processorName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIngestProcessorWithOptions($project, $processorName, $headers, $runtime);
    }

    /**
     * Deletes a Logstore, including all shards and indexes in the Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLogStoreResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLogStoreResponse
     */
    public function deleteLogStoreWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteLogStore',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a Logstore, including all shards and indexes in the Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *
     * @returns DeleteLogStoreResponse
     *
     * @param string $project
     * @param string $logstore
     *
     * @return DeleteLogStoreResponse
     */
    public function deleteLogStore($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLogStoreWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * 关闭项目的服务日志记录。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLoggingResponse
     *
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLoggingResponse
     */
    public function deleteLoggingWithOptions($project, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteLogging',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logging',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 关闭项目的服务日志记录。
     *
     * @returns DeleteLoggingResponse
     *
     * @param string $project
     *
     * @return DeleteLoggingResponse
     */
    public function deleteLogging($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLoggingWithOptions($project, $headers, $runtime);
    }

    /**
     * Deletes a Logtail pipeline configuration.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLogtailPipelineConfigResponse
     *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLogtailPipelineConfigResponse
     */
    public function deleteLogtailPipelineConfigWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteLogtailPipelineConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/pipelineconfigs/' . $configName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a Logtail pipeline configuration.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @returns DeleteLogtailPipelineConfigResponse
     *
     * @param string $project
     * @param string $configName
     *
     * @return DeleteLogtailPipelineConfigResponse
     */
    public function deleteLogtailPipelineConfig($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLogtailPipelineConfigWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * Deletes a machine group. If the Logtail configurations for log collection are applied to a machine group, the configurations are disassociated from the machine group after the machine group is deleted.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMachineGroupResponse
     *
     * @param string         $project
     * @param string         $machineGroup
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMachineGroupResponse
     */
    public function deleteMachineGroupWithOptions($project, $machineGroup, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMachineGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups/' . $machineGroup . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a machine group. If the Logtail configurations for log collection are applied to a machine group, the configurations are disassociated from the machine group after the machine group is deleted.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns DeleteMachineGroupResponse
     *
     * @param string $project
     * @param string $machineGroup
     *
     * @return DeleteMachineGroupResponse
     */
    public function deleteMachineGroup($project, $machineGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMachineGroupWithOptions($project, $machineGroup, $headers, $runtime);
    }

    /**
     * Deletes a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMaxComputeExportResponse
     *
     * @param string         $project
     * @param string         $mcExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMaxComputeExportResponse
     */
    public function deleteMaxComputeExportWithOptions($project, $mcExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMaxComputeExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/maxcomputeexports/' . $mcExportName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteMaxComputeExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @returns DeleteMaxComputeExportResponse
     *
     * @param string $project
     * @param string $mcExportName
     *
     * @return DeleteMaxComputeExportResponse
     */
    public function deleteMaxComputeExport($project, $mcExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMaxComputeExportWithOptions($project, $mcExportName, $headers, $runtime);
    }

    /**
     * Deletes an existing Metricstore. When you delete a Metricstore, the metric data stored in the Metricstore and associated resources such as associated collection settings and transformation settings are also deleted.
     *
     * @remarks
     * Metricstores are used to store metric data. For more information, see [Metric data](https://help.aliyun.com/document_detail/174965.html).
     * *   You must specify an existing Metricstore.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 200 Logstores or Metricstores in a project.
     * *   Metric data is automatically deleted when the retention period of the metric data ends.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMetricStoreResponse
     *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMetricStoreResponse
     */
    public function deleteMetricStoreWithOptions($project, $name, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMetricStore',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/metricstores/' . $name . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'none',
        ]);

        return DeleteMetricStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an existing Metricstore. When you delete a Metricstore, the metric data stored in the Metricstore and associated resources such as associated collection settings and transformation settings are also deleted.
     *
     * @remarks
     * Metricstores are used to store metric data. For more information, see [Metric data](https://help.aliyun.com/document_detail/174965.html).
     * *   You must specify an existing Metricstore.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 200 Logstores or Metricstores in a project.
     * *   Metric data is automatically deleted when the retention period of the metric data ends.
     *
     * @returns DeleteMetricStoreResponse
     *
     * @param string $project
     * @param string $name
     *
     * @return DeleteMetricStoreResponse
     */
    public function deleteMetricStore($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMetricStoreWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * Deletes an Object Storage Service (OSS) data shipping job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOSSExportResponse
     *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteOSSExportResponse
     */
    public function deleteOSSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteOSSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossexports/' . $ossExportName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an Object Storage Service (OSS) data shipping job.
     *
     * @returns DeleteOSSExportResponse
     *
     * @param string $project
     * @param string $ossExportName
     *
     * @return DeleteOSSExportResponse
     */
    public function deleteOSSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOSSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * 删除OSSHDFS投递任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOSSHDFSExportResponse
     *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteOSSHDFSExportResponse
     */
    public function deleteOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteOSSHDFSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/osshdfsexports/' . $ossExportName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除OSSHDFS投递任务
     *
     * @returns DeleteOSSHDFSExportResponse
     *
     * @param string $project
     * @param string $ossExportName
     *
     * @return DeleteOSSHDFSExportResponse
     */
    public function deleteOSSHDFSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * Deletes an Object Storage Service (OSS) data import job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOSSIngestionResponse
     *
     * @param string         $project
     * @param string         $ossIngestionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteOSSIngestionResponse
     */
    public function deleteOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteOSSIngestion',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossingestions/' . $ossIngestionName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an Object Storage Service (OSS) data import job.
     *
     * @returns DeleteOSSIngestionResponse
     *
     * @param string $project
     * @param string $ossIngestionName
     *
     * @return DeleteOSSIngestionResponse
     */
    public function deleteOSSIngestion($project, $ossIngestionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime);
    }

    /**
     * Deletes a project.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * After you delete a project, all logs stored in the project and the configurations of the project are deleted and cannot be restored. Proceed with caution.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:DeleteProject`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`|
     *
     * @param request - DeleteProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param string               $project
     * @param DeleteProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->forceDelete) {
            @$query['forceDelete'] = $request->forceDelete;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a project.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * After you delete a project, all logs stored in the project and the configurations of the project are deleted and cannot be restored. Proceed with caution.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:DeleteProject`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`|
     *
     * @param request - DeleteProjectRequest
     *
     * @returns DeleteProjectResponse
     *
     * @param string               $project
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Deletes a project policy.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectPolicyResponse
     *
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProjectPolicyResponse
     */
    public function deleteProjectPolicyWithOptions($project, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteProjectPolicy',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/policy',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteProjectPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a project policy.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @returns DeleteProjectPolicyResponse
     *
     * @param string $project
     *
     * @return DeleteProjectPolicyResponse
     */
    public function deleteProjectPolicy($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectPolicyWithOptions($project, $headers, $runtime);
    }

    /**
     * Deletes a saved search.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * After you delete a saved search, it cannot be restored. Proceed with caution.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:DeleteSavedSearch`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`|
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSavedSearchResponse
     *
     * @param string         $project
     * @param string         $savedsearchName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSavedSearchResponse
     */
    public function deleteSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSavedSearch',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/savedsearches/' . $savedsearchName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a saved search.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * After you delete a saved search, it cannot be restored. Proceed with caution.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:DeleteSavedSearch`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`|
     *
     * @returns DeleteSavedSearchResponse
     *
     * @param string $project
     * @param string $savedsearchName
     *
     * @return DeleteSavedSearchResponse
     */
    public function deleteSavedSearch($project, $savedsearchName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime);
    }

    /**
     * Deletes a Scheduled SQL job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScheduledSQLResponse
     *
     * @param string         $project
     * @param string         $scheduledSQLName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteScheduledSQLResponse
     */
    public function deleteScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteScheduledSQL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/scheduledsqls/' . $scheduledSQLName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a Scheduled SQL job.
     *
     * @returns DeleteScheduledSQLResponse
     *
     * @param string $project
     * @param string $scheduledSQLName
     *
     * @return DeleteScheduledSQLResponse
     */
    public function deleteScheduledSQL($project, $scheduledSQLName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime);
    }

    /**
     * Deletes a dataset by using the name of the dataset.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStoreViewResponse
     *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteStoreViewResponse
     */
    public function deleteStoreViewWithOptions($project, $name, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteStoreView',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/storeviews/' . $name . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteStoreViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a dataset by using the name of the dataset.
     *
     * @returns DeleteStoreViewResponse
     *
     * @param string $project
     * @param string $name
     *
     * @return DeleteStoreViewResponse
     */
    public function deleteStoreView($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteStoreViewWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * Queries supported regions.
     *
     * @param request - DescribeRegionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries supported regions.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Disables an alert rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAlertResponse
     *
     * @param string         $project
     * @param string         $alertName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DisableAlertResponse
     */
    public function disableAlertWithOptions($project, $alertName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DisableAlert',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alerts/' . $alertName . '?action=disable',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DisableAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables an alert rule.
     *
     * @returns DisableAlertResponse
     *
     * @param string $project
     * @param string $alertName
     *
     * @return DisableAlertResponse
     */
    public function disableAlert($project, $alertName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableAlertWithOptions($project, $alertName, $headers, $runtime);
    }

    /**
     * Disables the Scheduled SQL feature.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableScheduledSQLResponse
     *
     * @param string         $project
     * @param string         $scheduledSQLName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DisableScheduledSQLResponse
     */
    public function disableScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DisableScheduledSQL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/scheduledsqls/' . $scheduledSQLName . '?action=disable',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DisableScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables the Scheduled SQL feature.
     *
     * @returns DisableScheduledSQLResponse
     *
     * @param string $project
     * @param string $scheduledSQLName
     *
     * @return DisableScheduledSQLResponse
     */
    public function disableScheduledSQL($project, $scheduledSQLName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime);
    }

    /**
     * Enables an alert rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAlertResponse
     *
     * @param string         $project
     * @param string         $alertName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return EnableAlertResponse
     */
    public function enableAlertWithOptions($project, $alertName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'EnableAlert',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alerts/' . $alertName . '?action=enable',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return EnableAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables an alert rule.
     *
     * @returns EnableAlertResponse
     *
     * @param string $project
     * @param string $alertName
     *
     * @return EnableAlertResponse
     */
    public function enableAlert($project, $alertName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableAlertWithOptions($project, $alertName, $headers, $runtime);
    }

    /**
     * Enables the Scheduled SQL feature.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableScheduledSQLResponse
     *
     * @param string         $project
     * @param string         $scheduledSQLName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return EnableScheduledSQLResponse
     */
    public function enableScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'EnableScheduledSQL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/scheduledsqls/' . $scheduledSQLName . '?action=enable',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return EnableScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables the Scheduled SQL feature.
     *
     * @returns EnableScheduledSQLResponse
     *
     * @param string $project
     * @param string $scheduledSQLName
     *
     * @return EnableScheduledSQLResponse
     */
    public function enableScheduledSQL($project, $scheduledSQLName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime);
    }

    /**
     * GetAgentInstanceConfig.
     *
     * @param tmpReq - GetAgentInstanceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentInstanceConfigResponse
     *
     * @param string                        $configType
     * @param GetAgentInstanceConfigRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetAgentInstanceConfigResponse
     */
    public function getAgentInstanceConfigWithOptions($configType, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAgentInstanceConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attributes) {
            $request->attributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'attributes', 'json');
        }

        $query = [];
        if (null !== $request->attributesShrink) {
            @$query['attributes'] = $request->attributesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentInstanceConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/agentinstanceconfigs/' . $configType . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentInstanceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * GetAgentInstanceConfig.
     *
     * @param request - GetAgentInstanceConfigRequest
     *
     * @returns GetAgentInstanceConfigResponse
     *
     * @param string                        $configType
     * @param GetAgentInstanceConfigRequest $request
     *
     * @return GetAgentInstanceConfigResponse
     */
    public function getAgentInstanceConfig($configType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentInstanceConfigWithOptions($configType, $request, $headers, $runtime);
    }

    /**
     * Queries the information about an alert rule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlertResponse
     *
     * @param string         $project
     * @param string         $alertName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAlertResponse
     */
    public function getAlertWithOptions($project, $alertName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAlert',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alerts/' . $alertName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an alert rule.
     *
     * @returns GetAlertResponse
     *
     * @param string $project
     * @param string $alertName
     *
     * @return GetAlertResponse
     */
    public function getAlert($project, $alertName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlertWithOptions($project, $alertName, $headers, $runtime);
    }

    /**
     * Queries data in datasets based on the unique identifier of the data.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAnnotationDataResponse
     *
     * @param string         $datasetId
     * @param string         $annotationdataId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAnnotationDataResponse
     */
    public function getAnnotationDataWithOptions($datasetId, $annotationdataId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAnnotationData',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationdataset/' . $datasetId . '/annotationdata/' . $annotationdataId . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAnnotationDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries data in datasets based on the unique identifier of the data.
     *
     * @returns GetAnnotationDataResponse
     *
     * @param string $datasetId
     * @param string $annotationdataId
     *
     * @return GetAnnotationDataResponse
     */
    public function getAnnotationData($datasetId, $annotationdataId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAnnotationDataWithOptions($datasetId, $annotationdataId, $headers, $runtime);
    }

    /**
     * Queries a dataset.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAnnotationDataSetResponse
     *
     * @param string         $datasetId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAnnotationDataSetResponse
     */
    public function getAnnotationDataSetWithOptions($datasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAnnotationDataSet',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationdataset/' . $datasetId . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAnnotationDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a dataset.
     *
     * @returns GetAnnotationDataSetResponse
     *
     * @param string $datasetId
     *
     * @return GetAnnotationDataSetResponse
     */
    public function getAnnotationDataSet($datasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAnnotationDataSetWithOptions($datasetId, $headers, $runtime);
    }

    /**
     * Queries a tag table by using a label ID.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAnnotationLabelResponse
     *
     * @param string         $labelId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAnnotationLabelResponse
     */
    public function getAnnotationLabelWithOptions($labelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAnnotationLabel',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationlabel/' . $labelId . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAnnotationLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a tag table by using a label ID.
     *
     * @returns GetAnnotationLabelResponse
     *
     * @param string $labelId
     *
     * @return GetAnnotationLabelResponse
     */
    public function getAnnotationLabel($labelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAnnotationLabelWithOptions($labelId, $headers, $runtime);
    }

    /**
     * Queries the Logtail configurations that are applied to a machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppliedConfigsResponse
     *
     * @param string         $project
     * @param string         $machineGroup
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppliedConfigsResponse
     */
    public function getAppliedConfigsWithOptions($project, $machineGroup, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAppliedConfigs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups/' . $machineGroup . '/configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAppliedConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Logtail configurations that are applied to a machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns GetAppliedConfigsResponse
     *
     * @param string $project
     * @param string $machineGroup
     *
     * @return GetAppliedConfigsResponse
     */
    public function getAppliedConfigs($project, $machineGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppliedConfigsWithOptions($project, $machineGroup, $headers, $runtime);
    }

    /**
     * Queries the machine groups to which a Logtail configuration is bound.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppliedMachineGroupsResponse
     *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppliedMachineGroupsResponse
     */
    public function getAppliedMachineGroupsWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAppliedMachineGroups',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/configs/' . $configName . '/machinegroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAppliedMachineGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the machine groups to which a Logtail configuration is bound.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns GetAppliedMachineGroupsResponse
     *
     * @param string $project
     * @param string $configName
     *
     * @return GetAppliedMachineGroupsResponse
     */
    public function getAppliedMachineGroups($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppliedMachineGroupsWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * Queries the checkpoints of a shard from which data is consumed by a consumer group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - GetCheckPointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCheckPointResponse
     *
     * @param string               $project
     * @param string               $logstore
     * @param string               $consumerGroup
     * @param GetCheckPointRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetCheckPointResponse
     */
    public function getCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->shard) {
            @$query['shard'] = $request->shard;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCheckPoint',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return GetCheckPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the checkpoints of a shard from which data is consumed by a consumer group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - GetCheckPointRequest
     *
     * @returns GetCheckPointResponse
     *
     * @param string               $project
     * @param string               $logstore
     * @param string               $consumerGroup
     * @param GetCheckPointRequest $request
     *
     * @return GetCheckPointResponse
     */
    public function getCheckPoint($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * 调用GetCollectionPolicy获取对应的规则.
     *
     * @remarks
     * You must use the Simple Log Service endpoint for the China (Shanghai), Singapore, or Heyuan ACDR Auto region to call the operation.
     *
     * @param request - GetCollectionPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCollectionPolicyResponse
     *
     * @param string                     $policyName
     * @param GetCollectionPolicyRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetCollectionPolicyResponse
     */
    public function getCollectionPolicyWithOptions($policyName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataCode) {
            @$query['dataCode'] = $request->dataCode;
        }

        if (null !== $request->productCode) {
            @$query['productCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCollectionPolicy',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/collectionpolicy/' . $policyName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCollectionPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 调用GetCollectionPolicy获取对应的规则.
     *
     * @remarks
     * You must use the Simple Log Service endpoint for the China (Shanghai), Singapore, or Heyuan ACDR Auto region to call the operation.
     *
     * @param request - GetCollectionPolicyRequest
     *
     * @returns GetCollectionPolicyResponse
     *
     * @param string                     $policyName
     * @param GetCollectionPolicyRequest $request
     *
     * @return GetCollectionPolicyResponse
     */
    public function getCollectionPolicy($policyName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCollectionPolicyWithOptions($policyName, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a Logtail configuration.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The name of the required Logtail configuration is obtained. For more information, see [ListConfig](https://help.aliyun.com/document_detail/29043.html).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigResponse
     *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConfigResponse
     */
    public function getConfigWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/configs/' . $configName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a Logtail configuration.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The name of the required Logtail configuration is obtained. For more information, see [ListConfig](https://help.aliyun.com/document_detail/29043.html).
     *
     * @returns GetConfigResponse
     *
     * @param string $project
     * @param string $configName
     *
     * @return GetConfigResponse
     */
    public function getConfig($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConfigWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * Query the details of a consumer processor.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumeProcessorResponse
     *
     * @param string         $project
     * @param string         $processorName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumeProcessorResponse
     */
    public function getConsumeProcessorWithOptions($project, $processorName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumeProcessor',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/consumeprocessors/' . $processorName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumeProcessorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Query the details of a consumer processor.
     *
     * @returns GetConsumeProcessorResponse
     *
     * @param string $project
     * @param string $processorName
     *
     * @return GetConsumeProcessorResponse
     */
    public function getConsumeProcessor($project, $processorName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumeProcessorWithOptions($project, $processorName, $headers, $runtime);
    }

    /**
     * Queries the contextual logs of a specified log.
     *
     * @remarks
     * ### Usage notes
     * * You can specify a log as the start log. The time range of a contextual query is one day before and one day after the generation time of the start log.
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Indexes are configured before you query logs. For more information, see [Create indexes](https://help.aliyun.com/document_detail/90732.html).
     * * The values of the pack_id and pack_meta fields are obtained before you query logs. The fields are internal fields, and you can obtain the values by using the debugging feature of your browser in the Simple Log Service console.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetLogStoreContextLogs`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`|
     *
     * @param request - GetContextLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContextLogsResponse
     *
     * @param string                $project
     * @param string                $logstore
     * @param GetContextLogsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetContextLogsResponse
     */
    public function getContextLogsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->backLines) {
            @$query['back_lines'] = $request->backLines;
        }

        if (null !== $request->forwardLines) {
            @$query['forward_lines'] = $request->forwardLines;
        }

        if (null !== $request->packId) {
            @$query['pack_id'] = $request->packId;
        }

        if (null !== $request->packMeta) {
            @$query['pack_meta'] = $request->packMeta;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContextLogs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '?type=context_log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetContextLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the contextual logs of a specified log.
     *
     * @remarks
     * ### Usage notes
     * * You can specify a log as the start log. The time range of a contextual query is one day before and one day after the generation time of the start log.
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Indexes are configured before you query logs. For more information, see [Create indexes](https://help.aliyun.com/document_detail/90732.html).
     * * The values of the pack_id and pack_meta fields are obtained before you query logs. The fields are internal fields, and you can obtain the values by using the debugging feature of your browser in the Simple Log Service console.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetLogStoreContextLogs`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`|
     *
     * @param request - GetContextLogsRequest
     *
     * @returns GetContextLogsResponse
     *
     * @param string                $project
     * @param string                $logstore
     * @param GetContextLogsRequest $request
     *
     * @return GetContextLogsResponse
     */
    public function getContextLogs($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContextLogsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Queries a cursor based on a point in time.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   The following content describes the relationships among a cursor, project, Logstore, and shard:
     *     *   A project can have multiple Logstores.
     *     *   A Logstore can have multiple shards.
     *     *   You can use a cursor to obtain a log in a shard.
     *
     * @param request - GetCursorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCursorResponse
     *
     * @param string           $project
     * @param string           $logstore
     * @param string           $shardId
     * @param GetCursorRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetCursorResponse
     */
    public function getCursorWithOptions($project, $logstore, $shardId, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCursor',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/shards/' . $shardId . '?type=cursor',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCursorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a cursor based on a point in time.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   The following content describes the relationships among a cursor, project, Logstore, and shard:
     *     *   A project can have multiple Logstores.
     *     *   A Logstore can have multiple shards.
     *     *   You can use a cursor to obtain a log in a shard.
     *
     * @param request - GetCursorRequest
     *
     * @returns GetCursorResponse
     *
     * @param string           $project
     * @param string           $logstore
     * @param string           $shardId
     * @param GetCursorRequest $request
     *
     * @return GetCursorResponse
     */
    public function getCursor($project, $logstore, $shardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCursorWithOptions($project, $logstore, $shardId, $request, $headers, $runtime);
    }

    /**
     * Queries the server time of a cursor.
     *
     * @param request - GetCursorTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCursorTimeResponse
     *
     * @param string               $project
     * @param string               $logstore
     * @param string               $shardId
     * @param GetCursorTimeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetCursorTimeResponse
     */
    public function getCursorTimeWithOptions($project, $logstore, $shardId, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->cursor) {
            @$query['cursor'] = $request->cursor;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCursorTime',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/shards/' . $shardId . '?type=cursor_time',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCursorTimeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the server time of a cursor.
     *
     * @param request - GetCursorTimeRequest
     *
     * @returns GetCursorTimeResponse
     *
     * @param string               $project
     * @param string               $logstore
     * @param string               $shardId
     * @param GetCursorTimeRequest $request
     *
     * @return GetCursorTimeResponse
     */
    public function getCursorTime($project, $logstore, $shardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCursorTimeWithOptions($project, $logstore, $shardId, $request, $headers, $runtime);
    }

    /**
     * Queries a dashboard.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDashboardResponse
     *
     * @param string         $project
     * @param string         $dashboardName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDashboardResponse
     */
    public function getDashboardWithOptions($project, $dashboardName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDashboard',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dashboards/' . $dashboardName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a dashboard.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @returns GetDashboardResponse
     *
     * @param string $project
     * @param string $dashboardName
     *
     * @return GetDashboardResponse
     */
    public function getDashboard($project, $dashboardName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDashboardWithOptions($project, $dashboardName, $headers, $runtime);
    }

    /**
     * Queries the information about a download task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDownloadJobResponse
     *
     * @param string         $project
     * @param string         $downloadJobName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDownloadJobResponse
     */
    public function getDownloadJobWithOptions($project, $downloadJobName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDownloadJob',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/downloadjobs/' . $downloadJobName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDownloadJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a download task.
     *
     * @returns GetDownloadJobResponse
     *
     * @param string $project
     * @param string $downloadJobName
     *
     * @return GetDownloadJobResponse
     */
    public function getDownloadJob($project, $downloadJobName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDownloadJobWithOptions($project, $downloadJobName, $headers, $runtime);
    }

    /**
     * Queries the configurations of a data transformation job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetETLResponse
     *
     * @param string         $project
     * @param string         $etlName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetETLResponse
     */
    public function getETLWithOptions($project, $etlName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetETL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/etls/' . $etlName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a data transformation job.
     *
     * @returns GetETLResponse
     *
     * @param string $project
     * @param string $etlName
     *
     * @return GetETLResponse
     */
    public function getETL($project, $etlName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getETLWithOptions($project, $etlName, $headers, $runtime);
    }

    /**
     * Queries the distribution of logs that meet the specified search conditions in a Logstore.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   The time range is evenly divided into subintervals in the responses. If the time range that is specified in the request remains unchanged, the subintervals in the responses also remain unchanged.
     * *   If the number of logs in a Logstore significantly changes, Simple Log Service cannot predict the number of times that you must call this operation to obtain the complete result. In this case, you must check the value of the progress parameter in the response of each request and determine whether to call this operation one more time to obtain the complete result. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * *   After a log is written to a Logstore, you can call the GetHistograms or GetLogs operation to query the log after a short latency. The latency of a query varies based on the type of the log. Simple Log Service classifies logs into the following types based on the log time:
     *     *   Real-time data: The difference between the time record in a log and the current time on Simple Log Service is within the interval (-180 seconds,900 seconds]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as real-time data. After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds.
     *     *   Historical data: The difference between the time record in a log and the current time on Simple Log Service is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as historical data. This type of log is usually generated in data backfill scenarios.
     *     After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds. For 99.9% of queries, the latency is no more than 1 second.
     * > Simple Log Service calculates the difference between the log time that is specified by the __time__ field and the receiving time that is specified by the __tag__:__receive_time__ field for each log. The receiving time indicates the time at which Simple Log Service receives the log. If the difference is within the interval (-180 seconds,900 seconds], Simple Log Service processes the log as real-time data. If the difference is within the interval [-604,800 seconds,-180 seconds), Simple Log Service processes the log as historical data.
     * *   Simple Log Service provides examples on how to call the GetHistograms operation by using Simple Log Service SDK for Java. For more information, see [Use GetHistograms to query the distribution of logs](https://help.aliyun.com/document_detail/462234.html).
     *
     * @param request - GetHistogramsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHistogramsResponse
     *
     * @param string               $project
     * @param string               $logstore
     * @param GetHistogramsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetHistogramsResponse
     */
    public function getHistogramsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        if (null !== $request->topic) {
            @$query['topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHistograms',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/index?type=histogram',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return GetHistogramsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the distribution of logs that meet the specified search conditions in a Logstore.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   The time range is evenly divided into subintervals in the responses. If the time range that is specified in the request remains unchanged, the subintervals in the responses also remain unchanged.
     * *   If the number of logs in a Logstore significantly changes, Simple Log Service cannot predict the number of times that you must call this operation to obtain the complete result. In this case, you must check the value of the progress parameter in the response of each request and determine whether to call this operation one more time to obtain the complete result. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * *   After a log is written to a Logstore, you can call the GetHistograms or GetLogs operation to query the log after a short latency. The latency of a query varies based on the type of the log. Simple Log Service classifies logs into the following types based on the log time:
     *     *   Real-time data: The difference between the time record in a log and the current time on Simple Log Service is within the interval (-180 seconds,900 seconds]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as real-time data. After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds.
     *     *   Historical data: The difference between the time record in a log and the current time on Simple Log Service is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as historical data. This type of log is usually generated in data backfill scenarios.
     *     After real-time data is written to a Logstore, the data can be queried with a maximum latency of 3 seconds. For 99.9% of queries, the latency is no more than 1 second.
     * > Simple Log Service calculates the difference between the log time that is specified by the __time__ field and the receiving time that is specified by the __tag__:__receive_time__ field for each log. The receiving time indicates the time at which Simple Log Service receives the log. If the difference is within the interval (-180 seconds,900 seconds], Simple Log Service processes the log as real-time data. If the difference is within the interval [-604,800 seconds,-180 seconds), Simple Log Service processes the log as historical data.
     * *   Simple Log Service provides examples on how to call the GetHistograms operation by using Simple Log Service SDK for Java. For more information, see [Use GetHistograms to query the distribution of logs](https://help.aliyun.com/document_detail/462234.html).
     *
     * @param request - GetHistogramsRequest
     *
     * @returns GetHistogramsResponse
     *
     * @param string               $project
     * @param string               $logstore
     * @param GetHistogramsRequest $request
     *
     * @return GetHistogramsResponse
     */
    public function getHistograms($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHistogramsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Queries the index of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIndexResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIndexResponse
     */
    public function getIndexWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIndex',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/index',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the index of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns GetIndexResponse
     *
     * @param string $project
     * @param string $logstore
     *
     * @return GetIndexResponse
     */
    public function getIndex($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * Queries an ingest processor.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIngestProcessorResponse
     *
     * @param string         $project
     * @param string         $processorName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIngestProcessorResponse
     */
    public function getIngestProcessorWithOptions($project, $processorName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIngestProcessor',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ingestprocessors/' . $processorName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIngestProcessorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries an ingest processor.
     *
     * @returns GetIngestProcessorResponse
     *
     * @param string $project
     * @param string $processorName
     *
     * @return GetIngestProcessorResponse
     */
    public function getIngestProcessor($project, $processorName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIngestProcessorWithOptions($project, $processorName, $headers, $runtime);
    }

    /**
     * Queries the details of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogStoreResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLogStoreResponse
     */
    public function getLogStoreWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLogStore',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns GetLogStoreResponse
     *
     * @param string $project
     * @param string $logstore
     *
     * @return GetLogStoreResponse
     */
    public function getLogStore($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogStoreWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * Queries the billing mode of a Logstore.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogStoreMeteringModeResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLogStoreMeteringModeResponse
     */
    public function getLogStoreMeteringModeWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLogStoreMeteringMode',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/meteringmode',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLogStoreMeteringModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the billing mode of a Logstore.
     *
     * @returns GetLogStoreMeteringModeResponse
     *
     * @param string $project
     * @param string $logstore
     *
     * @return GetLogStoreMeteringModeResponse
     */
    public function getLogStoreMeteringMode($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogStoreMeteringModeWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * Queries the service log configuration of a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoggingResponse
     *
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLoggingResponse
     */
    public function getLoggingWithOptions($project, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLogging',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logging',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the service log configuration of a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns GetLoggingResponse
     *
     * @param string $project
     *
     * @return GetLoggingResponse
     */
    public function getLogging($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLoggingWithOptions($project, $headers, $runtime);
    }

    /**
     * Queries the logs of a Logstore in a project.
     *
     * @remarks
     * ### Usage notes
     * **Note** Simple Log Service allows you to create a Scheduled SQL job. For more information, see [Create a scheduled SQL job](https://help.aliyun.com/document_detail/286457.html).
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Limits are imposed when you use Simple Log Service to query logs. We recommend that you specify query statements and query time ranges based on the limits. For more information, see [Log search overview](https://help.aliyun.com/document_detail/43772.html) and [Log analysis overview](https://help.aliyun.com/document_detail/53608.html).
     * * Indexes are configured before you query logs. For more information, see [Create indexes](https://help.aliyun.com/document_detail/90732.html).
     * * If the number of logs in a Logstore significantly changes, Simple Log Service cannot predict the number of times that you must call this operation to obtain the complete results. In this case, you must check the value of the x-log-progress parameter in the response of each request and determine whether to call this operation one more time to obtain the complete results. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * * After a log is written to a Logstore, you can call the GetHistograms or the GetLogs operation to query the log. The latency of the query varies based on the type of the log. Simple Log Service classifies logs into the following types based on log timestamps:
     *   * Real-time data: The difference between the time record in a log of this type and the current time on Simple Log Service is within the interval (-180 seconds,900 seconds\\]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as real-time data. This type of log is usually generated in common scenarios.
     *   * Historical data: The difference between the time record in a log of this type and the current time on Simple Log Service is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as historical data. This type of log is usually generated in data backfill scenarios. After real-time data is written to a Logstore, the data can be queried with an approximate latency of 3 seconds.
     * **Note** Simple Log Service calculates the difference between the log time that is specified by the __time__ field and the receiving time that is specified by the __tag__:**receive_time** field for each log. The receiving time indicates when Simple Log Service receives the log. If the difference is within the interval (-180 seconds,900 seconds\\], Simple Log Service processes the log as real-time data. If the difference is within the interval [-604,800 seconds,-180 seconds), Simple Log Service processes the log as historical data.
     * * Simple Log Service provides examples on how to call the GetLogs operation by using Simple Log Service SDK for Java and Simple Log Service SDK for Python. For more information, see [Examples of calling the GetLogs operation by using Simple Log Service SDK for Java](https://help.aliyun.com/document_detail/407683.html) and [Examples of calling the GetLogs operation by using Simple Log Service SDK for Python](https://help.aliyun.com/document_detail/407684.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetLogStoreLogs`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`|
     *
     * @param request - GetLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogsResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param GetLogsRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLogsResponse
     */
    public function getLogsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->line) {
            @$query['line'] = $request->line;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->powerSql) {
            @$query['powerSql'] = $request->powerSql;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->reverse) {
            @$query['reverse'] = $request->reverse;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        if (null !== $request->topic) {
            @$query['topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLogs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '?type=log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return GetLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the logs of a Logstore in a project.
     *
     * @remarks
     * ### Usage notes
     * **Note** Simple Log Service allows you to create a Scheduled SQL job. For more information, see [Create a scheduled SQL job](https://help.aliyun.com/document_detail/286457.html).
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Limits are imposed when you use Simple Log Service to query logs. We recommend that you specify query statements and query time ranges based on the limits. For more information, see [Log search overview](https://help.aliyun.com/document_detail/43772.html) and [Log analysis overview](https://help.aliyun.com/document_detail/53608.html).
     * * Indexes are configured before you query logs. For more information, see [Create indexes](https://help.aliyun.com/document_detail/90732.html).
     * * If the number of logs in a Logstore significantly changes, Simple Log Service cannot predict the number of times that you must call this operation to obtain the complete results. In this case, you must check the value of the x-log-progress parameter in the response of each request and determine whether to call this operation one more time to obtain the complete results. Each time you call this operation, the same number of charge units (CUs) are consumed.
     * * After a log is written to a Logstore, you can call the GetHistograms or the GetLogs operation to query the log. The latency of the query varies based on the type of the log. Simple Log Service classifies logs into the following types based on log timestamps:
     *   * Real-time data: The difference between the time record in a log of this type and the current time on Simple Log Service is within the interval (-180 seconds,900 seconds\\]. For example, if a log was generated at 12:03:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as real-time data. This type of log is usually generated in common scenarios.
     *   * Historical data: The difference between the time record in a log of this type and the current time on Simple Log Service is within the interval [-604,800 seconds,-180 seconds). For example, if a log was generated at 12:00:00, September 25, 2014 (UTC) and Simple Log Service received the log at 12:05:00, September 25, 2014 (UTC), Simple Log Service processes the log as historical data. This type of log is usually generated in data backfill scenarios. After real-time data is written to a Logstore, the data can be queried with an approximate latency of 3 seconds.
     * **Note** Simple Log Service calculates the difference between the log time that is specified by the __time__ field and the receiving time that is specified by the __tag__:**receive_time** field for each log. The receiving time indicates when Simple Log Service receives the log. If the difference is within the interval (-180 seconds,900 seconds\\], Simple Log Service processes the log as real-time data. If the difference is within the interval [-604,800 seconds,-180 seconds), Simple Log Service processes the log as historical data.
     * * Simple Log Service provides examples on how to call the GetLogs operation by using Simple Log Service SDK for Java and Simple Log Service SDK for Python. For more information, see [Examples of calling the GetLogs operation by using Simple Log Service SDK for Java](https://help.aliyun.com/document_detail/407683.html) and [Examples of calling the GetLogs operation by using Simple Log Service SDK for Python](https://help.aliyun.com/document_detail/407684.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetLogStoreLogs`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}`|
     *
     * @param request - GetLogsRequest
     *
     * @returns GetLogsResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param GetLogsRequest $request
     *
     * @return GetLogsResponse
     */
    public function getLogs($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Queries the raw log data in a Logstore of a project. The returned result contains the raw log data within a specific time range. The returned result is compressed before transmission.
     *
     * @remarks
     * You can call this operation by using Simple Log Service SDK for Go, Java, or Python. You can call this operation by using Alibaba Cloud SDK for all programming languages.
     * * When you call this operation, take note of the compression method that you use. The supported compression algorithms vary based on the programming language. For more information, see the description of the Accept-Encoding parameter in this topic.
     * * For more information, see [GetLogs](https://help.aliyun.com/document_detail/2771313.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a Resource Access Management (RAM) policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetLogStoreLogs`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`|
     *
     * @param request - GetLogsV2Request
     * @param headers - GetLogsV2Headers
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogsV2Response
     *
     * @param string           $project
     * @param string           $logstore
     * @param GetLogsV2Request $request
     * @param GetLogsV2Headers $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetLogsV2Response
     */
    public function getLogsV2WithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->forward) {
            @$body['forward'] = $request->forward;
        }

        if (null !== $request->from) {
            @$body['from'] = $request->from;
        }

        if (null !== $request->highlight) {
            @$body['highlight'] = $request->highlight;
        }

        if (null !== $request->line) {
            @$body['line'] = $request->line;
        }

        if (null !== $request->offset) {
            @$body['offset'] = $request->offset;
        }

        if (null !== $request->powerSql) {
            @$body['powerSql'] = $request->powerSql;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->reverse) {
            @$body['reverse'] = $request->reverse;
        }

        if (null !== $request->session) {
            @$body['session'] = $request->session;
        }

        if (null !== $request->to) {
            @$body['to'] = $request->to;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->acceptEncoding) {
            @$realHeaders['Accept-Encoding'] = '' . $headers->acceptEncoding;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLogsV2',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/logs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLogsV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the raw log data in a Logstore of a project. The returned result contains the raw log data within a specific time range. The returned result is compressed before transmission.
     *
     * @remarks
     * You can call this operation by using Simple Log Service SDK for Go, Java, or Python. You can call this operation by using Alibaba Cloud SDK for all programming languages.
     * * When you call this operation, take note of the compression method that you use. The supported compression algorithms vary based on the programming language. For more information, see the description of the Accept-Encoding parameter in this topic.
     * * For more information, see [GetLogs](https://help.aliyun.com/document_detail/2771313.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a Resource Access Management (RAM) policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetLogStoreLogs`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`|
     *
     * @param request - GetLogsV2Request
     *
     * @returns GetLogsV2Response
     *
     * @param string           $project
     * @param string           $logstore
     * @param GetLogsV2Request $request
     *
     * @return GetLogsV2Response
     */
    public function getLogsV2($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetLogsV2Headers([]);

        return $this->getLogsV2WithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Queries the information about a Logtail pipeline configuration.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogtailPipelineConfigResponse
     *
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLogtailPipelineConfigResponse
     */
    public function getLogtailPipelineConfigWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLogtailPipelineConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/pipelineconfigs/' . $configName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a Logtail pipeline configuration.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @returns GetLogtailPipelineConfigResponse
     *
     * @param string $project
     * @param string $configName
     *
     * @return GetLogtailPipelineConfigResponse
     */
    public function getLogtailPipelineConfig($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogtailPipelineConfigWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * Simple Log Service provides intelligent analysis capabilities that can be used to analyze basic data such as logs, metrics, and traces. You can call the GetMLServiceResults operation to obtain the analysis results of a model. You can call the operation in the following scenarios: Named Entity Recognition (NER) tasks on logs, anomaly detection on time series, and root cause analysis on high-latency traces.
     *
     * @remarks
     * You must obtain the following basic permissions before you call this operation:
     *     {
     *         "Version": "1",
     *         "Statement": [
     *             {
     *                 "Action": [
     *                     "log:Get*"
     *                 ],
     *                 "Resource": [
     *                     "acs:log:*:*:mlservice/sls_builtin_*"
     *                 ],
     *                 "Effect": "Allow"
     *             }
     *         ]
     *     }
     *
     * @param request - GetMLServiceResultsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMLServiceResultsResponse
     *
     * @param string                     $serviceName
     * @param GetMLServiceResultsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetMLServiceResultsResponse
     */
    public function getMLServiceResultsWithOptions($serviceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowBuiltin) {
            @$query['allowBuiltin'] = $request->allowBuiltin;
        }

        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'GetMLServiceResults',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/service/' . $serviceName . '/analysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMLServiceResultsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Simple Log Service provides intelligent analysis capabilities that can be used to analyze basic data such as logs, metrics, and traces. You can call the GetMLServiceResults operation to obtain the analysis results of a model. You can call the operation in the following scenarios: Named Entity Recognition (NER) tasks on logs, anomaly detection on time series, and root cause analysis on high-latency traces.
     *
     * @remarks
     * You must obtain the following basic permissions before you call this operation:
     *     {
     *         "Version": "1",
     *         "Statement": [
     *             {
     *                 "Action": [
     *                     "log:Get*"
     *                 ],
     *                 "Resource": [
     *                     "acs:log:*:*:mlservice/sls_builtin_*"
     *                 ],
     *                 "Effect": "Allow"
     *             }
     *         ]
     *     }
     *
     * @param request - GetMLServiceResultsRequest
     *
     * @returns GetMLServiceResultsResponse
     *
     * @param string                     $serviceName
     * @param GetMLServiceResultsRequest $request
     *
     * @return GetMLServiceResultsResponse
     */
    public function getMLServiceResults($serviceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMLServiceResultsWithOptions($serviceName, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMachineGroupResponse
     *
     * @param string         $project
     * @param string         $machineGroup
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMachineGroupResponse
     */
    public function getMachineGroupWithOptions($project, $machineGroup, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMachineGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups/' . $machineGroup . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns GetMachineGroupResponse
     *
     * @param string $project
     * @param string $machineGroup
     *
     * @return GetMachineGroupResponse
     */
    public function getMachineGroup($project, $machineGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMachineGroupWithOptions($project, $machineGroup, $headers, $runtime);
    }

    /**
     * Queries a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMaxComputeExportResponse
     *
     * @param string         $project
     * @param string         $mcExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMaxComputeExportResponse
     */
    public function getMaxComputeExportWithOptions($project, $mcExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMaxComputeExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/maxcomputeexports/' . $mcExportName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMaxComputeExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @returns GetMaxComputeExportResponse
     *
     * @param string $project
     * @param string $mcExportName
     *
     * @return GetMaxComputeExportResponse
     */
    public function getMaxComputeExport($project, $mcExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMaxComputeExportWithOptions($project, $mcExportName, $headers, $runtime);
    }

    /**
     * Queries a Metricstore.
     *
     * @remarks
     * Metricstores are used to store metric data. For more information about Metricstores, see [Metricstores](https://help.aliyun.com/document_detail/171723.html). For more information about metric data, see [Metric data](https://help.aliyun.com/document_detail/174965.html). You can call this operation to query the settings of a Metricstore. To query the metric data in a Metricstore, see [Query and analysis](https://help.aliyun.com/document_detail/174968.html) and [GetLogsV2](https://help.aliyun.com/document_detail/2771318.html).
     * *   You must specify an existing Metricstore.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 200 Logstores or Metricstores in a project.
     * *   Metric data is automatically deleted when the retention period of the metric data ends.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMetricStoreResponse
     *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMetricStoreResponse
     */
    public function getMetricStoreWithOptions($project, $name, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMetricStore',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/metricstores/' . $name . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetMetricStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a Metricstore.
     *
     * @remarks
     * Metricstores are used to store metric data. For more information about Metricstores, see [Metricstores](https://help.aliyun.com/document_detail/171723.html). For more information about metric data, see [Metric data](https://help.aliyun.com/document_detail/174965.html). You can call this operation to query the settings of a Metricstore. To query the metric data in a Metricstore, see [Query and analysis](https://help.aliyun.com/document_detail/174968.html) and [GetLogsV2](https://help.aliyun.com/document_detail/2771318.html).
     * *   You must specify an existing Metricstore.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 200 Logstores or Metricstores in a project.
     * *   Metric data is automatically deleted when the retention period of the metric data ends.
     *
     * @returns GetMetricStoreResponse
     *
     * @param string $project
     * @param string $name
     *
     * @return GetMetricStoreResponse
     */
    public function getMetricStore($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMetricStoreWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * Queries the billing mode of a Metricstore.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMetricStoreMeteringModeResponse
     *
     * @param string         $project
     * @param string         $metricStore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMetricStoreMeteringModeResponse
     */
    public function getMetricStoreMeteringModeWithOptions($project, $metricStore, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMetricStoreMeteringMode',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/metricstores/' . $metricStore . '/meteringmode',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMetricStoreMeteringModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the billing mode of a Metricstore.
     *
     * @returns GetMetricStoreMeteringModeResponse
     *
     * @param string $project
     * @param string $metricStore
     *
     * @return GetMetricStoreMeteringModeResponse
     */
    public function getMetricStoreMeteringMode($project, $metricStore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMetricStoreMeteringModeWithOptions($project, $metricStore, $headers, $runtime);
    }

    /**
     * 获取OSS投递任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOSSExportResponse
     *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOSSExportResponse
     */
    public function getOSSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetOSSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossexports/' . $ossExportName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取OSS投递任务
     *
     * @returns GetOSSExportResponse
     *
     * @param string $project
     * @param string $ossExportName
     *
     * @return GetOSSExportResponse
     */
    public function getOSSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOSSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * Get OSSHDFS Exports.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOSSHDFSExportResponse
     *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOSSHDFSExportResponse
     */
    public function getOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetOSSHDFSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/osshdfsexports/' . $ossExportName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Get OSSHDFS Exports.
     *
     * @returns GetOSSHDFSExportResponse
     *
     * @param string $project
     * @param string $ossExportName
     *
     * @return GetOSSHDFSExportResponse
     */
    public function getOSSHDFSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * Queries the information about an Object Storage Service (OSS) data import job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOSSIngestionResponse
     *
     * @param string         $project
     * @param string         $ossIngestionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOSSIngestionResponse
     */
    public function getOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetOSSIngestion',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossingestions/' . $ossIngestionName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an Object Storage Service (OSS) data import job.
     *
     * @returns GetOSSIngestionResponse
     *
     * @param string $project
     * @param string $ossIngestionName
     *
     * @return GetOSSIngestionResponse
     */
    public function getOSSIngestion($project, $ossIngestionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime);
    }

    /**
     * Queries the details of a project.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectResponse
     *
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($project, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a project.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns GetProjectResponse
     *
     * @param string $project
     *
     * @return GetProjectResponse
     */
    public function getProject($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($project, $headers, $runtime);
    }

    /**
     * Queries logs in a project. You can use this operation to query logs at the project level.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * * Indexes are configured before you query logs. For more information, see [Create indexes](https://help.aliyun.com/document_detail/90732.html).
     * * Limits are imposed when you use Simple Log Service to query logs. We recommend that you specify query statements and query time ranges based on the limits. For more information, see [Log search overview](https://help.aliyun.com/document_detail/43772.html) and [Log analysis overview](https://help.aliyun.com/document_detail/53608.html).
     * * You must set query to a standard SQL statement.
     * * You must specify a Logstore in the FROM clause of an SQL statement. A Logstore can be used as an SQL table.
     * * You must specify a time range in an SQL statement by using the __date__ or __time__ parameter. The value of the __date__ parameter is a timestamp. The value of the __time__ parameter is an integer, and the unit of the value is seconds.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetProjectLogs`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`|
     *
     * @param request - GetProjectLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectLogsResponse
     *
     * @param string                $project
     * @param GetProjectLogsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetProjectLogsResponse
     */
    public function getProjectLogsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->powerSql) {
            @$query['powerSql'] = $request->powerSql;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProjectLogs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return GetProjectLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries logs in a project. You can use this operation to query logs at the project level.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * * Indexes are configured before you query logs. For more information, see [Create indexes](https://help.aliyun.com/document_detail/90732.html).
     * * Limits are imposed when you use Simple Log Service to query logs. We recommend that you specify query statements and query time ranges based on the limits. For more information, see [Log search overview](https://help.aliyun.com/document_detail/43772.html) and [Log analysis overview](https://help.aliyun.com/document_detail/53608.html).
     * * You must set query to a standard SQL statement.
     * * You must specify a Logstore in the FROM clause of an SQL statement. A Logstore can be used as an SQL table.
     * * You must specify a time range in an SQL statement by using the __date__ or __time__ parameter. The value of the __date__ parameter is a timestamp. The value of the __time__ parameter is an integer, and the unit of the value is seconds.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetProjectLogs`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`|
     *
     * @param request - GetProjectLogsRequest
     *
     * @returns GetProjectLogsResponse
     *
     * @param string                $project
     * @param GetProjectLogsRequest $request
     *
     * @return GetProjectLogsResponse
     */
    public function getProjectLogs($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectLogsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a project policy.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectPolicyResponse
     *
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectPolicyResponse
     */
    public function getProjectPolicyWithOptions($project, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProjectPolicy',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/policy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return GetProjectPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a project policy.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @returns GetProjectPolicyResponse
     *
     * @param string $project
     *
     * @return GetProjectPolicyResponse
     */
    public function getProjectPolicy($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectPolicyWithOptions($project, $headers, $runtime);
    }

    /**
     * Queries a saved search.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * You can call the ListSavedSearch operation to query the name of a saved search.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetSavedSearch`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`|
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSavedSearchResponse
     *
     * @param string         $project
     * @param string         $savedsearchName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSavedSearchResponse
     */
    public function getSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSavedSearch',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/savedsearches/' . $savedsearchName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a saved search.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * You can call the ListSavedSearch operation to query the name of a saved search.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:GetSavedSearch`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`|
     *
     * @returns GetSavedSearchResponse
     *
     * @param string $project
     * @param string $savedsearchName
     *
     * @return GetSavedSearchResponse
     */
    public function getSavedSearch($project, $savedsearchName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime);
    }

    /**
     * Queries the information about a Scheduled SQL job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledSQLResponse
     *
     * @param string         $project
     * @param string         $scheduledSQLName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetScheduledSQLResponse
     */
    public function getScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetScheduledSQL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/scheduledsqls/' . $scheduledSQLName . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a Scheduled SQL job.
     *
     * @returns GetScheduledSQLResponse
     *
     * @param string $project
     * @param string $scheduledSQLName
     *
     * @return GetScheduledSQLResponse
     */
    public function getScheduledSQL($project, $scheduledSQLName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScheduledSQLWithOptions($project, $scheduledSQLName, $headers, $runtime);
    }

    /**
     * Queries the activation status of Simple Log Service. You must use the endpoint for Simple Log Service only in the China (Shanghai) or Singapore region.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSlsServiceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSlsServiceResponse
     */
    public function getSlsServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSlsService',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/slsservice',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSlsServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the activation status of Simple Log Service. You must use the endpoint for Simple Log Service only in the China (Shanghai) or Singapore region.
     *
     * @returns GetSlsServiceResponse
     *
     * @return GetSlsServiceResponse
     */
    public function getSlsService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSlsServiceWithOptions($headers, $runtime);
    }

    /**
     * Queries the configurations of the Dedicated SQL feature.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSqlInstanceResponse
     *
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSqlInstanceResponse
     */
    public function getSqlInstanceWithOptions($project, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSqlInstance',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/sqlinstance',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return GetSqlInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the configurations of the Dedicated SQL feature.
     *
     * @returns GetSqlInstanceResponse
     *
     * @param string $project
     *
     * @return GetSqlInstanceResponse
     */
    public function getSqlInstance($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSqlInstanceWithOptions($project, $headers, $runtime);
    }

    /**
     * Queries the configurations of a dataset by using the name of the dataset.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStoreViewResponse
     *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetStoreViewResponse
     */
    public function getStoreViewWithOptions($project, $name, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetStoreView',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/storeviews/' . $name . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStoreViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a dataset by using the name of the dataset.
     *
     * @returns GetStoreViewResponse
     *
     * @param string $project
     * @param string $name
     *
     * @return GetStoreViewResponse
     */
    public function getStoreView($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStoreViewWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * Queries the indexes of a dataset by using the name of the dataset. Only datasets of the logstore type are supported.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStoreViewIndexResponse
     *
     * @param string         $project
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetStoreViewIndexResponse
     */
    public function getStoreViewIndexWithOptions($project, $name, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetStoreViewIndex',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/storeviews/' . $name . '/index',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStoreViewIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the indexes of a dataset by using the name of the dataset. Only datasets of the logstore type are supported.
     *
     * @returns GetStoreViewIndexResponse
     *
     * @param string $project
     * @param string $name
     *
     * @return GetStoreViewIndexResponse
     */
    public function getStoreViewIndex($project, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStoreViewIndexWithOptions($project, $name, $headers, $runtime);
    }

    /**
     * ListAgentInstanceConfigs.
     *
     * @param request - ListAgentInstanceConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentInstanceConfigsResponse
     *
     * @param ListAgentInstanceConfigsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAgentInstanceConfigsResponse
     */
    public function listAgentInstanceConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configType) {
            @$query['configType'] = $request->configType;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentInstanceConfigs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/agentinstanceconfigs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentInstanceConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * ListAgentInstanceConfigs.
     *
     * @param request - ListAgentInstanceConfigsRequest
     *
     * @returns ListAgentInstanceConfigsResponse
     *
     * @param ListAgentInstanceConfigsRequest $request
     *
     * @return ListAgentInstanceConfigsResponse
     */
    public function listAgentInstanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentInstanceConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取 ai 工具列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiToolsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAiToolsResponse
     */
    public function listAiToolsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListAiTools',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/tool/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return ListAiToolsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取 ai 工具列表.
     *
     * @returns ListAiToolsResponse
     *
     * @return ListAiToolsResponse
     */
    public function listAiTools()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAiToolsWithOptions($headers, $runtime);
    }

    /**
     * Queries a list of alert rules in a project.
     *
     * @param request - ListAlertsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertsResponse
     *
     * @param string            $project
     * @param ListAlertsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAlertsResponse
     */
    public function listAlertsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->logstore) {
            @$query['logstore'] = $request->logstore;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlerts',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alerts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of alert rules in a project.
     *
     * @param request - ListAlertsRequest
     *
     * @returns ListAlertsResponse
     *
     * @param string            $project
     * @param ListAlertsRequest $request
     *
     * @return ListAlertsResponse
     */
    public function listAlerts($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries data in datasets.
     *
     * @param request - ListAnnotationDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnnotationDataResponse
     *
     * @param string                    $datasetId
     * @param ListAnnotationDataRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListAnnotationDataResponse
     */
    public function listAnnotationDataWithOptions($datasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnnotationData',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationdataset/' . $datasetId . '/annotationdata',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAnnotationDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries data in datasets.
     *
     * @param request - ListAnnotationDataRequest
     *
     * @returns ListAnnotationDataResponse
     *
     * @param string                    $datasetId
     * @param ListAnnotationDataRequest $request
     *
     * @return ListAnnotationDataResponse
     */
    public function listAnnotationData($datasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnnotationDataWithOptions($datasetId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of datasets.
     *
     * @param request - ListAnnotationDataSetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnnotationDataSetsResponse
     *
     * @param ListAnnotationDataSetsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListAnnotationDataSetsResponse
     */
    public function listAnnotationDataSetsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnnotationDataSets',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationdataset',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAnnotationDataSetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of datasets.
     *
     * @param request - ListAnnotationDataSetsRequest
     *
     * @returns ListAnnotationDataSetsResponse
     *
     * @param ListAnnotationDataSetsRequest $request
     *
     * @return ListAnnotationDataSetsResponse
     */
    public function listAnnotationDataSets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnnotationDataSetsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of tag tables.
     *
     * @param request - ListAnnotationLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnnotationLabelsResponse
     *
     * @param ListAnnotationLabelsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListAnnotationLabelsResponse
     */
    public function listAnnotationLabelsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnnotationLabels',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationlabel',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAnnotationLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of tag tables.
     *
     * @param request - ListAnnotationLabelsRequest
     *
     * @returns ListAnnotationLabelsResponse
     *
     * @param ListAnnotationLabelsRequest $request
     *
     * @return ListAnnotationLabelsResponse
     */
    public function listAnnotationLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnnotationLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of log collection policies for cloud services.
     *
     * @remarks
     * You must use the Simple Log Service endpoint for the China (Shanghai), Singapore, or Heyuan ACDR Auto region to call the operation.
     *
     * @param request - ListCollectionPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCollectionPoliciesResponse
     *
     * @param ListCollectionPoliciesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListCollectionPoliciesResponse
     */
    public function listCollectionPoliciesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->centralProject) {
            @$query['centralProject'] = $request->centralProject;
        }

        if (null !== $request->dataCode) {
            @$query['dataCode'] = $request->dataCode;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->policyName) {
            @$query['policyName'] = $request->policyName;
        }

        if (null !== $request->productCode) {
            @$query['productCode'] = $request->productCode;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCollectionPolicies',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/collectionpolicy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCollectionPoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of log collection policies for cloud services.
     *
     * @remarks
     * You must use the Simple Log Service endpoint for the China (Shanghai), Singapore, or Heyuan ACDR Auto region to call the operation.
     *
     * @param request - ListCollectionPoliciesRequest
     *
     * @returns ListCollectionPoliciesResponse
     *
     * @param ListCollectionPoliciesRequest $request
     *
     * @return ListCollectionPoliciesResponse
     */
    public function listCollectionPolicies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCollectionPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries all Logtail configurations in a project.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param request - ListConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConfigResponse
     *
     * @param string            $project
     * @param ListConfigRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListConfigResponse
     */
    public function listConfigWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->configName) {
            @$query['configName'] = $request->configName;
        }

        if (null !== $request->logstoreName) {
            @$query['logstoreName'] = $request->logstoreName;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all Logtail configurations in a project.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param request - ListConfigRequest
     *
     * @returns ListConfigResponse
     *
     * @param string            $project
     * @param ListConfigRequest $request
     *
     * @return ListConfigResponse
     */
    public function listConfig($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConfigWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of consumption processors that meet specific conditions.
     *
     * @param request - ListConsumeProcessorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumeProcessorsResponse
     *
     * @param string                       $project
     * @param ListConsumeProcessorsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListConsumeProcessorsResponse
     */
    public function listConsumeProcessorsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->displayName) {
            @$query['displayName'] = $request->displayName;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->processorName) {
            @$query['processorName'] = $request->processorName;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumeProcessors',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/consumeprocessors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumeProcessorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of consumption processors that meet specific conditions.
     *
     * @param request - ListConsumeProcessorsRequest
     *
     * @returns ListConsumeProcessorsResponse
     *
     * @param string                       $project
     * @param ListConsumeProcessorsRequest $request
     *
     * @return ListConsumeProcessorsResponse
     */
    public function listConsumeProcessors($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumeProcessorsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries all consumer groups of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ListConsumerGroup`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}/consumergroup/*`|
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerGroupResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListConsumerGroupResponse
     */
    public function listConsumerGroupWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListConsumerGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/consumergroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return ListConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all consumer groups of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ListConsumerGroup`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#LogstoreName}/consumergroup/*`|
     *
     * @returns ListConsumerGroupResponse
     *
     * @param string $project
     * @param string $logstore
     *
     * @return ListConsumerGroupResponse
     */
    public function listConsumerGroup($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * Queries a list of dashboards.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param tmpReq - ListDashboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDashboardResponse
     *
     * @param string               $project
     * @param ListDashboardRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListDashboardResponse
     */
    public function listDashboardWithOptions($project, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $request = new ListDashboardShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->dashboardName) {
            @$query['dashboardName'] = $request->dashboardName;
        }

        if (null !== $request->displayName) {
            @$query['displayName'] = $request->displayName;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDashboard',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dashboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of dashboards.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param request - ListDashboardRequest
     *
     * @returns ListDashboardResponse
     *
     * @param string               $project
     * @param ListDashboardRequest $request
     *
     * @return ListDashboardResponse
     */
    public function listDashboard($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries the custom domain names that are bound to projects.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Only one custom domain name can be bound to each project.
     *
     * @param request - ListDomainsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDomainsResponse
     *
     * @param string             $project
     * @param ListDomainsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->domainName) {
            @$query['domainName'] = $request->domainName;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDomains',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/domains',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the custom domain names that are bound to projects.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Only one custom domain name can be bound to each project.
     *
     * @param request - ListDomainsRequest
     *
     * @returns ListDomainsResponse
     *
     * @param string             $project
     * @param ListDomainsRequest $request
     *
     * @return ListDomainsResponse
     */
    public function listDomains($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of log download tasks in a project.
     *
     * @param request - ListDownloadJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDownloadJobsResponse
     *
     * @param string                  $project
     * @param ListDownloadJobsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListDownloadJobsResponse
     */
    public function listDownloadJobsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->logstore) {
            @$query['logstore'] = $request->logstore;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDownloadJobs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/downloadjobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDownloadJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of log download tasks in a project.
     *
     * @param request - ListDownloadJobsRequest
     *
     * @returns ListDownloadJobsResponse
     *
     * @param string                  $project
     * @param ListDownloadJobsRequest $request
     *
     * @return ListDownloadJobsResponse
     */
    public function listDownloadJobs($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDownloadJobsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of data transformation jobs in a project.
     *
     * @param request - ListETLsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListETLsResponse
     *
     * @param string          $project
     * @param ListETLsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListETLsResponse
     */
    public function listETLsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->logstore) {
            @$query['logstore'] = $request->logstore;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListETLs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/etls',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListETLsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of data transformation jobs in a project.
     *
     * @param request - ListETLsRequest
     *
     * @returns ListETLsResponse
     *
     * @param string          $project
     * @param ListETLsRequest $request
     *
     * @return ListETLsResponse
     */
    public function listETLs($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listETLsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of ingest processors that meet specific conditions.
     *
     * @param request - ListIngestProcessorsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIngestProcessorsResponse
     *
     * @param string                      $project
     * @param ListIngestProcessorsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListIngestProcessorsResponse
     */
    public function listIngestProcessorsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->displayName) {
            @$query['displayName'] = $request->displayName;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->processorName) {
            @$query['processorName'] = $request->processorName;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIngestProcessors',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ingestprocessors',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIngestProcessorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of ingest processors that meet specific conditions.
     *
     * @param request - ListIngestProcessorsRequest
     *
     * @returns ListIngestProcessorsResponse
     *
     * @param string                      $project
     * @param ListIngestProcessorsRequest $request
     *
     * @return ListIngestProcessorsResponse
     */
    public function listIngestProcessors($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIngestProcessorsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries all Logstores or Logstores that match specific conditions in a project.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ListLogStores`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/*`|
     *
     * @param request - ListLogStoresRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogStoresResponse
     *
     * @param string               $project
     * @param ListLogStoresRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListLogStoresResponse
     */
    public function listLogStoresWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->logstoreName) {
            @$query['logstoreName'] = $request->logstoreName;
        }

        if (null !== $request->mode) {
            @$query['mode'] = $request->mode;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->telemetryType) {
            @$query['telemetryType'] = $request->telemetryType;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogStores',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLogStoresResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all Logstores or Logstores that match specific conditions in a project.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ListLogStores`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/*`|
     *
     * @param request - ListLogStoresRequest
     *
     * @returns ListLogStoresResponse
     *
     * @param string               $project
     * @param ListLogStoresRequest $request
     *
     * @return ListLogStoresResponse
     */
    public function listLogStores($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogStoresWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of Logtail pipeline configurations that meet the specified conditions.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @param request - ListLogtailPipelineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogtailPipelineConfigResponse
     *
     * @param string                           $project
     * @param ListLogtailPipelineConfigRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListLogtailPipelineConfigResponse
     */
    public function listLogtailPipelineConfigWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->configName) {
            @$query['configName'] = $request->configName;
        }

        if (null !== $request->configType) {
            @$query['configType'] = $request->configType;
        }

        if (null !== $request->logstoreName) {
            @$query['logstoreName'] = $request->logstoreName;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogtailPipelineConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/pipelineconfigs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of Logtail pipeline configurations that meet the specified conditions.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @param request - ListLogtailPipelineConfigRequest
     *
     * @returns ListLogtailPipelineConfigResponse
     *
     * @param string                           $project
     * @param ListLogtailPipelineConfigRequest $request
     *
     * @return ListLogtailPipelineConfigResponse
     */
    public function listLogtailPipelineConfig($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogtailPipelineConfigWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries the machine groups of a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - ListMachineGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMachineGroupResponse
     *
     * @param string                  $project
     * @param ListMachineGroupRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMachineGroupResponse
     */
    public function listMachineGroupWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->groupName) {
            @$query['groupName'] = $request->groupName;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMachineGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the machine groups of a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - ListMachineGroupRequest
     *
     * @returns ListMachineGroupResponse
     *
     * @param string                  $project
     * @param ListMachineGroupRequest $request
     *
     * @return ListMachineGroupResponse
     */
    public function listMachineGroup($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMachineGroupWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of machines that are connected to Simple Log Service in a specified machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - ListMachinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMachinesResponse
     *
     * @param string              $project
     * @param string              $machineGroup
     * @param ListMachinesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMachinesResponse
     */
    public function listMachinesWithOptions($project, $machineGroup, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMachines',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups/' . $machineGroup . '/machines',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMachinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of machines that are connected to Simple Log Service in a specified machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - ListMachinesRequest
     *
     * @returns ListMachinesResponse
     *
     * @param string              $project
     * @param string              $machineGroup
     * @param ListMachinesRequest $request
     *
     * @return ListMachinesResponse
     */
    public function listMachines($project, $machineGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMachinesWithOptions($project, $machineGroup, $request, $headers, $runtime);
    }

    /**
     * Queries a list of MaxCompute data shipping jobs.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @param request - ListMaxComputeExportsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMaxComputeExportsResponse
     *
     * @param string                       $project
     * @param ListMaxComputeExportsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListMaxComputeExportsResponse
     */
    public function listMaxComputeExportsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->logstore) {
            @$query['logstore'] = $request->logstore;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMaxComputeExports',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/maxcomputeexports',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMaxComputeExportsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of MaxCompute data shipping jobs.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @param request - ListMaxComputeExportsRequest
     *
     * @returns ListMaxComputeExportsResponse
     *
     * @param string                       $project
     * @param ListMaxComputeExportsRequest $request
     *
     * @return ListMaxComputeExportsResponse
     */
    public function listMaxComputeExports($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMaxComputeExportsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries the list of Metricstores in a project. You can use fuzzy search to query the Metricstores by Metricstore name.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param request - ListMetricStoresRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMetricStoresResponse
     *
     * @param string                  $project
     * @param ListMetricStoresRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMetricStoresResponse
     */
    public function listMetricStoresWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->mode) {
            @$query['mode'] = $request->mode;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMetricStores',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/metricstores',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return ListMetricStoresResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of Metricstores in a project. You can use fuzzy search to query the Metricstores by Metricstore name.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param request - ListMetricStoresRequest
     *
     * @returns ListMetricStoresResponse
     *
     * @param string                  $project
     * @param ListMetricStoresRequest $request
     *
     * @return ListMetricStoresResponse
     */
    public function listMetricStores($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMetricStoresWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * 列出OSS投递任务
     *
     * @param request - ListOSSExportsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOSSExportsResponse
     *
     * @param string                $project
     * @param ListOSSExportsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListOSSExportsResponse
     */
    public function listOSSExportsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->logstore) {
            @$query['logstore'] = $request->logstore;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOSSExports',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossexports',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOSSExportsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列出OSS投递任务
     *
     * @param request - ListOSSExportsRequest
     *
     * @returns ListOSSExportsResponse
     *
     * @param string                $project
     * @param ListOSSExportsRequest $request
     *
     * @return ListOSSExportsResponse
     */
    public function listOSSExports($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOSSExportsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * 列举OSSHDFS投递任务
     *
     * @param request - ListOSSHDFSExportsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOSSHDFSExportsResponse
     *
     * @param string                    $project
     * @param ListOSSHDFSExportsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListOSSHDFSExportsResponse
     */
    public function listOSSHDFSExportsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->logstore) {
            @$query['logstore'] = $request->logstore;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOSSHDFSExports',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/osshdfsexports',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOSSHDFSExportsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举OSSHDFS投递任务
     *
     * @param request - ListOSSHDFSExportsRequest
     *
     * @returns ListOSSHDFSExportsResponse
     *
     * @param string                    $project
     * @param ListOSSHDFSExportsRequest $request
     *
     * @return ListOSSHDFSExportsResponse
     */
    public function listOSSHDFSExports($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOSSHDFSExportsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of Object Storage Service (OSS) data import jobs in a project.
     *
     * @param request - ListOSSIngestionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOSSIngestionsResponse
     *
     * @param string                   $project
     * @param ListOSSIngestionsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListOSSIngestionsResponse
     */
    public function listOSSIngestionsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->logstore) {
            @$query['logstore'] = $request->logstore;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOSSIngestions',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossingestions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOSSIngestionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of Object Storage Service (OSS) data import jobs in a project.
     *
     * @param request - ListOSSIngestionsRequest
     *
     * @returns ListOSSIngestionsResponse
     *
     * @param string                   $project
     * @param ListOSSIngestionsRequest $request
     *
     * @return ListOSSIngestionsResponse
     */
    public function listOSSIngestions($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOSSIngestionsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries the projects that meet specified conditions.
     *
     * @remarks
     * ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - ListProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fetchQuota) {
            @$query['fetchQuota'] = $request->fetchQuota;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->projectName) {
            @$query['projectName'] = $request->projectName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProject',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the projects that meet specified conditions.
     *
     * @remarks
     * ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - ListProjectRequest
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of saved searches.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - ListSavedSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSavedSearchResponse
     *
     * @param string                 $project
     * @param ListSavedSearchRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListSavedSearchResponse
     */
    public function listSavedSearchWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSavedSearch',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/savedsearches',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of saved searches.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - ListSavedSearchRequest
     *
     * @returns ListSavedSearchResponse
     *
     * @param string                 $project
     * @param ListSavedSearchRequest $request
     *
     * @return ListSavedSearchResponse
     */
    public function listSavedSearch($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSavedSearchWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of Scheduled SQL jobs in a project.
     *
     * @param request - ListScheduledSQLsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledSQLsResponse
     *
     * @param string                   $project
     * @param ListScheduledSQLsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListScheduledSQLsResponse
     */
    public function listScheduledSQLsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->logstore) {
            @$query['logstore'] = $request->logstore;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduledSQLs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/scheduledsqls',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListScheduledSQLsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of Scheduled SQL jobs in a project.
     *
     * @param request - ListScheduledSQLsRequest
     *
     * @returns ListScheduledSQLsResponse
     *
     * @param string                   $project
     * @param ListScheduledSQLsRequest $request
     *
     * @return ListScheduledSQLsResponse
     */
    public function listScheduledSQLs($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScheduledSQLsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of shards in a Logstore.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListShardsResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListShardsResponse
     */
    public function listShardsWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListShards',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/shards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return ListShardsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of shards in a Logstore.
     *
     * @returns ListShardsResponse
     *
     * @param string $project
     * @param string $logstore
     *
     * @return ListShardsResponse
     */
    public function listShards($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShardsWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * Queries datasets in a project.
     *
     * @param request - ListStoreViewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStoreViewsResponse
     *
     * @param string                $project
     * @param ListStoreViewsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListStoreViewsResponse
     */
    public function listStoreViewsWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->offset) {
            @$query['offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->storeType) {
            @$query['storeType'] = $request->storeType;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStoreViews',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/storeviews',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListStoreViewsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries datasets in a project.
     *
     * @param request - ListStoreViewsRequest
     *
     * @returns ListStoreViewsResponse
     *
     * @param string                $project
     * @param ListStoreViewsRequest $request
     *
     * @return ListStoreViewsResponse
     */
    public function listStoreViews($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStoreViewsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Queries a list of tags for one or more resources. You can query tags for resources by resource type or filter resources by tag. Each tag is a key-value pair.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     * * For more information, see [Authorization rules](https://help.aliyun.com/document_detail/29049.html). The following types of resources are supported: project, Logstore, dashboard, machine group, and Logtail configuration.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ListTagResources`|The resource format varies based on the resource type.\\-`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logstore/${logstoreName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/dashboard/${dashboardName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/machinegroup/${machineGroupName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logtailconfig/${logtailConfigName}`|
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->resourceIdShrink) {
            @$query['resourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of tags for one or more resources. You can query tags for resources by resource type or filter resources by tag. Each tag is a key-value pair.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     * * For more information, see [Authorization rules](https://help.aliyun.com/document_detail/29049.html). The following types of resources are supported: project, Logstore, dashboard, machine group, and Logtail configuration.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:ListTagResources`|The resource format varies based on the resource type.\\-`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logstore/${logstoreName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/dashboard/${dashboardName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/machinegroup/${machineGroupName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logtailconfig/${logtailConfigName}`|
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 合并两个相邻的readwrite状态的Shards。在参数中指定一个shardID，服务端自动找相邻的下一个Shard进行合并。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MergeShardResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param string         $shard
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return MergeShardResponse
     */
    public function mergeShardWithOptions($project, $logstore, $shard, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'MergeShard',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/shards/' . $shard . '?action=merge',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return MergeShardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 合并两个相邻的readwrite状态的Shards。在参数中指定一个shardID，服务端自动找相邻的下一个Shard进行合并。
     *
     * @returns MergeShardResponse
     *
     * @param string $project
     * @param string $logstore
     * @param string $shard
     *
     * @return MergeShardResponse
     */
    public function mergeShard($project, $logstore, $shard)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->mergeShardWithOptions($project, $logstore, $shard, $headers, $runtime);
    }

    /**
     * Activates Simple Log Service. You must use the endpoint for Simple Log Service only in the China (Shanghai) or Singapore region.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenSlsServiceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return OpenSlsServiceResponse
     */
    public function openSlsServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'OpenSlsService',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/slsservice',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return OpenSlsServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Activates Simple Log Service. You must use the endpoint for Simple Log Service only in the China (Shanghai) or Singapore region.
     *
     * @returns OpenSlsServiceResponse
     *
     * @return OpenSlsServiceResponse
     */
    public function openSlsService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openSlsServiceWithOptions($headers, $runtime);
    }

    /**
     * Queries logs based on the specified cursors. You can call this operation to obtain raw logs. To query and analyze logs, you can call the GetLogsV2 operation.
     *
     * @remarks
     * *
     * **Warning** You cannot call this operation in OpenAPI Explorer. You can use Simple Log Service SDK to call this operation. For more information, see SLS SDK Reference.
     * *   You must specify a shard when you query the logs.
     * *   You can query only logs in the Protocol Buffers (protobuf) format. For more information, see [Data encoding](https://help.aliyun.com/document_detail/29055.html).
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - PullLogsRequest
     * @param headers - PullLogsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PullLogsResponse
     *
     * @param string          $project
     * @param string          $logStore
     * @param string          $shardId
     * @param PullLogsRequest $request
     * @param PullLogsHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return PullLogsResponse
     */
    public function pullLogsWithOptions($project, $logStore, $shardId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->count) {
            @$query['count'] = $request->count;
        }

        if (null !== $request->cursor) {
            @$query['cursor'] = $request->cursor;
        }

        if (null !== $request->endCursor) {
            @$query['end_cursor'] = $request->endCursor;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->acceptEncoding) {
            @$realHeaders['Accept-Encoding'] = '' . $headers->acceptEncoding;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PullLogs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logStore . '/shards/' . $shardId . '?type=log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return PullLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries logs based on the specified cursors. You can call this operation to obtain raw logs. To query and analyze logs, you can call the GetLogsV2 operation.
     *
     * @remarks
     * *
     * **Warning** You cannot call this operation in OpenAPI Explorer. You can use Simple Log Service SDK to call this operation. For more information, see SLS SDK Reference.
     * *   You must specify a shard when you query the logs.
     * *   You can query only logs in the Protocol Buffers (protobuf) format. For more information, see [Data encoding](https://help.aliyun.com/document_detail/29055.html).
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - PullLogsRequest
     *
     * @returns PullLogsResponse
     *
     * @param string          $project
     * @param string          $logStore
     * @param string          $shardId
     * @param PullLogsRequest $request
     *
     * @return PullLogsResponse
     */
    public function pullLogs($project, $logStore, $shardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PullLogsHeaders([]);

        return $this->pullLogsWithOptions($project, $logStore, $shardId, $request, $headers, $runtime);
    }

    /**
     * Adds data to a dataset for storage.
     *
     * @param request - PutAnnotationDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutAnnotationDataResponse
     *
     * @param string                   $datasetId
     * @param PutAnnotationDataRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return PutAnnotationDataResponse
     */
    public function putAnnotationDataWithOptions($datasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->annotationdataId) {
            @$query['annotationdataId'] = $request->annotationdataId;
        }

        $body = [];
        if (null !== $request->mlDataParam) {
            @$body['mlDataParam'] = $request->mlDataParam;
        }

        if (null !== $request->rawLog) {
            @$body['rawLog'] = $request->rawLog;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutAnnotationData',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationdataset/' . $datasetId . '/annotationdata',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PutAnnotationDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds data to a dataset for storage.
     *
     * @param request - PutAnnotationDataRequest
     *
     * @returns PutAnnotationDataResponse
     *
     * @param string                   $datasetId
     * @param PutAnnotationDataRequest $request
     *
     * @return PutAnnotationDataResponse
     */
    public function putAnnotationData($datasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putAnnotationDataWithOptions($datasetId, $request, $headers, $runtime);
    }

    /**
     * Creates or updates a consumption processor.
     *
     * @param request - PutConsumeProcessorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutConsumeProcessorResponse
     *
     * @param string                     $project
     * @param string                     $processorName
     * @param PutConsumeProcessorRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return PutConsumeProcessorResponse
     */
    public function putConsumeProcessorWithOptions($project, $processorName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutConsumeProcessor',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/consumeprocessors/' . $processorName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PutConsumeProcessorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or updates a consumption processor.
     *
     * @param request - PutConsumeProcessorRequest
     *
     * @returns PutConsumeProcessorResponse
     *
     * @param string                     $project
     * @param string                     $processorName
     * @param PutConsumeProcessorRequest $request
     *
     * @return PutConsumeProcessorResponse
     */
    public function putConsumeProcessor($project, $processorName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putConsumeProcessorWithOptions($project, $processorName, $request, $headers, $runtime);
    }

    /**
     * Creates or modifies an ingest processor.
     *
     * @param request - PutIngestProcessorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutIngestProcessorResponse
     *
     * @param string                    $project
     * @param string                    $processorName
     * @param PutIngestProcessorRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return PutIngestProcessorResponse
     */
    public function putIngestProcessorWithOptions($project, $processorName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutIngestProcessor',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ingestprocessors/' . $processorName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PutIngestProcessorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or modifies an ingest processor.
     *
     * @param request - PutIngestProcessorRequest
     *
     * @returns PutIngestProcessorResponse
     *
     * @param string                    $project
     * @param string                    $processorName
     * @param PutIngestProcessorRequest $request
     *
     * @return PutIngestProcessorResponse
     */
    public function putIngestProcessor($project, $processorName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putIngestProcessorWithOptions($project, $processorName, $request, $headers, $runtime);
    }

    /**
     * Writes logs to a Logstore.
     *
     * @remarks
     * *
     * **Warning** You cannot call this operation in OpenAPI Explorer. You can use Simple Log Service SDK to call this operation. For more information, see SLS SDK Reference.
     * *   When you call the PutLogs operation to write logs to Simple Log Service, Simple Log Servicechecks the format of the logs. If a log does not meet the format requirements, the request fails and no logs are written to Simple Log Service.
     * *   You can write logs only in the Protocol Buffers (Protobuf) format as log groups. For more information, see [Data encoding](https://help.aliyun.com/document_detail/29055.html).
     * *   You can write logs in one of the following modes:
     *     *   LoadBalance mode: In this mode, Log Service automatically writes logs to all writable shards in a Logstore. This mode delivers high availability for write operations and is suitable for data consumption scenarios in which you do not need to preserve the order of logs.
     *     *   KeyHash: In this mode, a key field is added in the URL parameter. Log Service writes logs to a shard based on the key field. The hash key is optional. If you do not configure the hash key, logs are written to shards in LoadBalance mode. For example, you can use the KeyHash mode to write data from a producer, such as an instance, to the shard whose hash value range includes the hash value of the producer name. This ensures that the data that is written to the shard is ordered and the data in the shard is consumed based on the order. This way, when a shard is split or when shards are merged, the data that is associated with the same hash key is stored only in one shard at a point in time. For more information, see [Shard](https://help.aliyun.com/document_detail/28976.html).
     * *   You can call the PutLogs operation to write up to 10 MB of raw logs at a time. We recommend that you keep the total size of the values for each log in a log group to or below 1 MB. Historical versions of SDKs may have different limits. We recommend that you upgrade your SDK to the latest version.
     * *   The references for Log Service SDK for Java and Log Service SDK for Python provide examples on how to call the PutLogs operation. For more information, see [Get started with Simple Log Service SDK for Java](https://help.aliyun.com/document_detail/279525.html) and [Get started with Simple Log Service SDK for Python](https://help.aliyun.com/document_detail/284638.html).
     *
     * @param request - PutLogsRequest
     * @param headers - PutLogsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutLogsResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param PutLogsRequest $request
     * @param PutLogsHeaders $headers
     * @param RuntimeOptions $runtime
     *
     * @return PutLogsResponse
     */
    public function putLogsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLogCompresstype) {
            @$realHeaders['x-log-compresstype'] = '' . $headers->xLogCompresstype;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PutLogs',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/shards/lb',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'protobuf',
            'bodyType' => 'none',
        ]);

        return PutLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Writes logs to a Logstore.
     *
     * @remarks
     * *
     * **Warning** You cannot call this operation in OpenAPI Explorer. You can use Simple Log Service SDK to call this operation. For more information, see SLS SDK Reference.
     * *   When you call the PutLogs operation to write logs to Simple Log Service, Simple Log Servicechecks the format of the logs. If a log does not meet the format requirements, the request fails and no logs are written to Simple Log Service.
     * *   You can write logs only in the Protocol Buffers (Protobuf) format as log groups. For more information, see [Data encoding](https://help.aliyun.com/document_detail/29055.html).
     * *   You can write logs in one of the following modes:
     *     *   LoadBalance mode: In this mode, Log Service automatically writes logs to all writable shards in a Logstore. This mode delivers high availability for write operations and is suitable for data consumption scenarios in which you do not need to preserve the order of logs.
     *     *   KeyHash: In this mode, a key field is added in the URL parameter. Log Service writes logs to a shard based on the key field. The hash key is optional. If you do not configure the hash key, logs are written to shards in LoadBalance mode. For example, you can use the KeyHash mode to write data from a producer, such as an instance, to the shard whose hash value range includes the hash value of the producer name. This ensures that the data that is written to the shard is ordered and the data in the shard is consumed based on the order. This way, when a shard is split or when shards are merged, the data that is associated with the same hash key is stored only in one shard at a point in time. For more information, see [Shard](https://help.aliyun.com/document_detail/28976.html).
     * *   You can call the PutLogs operation to write up to 10 MB of raw logs at a time. We recommend that you keep the total size of the values for each log in a log group to or below 1 MB. Historical versions of SDKs may have different limits. We recommend that you upgrade your SDK to the latest version.
     * *   The references for Log Service SDK for Java and Log Service SDK for Python provide examples on how to call the PutLogs operation. For more information, see [Get started with Simple Log Service SDK for Java](https://help.aliyun.com/document_detail/279525.html) and [Get started with Simple Log Service SDK for Python](https://help.aliyun.com/document_detail/284638.html).
     *
     * @param request - PutLogsRequest
     *
     * @returns PutLogsResponse
     *
     * @param string         $project
     * @param string         $logstore
     * @param PutLogsRequest $request
     *
     * @return PutLogsResponse
     */
    public function putLogs($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PutLogsHeaders([]);

        return $this->putLogsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Creates a project policy.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Alibaba Cloud Simple Log Service allows you to configure a project policy to authorize other users to access the specified Log Service resources.
     *     *   You must configure a project policy based on policy syntax. Before you configure a project policy, you must be familiar with the Action, Resource, and Condition parameters. For more information, see [RAM](https://help.aliyun.com/document_detail/128139.html).
     *     *   If you set the Principal element to an asterisk (\\*) and do not configure the Condition element when you configure a project policy, the policy applies to all users except for the project owner. If you set the Principal element to an asterisk (\\*) and configure the Condition element when you configure a project policy, the policy applies to all users including the project owner.
     *     *   You can configure multiple project policies for a project. The total size of the policies cannot exceed 16 KB.
     *
     * @param request - PutProjectPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutProjectPolicyResponse
     *
     * @param string                  $project
     * @param PutProjectPolicyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return PutProjectPolicyResponse
     */
    public function putProjectPolicyWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'PutProjectPolicy',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/policy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PutProjectPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a project policy.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Alibaba Cloud Simple Log Service allows you to configure a project policy to authorize other users to access the specified Log Service resources.
     *     *   You must configure a project policy based on policy syntax. Before you configure a project policy, you must be familiar with the Action, Resource, and Condition parameters. For more information, see [RAM](https://help.aliyun.com/document_detail/128139.html).
     *     *   If you set the Principal element to an asterisk (\\*) and do not configure the Condition element when you configure a project policy, the policy applies to all users except for the project owner. If you set the Principal element to an asterisk (\\*) and configure the Condition element when you configure a project policy, the policy applies to all users including the project owner.
     *     *   You can configure multiple project policies for a project. The total size of the policies cannot exceed 16 KB.
     *
     * @param request - PutProjectPolicyRequest
     *
     * @returns PutProjectPolicyResponse
     *
     * @param string                  $project
     * @param PutProjectPolicyRequest $request
     *
     * @return PutProjectPolicyResponse
     */
    public function putProjectPolicy($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProjectPolicyWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Enables or disables transfer acceleration.
     *
     * @param request - PutProjectTransferAccelerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutProjectTransferAccelerationResponse
     *
     * @param string                                $project
     * @param PutProjectTransferAccelerationRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return PutProjectTransferAccelerationResponse
     */
    public function putProjectTransferAccelerationWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutProjectTransferAcceleration',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/transferacceleration',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PutProjectTransferAccelerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables or disables transfer acceleration.
     *
     * @param request - PutProjectTransferAccelerationRequest
     *
     * @returns PutProjectTransferAccelerationResponse
     *
     * @param string                                $project
     * @param PutProjectTransferAccelerationRequest $request
     *
     * @return PutProjectTransferAccelerationResponse
     */
    public function putProjectTransferAcceleration($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProjectTransferAccelerationWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Sends multiple logs to Simple Log Service in one request.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * *   You can call this operation to collect logs from web pages or clients.
     * *   If you use web tracking to collect logs and you do not call this operation, you can send only one log to Simple Log Service in a request. For more information, see [Use web tracking to collect logs](https://help.aliyun.com/document_detail/31752.html).
     * *   If you want to collect a large amount of log data, you can call this operation to send multiple logs to Simple Log Service in one request.
     * *   Before you can call this operation to send logs to a Logstore, you must enable web tracking for the Logstore. For more information, see [Use web tracking to collect logs](https://help.aliyun.com/document_detail/31752.html).
     * *   You cannot call this operation to send the logs of multiple topics to Simple Log Service at a time.
     * *   If you call this operation, anonymous users from the Internet are granted the write permissions on the Logstore. This may generate dirty data because AccessKey pair-based authentication is not performed.
     *
     * @param request - PutWebtrackingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutWebtrackingResponse
     *
     * @param string                $project
     * @param string                $logstoreName
     * @param PutWebtrackingRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PutWebtrackingResponse
     */
    public function putWebtrackingWithOptions($project, $logstoreName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->logs) {
            @$body['__logs__'] = $request->logs;
        }

        if (null !== $request->source) {
            @$body['__source__'] = $request->source;
        }

        if (null !== $request->tags) {
            @$body['__tags__'] = $request->tags;
        }

        if (null !== $request->topic) {
            @$body['__topic__'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutWebtracking',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstoreName . '/track',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return PutWebtrackingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sends multiple logs to Simple Log Service in one request.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * *   You can call this operation to collect logs from web pages or clients.
     * *   If you use web tracking to collect logs and you do not call this operation, you can send only one log to Simple Log Service in a request. For more information, see [Use web tracking to collect logs](https://help.aliyun.com/document_detail/31752.html).
     * *   If you want to collect a large amount of log data, you can call this operation to send multiple logs to Simple Log Service in one request.
     * *   Before you can call this operation to send logs to a Logstore, you must enable web tracking for the Logstore. For more information, see [Use web tracking to collect logs](https://help.aliyun.com/document_detail/31752.html).
     * *   You cannot call this operation to send the logs of multiple topics to Simple Log Service at a time.
     * *   If you call this operation, anonymous users from the Internet are granted the write permissions on the Logstore. This may generate dirty data because AccessKey pair-based authentication is not performed.
     *
     * @param request - PutWebtrackingRequest
     *
     * @returns PutWebtrackingResponse
     *
     * @param string                $project
     * @param string                $logstoreName
     * @param PutWebtrackingRequest $request
     *
     * @return PutWebtrackingResponse
     */
    public function putWebtracking($project, $logstoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putWebtrackingWithOptions($project, $logstoreName, $request, $headers, $runtime);
    }

    /**
     * 刷新token.
     *
     * @param request - RefreshTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshTokenResponse
     *
     * @param RefreshTokenRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RefreshTokenResponse
     */
    public function refreshTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessTokenExpirationTime) {
            @$query['accessTokenExpirationTime'] = $request->accessTokenExpirationTime;
        }

        if (null !== $request->ticket) {
            @$query['ticket'] = $request->ticket;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshToken',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/token/refresh',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RefreshTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 刷新token.
     *
     * @param request - RefreshTokenRequest
     *
     * @returns RefreshTokenResponse
     *
     * @param RefreshTokenRequest $request
     *
     * @return RefreshTokenResponse
     */
    public function refreshToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes a Logtail configuration from a machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveConfigFromMachineGroupResponse
     *
     * @param string         $project
     * @param string         $machineGroup
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveConfigFromMachineGroupResponse
     */
    public function removeConfigFromMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RemoveConfigFromMachineGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups/' . $machineGroup . '/configs/' . $configName . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return RemoveConfigFromMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes a Logtail configuration from a machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @returns RemoveConfigFromMachineGroupResponse
     *
     * @param string $project
     * @param string $machineGroup
     * @param string $configName
     *
     * @return RemoveConfigFromMachineGroupResponse
     */
    public function removeConfigFromMachineGroup($project, $machineGroup, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeConfigFromMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime);
    }

    /**
     * Splits a shard in the readwrite state.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Each shard has an MD5 hash range, and each range is a left-closed, right-open interval. The interval is in the `[BeginKey,EndKey)` format. A shard can be in the readwrite or readonly state. You can split a shard and merge shards. For more information, see [Shard](https://help.aliyun.com/document_detail/28976.html).
     *
     * @param request - SplitShardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SplitShardResponse
     *
     * @param string            $project
     * @param string            $logstore
     * @param string            $shard
     * @param SplitShardRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SplitShardResponse
     */
    public function splitShardWithOptions($project, $logstore, $shard, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->key) {
            @$query['key'] = $request->key;
        }

        if (null !== $request->shardCount) {
            @$query['shardCount'] = $request->shardCount;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SplitShard',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/shards/' . $shard . '?action=split',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return SplitShardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Splits a shard in the readwrite state.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   Each shard has an MD5 hash range, and each range is a left-closed, right-open interval. The interval is in the `[BeginKey,EndKey)` format. A shard can be in the readwrite or readonly state. You can split a shard and merge shards. For more information, see [Shard](https://help.aliyun.com/document_detail/28976.html).
     *
     * @param request - SplitShardRequest
     *
     * @returns SplitShardResponse
     *
     * @param string            $project
     * @param string            $logstore
     * @param string            $shard
     * @param SplitShardRequest $request
     *
     * @return SplitShardResponse
     */
    public function splitShard($project, $logstore, $shard, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->splitShardWithOptions($project, $logstore, $shard, $request, $headers, $runtime);
    }

    /**
     * Starts a data transformation job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartETLResponse
     *
     * @param string         $project
     * @param string         $etlName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartETLResponse
     */
    public function startETLWithOptions($project, $etlName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartETL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/etls/' . $etlName . '?action=START',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StartETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts a data transformation job.
     *
     * @returns StartETLResponse
     *
     * @param string $project
     * @param string $etlName
     *
     * @return StartETLResponse
     */
    public function startETL($project, $etlName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startETLWithOptions($project, $etlName, $headers, $runtime);
    }

    /**
     * Starts a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartMaxComputeExportResponse
     *
     * @param string         $project
     * @param string         $mcExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartMaxComputeExportResponse
     */
    public function startMaxComputeExportWithOptions($project, $mcExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartMaxComputeExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/maxcomputeexports/' . $mcExportName . '?action=START',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StartMaxComputeExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     *
     * @returns StartMaxComputeExportResponse
     *
     * @param string $project
     * @param string $mcExportName
     *
     * @return StartMaxComputeExportResponse
     */
    public function startMaxComputeExport($project, $mcExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startMaxComputeExportWithOptions($project, $mcExportName, $headers, $runtime);
    }

    /**
     * 启动OSS投递任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartOSSExportResponse
     *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartOSSExportResponse
     */
    public function startOSSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartOSSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossexports/' . $ossExportName . '?action=START',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StartOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启动OSS投递任务
     *
     * @returns StartOSSExportResponse
     *
     * @param string $project
     * @param string $ossExportName
     *
     * @return StartOSSExportResponse
     */
    public function startOSSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startOSSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * 启动OSSHDFS投递任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartOSSHDFSExportResponse
     *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartOSSHDFSExportResponse
     */
    public function startOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartOSSHDFSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/osshdfsexports/' . $ossExportName . '?action=START',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StartOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启动OSSHDFS投递任务
     *
     * @returns StartOSSHDFSExportResponse
     *
     * @param string $project
     * @param string $ossExportName
     *
     * @return StartOSSHDFSExportResponse
     */
    public function startOSSHDFSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * Starts an Object Storage Service (OSS) data import job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartOSSIngestionResponse
     *
     * @param string         $project
     * @param string         $ossIngestionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartOSSIngestionResponse
     */
    public function startOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartOSSIngestion',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossingestions/' . $ossIngestionName . '?action=START',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StartOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts an Object Storage Service (OSS) data import job.
     *
     * @returns StartOSSIngestionResponse
     *
     * @param string $project
     * @param string $ossIngestionName
     *
     * @return StartOSSIngestionResponse
     */
    public function startOSSIngestion($project, $ossIngestionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime);
    }

    /**
     * Stops a data transformation job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopETLResponse
     *
     * @param string         $project
     * @param string         $etlName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopETLResponse
     */
    public function stopETLWithOptions($project, $etlName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopETL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/etls/' . $etlName . '?action=STOP',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StopETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops a data transformation job.
     *
     * @returns StopETLResponse
     *
     * @param string $project
     * @param string $etlName
     *
     * @return StopETLResponse
     */
    public function stopETL($project, $etlName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopETLWithOptions($project, $etlName, $headers, $runtime);
    }

    /**
     * Stops a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopMaxComputeExportResponse
     *
     * @param string         $project
     * @param string         $mcExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopMaxComputeExportResponse
     */
    public function stopMaxComputeExportWithOptions($project, $mcExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopMaxComputeExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/maxcomputeexports/' . $mcExportName . '?action=STOP',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StopMaxComputeExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @returns StopMaxComputeExportResponse
     *
     * @param string $project
     * @param string $mcExportName
     *
     * @return StopMaxComputeExportResponse
     */
    public function stopMaxComputeExport($project, $mcExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopMaxComputeExportWithOptions($project, $mcExportName, $headers, $runtime);
    }

    /**
     * 停止OSS投递任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopOSSExportResponse
     *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopOSSExportResponse
     */
    public function stopOSSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopOSSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossexports/' . $ossExportName . '?action=STOP',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StopOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 停止OSS投递任务
     *
     * @returns StopOSSExportResponse
     *
     * @param string $project
     * @param string $ossExportName
     *
     * @return StopOSSExportResponse
     */
    public function stopOSSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopOSSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * 停止OSSHDFS投递任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopOSSHDFSExportResponse
     *
     * @param string         $project
     * @param string         $ossExportName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopOSSHDFSExportResponse
     */
    public function stopOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopOSSHDFSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/osshdfsexports/' . $ossExportName . '?action=STOP',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StopOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 停止OSSHDFS投递任务
     *
     * @returns StopOSSHDFSExportResponse
     *
     * @param string $project
     * @param string $ossExportName
     *
     * @return StopOSSHDFSExportResponse
     */
    public function stopOSSHDFSExport($project, $ossExportName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopOSSHDFSExportWithOptions($project, $ossExportName, $headers, $runtime);
    }

    /**
     * Stops an Object Storage Service (OSS) data import job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopOSSIngestionResponse
     *
     * @param string         $project
     * @param string         $ossIngestionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopOSSIngestionResponse
     */
    public function stopOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime)
    {
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopOSSIngestion',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossingestions/' . $ossIngestionName . '?action=STOP',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return StopOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops an Object Storage Service (OSS) data import job.
     *
     * @returns StopOSSIngestionResponse
     *
     * @param string $project
     * @param string $ossIngestionName
     *
     * @return StopOSSIngestionResponse
     */
    public function stopOSSIngestion($project, $ossIngestionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopOSSIngestionWithOptions($project, $ossIngestionName, $headers, $runtime);
    }

    /**
     * Creates and adds tags to a resource. You can add tags only to projects.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     * * For more information, see [Authorization rules](https://help.aliyun.com/document_detail/29049.html). The following types of resources are supported: project, Logstore, dashboard, machine group, and Logtail configuration.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:TagResources`|The resource format varies based on the resource type.\\-`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logstore/${logstoreName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/dashboard/${dashboardName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/machinegroup/${machineGroupName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logtailconfig/${logtailConfigName}`|
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/tag',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates and adds tags to a resource. You can add tags only to projects.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     * * For more information, see [Authorization rules](https://help.aliyun.com/document_detail/29049.html). The following types of resources are supported: project, Logstore, dashboard, machine group, and Logtail configuration.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:TagResources`|The resource format varies based on the resource type.\\-`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logstore/${logstoreName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/dashboard/${dashboardName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/machinegroup/${machineGroupName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logtailconfig/${logtailConfigName}`|
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Detaches one or more tags from a resource. You can detach tags only from Simple Log Service projects. You can detach multiple or all tags from a Simple Log Service project at a time.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) For more information, see [Authorization rules](https://help.aliyun.com/document_detail/29049.html). The following types of resources are supported: project, Logstore, dashboard, machine group, and Logtail configuration.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:UntagResources`|The resource format varies based on the resource type.\\-`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logstore/${logstoreName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/dashboard/${dashboardName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/machinegroup/${machineGroupName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logtailconfig/${logtailConfigName}`|
     *
     * @param request - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->all) {
            @$body['all'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/untag',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Detaches one or more tags from a resource. You can detach tags only from Simple Log Service projects. You can detach multiple or all tags from a Simple Log Service project at a time.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) For more information, see [Authorization rules](https://help.aliyun.com/document_detail/29049.html). The following types of resources are supported: project, Logstore, dashboard, machine group, and Logtail configuration.
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:UntagResources`|The resource format varies based on the resource type.\\-`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logstore/${logstoreName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/dashboard/${dashboardName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/machinegroup/${machineGroupName}`\\-`acs:log:${regionName}:${accountId}:project/${projectName}/logtailconfig/${logtailConfigName}`|
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * UpdateAgentInstanceConfig.
     *
     * @param tmpReq - UpdateAgentInstanceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentInstanceConfigResponse
     *
     * @param string                           $configType
     * @param UpdateAgentInstanceConfigRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateAgentInstanceConfigResponse
     */
    public function updateAgentInstanceConfigWithOptions($configType, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAgentInstanceConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attributes) {
            $request->attributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'attributes', 'json');
        }

        $query = [];
        if (null !== $request->attributesShrink) {
            @$query['attributes'] = $request->attributesShrink;
        }

        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->grayConfigs) {
            @$body['grayConfigs'] = $request->grayConfigs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentInstanceConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/agentinstanceconfigs/' . $configType . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateAgentInstanceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * UpdateAgentInstanceConfig.
     *
     * @param request - UpdateAgentInstanceConfigRequest
     *
     * @returns UpdateAgentInstanceConfigResponse
     *
     * @param string                           $configType
     * @param UpdateAgentInstanceConfigRequest $request
     *
     * @return UpdateAgentInstanceConfigResponse
     */
    public function updateAgentInstanceConfig($configType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentInstanceConfigWithOptions($configType, $request, $headers, $runtime);
    }

    /**
     * Updates an alert rule.
     *
     * @param request - UpdateAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAlertResponse
     *
     * @param string             $project
     * @param string             $alertName
     * @param UpdateAlertRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAlertResponse
     */
    public function updateAlertWithOptions($project, $alertName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->schedule) {
            @$body['schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlert',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/alerts/' . $alertName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates an alert rule.
     *
     * @param request - UpdateAlertRequest
     *
     * @returns UpdateAlertResponse
     *
     * @param string             $project
     * @param string             $alertName
     * @param UpdateAlertRequest $request
     *
     * @return UpdateAlertResponse
     */
    public function updateAlert($project, $alertName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertWithOptions($project, $alertName, $request, $headers, $runtime);
    }

    /**
     * Updates a dataset.
     *
     * @param request - UpdateAnnotationDataSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAnnotationDataSetResponse
     *
     * @param string                         $datasetId
     * @param UpdateAnnotationDataSetRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAnnotationDataSetResponse
     */
    public function updateAnnotationDataSetWithOptions($datasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateAnnotationDataSet',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationdataset/' . $datasetId . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateAnnotationDataSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a dataset.
     *
     * @param request - UpdateAnnotationDataSetRequest
     *
     * @returns UpdateAnnotationDataSetResponse
     *
     * @param string                         $datasetId
     * @param UpdateAnnotationDataSetRequest $request
     *
     * @return UpdateAnnotationDataSetResponse
     */
    public function updateAnnotationDataSet($datasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAnnotationDataSetWithOptions($datasetId, $request, $headers, $runtime);
    }

    /**
     * Updates a tag table.
     *
     * @remarks
     * You can update only the names of the tags in a tag set.
     *
     * @param request - UpdateAnnotationLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAnnotationLabelResponse
     *
     * @param UpdateAnnotationLabelRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAnnotationLabelResponse
     */
    public function updateAnnotationLabelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateAnnotationLabel',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ml/annotationlabel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateAnnotationLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a tag table.
     *
     * @remarks
     * You can update only the names of the tags in a tag set.
     *
     * @param request - UpdateAnnotationLabelRequest
     *
     * @returns UpdateAnnotationLabelResponse
     *
     * @param UpdateAnnotationLabelRequest $request
     *
     * @return UpdateAnnotationLabelResponse
     */
    public function updateAnnotationLabel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAnnotationLabelWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies a Logtail configuration.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   After you update a Logtail configuration that is applied to a machine group, the new configuration immediately takes effect.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The Logtail configuration is planned out. For more information, see [Logtail configurations](https://help.aliyun.com/document_detail/29058.html).
     *
     * @param request - UpdateConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConfigResponse
     *
     * @param string              $project
     * @param string              $configName
     * @param UpdateConfigRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateConfigResponse
     */
    public function updateConfigWithOptions($project, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/configs/' . $configName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a Logtail configuration.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   After you update a Logtail configuration that is applied to a machine group, the new configuration immediately takes effect.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a RAM user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   The Logtail configuration is planned out. For more information, see [Logtail configurations](https://help.aliyun.com/document_detail/29058.html).
     *
     * @param request - UpdateConfigRequest
     *
     * @returns UpdateConfigResponse
     *
     * @param string              $project
     * @param string              $configName
     * @param UpdateConfigRequest $request
     *
     * @return UpdateConfigResponse
     */
    public function updateConfig($project, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConfigWithOptions($project, $configName, $request, $headers, $runtime);
    }

    /**
     * Updates the attributes of a consumer group.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:UpdateConsumerGroup`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`|
     *
     * @param request - UpdateConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerGroupResponse
     *
     * @param string                     $project
     * @param string                     $logstore
     * @param string                     $consumerGroup
     * @param UpdateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroupWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->timeout) {
            @$body['timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumerGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the attributes of a consumer group.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:UpdateConsumerGroup`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/logstore/{#logstoreName}/consumergroup/{#ConsumerGroup}`|
     *
     * @param request - UpdateConsumerGroupRequest
     *
     * @returns UpdateConsumerGroupResponse
     *
     * @param string                     $project
     * @param string                     $logstore
     * @param string                     $consumerGroup
     * @param UpdateConsumerGroupRequest $request
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroup($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerGroupWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * Updates a dashboard.
     *
     * @remarks
     * ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateDashboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDashboardResponse
     *
     * @param string                 $project
     * @param string                 $dashboardName
     * @param UpdateDashboardRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateDashboardResponse
     */
    public function updateDashboardWithOptions($project, $dashboardName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->attribute) {
            @$body['attribute'] = $request->attribute;
        }

        if (null !== $request->charts) {
            @$body['charts'] = $request->charts;
        }

        if (null !== $request->dashboardName) {
            @$body['dashboardName'] = $request->dashboardName;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDashboard',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dashboards/' . $dashboardName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateDashboardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a dashboard.
     *
     * @remarks
     * ### [](#)Usage notes
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateDashboardRequest
     *
     * @returns UpdateDashboardResponse
     *
     * @param string                 $project
     * @param string                 $dashboardName
     * @param UpdateDashboardRequest $request
     *
     * @return UpdateDashboardResponse
     */
    public function updateDashboard($project, $dashboardName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDashboardWithOptions($project, $dashboardName, $request, $headers, $runtime);
    }

    /**
     * Updates a data transformation job.
     *
     * @param request - UpdateETLRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateETLResponse
     *
     * @param string           $project
     * @param string           $etlName
     * @param UpdateETLRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateETLResponse
     */
    public function updateETLWithOptions($project, $etlName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateETL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/etls/' . $etlName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateETLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a data transformation job.
     *
     * @param request - UpdateETLRequest
     *
     * @returns UpdateETLResponse
     *
     * @param string           $project
     * @param string           $etlName
     * @param UpdateETLRequest $request
     *
     * @return UpdateETLResponse
     */
    public function updateETL($project, $etlName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateETLWithOptions($project, $etlName, $request, $headers, $runtime);
    }

    /**
     * Updates the indexes of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIndexResponse
     *
     * @param string             $project
     * @param string             $logstore
     * @param UpdateIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateIndexResponse
     */
    public function updateIndexWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateIndex',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/index',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the indexes of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateIndexRequest
     *
     * @returns UpdateIndexResponse
     *
     * @param string             $project
     * @param string             $logstore
     * @param UpdateIndexRequest $request
     *
     * @return UpdateIndexResponse
     */
    public function updateIndex($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIndexWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Updates the attributes of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     * *   You can call the UpdateLogStore operation to change only the time-to-live (TTL) attribute.
     *
     * @param request - UpdateLogStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLogStoreResponse
     *
     * @param string                $project
     * @param string                $logstore
     * @param UpdateLogStoreRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateLogStoreResponse
     */
    public function updateLogStoreWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->appendMeta) {
            @$body['appendMeta'] = $request->appendMeta;
        }

        if (null !== $request->autoSplit) {
            @$body['autoSplit'] = $request->autoSplit;
        }

        if (null !== $request->enableTracking) {
            @$body['enable_tracking'] = $request->enableTracking;
        }

        if (null !== $request->encryptConf) {
            @$body['encrypt_conf'] = $request->encryptConf;
        }

        if (null !== $request->hotTtl) {
            @$body['hot_ttl'] = $request->hotTtl;
        }

        if (null !== $request->infrequentAccessTTL) {
            @$body['infrequentAccessTTL'] = $request->infrequentAccessTTL;
        }

        if (null !== $request->logstoreName) {
            @$body['logstoreName'] = $request->logstoreName;
        }

        if (null !== $request->maxSplitShard) {
            @$body['maxSplitShard'] = $request->maxSplitShard;
        }

        if (null !== $request->mode) {
            @$body['mode'] = $request->mode;
        }

        if (null !== $request->shardCount) {
            @$body['shardCount'] = $request->shardCount;
        }

        if (null !== $request->telemetryType) {
            @$body['telemetryType'] = $request->telemetryType;
        }

        if (null !== $request->ttl) {
            @$body['ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLogStore',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the attributes of a Logstore.
     *
     * @remarks
     * ### Usage notes
     * *   Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     * *   You can call the UpdateLogStore operation to change only the time-to-live (TTL) attribute.
     *
     * @param request - UpdateLogStoreRequest
     *
     * @returns UpdateLogStoreResponse
     *
     * @param string                $project
     * @param string                $logstore
     * @param UpdateLogStoreRequest $request
     *
     * @return UpdateLogStoreResponse
     */
    public function updateLogStore($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogStoreWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Updates the encryption configuration of a Logstore. You can create encryption configurations for the Logstore and enable or disable the encryption feature.
     *
     * @remarks
     * ## [](#)Limits
     * If you specify a data encryption method when you configure data encryption settings, you cannot switch to the other method after the configuration. In addition, you cannot change the encryption algorithm or the encryption type. You can only enable or disable the encryption feature by using the enable parameter. If you specify the encryption method by using the service key of Simple Log Service when you configure data encryption settings, you cannot switch to the encryption method by using Bring Your Own Key (BYOK) keys after the configuration.
     * ## [](#)Create encryption configurations
     * ### [](#)Encryption by using service keys
     * Simple Log Service is fully responsible for data encryption and key management. No additional operations are required. When you create encryption configurations for the Logstore, you must specify the enable and encryptType parameters.
     * ### [](#byok)Encryption by using BYOK keys
     * You must create a customer master key (CMK) in Key Management Service (KMS). Then, Simple Log Service encrypts logs by using the CMK. When you create encryption configurations for the Logstore, you must specify the enable, encryptType, and userCmkInfo parameters.
     * ## [](#)Enable or disable the encryption feature
     * After you create encryption configurations for the Logstore, you cannot modify the encryptType or userCmkInfo parameters. However, you can enable and disable the encryption feature by using the enable parameter.
     *
     * @param request - UpdateLogStoreEncryptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLogStoreEncryptionResponse
     *
     * @param string                          $project
     * @param string                          $logstore
     * @param UpdateLogStoreEncryptionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLogStoreEncryptionResponse
     */
    public function updateLogStoreEncryptionWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->encryptType) {
            @$body['encryptType'] = $request->encryptType;
        }

        if (null !== $request->userCmkInfo) {
            @$body['userCmkInfo'] = $request->userCmkInfo;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLogStoreEncryption',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/encryption',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateLogStoreEncryptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the encryption configuration of a Logstore. You can create encryption configurations for the Logstore and enable or disable the encryption feature.
     *
     * @remarks
     * ## [](#)Limits
     * If you specify a data encryption method when you configure data encryption settings, you cannot switch to the other method after the configuration. In addition, you cannot change the encryption algorithm or the encryption type. You can only enable or disable the encryption feature by using the enable parameter. If you specify the encryption method by using the service key of Simple Log Service when you configure data encryption settings, you cannot switch to the encryption method by using Bring Your Own Key (BYOK) keys after the configuration.
     * ## [](#)Create encryption configurations
     * ### [](#)Encryption by using service keys
     * Simple Log Service is fully responsible for data encryption and key management. No additional operations are required. When you create encryption configurations for the Logstore, you must specify the enable and encryptType parameters.
     * ### [](#byok)Encryption by using BYOK keys
     * You must create a customer master key (CMK) in Key Management Service (KMS). Then, Simple Log Service encrypts logs by using the CMK. When you create encryption configurations for the Logstore, you must specify the enable, encryptType, and userCmkInfo parameters.
     * ## [](#)Enable or disable the encryption feature
     * After you create encryption configurations for the Logstore, you cannot modify the encryptType or userCmkInfo parameters. However, you can enable and disable the encryption feature by using the enable parameter.
     *
     * @param request - UpdateLogStoreEncryptionRequest
     *
     * @returns UpdateLogStoreEncryptionResponse
     *
     * @param string                          $project
     * @param string                          $logstore
     * @param UpdateLogStoreEncryptionRequest $request
     *
     * @return UpdateLogStoreEncryptionResponse
     */
    public function updateLogStoreEncryption($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogStoreEncryptionWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Changes the billing mode of a Logstore.
     *
     * @param request - UpdateLogStoreMeteringModeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLogStoreMeteringModeResponse
     *
     * @param string                            $project
     * @param string                            $logstore
     * @param UpdateLogStoreMeteringModeRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateLogStoreMeteringModeResponse
     */
    public function updateLogStoreMeteringModeWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->meteringMode) {
            @$body['meteringMode'] = $request->meteringMode;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLogStoreMeteringMode',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/meteringmode',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateLogStoreMeteringModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Changes the billing mode of a Logstore.
     *
     * @param request - UpdateLogStoreMeteringModeRequest
     *
     * @returns UpdateLogStoreMeteringModeResponse
     *
     * @param string                            $project
     * @param string                            $logstore
     * @param UpdateLogStoreMeteringModeRequest $request
     *
     * @return UpdateLogStoreMeteringModeResponse
     */
    public function updateLogStoreMeteringMode($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogStoreMeteringModeWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Modifies the ingest processor that is associated with a Logstore.
     *
     * @param request - UpdateLogStoreProcessorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLogStoreProcessorResponse
     *
     * @param string                         $project
     * @param string                         $logstore
     * @param UpdateLogStoreProcessorRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateLogStoreProcessorResponse
     */
    public function updateLogStoreProcessorWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->processorName) {
            @$body['processorName'] = $request->processorName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLogStoreProcessor',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logstores/' . $logstore . '/processor',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateLogStoreProcessorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the ingest processor that is associated with a Logstore.
     *
     * @param request - UpdateLogStoreProcessorRequest
     *
     * @returns UpdateLogStoreProcessorResponse
     *
     * @param string                         $project
     * @param string                         $logstore
     * @param UpdateLogStoreProcessorRequest $request
     *
     * @return UpdateLogStoreProcessorResponse
     */
    public function updateLogStoreProcessor($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogStoreProcessorWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * Updates the service log configurations of a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateLoggingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoggingResponse
     *
     * @param string               $project
     * @param UpdateLoggingRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateLoggingResponse
     */
    public function updateLoggingWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->loggingDetails) {
            @$body['loggingDetails'] = $request->loggingDetails;
        }

        if (null !== $request->loggingProject) {
            @$body['loggingProject'] = $request->loggingProject;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLogging',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/logging',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the service log configurations of a project.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateLoggingRequest
     *
     * @returns UpdateLoggingResponse
     *
     * @param string               $project
     * @param UpdateLoggingRequest $request
     *
     * @return UpdateLoggingResponse
     */
    public function updateLogging($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLoggingWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Updates a Logtail pipeline configuration.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @param request - UpdateLogtailPipelineConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLogtailPipelineConfigResponse
     *
     * @param string                             $project
     * @param string                             $configName
     * @param UpdateLogtailPipelineConfigRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLogtailPipelineConfigResponse
     */
    public function updateLogtailPipelineConfigWithOptions($project, $configName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->aggregators) {
            @$body['aggregators'] = $request->aggregators;
        }

        if (null !== $request->configName) {
            @$body['configName'] = $request->configName;
        }

        if (null !== $request->flushers) {
            @$body['flushers'] = $request->flushers;
        }

        if (null !== $request->global) {
            @$body['global'] = $request->global;
        }

        if (null !== $request->inputs) {
            @$body['inputs'] = $request->inputs;
        }

        if (null !== $request->logSample) {
            @$body['logSample'] = $request->logSample;
        }

        if (null !== $request->processors) {
            @$body['processors'] = $request->processors;
        }

        if (null !== $request->task) {
            @$body['task'] = $request->task;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLogtailPipelineConfig',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/pipelineconfigs/' . $configName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateLogtailPipelineConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a Logtail pipeline configuration.
     *
     * @remarks
     * The UK (London) region is supported. Supported regions are constantly updated.
     *
     * @param request - UpdateLogtailPipelineConfigRequest
     *
     * @returns UpdateLogtailPipelineConfigResponse
     *
     * @param string                             $project
     * @param string                             $configName
     * @param UpdateLogtailPipelineConfigRequest $request
     *
     * @return UpdateLogtailPipelineConfigResponse
     */
    public function updateLogtailPipelineConfig($project, $configName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogtailPipelineConfigWithOptions($project, $configName, $request, $headers, $runtime);
    }

    /**
     * Modifies the configuration of a machine group.
     *
     * @remarks
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateMachineGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMachineGroupResponse
     *
     * @param string                    $project
     * @param string                    $groupName
     * @param UpdateMachineGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateMachineGroupResponse
     */
    public function updateMachineGroupWithOptions($project, $groupName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->groupAttribute) {
            @$body['groupAttribute'] = $request->groupAttribute;
        }

        if (null !== $request->groupName) {
            @$body['groupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$body['groupType'] = $request->groupType;
        }

        if (null !== $request->machineIdentifyType) {
            @$body['machineIdentifyType'] = $request->machineIdentifyType;
        }

        if (null !== $request->machineList) {
            @$body['machineList'] = $request->machineList;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMachineGroup',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups/' . $groupName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a machine group.
     *
     * @remarks
     * Host consists of a project name and a Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateMachineGroupRequest
     *
     * @returns UpdateMachineGroupResponse
     *
     * @param string                    $project
     * @param string                    $groupName
     * @param UpdateMachineGroupRequest $request
     *
     * @return UpdateMachineGroupResponse
     */
    public function updateMachineGroup($project, $groupName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMachineGroupWithOptions($project, $groupName, $request, $headers, $runtime);
    }

    /**
     * Modifies the machines in a machine group. You can add machine to or remove machines from the machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateMachineGroupMachineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMachineGroupMachineResponse
     *
     * @param string                           $project
     * @param string                           $machineGroup
     * @param UpdateMachineGroupMachineRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateMachineGroupMachineResponse
     */
    public function updateMachineGroupMachineWithOptions($project, $machineGroup, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $query = [];
        if (null !== $request->action) {
            @$query['action'] = $request->action;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateMachineGroupMachine',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/machinegroups/' . $machineGroup . '/machines',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateMachineGroupMachineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the machines in a machine group. You can add machine to or remove machines from the machine group.
     *
     * @remarks
     * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     *
     * @param request - UpdateMachineGroupMachineRequest
     *
     * @returns UpdateMachineGroupMachineResponse
     *
     * @param string                           $project
     * @param string                           $machineGroup
     * @param UpdateMachineGroupMachineRequest $request
     *
     * @return UpdateMachineGroupMachineResponse
     */
    public function updateMachineGroupMachine($project, $machineGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMachineGroupMachineWithOptions($project, $machineGroup, $request, $headers, $runtime);
    }

    /**
     * Updates a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @param request - UpdateMaxComputeExportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMaxComputeExportResponse
     *
     * @param string                        $project
     * @param string                        $mcExportName
     * @param UpdateMaxComputeExportRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateMaxComputeExportResponse
     */
    public function updateMaxComputeExportWithOptions($project, $mcExportName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMaxComputeExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/maxcomputeexports/' . $mcExportName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateMaxComputeExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a MaxCompute data shipping job.
     *
     * @remarks
     *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html)
     *
     * @param request - UpdateMaxComputeExportRequest
     *
     * @returns UpdateMaxComputeExportResponse
     *
     * @param string                        $project
     * @param string                        $mcExportName
     * @param UpdateMaxComputeExportRequest $request
     *
     * @return UpdateMaxComputeExportResponse
     */
    public function updateMaxComputeExport($project, $mcExportName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMaxComputeExportWithOptions($project, $mcExportName, $request, $headers, $runtime);
    }

    /**
     * Updates the settings of an existing Metricstore. Metricstores are used to store metric data.
     *
     * @remarks
     * Metricstores are used to store metric data. For more information, see [Metric data](https://help.aliyun.com/document_detail/174965.html).
     * *   You must specify an existing Metricstore.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 200 Logstores or Metricstores in a project.
     * *   Metric data is automatically deleted when the retention period of the metric data ends.
     *
     * @param request - UpdateMetricStoreRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMetricStoreResponse
     *
     * @param string                   $project
     * @param string                   $name
     * @param UpdateMetricStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMetricStoreResponse
     */
    public function updateMetricStoreWithOptions($project, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->autoSplit) {
            @$body['autoSplit'] = $request->autoSplit;
        }

        if (null !== $request->hotTtl) {
            @$body['hot_ttl'] = $request->hotTtl;
        }

        if (null !== $request->infrequentAccessTTL) {
            @$body['infrequentAccessTTL'] = $request->infrequentAccessTTL;
        }

        if (null !== $request->maxSplitShard) {
            @$body['maxSplitShard'] = $request->maxSplitShard;
        }

        if (null !== $request->mode) {
            @$body['mode'] = $request->mode;
        }

        if (null !== $request->ttl) {
            @$body['ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMetricStore',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/metricstores/' . $name . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateMetricStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the settings of an existing Metricstore. Metricstores are used to store metric data.
     *
     * @remarks
     * Metricstores are used to store metric data. For more information, see [Metric data](https://help.aliyun.com/document_detail/174965.html).
     * *   You must specify an existing Metricstore.
     * *   Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * *   An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O\\&M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * *   The information that is required to query metric data is obtained. The information includes the name of the project to which the metric data belong and the region of the project. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html).
     * *   You can create up to 200 Logstores or Metricstores in a project.
     * *   Metric data is automatically deleted when the retention period of the metric data ends.
     *
     * @param request - UpdateMetricStoreRequest
     *
     * @returns UpdateMetricStoreResponse
     *
     * @param string                   $project
     * @param string                   $name
     * @param UpdateMetricStoreRequest $request
     *
     * @return UpdateMetricStoreResponse
     */
    public function updateMetricStore($project, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMetricStoreWithOptions($project, $name, $request, $headers, $runtime);
    }

    /**
     * 更新 MetricStore 计量模式.
     *
     * @param request - UpdateMetricStoreMeteringModeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMetricStoreMeteringModeResponse
     *
     * @param string                               $project
     * @param string                               $metricStore
     * @param UpdateMetricStoreMeteringModeRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateMetricStoreMeteringModeResponse
     */
    public function updateMetricStoreMeteringModeWithOptions($project, $metricStore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->meteringMode) {
            @$body['meteringMode'] = $request->meteringMode;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMetricStoreMeteringMode',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/metricstores/' . $metricStore . '/meteringmode',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateMetricStoreMeteringModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新 MetricStore 计量模式.
     *
     * @param request - UpdateMetricStoreMeteringModeRequest
     *
     * @returns UpdateMetricStoreMeteringModeResponse
     *
     * @param string                               $project
     * @param string                               $metricStore
     * @param UpdateMetricStoreMeteringModeRequest $request
     *
     * @return UpdateMetricStoreMeteringModeResponse
     */
    public function updateMetricStoreMeteringMode($project, $metricStore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMetricStoreMeteringModeWithOptions($project, $metricStore, $request, $headers, $runtime);
    }

    /**
     * Updates the ingest processor that is associated with a Metricstore.
     *
     * @param request - UpdateMetricStoreProcessorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMetricStoreProcessorResponse
     *
     * @param string                            $project
     * @param string                            $metricstore
     * @param UpdateMetricStoreProcessorRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateMetricStoreProcessorResponse
     */
    public function updateMetricStoreProcessorWithOptions($project, $metricstore, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->processorName) {
            @$body['processorName'] = $request->processorName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMetricStoreProcessor',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/metricstores/' . $metricstore . '/processor',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateMetricStoreProcessorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the ingest processor that is associated with a Metricstore.
     *
     * @param request - UpdateMetricStoreProcessorRequest
     *
     * @returns UpdateMetricStoreProcessorResponse
     *
     * @param string                            $project
     * @param string                            $metricstore
     * @param UpdateMetricStoreProcessorRequest $request
     *
     * @return UpdateMetricStoreProcessorResponse
     */
    public function updateMetricStoreProcessor($project, $metricstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMetricStoreProcessorWithOptions($project, $metricstore, $request, $headers, $runtime);
    }

    /**
     * 更新OSS投递任务
     *
     * @param request - UpdateOSSExportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOSSExportResponse
     *
     * @param string                 $project
     * @param string                 $ossExportName
     * @param UpdateOSSExportRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateOSSExportResponse
     */
    public function updateOSSExportWithOptions($project, $ossExportName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateOSSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossexports/' . $ossExportName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateOSSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新OSS投递任务
     *
     * @param request - UpdateOSSExportRequest
     *
     * @returns UpdateOSSExportResponse
     *
     * @param string                 $project
     * @param string                 $ossExportName
     * @param UpdateOSSExportRequest $request
     *
     * @return UpdateOSSExportResponse
     */
    public function updateOSSExport($project, $ossExportName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOSSExportWithOptions($project, $ossExportName, $request, $headers, $runtime);
    }

    /**
     * 更新OSSHDFS投递任务
     *
     * @param request - UpdateOSSHDFSExportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOSSHDFSExportResponse
     *
     * @param string                     $project
     * @param string                     $ossExportName
     * @param UpdateOSSHDFSExportRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateOSSHDFSExportResponse
     */
    public function updateOSSHDFSExportWithOptions($project, $ossExportName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateOSSHDFSExport',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/osshdfsexports/' . $ossExportName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateOSSHDFSExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新OSSHDFS投递任务
     *
     * @param request - UpdateOSSHDFSExportRequest
     *
     * @returns UpdateOSSHDFSExportResponse
     *
     * @param string                     $project
     * @param string                     $ossExportName
     * @param UpdateOSSHDFSExportRequest $request
     *
     * @return UpdateOSSHDFSExportResponse
     */
    public function updateOSSHDFSExport($project, $ossExportName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOSSHDFSExportWithOptions($project, $ossExportName, $request, $headers, $runtime);
    }

    /**
     * Updates an Object Storage Service (OSS) data import job.
     *
     * @param request - UpdateOSSIngestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOSSIngestionResponse
     *
     * @param string                    $project
     * @param string                    $ossIngestionName
     * @param UpdateOSSIngestionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateOSSIngestionResponse
     */
    public function updateOSSIngestionWithOptions($project, $ossIngestionName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->schedule) {
            @$body['schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateOSSIngestion',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/ossingestions/' . $ossIngestionName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateOSSIngestionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates an Object Storage Service (OSS) data import job.
     *
     * @param request - UpdateOSSIngestionRequest
     *
     * @returns UpdateOSSIngestionResponse
     *
     * @param string                    $project
     * @param string                    $ossIngestionName
     * @param UpdateOSSIngestionRequest $request
     *
     * @return UpdateOSSIngestionResponse
     */
    public function updateOSSIngestion($project, $ossIngestionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOSSIngestionWithOptions($project, $ossIngestionName, $request, $headers, $runtime);
    }

    /**
     * Updates a project.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:UpdateProject`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`|
     *
     * @param request - UpdateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $project
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->recycleBinEnabled) {
            @$body['recycleBinEnabled'] = $request->recycleBinEnabled;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a project.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:UpdateProject`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}`|
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $project
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Updates a saved search.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Limits are imposed when you use Simple Log Service to query logs. We recommend that you specify query statements and query time ranges based on the limits. For more information, see [Log search overview](https://help.aliyun.com/document_detail/43772.html) and [Log analysis overview](https://help.aliyun.com/document_detail/53608.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:UpdateSavedSearch`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`|
     *
     * @param request - UpdateSavedSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSavedSearchResponse
     *
     * @param string                   $project
     * @param string                   $savedsearchName
     * @param UpdateSavedSearchRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSavedSearchResponse
     */
    public function updateSavedSearchWithOptions($project, $savedsearchName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->logstore) {
            @$body['logstore'] = $request->logstore;
        }

        if (null !== $request->savedsearchName) {
            @$body['savedsearchName'] = $request->savedsearchName;
        }

        if (null !== $request->searchQuery) {
            @$body['searchQuery'] = $request->searchQuery;
        }

        if (null !== $request->topic) {
            @$body['topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSavedSearch',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/savedsearches/' . $savedsearchName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a saved search.
     *
     * @remarks
     * ### Usage notes
     * * Host consists of a project name and a Simple Log Service endpoint. You must specify a project in Host.
     * * An AccessKey pair is created and obtained. For more information, see [AccessKey pair](https://help.aliyun.com/document_detail/29009.html).
     * The AccessKey pair of an Alibaba Cloud account has permissions on all API operations. Using these credentials to perform operations in Simple Log Service is a high-risk operation. We recommend that you use a Resource Access Management (RAM) user to call API operations or perform routine O&#x26;M. To create a RAM user, log on to the RAM console. Make sure that the RAM user has the management permissions on Simple Log Service resources. For more information, see [Create a RAM user and authorize the RAM user to access Simple Log Service](https://help.aliyun.com/document_detail/47664.html).
     * * The information that is required to query logs is obtained. The information includes the name of the project to which the logs belong, the region of the project, and the name of the Logstore to which the logs belong. For more information, see [Manage a project](https://help.aliyun.com/document_detail/48984.html) and [Manage a Logstore](https://help.aliyun.com/document_detail/48990.html).
     * * Limits are imposed when you use Simple Log Service to query logs. We recommend that you specify query statements and query time ranges based on the limits. For more information, see [Log search overview](https://help.aliyun.com/document_detail/43772.html) and [Log analysis overview](https://help.aliyun.com/document_detail/53608.html).
     * ### Authentication resources
     * The following table describes the authorization information that is required for this operation. You can add the information to the Action element of a RAM policy statement to grant a RAM user or a RAM role the permissions to call this operation.
     * |Action|Resource|
     * |:---|:---|
     * |`log:UpdateSavedSearch`|`acs:log:{#regionId}:{#accountId}:project/{#ProjectName}/savedsearch/{#SavedSearchName}`|
     *
     * @param request - UpdateSavedSearchRequest
     *
     * @returns UpdateSavedSearchResponse
     *
     * @param string                   $project
     * @param string                   $savedsearchName
     * @param UpdateSavedSearchRequest $request
     *
     * @return UpdateSavedSearchResponse
     */
    public function updateSavedSearch($project, $savedsearchName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSavedSearchWithOptions($project, $savedsearchName, $request, $headers, $runtime);
    }

    /**
     * Updates a Scheduled SQL job.
     *
     * @param request - UpdateScheduledSQLRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScheduledSQLResponse
     *
     * @param string                    $project
     * @param string                    $scheduledSQLName
     * @param UpdateScheduledSQLRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateScheduledSQLResponse
     */
    public function updateScheduledSQLWithOptions($project, $scheduledSQLName, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->configuration) {
            @$body['configuration'] = $request->configuration;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->schedule) {
            @$body['schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScheduledSQL',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/scheduledsqls/' . $scheduledSQLName . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateScheduledSQLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a Scheduled SQL job.
     *
     * @param request - UpdateScheduledSQLRequest
     *
     * @returns UpdateScheduledSQLResponse
     *
     * @param string                    $project
     * @param string                    $scheduledSQLName
     * @param UpdateScheduledSQLRequest $request
     *
     * @return UpdateScheduledSQLResponse
     */
    public function updateScheduledSQL($project, $scheduledSQLName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateScheduledSQLWithOptions($project, $scheduledSQLName, $request, $headers, $runtime);
    }

    /**
     * Updates the configurations of the Dedicated SQL feature.
     *
     * @param request - UpdateSqlInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSqlInstanceResponse
     *
     * @param string                   $project
     * @param UpdateSqlInstanceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSqlInstanceResponse
     */
    public function updateSqlInstanceWithOptions($project, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->cu) {
            @$body['cu'] = $request->cu;
        }

        if (null !== $request->useAsDefault) {
            @$body['useAsDefault'] = $request->useAsDefault;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSqlInstance',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/sqlinstance',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateSqlInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the configurations of the Dedicated SQL feature.
     *
     * @param request - UpdateSqlInstanceRequest
     *
     * @returns UpdateSqlInstanceResponse
     *
     * @param string                   $project
     * @param UpdateSqlInstanceRequest $request
     *
     * @return UpdateSqlInstanceResponse
     */
    public function updateSqlInstance($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSqlInstanceWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * Updates the configurations of a dataset.
     *
     * @param request - UpdateStoreViewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStoreViewResponse
     *
     * @param string                 $project
     * @param string                 $name
     * @param UpdateStoreViewRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateStoreViewResponse
     */
    public function updateStoreViewWithOptions($project, $name, $request, $headers, $runtime)
    {
        $request->validate();
        $hostMap = [];
        @$hostMap['project'] = $project;
        $body = [];
        if (null !== $request->storeType) {
            @$body['storeType'] = $request->storeType;
        }

        if (null !== $request->stores) {
            @$body['stores'] = $request->stores;
        }

        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateStoreView',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/storeviews/' . $name . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpdateStoreViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the configurations of a dataset.
     *
     * @param request - UpdateStoreViewRequest
     *
     * @returns UpdateStoreViewResponse
     *
     * @param string                 $project
     * @param string                 $name
     * @param UpdateStoreViewRequest $request
     *
     * @return UpdateStoreViewResponse
     */
    public function updateStoreView($project, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateStoreViewWithOptions($project, $name, $request, $headers, $runtime);
    }

    /**
     * Creates a log collection policy for a cloud service. This way, logs can be automatically collected from the service.
     *
     * @remarks
     * You must use the Simple Log Service endpoint for the China (Shanghai) or Singapore region to call the operation.
     *
     * @param request - UpsertCollectionPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpsertCollectionPolicyResponse
     *
     * @param UpsertCollectionPolicyRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpsertCollectionPolicyResponse
     */
    public function upsertCollectionPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->centralizeConfig) {
            @$body['centralizeConfig'] = $request->centralizeConfig;
        }

        if (null !== $request->centralizeEnabled) {
            @$body['centralizeEnabled'] = $request->centralizeEnabled;
        }

        if (null !== $request->dataCode) {
            @$body['dataCode'] = $request->dataCode;
        }

        if (null !== $request->dataConfig) {
            @$body['dataConfig'] = $request->dataConfig;
        }

        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->policyConfig) {
            @$body['policyConfig'] = $request->policyConfig;
        }

        if (null !== $request->policyName) {
            @$body['policyName'] = $request->policyName;
        }

        if (null !== $request->productCode) {
            @$body['productCode'] = $request->productCode;
        }

        if (null !== $request->resourceDirectory) {
            @$body['resourceDirectory'] = $request->resourceDirectory;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpsertCollectionPolicy',
            'version' => '2020-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/collectionpolicy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return UpsertCollectionPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a log collection policy for a cloud service. This way, logs can be automatically collected from the service.
     *
     * @remarks
     * You must use the Simple Log Service endpoint for the China (Shanghai) or Singapore region to call the operation.
     *
     * @param request - UpsertCollectionPolicyRequest
     *
     * @returns UpsertCollectionPolicyResponse
     *
     * @param UpsertCollectionPolicyRequest $request
     *
     * @return UpsertCollectionPolicyResponse
     */
    public function upsertCollectionPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upsertCollectionPolicyWithOptions($request, $headers, $runtime);
    }
}
