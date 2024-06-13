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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachApiProductRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachApiProductResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppCodeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppCodeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppKeyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppKeyResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiProductRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiProductResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiStageVariableRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiStageVariableResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppCodeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppCodeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppKeyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppKeyResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductsByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductsByAppResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByVpcAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByVpcAccessResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisWithStageNameIntegratedByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisWithStageNameIntegratedByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsByApiProductRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsByApiProductResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecuritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecuritiesResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupLatencyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupLatencyResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupQpsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupQpsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupTrafficRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupTrafficResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterInfoRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterInfoResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterListRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceClusterListResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachApiProductRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachApiProductResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupNetworkPolicyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupNetworkPolicyResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceAttributeShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceSpecRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceSpecResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIntranetDomainPolicyRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIntranetDomainPolicyResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveApiProductsAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveApiProductsAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveApiProductsAuthoritiesShrinkRequest;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApiProductsAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApiProductsAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApiProductsAuthoritiesShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApisAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApisAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthToApiProductRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthToApiProductResponse;
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
            'cn-qingdao'                  => 'apigateway.cn-qingdao.aliyuncs.com',
            'cn-beijing'                  => 'apigateway.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou'              => 'apigateway.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote'                => 'apigateway.cn-huhehaote.aliyuncs.com',
            'cn-wulanchabu'               => 'apigateway.cn-wulanchabu.aliyuncs.com',
            'cn-hangzhou'                 => 'apigateway.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'                 => 'apigateway.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'                 => 'apigateway.cn-shenzhen.aliyuncs.com',
            'cn-heyuan'                   => 'apigateway.cn-heyuan.aliyuncs.com',
            'cn-guangzhou'                => 'apigateway.cn-guangzhou.aliyuncs.com',
            'cn-chengdu'                  => 'apigateway.cn-chengdu.aliyuncs.com',
            'cn-hongkong'                 => 'apigateway.cn-hongkong.aliyuncs.com',
            'ap-northeast-1'              => 'apigateway.ap-northeast-1.aliyuncs.com',
            'ap-southeast-1'              => 'apigateway.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'apigateway.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'              => 'apigateway.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'              => 'apigateway.ap-southeast-5.aliyuncs.com',
            'ap-southeast-6'              => 'apigateway.ap-southeast-6.aliyuncs.com',
            'ap-southeast-7'              => 'apigateway.ap-southeast-7.aliyuncs.com',
            'us-east-1'                   => 'apigateway.us-east-1.aliyuncs.com',
            'us-west-1'                   => 'apigateway.us-west-1.aliyuncs.com',
            'eu-west-1'                   => 'apigateway.eu-west-1.aliyuncs.com',
            'eu-central-1'                => 'apigateway.eu-central-1.aliyuncs.com',
            'ap-south-1'                  => 'apigateway.ap-south-1.aliyuncs.com',
            'me-east-1'                   => 'apigateway.me-east-1.aliyuncs.com',
            'me-central-1'                => 'apigateway.me-central-1.aliyuncs.com',
            'cn-hangzhou-finance'         => 'apigateway.cn-hangzhou-finance.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'apigateway.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'apigateway.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-north-2-gov-1'            => 'apigateway.cn-north-2-gov-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'apigateway.aliyuncs.com',
            'cn-beijing-finance-1'        => 'apigateway.cn-beijing-finance-1.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'apigateway.aliyuncs.com',
            'cn-beijing-gov-1'            => 'apigateway.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'apigateway.aliyuncs.com',
            'cn-edge-1'                   => 'apigateway.aliyuncs.com',
            'cn-fujian'                   => 'apigateway.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'apigateway.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'apigateway.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'apigateway.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'apigateway.aliyuncs.com',
            'cn-qingdao-nebula'           => 'apigateway.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'apigateway.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'apigateway.aliyuncs.com',
            'cn-shanghai-inner'           => 'apigateway.cn-shanghai-inner.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'apigateway.aliyuncs.com',
            'cn-shenzhen-inner'           => 'apigateway.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'apigateway.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'apigateway.aliyuncs.com',
            'cn-wuhan'                    => 'apigateway.aliyuncs.com',
            'cn-yushanfang'               => 'apigateway.aliyuncs.com',
            'cn-zhangbei'                 => 'apigateway.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'apigateway.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'apigateway.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'apigateway.aliyuncs.com',
            'eu-west-1-oxs'               => 'apigateway.aliyuncs.com',
            'rus-west-1-pop'              => 'apigateway.aliyuncs.com',
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
     * @summary Unpublishes a specified API from a specified runtime environment.
     *  *
     * @description *   This operation is intended for API providers and is the opposite of DeployApi.
     * *   An API can be unpublished from a specified runtime environment in under 5 seconds.
     * *   An unpublished API cannot be called in the specified runtime environment.
     *  *
     * @param AbolishApiRequest $request AbolishApiRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AbolishApiResponse AbolishApiResponse
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
     * @summary Unpublishes a specified API from a specified runtime environment.
     *  *
     * @description *   This operation is intended for API providers and is the opposite of DeployApi.
     * *   An API can be unpublished from a specified runtime environment in under 5 seconds.
     * *   An unpublished API cannot be called in the specified runtime environment.
     *  *
     * @param AbolishApiRequest $request AbolishApiRequest
     *
     * @return AbolishApiResponse AbolishApiResponse
     */
    public function abolishApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishApiWithOptions($request, $runtime);
    }

    /**
     * @summary This feature provides instance-level access control capabilities for dedicated instances. Adds an IP address entry to the access control polocy of an instance.
     *  *
     * @param AddAccessControlListEntryRequest $request AddAccessControlListEntryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAccessControlListEntryResponse AddAccessControlListEntryResponse
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
     * @summary This feature provides instance-level access control capabilities for dedicated instances. Adds an IP address entry to the access control polocy of an instance.
     *  *
     * @param AddAccessControlListEntryRequest $request AddAccessControlListEntryRequest
     *
     * @return AddAccessControlListEntryResponse AddAccessControlListEntryResponse
     */
    public function addAccessControlListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAccessControlListEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a policy to an existing ACL.
     *  *
     * @description When you call this operation, note that:
     * *   This operation is intended for API providers.
     * *   An added policy immediately takes effect on all APIs that are bound to the access control list (ACL).
     * *   A maximum of 100 policies can be added to an ACL.
     *  *
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
     * @summary Adds a policy to an existing ACL.
     *  *
     * @description When you call this operation, note that:
     * *   This operation is intended for API providers.
     * *   An added policy immediately takes effect on all APIs that are bound to the access control list (ACL).
     * *   A maximum of 100 policies can be added to an ACL.
     *  *
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
     * @summary Adds a custom special policy to a specified throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   If the input SpecialKey already exists, the previous configuration is overwritten. Use caution when calling this operation.
     * *   Special throttling policies must be added to an existing throttling policy, and can take effect on all the APIs to which the throttling policy is bound.
     *  *
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
     * @summary Adds a custom special policy to a specified throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   If the input SpecialKey already exists, the previous configuration is overwritten. Use caution when calling this operation.
     * *   Special throttling policies must be added to an existing throttling policy, and can take effect on all the APIs to which the throttling policy is bound.
     *  *
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
     * @summary Attaches APIs to an API product. If the API product does not exist, the system automatically creates the API product.
     *  *
     * @param AttachApiProductRequest $request AttachApiProductRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachApiProductResponse AttachApiProductResponse
     */
    public function attachApiProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiProductId)) {
            $query['ApiProductId'] = $request->apiProductId;
        }
        if (!Utils::isUnset($request->apis)) {
            $query['Apis'] = $request->apis;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachApiProduct',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Attaches APIs to an API product. If the API product does not exist, the system automatically creates the API product.
     *  *
     * @param AttachApiProductRequest $request AttachApiProductRequest
     *
     * @return AttachApiProductResponse AttachApiProductResponse
     */
    public function attachApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachApiProductWithOptions($request, $runtime);
    }

    /**
     * @summary Binds a plug-in to an API.
     *  *
     * @description *   This operation is intended for API providers.
     * *   You can only bind plug-ins to published APIs.
     * *   The plug-in takes effect immediately after it is bound to an API.
     * *   If you bind a different plug-in to an API, this plug-in takes effect immediately.
     *  *
     * @param AttachPluginRequest $request AttachPluginRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachPluginResponse AttachPluginResponse
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
     * @summary Binds a plug-in to an API.
     *  *
     * @description *   This operation is intended for API providers.
     * *   You can only bind plug-ins to published APIs.
     * *   The plug-in takes effect immediately after it is bound to an API.
     * *   If you bind a different plug-in to an API, this plug-in takes effect immediately.
     *  *
     * @param AttachPluginRequest $request AttachPluginRequest
     *
     * @return AttachPluginResponse AttachPluginResponse
     */
    public function attachPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPluginWithOptions($request, $runtime);
    }

    /**
     * @summary Unpublishes multiple published APIs at a time.
     *  *
     * @param BatchAbolishApisRequest $request BatchAbolishApisRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchAbolishApisResponse BatchAbolishApisResponse
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
     * @summary Unpublishes multiple published APIs at a time.
     *  *
     * @param BatchAbolishApisRequest $request BatchAbolishApisRequest
     *
     * @return BatchAbolishApisResponse BatchAbolishApisResponse
     */
    public function batchAbolishApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAbolishApisWithOptions($request, $runtime);
    }

    /**
     * @summary Publishes multiple APIs at a time.
     *  *
     * @param BatchDeployApisRequest $request BatchDeployApisRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeployApisResponse BatchDeployApisResponse
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
     * @summary Publishes multiple APIs at a time.
     *  *
     * @param BatchDeployApisRequest $request BatchDeployApisRequest
     *
     * @return BatchDeployApisResponse BatchDeployApisResponse
     */
    public function batchDeployApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeployApisWithOptions($request, $runtime);
    }

    /**
     * @summary This feature provides instance-level access control capabilities for dedicated instances. Creates an Access Control List (ACL). Each user is allowed to create five ACLs in each region.
     *  *
     * @param CreateAccessControlListRequest $request CreateAccessControlListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessControlListResponse CreateAccessControlListResponse
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
     * @summary This feature provides instance-level access control capabilities for dedicated instances. Creates an Access Control List (ACL). Each user is allowed to create five ACLs in each region.
     *  *
     * @param CreateAccessControlListRequest $request CreateAccessControlListRequest
     *
     * @return CreateAccessControlListResponse CreateAccessControlListResponse
     */
    public function createAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessControlListWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an API.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The name of an API must be unique within an API group.
     * *   A request path must be unique within an API group.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Creates an API.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The name of an API must be unique within an API group.
     * *   A request path must be unique within an API group.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @param CreateApiGroupRequest $request CreateApiGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApiGroupResponse CreateApiGroupResponse
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
     * @param CreateApiGroupRequest $request CreateApiGroupRequest
     *
     * @return CreateApiGroupResponse CreateApiGroupResponse
     */
    public function createApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a variable to an environment.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
     * @param CreateApiStageVariableRequest $request CreateApiStageVariableRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApiStageVariableResponse CreateApiStageVariableResponse
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
     * @summary Adds a variable to an environment.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
     * @param CreateApiStageVariableRequest $request CreateApiStageVariableRequest
     *
     * @return CreateApiStageVariableResponse CreateApiStageVariableResponse
     */
    public function createApiStageVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiStageVariableWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application for calling APIs in API Gateway.
     *  *
     * @description *   This operation is intended for API callers.
     * *   Each application has a key-value pair which is used for identity verification when you call an API.
     * *   An application must be authorized to call an API.
     * *   Each application has only one key-value pair, which can be reset if the pair is leaked.
     * *   A maximum of 1,000 applications can be created for each Alibaba Cloud account.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppResponse CreateAppResponse
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
     * @summary Creates an application for calling APIs in API Gateway.
     *  *
     * @description *   This operation is intended for API callers.
     * *   Each application has a key-value pair which is used for identity verification when you call an API.
     * *   An application must be authorized to call an API.
     * *   Each application has only one key-value pair, which can be reset if the pair is leaked.
     * *   A maximum of 1,000 applications can be created for each Alibaba Cloud account.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @summary 创建新的AppCode
     *  *
     * @param CreateAppCodeRequest $request CreateAppCodeRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppCodeResponse CreateAppCodeResponse
     */
    public function createAppCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCode)) {
            $query['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppCode',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建新的AppCode
     *  *
     * @param CreateAppCodeRequest $request CreateAppCodeRequest
     *
     * @return CreateAppCodeResponse CreateAppCodeResponse
     */
    public function createAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 创建新的AK、SK
     *  *
     * @param CreateAppKeyRequest $request CreateAppKeyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppKeyResponse CreateAppKeyResponse
     */
    public function createAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $query['AppSecret'] = $request->appSecret;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppKey',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建新的AK、SK
     *  *
     * @param CreateAppKeyRequest $request CreateAppKeyRequest
     *
     * @return CreateAppKeyResponse CreateAppKeyResponse
     */
    public function createAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 创建后端服务
     *  *
     * @param CreateBackendRequest $request CreateBackendRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackendResponse CreateBackendResponse
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
        if (!Utils::isUnset($request->createSlr)) {
            $query['CreateSlr'] = $request->createSlr;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
     * @summary 创建后端服务
     *  *
     * @param CreateBackendRequest $request CreateBackendRequest
     *
     * @return CreateBackendResponse CreateBackendResponse
     */
    public function createBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackendWithOptions($request, $runtime);
    }

    /**
     * @summary 创建后端服务在环境上的配置
     *  *
     * @param CreateBackendModelRequest $request CreateBackendModelRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBackendModelResponse CreateBackendModelResponse
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
     * @summary 创建后端服务在环境上的配置
     *  *
     * @param CreateBackendModelRequest $request CreateBackendModelRequest
     *
     * @return CreateBackendModelResponse CreateBackendModelResponse
     */
    public function createBackendModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackendModelWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom dataset.
     *  *
     * @param CreateDatasetRequest $request CreateDatasetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatasetResponse CreateDatasetResponse
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Creates a custom dataset.
     *  *
     * @param CreateDatasetRequest $request CreateDatasetRequest
     *
     * @return CreateDatasetResponse CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary 创建自定义数据集条目
     *  *
     * @param CreateDatasetItemRequest $request CreateDatasetItemRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatasetItemResponse CreateDatasetItemResponse
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
     * @summary 创建自定义数据集条目
     *  *
     * @param CreateDatasetItemRequest $request CreateDatasetItemRequest
     *
     * @return CreateDatasetItemResponse CreateDatasetItemResponse
     */
    public function createDatasetItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetItemWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an API Gateway instance.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
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
     * @summary Creates an API Gateway instance.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateIntranetDomainRequest $request CreateIntranetDomainRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIntranetDomainResponse CreateIntranetDomainResponse
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
     * @param CreateIntranetDomainRequest $request CreateIntranetDomainRequest
     *
     * @return CreateIntranetDomainResponse CreateIntranetDomainResponse
     */
    public function createIntranetDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntranetDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an access control list (ACL) in a region.
     *  *
     * @description *   This operation is intended for API providers.
     * *   An ACL must be bound to an API to take effect. After an ACL is bound to an API, the ACL takes effect on the API immediately.
     * *   You can add policies to an ACL when you create the ACL.
     * *   If an ACL does not have any policy, the ACL is ineffective.
     *  *
     * @param CreateIpControlRequest $request CreateIpControlRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIpControlResponse CreateIpControlResponse
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
     * @summary Creates an access control list (ACL) in a region.
     *  *
     * @description *   This operation is intended for API providers.
     * *   An ACL must be bound to an API to take effect. After an ACL is bound to an API, the ACL takes effect on the API immediately.
     * *   You can add policies to an ACL when you create the ACL.
     * *   If an ACL does not have any policy, the ACL is ineffective.
     *  *
     * @param CreateIpControlRequest $request CreateIpControlRequest
     *
     * @return CreateIpControlResponse CreateIpControlResponse
     */
    public function createIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpControlWithOptions($request, $runtime);
    }

    /**
     * @param CreateLogConfigRequest $request CreateLogConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLogConfigResponse CreateLogConfigResponse
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
     * @param CreateLogConfigRequest $request CreateLogConfigRequest
     *
     * @return CreateLogConfigResponse CreateLogConfigResponse
     */
    public function createLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a model for an API group.
     *  *
     * @description *   For more information about the model definition, see [JSON Schema Draft 4](https://tools.ietf.org/html/draft-zyp-json-schema-04?spm=a2c4g.11186623.2.10.2e977ff7p4BpQd).
     * *   JSON Schema supports only element attributes of the Object type.
     *  *
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Creates a model for an API group.
     *  *
     * @description *   For more information about the model definition, see [JSON Schema Draft 4](https://tools.ietf.org/html/draft-zyp-json-schema-04?spm=a2c4g.11186623.2.10.2e977ff7p4BpQd).
     * *   JSON Schema supports only element attributes of the Object type.
     *  *
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
     * @summary Enables CloudMonitor alerting for a specified API group.
     *  *
     * @param CreateMonitorGroupRequest $request CreateMonitorGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMonitorGroupResponse CreateMonitorGroupResponse
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
     * @summary Enables CloudMonitor alerting for a specified API group.
     *  *
     * @param CreateMonitorGroupRequest $request CreateMonitorGroupRequest
     *
     * @return CreateMonitorGroupResponse CreateMonitorGroupResponse
     */
    public function createMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a plug-in.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The number of plug-ins of the same type that each user can create is limited. Different limits apply to different plug-in types.
     * *   The plug-in definitions for advanced features are restricted.
     * *   Plug-ins must be bound to APIs to take effect. After a plug-in is bound, it takes effect on that API immediately.
     *  *
     * @param CreatePluginRequest $request CreatePluginRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePluginResponse CreatePluginResponse
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
     * @summary Creates a plug-in.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The number of plug-ins of the same type that each user can create is limited. Different limits apply to different plug-in types.
     * *   The plug-in definitions for advanced features are restricted.
     * *   Plug-ins must be bound to APIs to take effect. After a plug-in is bound, it takes effect on that API immediately.
     *  *
     * @param CreatePluginRequest $request CreatePluginRequest
     *
     * @return CreatePluginResponse CreatePluginResponse
     */
    public function createPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPluginWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a backend signature key.
     *  *
     * @description *   This API is intended for API providers.
     * *   The API operation only creates a key policy. You must call the binding operation to bind the key to an API.
     * *   After the key is bound to the API, requests sent from API Gateway to the backend service contain signature strings. You can specify whether your backend service verifies these signature strings.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Creates a backend signature key.
     *  *
     * @description *   This API is intended for API providers.
     * *   The API operation only creates a key policy. You must call the binding operation to bind the key to an API.
     * *   After the key is bound to the API, requests sent from API Gateway to the backend service contain signature strings. You can specify whether your backend service verifies these signature strings.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Creates a custom throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   Throttling policies must be bound to APIs to take effect. After a policy is bound to an API, it goes into effect on that API immediately.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Creates a custom throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   Throttling policies must be bound to APIs to take effect. After a policy is bound to an API, it goes into effect on that API immediately.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary This feature provides instance-level access control capabilities for dedicated instances. Deletes an access control policy.
     *  *
     * @param DeleteAccessControlListRequest $request DeleteAccessControlListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessControlListResponse DeleteAccessControlListResponse
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
     * @summary This feature provides instance-level access control capabilities for dedicated instances. Deletes an access control policy.
     *  *
     * @param DeleteAccessControlListRequest $request DeleteAccessControlListRequest
     *
     * @return DeleteAccessControlListResponse DeleteAccessControlListResponse
     */
    public function deleteAccessControlList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessControlListWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes all custom special policies of a specified throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     *  *
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
     * @summary Deletes all custom special policies of a specified throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     *  *
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
     * @summary Deletes an API.
     *  *
     * @description *   This operation is intended for API providers and cannot be undone after it is complete.
     * *   An API that is running in the runtime environment must be unpublished before you can delete the API.****
     * *   The QPS limit on this operation is 50 per user.
     *  *
     * @param DeleteApiRequest $request DeleteApiRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApiResponse DeleteApiResponse
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
     * @summary Deletes an API.
     *  *
     * @description *   This operation is intended for API providers and cannot be undone after it is complete.
     * *   An API that is running in the runtime environment must be unpublished before you can delete the API.****
     * *   The QPS limit on this operation is 50 per user.
     *  *
     * @param DeleteApiRequest $request DeleteApiRequest
     *
     * @return DeleteApiResponse DeleteApiResponse
     */
    public function deleteApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an API group.
     *  *
     * @description *   This operation is intended for API providers.
     * *   An API group that contains APIs cannot be deleted. To delete the API group, you must first delete its APIs.
     * *   After an API group is deleted, the second-level domain name bound to the API group is automatically invalidated.
     * *   If the specified API group does not exist, a success response is returned.
     * *   The QPS limit on this operation is 50 per user.
     *  *
     * @param DeleteApiGroupRequest $request DeleteApiGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApiGroupResponse DeleteApiGroupResponse
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
     * @summary Deletes an API group.
     *  *
     * @description *   This operation is intended for API providers.
     * *   An API group that contains APIs cannot be deleted. To delete the API group, you must first delete its APIs.
     * *   After an API group is deleted, the second-level domain name bound to the API group is automatically invalidated.
     * *   If the specified API group does not exist, a success response is returned.
     * *   The QPS limit on this operation is 50 per user.
     *  *
     * @param DeleteApiGroupRequest $request DeleteApiGroupRequest
     *
     * @return DeleteApiGroupResponse DeleteApiGroupResponse
     */
    public function deleteApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an API product. Deleting an API product causes the association between APIs and the deleted API product to be deleted as well. Exercise caution when you delete an API product. If any API in the API product is associated with an application, the API product fails to be deleted.
     *  *
     * @param DeleteApiProductRequest $request DeleteApiProductRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApiProductResponse DeleteApiProductResponse
     */
    public function deleteApiProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiProductId)) {
            $query['ApiProductId'] = $request->apiProductId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApiProduct',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an API product. Deleting an API product causes the association between APIs and the deleted API product to be deleted as well. Exercise caution when you delete an API product. If any API in the API product is associated with an application, the API product fails to be deleted.
     *  *
     * @param DeleteApiProductRequest $request DeleteApiProductRequest
     *
     * @return DeleteApiProductResponse DeleteApiProductResponse
     */
    public function deleteApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiProductWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a specified variable in a specified environment.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
     * @param DeleteApiStageVariableRequest $request DeleteApiStageVariableRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApiStageVariableResponse DeleteApiStageVariableResponse
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
     * @summary Deletes a specified variable in a specified environment.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
     * @param DeleteApiStageVariableRequest $request DeleteApiStageVariableRequest
     *
     * @return DeleteApiStageVariableResponse DeleteApiStageVariableResponse
     */
    public function deleteApiStageVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiStageVariableWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an application.
     *  *
     * @description *   This operation is intended for API callers.
     * *   After an application is deleted, the application and its API authorization cannot be restored.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param DeleteAppRequest $request DeleteAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppResponse DeleteAppResponse
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
     * @summary Deletes an application.
     *  *
     * @description *   This operation is intended for API callers.
     * *   After an application is deleted, the application and its API authorization cannot be restored.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param DeleteAppRequest $request DeleteAppRequest
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @summary 删除新的AppCode
     *  *
     * @param DeleteAppCodeRequest $request DeleteAppCodeRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppCodeResponse DeleteAppCodeResponse
     */
    public function deleteAppCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCode)) {
            $query['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppCode',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除新的AppCode
     *  *
     * @param DeleteAppCodeRequest $request DeleteAppCodeRequest
     *
     * @return DeleteAppCodeResponse DeleteAppCodeResponse
     */
    public function deleteAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 删除新的AppKey
     *  *
     * @param DeleteAppKeyRequest $request DeleteAppKeyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppKeyResponse DeleteAppKeyResponse
     */
    public function deleteAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppKey',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除新的AppKey
     *  *
     * @param DeleteAppKeyRequest $request DeleteAppKeyRequest
     *
     * @return DeleteAppKeyResponse DeleteAppKeyResponse
     */
    public function deleteAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a backend service.
     *  *
     * @param DeleteBackendRequest $request DeleteBackendRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackendResponse DeleteBackendResponse
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
     * @summary Deletes a backend service.
     *  *
     * @param DeleteBackendRequest $request DeleteBackendRequest
     *
     * @return DeleteBackendResponse DeleteBackendResponse
     */
    public function deleteBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackendWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the definition of a backend service in an environment. After the definition is deleted, the API that uses the backend service and is published to this environment will be unpublished.
     *  *
     * @param DeleteBackendModelRequest $request DeleteBackendModelRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBackendModelResponse DeleteBackendModelResponse
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
     * @summary Deletes the definition of a backend service in an environment. After the definition is deleted, the API that uses the backend service and is published to this environment will be unpublished.
     *  *
     * @param DeleteBackendModelRequest $request DeleteBackendModelRequest
     *
     * @return DeleteBackendModelResponse DeleteBackendModelResponse
     */
    public function deleteBackendModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackendModelWithOptions($request, $runtime);
    }

    /**
     * @summary 删除自定义数据集
     *  *
     * @param DeleteDatasetRequest $request DeleteDatasetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatasetResponse DeleteDatasetResponse
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
     * @summary 删除自定义数据集
     *  *
     * @param DeleteDatasetRequest $request DeleteDatasetRequest
     *
     * @return DeleteDatasetResponse DeleteDatasetResponse
     */
    public function deleteDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a data entry from a custom dataset.
     *  *
     * @param DeleteDatasetItemRequest $request DeleteDatasetItemRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatasetItemResponse DeleteDatasetItemResponse
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
     * @summary Deletes a data entry from a custom dataset.
     *  *
     * @param DeleteDatasetItemRequest $request DeleteDatasetItemRequest
     *
     * @return DeleteDatasetItemResponse DeleteDatasetItemResponse
     */
    public function deleteDatasetItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetItemWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds a custom domain name from a specified API group.
     *  *
     * @description *   This operation is intended for API providers.
     * *   If the specified domain name does not exist, a successful response will still appear.
     * *   Unbinding a domain name from an API group will affect access to the APIs in the group. Exercise caution when using this operation.
     *  *
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
     * @summary Unbinds a custom domain name from a specified API group.
     *  *
     * @description *   This operation is intended for API providers.
     * *   If the specified domain name does not exist, a successful response will still appear.
     * *   Unbinding a domain name from an API group will affect access to the APIs in the group. Exercise caution when using this operation.
     *  *
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
     * @summary Deletes the SSL certificate of a specified domain name. This operation is intended for API providers. If the SSL certificate does not exist, a success response is still returned. If the specified API group does not exist, the InvalidGroupId.NotFound error is returned. Access over HTTPS is not supported after the SSL certificate is deleted. Exercise caution when using this API operation.
     *  *
     * @param DeleteDomainCertificateRequest $request DeleteDomainCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainCertificateResponse DeleteDomainCertificateResponse
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
     * @summary Deletes the SSL certificate of a specified domain name. This operation is intended for API providers. If the SSL certificate does not exist, a success response is still returned. If the specified API group does not exist, the InvalidGroupId.NotFound error is returned. Access over HTTPS is not supported after the SSL certificate is deleted. Exercise caution when using this API operation.
     *  *
     * @param DeleteDomainCertificateRequest $request DeleteDomainCertificateRequest
     *
     * @return DeleteDomainCertificateResponse DeleteDomainCertificateResponse
     */
    public function deleteDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an API Gateway instance.
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
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
     * @summary Deletes an API Gateway instance.
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an access control list (ACL).
     *  *
     * @description *   This operation is intended for API providers.
     * *   If the ACL is bound to an API, you must unbind the ACL from the API before you can delete the ACL. Otherwise, an error is returned.
     * *   If you call this operation on an ACL that does not exist, a success message is returned.
     *  *
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
     * @summary Deletes an access control list (ACL).
     *  *
     * @description *   This operation is intended for API providers.
     * *   If the ACL is bound to an API, you must unbind the ACL from the API before you can delete the ACL. Otherwise, an error is returned.
     * *   If you call this operation on an ACL that does not exist, a success message is returned.
     *  *
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
     * @summary Delete the specified log configuration.
     *  *
     * @param DeleteLogConfigRequest $request DeleteLogConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLogConfigResponse DeleteLogConfigResponse
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
     * @summary Delete the specified log configuration.
     *  *
     * @param DeleteLogConfigRequest $request DeleteLogConfigRequest
     *
     * @return DeleteLogConfigResponse DeleteLogConfigResponse
     */
    public function deleteLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a model from Model Management for an API group.
     *  *
     * @param DeleteModelRequest $request DeleteModelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteModelResponse DeleteModelResponse
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
     * @summary Deletes a model from Model Management for an API group.
     *  *
     * @param DeleteModelRequest $request DeleteModelRequest
     *
     * @return DeleteModelResponse DeleteModelResponse
     */
    public function deleteModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a CloudMonitor application group corresponding to an API group.
     *  *
     * @param DeleteMonitorGroupRequest $request DeleteMonitorGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMonitorGroupResponse DeleteMonitorGroupResponse
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
     * @summary Deletes a CloudMonitor application group corresponding to an API group.
     *  *
     * @param DeleteMonitorGroupRequest $request DeleteMonitorGroupRequest
     *
     * @return DeleteMonitorGroupResponse DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMonitorGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a plug-in.
     *  *
     * @description *   This operation is intended for API providers.
     * *   You must first unbind the plug-in from the API. Otherwise, an error is reported when you delete the plug-in.
     *  *
     * @param DeletePluginRequest $request DeletePluginRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePluginResponse DeletePluginResponse
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
     * @summary Deletes a plug-in.
     *  *
     * @description *   This operation is intended for API providers.
     * *   You must first unbind the plug-in from the API. Otherwise, an error is reported when you delete the plug-in.
     *  *
     * @param DeletePluginRequest $request DeletePluginRequest
     *
     * @return DeletePluginResponse DeletePluginResponse
     */
    public function deletePlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePluginWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a backend signature key.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API operation deletes an existing backend signature key.
     * *   You cannot delete a key that is bound to an API. To delete the key, you must unbind it first.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Deletes a backend signature key.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API operation deletes an existing backend signature key.
     * *   You cannot delete a key that is bound to an API. To delete the key, you must unbind it first.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Deletes a custom throttling policy and the special throttling rules in the policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   If the throttling policy you want to delete is bound to APIs, you need to unbind the policy first. Otherwise, an error is reported when you delete the policy.
     * *   The QPS limit on this operation is 50 per user.
     *  *
     * @param DeleteTrafficControlRequest $request DeleteTrafficControlRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTrafficControlResponse DeleteTrafficControlResponse
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
     * @summary Deletes a custom throttling policy and the special throttling rules in the policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   If the throttling policy you want to delete is bound to APIs, you need to unbind the policy first. Otherwise, an error is reported when you delete the policy.
     * *   The QPS limit on this operation is 50 per user.
     *  *
     * @param DeleteTrafficControlRequest $request DeleteTrafficControlRequest
     *
     * @return DeleteTrafficControlResponse DeleteTrafficControlResponse
     */
    public function deleteTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom special throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   You can obtain the input parameters required in this operation by calling other APIs.
     *  *
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
     * @summary Deletes a custom special throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   You can obtain the input parameters required in this operation by calling other APIs.
     *  *
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
     * @summary Publishes an API to an environment.
     *  *
     * @description *   This operation is intended for API providers. Only the API that you have defined and published to a runtime environment can be called.
     * *   An API is published to a cluster in under 5 seconds.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Publishes an API to an environment.
     *  *
     * @description *   This operation is intended for API providers. Only the API that you have defined and published to a runtime environment can be called.
     * *   An API is published to a cluster in under 5 seconds.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @param DescribeAbolishApiTaskRequest $request DescribeAbolishApiTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAbolishApiTaskResponse DescribeAbolishApiTaskResponse
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
     * @param DescribeAbolishApiTaskRequest $request DescribeAbolishApiTaskRequest
     *
     * @return DescribeAbolishApiTaskResponse DescribeAbolishApiTaskResponse
     */
    public function describeAbolishApiTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAbolishApiTaskWithOptions($request, $runtime);
    }

    /**
     * @summary This feature provides instance-level access control for dedicated instances. Queries the details of an access control policy.
     *  *
     * @param DescribeAccessControlListAttributeRequest $request DescribeAccessControlListAttributeRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessControlListAttributeResponse DescribeAccessControlListAttributeResponse
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
     * @summary This feature provides instance-level access control for dedicated instances. Queries the details of an access control policy.
     *  *
     * @param DescribeAccessControlListAttributeRequest $request DescribeAccessControlListAttributeRequest
     *
     * @return DescribeAccessControlListAttributeResponse DescribeAccessControlListAttributeResponse
     */
    public function describeAccessControlListAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessControlListAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary This feature provides instance-level access control for dedicated instances. Queries access control policies.
     *  *
     * @param DescribeAccessControlListsRequest $request DescribeAccessControlListsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccessControlListsResponse DescribeAccessControlListsResponse
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
     * @summary This feature provides instance-level access control for dedicated instances. Queries access control policies.
     *  *
     * @param DescribeAccessControlListsRequest $request DescribeAccessControlListsRequest
     *
     * @return DescribeAccessControlListsResponse DescribeAccessControlListsResponse
     */
    public function describeAccessControlLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessControlListsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the definition of an API.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
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
     * @summary Queries the definition of an API.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
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
     * @summary Queries the documentation of an API.
     *  *
     * @description *   For API callers, the specified API must be a public or authorized private API that has been published to a runtime environment.
     * *   When you call this operation as an API caller, the service information, parameter definitions, and other details of the API you specify are returned.
     * *   When you call this operation as an API provider, the definition of the specified API running in the specified runtime environment is returned. The returned definition takes effect in the runtime environment, and may be different from the definition of the API you modify.
     * *   Before you call this operation as an API provider, ensure that the API to be queried is a public one or that your application has been authorized to call the API, because authentication on API callers is required.
     *  *
     * @param DescribeApiDocRequest $request DescribeApiDocRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiDocResponse DescribeApiDocResponse
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
     * @summary Queries the documentation of an API.
     *  *
     * @description *   For API callers, the specified API must be a public or authorized private API that has been published to a runtime environment.
     * *   When you call this operation as an API caller, the service information, parameter definitions, and other details of the API you specify are returned.
     * *   When you call this operation as an API provider, the definition of the specified API running in the specified runtime environment is returned. The returned definition takes effect in the runtime environment, and may be different from the definition of the API you modify.
     * *   Before you call this operation as an API provider, ensure that the API to be queried is a public one or that your application has been authorized to call the API, because authentication on API callers is required.
     *  *
     * @param DescribeApiDocRequest $request DescribeApiDocRequest
     *
     * @return DescribeApiDocResponse DescribeApiDocResponse
     */
    public function describeApiDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiDocWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query details about an API group, including the automatically assigned second-level domain name, custom domain name, and SSL certificate.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
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
     * @summary You can call this operation to query details about an API group, including the automatically assigned second-level domain name, custom domain name, and SSL certificate.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
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
     * @summary Queries the VPC whitelist that is allowed to access an API group.
     *  *
     * @param DescribeApiGroupVpcWhitelistRequest $request DescribeApiGroupVpcWhitelistRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiGroupVpcWhitelistResponse DescribeApiGroupVpcWhitelistResponse
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
     * @summary Queries the VPC whitelist that is allowed to access an API group.
     *  *
     * @param DescribeApiGroupVpcWhitelistRequest $request DescribeApiGroupVpcWhitelistRequest
     *
     * @return DescribeApiGroupVpcWhitelistResponse DescribeApiGroupVpcWhitelistResponse
     */
    public function describeApiGroupVpcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupVpcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Queries existing API groups and their basic information.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
     * @param DescribeApiGroupsRequest $request DescribeApiGroupsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiGroupsResponse DescribeApiGroupsResponse
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
     * @summary Queries existing API groups and their basic information.
     *  *
     * @description *   This operation is intended for API providers.
     *  *
     * @param DescribeApiGroupsRequest $request DescribeApiGroupsRequest
     *
     * @return DescribeApiGroupsResponse DescribeApiGroupsResponse
     */
    public function describeApiGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the historical versions of a specified API.
     *  *
     * @description *   This operation is intended for API providers. Only APIs that have been published have historical version records.
     * *   This operation allows you to obtain the historical versions of an API. This operation is always called by other operations.
     *  *
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
     * @summary Queries the historical versions of a specified API.
     *  *
     * @description *   This operation is intended for API providers. Only APIs that have been published have historical version records.
     * *   This operation allows you to obtain the historical versions of an API. This operation is always called by other operations.
     *  *
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
     * @summary Queries the details of a specified historical version of a specified API definition.
     *  *
     * @description Queries the details of a specified historical version of a specified API definition.
     * *   This API is intended for API providers.
     * *   API Gateway records the time and definition of an API every time the API is published. You can use the version number obtained from other operations to query definition details at a certain publication.
     *  *
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
     * @summary Queries the details of a specified historical version of a specified API definition.
     *  *
     * @description Queries the details of a specified historical version of a specified API definition.
     * *   This API is intended for API providers.
     * *   API Gateway records the time and definition of an API every time the API is published. You can use the version number obtained from other operations to query definition details at a certain publication.
     *  *
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
     * @summary Queries the access control lists (ACLs) that are bound to all the APIs in an API group in a specified environment.
     *  *
     * @description *   This operation is intended for API callers.
     * *   If an optional parameter is not specified, all results are returned on separate pages.
     * ·
     *  *
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
     * @summary Queries the access control lists (ACLs) that are bound to all the APIs in an API group in a specified environment.
     *  *
     * @description *   This operation is intended for API callers.
     * *   If an optional parameter is not specified, all results are returned on separate pages.
     * ·
     *  *
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
     * @summary Queries the response time statistics of an API.
     *  *
     * @description You can call this operation to query the latency metrics in milliseconds for a specified API.
     * *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *  *
     * @param DescribeApiLatencyDataRequest $request DescribeApiLatencyDataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiLatencyDataResponse DescribeApiLatencyDataResponse
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
     * @summary Queries the response time statistics of an API.
     *  *
     * @description You can call this operation to query the latency metrics in milliseconds for a specified API.
     * *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *  *
     * @param DescribeApiLatencyDataRequest $request DescribeApiLatencyDataRequest
     *
     * @return DescribeApiLatencyDataResponse DescribeApiLatencyDataResponse
     */
    public function describeApiLatencyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiLatencyDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Alibaba Cloud Marketplace attributes of an API.
     *  *
     * @param DescribeApiMarketAttributesRequest $request DescribeApiMarketAttributesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiMarketAttributesResponse DescribeApiMarketAttributesResponse
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
     * @summary Queries the Alibaba Cloud Marketplace attributes of an API.
     *  *
     * @param DescribeApiMarketAttributesRequest $request DescribeApiMarketAttributesRequest
     *
     * @return DescribeApiMarketAttributesResponse DescribeApiMarketAttributesResponse
     */
    public function describeApiMarketAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiMarketAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attached APIs of an API product.
     *  *
     * @param DescribeApiProductApisRequest $request DescribeApiProductApisRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiProductApisResponse DescribeApiProductApisResponse
     */
    public function describeApiProductApisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiProductId)) {
            $query['ApiProductId'] = $request->apiProductId;
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
            'action'      => 'DescribeApiProductApis',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiProductApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the attached APIs of an API product.
     *  *
     * @param DescribeApiProductApisRequest $request DescribeApiProductApisRequest
     *
     * @return DescribeApiProductApisResponse DescribeApiProductApisResponse
     */
    public function describeApiProductApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiProductApisWithOptions($request, $runtime);
    }

    /**
     * @summary Queries API products by application.
     *  *
     * @param DescribeApiProductsByAppRequest $request DescribeApiProductsByAppRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiProductsByAppResponse DescribeApiProductsByAppResponse
     */
    public function describeApiProductsByAppWithOptions($request, $runtime)
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
            'action'      => 'DescribeApiProductsByApp',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiProductsByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries API products by application.
     *  *
     * @param DescribeApiProductsByAppRequest $request DescribeApiProductsByAppRequest
     *
     * @return DescribeApiProductsByAppResponse DescribeApiProductsByAppResponse
     */
    public function describeApiProductsByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiProductsByAppWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the QPS statistics of an API.
     *  *
     * @description *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *  *
     * @param DescribeApiQpsDataRequest $request DescribeApiQpsDataRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiQpsDataResponse DescribeApiQpsDataResponse
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
     * @summary Queries the QPS statistics of an API.
     *  *
     * @description *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *  *
     * @param DescribeApiQpsDataRequest $request DescribeApiQpsDataRequest
     *
     * @return DescribeApiQpsDataResponse DescribeApiQpsDataResponse
     */
    public function describeApiQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiQpsDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backend signature keys that are bound to the APIs of a specified API group in a specified environment.
     *  *
     * @description *   This API is intended for API providers.
     * *   The ApiIds parameter is optional. If this parameter is not specified, all results in the specified environment of an API group are returned.
     *  *
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
     * @summary Queries the backend signature keys that are bound to the APIs of a specified API group in a specified environment.
     *  *
     * @description *   This API is intended for API providers.
     * *   The ApiIds parameter is optional. If this parameter is not specified, all results in the specified environment of an API group are returned.
     *  *
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
     * @summary Queries the throttling policies bound to all members of an API group in a specified environment.
     *  *
     * @description *   This API is intended for API providers.
     * *   The ApiIds parameter is optional. If this parameter is not specified, all results in the specified environment of an API group are returned.
     *  *
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
     * @summary Queries the throttling policies bound to all members of an API group in a specified environment.
     *  *
     * @description *   This API is intended for API providers.
     * *   The ApiIds parameter is optional. If this parameter is not specified, all results in the specified environment of an API group are returned.
     *  *
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
     * @summary Queries the statistics on the traffic of an API.
     *  *
     * @description *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *  *
     * @param DescribeApiTrafficDataRequest $request DescribeApiTrafficDataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiTrafficDataResponse DescribeApiTrafficDataResponse
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
     * @summary Queries the statistics on the traffic of an API.
     *  *
     * @description *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *  *
     * @param DescribeApiTrafficDataRequest $request DescribeApiTrafficDataRequest
     *
     * @return DescribeApiTrafficDataResponse DescribeApiTrafficDataResponse
     */
    public function describeApiTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of APIs that are being defined.
     *  *
     * @description *   This operation is intended for API callers.
     * *   This operation returns a list of all APIs that are being defined. The basic information about these APIs is also returned in the list.
     * *   This operation returns all APIs that are being edited, regardless of their environments. The returned definitions may be different from the definitions in the environments.
     *  *
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
     * @summary Queries a list of APIs that are being defined.
     *  *
     * @description *   This operation is intended for API callers.
     * *   This operation returns a list of all APIs that are being defined. The basic information about these APIs is also returned in the list.
     * *   This operation returns all APIs that are being edited, regardless of their environments. The returned definitions may be different from the definitions in the environments.
     *  *
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
     * @summary Queries the APIs with which an application is associated.
     *  *
     * @param DescribeApisByAppRequest $request DescribeApisByAppRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisByAppResponse DescribeApisByAppResponse
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
     * @summary Queries the APIs with which an application is associated.
     *  *
     * @param DescribeApisByAppRequest $request DescribeApisByAppRequest
     *
     * @return DescribeApisByAppResponse DescribeApisByAppResponse
     */
    public function describeApisByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByAppWithOptions($request, $runtime);
    }

    /**
     * @summary Queries APIs in the draft or published state that are created by using a specified backend service.
     *  *
     * @param DescribeApisByBackendRequest $request DescribeApisByBackendRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisByBackendResponse DescribeApisByBackendResponse
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
     * @summary Queries APIs in the draft or published state that are created by using a specified backend service.
     *  *
     * @param DescribeApisByBackendRequest $request DescribeApisByBackendRequest
     *
     * @return DescribeApisByBackendResponse DescribeApisByBackendResponse
     */
    public function describeApisByBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByBackendWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the APIs that are bound to an access control list (ACL).
     *  *
     * @description *   This operation is intended for API callers.
     * *   You can specify PageNumber to obtain the result on the specified page.
     *  *
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
     * @summary Queries the APIs that are bound to an access control list (ACL).
     *  *
     * @description *   This operation is intended for API callers.
     * *   You can specify PageNumber to obtain the result on the specified page.
     *  *
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
     * @summary Queries the APIs to which a specified backend signature key is bound.
     *  *
     * @description *   This API is intended for API providers.
     * *   The results are returned on separate pages. You can specify PageNumber to obtain the result on the specified page.
     *  *
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
     * @summary Queries the APIs to which a specified backend signature key is bound.
     *  *
     * @description *   This API is intended for API providers.
     * *   The results are returned on separate pages. You can specify PageNumber to obtain the result on the specified page.
     *  *
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
     * @summary Queries the APIs to which a specified throttling policy is bound.
     *  *
     * @description *   This API is intended for API providers.
     * *   You can specify PageNumber to obtain the result on the specified page.
     *  *
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
     * @summary Queries the APIs to which a specified throttling policy is bound.
     *  *
     * @description *   This API is intended for API providers.
     * *   You can specify PageNumber to obtain the result on the specified page.
     *  *
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
     * @param DescribeApisByVpcAccessRequest $request DescribeApisByVpcAccessRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisByVpcAccessResponse DescribeApisByVpcAccessResponse
     */
    public function describeApisByVpcAccessWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->vpcName)) {
            $query['VpcName'] = $request->vpcName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApisByVpcAccess',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisByVpcAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApisByVpcAccessRequest $request DescribeApisByVpcAccessRequest
     *
     * @return DescribeApisByVpcAccessResponse DescribeApisByVpcAccessResponse
     */
    public function describeApisByVpcAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByVpcAccessWithOptions($request, $runtime);
    }

    /**
     * @summary Queries APIs by application. The environment information is also returned.
     *  *
     * @param DescribeApisWithStageNameIntegratedByAppRequest $request DescribeApisWithStageNameIntegratedByAppRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApisWithStageNameIntegratedByAppResponse DescribeApisWithStageNameIntegratedByAppResponse
     */
    public function describeApisWithStageNameIntegratedByAppWithOptions($request, $runtime)
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
            'action'      => 'DescribeApisWithStageNameIntegratedByApp',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApisWithStageNameIntegratedByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries APIs by application. The environment information is also returned.
     *  *
     * @param DescribeApisWithStageNameIntegratedByAppRequest $request DescribeApisWithStageNameIntegratedByAppRequest
     *
     * @return DescribeApisWithStageNameIntegratedByAppResponse DescribeApisWithStageNameIntegratedByAppResponse
     */
    public function describeApisWithStageNameIntegratedByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisWithStageNameIntegratedByAppWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the apps that can be authorized.
     *  *
     * @param DescribeAppRequest $request DescribeAppRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppResponse DescribeAppResponse
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
     * @summary Queries the apps that can be authorized.
     *  *
     * @param DescribeAppRequest $request DescribeAppRequest
     *
     * @return DescribeAppResponse DescribeAppResponse
     */
    public function describeApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppWithOptions($request, $runtime);
    }

    /**
     * @summary Queries apps and their basic information.
     *  *
     * @description *   This operation is intended for API callers.
     * *   AppId is optional.
     *  *
     * @param DescribeAppAttributesRequest $request DescribeAppAttributesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppAttributesResponse DescribeAppAttributesResponse
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
     * @summary Queries apps and their basic information.
     *  *
     * @description *   This operation is intended for API callers.
     * *   AppId is optional.
     *  *
     * @param DescribeAppAttributesRequest $request DescribeAppAttributesRequest
     *
     * @return DescribeAppAttributesResponse DescribeAppAttributesResponse
     */
    public function describeAppAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询APP的密钥信息
     *  *
     * @param DescribeAppSecuritiesRequest $request DescribeAppSecuritiesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppSecuritiesResponse DescribeAppSecuritiesResponse
     */
    public function describeAppSecuritiesWithOptions($request, $runtime)
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
            'action'      => 'DescribeAppSecurities',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppSecuritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询APP的密钥信息
     *  *
     * @param DescribeAppSecuritiesRequest $request DescribeAppSecuritiesRequest
     *
     * @return DescribeAppSecuritiesResponse DescribeAppSecuritiesResponse
     */
    public function describeAppSecurities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppSecuritiesWithOptions($request, $runtime);
    }

    /**
     * @summary This key is used for authentication when an API call is made.
     *  *
     * @description *   This operation is intended for API callers.
     *  *
     * @param DescribeAppSecurityRequest $request DescribeAppSecurityRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppSecurityResponse DescribeAppSecurityResponse
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
     * @summary This key is used for authentication when an API call is made.
     *  *
     * @description *   This operation is intended for API callers.
     *  *
     * @param DescribeAppSecurityRequest $request DescribeAppSecurityRequest
     *
     * @return DescribeAppSecurityResponse DescribeAppSecurityResponse
     */
    public function describeAppSecurity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppSecurityWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the apps. App information is returned only to the app owner.
     *  *
     * @description *   This API is intended for API providers.
     * *   API providers can use the app IDs or their Apsara Stack tenant accounts to query app information.
     * *   Each provider can call this operation for a maximum of 200 times every day in a region.
     *  *
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
     * @summary Queries the apps. App information is returned only to the app owner.
     *  *
     * @description *   This API is intended for API providers.
     * *   API providers can use the app IDs or their Apsara Stack tenant accounts to query app information.
     * *   Each provider can call this operation for a maximum of 200 times every day in a region.
     *  *
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
     * @summary Queries authorized applications by API product.
     *  *
     * @param DescribeAppsByApiProductRequest $request DescribeAppsByApiProductRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAppsByApiProductResponse DescribeAppsByApiProductResponse
     */
    public function describeAppsByApiProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiProductId)) {
            $query['ApiProductId'] = $request->apiProductId;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
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
            'action'      => 'DescribeAppsByApiProduct',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppsByApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries authorized applications by API product.
     *  *
     * @param DescribeAppsByApiProductRequest $request DescribeAppsByApiProductRequest
     *
     * @return DescribeAppsByApiProductResponse DescribeAppsByApiProductResponse
     */
    public function describeAppsByApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsByApiProductWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the authorized APIs of a specified APP.
     *  *
     * @description *   This operation is intended for API callers.
     * *   The specified application can call all APIs included in the responses.
     *  *
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
     * @summary Queries the authorized APIs of a specified APP.
     *  *
     * @description *   This operation is intended for API callers.
     * *   The specified application can call all APIs included in the responses.
     *  *
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
     * @summary Queries the current apps.
     *  *
     * @description *   This operation is intended for API providers.
     * *   All applications included in the responses have access to the specified API.
     *  *
     * @param DescribeAuthorizedAppsRequest $request DescribeAuthorizedAppsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuthorizedAppsResponse DescribeAuthorizedAppsResponse
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
     * @summary Queries the current apps.
     *  *
     * @description *   This operation is intended for API providers.
     * *   All applications included in the responses have access to the specified API.
     *  *
     * @param DescribeAuthorizedAppsRequest $request DescribeAuthorizedAppsRequest
     *
     * @return DescribeAuthorizedAppsResponse DescribeAuthorizedAppsResponse
     */
    public function describeAuthorizedApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthorizedAppsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a backend service and its URL configured for each environment.
     *  *
     * @param DescribeBackendInfoRequest $request DescribeBackendInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackendInfoResponse DescribeBackendInfoResponse
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
     * @summary Queries the information about a backend service and its URL configured for each environment.
     *  *
     * @param DescribeBackendInfoRequest $request DescribeBackendInfoRequest
     *
     * @return DescribeBackendInfoResponse DescribeBackendInfoResponse
     */
    public function describeBackendInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackendInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries backend services. You can filter backend services by backend service name and backend service type.
     *  *
     * @param DescribeBackendListRequest $request DescribeBackendListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackendListResponse DescribeBackendListResponse
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries backend services. You can filter backend services by backend service name and backend service type.
     *  *
     * @param DescribeBackendListRequest $request DescribeBackendListRequest
     *
     * @return DescribeBackendListResponse DescribeBackendListResponse
     */
    public function describeBackendList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackendListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a single dataset.
     *  *
     * @param DescribeDatasetInfoRequest $request DescribeDatasetInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatasetInfoResponse DescribeDatasetInfoResponse
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
     * @summary Queries the information about a single dataset.
     *  *
     * @param DescribeDatasetInfoRequest $request DescribeDatasetInfoRequest
     *
     * @return DescribeDatasetInfoResponse DescribeDatasetInfoResponse
     */
    public function describeDatasetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatasetInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a data entry in a custom dataset.
     *  *
     * @param DescribeDatasetItemInfoRequest $request DescribeDatasetItemInfoRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatasetItemInfoResponse DescribeDatasetItemInfoResponse
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
     * @summary Queries a data entry in a custom dataset.
     *  *
     * @param DescribeDatasetItemInfoRequest $request DescribeDatasetItemInfoRequest
     *
     * @return DescribeDatasetItemInfoResponse DescribeDatasetItemInfoResponse
     */
    public function describeDatasetItemInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatasetItemInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the data entries of a custom dataset.
     *  *
     * @param DescribeDatasetItemListRequest $request DescribeDatasetItemListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatasetItemListResponse DescribeDatasetItemListResponse
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
     * @summary Queries the data entries of a custom dataset.
     *  *
     * @param DescribeDatasetItemListRequest $request DescribeDatasetItemListRequest
     *
     * @return DescribeDatasetItemListResponse DescribeDatasetItemListResponse
     */
    public function describeDatasetItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatasetItemListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries custom datasets.
     *  *
     * @param DescribeDatasetListRequest $request DescribeDatasetListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatasetListResponse DescribeDatasetListResponse
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries custom datasets.
     *  *
     * @param DescribeDatasetListRequest $request DescribeDatasetListRequest
     *
     * @return DescribeDatasetListResponse DescribeDatasetListResponse
     */
    public function describeDatasetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatasetListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the progress of an asynchronous API publishing task.
     *  *
     * @param DescribeDeployApiTaskRequest $request DescribeDeployApiTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeployApiTaskResponse DescribeDeployApiTaskResponse
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
     * @summary Queries the progress of an asynchronous API publishing task.
     *  *
     * @param DescribeDeployApiTaskRequest $request DescribeDeployApiTaskRequest
     *
     * @return DescribeDeployApiTaskResponse DescribeDeployApiTaskResponse
     */
    public function describeDeployApiTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployApiTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the definition of an API that takes effect in an environment. The definition may differ from the definition being edited.
     *  *
     * @param DescribeDeployedApiRequest $request DescribeDeployedApiRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeployedApiResponse DescribeDeployedApiResponse
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
     * @summary Queries the definition of an API that takes effect in an environment. The definition may differ from the definition being edited.
     *  *
     * @param DescribeDeployedApiRequest $request DescribeDeployedApiRequest
     *
     * @return DescribeDeployedApiResponse DescribeDeployedApiResponse
     */
    public function describeDeployedApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployedApiWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the APIs that are published to and running in an environment.
     *  *
     * @description *   This operation is intended for API callers.
     *  *
     * @param DescribeDeployedApisRequest $request DescribeDeployedApisRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeployedApisResponse DescribeDeployedApisResponse
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
     * @summary Queries the APIs that are published to and running in an environment.
     *  *
     * @description *   This operation is intended for API callers.
     *  *
     * @param DescribeDeployedApisRequest $request DescribeDeployedApisRequest
     *
     * @return DescribeDeployedApisResponse DescribeDeployedApisResponse
     */
    public function describeDeployedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployedApisWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a bound custom domain name, including the system assigned second-level domain name, custom domain name, and SSL certificate.
     *  *
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
     * @summary Queries the details about a bound custom domain name, including the system assigned second-level domain name, custom domain name, and SSL certificate.
     *  *
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
     * @summary Queries the average latency of an API group in an environment.
     *  *
     * @param DescribeGroupLatencyRequest $request DescribeGroupLatencyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupLatencyResponse DescribeGroupLatencyResponse
     */
    public function describeGroupLatencyWithOptions($request, $runtime)
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
            'action'      => 'DescribeGroupLatency',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupLatencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the average latency of an API group in an environment.
     *  *
     * @param DescribeGroupLatencyRequest $request DescribeGroupLatencyRequest
     *
     * @return DescribeGroupLatencyResponse DescribeGroupLatencyResponse
     */
    public function describeGroupLatency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupLatencyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on the number of requests directed to an API group within a period of time.
     *  *
     * @param DescribeGroupQpsRequest $request DescribeGroupQpsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupQpsResponse DescribeGroupQpsResponse
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
     * @summary Queries the statistics on the number of requests directed to an API group within a period of time.
     *  *
     * @param DescribeGroupQpsRequest $request DescribeGroupQpsRequest
     *
     * @return DescribeGroupQpsResponse DescribeGroupQpsResponse
     */
    public function describeGroupQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupQpsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the traffic of an API group.
     *  *
     * @param DescribeGroupTrafficRequest $request DescribeGroupTrafficRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupTrafficResponse DescribeGroupTrafficResponse
     */
    public function describeGroupTrafficWithOptions($request, $runtime)
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
            'action'      => 'DescribeGroupTraffic',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the traffic of an API group.
     *  *
     * @param DescribeGroupTrafficRequest $request DescribeGroupTrafficRequest
     *
     * @return DescribeGroupTrafficResponse DescribeGroupTrafficResponse
     */
    public function describeGroupTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupTrafficWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the historical versions of an API.
     *  *
     * @param DescribeHistoryApisRequest $request DescribeHistoryApisRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHistoryApisResponse DescribeHistoryApisResponse
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
     * @summary Queries the historical versions of an API.
     *  *
     * @param DescribeHistoryApisRequest $request DescribeHistoryApisRequest
     *
     * @return DescribeHistoryApisResponse DescribeHistoryApisResponse
     */
    public function describeHistoryApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryApisWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the result of an OAS API import task.
     *  *
     * @param DescribeImportOASTaskRequest $request DescribeImportOASTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImportOASTaskResponse DescribeImportOASTaskResponse
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
     * @summary Queries the result of an OAS API import task.
     *  *
     * @param DescribeImportOASTaskRequest $request DescribeImportOASTaskRequest
     *
     * @return DescribeImportOASTaskResponse DescribeImportOASTaskResponse
     */
    public function describeImportOASTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImportOASTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 查询专享实例集群的详情
     *  *
     * @param DescribeInstanceClusterInfoRequest $request DescribeInstanceClusterInfoRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceClusterInfoResponse DescribeInstanceClusterInfoResponse
     */
    public function describeInstanceClusterInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceClusterName)) {
            $query['InstanceClusterName'] = $request->instanceClusterName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceClusterInfo',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceClusterInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询专享实例集群的详情
     *  *
     * @param DescribeInstanceClusterInfoRequest $request DescribeInstanceClusterInfoRequest
     *
     * @return DescribeInstanceClusterInfoResponse DescribeInstanceClusterInfoResponse
     */
    public function describeInstanceClusterInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceClusterInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询专享实例集群列表
     *  *
     * @param DescribeInstanceClusterListRequest $request DescribeInstanceClusterListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceClusterListResponse DescribeInstanceClusterListResponse
     */
    public function describeInstanceClusterListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceClusterId)) {
            $query['InstanceClusterId'] = $request->instanceClusterId;
        }
        if (!Utils::isUnset($request->instanceClusterName)) {
            $query['InstanceClusterName'] = $request->instanceClusterName;
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
            'action'      => 'DescribeInstanceClusterList',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceClusterListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询专享实例集群列表
     *  *
     * @param DescribeInstanceClusterListRequest $request DescribeInstanceClusterListRequest
     *
     * @return DescribeInstanceClusterListResponse DescribeInstanceClusterListResponse
     */
    public function describeInstanceClusterList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceClusterListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of lost connections to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceDropConnectionsRequest $request DescribeInstanceDropConnectionsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceDropConnectionsResponse DescribeInstanceDropConnectionsResponse
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
     * @summary Queries the number of lost connections to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceDropConnectionsRequest $request DescribeInstanceDropConnectionsRequest
     *
     * @return DescribeInstanceDropConnectionsResponse DescribeInstanceDropConnectionsResponse
     */
    public function describeInstanceDropConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDropConnectionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of dropped packets within a period of time.
     *  *
     * @param DescribeInstanceDropPacketRequest $request DescribeInstanceDropPacketRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceDropPacketResponse DescribeInstanceDropPacketResponse
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
     * @summary Queries the number of dropped packets within a period of time.
     *  *
     * @param DescribeInstanceDropPacketRequest $request DescribeInstanceDropPacketRequest
     *
     * @return DescribeInstanceDropPacketResponse DescribeInstanceDropPacketResponse
     */
    public function describeInstanceDropPacket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDropPacketWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the distribution of HTTP status codes of requests to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceHttpCodeRequest $request DescribeInstanceHttpCodeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceHttpCodeResponse DescribeInstanceHttpCodeResponse
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
     * @summary Queries the distribution of HTTP status codes of requests to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceHttpCodeRequest $request DescribeInstanceHttpCodeRequest
     *
     * @return DescribeInstanceHttpCodeResponse DescribeInstanceHttpCodeResponse
     */
    public function describeInstanceHttpCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceHttpCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the average latency of a dedicated instance over a period of time.
     *  *
     * @param DescribeInstanceLatencyRequest $request DescribeInstanceLatencyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceLatencyResponse DescribeInstanceLatencyResponse
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
     * @summary Queries the average latency of a dedicated instance over a period of time.
     *  *
     * @param DescribeInstanceLatencyRequest $request DescribeInstanceLatencyRequest
     *
     * @return DescribeInstanceLatencyResponse DescribeInstanceLatencyResponse
     */
    public function describeInstanceLatency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceLatencyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of new connections to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceNewConnectionsRequest $request DescribeInstanceNewConnectionsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceNewConnectionsResponse DescribeInstanceNewConnectionsResponse
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
     * @summary Queries the number of new connections to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceNewConnectionsRequest $request DescribeInstanceNewConnectionsRequest
     *
     * @return DescribeInstanceNewConnectionsResponse DescribeInstanceNewConnectionsResponse
     */
    public function describeInstanceNewConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceNewConnectionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the numbers of inbound and outbound packets of a dedicated instance within a period of time.
     *  *
     * @param DescribeInstancePacketsRequest $request DescribeInstancePacketsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancePacketsResponse DescribeInstancePacketsResponse
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
     * @summary Queries the numbers of inbound and outbound packets of a dedicated instance within a period of time.
     *  *
     * @param DescribeInstancePacketsRequest $request DescribeInstancePacketsRequest
     *
     * @return DescribeInstancePacketsResponse DescribeInstancePacketsResponse
     */
    public function describeInstancePackets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancePacketsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of requests to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceQpsRequest $request DescribeInstanceQpsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceQpsResponse DescribeInstanceQpsResponse
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
     * @summary Queries the number of requests to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceQpsRequest $request DescribeInstanceQpsRequest
     *
     * @return DescribeInstanceQpsResponse DescribeInstanceQpsResponse
     */
    public function describeInstanceQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceQpsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of concurrent connections to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceSlbConnectRequest $request DescribeInstanceSlbConnectRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSlbConnectResponse DescribeInstanceSlbConnectResponse
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
     * @summary Queries the number of concurrent connections to a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceSlbConnectRequest $request DescribeInstanceSlbConnectRequest
     *
     * @return DescribeInstanceSlbConnectResponse DescribeInstanceSlbConnectResponse
     */
    public function describeInstanceSlbConnect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSlbConnectWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the request traffic and response traffic of a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceTrafficRequest $request DescribeInstanceTrafficRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceTrafficResponse DescribeInstanceTrafficResponse
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
     * @summary Queries the request traffic and response traffic of a dedicated instance within a period of time.
     *  *
     * @param DescribeInstanceTrafficRequest $request DescribeInstanceTrafficRequest
     *
     * @return DescribeInstanceTrafficResponse DescribeInstanceTrafficResponse
     */
    public function describeInstanceTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTrafficWithOptions($request, $runtime);
    }

    /**
     * @summary 查询实例信息
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
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
     * @summary 查询实例信息
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the rule entries of an IP address-based traffic control policy.
     *  *
     * @description *   This operation is intended for API providers.
     * *   You can filter the query results by policy ID.
     *  *
     * @param DescribeIpControlPolicyItemsRequest $request DescribeIpControlPolicyItemsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIpControlPolicyItemsResponse DescribeIpControlPolicyItemsResponse
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
     * @summary Queries the rule entries of an IP address-based traffic control policy.
     *  *
     * @description *   This operation is intended for API providers.
     * *   You can filter the query results by policy ID.
     *  *
     * @param DescribeIpControlPolicyItemsRequest $request DescribeIpControlPolicyItemsRequest
     *
     * @return DescribeIpControlPolicyItemsResponse DescribeIpControlPolicyItemsResponse
     */
    public function describeIpControlPolicyItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpControlPolicyItemsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries custom access control lists (ACLs) on separate pages.
     *  *
     * @description *   This operation is intended for API providers.
     * *   This operation is used to query the ACLs in a region. Region is a system parameter.
     * *   You can filter the query results by ACL ID, name, or type.
     * *   This operation cannot be used to query specific policies. If you want to query specific policies, call the [DescribeIpControlPolicyItems](~~DescribeIpControlPolicyItems~~) operation.
     *  *
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
     * @summary Queries custom access control lists (ACLs) on separate pages.
     *  *
     * @description *   This operation is intended for API providers.
     * *   This operation is used to query the ACLs in a region. Region is a system parameter.
     * *   You can filter the query results by ACL ID, name, or type.
     * *   This operation cannot be used to query specific policies. If you want to query specific policies, call the [DescribeIpControlPolicyItems](~~DescribeIpControlPolicyItems~~) operation.
     *  *
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
     * @param DescribeLogConfigRequest $request DescribeLogConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogConfigResponse DescribeLogConfigResponse
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
     * @param DescribeLogConfigRequest $request DescribeLogConfigRequest
     *
     * @return DescribeLogConfigResponse DescribeLogConfigResponse
     */
    public function describeLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of remaining ordered relationships for a purchaser.
     *  *
     * @param DescribeMarketRemainsQuotaRequest $request DescribeMarketRemainsQuotaRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMarketRemainsQuotaResponse DescribeMarketRemainsQuotaResponse
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
     * @summary Queries the number of remaining ordered relationships for a purchaser.
     *  *
     * @param DescribeMarketRemainsQuotaRequest $request DescribeMarketRemainsQuotaRequest
     *
     * @return DescribeMarketRemainsQuotaResponse DescribeMarketRemainsQuotaResponse
     */
    public function describeMarketRemainsQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMarketRemainsQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the created models of an API group.
     *  *
     * @description *   Fuzzy queries are supported.
     *  *
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Obtains the created models of an API group.
     *  *
     * @description *   Fuzzy queries are supported.
     *  *
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
     * @summary Queries the APIs to which a specified plug-in is bound.
     *  *
     * @param DescribePluginApisRequest $request DescribePluginApisRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePluginApisResponse DescribePluginApisResponse
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
     * @summary Queries the APIs to which a specified plug-in is bound.
     *  *
     * @param DescribePluginApisRequest $request DescribePluginApisRequest
     *
     * @return DescribePluginApisResponse DescribePluginApisResponse
     */
    public function describePluginApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginApisWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginSchemasRequest $request DescribePluginSchemasRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePluginSchemasResponse DescribePluginSchemasResponse
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
     * @param DescribePluginSchemasRequest $request DescribePluginSchemasRequest
     *
     * @return DescribePluginSchemasResponse DescribePluginSchemasResponse
     */
    public function describePluginSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginSchemasWithOptions($request, $runtime);
    }

    /**
     * @param DescribePluginTemplatesRequest $request DescribePluginTemplatesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePluginTemplatesResponse DescribePluginTemplatesResponse
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
     * @param DescribePluginTemplatesRequest $request DescribePluginTemplatesRequest
     *
     * @return DescribePluginTemplatesResponse DescribePluginTemplatesResponse
     */
    public function describePluginTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries API Gateway plug-ins and the details of the plug-ins.
     *  *
     * @description *   This operation supports pagination.
     * *   This operation allows you to query plug-ins by business type.
     * *   This operation allows you to query plug-ins by ID.
     * *   This operation allows you to query plug-ins by name.
     *  *
     * @param DescribePluginsRequest $request DescribePluginsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePluginsResponse DescribePluginsResponse
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
     * @summary Queries API Gateway plug-ins and the details of the plug-ins.
     *  *
     * @description *   This operation supports pagination.
     * *   This operation allows you to query plug-ins by business type.
     * *   This operation allows you to query plug-ins by ID.
     * *   This operation allows you to query plug-ins by name.
     *  *
     * @param DescribePluginsRequest $request DescribePluginsRequest
     *
     * @return DescribePluginsResponse DescribePluginsResponse
     */
    public function describePlugins($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the plug-ins that are bound to a running API in an environment.
     *  *
     * @description *   This operation is intended for API callers.
     * *   This operation supports pagination.
     *  *
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
     * @summary Queries the plug-ins that are bound to a running API in an environment.
     *  *
     * @description *   This operation is intended for API callers.
     * *   This operation supports pagination.
     *  *
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
     * @summary Queries the details about an API group purchased from Alibaba Cloud Marketplace.
     *  *
     * @param DescribePurchasedApiGroupRequest $request DescribePurchasedApiGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePurchasedApiGroupResponse DescribePurchasedApiGroupResponse
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
     * @summary Queries the details about an API group purchased from Alibaba Cloud Marketplace.
     *  *
     * @param DescribePurchasedApiGroupRequest $request DescribePurchasedApiGroupRequest
     *
     * @return DescribePurchasedApiGroupResponse DescribePurchasedApiGroupResponse
     */
    public function describePurchasedApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries API groups that are purchased from Alibaba Cloud Marketplace.
     *  *
     * @param DescribePurchasedApiGroupsRequest $request DescribePurchasedApiGroupsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePurchasedApiGroupsResponse DescribePurchasedApiGroupsResponse
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
     * @summary Queries API groups that are purchased from Alibaba Cloud Marketplace.
     *  *
     * @param DescribePurchasedApiGroupsRequest $request DescribePurchasedApiGroupsRequest
     *
     * @return DescribePurchasedApiGroupsResponse DescribePurchasedApiGroupsResponse
     */
    public function describePurchasedApiGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries APIs that are purchased from Alibaba Cloud Marketplace.
     *  *
     * @param DescribePurchasedApisRequest $request DescribePurchasedApisRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePurchasedApisResponse DescribePurchasedApisResponse
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
     * @summary Queries APIs that are purchased from Alibaba Cloud Marketplace.
     *  *
     * @param DescribePurchasedApisRequest $request DescribePurchasedApisRequest
     *
     * @return DescribePurchasedApisResponse DescribePurchasedApisResponse
     */
    public function describePurchasedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApisWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Alibaba Cloud regions that are supported by API Gateway.
     *  *
     * @description This operation queries regions in which API Gateway is available.
     * *   This operation is intended for API providers and callers.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
     * @summary Queries the Alibaba Cloud regions that are supported by API Gateway.
     *  *
     * @description This operation queries regions in which API Gateway is available.
     * *   This operation is intended for API providers and callers.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries backend signature keys.
     *  *
     * @description *   This API is intended for API providers.
     * *   This operation is used to query the backend signature keys in a Region. Region is a system parameter.
     *  *
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
     * @summary Queries backend signature keys.
     *  *
     * @description *   This API is intended for API providers.
     * *   This operation is used to query the backend signature keys in a Region. Region is a system parameter.
     *  *
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
     * @summary Queries the backend signature keys that are bound to a specified API.
     *  *
     * @description *   This API is intended for API providers.
     *  *
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
     * @summary Queries the backend signature keys that are bound to a specified API.
     *  *
     * @description *   This API is intended for API providers.
     *  *
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
     * @summary Queries the number of API Gateway resources in a region.
     *  *
     * @param DescribeSummaryDataRequest $request DescribeSummaryDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSummaryDataResponse DescribeSummaryDataResponse
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
     * @summary Queries the number of API Gateway resources in a region.
     *  *
     * @param DescribeSummaryDataRequest $request DescribeSummaryDataRequest
     *
     * @return DescribeSummaryDataResponse DescribeSummaryDataResponse
     */
    public function describeSummaryData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSummaryDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the common parameters supported by the system.
     *  *
     * @description *   This API is intended for API callers.
     * *   The response of this API contains the system parameters that are optional in API definitions.
     *  *
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
     * @summary Queries the common parameters supported by the system.
     *  *
     * @description *   This API is intended for API callers.
     * *   The response of this API contains the system parameters that are optional in API definitions.
     *  *
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
     * @summary Queries custom throttling policies and their details. Conditional queries are supported.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API can be used to query all existing throttling policies (including special throttling policies) and their details.
     * *   You can specify query conditions. For example, you can query the throttling policies bound to a specified API or in a specified environment.
     *  *
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
     * @summary Queries custom throttling policies and their details. Conditional queries are supported.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API can be used to query all existing throttling policies (including special throttling policies) and their details.
     * *   You can specify query conditions. For example, you can query the throttling policies bound to a specified API or in a specified environment.
     *  *
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
     * @summary Queries the throttling policy that is bound to a specific API.
     *  *
     * @description *   This API is intended for API providers.
     *  *
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
     * @summary Queries the throttling policy that is bound to a specific API.
     *  *
     * @description *   This API is intended for API providers.
     *  *
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
     * @summary 查询批量更新API后端元定结果
     *  *
     * @param DescribeUpdateBackendTaskRequest $request DescribeUpdateBackendTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUpdateBackendTaskResponse DescribeUpdateBackendTaskResponse
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
     * @summary 查询批量更新API后端元定结果
     *  *
     * @param DescribeUpdateBackendTaskRequest $request DescribeUpdateBackendTaskRequest
     *
     * @return DescribeUpdateBackendTaskResponse DescribeUpdateBackendTaskResponse
     */
    public function describeUpdateBackendTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpdateBackendTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpdateVpcInfoTaskRequest $request DescribeUpdateVpcInfoTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUpdateVpcInfoTaskResponse DescribeUpdateVpcInfoTaskResponse
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
     * @param DescribeUpdateVpcInfoTaskRequest $request DescribeUpdateVpcInfoTaskRequest
     *
     * @return DescribeUpdateVpcInfoTaskResponse DescribeUpdateVpcInfoTaskResponse
     */
    public function describeUpdateVpcInfoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpdateVpcInfoTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries VPC access authorizations.
     *  *
     * @param DescribeVpcAccessesRequest $request DescribeVpcAccessesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVpcAccessesResponse DescribeVpcAccessesResponse
     */
    public function describeVpcAccessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accurateQuery)) {
            $query['AccurateQuery'] = $request->accurateQuery;
        }
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries VPC access authorizations.
     *  *
     * @param DescribeVpcAccessesRequest $request DescribeVpcAccessesRequest
     *
     * @return DescribeVpcAccessesResponse DescribeVpcAccessesResponse
     */
    public function describeVpcAccesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcAccessesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries zones in a region.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
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
     * @summary Queries zones in a region.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @summary Detaches APIs from an API product.
     *  *
     * @param DetachApiProductRequest $request DetachApiProductRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachApiProductResponse DetachApiProductResponse
     */
    public function detachApiProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiProductId)) {
            $query['ApiProductId'] = $request->apiProductId;
        }
        if (!Utils::isUnset($request->apis)) {
            $query['Apis'] = $request->apis;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachApiProduct',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detaches APIs from an API product.
     *  *
     * @param DetachApiProductRequest $request DetachApiProductRequest
     *
     * @return DetachApiProductResponse DetachApiProductResponse
     */
    public function detachApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachApiProductWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑插件
     *  *
     * @param DetachPluginRequest $request DetachPluginRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachPluginResponse DetachPluginResponse
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
     * @summary 解绑插件
     *  *
     * @param DetachPluginRequest $request DetachPluginRequest
     *
     * @return DetachPluginResponse DetachPluginResponse
     */
    public function detachPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPluginWithOptions($request, $runtime);
    }

    /**
     * @summary This feature provides instance-level access control capabilities for dedicated API Gateway instances. Disables access control on an instance.
     *  *
     * @param DisableInstanceAccessControlRequest $request DisableInstanceAccessControlRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableInstanceAccessControlResponse DisableInstanceAccessControlResponse
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
     * @summary This feature provides instance-level access control capabilities for dedicated API Gateway instances. Disables access control on an instance.
     *  *
     * @param DisableInstanceAccessControlRequest $request DisableInstanceAccessControlRequest
     *
     * @return DisableInstanceAccessControlResponse DisableInstanceAccessControlResponse
     */
    public function disableInstanceAccessControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInstanceAccessControlWithOptions($request, $runtime);
    }

    /**
     * @summary Checks the syntax before Swagger-compliant data is imported.
     *  *
     * @param DryRunSwaggerRequest $tmpReq  DryRunSwaggerRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DryRunSwaggerResponse DryRunSwaggerResponse
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
     * @summary Checks the syntax before Swagger-compliant data is imported.
     *  *
     * @param DryRunSwaggerRequest $request DryRunSwaggerRequest
     *
     * @return DryRunSwaggerResponse DryRunSwaggerResponse
     */
    public function dryRunSwagger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dryRunSwaggerWithOptions($request, $runtime);
    }

    /**
     * @summary 开启实例的访问控制
     *  *
     * @param EnableInstanceAccessControlRequest $request EnableInstanceAccessControlRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableInstanceAccessControlResponse EnableInstanceAccessControlResponse
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
     * @summary 开启实例的访问控制
     *  *
     * @param EnableInstanceAccessControlRequest $request EnableInstanceAccessControlRequest
     *
     * @return EnableInstanceAccessControlResponse EnableInstanceAccessControlResponse
     */
    public function enableInstanceAccessControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstanceAccessControlWithOptions($request, $runtime);
    }

    /**
     * @summary Imports APIs based on the OAS standard.
     *  *
     * @param ImportOASRequest $request ImportOASRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportOASResponse ImportOASResponse
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
     * @summary Imports APIs based on the OAS standard.
     *  *
     * @param ImportOASRequest $request ImportOASRequest
     *
     * @return ImportOASResponse ImportOASResponse
     */
    public function importOAS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importOASWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an API by importing Swagger-compliant data.
     *  *
     * @description *   Alibaba Cloud supports extensions based on Swagger 2.0.
     * *   Alibaba Cloud supports Swagger configuration files in JSON and YAML formats.
     *  *
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
     * @summary Creates an API by importing Swagger-compliant data.
     *  *
     * @description *   Alibaba Cloud supports extensions based on Swagger 2.0.
     * *   Alibaba Cloud supports Swagger configuration files in JSON and YAML formats.
     *  *
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
     * @summary Queries the visible resource tags.
     *  *
     * @description *   The Tag.N.Key and Tag.N.Value parameters constitute a key-value pair.
     * *   ResourceId.N must meet all the key-value pairs that are entered. If you enter multiple key-value pairs, resources that contain the specified key-value pairs are returned.
     * *   This operation is used to query resource tags based on conditions. If no relationship matches the conditions, an empty list is returned.
     * *   You can query both user tags and visible system tags.
     * *   In addition to the required parameters, you can also specify ResourceId.N to query the visible resource tags of a specified resource in a region.
     * *   You can also specify Tag.N.Key to query the visible keys of a specified key in a region.
     * *   At least one of ResourceId.N, Tag.N.Key, and Tag.N.Value exists.
     * *   You can query tags of the same type or different types in a single operation.
     * *   You can query all your user types and visible system tags.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
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
     * @summary Queries the visible resource tags.
     *  *
     * @description *   The Tag.N.Key and Tag.N.Value parameters constitute a key-value pair.
     * *   ResourceId.N must meet all the key-value pairs that are entered. If you enter multiple key-value pairs, resources that contain the specified key-value pairs are returned.
     * *   This operation is used to query resource tags based on conditions. If no relationship matches the conditions, an empty list is returned.
     * *   You can query both user tags and visible system tags.
     * *   In addition to the required parameters, you can also specify ResourceId.N to query the visible resource tags of a specified resource in a region.
     * *   You can also specify Tag.N.Key to query the visible keys of a specified key in a region.
     * *   At least one of ResourceId.N, Tag.N.Key, and Tag.N.Value exists.
     * *   You can query tags of the same type or different types in a single operation.
     * *   You can query all your user types and visible system tags.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the definition of an API.
     *  *
     * @description **This operation is intended for API providers.**
     * *   This API operation requires a full update. Updates of partial parameters are not supported.
     * *   When you modify an API name, make sure that the name of each API within the same group is unique.
     * *   When you modify the request path, make sure that each request path within the same group is unique.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Modifies the definition of an API.
     *  *
     * @description **This operation is intended for API providers.**
     * *   This API operation requires a full update. Updates of partial parameters are not supported.
     * *   When you modify an API name, make sure that the name of each API within the same group is unique.
     * *   When you modify the request path, make sure that each request path within the same group is unique.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Modifies the draft definition of an API. This operation is different from the ModifyApi operation. This operation does not require all information about the API. You need to only specify the parameters that you want to modify. For example, if you want to change the authentication method of the API from Anonymous to APP, you specify APP as the value of AuthType and do not need to configure other parameters.
     *  *
     * @param ModifyApiConfigurationRequest $request ModifyApiConfigurationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApiConfigurationResponse ModifyApiConfigurationResponse
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
     * @summary Modifies the draft definition of an API. This operation is different from the ModifyApi operation. This operation does not require all information about the API. You need to only specify the parameters that you want to modify. For example, if you want to change the authentication method of the API from Anonymous to APP, you specify APP as the value of AuthType and do not need to configure other parameters.
     *  *
     * @param ModifyApiConfigurationRequest $request ModifyApiConfigurationRequest
     *
     * @return ModifyApiConfigurationResponse ModifyApiConfigurationResponse
     */
    public function modifyApiConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name, description, or basepath of an existing API group.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The QPS limit on this operation is 50 per user.
     *  *
     * @param ModifyApiGroupRequest $request ModifyApiGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApiGroupResponse ModifyApiGroupResponse
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
     * @summary Modifies the name, description, or basepath of an existing API group.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The QPS limit on this operation is 50 per user.
     *  *
     * @param ModifyApiGroupRequest $request ModifyApiGroupRequest
     *
     * @return ModifyApiGroupResponse ModifyApiGroupResponse
     */
    public function modifyApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyApiGroupInstanceRequest $request ModifyApiGroupInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApiGroupInstanceResponse ModifyApiGroupInstanceResponse
     */
    public function modifyApiGroupInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $query['TargetInstanceId'] = $request->targetInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApiGroupInstance',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiGroupInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyApiGroupInstanceRequest $request ModifyApiGroupInstanceRequest
     *
     * @return ModifyApiGroupInstanceResponse ModifyApiGroupInstanceResponse
     */
    public function modifyApiGroupInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the network policy of an API group.
     *  *
     * @param ModifyApiGroupNetworkPolicyRequest $request ModifyApiGroupNetworkPolicyRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApiGroupNetworkPolicyResponse ModifyApiGroupNetworkPolicyResponse
     */
    public function modifyApiGroupNetworkPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->httpsPolicy)) {
            $query['HttpsPolicy'] = $request->httpsPolicy;
        }
        if (!Utils::isUnset($request->innerDomainEnable)) {
            $query['InnerDomainEnable'] = $request->innerDomainEnable;
        }
        if (!Utils::isUnset($request->internetEnable)) {
            $query['InternetEnable'] = $request->internetEnable;
        }
        if (!Utils::isUnset($request->internetIPV6Enable)) {
            $query['InternetIPV6Enable'] = $request->internetIPV6Enable;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcIntranetEnable)) {
            $query['VpcIntranetEnable'] = $request->vpcIntranetEnable;
        }
        if (!Utils::isUnset($request->vpcSlbIntranetEnable)) {
            $query['VpcSlbIntranetEnable'] = $request->vpcSlbIntranetEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyApiGroupNetworkPolicy',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyApiGroupNetworkPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the network policy of an API group.
     *  *
     * @param ModifyApiGroupNetworkPolicyRequest $request ModifyApiGroupNetworkPolicyRequest
     *
     * @return ModifyApiGroupNetworkPolicyResponse ModifyApiGroupNetworkPolicyResponse
     */
    public function modifyApiGroupNetworkPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupNetworkPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the VPC whitelist of an API group.
     *  *
     * @param ModifyApiGroupVpcWhitelistRequest $request ModifyApiGroupVpcWhitelistRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApiGroupVpcWhitelistResponse ModifyApiGroupVpcWhitelistResponse
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
     * @summary Modifies the VPC whitelist of an API group.
     *  *
     * @param ModifyApiGroupVpcWhitelistRequest $request ModifyApiGroupVpcWhitelistRequest
     *
     * @return ModifyApiGroupVpcWhitelistResponse ModifyApiGroupVpcWhitelistResponse
     */
    public function modifyApiGroupVpcWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupVpcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a specified application.
     *  *
     * @description *   This operation is intended for API callers.
     * *   **AppName** or **Description** can be modified. If these parameters are not specified, no modifications are made and the operation will directly return a success response.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param ModifyAppRequest $request ModifyAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppResponse ModifyAppResponse
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
     * @summary Modifies a specified application.
     *  *
     * @description *   This operation is intended for API callers.
     * *   **AppName** or **Description** can be modified. If these parameters are not specified, no modifications are made and the operation will directly return a success response.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param ModifyAppRequest $request ModifyAppRequest
     *
     * @return ModifyAppResponse ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @summary 修改后端服务
     *  *
     * @param ModifyBackendRequest $request ModifyBackendRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBackendResponse ModifyBackendResponse
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
     * @summary 修改后端服务
     *  *
     * @param ModifyBackendRequest $request ModifyBackendRequest
     *
     * @return ModifyBackendResponse ModifyBackendResponse
     */
    public function modifyBackend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackendWithOptions($request, $runtime);
    }

    /**
     * @summary 修改后端服务在环境上的定义
     *  *
     * @param ModifyBackendModelRequest $request ModifyBackendModelRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBackendModelResponse ModifyBackendModelResponse
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
     * @summary 修改后端服务在环境上的定义
     *  *
     * @param ModifyBackendModelRequest $request ModifyBackendModelRequest
     *
     * @return ModifyBackendModelResponse ModifyBackendModelResponse
     */
    public function modifyBackendModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackendModelWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name of a custom dataset.
     *  *
     * @param ModifyDatasetRequest $request ModifyDatasetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatasetResponse ModifyDatasetResponse
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
     * @summary Modifies the name of a custom dataset.
     *  *
     * @param ModifyDatasetRequest $request ModifyDatasetRequest
     *
     * @return ModifyDatasetResponse ModifyDatasetResponse
     */
    public function modifyDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the expiration time and description of a data entry in a custom dataset.
     *  *
     * @param ModifyDatasetItemRequest $request ModifyDatasetItemRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatasetItemResponse ModifyDatasetItemResponse
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
     * @summary Modifies the expiration time and description of a data entry in a custom dataset.
     *  *
     * @param ModifyDatasetItemRequest $request ModifyDatasetItemRequest
     *
     * @return ModifyDatasetItemResponse ModifyDatasetItemResponse
     */
    public function modifyDatasetItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatasetItemWithOptions($request, $runtime);
    }

    /**
     * @summary 修改API网关实例属性
     *  *
     * @param ModifyInstanceAttributeRequest $tmpReq  ModifyInstanceAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyInstanceAttributeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->toConnectVpcIpBlock)) {
            $request->toConnectVpcIpBlockShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->toConnectVpcIpBlock, 'ToConnectVpcIpBlock', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deleteVpcIpBlock)) {
            $query['DeleteVpcIpBlock'] = $request->deleteVpcIpBlock;
        }
        if (!Utils::isUnset($request->egressIpv6Enable)) {
            $query['EgressIpv6Enable'] = $request->egressIpv6Enable;
        }
        if (!Utils::isUnset($request->httpsPolicy)) {
            $query['HttpsPolicy'] = $request->httpsPolicy;
        }
        if (!Utils::isUnset($request->IPV6Enabled)) {
            $query['IPV6Enabled'] = $request->IPV6Enabled;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->intranetSegments)) {
            $query['IntranetSegments'] = $request->intranetSegments;
        }
        if (!Utils::isUnset($request->maintainEndTime)) {
            $query['MaintainEndTime'] = $request->maintainEndTime;
        }
        if (!Utils::isUnset($request->maintainStartTime)) {
            $query['MaintainStartTime'] = $request->maintainStartTime;
        }
        if (!Utils::isUnset($request->toConnectVpcIpBlockShrink)) {
            $query['ToConnectVpcIpBlock'] = $request->toConnectVpcIpBlockShrink;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->vpcSlbIntranetEnable)) {
            $query['VpcSlbIntranetEnable'] = $request->vpcSlbIntranetEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAttribute',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改API网关实例属性
     *  *
     * @param ModifyInstanceAttributeRequest $request ModifyInstanceAttributeRequest
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades or downgrades the configurations of an API Gateway instance.
     *  *
     * @param ModifyInstanceSpecRequest $request ModifyInstanceSpecRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceSpecResponse ModifyInstanceSpecResponse
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
     * @summary Upgrades or downgrades the configurations of an API Gateway instance.
     *  *
     * @param ModifyInstanceSpecRequest $request ModifyInstanceSpecRequest
     *
     * @return ModifyInstanceSpecResponse ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the VPC domain name policy of an API group.
     *  *
     * @param ModifyIntranetDomainPolicyRequest $request ModifyIntranetDomainPolicyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyIntranetDomainPolicyResponse ModifyIntranetDomainPolicyResponse
     */
    public function modifyIntranetDomainPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->vpcIntranetEnable)) {
            $query['VpcIntranetEnable'] = $request->vpcIntranetEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyIntranetDomainPolicy',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyIntranetDomainPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the VPC domain name policy of an API group.
     *  *
     * @param ModifyIntranetDomainPolicyRequest $request ModifyIntranetDomainPolicyRequest
     *
     * @return ModifyIntranetDomainPolicyResponse ModifyIntranetDomainPolicyResponse
     */
    public function modifyIntranetDomainPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIntranetDomainPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an access control list (ACL).
     *  *
     * @description *   This operation is intended for API providers.
     * *   This operation allows you to modify only the name and description of an ACL. You cannot modify the type of the ACL.
     *  *
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
     * @summary Modifies an access control list (ACL).
     *  *
     * @description *   This operation is intended for API providers.
     * *   This operation allows you to modify only the name and description of an ACL. You cannot modify the type of the ACL.
     *  *
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
     * @summary Modifies a policy in an access control list (ACL).
     *  *
     * @description *   This operation is intended for API providers.
     * *   The modification immediately takes effect on all the APIs that are bound to the policy.
     * *   This operation causes a full modification of the content of a policy.
     *  *
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
     * @summary Modifies a policy in an access control list (ACL).
     *  *
     * @description *   This operation is intended for API providers.
     * *   The modification immediately takes effect on all the APIs that are bound to the policy.
     * *   This operation causes a full modification of the content of a policy.
     *  *
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
     * @param ModifyLogConfigRequest $request ModifyLogConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLogConfigResponse ModifyLogConfigResponse
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
     * @param ModifyLogConfigRequest $request ModifyLogConfigRequest
     *
     * @return ModifyLogConfigResponse ModifyLogConfigResponse
     */
    public function modifyLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the model of an API group.
     *  *
     * @param ModifyModelRequest $request ModifyModelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyModelResponse ModifyModelResponse
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
     * @summary Updates the model of an API group.
     *  *
     * @param ModifyModelRequest $request ModifyModelRequest
     *
     * @return ModifyModelResponse ModifyModelResponse
     */
    public function modifyModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyModelWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information of a plug-in.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The name of the plug-in must be unique.
     *  *
     * @param ModifyPluginRequest $request ModifyPluginRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPluginResponse ModifyPluginResponse
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
     * @summary Modifies the information of a plug-in.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The name of the plug-in must be unique.
     *  *
     * @param ModifyPluginRequest $request ModifyPluginRequest
     *
     * @return ModifyPluginResponse ModifyPluginResponse
     */
    public function modifyPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPluginWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a backend signature key.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API operation modifies the name, Key value, and Secret value of an existing signature key.
     * *   Note that the modification takes effect immediately. If the key has been bound to an API, you must adjust the backend signature verification based on the new key accordingly.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Modifies a backend signature key.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API operation modifies the name, Key value, and Secret value of an existing signature key.
     * *   Note that the modification takes effect immediately. If the key has been bound to an API, you must adjust the backend signature verification based on the new key accordingly.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Modifies the settings of a custom throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   The modifications take effect on the bound APIs instantly.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Modifies the settings of a custom throttling policy.
     *  *
     * @description *   This API is intended for API providers.
     * *   The modifications take effect on the bound APIs instantly.
     * *   The QPS limit on this operation is 50 per user.
     *  *
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
     * @summary Modifies a virtual private cloud (VPC) authorization and updates the metadata of the API associated with the VPC authorization.
     *  *
     * @param ModifyVpcAccessAndUpdateApisRequest $request ModifyVpcAccessAndUpdateApisRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcAccessAndUpdateApisResponse ModifyVpcAccessAndUpdateApisResponse
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
     * @summary Modifies a virtual private cloud (VPC) authorization and updates the metadata of the API associated with the VPC authorization.
     *  *
     * @param ModifyVpcAccessAndUpdateApisRequest $request ModifyVpcAccessAndUpdateApisRequest
     *
     * @return ModifyVpcAccessAndUpdateApisResponse ModifyVpcAccessAndUpdateApisResponse
     */
    public function modifyVpcAccessAndUpdateApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcAccessAndUpdateApisWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenApiGatewayServiceResponse OpenApiGatewayServiceResponse
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
     * @return OpenApiGatewayServiceResponse OpenApiGatewayServiceResponse
     */
    public function openApiGatewayService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiGatewayServiceWithOptions($runtime);
    }

    /**
     * @summary Queries the request logs of a user.
     *  *
     * @param QueryRequestLogsRequest $request QueryRequestLogsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRequestLogsResponse QueryRequestLogsResponse
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
     * @summary Queries the request logs of a user.
     *  *
     * @param QueryRequestLogsRequest $request QueryRequestLogsRequest
     *
     * @return QueryRequestLogsResponse QueryRequestLogsResponse
     */
    public function queryRequestLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRequestLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Reactivates a custom domain name whose validity status is Abnormal.
     *  *
     * @description *   This operation is intended for API providers.
     * *   You must solve the problem that is mentioned in the domain name exception prompt before you can reactivate the domain name.
     * *   A typical reason why a custom domain name becomes abnormal is that the domain name does not have an ICP filing or the domain name is included in a blacklist by the administration. When a custom domain name is abnormal, users cannot use it to access APIs.
     * *   You can call this operation to reactivate the domain name to resume normal access.
     *  *
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
     * @summary Reactivates a custom domain name whose validity status is Abnormal.
     *  *
     * @description *   This operation is intended for API providers.
     * *   You must solve the problem that is mentioned in the domain name exception prompt before you can reactivate the domain name.
     * *   A typical reason why a custom domain name becomes abnormal is that the domain name does not have an ICP filing or the domain name is included in a blacklist by the administration. When a custom domain name is abnormal, users cannot use it to access APIs.
     * *   You can call this operation to reactivate the domain name to resume normal access.
     *  *
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
     * @summary 删除访问控制策略中IP条目
     *  *
     * @param RemoveAccessControlListEntryRequest $request RemoveAccessControlListEntryRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveAccessControlListEntryResponse RemoveAccessControlListEntryResponse
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
     * @summary 删除访问控制策略中IP条目
     *  *
     * @param RemoveAccessControlListEntryRequest $request RemoveAccessControlListEntryRequest
     *
     * @return RemoveAccessControlListEntryResponse RemoveAccessControlListEntryResponse
     */
    public function removeAccessControlListEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAccessControlListEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes permissions on API products from an application.
     *  *
     * @param RemoveApiProductsAuthoritiesRequest $tmpReq  RemoveApiProductsAuthoritiesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveApiProductsAuthoritiesResponse RemoveApiProductsAuthoritiesResponse
     */
    public function removeApiProductsAuthoritiesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveApiProductsAuthoritiesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->apiProductIds)) {
            $request->apiProductIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->apiProductIds, 'ApiProductIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->apiProductIdsShrink)) {
            $query['ApiProductIds'] = $request->apiProductIdsShrink;
        }
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
            'action'      => 'RemoveApiProductsAuthorities',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveApiProductsAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Revokes permissions on API products from an application.
     *  *
     * @param RemoveApiProductsAuthoritiesRequest $request RemoveApiProductsAuthoritiesRequest
     *
     * @return RemoveApiProductsAuthoritiesResponse RemoveApiProductsAuthoritiesResponse
     */
    public function removeApiProductsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApiProductsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes the access permissions on multiple APIs from a specified application.
     *  *
     * @description *   This operation is intended for API providers and callers.
     * *   Before you revoke access permissions, check by whom the permissions were granted. API providers can only revoke permissions granted by a Provider, and API callers can only revoke permissions granted by a Consumer.
     *  *
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
     * @summary Revokes the access permissions on multiple APIs from a specified application.
     *  *
     * @description *   This operation is intended for API providers and callers.
     * *   Before you revoke access permissions, check by whom the permissions were granted. API providers can only revoke permissions granted by a Provider, and API callers can only revoke permissions granted by a Consumer.
     *  *
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
     * @summary Revokes the access permissions on a specified API from multiple applications. In this case, multiple applications map to a single API.
     *  *
     * @description *   This operation is intended for API providers and callers.
     * *   Before you revoke access permissions, check by whom the permissions were granted. API providers can only revoke permissions granted by a Provider, and API callers can only revoke permissions granted by a Consumer.
     *  *
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
     * @summary Revokes the access permissions on a specified API from multiple applications. In this case, multiple applications map to a single API.
     *  *
     * @description *   This operation is intended for API providers and callers.
     * *   Before you revoke access permissions, check by whom the permissions were granted. API providers can only revoke permissions granted by a Provider, and API callers can only revoke permissions granted by a Consumer.
     *  *
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
     * @summary Unbinds an API from an access control list (ACL).
     *  *
     * @description *   This operation is intended for API callers.
     * *   The unbinding takes effect immediately. After the API is unbound from the ACL, the corresponding environment does not have any IP address access control in place for the API.
     *  *
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
     * @summary Unbinds an API from an access control list (ACL).
     *  *
     * @description *   This operation is intended for API callers.
     * *   The unbinding takes effect immediately. After the API is unbound from the ACL, the corresponding environment does not have any IP address access control in place for the API.
     *  *
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
     * @summary Removes one or more policies from an access control list (ACL).
     *  *
     * @description *   This operation is intended for API providers.
     *  *
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
     * @summary Removes one or more policies from an access control list (ACL).
     *  *
     * @description *   This operation is intended for API providers.
     *  *
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
     * @summary Unbinds a backend signature key from APIs.
     *  *
     * @description *   This API is intended for API providers.
     * *   The operation takes effect immediately. The request sent from API Gateway to the backend service does not contain the signature string. The corresponding verification step can be removed from the backend.
     *  *
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
     * @summary Unbinds a backend signature key from APIs.
     *  *
     * @description *   This API is intended for API providers.
     * *   The operation takes effect immediately. The request sent from API Gateway to the backend service does not contain the signature string. The corresponding verification step can be removed from the backend.
     *  *
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
     * @summary Unbinds a specified throttling policy from APIs.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API allows you to unbind a specified throttling policy from up to 100 APIs at a time.
     *  *
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
     * @summary Unbinds a specified throttling policy from APIs.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API allows you to unbind a specified throttling policy from up to 100 APIs at a time.
     *  *
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
     * @summary Deletes a VPC authorization without unpublishing the associated APIs.
     *  *
     * @description *   This API is intended for API providers.
     * *   Revokes the permissions of API Gateway to access your VPC instance.
     * >  Deleting an authorization affects the associated API. Before you delete the authorization, make sure that it is not used by the API.
     *  *
     * @param RemoveVpcAccessRequest $request RemoveVpcAccessRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveVpcAccessResponse RemoveVpcAccessResponse
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
     * @summary Deletes a VPC authorization without unpublishing the associated APIs.
     *  *
     * @description *   This API is intended for API providers.
     * *   Revokes the permissions of API Gateway to access your VPC instance.
     * >  Deleting an authorization affects the associated API. Before you delete the authorization, make sure that it is not used by the API.
     *  *
     * @param RemoveVpcAccessRequest $request RemoveVpcAccessRequest
     *
     * @return RemoveVpcAccessResponse RemoveVpcAccessResponse
     */
    public function removeVpcAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVpcAccessWithOptions($request, $runtime);
    }

    /**
     * @param RemoveVpcAccessAndAbolishApisRequest $request RemoveVpcAccessAndAbolishApisRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveVpcAccessAndAbolishApisResponse RemoveVpcAccessAndAbolishApisResponse
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
     * @param RemoveVpcAccessAndAbolishApisRequest $request RemoveVpcAccessAndAbolishApisRequest
     *
     * @return RemoveVpcAccessAndAbolishApisResponse RemoveVpcAccessAndAbolishApisResponse
     */
    public function removeVpcAccessAndAbolishApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVpcAccessAndAbolishApisWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the AppCode of an app.
     *  *
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
     * @summary Resets the AppCode of an app.
     *  *
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
     * @summary Resets the key of an application.
     *  *
     * @description *   This operation is intended for API callers.
     * *   A new secret is automatically generated after you have called this operation. This secret cannot be customized.
     * *   The results returned by this operation do not contain the application secret. You can obtain the secret by calling DescribeAppSecurity.
     *  *
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
     * @summary Resets the key of an application.
     *  *
     * @description *   This operation is intended for API callers.
     * *   A new secret is automatically generated after you have called this operation. This secret cannot be customized.
     * *   The results returned by this operation do not contain the application secret. You can obtain the secret by calling DescribeAppSecurity.
     *  *
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
     * @param SdkGenerateByAppRequest $request SdkGenerateByAppRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SdkGenerateByAppResponse SdkGenerateByAppResponse
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
     * @param SdkGenerateByAppRequest $request SdkGenerateByAppRequest
     *
     * @return SdkGenerateByAppResponse SdkGenerateByAppResponse
     */
    public function sdkGenerateByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByAppWithOptions($request, $runtime);
    }

    /**
     * @summary 生成与App关联的API的SDK
     *  *
     * @param SdkGenerateByAppForRegionRequest $request SdkGenerateByAppForRegionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SdkGenerateByAppForRegionResponse SdkGenerateByAppForRegionResponse
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
     * @summary 生成与App关联的API的SDK
     *  *
     * @param SdkGenerateByAppForRegionRequest $request SdkGenerateByAppForRegionRequest
     *
     * @return SdkGenerateByAppForRegionResponse SdkGenerateByAppForRegionResponse
     */
    public function sdkGenerateByAppForRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByAppForRegionWithOptions($request, $runtime);
    }

    /**
     * @param SdkGenerateByGroupRequest $request SdkGenerateByGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SdkGenerateByGroupResponse SdkGenerateByGroupResponse
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
     * @param SdkGenerateByGroupRequest $request SdkGenerateByGroupRequest
     *
     * @return SdkGenerateByGroupResponse SdkGenerateByGroupResponse
     */
    public function sdkGenerateByGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 修改访问控制策略的名称
     *  *
     * @param SetAccessControlListAttributeRequest $request SetAccessControlListAttributeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAccessControlListAttributeResponse SetAccessControlListAttributeResponse
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
     * @summary 修改访问控制策略的名称
     *  *
     * @param SetAccessControlListAttributeRequest $request SetAccessControlListAttributeRequest
     *
     * @return SetAccessControlListAttributeResponse SetAccessControlListAttributeResponse
     */
    public function setAccessControlListAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccessControlListAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 给多个API产品添加APP授权
     *  *
     * @param SetApiProductsAuthoritiesRequest $tmpReq  SetApiProductsAuthoritiesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetApiProductsAuthoritiesResponse SetApiProductsAuthoritiesResponse
     */
    public function setApiProductsAuthoritiesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetApiProductsAuthoritiesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->apiProductIds)) {
            $request->apiProductIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->apiProductIds, 'ApiProductIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->apiProductIdsShrink)) {
            $query['ApiProductIds'] = $request->apiProductIdsShrink;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetApiProductsAuthorities',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetApiProductsAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 给多个API产品添加APP授权
     *  *
     * @param SetApiProductsAuthoritiesRequest $request SetApiProductsAuthoritiesRequest
     *
     * @return SetApiProductsAuthoritiesResponse SetApiProductsAuthoritiesResponse
     */
    public function setApiProductsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApiProductsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @summary Authorizes a specified application to call multiple APIs.
     *  *
     * @description *   This operation is intended for API providers and callers.
     * *   API providers can authorize any apps to call their APIs.
     * *   API callers can authorize their own apps to call the APIs that they have purchased.
     *  *
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
     * @summary Authorizes a specified application to call multiple APIs.
     *  *
     * @description *   This operation is intended for API providers and callers.
     * *   API providers can authorize any apps to call their APIs.
     * *   API callers can authorize their own apps to call the APIs that they have purchased.
     *  *
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
     * @summary 将多个APP授权给API产品
     *  *
     * @param SetAppsAuthToApiProductRequest $request SetAppsAuthToApiProductRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAppsAuthToApiProductResponse SetAppsAuthToApiProductResponse
     */
    public function setAppsAuthToApiProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiProductId)) {
            $query['ApiProductId'] = $request->apiProductId;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAppsAuthToApiProduct',
            'version'     => '2016-07-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAppsAuthToApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将多个APP授权给API产品
     *  *
     * @param SetAppsAuthToApiProductRequest $request SetAppsAuthToApiProductRequest
     *
     * @return SetAppsAuthToApiProductResponse SetAppsAuthToApiProductResponse
     */
    public function setAppsAuthToApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppsAuthToApiProductWithOptions($request, $runtime);
    }

    /**
     * @summary Grants access permissions on a specified API to multiple applications.
     *  *
     * @description *   This operation is intended for API providers and callers.
     * *   API providers can authorize any apps to call their APIs.
     * *   API callers can authorize their own apps to call the APIs that they have purchased.
     *  *
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
     * @summary Grants access permissions on a specified API to multiple applications.
     *  *
     * @description *   This operation is intended for API providers and callers.
     * *   API providers can authorize any apps to call their APIs.
     * *   API callers can authorize their own apps to call the APIs that they have purchased.
     *  *
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
     * @summary Binds a custom domain name to a specified API group.
     *  *
     * @param SetDomainRequest $request SetDomainRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDomainResponse SetDomainResponse
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
     * @summary Binds a custom domain name to a specified API group.
     *  *
     * @param SetDomainRequest $request SetDomainRequest
     *
     * @return SetDomainResponse SetDomainResponse
     */
    public function setDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads an SSL certificate for a custom domain name.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The SSL certificate must match the custom domain name.
     * *   After the SSL certificate is bound, HTTPS-based API services become available.
     *  *
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
     * @summary Uploads an SSL certificate for a custom domain name.
     *  *
     * @description *   This operation is intended for API providers.
     * *   The SSL certificate must match the custom domain name.
     * *   After the SSL certificate is bound, HTTPS-based API services become available.
     *  *
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
     * @summary Enables or disables WebSocket for a custom domain name.
     *  *
     * @param SetDomainWebSocketStatusRequest $request SetDomainWebSocketStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDomainWebSocketStatusResponse SetDomainWebSocketStatusResponse
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
     * @summary Enables or disables WebSocket for a custom domain name.
     *  *
     * @param SetDomainWebSocketStatusRequest $request SetDomainWebSocketStatusRequest
     *
     * @return SetDomainWebSocketStatusResponse SetDomainWebSocketStatusResponse
     */
    public function setDomainWebSocketStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainWebSocketStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetGroupAuthAppCodeRequest $request SetGroupAuthAppCodeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetGroupAuthAppCodeResponse SetGroupAuthAppCodeResponse
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
     * @param SetGroupAuthAppCodeRequest $request SetGroupAuthAppCodeRequest
     *
     * @return SetGroupAuthAppCodeResponse SetGroupAuthAppCodeResponse
     */
    public function setGroupAuthAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupAuthAppCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a binding relationship between specified access control lists (ACLs) and APIs.
     *  *
     * @description *   This operation is intended for API callers.
     * *   A maximum of 100 APIs can be bound at a time.
     *  *
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
     * @summary Creates a binding relationship between specified access control lists (ACLs) and APIs.
     *  *
     * @description *   This operation is intended for API callers.
     * *   A maximum of 100 APIs can be bound at a time.
     *  *
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
     * @summary Binds a signature key to APIs.
     *  *
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
     * @summary Binds a signature key to APIs.
     *  *
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
     * @summary Binds a throttling policy to APIs.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API allows you to bind a specific throttling policy to up to 100 APIs at a time.
     *  *
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
     * @summary Binds a throttling policy to APIs.
     *  *
     * @description *   This API is intended for API providers.
     * *   This API allows you to bind a specific throttling policy to up to 100 APIs at a time.
     *  *
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
     * @summary Creates a virtual private cloud (VPC) access authorization and enables reverse access.
     *  *
     * @description * This operation is intended for API providers.
     * * This operation is used to authorize API Gateway to access your VPC instance.
     *  *
     * @param SetVpcAccessRequest $request SetVpcAccessRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SetVpcAccessResponse SetVpcAccessResponse
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Creates a virtual private cloud (VPC) access authorization and enables reverse access.
     *  *
     * @description * This operation is intended for API providers.
     * * This operation is used to authorize API Gateway to access your VPC instance.
     *  *
     * @param SetVpcAccessRequest $request SetVpcAccessRequest
     *
     * @return SetVpcAccessResponse SetVpcAccessResponse
     */
    public function setVpcAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVpcAccessWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies a wildcard domain name template for a bound custom domain name.
     *  *
     * @param SetWildcardDomainPatternsRequest $request SetWildcardDomainPatternsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetWildcardDomainPatternsResponse SetWildcardDomainPatternsResponse
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
     * @summary Specifies a wildcard domain name template for a bound custom domain name.
     *  *
     * @param SetWildcardDomainPatternsRequest $request SetWildcardDomainPatternsRequest
     *
     * @return SetWildcardDomainPatternsResponse SetWildcardDomainPatternsResponse
     */
    public function setWildcardDomainPatterns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWildcardDomainPatternsWithOptions($request, $runtime);
    }

    /**
     * @summary Switches the definition of an API in a specified runtime environment to a historical version.
     *  *
     * @description *   This API is intended for API providers.
     * *   The historical version can be obtained by calling the **DescribeHistoryApis** operation.
     * *   Only APIs that have been published more than once have historical versions.
     * *   This operation can only be performed on running APIs. Exercise caution when you perform this operation because the operation cannot be undone. The operation takes up to 5 seconds.
     * *   The switch operation is essentially a publish operation. A reason for this operation must be provided.
     *  *
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
     * @summary Switches the definition of an API in a specified runtime environment to a historical version.
     *  *
     * @description *   This API is intended for API providers.
     * *   The historical version can be obtained by calling the **DescribeHistoryApis** operation.
     * *   Only APIs that have been published more than once have historical versions.
     * *   This operation can only be performed on running APIs. Exercise caution when you perform this operation because the operation cannot be undone. The operation takes up to 5 seconds.
     * *   The switch operation is essentially a publish operation. A reason for this operation must be provided.
     *  *
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
     * @summary Creates a tag-resource relationship.
     *  *
     * @description *   All tags (key-value pairs) are applied to all resources of a specified ResourceId, with each resource specified as ResourceId.N.
     * *   Tag.N is a resource tag consisting of a key-value pair: Tag.N.Key and Tag.N.Value.
     * *   If you call this operation to tag multiple resources simultaneously, either all or none of the resources will be tagged.
     * *   If you specify Tag.1.Value in addition to required parameters, you must also specify Tag.1.Key. Otherwise, an InvalidParameter.TagKey error is reported. A tag that has a value must have the corresponding key, but the key can be an empty string.
     * *   If a tag with the same key has been bound to a resource, the new tag will overwrite the existing one.
     *  *
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
     * @summary Creates a tag-resource relationship.
     *  *
     * @description *   All tags (key-value pairs) are applied to all resources of a specified ResourceId, with each resource specified as ResourceId.N.
     * *   Tag.N is a resource tag consisting of a key-value pair: Tag.N.Key and Tag.N.Value.
     * *   If you call this operation to tag multiple resources simultaneously, either all or none of the resources will be tagged.
     * *   If you specify Tag.1.Value in addition to required parameters, you must also specify Tag.1.Key. Otherwise, an InvalidParameter.TagKey error is reported. A tag that has a value must have the corresponding key, but the key can be an empty string.
     * *   If a tag with the same key has been bound to a resource, the new tag will overwrite the existing one.
     *  *
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
     * @summary Removes tags from resources.
     *  *
     * @description *   If you call this operation to untag multiple resources simultaneously, either all or none of the resources will be untagged.
     * *   If you specify resource IDs without specifying tag keys and set the All parameter to true, all tags bound to the specified resources will be deleted. If a resource does not have any tags, the request is not processed but a success is returned.
     * *   If you specify resource IDs without specifying tag keys and set the All parameter to false, the request is not processed but a success is returned.
     * *   When tag keys are specified, the All parameter is invalid.
     * *   When multiple resources and key-value pairs are specified, the specified tags bound to the resources are deleted.
     *  *
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
     * @summary Removes tags from resources.
     *  *
     * @description *   If you call this operation to untag multiple resources simultaneously, either all or none of the resources will be untagged.
     * *   If you specify resource IDs without specifying tag keys and set the All parameter to true, all tags bound to the specified resources will be deleted. If a resource does not have any tags, the request is not processed but a success is returned.
     * *   If you specify resource IDs without specifying tag keys and set the All parameter to false, the request is not processed but a success is returned.
     * *   When tag keys are specified, the All parameter is invalid.
     * *   When multiple resources and key-value pairs are specified, the specified tags bound to the resources are deleted.
     *  *
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
     * @summary Tests the network connectivity between an API Gateway instance and a port on an Elastic Compute Service (ECS) or Server Load Balance (SLB) instance in a virtual private cloud (VPC) access authorization.
     *  *
     * @param ValidateVpcConnectivityRequest $request ValidateVpcConnectivityRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateVpcConnectivityResponse ValidateVpcConnectivityResponse
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
     * @summary Tests the network connectivity between an API Gateway instance and a port on an Elastic Compute Service (ECS) or Server Load Balance (SLB) instance in a virtual private cloud (VPC) access authorization.
     *  *
     * @param ValidateVpcConnectivityRequest $request ValidateVpcConnectivityRequest
     *
     * @return ValidateVpcConnectivityResponse ValidateVpcConnectivityResponse
     */
    public function validateVpcConnectivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateVpcConnectivityWithOptions($request, $runtime);
    }
}
