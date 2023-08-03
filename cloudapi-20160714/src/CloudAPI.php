<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AbolishApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AbolishApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddAccessControlListEntryRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddAccessControlListEntryResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachPluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachPluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchAbolishApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchAbolishApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchDeployApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchDeployApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAccessControlListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAccessControlListResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiStageVariableRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiStageVariableResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateBackendModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateBackendModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateDatasetItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateDatasetItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIntranetDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIntranetDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateMonitorGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateMonitorGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreatePluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreatePluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateSignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateSignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAccessControlListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAccessControlListResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAllTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAllTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiStageVariableRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiStageVariableResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteBackendModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteBackendModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDatasetItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDatasetItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteMonitorGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteMonitorGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeletePluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeletePluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteSignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteSignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeployApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeployApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListAttributeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListAttributeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupVpcWhitelistRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupVpcWhitelistResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoriesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoriesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiMarketAttributesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiMarketAttributesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisBySignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisBySignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecurityRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecurityResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendListResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetInfoRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetInfoResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetItemInfoRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetItemInfoResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetItemListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetItemListResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetListResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupQpsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupQpsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropConnectionsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropConnectionsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropPacketRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropPacketResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceHttpCodeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceHttpCodeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceLatencyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceLatencyResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceNewConnectionsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceNewConnectionsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancePacketsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancePacketsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceQpsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceQpsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceSlbConnectRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceSlbConnectResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceTrafficRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceTrafficResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeMarketRemainsQuotaRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeMarketRemainsQuotaResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginTemplatesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginTemplatesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSummaryDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSummaryDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateBackendTaskRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateBackendTaskResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachPluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachPluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DisableInstanceAccessControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DisableInstanceAccessControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\EnableInstanceAccessControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\EnableInstanceAccessControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiConfigurationRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiConfigurationResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupVpcWhitelistRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupVpcWhitelistResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyBackendModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyBackendModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyBackendRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyBackendResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyDatasetItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyDatasetItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyDatasetRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyDatasetResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceSpecRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceSpecResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyPluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyPluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifySignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifySignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyVpcAccessAndUpdateApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyVpcAccessAndUpdateApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\OpenApiGatewayServiceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\QueryRequestLogsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ReactivateDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ReactivateDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveAccessControlListEntryRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveAccessControlListEntryResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveApisAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveApisAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveAppsAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveAppsAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveSignatureApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveSignatureApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveTrafficControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveTrafficControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessAndAbolishApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessAndAbolishApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppCodeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppCodeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppSecretRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppSecretResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByAppForRegionRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByAppForRegionResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAccessControlListAttributeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAccessControlListAttributeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApisAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApisAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainWebSocketStatusRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainWebSocketStatusResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetGroupAuthAppCodeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetGroupAuthAppCodeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetIpControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetIpControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetSignatureApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetSignatureApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetTrafficControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetTrafficControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetVpcAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetVpcAccessResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetWildcardDomainPatternsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetWildcardDomainPatternsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SwitchApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SwitchApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\TagResourcesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\TagResourcesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ValidateVpcConnectivityRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ValidateVpcConnectivityResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CloudAPI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'apigateway.cn-qingdao.aliyuncs.com',
            'cn-beijing'            => 'apigateway.cn-beijing.aliyuncs.com',
            'cn-chengdu'            => 'apigateway.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou'        => 'apigateway.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote'          => 'apigateway.cn-huhehaote.aliyuncs.com',
            'cn-hangzhou'           => 'apigateway.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'apigateway.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'apigateway.cn-shenzhen.aliyuncs.com',
            'cn-hongkong'           => 'apigateway.cn-hongkong.aliyuncs.com',
            'ap-southeast-1'        => 'apigateway.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'apigateway.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'apigateway.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'apigateway.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1'        => 'apigateway.ap-northeast-1.aliyuncs.com',
            'eu-west-1'             => 'apigateway.eu-west-1.aliyuncs.com',
            'us-west-1'             => 'apigateway.us-west-1.aliyuncs.com',
            'us-east-1'             => 'apigateway.us-east-1.aliyuncs.com',
            'eu-central-1'          => 'apigateway.eu-central-1.aliyuncs.com',
            'me-east-1'             => 'apigateway.me-east-1.aliyuncs.com',
            'ap-south-1'            => 'apigateway.ap-south-1.aliyuncs.com',
            'cn-north-2-gov-1'      => 'apigateway.cn-north-2-gov-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'apigateway.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'apigateway.aliyuncs.com',
            'cn-shanghai-finance-1' => 'apigateway.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AbolishApiRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AbolishApiResponse
     */
    public function abolishApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AbolishApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbolishApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbolishApiRequest $request
     *
     * @return AbolishApiResponse
     */
    public function abolishApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishApiWithOptions($request, $runtime);
    }

    /**
     * @param AddAccessControlListEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddAccessControlListEntryResponse
     */
    public function addAccessControlListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntrys)) {
            $query['AclEntrys'] = $request->aclEntrys;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAccessControlListEntry',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAccessControlListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddAccessControlListEntryRequest $request
     *
     * @return AddAccessControlListEntryResponse
     */
    public function addAccessControlListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAccessControlListEntryWithOptions($request, $runtime);
    }

    /**
     * The restriction policy on app IDs for a specific policy. You can restrict app IDs only for whitelists. The IpControlType values of whitelists are ALLOW.
     *   * *   You can add only one app ID restriction policy at a time.
     *   * *   If this parameter is empty, no restriction is imposed on the app IDs.
     *   * *   If this parameter is not empty, there is restriction not only on IP addresses, but also on apps.
     *   * *   Please note that if this parameter is not empty and the security authentication method of the API is No Authentication, all API calls are restricted.
     *   * *   If this parameter is not empty for a blacklist, API Gateway automatically skips this parameter and sets only restriction on IP addresses. The IpControlType value of a blacklist is REFUSE.
     *   *
     * @param AddIpControlPolicyItemRequest $request AddIpControlPolicyItemRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddIpControlPolicyItemResponse AddIpControlPolicyItemResponse
     */
    public function addIpControlPolicyItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->cidrIp)) {
            $query['CidrIp'] = $request->cidrIp;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddIpControlPolicyItem',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddIpControlPolicyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The restriction policy on app IDs for a specific policy. You can restrict app IDs only for whitelists. The IpControlType values of whitelists are ALLOW.
     *   * *   You can add only one app ID restriction policy at a time.
     *   * *   If this parameter is empty, no restriction is imposed on the app IDs.
     *   * *   If this parameter is not empty, there is restriction not only on IP addresses, but also on apps.
     *   * *   Please note that if this parameter is not empty and the security authentication method of the API is No Authentication, all API calls are restricted.
     *   * *   If this parameter is not empty for a blacklist, API Gateway automatically skips this parameter and sets only restriction on IP addresses. The IpControlType value of a blacklist is REFUSE.
     *   *
     * @param AddIpControlPolicyItemRequest $request AddIpControlPolicyItemRequest
     *
     * @return AddIpControlPolicyItemResponse AddIpControlPolicyItemResponse
     */
    public function addIpControlPolicyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * The type of the special throttling policy. Valid values:
     *   * *   **APP**
     *   * *   **USER**.
     *   *
     * @param AddTrafficSpecialControlRequest $request AddTrafficSpecialControlRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTrafficSpecialControlResponse AddTrafficSpecialControlResponse
     */
    public function addTrafficSpecialControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->specialKey)) {
            $query['SpecialKey'] = $request->specialKey;
        }
        if (!Utils::isUnset($request->specialType)) {
            $query['SpecialType'] = $request->specialType;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        if (!Utils::isUnset($request->trafficValue)) {
            $query['TrafficValue'] = $request->trafficValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTrafficSpecialControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTrafficSpecialControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The type of the special throttling policy. Valid values:
     *   * *   **APP**
     *   * *   **USER**.
     *   *
     * @param AddTrafficSpecialControlRequest $request AddTrafficSpecialControlRequest
     *
     * @return AddTrafficSpecialControlResponse AddTrafficSpecialControlResponse
     */
    public function addTrafficSpecialControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * @param AttachPluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachPluginResponse
     */
    public function attachPluginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachPlugin',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachPluginRequest $request
     *
     * @return AttachPluginResponse
     */
    public function attachPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPluginWithOptions($request, $runtime);
    }

    /**
     * @param BatchAbolishApisRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchAbolishApisResponse
     */
    public function batchAbolishApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->api)) {
            $query['Api'] = $request->api;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchAbolishApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAbolishApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchAbolishApisRequest $request
     *
     * @return BatchAbolishApisResponse
     */
    public function batchAbolishApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAbolishApisWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeployApisRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BatchDeployApisResponse
     */
    public function batchDeployApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->api)) {
            $query['Api'] = $request->api;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeployApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeployApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeployApisRequest $request
     *
     * @return BatchDeployApisResponse
     */
    public function batchDeployApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeployApisWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccessControlListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAccessControlListResponse
     */
    public function createAccessControlListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessControlList',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccessControlListRequest $request
     *
     * @return CreateAccessControlListResponse
     */
    public function createAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessControlListWithOptions($request, $runtime);
    }

    /**
     * *   This operation is intended for API providers.
     *   * *   The name of each API within the same group must be unique.
     *   * *   Each request path within the same group must be unique.
     *   * *   The QPS limit on this operation is 50 per user.
     *   *
     * @param CreateApiRequest $request CreateApiRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApiResponse CreateApiResponse
     */
    public function createApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowSignatureMethod)) {
            $query['AllowSignatureMethod'] = $request->allowSignatureMethod;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->appCodeAuthType)) {
            $query['AppCodeAuthType'] = $request->appCodeAuthType;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->backendEnable)) {
            $query['BackendEnable'] = $request->backendEnable;
        }
        if (!Utils::isUnset($request->backendId)) {
            $query['BackendId'] = $request->backendId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableInternet)) {
            $query['DisableInternet'] = $request->disableInternet;
        }
        if (!Utils::isUnset($request->forceNonceCheck)) {
            $query['ForceNonceCheck'] = $request->forceNonceCheck;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->openIdConnectConfig)) {
            $query['OpenIdConnectConfig'] = $request->openIdConnectConfig;
        }
        if (!Utils::isUnset($request->requestConfig)) {
            $query['RequestConfig'] = $request->requestConfig;
        }
        if (!Utils::isUnset($request->resultBodyModel)) {
            $query['ResultBodyModel'] = $request->resultBodyModel;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serviceConfig)) {
            $query['ServiceConfig'] = $request->serviceConfig;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        if (!Utils::isUnset($request->webSocketApiType)) {
            $query['WebSocketApiType'] = $request->webSocketApiType;
        }
        $body = [];
        if (!Utils::isUnset($request->constantParameters)) {
            $body['ConstantParameters'] = $request->constantParameters;
        }
        if (!Utils::isUnset($request->errorCodeSamples)) {
            $body['ErrorCodeSamples'] = $request->errorCodeSamples;
        }
        if (!Utils::isUnset($request->failResultSample)) {
            $body['FailResultSample'] = $request->failResultSample;
        }
        if (!Utils::isUnset($request->requestParameters)) {
            $body['RequestParameters'] = $request->requestParameters;
        }
        if (!Utils::isUnset($request->resultDescriptions)) {
            $body['ResultDescriptions'] = $request->resultDescriptions;
        }
        if (!Utils::isUnset($request->resultSample)) {
            $body['ResultSample'] = $request->resultSample;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        if (!Utils::isUnset($request->serviceParametersMap)) {
            $body['ServiceParametersMap'] = $request->serviceParametersMap;
        }
        if (!Utils::isUnset($request->systemParameters)) {
            $body['SystemParameters'] = $request->systemParameters;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is intended for API providers.
     *   * *   The name of each API within the same group must be unique.
     *   * *   Each request path within the same group must be unique.
     *   * *   The QPS limit on this operation is 50 per user.
     *   *
     * @param CreateApiRequest $request CreateApiRequest
     *
     * @return CreateApiResponse CreateApiResponse
     */
    public function createApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiWithOptions($request, $runtime);
    }

    /**
     * @param CreateApiGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateApiGroupResponse
     */
    public function createApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->basePath)) {
            $query['BasePath'] = $request->basePath;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApiGroup',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApiGroupRequest $request
     *
     * @return CreateApiGroupResponse
     */
    public function createApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateApiStageVariableRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateApiStageVariableResponse
     */
    public function createApiStageVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageId)) {
            $query['StageId'] = $request->stageId;
        }
        if (!Utils::isUnset($request->stageRouteModel)) {
            $query['StageRouteModel'] = $request->stageRouteModel;
        }
        if (!Utils::isUnset($request->supportRoute)) {
            $query['SupportRoute'] = $request->supportRoute;
        }
        if (!Utils::isUnset($request->variableName)) {
            $query['VariableName'] = $request->variableName;
        }
        if (!Utils::isUnset($request->variableValue)) {
            $query['VariableValue'] = $request->variableValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApiStageVariable',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApiStageVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApiStageVariableRequest $request
     *
     * @return CreateApiStageVariableResponse
     */
    public function createApiStageVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiStageVariableWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCode)) {
            $query['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $query['AppSecret'] = $request->appSecret;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateBackendRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBackendResponse
     */
    public function createBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendName)) {
            $query['BackendName'] = $request->backendName;
        }
        if (!Utils::isUnset($request->backendType)) {
            $query['BackendType'] = $request->backendType;
        }
        if (!Utils::isUnset($request->createEventBridgeServiceLinkedRole)) {
            $query['CreateEventBridgeServiceLinkedRole'] = $request->createEventBridgeServiceLinkedRole;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBackend',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBackendRequest $request
     *
     * @return CreateBackendResponse
     */
    public function createBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackendWithOptions($request, $runtime);
    }

    /**
     * @param CreateBackendModelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateBackendModelResponse
     */
    public function createBackendModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendId)) {
            $query['BackendId'] = $request->backendId;
        }
        if (!Utils::isUnset($request->backendModelData)) {
            $query['BackendModelData'] = $request->backendModelData;
        }
        if (!Utils::isUnset($request->backendType)) {
            $query['BackendType'] = $request->backendType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBackendModel',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackendModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBackendModelRequest $request
     *
     * @return CreateBackendModelResponse
     */
    public function createBackendModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackendModelWithOptions($request, $runtime);
    }

    /**
     * @param CreateDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
     */
    public function createDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->datasetType)) {
            $query['DatasetType'] = $request->datasetType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataset',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDatasetRequest $request
     *
     * @return CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetWithOptions($request, $runtime);
    }

    /**
     * @param CreateDatasetItemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDatasetItemResponse
     */
    public function createDatasetItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasetItem',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatasetItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDatasetItemRequest $request
     *
     * @return CreateDatasetItemResponse
     */
    public function createDatasetItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetItemWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->httpsPolicy)) {
            $query['HttpsPolicy'] = $request->httpsPolicy;
        }
        if (!Utils::isUnset($request->instanceCidr)) {
            $query['InstanceCidr'] = $request->instanceCidr;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->userVpcId)) {
            $query['UserVpcId'] = $request->userVpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneVSwitchSecurityGroup)) {
            $query['ZoneVSwitchSecurityGroup'] = $request->zoneVSwitchSecurityGroup;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateIntranetDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateIntranetDomainResponse
     */
    public function createIntranetDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIntranetDomain',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIntranetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIntranetDomainRequest $request
     *
     * @return CreateIntranetDomainResponse
     */
    public function createIntranetDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntranetDomainWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpControlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateIpControlResponse
     */
    public function createIpControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipControlName)) {
            $query['IpControlName'] = $request->ipControlName;
        }
        if (!Utils::isUnset($request->ipControlPolicys)) {
            $query['IpControlPolicys'] = $request->ipControlPolicys;
        }
        if (!Utils::isUnset($request->ipControlType)) {
            $query['IpControlType'] = $request->ipControlType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIpControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIpControlRequest $request
     *
     * @return CreateIpControlResponse
     */
    public function createIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpControlWithOptions($request, $runtime);
    }

    /**
     * @param CreateLogConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateLogConfigResponse
     */
    public function createLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->slsLogStore)) {
            $query['SlsLogStore'] = $request->slsLogStore;
        }
        if (!Utils::isUnset($request->slsProject)) {
            $query['SlsProject'] = $request->slsProject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLogConfig',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLogConfigRequest $request
     *
     * @return CreateLogConfigResponse
     */
    public function createLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogConfigWithOptions($request, $runtime);
    }

    /**
     * *   For more information about the model definition, see [JSON Schema Draft 4](https://tools.ietf.org/html/draft-zyp-json-schema-04?spm=a2c4g.11186623.2.10.2e977ff7p4BpQd).
     *   * *   JSON Schema supports only element attributes of the Object type.
     *   *
     * @param CreateModelRequest $request CreateModelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateModelResponse CreateModelResponse
     */
    public function createModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->schema)) {
            $query['Schema'] = $request->schema;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateModel',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   For more information about the model definition, see [JSON Schema Draft 4](https://tools.ietf.org/html/draft-zyp-json-schema-04?spm=a2c4g.11186623.2.10.2e977ff7p4BpQd).
     *   * *   JSON Schema supports only element attributes of the Object type.
     *   *
     * @param CreateModelRequest $request CreateModelRequest
     *
     * @return CreateModelResponse CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelWithOptions($request, $runtime);
    }

    /**
     * @param CreateMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auth)) {
            $query['Auth'] = $request->auth;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->rawMonitorGroupId)) {
            $query['RawMonitorGroupId'] = $request->rawMonitorGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMonitorGroup',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMonitorGroupRequest $request
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreatePluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePluginResponse
     */
    public function createPluginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->pluginData)) {
            $query['PluginData'] = $request->pluginData;
        }
        if (!Utils::isUnset($request->pluginName)) {
            $query['PluginName'] = $request->pluginName;
        }
        if (!Utils::isUnset($request->pluginType)) {
            $query['PluginType'] = $request->pluginType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePlugin',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePluginRequest $request
     *
     * @return CreatePluginResponse
     */
    public function createPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPluginWithOptions($request, $runtime);
    }

    /**
     * The Key value of the key. The value must be 6 to 20 characters in length and can contain letters, digits, and underscores (\\_). It must start with a letter.
     *   *
     * @param CreateSignatureRequest $request CreateSignatureRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSignatureResponse CreateSignatureResponse
     */
    public function createSignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->signatureKey)) {
            $query['SignatureKey'] = $request->signatureKey;
        }
        if (!Utils::isUnset($request->signatureName)) {
            $query['SignatureName'] = $request->signatureName;
        }
        if (!Utils::isUnset($request->signatureSecret)) {
            $query['SignatureSecret'] = $request->signatureSecret;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSignature',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The Key value of the key. The value must be 6 to 20 characters in length and can contain letters, digits, and underscores (\\_). It must start with a letter.
     *   *
     * @param CreateSignatureRequest $request CreateSignatureRequest
     *
     * @return CreateSignatureResponse CreateSignatureResponse
     */
    public function createSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSignatureWithOptions($request, $runtime);
    }

    /**
     * ThrottlingTest.
     *   *
     * @param CreateTrafficControlRequest $request CreateTrafficControlRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTrafficControlResponse CreateTrafficControlResponse
     */
    public function createTrafficControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiDefault)) {
            $query['ApiDefault'] = $request->apiDefault;
        }
        if (!Utils::isUnset($request->appDefault)) {
            $query['AppDefault'] = $request->appDefault;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->trafficControlName)) {
            $query['TrafficControlName'] = $request->trafficControlName;
        }
        if (!Utils::isUnset($request->trafficControlUnit)) {
            $query['TrafficControlUnit'] = $request->trafficControlUnit;
        }
        if (!Utils::isUnset($request->userDefault)) {
            $query['UserDefault'] = $request->userDefault;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrafficControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ThrottlingTest.
     *   *
     * @param CreateTrafficControlRequest $request CreateTrafficControlRequest
     *
     * @return CreateTrafficControlResponse CreateTrafficControlResponse
     */
    public function createTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccessControlListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAccessControlListResponse
     */
    public function deleteAccessControlListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessControlList',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAccessControlListRequest $request
     *
     * @return DeleteAccessControlListResponse
     */
    public function deleteAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessControlListWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteAllTrafficSpecialControlRequest $request DeleteAllTrafficSpecialControlRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAllTrafficSpecialControlResponse DeleteAllTrafficSpecialControlResponse
     */
    public function deleteAllTrafficSpecialControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAllTrafficSpecialControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAllTrafficSpecialControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteAllTrafficSpecialControlRequest $request DeleteAllTrafficSpecialControlRequest
     *
     * @return DeleteAllTrafficSpecialControlResponse DeleteAllTrafficSpecialControlResponse
     */
    public function deleteAllTrafficSpecialControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteApiResponse
     */
    public function deleteApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApiRequest $request
     *
     * @return DeleteApiResponse
     */
    public function deleteApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApiGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteApiGroupResponse
     */
    public function deleteApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApiGroup',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApiGroupRequest $request
     *
     * @return DeleteApiGroupResponse
     */
    public function deleteApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApiStageVariableRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteApiStageVariableResponse
     */
    public function deleteApiStageVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageId)) {
            $query['StageId'] = $request->stageId;
        }
        if (!Utils::isUnset($request->variableName)) {
            $query['VariableName'] = $request->variableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApiStageVariable',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApiStageVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApiStageVariableRequest $request
     *
     * @return DeleteApiStageVariableResponse
     */
    public function deleteApiStageVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiStageVariableWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBackendRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBackendResponse
     */
    public function deleteBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendId)) {
            $query['BackendId'] = $request->backendId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackend',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBackendRequest $request
     *
     * @return DeleteBackendResponse
     */
    public function deleteBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackendWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBackendModelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteBackendModelResponse
     */
    public function deleteBackendModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendId)) {
            $query['BackendId'] = $request->backendId;
        }
        if (!Utils::isUnset($request->backendModelId)) {
            $query['BackendModelId'] = $request->backendModelId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackendModel',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBackendModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBackendModelRequest $request
     *
     * @return DeleteBackendModelResponse
     */
    public function deleteBackendModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackendModelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataset',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDatasetRequest $request
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatasetItemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDatasetItemResponse
     */
    public function deleteDatasetItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetItemId)) {
            $query['DatasetItemId'] = $request->datasetItemId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatasetItem',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatasetItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDatasetItemRequest $request
     *
     * @return DeleteDatasetItemResponse
     */
    public function deleteDatasetItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetItemWithOptions($request, $runtime);
    }

    /**
     * The custom domain name.
     *   *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The custom domain name.
     *   *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDomainCertificateResponse
     */
    public function deleteDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certificateId)) {
            $query['CertificateId'] = $request->certificateId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainCertificate',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDomainCertificateRequest $request
     *
     * @return DeleteDomainCertificateResponse
     */
    public function deleteDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteIpControlRequest $request DeleteIpControlRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpControlResponse DeleteIpControlResponse
     */
    public function deleteIpControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIpControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteIpControlRequest $request DeleteIpControlRequest
     *
     * @return DeleteIpControlResponse DeleteIpControlResponse
     */
    public function deleteIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpControlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLogConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteLogConfigResponse
     */
    public function deleteLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLogConfig',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLogConfigRequest $request
     *
     * @return DeleteLogConfigResponse
     */
    public function deleteLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteModel',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteModelRequest $request
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->rawMonitorGroupId)) {
            $query['RawMonitorGroupId'] = $request->rawMonitorGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMonitorGroup',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMonitorGroupRequest $request
     *
     * @return DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeletePluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePluginResponse
     */
    public function deletePluginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePlugin',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePluginRequest $request
     *
     * @return DeletePluginResponse
     */
    public function deletePlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePluginWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteSignatureRequest $request DeleteSignatureRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSignatureResponse DeleteSignatureResponse
     */
    public function deleteSignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->signatureId)) {
            $query['SignatureId'] = $request->signatureId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSignature',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param DeleteSignatureRequest $request DeleteSignatureRequest
     *
     * @return DeleteSignatureResponse DeleteSignatureResponse
     */
    public function deleteSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSignatureWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrafficControlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteTrafficControlResponse
     */
    public function deleteTrafficControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTrafficControlRequest $request
     *
     * @return DeleteTrafficControlResponse
     */
    public function deleteTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficControlWithOptions($request, $runtime);
    }

    /**
     * The type of the special throttling policy. Valid values:
     *   * *   **APP**
     *   * *   **USER**.
     *   *
     * @param DeleteTrafficSpecialControlRequest $request DeleteTrafficSpecialControlRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTrafficSpecialControlResponse DeleteTrafficSpecialControlResponse
     */
    public function deleteTrafficSpecialControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->specialKey)) {
            $query['SpecialKey'] = $request->specialKey;
        }
        if (!Utils::isUnset($request->specialType)) {
            $query['SpecialType'] = $request->specialType;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrafficSpecialControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrafficSpecialControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The type of the special throttling policy. Valid values:
     *   * *   **APP**
     *   * *   **USER**.
     *   *
     * @param DeleteTrafficSpecialControlRequest $request DeleteTrafficSpecialControlRequest
     *
     * @return DeleteTrafficSpecialControlResponse DeleteTrafficSpecialControlResponse
     */
    public function deleteTrafficSpecialControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * The ID of the API.
     *   *
     * @param DeployApiRequest $request DeployApiRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeployApiResponse DeployApiResponse
     */
    public function deployApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API.
     *   *
     * @param DeployApiRequest $request DeployApiRequest
     *
     * @return DeployApiResponse DeployApiResponse
     */
    public function deployApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAbolishApiTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAbolishApiTaskResponse
     */
    public function describeAbolishApiTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationUid)) {
            $query['OperationUid'] = $request->operationUid;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAbolishApiTask',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAbolishApiTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAbolishApiTaskRequest $request
     *
     * @return DescribeAbolishApiTaskResponse
     */
    public function describeAbolishApiTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAbolishApiTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccessControlListAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeAccessControlListAttributeResponse
     */
    public function describeAccessControlListAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessControlListAttribute',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessControlListAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccessControlListAttributeRequest $request
     *
     * @return DescribeAccessControlListAttributeResponse
     */
    public function describeAccessControlListAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessControlListAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccessControlListsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAccessControlListsResponse
     */
    public function describeAccessControlListsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessControlLists',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessControlListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccessControlListsRequest $request
     *
     * @return DescribeAccessControlListsResponse
     */
    public function describeAccessControlLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessControlListsWithOptions($request, $runtime);
    }

    /**
     * *   This operation is intended for API providers.
     *   *
     * @param DescribeApiRequest $request DescribeApiRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiResponse DescribeApiResponse
     */
    public function describeApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is intended for API providers.
     *   *
     * @param DescribeApiRequest $request DescribeApiRequest
     *
     * @return DescribeApiResponse DescribeApiResponse
     */
    public function describeApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiDocRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeApiDocResponse
     */
    public function describeApiDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiDoc',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiDocRequest $request
     *
     * @return DescribeApiDocResponse
     */
    public function describeApiDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiDocWithOptions($request, $runtime);
    }

    /**
     * *   This operation is intended for API providers.
     *   *
     * @param DescribeApiGroupRequest $request DescribeApiGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiGroupResponse DescribeApiGroupResponse
     */
    public function describeApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiGroup',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is intended for API providers.
     *   *
     * @param DescribeApiGroupRequest $request DescribeApiGroupRequest
     *
     * @return DescribeApiGroupResponse DescribeApiGroupResponse
     */
    public function describeApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiGroupVpcWhitelistRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeApiGroupVpcWhitelistResponse
     */
    public function describeApiGroupVpcWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiGroupVpcWhitelist',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiGroupVpcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiGroupVpcWhitelistRequest $request
     *
     * @return DescribeApiGroupVpcWhitelistResponse
     */
    public function describeApiGroupVpcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupVpcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiGroupsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeApiGroupsResponse
     */
    public function describeApiGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableTagAuth)) {
            $query['EnableTagAuth'] = $request->enableTagAuth;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiGroups',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiGroupsRequest $request
     *
     * @return DescribeApiGroupsResponse
     */
    public function describeApiGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupsWithOptions($request, $runtime);
    }

    /**
     * The name of the runtime environment. Valid values:
     *   * *   **RELEASE**
     *   * *   **TEST: the test environment**.
     *   *
     * @param DescribeApiHistoriesRequest $request DescribeApiHistoriesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiHistoriesResponse DescribeApiHistoriesResponse
     */
    public function describeApiHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiHistories',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the runtime environment. Valid values:
     *   * *   **RELEASE**
     *   * *   **TEST: the test environment**.
     *   *
     * @param DescribeApiHistoriesRequest $request DescribeApiHistoriesRequest
     *
     * @return DescribeApiHistoriesResponse DescribeApiHistoriesResponse
     */
    public function describeApiHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiHistoriesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the definition of a specified published version of an API.
     *   * *   This operation is intended for API providers.
     *   * *   Each time an API is published, API Gateway records the publishing details, such as the time and the API definition. You can use the version number obtained from other API operations to query the details of an API definition that is published on a specific occasion.
     *   *
     * @param DescribeApiHistoryRequest $request DescribeApiHistoryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiHistoryResponse DescribeApiHistoryResponse
     */
    public function describeApiHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->historyVersion)) {
            $query['HistoryVersion'] = $request->historyVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiHistory',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the definition of a specified published version of an API.
     *   * *   This operation is intended for API providers.
     *   * *   Each time an API is published, API Gateway records the publishing details, such as the time and the API definition. You can use the version number obtained from other API operations to query the details of an API definition that is published on a specific occasion.
     *   *
     * @param DescribeApiHistoryRequest $request DescribeApiHistoryRequest
     *
     * @return DescribeApiHistoryResponse DescribeApiHistoryResponse
     */
    public function describeApiHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiHistoryWithOptions($request, $runtime);
    }

    /**
     * The ID of the API group.
     *   *
     * @param DescribeApiIpControlsRequest $request DescribeApiIpControlsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiIpControlsResponse DescribeApiIpControlsResponse
     */
    public function describeApiIpControlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiIpControls',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiIpControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API group.
     *   *
     * @param DescribeApiIpControlsRequest $request DescribeApiIpControlsRequest
     *
     * @return DescribeApiIpControlsResponse DescribeApiIpControlsResponse
     */
    public function describeApiIpControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiIpControlsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiLatencyDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApiLatencyDataResponse
     */
    public function describeApiLatencyDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiLatencyData',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiLatencyDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiLatencyDataRequest $request
     *
     * @return DescribeApiLatencyDataResponse
     */
    public function describeApiLatencyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiLatencyDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiMarketAttributesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeApiMarketAttributesResponse
     */
    public function describeApiMarketAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiMarketAttributes',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiMarketAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiMarketAttributesRequest $request
     *
     * @return DescribeApiMarketAttributesResponse
     */
    public function describeApiMarketAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiMarketAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiQpsDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiQpsDataResponse
     */
    public function describeApiQpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiQpsData',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiQpsDataRequest $request
     *
     * @return DescribeApiQpsDataResponse
     */
    public function describeApiQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiQpsDataWithOptions($request, $runtime);
    }

    /**
     * The runtime environment. Valid values:
     *   * *   **RELEASE**
     *   * *   **TEST**.
     *   *
     * @param DescribeApiSignaturesRequest $request DescribeApiSignaturesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiSignaturesResponse DescribeApiSignaturesResponse
     */
    public function describeApiSignaturesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiSignatures',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiSignaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The runtime environment. Valid values:
     *   * *   **RELEASE**
     *   * *   **TEST**.
     *   *
     * @param DescribeApiSignaturesRequest $request DescribeApiSignaturesRequest
     *
     * @return DescribeApiSignaturesResponse DescribeApiSignaturesResponse
     */
    public function describeApiSignatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiSignaturesWithOptions($request, $runtime);
    }

    /**
     * The runtime environment of the API. Valid values:
     *   * *   **RELEASE**
     *   * *   **TEST**: the test environment.
     *   *
     * @param DescribeApiTrafficControlsRequest $request DescribeApiTrafficControlsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiTrafficControlsResponse DescribeApiTrafficControlsResponse
     */
    public function describeApiTrafficControlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiTrafficControls',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiTrafficControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The runtime environment of the API. Valid values:
     *   * *   **RELEASE**
     *   * *   **TEST**: the test environment.
     *   *
     * @param DescribeApiTrafficControlsRequest $request DescribeApiTrafficControlsRequest
     *
     * @return DescribeApiTrafficControlsResponse DescribeApiTrafficControlsResponse
     */
    public function describeApiTrafficControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiTrafficControlsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApiTrafficDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApiTrafficDataResponse
     */
    public function describeApiTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiTrafficData',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiTrafficDataRequest $request
     *
     * @return DescribeApiTrafficDataResponse
     */
    public function describeApiTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiTrafficDataWithOptions($request, $runtime);
    }

    /**
     * *   This operation is intended for API callers.
     *   * *   This operation returns a list of all APIs that are being defined. The basic information about these APIs is also returned in the list.
     *   * *   This operation returns all APIs that are being edited, regardless of their environments. The returned definitions may be different from the definitions in the environments.
     *   *
     * @param DescribeApisRequest $request DescribeApisRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisResponse DescribeApisResponse
     */
    public function describeApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiMethod)) {
            $query['ApiMethod'] = $request->apiMethod;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->apiPath)) {
            $query['ApiPath'] = $request->apiPath;
        }
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->enableTagAuth)) {
            $query['EnableTagAuth'] = $request->enableTagAuth;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->unDeployed)) {
            $query['UnDeployed'] = $request->unDeployed;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is intended for API callers.
     *   * *   This operation returns a list of all APIs that are being defined. The basic information about these APIs is also returned in the list.
     *   * *   This operation returns all APIs that are being edited, regardless of their environments. The returned definitions may be different from the definitions in the environments.
     *   *
     * @param DescribeApisRequest $request DescribeApisRequest
     *
     * @return DescribeApisResponse DescribeApisResponse
     */
    public function describeApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApisByAppRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeApisByAppResponse
     */
    public function describeApisByAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->apiUid)) {
            $query['ApiUid'] = $request->apiUid;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->method)) {
            $query['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByApp',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApisByAppRequest $request
     *
     * @return DescribeApisByAppResponse
     */
    public function describeApisByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByAppWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApisByBackendRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeApisByBackendResponse
     */
    public function describeApisByBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendId)) {
            $query['BackendId'] = $request->backendId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByBackend',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisByBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApisByBackendRequest $request
     *
     * @return DescribeApisByBackendResponse
     */
    public function describeApisByBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByBackendWithOptions($request, $runtime);
    }

    /**
     * The number of entries to return on each page. Maximum value: 100. Default value: 10.
     *   *
     * @param DescribeApisByIpControlRequest $request DescribeApisByIpControlRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisByIpControlResponse DescribeApisByIpControlResponse
     */
    public function describeApisByIpControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByIpControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisByIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of entries to return on each page. Maximum value: 100. Default value: 10.
     *   *
     * @param DescribeApisByIpControlRequest $request DescribeApisByIpControlRequest
     *
     * @return DescribeApisByIpControlResponse DescribeApisByIpControlResponse
     */
    public function describeApisByIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByIpControlWithOptions($request, $runtime);
    }

    /**
     * The ID of the signature key.
     *   *
     * @param DescribeApisBySignatureRequest $request DescribeApisBySignatureRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisBySignatureResponse DescribeApisBySignatureResponse
     */
    public function describeApisBySignatureWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->signatureId)) {
            $query['SignatureId'] = $request->signatureId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisBySignature',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisBySignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the signature key.
     *   *
     * @param DescribeApisBySignatureRequest $request DescribeApisBySignatureRequest
     *
     * @return DescribeApisBySignatureResponse DescribeApisBySignatureResponse
     */
    public function describeApisBySignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisBySignatureWithOptions($request, $runtime);
    }

    /**
     * The number of entries to return on each page. Maximum value: 100. Default value: 10.
     *   *
     * @param DescribeApisByTrafficControlRequest $request DescribeApisByTrafficControlRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisByTrafficControlResponse DescribeApisByTrafficControlResponse
     */
    public function describeApisByTrafficControlWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByTrafficControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisByTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of entries to return on each page. Maximum value: 100. Default value: 10.
     *   *
     * @param DescribeApisByTrafficControlRequest $request DescribeApisByTrafficControlRequest
     *
     * @return DescribeApisByTrafficControlResponse DescribeApisByTrafficControlResponse
     */
    public function describeApisByTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeAppResponse
     */
    public function describeAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApp',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppRequest $request
     *
     * @return DescribeAppResponse
     */
    public function describeApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppAttributesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAppAttributesResponse
     */
    public function describeAppAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCode)) {
            $query['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->enableTagAuth)) {
            $query['EnableTagAuth'] = $request->enableTagAuth;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppAttributes',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppAttributesRequest $request
     *
     * @return DescribeAppAttributesResponse
     */
    public function describeAppAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppSecurityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAppSecurityResponse
     */
    public function describeAppSecurityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppSecurity',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppSecurityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppSecurityRequest $request
     *
     * @return DescribeAppSecurityResponse
     */
    public function describeAppSecurity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppSecurityWithOptions($request, $runtime);
    }

    /**
     * The ID of the app.
     *   *
     * @param DescribeAppsRequest $request DescribeAppsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppsResponse DescribeAppsResponse
     */
    public function describeAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appOwner)) {
            $query['AppOwner'] = $request->appOwner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApps',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the app.
     *   *
     * @param DescribeAppsRequest $request DescribeAppsRequest
     *
     * @return DescribeAppsResponse DescribeAppsResponse
     */
    public function describeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsWithOptions($request, $runtime);
    }

    /**
     * The number of the page to return. Pages start from page 1. Default value: 1.
     *   *
     * @param DescribeAuthorizedApisRequest $request DescribeAuthorizedApisRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuthorizedApisResponse DescribeAuthorizedApisResponse
     */
    public function describeAuthorizedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuthorizedApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuthorizedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of the page to return. Pages start from page 1. Default value: 1.
     *   *
     * @param DescribeAuthorizedApisRequest $request DescribeAuthorizedApisRequest
     *
     * @return DescribeAuthorizedApisResponse DescribeAuthorizedApisResponse
     */
    public function describeAuthorizedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthorizedApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuthorizedAppsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuthorizedAppsResponse
     */
    public function describeAuthorizedAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appOwnerId)) {
            $query['AppOwnerId'] = $request->appOwnerId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuthorizedApps',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuthorizedAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAuthorizedAppsRequest $request
     *
     * @return DescribeAuthorizedAppsResponse
     */
    public function describeAuthorizedApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthorizedAppsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackendInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackendInfoResponse
     */
    public function describeBackendInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendId)) {
            $query['BackendId'] = $request->backendId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackendInfo',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackendInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackendInfoRequest $request
     *
     * @return DescribeBackendInfoResponse
     */
    public function describeBackendInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackendInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackendListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackendListResponse
     */
    public function describeBackendListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendName)) {
            $query['BackendName'] = $request->backendName;
        }
        if (!Utils::isUnset($request->backendType)) {
            $query['BackendType'] = $request->backendType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackendList',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackendListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackendListRequest $request
     *
     * @return DescribeBackendListResponse
     */
    public function describeBackendList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackendListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatasetInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDatasetInfoResponse
     */
    public function describeDatasetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatasetInfo',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatasetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDatasetInfoRequest $request
     *
     * @return DescribeDatasetInfoResponse
     */
    public function describeDatasetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatasetInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatasetItemInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDatasetItemInfoResponse
     */
    public function describeDatasetItemInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetItemId)) {
            $query['DatasetItemId'] = $request->datasetItemId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatasetItemInfo',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatasetItemInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDatasetItemInfoRequest $request
     *
     * @return DescribeDatasetItemInfoResponse
     */
    public function describeDatasetItemInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatasetItemInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatasetItemListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDatasetItemListResponse
     */
    public function describeDatasetItemListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetItemIds)) {
            $query['DatasetItemIds'] = $request->datasetItemIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatasetItemList',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatasetItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDatasetItemListRequest $request
     *
     * @return DescribeDatasetItemListResponse
     */
    public function describeDatasetItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatasetItemListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatasetListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDatasetListResponse
     */
    public function describeDatasetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetIds)) {
            $query['DatasetIds'] = $request->datasetIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatasetList',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatasetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDatasetListRequest $request
     *
     * @return DescribeDatasetListResponse
     */
    public function describeDatasetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatasetListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeployApiTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeployApiTaskResponse
     */
    public function describeDeployApiTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationUid)) {
            $query['OperationUid'] = $request->operationUid;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeployApiTask',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeployApiTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeployApiTaskRequest $request
     *
     * @return DescribeDeployApiTaskResponse
     */
    public function describeDeployApiTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployApiTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeployedApiRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDeployedApiResponse
     */
    public function describeDeployedApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeployedApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeployedApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeployedApiRequest $request
     *
     * @return DescribeDeployedApiResponse
     */
    public function describeDeployedApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployedApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeployedApisRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDeployedApisResponse
     */
    public function describeDeployedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiMethod)) {
            $query['ApiMethod'] = $request->apiMethod;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->apiPath)) {
            $query['ApiPath'] = $request->apiPath;
        }
        if (!Utils::isUnset($request->enableTagAuth)) {
            $query['EnableTagAuth'] = $request->enableTagAuth;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeployedApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeployedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeployedApisRequest $request
     *
     * @return DescribeDeployedApisResponse
     */
    public function describeDeployedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployedApisWithOptions($request, $runtime);
    }

    /**
     * The ID of the API group to which the domain name is bound. This ID is generated by the system and globally unique.
     *   *
     * @param DescribeDomainRequest $request DescribeDomainRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainResponse DescribeDomainResponse
     */
    public function describeDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomain',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API group to which the domain name is bound. This ID is generated by the system and globally unique.
     *   *
     * @param DescribeDomainRequest $request DescribeDomainRequest
     *
     * @return DescribeDomainResponse DescribeDomainResponse
     */
    public function describeDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupQpsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeGroupQpsResponse
     */
    public function describeGroupQpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupQps',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGroupQpsRequest $request
     *
     * @return DescribeGroupQpsResponse
     */
    public function describeGroupQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupQpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHistoryApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeHistoryApisResponse
     */
    public function describeHistoryApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHistoryApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHistoryApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHistoryApisRequest $request
     *
     * @return DescribeHistoryApisResponse
     */
    public function describeHistoryApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImportOASTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeImportOASTaskResponse
     */
    public function describeImportOASTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImportOASTask',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImportOASTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImportOASTaskRequest $request
     *
     * @return DescribeImportOASTaskResponse
     */
    public function describeImportOASTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImportOASTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceDropConnectionsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeInstanceDropConnectionsResponse
     */
    public function describeInstanceDropConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sbcName)) {
            $query['SbcName'] = $request->sbcName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceDropConnections',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceDropConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceDropConnectionsRequest $request
     *
     * @return DescribeInstanceDropConnectionsResponse
     */
    public function describeInstanceDropConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDropConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceDropPacketRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceDropPacketResponse
     */
    public function describeInstanceDropPacketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sbcName)) {
            $query['SbcName'] = $request->sbcName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceDropPacket',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceDropPacketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceDropPacketRequest $request
     *
     * @return DescribeInstanceDropPacketResponse
     */
    public function describeInstanceDropPacket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDropPacketWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceHttpCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceHttpCodeResponse
     */
    public function describeInstanceHttpCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceHttpCode',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceHttpCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceHttpCodeRequest $request
     *
     * @return DescribeInstanceHttpCodeResponse
     */
    public function describeInstanceHttpCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceHttpCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceLatencyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceLatencyResponse
     */
    public function describeInstanceLatencyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceLatency',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceLatencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceLatencyRequest $request
     *
     * @return DescribeInstanceLatencyResponse
     */
    public function describeInstanceLatency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceLatencyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceNewConnectionsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeInstanceNewConnectionsResponse
     */
    public function describeInstanceNewConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sbcName)) {
            $query['SbcName'] = $request->sbcName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceNewConnections',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceNewConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceNewConnectionsRequest $request
     *
     * @return DescribeInstanceNewConnectionsResponse
     */
    public function describeInstanceNewConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceNewConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancePacketsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstancePacketsResponse
     */
    public function describeInstancePacketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sbcName)) {
            $query['SbcName'] = $request->sbcName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstancePackets',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancePacketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancePacketsRequest $request
     *
     * @return DescribeInstancePacketsResponse
     */
    public function describeInstancePackets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancePacketsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceQpsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceQpsResponse
     */
    public function describeInstanceQpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceQps',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceQpsRequest $request
     *
     * @return DescribeInstanceQpsResponse
     */
    public function describeInstanceQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceQpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSlbConnectRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceSlbConnectResponse
     */
    public function describeInstanceSlbConnectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sbcName)) {
            $query['SbcName'] = $request->sbcName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSlbConnect',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSlbConnectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSlbConnectRequest $request
     *
     * @return DescribeInstanceSlbConnectResponse
     */
    public function describeInstanceSlbConnect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSlbConnectWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTrafficRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceTrafficResponse
     */
    public function describeInstanceTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceTraffic',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceTrafficRequest $request
     *
     * @return DescribeInstanceTrafficResponse
     */
    public function describeInstanceTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTrafficWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableTagAuthorization)) {
            $query['EnableTagAuthorization'] = $request->enableTagAuthorization;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpControlPolicyItemsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeIpControlPolicyItemsResponse
     */
    public function describeIpControlPolicyItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyItemId)) {
            $query['PolicyItemId'] = $request->policyItemId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpControlPolicyItems',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpControlPolicyItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpControlPolicyItemsRequest $request
     *
     * @return DescribeIpControlPolicyItemsResponse
     */
    public function describeIpControlPolicyItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpControlPolicyItemsWithOptions($request, $runtime);
    }

    /**
     * *   This operation is intended for API providers.
     *   * *   This operation is used to query the ACLs in a region. Region is a system parameter.
     *   * *   You can filter the query results by ACL ID, name, or type.
     *   * *   This operation cannot be used to query specific policies. If you want to query specific policies, call the [DescribeIpControlPolicyItems](~~65532~~) operation.
     *   *
     * @param DescribeIpControlsRequest $request DescribeIpControlsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIpControlsResponse DescribeIpControlsResponse
     */
    public function describeIpControlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->ipControlName)) {
            $query['IpControlName'] = $request->ipControlName;
        }
        if (!Utils::isUnset($request->ipControlType)) {
            $query['IpControlType'] = $request->ipControlType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpControls',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is intended for API providers.
     *   * *   This operation is used to query the ACLs in a region. Region is a system parameter.
     *   * *   You can filter the query results by ACL ID, name, or type.
     *   * *   This operation cannot be used to query specific policies. If you want to query specific policies, call the [DescribeIpControlPolicyItems](~~65532~~) operation.
     *   *
     * @param DescribeIpControlsRequest $request DescribeIpControlsRequest
     *
     * @return DescribeIpControlsResponse DescribeIpControlsResponse
     */
    public function describeIpControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpControlsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeLogConfigResponse
     */
    public function describeLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogConfig',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogConfigRequest $request
     *
     * @return DescribeLogConfigResponse
     */
    public function describeLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMarketRemainsQuotaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMarketRemainsQuotaResponse
     */
    public function describeMarketRemainsQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMarketRemainsQuota',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMarketRemainsQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMarketRemainsQuotaRequest $request
     *
     * @return DescribeMarketRemainsQuotaResponse
     */
    public function describeMarketRemainsQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMarketRemainsQuotaWithOptions($request, $runtime);
    }

    /**
     * The name of the model.
     *   *
     * @param DescribeModelsRequest $request DescribeModelsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeModelsResponse DescribeModelsResponse
     */
    public function describeModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeModels',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the model.
     *   *
     * @param DescribeModelsRequest $request DescribeModelsRequest
     *
     * @return DescribeModelsResponse DescribeModelsResponse
     */
    public function describeModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginApisRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePluginApisResponse
     */
    public function describePluginApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->method)) {
            $query['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePluginApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePluginApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePluginApisRequest $request
     *
     * @return DescribePluginApisResponse
     */
    public function describePluginApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginSchemasRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePluginSchemasResponse
     */
    public function describePluginSchemasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePluginSchemas',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePluginSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePluginSchemasRequest $request
     *
     * @return DescribePluginSchemasResponse
     */
    public function describePluginSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginSchemasWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePluginTemplatesResponse
     */
    public function describePluginTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pluginName)) {
            $query['PluginName'] = $request->pluginName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePluginTemplates',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePluginTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePluginTemplatesRequest $request
     *
     * @return DescribePluginTemplatesResponse
     */
    public function describePluginTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribePluginsResponse
     */
    public function describePluginsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->pluginName)) {
            $query['PluginName'] = $request->pluginName;
        }
        if (!Utils::isUnset($request->pluginType)) {
            $query['PluginType'] = $request->pluginType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlugins',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePluginsRequest $request
     *
     * @return DescribePluginsResponse
     */
    public function describePlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginsWithOptions($request, $runtime);
    }

    /**
     * *   This operation is intended for API callers.
     *   * *   This operation supports pagination.
     *   *
     * @param DescribePluginsByApiRequest $request DescribePluginsByApiRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePluginsByApiResponse DescribePluginsByApiResponse
     */
    public function describePluginsByApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePluginsByApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePluginsByApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is intended for API callers.
     *   * *   This operation supports pagination.
     *   *
     * @param DescribePluginsByApiRequest $request DescribePluginsByApiRequest
     *
     * @return DescribePluginsByApiResponse DescribePluginsByApiResponse
     */
    public function describePluginsByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginsByApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedApiGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePurchasedApiGroupResponse
     */
    public function describePurchasedApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedApiGroup',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurchasedApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePurchasedApiGroupRequest $request
     *
     * @return DescribePurchasedApiGroupResponse
     */
    public function describePurchasedApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedApiGroupsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePurchasedApiGroupsResponse
     */
    public function describePurchasedApiGroupsWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedApiGroups',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurchasedApiGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePurchasedApiGroupsRequest $request
     *
     * @return DescribePurchasedApiGroupsResponse
     */
    public function describePurchasedApiGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedApisRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePurchasedApisResponse
     */
    public function describePurchasedApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurchasedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePurchasedApisRequest $request
     *
     * @return DescribePurchasedApisResponse
     */
    public function describePurchasedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApisWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * The IDs of the keys to query.
     *   *
     * @param DescribeSignaturesRequest $request DescribeSignaturesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSignaturesResponse DescribeSignaturesResponse
     */
    public function describeSignaturesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->signatureId)) {
            $query['SignatureId'] = $request->signatureId;
        }
        if (!Utils::isUnset($request->signatureName)) {
            $query['SignatureName'] = $request->signatureName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSignatures',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSignaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The IDs of the keys to query.
     *   *
     * @param DescribeSignaturesRequest $request DescribeSignaturesRequest
     *
     * @return DescribeSignaturesResponse DescribeSignaturesResponse
     */
    public function describeSignatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignaturesWithOptions($request, $runtime);
    }

    /**
     * The ID of the group to which the API belongs.
     *   *
     * @param DescribeSignaturesByApiRequest $request DescribeSignaturesByApiRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSignaturesByApiResponse DescribeSignaturesByApiResponse
     */
    public function describeSignaturesByApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSignaturesByApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSignaturesByApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the group to which the API belongs.
     *   *
     * @param DescribeSignaturesByApiRequest $request DescribeSignaturesByApiRequest
     *
     * @return DescribeSignaturesByApiResponse DescribeSignaturesByApiResponse
     */
    public function describeSignaturesByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignaturesByApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSummaryDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSummaryDataResponse
     */
    public function describeSummaryDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeSummaryData',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSummaryDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSummaryDataRequest $request
     *
     * @return DescribeSummaryDataResponse
     */
    public function describeSummaryData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSummaryDataWithOptions($request, $runtime);
    }

    /**
     * The returned information about system parameters. It is an array that consists of SystemParam data.
     *   *
     * @param DescribeSystemParametersRequest $request DescribeSystemParametersRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSystemParametersResponse DescribeSystemParametersResponse
     */
    public function describeSystemParametersWithOptions($request, $runtime)
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
            'action'      => 'DescribeSystemParameters',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSystemParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The returned information about system parameters. It is an array that consists of SystemParam data.
     *   *
     * @param DescribeSystemParametersRequest $request DescribeSystemParametersRequest
     *
     * @return DescribeSystemParametersResponse DescribeSystemParametersResponse
     */
    public function describeSystemParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemParametersWithOptions($request, $runtime);
    }

    /**
     * The specified group ID. This parameter must be specified together with ApiId and StageName.
     *   *
     * @param DescribeTrafficControlsRequest $request DescribeTrafficControlsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTrafficControlsResponse DescribeTrafficControlsResponse
     */
    public function describeTrafficControlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        if (!Utils::isUnset($request->trafficControlName)) {
            $query['TrafficControlName'] = $request->trafficControlName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrafficControls',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrafficControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The specified group ID. This parameter must be specified together with ApiId and StageName.
     *   *
     * @param DescribeTrafficControlsRequest $request DescribeTrafficControlsRequest
     *
     * @return DescribeTrafficControlsResponse DescribeTrafficControlsResponse
     */
    public function describeTrafficControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficControlsWithOptions($request, $runtime);
    }

    /**
     * The ID of the API.
     *   *
     * @param DescribeTrafficControlsByApiRequest $request DescribeTrafficControlsByApiRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTrafficControlsByApiResponse DescribeTrafficControlsByApiResponse
     */
    public function describeTrafficControlsByApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTrafficControlsByApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTrafficControlsByApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API.
     *   *
     * @param DescribeTrafficControlsByApiRequest $request DescribeTrafficControlsByApiRequest
     *
     * @return DescribeTrafficControlsByApiResponse DescribeTrafficControlsByApiResponse
     */
    public function describeTrafficControlsByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficControlsByApiWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpdateBackendTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUpdateBackendTaskResponse
     */
    public function describeUpdateBackendTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationUid)) {
            $query['OperationUid'] = $request->operationUid;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpdateBackendTask',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpdateBackendTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUpdateBackendTaskRequest $request
     *
     * @return DescribeUpdateBackendTaskResponse
     */
    public function describeUpdateBackendTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpdateBackendTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpdateVpcInfoTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUpdateVpcInfoTaskResponse
     */
    public function describeUpdateVpcInfoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationUid)) {
            $query['OperationUid'] = $request->operationUid;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpdateVpcInfoTask',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpdateVpcInfoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUpdateVpcInfoTaskRequest $request
     *
     * @return DescribeUpdateVpcInfoTaskResponse
     */
    public function describeUpdateVpcInfoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpdateVpcInfoTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcAccessesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVpcAccessesResponse
     */
    public function describeVpcAccessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcAccessId)) {
            $query['VpcAccessId'] = $request->vpcAccessId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcAccesses',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcAccessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpcAccessesRequest $request
     *
     * @return DescribeVpcAccessesResponse
     */
    public function describeVpcAccesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcAccessesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param DetachPluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetachPluginResponse
     */
    public function detachPluginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachPlugin',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachPluginRequest $request
     *
     * @return DetachPluginResponse
     */
    public function detachPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPluginWithOptions($request, $runtime);
    }

    /**
     * @param DisableInstanceAccessControlRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DisableInstanceAccessControlResponse
     */
    public function disableInstanceAccessControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableInstanceAccessControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableInstanceAccessControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableInstanceAccessControlRequest $request
     *
     * @return DisableInstanceAccessControlResponse
     */
    public function disableInstanceAccessControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInstanceAccessControlWithOptions($request, $runtime);
    }

    /**
     * @param DryRunSwaggerRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DryRunSwaggerResponse
     */
    public function dryRunSwaggerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DryRunSwaggerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->globalCondition)) {
            $request->globalConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->globalCondition, 'GlobalCondition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $query['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->globalConditionShrink)) {
            $query['GlobalCondition'] = $request->globalConditionShrink;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $query['Overwrite'] = $request->overwrite;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DryRunSwagger',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DryRunSwaggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DryRunSwaggerRequest $request
     *
     * @return DryRunSwaggerResponse
     */
    public function dryRunSwagger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dryRunSwaggerWithOptions($request, $runtime);
    }

    /**
     * @param EnableInstanceAccessControlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableInstanceAccessControlResponse
     */
    public function enableInstanceAccessControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclType)) {
            $query['AclType'] = $request->aclType;
        }
        if (!Utils::isUnset($request->addressIPVersion)) {
            $query['AddressIPVersion'] = $request->addressIPVersion;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableInstanceAccessControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableInstanceAccessControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableInstanceAccessControlRequest $request
     *
     * @return EnableInstanceAccessControlResponse
     */
    public function enableInstanceAccessControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstanceAccessControlWithOptions($request, $runtime);
    }

    /**
     * @param ImportOASRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ImportOASResponse
     */
    public function importOASWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->backendName)) {
            $query['BackendName'] = $request->backendName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ignoreWarning)) {
            $query['IgnoreWarning'] = $request->ignoreWarning;
        }
        if (!Utils::isUnset($request->OASVersion)) {
            $query['OASVersion'] = $request->OASVersion;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $query['Overwrite'] = $request->overwrite;
        }
        if (!Utils::isUnset($request->requestMode)) {
            $query['RequestMode'] = $request->requestMode;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->skipDryRun)) {
            $query['SkipDryRun'] = $request->skipDryRun;
        }
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportOAS',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportOASResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportOASRequest $request
     *
     * @return ImportOASResponse
     */
    public function importOAS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importOASWithOptions($request, $runtime);
    }

    /**
     * 0009db9c828549768a200320714b8930.
     *   *
     * @param ImportSwaggerRequest $tmpReq  ImportSwaggerRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportSwaggerResponse ImportSwaggerResponse
     */
    public function importSwaggerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportSwaggerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->globalCondition)) {
            $request->globalConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->globalCondition, 'GlobalCondition', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dataFormat)) {
            $query['DataFormat'] = $request->dataFormat;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->globalConditionShrink)) {
            $query['GlobalCondition'] = $request->globalConditionShrink;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $query['Overwrite'] = $request->overwrite;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportSwagger',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportSwaggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 0009db9c828549768a200320714b8930.
     *   *
     * @param ImportSwaggerRequest $request ImportSwaggerRequest
     *
     * @return ImportSwaggerResponse ImportSwaggerResponse
     */
    public function importSwagger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importSwaggerWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 58928.
     *   *
     * @param ModifyApiRequest $request ModifyApiRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApiResponse ModifyApiResponse
     */
    public function modifyApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowSignatureMethod)) {
            $query['AllowSignatureMethod'] = $request->allowSignatureMethod;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->appCodeAuthType)) {
            $query['AppCodeAuthType'] = $request->appCodeAuthType;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->backendEnable)) {
            $query['BackendEnable'] = $request->backendEnable;
        }
        if (!Utils::isUnset($request->backendId)) {
            $query['BackendId'] = $request->backendId;
        }
        if (!Utils::isUnset($request->constantParameters)) {
            $query['ConstantParameters'] = $request->constantParameters;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableInternet)) {
            $query['DisableInternet'] = $request->disableInternet;
        }
        if (!Utils::isUnset($request->errorCodeSamples)) {
            $query['ErrorCodeSamples'] = $request->errorCodeSamples;
        }
        if (!Utils::isUnset($request->failResultSample)) {
            $query['FailResultSample'] = $request->failResultSample;
        }
        if (!Utils::isUnset($request->forceNonceCheck)) {
            $query['ForceNonceCheck'] = $request->forceNonceCheck;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->openIdConnectConfig)) {
            $query['OpenIdConnectConfig'] = $request->openIdConnectConfig;
        }
        if (!Utils::isUnset($request->requestConfig)) {
            $query['RequestConfig'] = $request->requestConfig;
        }
        if (!Utils::isUnset($request->requestParameters)) {
            $query['RequestParameters'] = $request->requestParameters;
        }
        if (!Utils::isUnset($request->resultBodyModel)) {
            $query['ResultBodyModel'] = $request->resultBodyModel;
        }
        if (!Utils::isUnset($request->resultDescriptions)) {
            $query['ResultDescriptions'] = $request->resultDescriptions;
        }
        if (!Utils::isUnset($request->resultSample)) {
            $query['ResultSample'] = $request->resultSample;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serviceConfig)) {
            $query['ServiceConfig'] = $request->serviceConfig;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $query['ServiceParameters'] = $request->serviceParameters;
        }
        if (!Utils::isUnset($request->serviceParametersMap)) {
            $query['ServiceParametersMap'] = $request->serviceParametersMap;
        }
        if (!Utils::isUnset($request->systemParameters)) {
            $query['SystemParameters'] = $request->systemParameters;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        if (!Utils::isUnset($request->webSocketApiType)) {
            $query['WebSocketApiType'] = $request->webSocketApiType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 58928.
     *   *
     * @param ModifyApiRequest $request ModifyApiRequest
     *
     * @return ModifyApiResponse ModifyApiResponse
     */
    public function modifyApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiWithOptions($request, $runtime);
    }

    /**
     * @param ModifyApiConfigurationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyApiConfigurationResponse
     */
    public function modifyApiConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowSignatureMethod)) {
            $query['AllowSignatureMethod'] = $request->allowSignatureMethod;
        }
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->appCodeAuthType)) {
            $query['AppCodeAuthType'] = $request->appCodeAuthType;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->backendName)) {
            $query['BackendName'] = $request->backendName;
        }
        if (!Utils::isUnset($request->bodyFormat)) {
            $query['BodyFormat'] = $request->bodyFormat;
        }
        if (!Utils::isUnset($request->bodyModel)) {
            $query['BodyModel'] = $request->bodyModel;
        }
        if (!Utils::isUnset($request->contentTypeCategory)) {
            $query['ContentTypeCategory'] = $request->contentTypeCategory;
        }
        if (!Utils::isUnset($request->contentTypeValue)) {
            $query['ContentTypeValue'] = $request->contentTypeValue;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableInternet)) {
            $query['DisableInternet'] = $request->disableInternet;
        }
        if (!Utils::isUnset($request->errorCodeSamples)) {
            $query['ErrorCodeSamples'] = $request->errorCodeSamples;
        }
        if (!Utils::isUnset($request->failResultSample)) {
            $query['FailResultSample'] = $request->failResultSample;
        }
        if (!Utils::isUnset($request->forceNonceCheck)) {
            $query['ForceNonceCheck'] = $request->forceNonceCheck;
        }
        if (!Utils::isUnset($request->functionComputeConfig)) {
            $query['FunctionComputeConfig'] = $request->functionComputeConfig;
        }
        if (!Utils::isUnset($request->httpConfig)) {
            $query['HttpConfig'] = $request->httpConfig;
        }
        if (!Utils::isUnset($request->mockConfig)) {
            $query['MockConfig'] = $request->mockConfig;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->ossConfig)) {
            $query['OssConfig'] = $request->ossConfig;
        }
        if (!Utils::isUnset($request->postBodyDescription)) {
            $query['PostBodyDescription'] = $request->postBodyDescription;
        }
        if (!Utils::isUnset($request->requestHttpMethod)) {
            $query['RequestHttpMethod'] = $request->requestHttpMethod;
        }
        if (!Utils::isUnset($request->requestMode)) {
            $query['RequestMode'] = $request->requestMode;
        }
        if (!Utils::isUnset($request->requestParameters)) {
            $query['RequestParameters'] = $request->requestParameters;
        }
        if (!Utils::isUnset($request->requestPath)) {
            $query['RequestPath'] = $request->requestPath;
        }
        if (!Utils::isUnset($request->requestProtocol)) {
            $query['RequestProtocol'] = $request->requestProtocol;
        }
        if (!Utils::isUnset($request->resultSample)) {
            $query['ResultSample'] = $request->resultSample;
        }
        if (!Utils::isUnset($request->resultType)) {
            $query['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $query['ServiceParameters'] = $request->serviceParameters;
        }
        if (!Utils::isUnset($request->serviceParametersMap)) {
            $query['ServiceParametersMap'] = $request->serviceParametersMap;
        }
        if (!Utils::isUnset($request->serviceProtocol)) {
            $query['ServiceProtocol'] = $request->serviceProtocol;
        }
        if (!Utils::isUnset($request->serviceTimeout)) {
            $query['ServiceTimeout'] = $request->serviceTimeout;
        }
        if (!Utils::isUnset($request->useBackendService)) {
            $query['UseBackendService'] = $request->useBackendService;
        }
        if (!Utils::isUnset($request->visibility)) {
            $query['Visibility'] = $request->visibility;
        }
        if (!Utils::isUnset($request->vpcConfig)) {
            $query['VpcConfig'] = $request->vpcConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApiConfiguration',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyApiConfigurationRequest $request
     *
     * @return ModifyApiConfigurationResponse
     */
    public function modifyApiConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyApiGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyApiGroupResponse
     */
    public function modifyApiGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->basePath)) {
            $query['BasePath'] = $request->basePath;
        }
        if (!Utils::isUnset($request->compatibleFlags)) {
            $query['CompatibleFlags'] = $request->compatibleFlags;
        }
        if (!Utils::isUnset($request->customTraceConfig)) {
            $query['CustomTraceConfig'] = $request->customTraceConfig;
        }
        if (!Utils::isUnset($request->customerConfigs)) {
            $query['CustomerConfigs'] = $request->customerConfigs;
        }
        if (!Utils::isUnset($request->defaultDomain)) {
            $query['DefaultDomain'] = $request->defaultDomain;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->passthroughHeaders)) {
            $query['PassthroughHeaders'] = $request->passthroughHeaders;
        }
        if (!Utils::isUnset($request->rpcPattern)) {
            $query['RpcPattern'] = $request->rpcPattern;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->supportSSE)) {
            $query['SupportSSE'] = $request->supportSSE;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->userLogConfig)) {
            $query['UserLogConfig'] = $request->userLogConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApiGroup',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyApiGroupRequest $request
     *
     * @return ModifyApiGroupResponse
     */
    public function modifyApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyApiGroupVpcWhitelistRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyApiGroupVpcWhitelistResponse
     */
    public function modifyApiGroupVpcWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcIds)) {
            $query['VpcIds'] = $request->vpcIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApiGroupVpcWhitelist',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiGroupVpcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyApiGroupVpcWhitelistRequest $request
     *
     * @return ModifyApiGroupVpcWhitelistResponse
     */
    public function modifyApiGroupVpcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupVpcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApp',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAppRequest $request
     *
     * @return ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackendRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyBackendResponse
     */
    public function modifyBackendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendId)) {
            $query['BackendId'] = $request->backendId;
        }
        if (!Utils::isUnset($request->backendName)) {
            $query['BackendName'] = $request->backendName;
        }
        if (!Utils::isUnset($request->backendType)) {
            $query['BackendType'] = $request->backendType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackend',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBackendRequest $request
     *
     * @return ModifyBackendResponse
     */
    public function modifyBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackendWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackendModelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackendModelResponse
     */
    public function modifyBackendModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendId)) {
            $query['BackendId'] = $request->backendId;
        }
        if (!Utils::isUnset($request->backendModelData)) {
            $query['BackendModelData'] = $request->backendModelData;
        }
        if (!Utils::isUnset($request->backendModelId)) {
            $query['BackendModelId'] = $request->backendModelId;
        }
        if (!Utils::isUnset($request->backendType)) {
            $query['BackendType'] = $request->backendType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackendModel',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackendModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBackendModelRequest $request
     *
     * @return ModifyBackendModelResponse
     */
    public function modifyBackendModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackendModelWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyDatasetResponse
     */
    public function modifyDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $query['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDataset',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDatasetRequest $request
     *
     * @return ModifyDatasetResponse
     */
    public function modifyDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatasetWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDatasetItemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDatasetItemResponse
     */
    public function modifyDatasetItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetItemId)) {
            $query['DatasetItemId'] = $request->datasetItemId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatasetItem',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatasetItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDatasetItemRequest $request
     *
     * @return ModifyDatasetItemResponse
     */
    public function modifyDatasetItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatasetItemWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceSpecRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->modifyAction)) {
            $query['ModifyAction'] = $request->modifyAction;
        }
        if (!Utils::isUnset($request->skipWaitSwitch)) {
            $query['SkipWaitSwitch'] = $request->skipWaitSwitch;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceSpec',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceSpecRequest $request
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * The name of the ACL. The name must be 4 to 50 characters in length, and can contain letters, digits, and underscores (\\_). The name cannot start with an underscore (\\_).
     *   *
     * @param ModifyIpControlRequest $request ModifyIpControlRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyIpControlResponse ModifyIpControlResponse
     */
    public function modifyIpControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->ipControlName)) {
            $query['IpControlName'] = $request->ipControlName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyIpControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the ACL. The name must be 4 to 50 characters in length, and can contain letters, digits, and underscores (\\_). The name cannot start with an underscore (\\_).
     *   *
     * @param ModifyIpControlRequest $request ModifyIpControlRequest
     *
     * @return ModifyIpControlResponse ModifyIpControlResponse
     */
    public function modifyIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpControlWithOptions($request, $runtime);
    }

    /**
     * The ID of the policy.
     *   *
     * @param ModifyIpControlPolicyItemRequest $request ModifyIpControlPolicyItemRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyIpControlPolicyItemResponse ModifyIpControlPolicyItemResponse
     */
    public function modifyIpControlPolicyItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->cidrIp)) {
            $query['CidrIp'] = $request->cidrIp;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->policyItemId)) {
            $query['PolicyItemId'] = $request->policyItemId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyIpControlPolicyItem',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIpControlPolicyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the policy.
     *   *
     * @param ModifyIpControlPolicyItemRequest $request ModifyIpControlPolicyItemRequest
     *
     * @return ModifyIpControlPolicyItemResponse ModifyIpControlPolicyItemResponse
     */
    public function modifyIpControlPolicyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyLogConfigResponse
     */
    public function modifyLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->slsLogStore)) {
            $query['SlsLogStore'] = $request->slsLogStore;
        }
        if (!Utils::isUnset($request->slsProject)) {
            $query['SlsProject'] = $request->slsProject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLogConfig',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLogConfigRequest $request
     *
     * @return ModifyLogConfigResponse
     */
    public function modifyLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyModelResponse
     */
    public function modifyModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->modelName)) {
            $query['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->newModelName)) {
            $query['NewModelName'] = $request->newModelName;
        }
        if (!Utils::isUnset($request->schema)) {
            $query['Schema'] = $request->schema;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyModel',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyModelRequest $request
     *
     * @return ModifyModelResponse
     */
    public function modifyModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyModelWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyPluginResponse
     */
    public function modifyPluginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->pluginData)) {
            $query['PluginData'] = $request->pluginData;
        }
        if (!Utils::isUnset($request->pluginId)) {
            $query['PluginId'] = $request->pluginId;
        }
        if (!Utils::isUnset($request->pluginName)) {
            $query['PluginName'] = $request->pluginName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPlugin',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPluginRequest $request
     *
     * @return ModifyPluginResponse
     */
    public function modifyPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPluginWithOptions($request, $runtime);
    }

    /**
     * The new name of the key. The name must be 4 to 50 characters in length and can contain letters, digits, and underscores (\\_). It must start with a letter.
     *   *
     * @param ModifySignatureRequest $request ModifySignatureRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySignatureResponse ModifySignatureResponse
     */
    public function modifySignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->signatureId)) {
            $query['SignatureId'] = $request->signatureId;
        }
        if (!Utils::isUnset($request->signatureKey)) {
            $query['SignatureKey'] = $request->signatureKey;
        }
        if (!Utils::isUnset($request->signatureName)) {
            $query['SignatureName'] = $request->signatureName;
        }
        if (!Utils::isUnset($request->signatureSecret)) {
            $query['SignatureSecret'] = $request->signatureSecret;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySignature',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The new name of the key. The name must be 4 to 50 characters in length and can contain letters, digits, and underscores (\\_). It must start with a letter.
     *   *
     * @param ModifySignatureRequest $request ModifySignatureRequest
     *
     * @return ModifySignatureResponse ModifySignatureResponse
     */
    public function modifySignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySignatureWithOptions($request, $runtime);
    }

    /**
     * The throttling policy name. The name must be 4 to 50 characters in length and can contain letters, digits, and underscores (\\_). It cannot start with an underscore.
     *   *
     * @param ModifyTrafficControlRequest $request ModifyTrafficControlRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTrafficControlResponse ModifyTrafficControlResponse
     */
    public function modifyTrafficControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiDefault)) {
            $query['ApiDefault'] = $request->apiDefault;
        }
        if (!Utils::isUnset($request->appDefault)) {
            $query['AppDefault'] = $request->appDefault;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        if (!Utils::isUnset($request->trafficControlName)) {
            $query['TrafficControlName'] = $request->trafficControlName;
        }
        if (!Utils::isUnset($request->trafficControlUnit)) {
            $query['TrafficControlUnit'] = $request->trafficControlUnit;
        }
        if (!Utils::isUnset($request->userDefault)) {
            $query['UserDefault'] = $request->userDefault;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTrafficControl',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The throttling policy name. The name must be 4 to 50 characters in length and can contain letters, digits, and underscores (\\_). It cannot start with an underscore.
     *   *
     * @param ModifyTrafficControlRequest $request ModifyTrafficControlRequest
     *
     * @return ModifyTrafficControlResponse ModifyTrafficControlResponse
     */
    public function modifyTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpcAccessAndUpdateApisRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyVpcAccessAndUpdateApisResponse
     */
    public function modifyVpcAccessAndUpdateApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->needBatchWork)) {
            $query['NeedBatchWork'] = $request->needBatchWork;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->refresh)) {
            $query['Refresh'] = $request->refresh;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcTargetHostName)) {
            $query['VpcTargetHostName'] = $request->vpcTargetHostName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcAccessAndUpdateApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcAccessAndUpdateApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVpcAccessAndUpdateApisRequest $request
     *
     * @return ModifyVpcAccessAndUpdateApisResponse
     */
    public function modifyVpcAccessAndUpdateApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcAccessAndUpdateApisWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return OpenApiGatewayServiceResponse
     */
    public function openApiGatewayServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenApiGatewayService',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return OpenApiGatewayServiceResponse
     */
    public function openApiGatewayService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiGatewayServiceWithOptions($runtime);
    }

    /**
     * @param QueryRequestLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryRequestLogsResponse
     */
    public function queryRequestLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->requestLogId)) {
            $query['RequestLogId'] = $request->requestLogId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRequestLogs',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRequestLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRequestLogsRequest $request
     *
     * @return QueryRequestLogsResponse
     */
    public function queryRequestLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRequestLogsWithOptions($request, $runtime);
    }

    /**
     * The ID of the API group to which the domain name is bound. This ID is generated by the system and globally unique.
     *   *
     * @param ReactivateDomainRequest $request ReactivateDomainRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ReactivateDomainResponse ReactivateDomainResponse
     */
    public function reactivateDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReactivateDomain',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReactivateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API group to which the domain name is bound. This ID is generated by the system and globally unique.
     *   *
     * @param ReactivateDomainRequest $request ReactivateDomainRequest
     *
     * @return ReactivateDomainResponse ReactivateDomainResponse
     */
    public function reactivateDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reactivateDomainWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAccessControlListEntryRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveAccessControlListEntryResponse
     */
    public function removeAccessControlListEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclEntrys)) {
            $query['AclEntrys'] = $request->aclEntrys;
        }
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAccessControlListEntry',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAccessControlListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAccessControlListEntryRequest $request
     *
     * @return RemoveAccessControlListEntryResponse
     */
    public function removeAccessControlListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAccessControlListEntryWithOptions($request, $runtime);
    }

    /**
     * The ID of the app. The ID is generated by the system and globally unique.
     *   *
     * @param RemoveApisAuthoritiesRequest $request RemoveApisAuthoritiesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveApisAuthoritiesResponse RemoveApisAuthoritiesResponse
     */
    public function removeApisAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveApisAuthorities',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveApisAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the app. The ID is generated by the system and globally unique.
     *   *
     * @param RemoveApisAuthoritiesRequest $request RemoveApisAuthoritiesRequest
     *
     * @return RemoveApisAuthoritiesResponse RemoveApisAuthoritiesResponse
     */
    public function removeApisAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApisAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * The ID of the API. This ID is generated by the system and globally unique.
     *   *
     * @param RemoveAppsAuthoritiesRequest $request RemoveAppsAuthoritiesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveAppsAuthoritiesResponse RemoveAppsAuthoritiesResponse
     */
    public function removeAppsAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAppsAuthorities',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAppsAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API. This ID is generated by the system and globally unique.
     *   *
     * @param RemoveAppsAuthoritiesRequest $request RemoveAppsAuthoritiesRequest
     *
     * @return RemoveAppsAuthoritiesResponse RemoveAppsAuthoritiesResponse
     */
    public function removeAppsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAppsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * The ID of the API group containing the API to be managed.
     *   *
     * @param RemoveIpControlApisRequest $request RemoveIpControlApisRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveIpControlApisResponse RemoveIpControlApisResponse
     */
    public function removeIpControlApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveIpControlApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveIpControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API group containing the API to be managed.
     *   *
     * @param RemoveIpControlApisRequest $request RemoveIpControlApisRequest
     *
     * @return RemoveIpControlApisResponse RemoveIpControlApisResponse
     */
    public function removeIpControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpControlApisWithOptions($request, $runtime);
    }

    /**
     * The ID of a policy. Separate multiple IDs with semicolons (;). A maximum of 100 IDs can be entered.
     *   *
     * @param RemoveIpControlPolicyItemRequest $request RemoveIpControlPolicyItemRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveIpControlPolicyItemResponse RemoveIpControlPolicyItemResponse
     */
    public function removeIpControlPolicyItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->policyItemIds)) {
            $query['PolicyItemIds'] = $request->policyItemIds;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveIpControlPolicyItem',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveIpControlPolicyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of a policy. Separate multiple IDs with semicolons (;). A maximum of 100 IDs can be entered.
     *   *
     * @param RemoveIpControlPolicyItemRequest $request RemoveIpControlPolicyItemRequest
     *
     * @return RemoveIpControlPolicyItemResponse RemoveIpControlPolicyItemResponse
     */
    public function removeIpControlPolicyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * The ID of the signature key.
     *   *
     * @param RemoveSignatureApisRequest $request RemoveSignatureApisRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveSignatureApisResponse RemoveSignatureApisResponse
     */
    public function removeSignatureApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->signatureId)) {
            $query['SignatureId'] = $request->signatureId;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveSignatureApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSignatureApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the signature key.
     *   *
     * @param RemoveSignatureApisRequest $request RemoveSignatureApisRequest
     *
     * @return RemoveSignatureApisResponse RemoveSignatureApisResponse
     */
    public function removeSignatureApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSignatureApisWithOptions($request, $runtime);
    }

    /**
     * The ID of the API group containing the APIs from which you want to unbind a specified throttling policy.
     *   *
     * @param RemoveTrafficControlApisRequest $request RemoveTrafficControlApisRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveTrafficControlApisResponse RemoveTrafficControlApisResponse
     */
    public function removeTrafficControlApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTrafficControlApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTrafficControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API group containing the APIs from which you want to unbind a specified throttling policy.
     *   *
     * @param RemoveTrafficControlApisRequest $request RemoveTrafficControlApisRequest
     *
     * @return RemoveTrafficControlApisResponse RemoveTrafficControlApisResponse
     */
    public function removeTrafficControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTrafficControlApisWithOptions($request, $runtime);
    }

    /**
     * @param RemoveVpcAccessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveVpcAccessResponse
     */
    public function removeVpcAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->needBatchWork)) {
            $query['NeedBatchWork'] = $request->needBatchWork;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveVpcAccess',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveVpcAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveVpcAccessRequest $request
     *
     * @return RemoveVpcAccessResponse
     */
    public function removeVpcAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVpcAccessWithOptions($request, $runtime);
    }

    /**
     * @param RemoveVpcAccessAndAbolishApisRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RemoveVpcAccessAndAbolishApisResponse
     */
    public function removeVpcAccessAndAbolishApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->needBatchWork)) {
            $query['NeedBatchWork'] = $request->needBatchWork;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveVpcAccessAndAbolishApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveVpcAccessAndAbolishApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveVpcAccessAndAbolishApisRequest $request
     *
     * @return RemoveVpcAccessAndAbolishApisResponse
     */
    public function removeVpcAccessAndAbolishApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVpcAccessAndAbolishApisWithOptions($request, $runtime);
    }

    /**
     * The new AppCode takes effect about 2 seconds after you call this operation.
     *   *
     * @param ResetAppCodeRequest $request ResetAppCodeRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAppCodeResponse ResetAppCodeResponse
     */
    public function resetAppCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCode)) {
            $query['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->newAppCode)) {
            $query['NewAppCode'] = $request->newAppCode;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAppCode',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The new AppCode takes effect about 2 seconds after you call this operation.
     *   *
     * @param ResetAppCodeRequest $request ResetAppCodeRequest
     *
     * @return ResetAppCodeResponse ResetAppCodeResponse
     */
    public function resetAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppCodeWithOptions($request, $runtime);
    }

    /**
     * *   This operation is intended for API callers.
     *   * *   A new secret is automatically generated after you have called this operation. This secret cannot be customized.
     *   * *   The results returned by this operation do not contain the application secret. You can obtain the secret by calling DescribeAppSecurity.
     *   *
     * @param ResetAppSecretRequest $request ResetAppSecretRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAppSecretResponse ResetAppSecretResponse
     */
    public function resetAppSecretWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->newAppKey)) {
            $query['NewAppKey'] = $request->newAppKey;
        }
        if (!Utils::isUnset($request->newAppSecret)) {
            $query['NewAppSecret'] = $request->newAppSecret;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAppSecret',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAppSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This operation is intended for API callers.
     *   * *   A new secret is automatically generated after you have called this operation. This secret cannot be customized.
     *   * *   The results returned by this operation do not contain the application secret. You can obtain the secret by calling DescribeAppSecurity.
     *   *
     * @param ResetAppSecretRequest $request ResetAppSecretRequest
     *
     * @return ResetAppSecretResponse ResetAppSecretResponse
     */
    public function resetAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppSecretWithOptions($request, $runtime);
    }

    /**
     * @param SdkGenerateByAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SdkGenerateByAppResponse
     */
    public function sdkGenerateByAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkGenerateByApp',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkGenerateByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkGenerateByAppRequest $request
     *
     * @return SdkGenerateByAppResponse
     */
    public function sdkGenerateByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByAppWithOptions($request, $runtime);
    }

    /**
     * @param SdkGenerateByAppForRegionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SdkGenerateByAppForRegionResponse
     */
    public function sdkGenerateByAppForRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkGenerateByAppForRegion',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkGenerateByAppForRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkGenerateByAppForRegionRequest $request
     *
     * @return SdkGenerateByAppForRegionResponse
     */
    public function sdkGenerateByAppForRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByAppForRegionWithOptions($request, $runtime);
    }

    /**
     * @param SdkGenerateByGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SdkGenerateByGroupResponse
     */
    public function sdkGenerateByGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SdkGenerateByGroup',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SdkGenerateByGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SdkGenerateByGroupRequest $request
     *
     * @return SdkGenerateByGroupResponse
     */
    public function sdkGenerateByGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByGroupWithOptions($request, $runtime);
    }

    /**
     * @param SetAccessControlListAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetAccessControlListAttributeResponse
     */
    public function setAccessControlListAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aclId)) {
            $query['AclId'] = $request->aclId;
        }
        if (!Utils::isUnset($request->aclName)) {
            $query['AclName'] = $request->aclName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccessControlListAttribute',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAccessControlListAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetAccessControlListAttributeRequest $request
     *
     * @return SetAccessControlListAttributeResponse
     */
    public function setAccessControlListAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessControlListAttributeWithOptions($request, $runtime);
    }

    /**
     * The ID of the app. This ID is generated by the system and globally unique.
     *   *
     * @param SetApisAuthoritiesRequest $request SetApisAuthoritiesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetApisAuthoritiesResponse SetApisAuthoritiesResponse
     */
    public function setApisAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->authValidTime)) {
            $query['AuthValidTime'] = $request->authValidTime;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetApisAuthorities',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetApisAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the app. This ID is generated by the system and globally unique.
     *   *
     * @param SetApisAuthoritiesRequest $request SetApisAuthoritiesRequest
     *
     * @return SetApisAuthoritiesResponse SetApisAuthoritiesResponse
     */
    public function setApisAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApisAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * The ID of the API. This ID is generated by the system and globally unique.
     *   *
     * @param SetAppsAuthoritiesRequest $request SetAppsAuthoritiesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAppsAuthoritiesResponse SetAppsAuthoritiesResponse
     */
    public function setAppsAuthoritiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->authValidTime)) {
            $query['AuthValidTime'] = $request->authValidTime;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAppsAuthorities',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAppsAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API. This ID is generated by the system and globally unique.
     *   *
     * @param SetAppsAuthoritiesRequest $request SetAppsAuthoritiesRequest
     *
     * @return SetAppsAuthoritiesResponse SetAppsAuthoritiesResponse
     */
    public function setAppsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @param SetDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SetDomainResponse
     */
    public function setDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bindStageName)) {
            $query['BindStageName'] = $request->bindStageName;
        }
        if (!Utils::isUnset($request->customDomainType)) {
            $query['CustomDomainType'] = $request->customDomainType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isForce)) {
            $query['IsForce'] = $request->isForce;
        }
        if (!Utils::isUnset($request->isHttpRedirectToHttps)) {
            $query['IsHttpRedirectToHttps'] = $request->isHttpRedirectToHttps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomain',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDomainRequest $request
     *
     * @return SetDomainResponse
     */
    public function setDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainWithOptions($request, $runtime);
    }

    /**
     * 382271.
     *   *
     * @param SetDomainCertificateRequest $request SetDomainCertificateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDomainCertificateResponse SetDomainCertificateResponse
     */
    public function setDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caCertificateBody)) {
            $query['CaCertificateBody'] = $request->caCertificateBody;
        }
        if (!Utils::isUnset($request->certificateBody)) {
            $query['CertificateBody'] = $request->certificateBody;
        }
        if (!Utils::isUnset($request->certificateName)) {
            $query['CertificateName'] = $request->certificateName;
        }
        if (!Utils::isUnset($request->certificatePrivateKey)) {
            $query['CertificatePrivateKey'] = $request->certificatePrivateKey;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sslVerifyDepth)) {
            $query['SslVerifyDepth'] = $request->sslVerifyDepth;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainCertificate',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 382271.
     *   *
     * @param SetDomainCertificateRequest $request SetDomainCertificateRequest
     *
     * @return SetDomainCertificateResponse SetDomainCertificateResponse
     */
    public function setDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetDomainWebSocketStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDomainWebSocketStatusResponse
     */
    public function setDomainWebSocketStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionValue)) {
            $query['ActionValue'] = $request->actionValue;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->WSSEnable)) {
            $query['WSSEnable'] = $request->WSSEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainWebSocketStatus',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainWebSocketStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDomainWebSocketStatusRequest $request
     *
     * @return SetDomainWebSocketStatusResponse
     */
    public function setDomainWebSocketStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainWebSocketStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetGroupAuthAppCodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetGroupAuthAppCodeResponse
     */
    public function setGroupAuthAppCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authAppCode)) {
            $query['AuthAppCode'] = $request->authAppCode;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGroupAuthAppCode',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGroupAuthAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGroupAuthAppCodeRequest $request
     *
     * @return SetGroupAuthAppCodeResponse
     */
    public function setGroupAuthAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupAuthAppCodeWithOptions($request, $runtime);
    }

    /**
     * The ID of the API group.
     *   *
     * @param SetIpControlApisRequest $request SetIpControlApisRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetIpControlApisResponse SetIpControlApisResponse
     */
    public function setIpControlApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ipControlId)) {
            $query['IpControlId'] = $request->ipControlId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetIpControlApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetIpControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API group.
     *   *
     * @param SetIpControlApisRequest $request SetIpControlApisRequest
     *
     * @return SetIpControlApisResponse SetIpControlApisResponse
     */
    public function setIpControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIpControlApisWithOptions($request, $runtime);
    }

    /**
     * The ID of the signature key.
     *   *
     * @param SetSignatureApisRequest $request SetSignatureApisRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetSignatureApisResponse SetSignatureApisResponse
     */
    public function setSignatureApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->signatureId)) {
            $query['SignatureId'] = $request->signatureId;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSignatureApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSignatureApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the signature key.
     *   *
     * @param SetSignatureApisRequest $request SetSignatureApisRequest
     *
     * @return SetSignatureApisResponse SetSignatureApisResponse
     */
    public function setSignatureApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSignatureApisWithOptions($request, $runtime);
    }

    /**
     * The ID of the API group containing the APIs to which you want to bind a specified throttling policy.
     *   *
     * @param SetTrafficControlApisRequest $request SetTrafficControlApisRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetTrafficControlApisResponse SetTrafficControlApisResponse
     */
    public function setTrafficControlApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiIds)) {
            $query['ApiIds'] = $request->apiIds;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        if (!Utils::isUnset($request->trafficControlId)) {
            $query['TrafficControlId'] = $request->trafficControlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetTrafficControlApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetTrafficControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API group containing the APIs to which you want to bind a specified throttling policy.
     *   *
     * @param SetTrafficControlApisRequest $request SetTrafficControlApisRequest
     *
     * @return SetTrafficControlApisResponse SetTrafficControlApisResponse
     */
    public function setTrafficControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTrafficControlApisWithOptions($request, $runtime);
    }

    /**
     * @param SetVpcAccessRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetVpcAccessResponse
     */
    public function setVpcAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcTargetHostName)) {
            $query['VpcTargetHostName'] = $request->vpcTargetHostName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetVpcAccess',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetVpcAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetVpcAccessRequest $request
     *
     * @return SetVpcAccessResponse
     */
    public function setVpcAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVpcAccessWithOptions($request, $runtime);
    }

    /**
     * @param SetWildcardDomainPatternsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetWildcardDomainPatternsResponse
     */
    public function setWildcardDomainPatternsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->wildcardDomainPatterns)) {
            $query['WildcardDomainPatterns'] = $request->wildcardDomainPatterns;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetWildcardDomainPatterns',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetWildcardDomainPatternsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetWildcardDomainPatternsRequest $request
     *
     * @return SetWildcardDomainPatternsResponse
     */
    public function setWildcardDomainPatterns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWildcardDomainPatternsWithOptions($request, $runtime);
    }

    /**
     * The ID of the API.
     *   *
     * @param SwitchApiRequest $request SwitchApiRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchApiResponse SwitchApiResponse
     */
    public function switchApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->historyVersion)) {
            $query['HistoryVersion'] = $request->historyVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->stageName)) {
            $query['StageName'] = $request->stageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchApi',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the API.
     *   *
     * @param SwitchApiRequest $request SwitchApiRequest
     *
     * @return SwitchApiResponse SwitchApiResponse
     */
    public function switchApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchApiWithOptions($request, $runtime);
    }

    /**
     * The key of tag N.
     *   * Valid values of N: `1 to 20.`.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The key of tag N.
     *   * Valid values of N: `1 to 20.`.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Specifies whether to delete all tags. This parameter is valid only when the **TagKey.N**parameter is not specified. Default value: false. Valid values:
     *   * *   **true**
     *   * *   **false**.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies whether to delete all tags. This parameter is valid only when the **TagKey.N**parameter is not specified. Default value: false. Valid values:
     *   * *   **true**
     *   * *   **false**.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ValidateVpcConnectivityRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ValidateVpcConnectivityResponse
     */
    public function validateVpcConnectivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcAccessId)) {
            $query['VpcAccessId'] = $request->vpcAccessId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateVpcConnectivity',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateVpcConnectivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateVpcConnectivityRequest $request
     *
     * @return ValidateVpcConnectivityResponse
     */
    public function validateVpcConnectivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateVpcConnectivityWithOptions($request, $runtime);
    }
}
