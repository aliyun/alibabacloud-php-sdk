<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AbolishApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AbolishApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddAccessControlListEntryRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddAccessControlListEntryResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AssociateInstanceWithPrivateDNSRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AssociateInstanceWithPrivateDNSResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AssociateInstanceWithPrivateDNSShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachApiProductRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachApiProductResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachGroupPluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AttachGroupPluginResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreatePrivateDNSRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreatePrivateDNSResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreatePrivateDNSShrinkRequest;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeletePrivateDNSRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeletePrivateDNSResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByGroupResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachGroupPluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachGroupPluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachPluginRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DetachPluginResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DisableInstanceAccessControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DisableInstanceAccessControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DissociateInstanceWithPrivateDNSRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DissociateInstanceWithPrivateDNSResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DissociateInstanceWithPrivateDNSShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\EnableInstanceAccessControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\EnableInstanceAccessControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ExportOASRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ExportOASResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ExportOASShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListPrivateDNSRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListPrivateDNSResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceVpcAttributeForConsoleRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyInstanceVpcAttributeForConsoleResponse;
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
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UpdatePrivateDNSRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UpdatePrivateDNSResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UpdatePrivateDNSShrinkRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ValidateVpcConnectivityRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ValidateVpcConnectivityResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class CloudAPI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'apigateway.cn-qingdao.aliyuncs.com',
            'cn-beijing' => 'apigateway.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou' => 'apigateway.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote' => 'apigateway.cn-huhehaote.aliyuncs.com',
            'cn-wulanchabu' => 'apigateway.cn-wulanchabu.aliyuncs.com',
            'cn-hangzhou' => 'apigateway.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'apigateway.cn-shanghai.aliyuncs.com',
            'cn-shenzhen' => 'apigateway.cn-shenzhen.aliyuncs.com',
            'cn-heyuan' => 'apigateway.cn-heyuan.aliyuncs.com',
            'cn-guangzhou' => 'apigateway.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'apigateway.cn-chengdu.aliyuncs.com',
            'cn-hongkong' => 'apigateway.cn-hongkong.aliyuncs.com',
            'ap-northeast-1' => 'apigateway.ap-northeast-1.aliyuncs.com',
            'ap-southeast-1' => 'apigateway.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'apigateway.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'apigateway.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'apigateway.ap-southeast-5.aliyuncs.com',
            'ap-southeast-6' => 'apigateway.ap-southeast-6.aliyuncs.com',
            'ap-southeast-7' => 'apigateway.ap-southeast-7.aliyuncs.com',
            'us-east-1' => 'apigateway.us-east-1.aliyuncs.com',
            'us-west-1' => 'apigateway.us-west-1.aliyuncs.com',
            'eu-west-1' => 'apigateway.eu-west-1.aliyuncs.com',
            'eu-central-1' => 'apigateway.eu-central-1.aliyuncs.com',
            'ap-south-1' => 'apigateway.ap-south-1.aliyuncs.com',
            'me-east-1' => 'apigateway.me-east-1.aliyuncs.com',
            'me-central-1' => 'apigateway.me-central-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'apigateway.cn-hangzhou-finance.aliyuncs.com',
            'cn-shanghai-finance-1' => 'apigateway.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'apigateway.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-north-2-gov-1' => 'apigateway.cn-north-2-gov-1.aliyuncs.com',
            'ap-northeast-2-pop' => 'apigateway.aliyuncs.com',
            'cn-beijing-finance-1' => 'apigateway.cn-beijing-finance-1.aliyuncs.com',
            'cn-beijing-finance-pop' => 'apigateway.aliyuncs.com',
            'cn-beijing-gov-1' => 'apigateway.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'apigateway.aliyuncs.com',
            'cn-edge-1' => 'apigateway.aliyuncs.com',
            'cn-fujian' => 'apigateway.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'apigateway.aliyuncs.com',
            'cn-hangzhou-test-306' => 'apigateway.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'apigateway.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'apigateway.aliyuncs.com',
            'cn-qingdao-nebula' => 'apigateway.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'apigateway.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'apigateway.aliyuncs.com',
            'cn-shanghai-inner' => 'apigateway.cn-shanghai-inner.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'apigateway.aliyuncs.com',
            'cn-shenzhen-inner' => 'apigateway.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'apigateway.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'apigateway.aliyuncs.com',
            'cn-wuhan' => 'apigateway.aliyuncs.com',
            'cn-yushanfang' => 'apigateway.aliyuncs.com',
            'cn-zhangbei' => 'apigateway.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'apigateway.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'apigateway.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'apigateway.aliyuncs.com',
            'eu-west-1-oxs' => 'apigateway.aliyuncs.com',
            'rus-west-1-pop' => 'apigateway.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Unpublishes a specified API from a specified runtime environment.
     *
     * @remarks
     *   This operation is intended for API providers and is the opposite of DeployApi.
     * *   An API can be unpublished from a specified runtime environment in under 5 seconds.
     * *   An unpublished API cannot be called in the specified runtime environment.
     *
     * @param request - AbolishApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AbolishApiResponse
     *
     * @param AbolishApiRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AbolishApiResponse
     */
    public function abolishApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AbolishApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AbolishApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unpublishes a specified API from a specified runtime environment.
     *
     * @remarks
     *   This operation is intended for API providers and is the opposite of DeployApi.
     * *   An API can be unpublished from a specified runtime environment in under 5 seconds.
     * *   An unpublished API cannot be called in the specified runtime environment.
     *
     * @param request - AbolishApiRequest
     *
     * @returns AbolishApiResponse
     *
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
     * This feature provides instance-level access control capabilities for dedicated instances. Adds an IP address entry to the access control polocy of an instance.
     *
     * @param request - AddAccessControlListEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAccessControlListEntryResponse
     *
     * @param AddAccessControlListEntryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddAccessControlListEntryResponse
     */
    public function addAccessControlListEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclEntrys) {
            @$query['AclEntrys'] = $request->aclEntrys;
        }

        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAccessControlListEntry',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAccessControlListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This feature provides instance-level access control capabilities for dedicated instances. Adds an IP address entry to the access control polocy of an instance.
     *
     * @param request - AddAccessControlListEntryRequest
     *
     * @returns AddAccessControlListEntryResponse
     *
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
     * Adds a policy to an existing ACL.
     *
     * @remarks
     * When you call this operation, note that:
     * *   This operation is intended for API providers.
     * *   An added policy immediately takes effect on all APIs that are bound to the access control list (ACL).
     * *   A maximum of 100 policies can be added to an ACL.
     *
     * @param request - AddIpControlPolicyItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddIpControlPolicyItemResponse
     *
     * @param AddIpControlPolicyItemRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddIpControlPolicyItemResponse
     */
    public function addIpControlPolicyItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->cidrIp) {
            @$query['CidrIp'] = $request->cidrIp;
        }

        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddIpControlPolicyItem',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddIpControlPolicyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a policy to an existing ACL.
     *
     * @remarks
     * When you call this operation, note that:
     * *   This operation is intended for API providers.
     * *   An added policy immediately takes effect on all APIs that are bound to the access control list (ACL).
     * *   A maximum of 100 policies can be added to an ACL.
     *
     * @param request - AddIpControlPolicyItemRequest
     *
     * @returns AddIpControlPolicyItemResponse
     *
     * @param AddIpControlPolicyItemRequest $request
     *
     * @return AddIpControlPolicyItemResponse
     */
    public function addIpControlPolicyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * Adds a custom special policy to a specified throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   If the input SpecialKey already exists, the previous configuration is overwritten. Use caution when calling this operation.
     * *   Special throttling policies must be added to an existing throttling policy, and can take effect on all the APIs to which the throttling policy is bound.
     *
     * @param request - AddTrafficSpecialControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTrafficSpecialControlResponse
     *
     * @param AddTrafficSpecialControlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddTrafficSpecialControlResponse
     */
    public function addTrafficSpecialControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->specialKey) {
            @$query['SpecialKey'] = $request->specialKey;
        }

        if (null !== $request->specialType) {
            @$query['SpecialType'] = $request->specialType;
        }

        if (null !== $request->trafficControlId) {
            @$query['TrafficControlId'] = $request->trafficControlId;
        }

        if (null !== $request->trafficValue) {
            @$query['TrafficValue'] = $request->trafficValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddTrafficSpecialControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTrafficSpecialControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a custom special policy to a specified throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   If the input SpecialKey already exists, the previous configuration is overwritten. Use caution when calling this operation.
     * *   Special throttling policies must be added to an existing throttling policy, and can take effect on all the APIs to which the throttling policy is bound.
     *
     * @param request - AddTrafficSpecialControlRequest
     *
     * @returns AddTrafficSpecialControlResponse
     *
     * @param AddTrafficSpecialControlRequest $request
     *
     * @return AddTrafficSpecialControlResponse
     */
    public function addTrafficSpecialControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * Associates an internal domain name resolution with a dedicated instance.
     *
     * @remarks
     * An internal domain name resolution can be associated only with a dedicated instance, not with a shared instance or shared instance cluster.
     *
     * @param tmpReq - AssociateInstanceWithPrivateDNSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateInstanceWithPrivateDNSResponse
     *
     * @param AssociateInstanceWithPrivateDNSRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return AssociateInstanceWithPrivateDNSResponse
     */
    public function associateInstanceWithPrivateDNSWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AssociateInstanceWithPrivateDNSShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->intranetDomains) {
            $request->intranetDomainsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->intranetDomains, 'IntranetDomains', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $body = [];
        if (null !== $request->intranetDomainsShrink) {
            @$body['IntranetDomains'] = $request->intranetDomainsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateInstanceWithPrivateDNS',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateInstanceWithPrivateDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates an internal domain name resolution with a dedicated instance.
     *
     * @remarks
     * An internal domain name resolution can be associated only with a dedicated instance, not with a shared instance or shared instance cluster.
     *
     * @param request - AssociateInstanceWithPrivateDNSRequest
     *
     * @returns AssociateInstanceWithPrivateDNSResponse
     *
     * @param AssociateInstanceWithPrivateDNSRequest $request
     *
     * @return AssociateInstanceWithPrivateDNSResponse
     */
    public function associateInstanceWithPrivateDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateInstanceWithPrivateDNSWithOptions($request, $runtime);
    }

    /**
     * Attaches APIs to an API product. If the API product does not exist, the system automatically creates the API product.
     *
     * @param request - AttachApiProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachApiProductResponse
     *
     * @param AttachApiProductRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AttachApiProductResponse
     */
    public function attachApiProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiProductId) {
            @$query['ApiProductId'] = $request->apiProductId;
        }

        if (null !== $request->apis) {
            @$query['Apis'] = $request->apis;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachApiProduct',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches APIs to an API product. If the API product does not exist, the system automatically creates the API product.
     *
     * @param request - AttachApiProductRequest
     *
     * @returns AttachApiProductResponse
     *
     * @param AttachApiProductRequest $request
     *
     * @return AttachApiProductResponse
     */
    public function attachApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachApiProductWithOptions($request, $runtime);
    }

    /**
     * Attach plugin to API group.
     *
     * @param request - AttachGroupPluginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachGroupPluginResponse
     *
     * @param AttachGroupPluginRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AttachGroupPluginResponse
     */
    public function attachGroupPluginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachGroupPlugin',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachGroupPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attach plugin to API group.
     *
     * @param request - AttachGroupPluginRequest
     *
     * @returns AttachGroupPluginResponse
     *
     * @param AttachGroupPluginRequest $request
     *
     * @return AttachGroupPluginResponse
     */
    public function attachGroupPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachGroupPluginWithOptions($request, $runtime);
    }

    /**
     * Binds a plug-in to an API.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   You can only bind plug-ins to published APIs.
     * *   The plug-in takes effect immediately after it is bound to an API.
     * *   If you bind a different plug-in to an API, this plug-in takes effect immediately.
     *
     * @param request - AttachPluginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachPluginResponse
     *
     * @param AttachPluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachPluginResponse
     */
    public function attachPluginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachPlugin',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a plug-in to an API.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   You can only bind plug-ins to published APIs.
     * *   The plug-in takes effect immediately after it is bound to an API.
     * *   If you bind a different plug-in to an API, this plug-in takes effect immediately.
     *
     * @param request - AttachPluginRequest
     *
     * @returns AttachPluginResponse
     *
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
     * Unpublishes multiple published APIs at a time.
     *
     * @param request - BatchAbolishApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchAbolishApisResponse
     *
     * @param BatchAbolishApisRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchAbolishApisResponse
     */
    public function batchAbolishApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->api) {
            @$query['Api'] = $request->api;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchAbolishApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchAbolishApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unpublishes multiple published APIs at a time.
     *
     * @param request - BatchAbolishApisRequest
     *
     * @returns BatchAbolishApisResponse
     *
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
     * Publishes multiple APIs at a time.
     *
     * @param request - BatchDeployApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeployApisResponse
     *
     * @param BatchDeployApisRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BatchDeployApisResponse
     */
    public function batchDeployApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->api) {
            @$query['Api'] = $request->api;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeployApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeployApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes multiple APIs at a time.
     *
     * @param request - BatchDeployApisRequest
     *
     * @returns BatchDeployApisResponse
     *
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
     * This feature provides instance-level access control capabilities for dedicated instances. Creates an Access Control List (ACL). Each user is allowed to create five ACLs in each region.
     *
     * @param request - CreateAccessControlListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccessControlListResponse
     *
     * @param CreateAccessControlListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAccessControlListResponse
     */
    public function createAccessControlListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclName) {
            @$query['AclName'] = $request->aclName;
        }

        if (null !== $request->addressIPVersion) {
            @$query['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccessControlList',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This feature provides instance-level access control capabilities for dedicated instances. Creates an Access Control List (ACL). Each user is allowed to create five ACLs in each region.
     *
     * @param request - CreateAccessControlListRequest
     *
     * @returns CreateAccessControlListResponse
     *
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
     * Creates an API.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The name of an API must be unique within an API group.
     * *   A request path must be unique within an API group.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - CreateApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApiResponse
     *
     * @param CreateApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateApiResponse
     */
    public function createApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowSignatureMethod) {
            @$query['AllowSignatureMethod'] = $request->allowSignatureMethod;
        }

        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->appCodeAuthType) {
            @$query['AppCodeAuthType'] = $request->appCodeAuthType;
        }

        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->backendEnable) {
            @$query['BackendEnable'] = $request->backendEnable;
        }

        if (null !== $request->backendId) {
            @$query['BackendId'] = $request->backendId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableInternet) {
            @$query['DisableInternet'] = $request->disableInternet;
        }

        if (null !== $request->forceNonceCheck) {
            @$query['ForceNonceCheck'] = $request->forceNonceCheck;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->openIdConnectConfig) {
            @$query['OpenIdConnectConfig'] = $request->openIdConnectConfig;
        }

        if (null !== $request->requestConfig) {
            @$query['RequestConfig'] = $request->requestConfig;
        }

        if (null !== $request->resultBodyModel) {
            @$query['ResultBodyModel'] = $request->resultBodyModel;
        }

        if (null !== $request->resultType) {
            @$query['ResultType'] = $request->resultType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->serviceConfig) {
            @$query['ServiceConfig'] = $request->serviceConfig;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->visibility) {
            @$query['Visibility'] = $request->visibility;
        }

        if (null !== $request->webSocketApiType) {
            @$query['WebSocketApiType'] = $request->webSocketApiType;
        }

        $body = [];
        if (null !== $request->constantParameters) {
            @$body['ConstantParameters'] = $request->constantParameters;
        }

        if (null !== $request->errorCodeSamples) {
            @$body['ErrorCodeSamples'] = $request->errorCodeSamples;
        }

        if (null !== $request->failResultSample) {
            @$body['FailResultSample'] = $request->failResultSample;
        }

        if (null !== $request->requestParameters) {
            @$body['RequestParameters'] = $request->requestParameters;
        }

        if (null !== $request->resultDescriptions) {
            @$body['ResultDescriptions'] = $request->resultDescriptions;
        }

        if (null !== $request->resultSample) {
            @$body['ResultSample'] = $request->resultSample;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        if (null !== $request->serviceParametersMap) {
            @$body['ServiceParametersMap'] = $request->serviceParametersMap;
        }

        if (null !== $request->systemParameters) {
            @$body['SystemParameters'] = $request->systemParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The name of an API must be unique within an API group.
     * *   A request path must be unique within an API group.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - CreateApiRequest
     *
     * @returns CreateApiResponse
     *
     * @param CreateApiRequest $request
     *
     * @return CreateApiResponse
     */
    public function createApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiWithOptions($request, $runtime);
    }

    /**
     * 创建API分组.
     *
     * @param request - CreateApiGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApiGroupResponse
     *
     * @param CreateApiGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateApiGroupResponse
     */
    public function createApiGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->basePath) {
            @$query['BasePath'] = $request->basePath;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApiGroup',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建API分组.
     *
     * @param request - CreateApiGroupRequest
     *
     * @returns CreateApiGroupResponse
     *
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
     * Adds a variable to an environment.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - CreateApiStageVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApiStageVariableResponse
     *
     * @param CreateApiStageVariableRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateApiStageVariableResponse
     */
    public function createApiStageVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageId) {
            @$query['StageId'] = $request->stageId;
        }

        if (null !== $request->stageRouteModel) {
            @$query['StageRouteModel'] = $request->stageRouteModel;
        }

        if (null !== $request->supportRoute) {
            @$query['SupportRoute'] = $request->supportRoute;
        }

        if (null !== $request->variableName) {
            @$query['VariableName'] = $request->variableName;
        }

        if (null !== $request->variableValue) {
            @$query['VariableValue'] = $request->variableValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApiStageVariable',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApiStageVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a variable to an environment.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - CreateApiStageVariableRequest
     *
     * @returns CreateApiStageVariableResponse
     *
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
     * Creates an application for calling APIs in API Gateway.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   Each application has a key-value pair which is used for identity verification when you call an API.
     * *   An application must be authorized to call an API.
     * *   Each application has only one key-value pair, which can be reset if the pair is leaked.
     * *   A maximum of 1,000 applications can be created for each Alibaba Cloud account.
     * *   You can call this operation up to 50 times per second per account.
     *
     * @param request - CreateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appSecret) {
            @$query['AppSecret'] = $request->appSecret;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApp',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application for calling APIs in API Gateway.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   Each application has a key-value pair which is used for identity verification when you call an API.
     * *   An application must be authorized to call an API.
     * *   Each application has only one key-value pair, which can be reset if the pair is leaked.
     * *   A maximum of 1,000 applications can be created for each Alibaba Cloud account.
     * *   You can call this operation up to 50 times per second per account.
     *
     * @param request - CreateAppRequest
     *
     * @returns CreateAppResponse
     *
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
     * Adds an AppCode to an application.
     *
     * @param request - CreateAppCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppCodeResponse
     *
     * @param CreateAppCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAppCodeResponse
     */
    public function createAppCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppCode',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an AppCode to an application.
     *
     * @param request - CreateAppCodeRequest
     *
     * @returns CreateAppCodeResponse
     *
     * @param CreateAppCodeRequest $request
     *
     * @return CreateAppCodeResponse
     */
    public function createAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppCodeWithOptions($request, $runtime);
    }

    /**
     * Adds an AppKey and AppSecret pair to an application.
     *
     * @param request - CreateAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppKeyResponse
     *
     * @param CreateAppKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAppKeyResponse
     */
    public function createAppKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->appSecret) {
            @$query['AppSecret'] = $request->appSecret;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppKey',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an AppKey and AppSecret pair to an application.
     *
     * @param request - CreateAppKeyRequest
     *
     * @returns CreateAppKeyResponse
     *
     * @param CreateAppKeyRequest $request
     *
     * @return CreateAppKeyResponse
     */
    public function createAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppKeyWithOptions($request, $runtime);
    }

    /**
     * Creates a backend service in API Gateway.
     *
     * @param request - CreateBackendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackendResponse
     *
     * @param CreateBackendRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBackendResponse
     */
    public function createBackendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendName) {
            @$query['BackendName'] = $request->backendName;
        }

        if (null !== $request->backendType) {
            @$query['BackendType'] = $request->backendType;
        }

        if (null !== $request->createEventBridgeServiceLinkedRole) {
            @$query['CreateEventBridgeServiceLinkedRole'] = $request->createEventBridgeServiceLinkedRole;
        }

        if (null !== $request->createSlr) {
            @$query['CreateSlr'] = $request->createSlr;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackend',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backend service in API Gateway.
     *
     * @param request - CreateBackendRequest
     *
     * @returns CreateBackendResponse
     *
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
     * 创建后端服务在环境上的配置.
     *
     * @param request - CreateBackendModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBackendModelResponse
     *
     * @param CreateBackendModelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateBackendModelResponse
     */
    public function createBackendModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendId) {
            @$query['BackendId'] = $request->backendId;
        }

        if (null !== $request->backendModelData) {
            @$query['BackendModelData'] = $request->backendModelData;
        }

        if (null !== $request->backendType) {
            @$query['BackendType'] = $request->backendType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBackendModel',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBackendModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建后端服务在环境上的配置.
     *
     * @param request - CreateBackendModelRequest
     *
     * @returns CreateBackendModelResponse
     *
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
     * Creates a custom dataset.
     *
     * @param request - CreateDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatasetResponse
     *
     * @param CreateDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
     */
    public function createDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->datasetType) {
            @$query['DatasetType'] = $request->datasetType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataset',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom dataset.
     *
     * @param request - CreateDatasetRequest
     *
     * @returns CreateDatasetResponse
     *
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
     * 创建自定义数据集条目.
     *
     * @param request - CreateDatasetItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatasetItemResponse
     *
     * @param CreateDatasetItemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDatasetItemResponse
     */
    public function createDatasetItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->expiredTime) {
            @$query['ExpiredTime'] = $request->expiredTime;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDatasetItem',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDatasetItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建自定义数据集条目.
     *
     * @param request - CreateDatasetItemRequest
     *
     * @returns CreateDatasetItemResponse
     *
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
     * Creates an API Gateway instance.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->httpsPolicy) {
            @$query['HttpsPolicy'] = $request->httpsPolicy;
        }

        if (null !== $request->instanceCidr) {
            @$query['InstanceCidr'] = $request->instanceCidr;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceSpec) {
            @$query['InstanceSpec'] = $request->instanceSpec;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->userVpcId) {
            @$query['UserVpcId'] = $request->userVpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->zoneVSwitchSecurityGroup) {
            @$query['ZoneVSwitchSecurityGroup'] = $request->zoneVSwitchSecurityGroup;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API Gateway instance.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
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
     * 创建内网域名.
     *
     * @param request - CreateIntranetDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIntranetDomainResponse
     *
     * @param CreateIntranetDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateIntranetDomainResponse
     */
    public function createIntranetDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIntranetDomain',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIntranetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建内网域名.
     *
     * @param request - CreateIntranetDomainRequest
     *
     * @returns CreateIntranetDomainResponse
     *
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
     * Creates an access control list (ACL) in a region.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   An ACL must be bound to an API to take effect. After an ACL is bound to an API, the ACL takes effect on the API immediately.
     * *   You can add policies to an ACL when you create the ACL.
     * *   If an ACL does not have any policy, the ACL is ineffective.
     *
     * @param request - CreateIpControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIpControlResponse
     *
     * @param CreateIpControlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateIpControlResponse
     */
    public function createIpControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ipControlName) {
            @$query['IpControlName'] = $request->ipControlName;
        }

        if (null !== $request->ipControlPolicys) {
            @$query['IpControlPolicys'] = $request->ipControlPolicys;
        }

        if (null !== $request->ipControlType) {
            @$query['IpControlType'] = $request->ipControlType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIpControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control list (ACL) in a region.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   An ACL must be bound to an API to take effect. After an ACL is bound to an API, the ACL takes effect on the API immediately.
     * *   You can add policies to an ACL when you create the ACL.
     * *   If an ACL does not have any policy, the ACL is ineffective.
     *
     * @param request - CreateIpControlRequest
     *
     * @returns CreateIpControlResponse
     *
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
     * Creates a Simple Log Service configuration for an API.
     *
     * @param request - CreateLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogConfigResponse
     *
     * @param CreateLogConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateLogConfigResponse
     */
    public function createLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createSlr) {
            @$query['CreateSlr'] = $request->createSlr;
        }

        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->slsLogStore) {
            @$query['SlsLogStore'] = $request->slsLogStore;
        }

        if (null !== $request->slsProject) {
            @$query['SlsProject'] = $request->slsProject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLogConfig',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Simple Log Service configuration for an API.
     *
     * @param request - CreateLogConfigRequest
     *
     * @returns CreateLogConfigResponse
     *
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
     * Creates a model for an API group.
     *
     * @remarks
     *   For more information about the model definition, see [JSON Schema Draft 4](https://tools.ietf.org/html/draft-zyp-json-schema-04?spm=a2c4g.11186623.2.10.2e977ff7p4BpQd).
     * *   JSON Schema supports only element attributes of the Object type.
     *
     * @param request - CreateModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelResponse
     *
     * @param CreateModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->schema) {
            @$query['Schema'] = $request->schema;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateModel',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model for an API group.
     *
     * @remarks
     *   For more information about the model definition, see [JSON Schema Draft 4](https://tools.ietf.org/html/draft-zyp-json-schema-04?spm=a2c4g.11186623.2.10.2e977ff7p4BpQd).
     * *   JSON Schema supports only element attributes of the Object type.
     *
     * @param request - CreateModelRequest
     *
     * @returns CreateModelResponse
     *
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelWithOptions($request, $runtime);
    }

    /**
     * Enables CloudMonitor alerting for a specified API group.
     *
     * @param request - CreateMonitorGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorGroupResponse
     *
     * @param CreateMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMonitorGroupResponse
     */
    public function createMonitorGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auth) {
            @$query['Auth'] = $request->auth;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->rawMonitorGroupId) {
            @$query['RawMonitorGroupId'] = $request->rawMonitorGroupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorGroup',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables CloudMonitor alerting for a specified API group.
     *
     * @param request - CreateMonitorGroupRequest
     *
     * @returns CreateMonitorGroupResponse
     *
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
     * Creates a plug-in.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The number of plug-ins of the same type that each user can create is limited. Different limits apply to different plug-in types.
     * *   The plug-in definitions for advanced features are restricted.
     * *   Plug-ins must be bound to APIs to take effect. After a plug-in is bound, it takes effect on that API immediately.
     *
     * @param request - CreatePluginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePluginResponse
     *
     * @param CreatePluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePluginResponse
     */
    public function createPluginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->pluginData) {
            @$query['PluginData'] = $request->pluginData;
        }

        if (null !== $request->pluginName) {
            @$query['PluginName'] = $request->pluginName;
        }

        if (null !== $request->pluginType) {
            @$query['PluginType'] = $request->pluginType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePlugin',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a plug-in.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The number of plug-ins of the same type that each user can create is limited. Different limits apply to different plug-in types.
     * *   The plug-in definitions for advanced features are restricted.
     * *   Plug-ins must be bound to APIs to take effect. After a plug-in is bound, it takes effect on that API immediately.
     *
     * @param request - CreatePluginRequest
     *
     * @returns CreatePluginResponse
     *
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
     * Creates an internal domain name resolution and adds a resolution record.
     *
     * @remarks
     * An internal domain name resolution of the virtual private cloud (VPC) type can be bound only to traditional dedicated instances. An internal domain name resolution of the A type can be bound only to VPC integration dedicated instances.
     *
     * @param tmpReq - CreatePrivateDNSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrivateDNSResponse
     *
     * @param CreatePrivateDNSRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePrivateDNSResponse
     */
    public function createPrivateDNSWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePrivateDNSShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->records) {
            $request->recordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->records, 'Records', 'json');
        }

        $query = [];
        if (null !== $request->intranetDomain) {
            @$query['IntranetDomain'] = $request->intranetDomain;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->recordsShrink) {
            @$body['Records'] = $request->recordsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePrivateDNS',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePrivateDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an internal domain name resolution and adds a resolution record.
     *
     * @remarks
     * An internal domain name resolution of the virtual private cloud (VPC) type can be bound only to traditional dedicated instances. An internal domain name resolution of the A type can be bound only to VPC integration dedicated instances.
     *
     * @param request - CreatePrivateDNSRequest
     *
     * @returns CreatePrivateDNSResponse
     *
     * @param CreatePrivateDNSRequest $request
     *
     * @return CreatePrivateDNSResponse
     */
    public function createPrivateDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrivateDNSWithOptions($request, $runtime);
    }

    /**
     * Creates a backend signature key.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The API operation only creates a key policy. You must call the binding operation to bind the key to an API.
     * *   After the key is bound to the API, requests sent from API Gateway to the backend service contain signature strings. You can specify whether your backend service verifies these signature strings.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - CreateSignatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSignatureResponse
     *
     * @param CreateSignatureRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSignatureResponse
     */
    public function createSignatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->signatureKey) {
            @$query['SignatureKey'] = $request->signatureKey;
        }

        if (null !== $request->signatureName) {
            @$query['SignatureName'] = $request->signatureName;
        }

        if (null !== $request->signatureSecret) {
            @$query['SignatureSecret'] = $request->signatureSecret;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSignature',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backend signature key.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The API operation only creates a key policy. You must call the binding operation to bind the key to an API.
     * *   After the key is bound to the API, requests sent from API Gateway to the backend service contain signature strings. You can specify whether your backend service verifies these signature strings.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - CreateSignatureRequest
     *
     * @returns CreateSignatureResponse
     *
     * @param CreateSignatureRequest $request
     *
     * @return CreateSignatureResponse
     */
    public function createSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSignatureWithOptions($request, $runtime);
    }

    /**
     * Creates a custom throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   Throttling policies must be bound to APIs to take effect. After a policy is bound to an API, it goes into effect on that API immediately.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - CreateTrafficControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrafficControlResponse
     *
     * @param CreateTrafficControlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTrafficControlResponse
     */
    public function createTrafficControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiDefault) {
            @$query['ApiDefault'] = $request->apiDefault;
        }

        if (null !== $request->appDefault) {
            @$query['AppDefault'] = $request->appDefault;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->trafficControlName) {
            @$query['TrafficControlName'] = $request->trafficControlName;
        }

        if (null !== $request->trafficControlUnit) {
            @$query['TrafficControlUnit'] = $request->trafficControlUnit;
        }

        if (null !== $request->userDefault) {
            @$query['UserDefault'] = $request->userDefault;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTrafficControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   Throttling policies must be bound to APIs to take effect. After a policy is bound to an API, it goes into effect on that API immediately.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - CreateTrafficControlRequest
     *
     * @returns CreateTrafficControlResponse
     *
     * @param CreateTrafficControlRequest $request
     *
     * @return CreateTrafficControlResponse
     */
    public function createTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrafficControlWithOptions($request, $runtime);
    }

    /**
     * This feature provides instance-level access control capabilities for dedicated instances. Deletes an access control policy.
     *
     * @param request - DeleteAccessControlListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccessControlListResponse
     *
     * @param DeleteAccessControlListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAccessControlListResponse
     */
    public function deleteAccessControlListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccessControlList',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccessControlListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This feature provides instance-level access control capabilities for dedicated instances. Deletes an access control policy.
     *
     * @param request - DeleteAccessControlListRequest
     *
     * @returns DeleteAccessControlListResponse
     *
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
     * Deletes all custom special policies of a specified throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     *
     * @param request - DeleteAllTrafficSpecialControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAllTrafficSpecialControlResponse
     *
     * @param DeleteAllTrafficSpecialControlRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteAllTrafficSpecialControlResponse
     */
    public function deleteAllTrafficSpecialControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->trafficControlId) {
            @$query['TrafficControlId'] = $request->trafficControlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAllTrafficSpecialControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAllTrafficSpecialControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes all custom special policies of a specified throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     *
     * @param request - DeleteAllTrafficSpecialControlRequest
     *
     * @returns DeleteAllTrafficSpecialControlResponse
     *
     * @param DeleteAllTrafficSpecialControlRequest $request
     *
     * @return DeleteAllTrafficSpecialControlResponse
     */
    public function deleteAllTrafficSpecialControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * Deletes the definition of a specified API.
     *
     * @remarks
     *   This operation is intended for API providers and cannot be undone after it is complete.
     * *   An API that is running in the runtime environment must be unpublished before you can delete the API.****
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeleteApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiResponse
     *
     * @param DeleteApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteApiResponse
     */
    public function deleteApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the definition of a specified API.
     *
     * @remarks
     *   This operation is intended for API providers and cannot be undone after it is complete.
     * *   An API that is running in the runtime environment must be unpublished before you can delete the API.****
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeleteApiRequest
     *
     * @returns DeleteApiResponse
     *
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
     * Deletes an API group.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   An API group that contains APIs cannot be deleted. To delete the API group, you must first delete its APIs.
     * *   After an API group is deleted, the second-level domain name bound to the API group is automatically invalidated.
     * *   If the specified API group does not exist, a success response is returned.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeleteApiGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiGroupResponse
     *
     * @param DeleteApiGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteApiGroupResponse
     */
    public function deleteApiGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApiGroup',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API group.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   An API group that contains APIs cannot be deleted. To delete the API group, you must first delete its APIs.
     * *   After an API group is deleted, the second-level domain name bound to the API group is automatically invalidated.
     * *   If the specified API group does not exist, a success response is returned.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeleteApiGroupRequest
     *
     * @returns DeleteApiGroupResponse
     *
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
     * Deletes an API product. Deleting an API product causes the association between APIs and the deleted API product to be deleted as well. Exercise caution when you delete an API product. If any API in the API product is associated with an application, the API product fails to be deleted.
     *
     * @param request - DeleteApiProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiProductResponse
     *
     * @param DeleteApiProductRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteApiProductResponse
     */
    public function deleteApiProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiProductId) {
            @$query['ApiProductId'] = $request->apiProductId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApiProduct',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API product. Deleting an API product causes the association between APIs and the deleted API product to be deleted as well. Exercise caution when you delete an API product. If any API in the API product is associated with an application, the API product fails to be deleted.
     *
     * @param request - DeleteApiProductRequest
     *
     * @returns DeleteApiProductResponse
     *
     * @param DeleteApiProductRequest $request
     *
     * @return DeleteApiProductResponse
     */
    public function deleteApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiProductWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified variable in a specified environment.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - DeleteApiStageVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiStageVariableResponse
     *
     * @param DeleteApiStageVariableRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteApiStageVariableResponse
     */
    public function deleteApiStageVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageId) {
            @$query['StageId'] = $request->stageId;
        }

        if (null !== $request->variableName) {
            @$query['VariableName'] = $request->variableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApiStageVariable',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApiStageVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified variable in a specified environment.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - DeleteApiStageVariableRequest
     *
     * @returns DeleteApiStageVariableResponse
     *
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
     * Deletes an application.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   After an application is deleted, the application and its API authorization cannot be restored.
     * *   You can call this operation up to 50 times per second per account.
     *
     * @param request - DeleteAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppResponse
     *
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApp',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an application.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   After an application is deleted, the application and its API authorization cannot be restored.
     * *   You can call this operation up to 50 times per second per account.
     *
     * @param request - DeleteAppRequest
     *
     * @returns DeleteAppResponse
     *
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
     * Deletes the AppCode of an application.
     *
     * @param request - DeleteAppCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppCodeResponse
     *
     * @param DeleteAppCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAppCodeResponse
     */
    public function deleteAppCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppCode',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the AppCode of an application.
     *
     * @param request - DeleteAppCodeRequest
     *
     * @returns DeleteAppCodeResponse
     *
     * @param DeleteAppCodeRequest $request
     *
     * @return DeleteAppCodeResponse
     */
    public function deleteAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppCodeWithOptions($request, $runtime);
    }

    /**
     * Deletes the AppKey and AppSecret of an application.
     *
     * @param request - DeleteAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppKeyResponse
     *
     * @param DeleteAppKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteAppKeyResponse
     */
    public function deleteAppKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppKey',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the AppKey and AppSecret of an application.
     *
     * @param request - DeleteAppKeyRequest
     *
     * @returns DeleteAppKeyResponse
     *
     * @param DeleteAppKeyRequest $request
     *
     * @return DeleteAppKeyResponse
     */
    public function deleteAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppKeyWithOptions($request, $runtime);
    }

    /**
     * Deletes a backend service.
     *
     * @param request - DeleteBackendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackendResponse
     *
     * @param DeleteBackendRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBackendResponse
     */
    public function deleteBackendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendId) {
            @$query['BackendId'] = $request->backendId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackend',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a backend service.
     *
     * @param request - DeleteBackendRequest
     *
     * @returns DeleteBackendResponse
     *
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
     * Deletes the definition of a backend service in an environment. After the definition is deleted, the API that uses the backend service and is published to this environment will be unpublished.
     *
     * @param request - DeleteBackendModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackendModelResponse
     *
     * @param DeleteBackendModelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteBackendModelResponse
     */
    public function deleteBackendModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendId) {
            @$query['BackendId'] = $request->backendId;
        }

        if (null !== $request->backendModelId) {
            @$query['BackendModelId'] = $request->backendModelId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackendModel',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBackendModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the definition of a backend service in an environment. After the definition is deleted, the API that uses the backend service and is published to this environment will be unpublished.
     *
     * @param request - DeleteBackendModelRequest
     *
     * @returns DeleteBackendModelResponse
     *
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
     * 删除自定义数据集.
     *
     * @param request - DeleteDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatasetResponse
     *
     * @param DeleteDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataset',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除自定义数据集.
     *
     * @param request - DeleteDatasetRequest
     *
     * @returns DeleteDatasetResponse
     *
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
     * Deletes a data entry from a custom dataset.
     *
     * @param request - DeleteDatasetItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatasetItemResponse
     *
     * @param DeleteDatasetItemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDatasetItemResponse
     */
    public function deleteDatasetItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetItemId) {
            @$query['DatasetItemId'] = $request->datasetItemId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDatasetItem',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDatasetItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data entry from a custom dataset.
     *
     * @param request - DeleteDatasetItemRequest
     *
     * @returns DeleteDatasetItemResponse
     *
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
     * Unbinds a custom domain name from an API group.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   If the specified domain name does not exist, a successful response will still appear.
     * *   Unbinding a domain name from an API group will affect access to the APIs in the group. Exercise caution when using this operation.
     *
     * @param request - DeleteDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a custom domain name from an API group.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   If the specified domain name does not exist, a successful response will still appear.
     * *   Unbinding a domain name from an API group will affect access to the APIs in the group. Exercise caution when using this operation.
     *
     * @param request - DeleteDomainRequest
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * Deletes the SSL certificate of a specified domain name. This operation is intended for API providers. If the SSL certificate does not exist, a success response is still returned. If the specified API group does not exist, the InvalidGroupId.NotFound error is returned. Access over HTTPS is not supported after the SSL certificate is deleted. Exercise caution when using this API operation.
     *
     * @param request - DeleteDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainCertificateResponse
     *
     * @param DeleteDomainCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDomainCertificateResponse
     */
    public function deleteDomainCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomainCertificate',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the SSL certificate of a specified domain name. This operation is intended for API providers. If the SSL certificate does not exist, a success response is still returned. If the specified API group does not exist, the InvalidGroupId.NotFound error is returned. Access over HTTPS is not supported after the SSL certificate is deleted. Exercise caution when using this API operation.
     *
     * @param request - DeleteDomainCertificateRequest
     *
     * @returns DeleteDomainCertificateResponse
     *
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
     * Deletes an API Gateway instance.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API Gateway instance.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
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
     * Deletes an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   If the ACL is bound to an API, you must unbind the ACL from the API before you can delete the ACL. Otherwise, an error is returned.
     * *   If you call this operation on an ACL that does not exist, a success message is returned.
     *
     * @param request - DeleteIpControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIpControlResponse
     *
     * @param DeleteIpControlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteIpControlResponse
     */
    public function deleteIpControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIpControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   If the ACL is bound to an API, you must unbind the ACL from the API before you can delete the ACL. Otherwise, an error is returned.
     * *   If you call this operation on an ACL that does not exist, a success message is returned.
     *
     * @param request - DeleteIpControlRequest
     *
     * @returns DeleteIpControlResponse
     *
     * @param DeleteIpControlRequest $request
     *
     * @return DeleteIpControlResponse
     */
    public function deleteIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpControlWithOptions($request, $runtime);
    }

    /**
     * Delete the specified log configuration.
     *
     * @param request - DeleteLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLogConfigResponse
     *
     * @param DeleteLogConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteLogConfigResponse
     */
    public function deleteLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLogConfig',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete the specified log configuration.
     *
     * @param request - DeleteLogConfigRequest
     *
     * @returns DeleteLogConfigResponse
     *
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
     * Deletes a model.
     *
     * @param request - DeleteModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelResponse
     *
     * @param DeleteModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModel',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a model.
     *
     * @param request - DeleteModelRequest
     *
     * @returns DeleteModelResponse
     *
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
     * Deletes a CloudMonitor application group corresponding to an API group.
     *
     * @param request - DeleteMonitorGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorGroupResponse
     *
     * @param DeleteMonitorGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMonitorGroupResponse
     */
    public function deleteMonitorGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->rawMonitorGroupId) {
            @$query['RawMonitorGroupId'] = $request->rawMonitorGroupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorGroup',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMonitorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a CloudMonitor application group corresponding to an API group.
     *
     * @param request - DeleteMonitorGroupRequest
     *
     * @returns DeleteMonitorGroupResponse
     *
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
     * Deletes a plug-in.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   You must first unbind the plug-in from the API. Otherwise, an error is reported when you delete the plug-in.
     *
     * @param request - DeletePluginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePluginResponse
     *
     * @param DeletePluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePluginResponse
     */
    public function deletePluginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePlugin',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a plug-in.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   You must first unbind the plug-in from the API. Otherwise, an error is reported when you delete the plug-in.
     *
     * @param request - DeletePluginRequest
     *
     * @returns DeletePluginResponse
     *
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
     * Deletes an internal domain name resolution.
     *
     * @param request - DeletePrivateDNSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivateDNSResponse
     *
     * @param DeletePrivateDNSRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeletePrivateDNSResponse
     */
    public function deletePrivateDNSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->intranetDomain) {
            @$query['IntranetDomain'] = $request->intranetDomain;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePrivateDNS',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePrivateDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an internal domain name resolution.
     *
     * @param request - DeletePrivateDNSRequest
     *
     * @returns DeletePrivateDNSResponse
     *
     * @param DeletePrivateDNSRequest $request
     *
     * @return DeletePrivateDNSResponse
     */
    public function deletePrivateDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateDNSWithOptions($request, $runtime);
    }

    /**
     * Deletes a backend signature key.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API operation deletes an existing backend signature key.
     * *   You cannot delete a key that is bound to an API. To delete the key, you must unbind it first.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeleteSignatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSignatureResponse
     *
     * @param DeleteSignatureRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->signatureId) {
            @$query['SignatureId'] = $request->signatureId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSignature',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a backend signature key.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API operation deletes an existing backend signature key.
     * *   You cannot delete a key that is bound to an API. To delete the key, you must unbind it first.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeleteSignatureRequest
     *
     * @returns DeleteSignatureResponse
     *
     * @param DeleteSignatureRequest $request
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSignatureWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom throttling policy and the special throttling rules in the policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   If the throttling policy you want to delete is bound to APIs, you need to unbind the policy first. Otherwise, an error is reported when you delete the policy.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeleteTrafficControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTrafficControlResponse
     *
     * @param DeleteTrafficControlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteTrafficControlResponse
     */
    public function deleteTrafficControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->trafficControlId) {
            @$query['TrafficControlId'] = $request->trafficControlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTrafficControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom throttling policy and the special throttling rules in the policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   If the throttling policy you want to delete is bound to APIs, you need to unbind the policy first. Otherwise, an error is reported when you delete the policy.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeleteTrafficControlRequest
     *
     * @returns DeleteTrafficControlResponse
     *
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
     * Deletes a custom special throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   You can obtain the input parameters required in this operation by calling other APIs.
     *
     * @param request - DeleteTrafficSpecialControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTrafficSpecialControlResponse
     *
     * @param DeleteTrafficSpecialControlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteTrafficSpecialControlResponse
     */
    public function deleteTrafficSpecialControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->specialKey) {
            @$query['SpecialKey'] = $request->specialKey;
        }

        if (null !== $request->specialType) {
            @$query['SpecialType'] = $request->specialType;
        }

        if (null !== $request->trafficControlId) {
            @$query['TrafficControlId'] = $request->trafficControlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTrafficSpecialControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTrafficSpecialControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom special throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   You can obtain the input parameters required in this operation by calling other APIs.
     *
     * @param request - DeleteTrafficSpecialControlRequest
     *
     * @returns DeleteTrafficSpecialControlResponse
     *
     * @param DeleteTrafficSpecialControlRequest $request
     *
     * @return DeleteTrafficSpecialControlResponse
     */
    public function deleteTrafficSpecialControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * Publishes an API to an environment.
     *
     * @remarks
     *   This operation is intended for API providers. Only the API that you have defined and published to a runtime environment can be called.
     * *   An API is published to a cluster in under 5 seconds.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeployApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployApiResponse
     *
     * @param DeployApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeployApiResponse
     */
    public function deployApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeployApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes an API to an environment.
     *
     * @remarks
     *   This operation is intended for API providers. Only the API that you have defined and published to a runtime environment can be called.
     * *   An API is published to a cluster in under 5 seconds.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - DeployApiRequest
     *
     * @returns DeployApiResponse
     *
     * @param DeployApiRequest $request
     *
     * @return DeployApiResponse
     */
    public function deployApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployApiWithOptions($request, $runtime);
    }

    /**
     * 查询批量下线API任务
     *
     * @param request - DescribeAbolishApiTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAbolishApiTaskResponse
     *
     * @param DescribeAbolishApiTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAbolishApiTaskResponse
     */
    public function describeAbolishApiTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationUid) {
            @$query['OperationUid'] = $request->operationUid;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAbolishApiTask',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAbolishApiTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询批量下线API任务
     *
     * @param request - DescribeAbolishApiTaskRequest
     *
     * @returns DescribeAbolishApiTaskResponse
     *
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
     * This feature provides instance-level access control for dedicated instances. Queries the details of an access control policy.
     *
     * @param request - DescribeAccessControlListAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessControlListAttributeResponse
     *
     * @param DescribeAccessControlListAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeAccessControlListAttributeResponse
     */
    public function describeAccessControlListAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessControlListAttribute',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessControlListAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This feature provides instance-level access control for dedicated instances. Queries the details of an access control policy.
     *
     * @param request - DescribeAccessControlListAttributeRequest
     *
     * @returns DescribeAccessControlListAttributeResponse
     *
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
     * This feature provides instance-level access control for dedicated instances. Queries access control policies.
     *
     * @param request - DescribeAccessControlListsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccessControlListsResponse
     *
     * @param DescribeAccessControlListsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAccessControlListsResponse
     */
    public function describeAccessControlListsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclName) {
            @$query['AclName'] = $request->aclName;
        }

        if (null !== $request->addressIPVersion) {
            @$query['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccessControlLists',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccessControlListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This feature provides instance-level access control for dedicated instances. Queries access control policies.
     *
     * @param request - DescribeAccessControlListsRequest
     *
     * @returns DescribeAccessControlListsResponse
     *
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
     * Queries the definition of an API.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - DescribeApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiResponse
     *
     * @param DescribeApiRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeApiResponse
     */
    public function describeApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the definition of an API.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - DescribeApiRequest
     *
     * @returns DescribeApiResponse
     *
     * @param DescribeApiRequest $request
     *
     * @return DescribeApiResponse
     */
    public function describeApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiWithOptions($request, $runtime);
    }

    /**
     * Queries the documentation of an API.
     *
     * @remarks
     *   For API callers, the specified API must be a public or authorized private API that has been published to a runtime environment.
     * *   When you call this operation as an API caller, the service information, parameter definitions, and other details of the API you specify are returned.
     * *   When you call this operation as an API provider, the definition of the specified API running in the specified runtime environment is returned. The returned definition takes effect in the runtime environment, and may be different from the definition of the API you modify.
     * *   Before you call this operation as an API provider, ensure that the API to be queried is a public one or that your application has been authorized to call the API, because authentication on API callers is required.
     *
     * @param request - DescribeApiDocRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiDocResponse
     *
     * @param DescribeApiDocRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeApiDocResponse
     */
    public function describeApiDocWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiDoc',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the documentation of an API.
     *
     * @remarks
     *   For API callers, the specified API must be a public or authorized private API that has been published to a runtime environment.
     * *   When you call this operation as an API caller, the service information, parameter definitions, and other details of the API you specify are returned.
     * *   When you call this operation as an API provider, the definition of the specified API running in the specified runtime environment is returned. The returned definition takes effect in the runtime environment, and may be different from the definition of the API you modify.
     * *   Before you call this operation as an API provider, ensure that the API to be queried is a public one or that your application has been authorized to call the API, because authentication on API callers is required.
     *
     * @param request - DescribeApiDocRequest
     *
     * @returns DescribeApiDocResponse
     *
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
     * You can call this operation to query details about an API group, including the automatically assigned second-level domain name, custom domain name, and SSL certificate.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - DescribeApiGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiGroupResponse
     *
     * @param DescribeApiGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeApiGroupResponse
     */
    public function describeApiGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiGroup',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query details about an API group, including the automatically assigned second-level domain name, custom domain name, and SSL certificate.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - DescribeApiGroupRequest
     *
     * @returns DescribeApiGroupResponse
     *
     * @param DescribeApiGroupRequest $request
     *
     * @return DescribeApiGroupResponse
     */
    public function describeApiGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the VPC whitelist that is allowed to access an API group.
     *
     * @param request - DescribeApiGroupVpcWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiGroupVpcWhitelistResponse
     *
     * @param DescribeApiGroupVpcWhitelistRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeApiGroupVpcWhitelistResponse
     */
    public function describeApiGroupVpcWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiGroupVpcWhitelist',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiGroupVpcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the VPC whitelist that is allowed to access an API group.
     *
     * @param request - DescribeApiGroupVpcWhitelistRequest
     *
     * @returns DescribeApiGroupVpcWhitelistResponse
     *
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
     * Queries existing API groups and their basic information.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - DescribeApiGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiGroupsResponse
     *
     * @param DescribeApiGroupsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeApiGroupsResponse
     */
    public function describeApiGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->basePath) {
            @$query['BasePath'] = $request->basePath;
        }

        if (null !== $request->enableTagAuth) {
            @$query['EnableTagAuth'] = $request->enableTagAuth;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiGroups',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries existing API groups and their basic information.
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - DescribeApiGroupsRequest
     *
     * @returns DescribeApiGroupsResponse
     *
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
     * Queries the historical versions of a specified API.
     *
     * @remarks
     *   This operation is intended for API providers. Only APIs that have been published have historical version records.
     * *   This operation allows you to obtain the historical versions of an API. This operation is always called by other operations.
     *
     * @param request - DescribeApiHistoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiHistoriesResponse
     *
     * @param DescribeApiHistoriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeApiHistoriesResponse
     */
    public function describeApiHistoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiHistories',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the historical versions of a specified API.
     *
     * @remarks
     *   This operation is intended for API providers. Only APIs that have been published have historical version records.
     * *   This operation allows you to obtain the historical versions of an API. This operation is always called by other operations.
     *
     * @param request - DescribeApiHistoriesRequest
     *
     * @returns DescribeApiHistoriesResponse
     *
     * @param DescribeApiHistoriesRequest $request
     *
     * @return DescribeApiHistoriesResponse
     */
    public function describeApiHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiHistoriesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified historical version of a specified API definition.
     *
     * @remarks
     * Queries the details of a specified historical version of a specified API definition.
     * *   This API is intended for API providers.
     * *   API Gateway records the time and definition of an API every time the API is published. You can use the version number obtained from other operations to query definition details at a certain publication.
     *
     * @param request - DescribeApiHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiHistoryResponse
     *
     * @param DescribeApiHistoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiHistoryResponse
     */
    public function describeApiHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->historyVersion) {
            @$query['HistoryVersion'] = $request->historyVersion;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiHistory',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified historical version of a specified API definition.
     *
     * @remarks
     * Queries the details of a specified historical version of a specified API definition.
     * *   This API is intended for API providers.
     * *   API Gateway records the time and definition of an API every time the API is published. You can use the version number obtained from other operations to query definition details at a certain publication.
     *
     * @param request - DescribeApiHistoryRequest
     *
     * @returns DescribeApiHistoryResponse
     *
     * @param DescribeApiHistoryRequest $request
     *
     * @return DescribeApiHistoryResponse
     */
    public function describeApiHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries the access control lists (ACLs) that are bound to all the APIs in an API group in a specified environment.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   If an optional parameter is not specified, all results are returned on separate pages.
     * ·
     *
     * @param request - DescribeApiIpControlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiIpControlsResponse
     *
     * @param DescribeApiIpControlsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeApiIpControlsResponse
     */
    public function describeApiIpControlsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiIpControls',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiIpControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access control lists (ACLs) that are bound to all the APIs in an API group in a specified environment.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   If an optional parameter is not specified, all results are returned on separate pages.
     * ·
     *
     * @param request - DescribeApiIpControlsRequest
     *
     * @returns DescribeApiIpControlsResponse
     *
     * @param DescribeApiIpControlsRequest $request
     *
     * @return DescribeApiIpControlsResponse
     */
    public function describeApiIpControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiIpControlsWithOptions($request, $runtime);
    }

    /**
     * Queries the response time statistics of an API.
     *
     * @remarks
     * You can call this operation to query the latency metrics in milliseconds for a specified API.
     * *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *
     * @param request - DescribeApiLatencyDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiLatencyDataResponse
     *
     * @param DescribeApiLatencyDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApiLatencyDataResponse
     */
    public function describeApiLatencyDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiLatencyData',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiLatencyDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the response time statistics of an API.
     *
     * @remarks
     * You can call this operation to query the latency metrics in milliseconds for a specified API.
     * *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *
     * @param request - DescribeApiLatencyDataRequest
     *
     * @returns DescribeApiLatencyDataResponse
     *
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
     * Queries the Alibaba Cloud Marketplace attributes of an API.
     *
     * @param request - DescribeApiMarketAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiMarketAttributesResponse
     *
     * @param DescribeApiMarketAttributesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeApiMarketAttributesResponse
     */
    public function describeApiMarketAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiMarketAttributes',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiMarketAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Alibaba Cloud Marketplace attributes of an API.
     *
     * @param request - DescribeApiMarketAttributesRequest
     *
     * @returns DescribeApiMarketAttributesResponse
     *
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
     * Queries the attached APIs of an API product.
     *
     * @param request - DescribeApiProductApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiProductApisResponse
     *
     * @param DescribeApiProductApisRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApiProductApisResponse
     */
    public function describeApiProductApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiProductId) {
            @$query['ApiProductId'] = $request->apiProductId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiProductApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiProductApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attached APIs of an API product.
     *
     * @param request - DescribeApiProductApisRequest
     *
     * @returns DescribeApiProductApisResponse
     *
     * @param DescribeApiProductApisRequest $request
     *
     * @return DescribeApiProductApisResponse
     */
    public function describeApiProductApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiProductApisWithOptions($request, $runtime);
    }

    /**
     * Queries API products by application.
     *
     * @param request - DescribeApiProductsByAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiProductsByAppResponse
     *
     * @param DescribeApiProductsByAppRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeApiProductsByAppResponse
     */
    public function describeApiProductsByAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiProductsByApp',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiProductsByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries API products by application.
     *
     * @param request - DescribeApiProductsByAppRequest
     *
     * @returns DescribeApiProductsByAppResponse
     *
     * @param DescribeApiProductsByAppRequest $request
     *
     * @return DescribeApiProductsByAppResponse
     */
    public function describeApiProductsByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiProductsByAppWithOptions($request, $runtime);
    }

    /**
     * Queries the QPS statistics of an API.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *
     * @param request - DescribeApiQpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiQpsDataResponse
     *
     * @param DescribeApiQpsDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeApiQpsDataResponse
     */
    public function describeApiQpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiQpsData',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the QPS statistics of an API.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *
     * @param request - DescribeApiQpsDataRequest
     *
     * @returns DescribeApiQpsDataResponse
     *
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
     * Queries the backend signature keys that are bound to the APIs of a specified API group in a specified environment.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The ApiIds parameter is optional. If this parameter is not specified, all results in the specified environment of an API group are returned.
     *
     * @param request - DescribeApiSignaturesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiSignaturesResponse
     *
     * @param DescribeApiSignaturesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeApiSignaturesResponse
     */
    public function describeApiSignaturesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiSignatures',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiSignaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backend signature keys that are bound to the APIs of a specified API group in a specified environment.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The ApiIds parameter is optional. If this parameter is not specified, all results in the specified environment of an API group are returned.
     *
     * @param request - DescribeApiSignaturesRequest
     *
     * @returns DescribeApiSignaturesResponse
     *
     * @param DescribeApiSignaturesRequest $request
     *
     * @return DescribeApiSignaturesResponse
     */
    public function describeApiSignatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiSignaturesWithOptions($request, $runtime);
    }

    /**
     * Queries the throttling policies bound to all members of an API group in a specified environment.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The ApiIds parameter is optional. If this parameter is not specified, all results in the specified environment of an API group are returned.
     *
     * @param request - DescribeApiTrafficControlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiTrafficControlsResponse
     *
     * @param DescribeApiTrafficControlsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeApiTrafficControlsResponse
     */
    public function describeApiTrafficControlsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiTrafficControls',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiTrafficControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the throttling policies bound to all members of an API group in a specified environment.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The ApiIds parameter is optional. If this parameter is not specified, all results in the specified environment of an API group are returned.
     *
     * @param request - DescribeApiTrafficControlsRequest
     *
     * @returns DescribeApiTrafficControlsResponse
     *
     * @param DescribeApiTrafficControlsRequest $request
     *
     * @return DescribeApiTrafficControlsResponse
     */
    public function describeApiTrafficControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiTrafficControlsWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on the traffic of an API.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *
     * @param request - DescribeApiTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApiTrafficDataResponse
     *
     * @param DescribeApiTrafficDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeApiTrafficDataResponse
     */
    public function describeApiTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApiTrafficData',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApiTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on the traffic of an API.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   Only statistics for API calls made in the release environment are collected by default.
     *
     * @param request - DescribeApiTrafficDataRequest
     *
     * @returns DescribeApiTrafficDataResponse
     *
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
     * Queries a list of APIs that are being defined.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   This operation returns a list of all APIs that are being defined. The basic information about these APIs is also returned in the list.
     * *   This operation returns all APIs that are being edited, regardless of their environments. The returned definitions may be different from the definitions in the environments.
     *
     * @param request - DescribeApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisResponse
     *
     * @param DescribeApisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeApisResponse
     */
    public function describeApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiMethod) {
            @$query['ApiMethod'] = $request->apiMethod;
        }

        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->apiPath) {
            @$query['ApiPath'] = $request->apiPath;
        }

        if (null !== $request->catalogId) {
            @$query['CatalogId'] = $request->catalogId;
        }

        if (null !== $request->enableTagAuth) {
            @$query['EnableTagAuth'] = $request->enableTagAuth;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->unDeployed) {
            @$query['UnDeployed'] = $request->unDeployed;
        }

        if (null !== $request->visibility) {
            @$query['Visibility'] = $request->visibility;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of APIs that are being defined.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   This operation returns a list of all APIs that are being defined. The basic information about these APIs is also returned in the list.
     * *   This operation returns all APIs that are being edited, regardless of their environments. The returned definitions may be different from the definitions in the environments.
     *
     * @param request - DescribeApisRequest
     *
     * @returns DescribeApisResponse
     *
     * @param DescribeApisRequest $request
     *
     * @return DescribeApisResponse
     */
    public function describeApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisWithOptions($request, $runtime);
    }

    /**
     * Queries the APIs with which an application is associated.
     *
     * @param request - DescribeApisByAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisByAppResponse
     *
     * @param DescribeApisByAppRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeApisByAppResponse
     */
    public function describeApisByAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->apiUid) {
            @$query['ApiUid'] = $request->apiUid;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->method) {
            @$query['Method'] = $request->method;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisByApp',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the APIs with which an application is associated.
     *
     * @param request - DescribeApisByAppRequest
     *
     * @returns DescribeApisByAppResponse
     *
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
     * Queries APIs in the draft or published state that are created by using a specified backend service.
     *
     * @param request - DescribeApisByBackendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisByBackendResponse
     *
     * @param DescribeApisByBackendRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeApisByBackendResponse
     */
    public function describeApisByBackendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendId) {
            @$query['BackendId'] = $request->backendId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisByBackend',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisByBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries APIs in the draft or published state that are created by using a specified backend service.
     *
     * @param request - DescribeApisByBackendRequest
     *
     * @returns DescribeApisByBackendResponse
     *
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
     * Queries the APIs that are bound to an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   You can specify PageNumber to obtain the result on the specified page.
     *
     * @param request - DescribeApisByIpControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisByIpControlResponse
     *
     * @param DescribeApisByIpControlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApisByIpControlResponse
     */
    public function describeApisByIpControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisByIpControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisByIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the APIs that are bound to an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   You can specify PageNumber to obtain the result on the specified page.
     *
     * @param request - DescribeApisByIpControlRequest
     *
     * @returns DescribeApisByIpControlResponse
     *
     * @param DescribeApisByIpControlRequest $request
     *
     * @return DescribeApisByIpControlResponse
     */
    public function describeApisByIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByIpControlWithOptions($request, $runtime);
    }

    /**
     * Queries the APIs to which a specified backend signature key is bound.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The results are returned on separate pages. You can specify PageNumber to obtain the result on the specified page.
     *
     * @param request - DescribeApisBySignatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisBySignatureResponse
     *
     * @param DescribeApisBySignatureRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApisBySignatureResponse
     */
    public function describeApisBySignatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->signatureId) {
            @$query['SignatureId'] = $request->signatureId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisBySignature',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisBySignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the APIs to which a specified backend signature key is bound.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The results are returned on separate pages. You can specify PageNumber to obtain the result on the specified page.
     *
     * @param request - DescribeApisBySignatureRequest
     *
     * @returns DescribeApisBySignatureResponse
     *
     * @param DescribeApisBySignatureRequest $request
     *
     * @return DescribeApisBySignatureResponse
     */
    public function describeApisBySignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisBySignatureWithOptions($request, $runtime);
    }

    /**
     * Queries the APIs to which a specified throttling policy is bound.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   You can specify PageNumber to obtain the result on the specified page.
     *
     * @param request - DescribeApisByTrafficControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisByTrafficControlResponse
     *
     * @param DescribeApisByTrafficControlRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeApisByTrafficControlResponse
     */
    public function describeApisByTrafficControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->trafficControlId) {
            @$query['TrafficControlId'] = $request->trafficControlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisByTrafficControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisByTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the APIs to which a specified throttling policy is bound.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   You can specify PageNumber to obtain the result on the specified page.
     *
     * @param request - DescribeApisByTrafficControlRequest
     *
     * @returns DescribeApisByTrafficControlResponse
     *
     * @param DescribeApisByTrafficControlRequest $request
     *
     * @return DescribeApisByTrafficControlResponse
     */
    public function describeApisByTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByTrafficControlWithOptions($request, $runtime);
    }

    /**
     * Queries the APIs that are associated with a virtual private cloud (VPC) access authorization in a region.
     *
     * @param request - DescribeApisByVpcAccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisByVpcAccessResponse
     *
     * @param DescribeApisByVpcAccessRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeApisByVpcAccessResponse
     */
    public function describeApisByVpcAccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcName) {
            @$query['VpcName'] = $request->vpcName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisByVpcAccess',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisByVpcAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the APIs that are associated with a virtual private cloud (VPC) access authorization in a region.
     *
     * @param request - DescribeApisByVpcAccessRequest
     *
     * @returns DescribeApisByVpcAccessResponse
     *
     * @param DescribeApisByVpcAccessRequest $request
     *
     * @return DescribeApisByVpcAccessResponse
     */
    public function describeApisByVpcAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByVpcAccessWithOptions($request, $runtime);
    }

    /**
     * Queries APIs by application. The environment information is also returned.
     *
     * @param request - DescribeApisWithStageNameIntegratedByAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApisWithStageNameIntegratedByAppResponse
     *
     * @param DescribeApisWithStageNameIntegratedByAppRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeApisWithStageNameIntegratedByAppResponse
     */
    public function describeApisWithStageNameIntegratedByAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->apiUid) {
            @$query['ApiUid'] = $request->apiUid;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->method) {
            @$query['Method'] = $request->method;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApisWithStageNameIntegratedByApp',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApisWithStageNameIntegratedByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries APIs by application. The environment information is also returned.
     *
     * @param request - DescribeApisWithStageNameIntegratedByAppRequest
     *
     * @returns DescribeApisWithStageNameIntegratedByAppResponse
     *
     * @param DescribeApisWithStageNameIntegratedByAppRequest $request
     *
     * @return DescribeApisWithStageNameIntegratedByAppResponse
     */
    public function describeApisWithStageNameIntegratedByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisWithStageNameIntegratedByAppWithOptions($request, $runtime);
    }

    /**
     * Queries the apps that can be authorized.
     *
     * @param request - DescribeAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppResponse
     *
     * @param DescribeAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeAppResponse
     */
    public function describeAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApp',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the apps that can be authorized.
     *
     * @param request - DescribeAppRequest
     *
     * @returns DescribeAppResponse
     *
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
     * Queries apps and their basic information.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   AppId is optional.
     *
     * @param request - DescribeAppAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppAttributesResponse
     *
     * @param DescribeAppAttributesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAppAttributesResponse
     */
    public function describeAppAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->enableTagAuth) {
            @$query['EnableTagAuth'] = $request->enableTagAuth;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppAttributes',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries apps and their basic information.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   AppId is optional.
     *
     * @param request - DescribeAppAttributesRequest
     *
     * @returns DescribeAppAttributesResponse
     *
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
     * Queries the key-related information of an application.
     *
     * @param request - DescribeAppSecuritiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppSecuritiesResponse
     *
     * @param DescribeAppSecuritiesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAppSecuritiesResponse
     */
    public function describeAppSecuritiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppSecurities',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppSecuritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the key-related information of an application.
     *
     * @param request - DescribeAppSecuritiesRequest
     *
     * @returns DescribeAppSecuritiesResponse
     *
     * @param DescribeAppSecuritiesRequest $request
     *
     * @return DescribeAppSecuritiesResponse
     */
    public function describeAppSecurities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppSecuritiesWithOptions($request, $runtime);
    }

    /**
     * This key is used for authentication when an API call is made.
     *
     * @remarks
     *   This operation is intended for API callers.
     *
     * @param request - DescribeAppSecurityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppSecurityResponse
     *
     * @param DescribeAppSecurityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAppSecurityResponse
     */
    public function describeAppSecurityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppSecurity',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppSecurityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This key is used for authentication when an API call is made.
     *
     * @remarks
     *   This operation is intended for API callers.
     *
     * @param request - DescribeAppSecurityRequest
     *
     * @returns DescribeAppSecurityResponse
     *
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
     * Queries the apps of a user. App information is returned only to the app owner.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   API providers can use the app IDs or their Alibaba Cloud accounts to query app information.
     * *   Each provider can call this operation for a maximum of 200 times every day in a region.
     *
     * @param request - DescribeAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppsResponse
     *
     * @param DescribeAppsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeAppsResponse
     */
    public function describeAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appOwner) {
            @$query['AppOwner'] = $request->appOwner;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApps',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the apps of a user. App information is returned only to the app owner.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   API providers can use the app IDs or their Alibaba Cloud accounts to query app information.
     * *   Each provider can call this operation for a maximum of 200 times every day in a region.
     *
     * @param request - DescribeAppsRequest
     *
     * @returns DescribeAppsResponse
     *
     * @param DescribeAppsRequest $request
     *
     * @return DescribeAppsResponse
     */
    public function describeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsWithOptions($request, $runtime);
    }

    /**
     * Queries authorized applications by API product.
     *
     * @param request - DescribeAppsByApiProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAppsByApiProductResponse
     *
     * @param DescribeAppsByApiProductRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAppsByApiProductResponse
     */
    public function describeAppsByApiProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiProductId) {
            @$query['ApiProductId'] = $request->apiProductId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAppsByApiProduct',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAppsByApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries authorized applications by API product.
     *
     * @param request - DescribeAppsByApiProductRequest
     *
     * @returns DescribeAppsByApiProductResponse
     *
     * @param DescribeAppsByApiProductRequest $request
     *
     * @return DescribeAppsByApiProductResponse
     */
    public function describeAppsByApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsByApiProductWithOptions($request, $runtime);
    }

    /**
     * Queries the authorized APIs of a specified APP.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   The specified application can call all APIs included in the responses.
     *
     * @param request - DescribeAuthorizedApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuthorizedApisResponse
     *
     * @param DescribeAuthorizedApisRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuthorizedApisResponse
     */
    public function describeAuthorizedApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuthorizedApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuthorizedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the authorized APIs of a specified APP.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   The specified application can call all APIs included in the responses.
     *
     * @param request - DescribeAuthorizedApisRequest
     *
     * @returns DescribeAuthorizedApisResponse
     *
     * @param DescribeAuthorizedApisRequest $request
     *
     * @return DescribeAuthorizedApisResponse
     */
    public function describeAuthorizedApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthorizedApisWithOptions($request, $runtime);
    }

    /**
     * Queries the current apps.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   All applications included in the responses have access to the specified API.
     *
     * @param request - DescribeAuthorizedAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuthorizedAppsResponse
     *
     * @param DescribeAuthorizedAppsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuthorizedAppsResponse
     */
    public function describeAuthorizedAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appOwnerId) {
            @$query['AppOwnerId'] = $request->appOwnerId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuthorizedApps',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuthorizedAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current apps.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   All applications included in the responses have access to the specified API.
     *
     * @param request - DescribeAuthorizedAppsRequest
     *
     * @returns DescribeAuthorizedAppsResponse
     *
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
     * Queries the information about a backend service and its URL configured for each environment.
     *
     * @param request - DescribeBackendInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackendInfoResponse
     *
     * @param DescribeBackendInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackendInfoResponse
     */
    public function describeBackendInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendId) {
            @$query['BackendId'] = $request->backendId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackendInfo',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackendInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a backend service and its URL configured for each environment.
     *
     * @param request - DescribeBackendInfoRequest
     *
     * @returns DescribeBackendInfoResponse
     *
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
     * Queries backend services. You can filter backend services by backend service name and backend service type.
     *
     * @param request - DescribeBackendListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackendListResponse
     *
     * @param DescribeBackendListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackendListResponse
     */
    public function describeBackendListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendName) {
            @$query['BackendName'] = $request->backendName;
        }

        if (null !== $request->backendType) {
            @$query['BackendType'] = $request->backendType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackendList',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackendListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries backend services. You can filter backend services by backend service name and backend service type.
     *
     * @param request - DescribeBackendListRequest
     *
     * @returns DescribeBackendListResponse
     *
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
     * Queries the information about a single dataset.
     *
     * @param request - DescribeDatasetInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDatasetInfoResponse
     *
     * @param DescribeDatasetInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDatasetInfoResponse
     */
    public function describeDatasetInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDatasetInfo',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDatasetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a single dataset.
     *
     * @param request - DescribeDatasetInfoRequest
     *
     * @returns DescribeDatasetInfoResponse
     *
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
     * Queries a data entry in a custom dataset.
     *
     * @param request - DescribeDatasetItemInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDatasetItemInfoResponse
     *
     * @param DescribeDatasetItemInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDatasetItemInfoResponse
     */
    public function describeDatasetItemInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetItemId) {
            @$query['DatasetItemId'] = $request->datasetItemId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDatasetItemInfo',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDatasetItemInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a data entry in a custom dataset.
     *
     * @param request - DescribeDatasetItemInfoRequest
     *
     * @returns DescribeDatasetItemInfoResponse
     *
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
     * Queries the data entries of a custom dataset.
     *
     * @param request - DescribeDatasetItemListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDatasetItemListResponse
     *
     * @param DescribeDatasetItemListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDatasetItemListResponse
     */
    public function describeDatasetItemListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetItemIds) {
            @$query['DatasetItemIds'] = $request->datasetItemIds;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDatasetItemList',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDatasetItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data entries of a custom dataset.
     *
     * @param request - DescribeDatasetItemListRequest
     *
     * @returns DescribeDatasetItemListResponse
     *
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
     * Queries custom datasets.
     *
     * @param request - DescribeDatasetListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDatasetListResponse
     *
     * @param DescribeDatasetListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDatasetListResponse
     */
    public function describeDatasetListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetIds) {
            @$query['DatasetIds'] = $request->datasetIds;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDatasetList',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDatasetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom datasets.
     *
     * @param request - DescribeDatasetListRequest
     *
     * @returns DescribeDatasetListResponse
     *
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
     * Queries the progress of an asynchronous API publishing task.
     *
     * @param request - DescribeDeployApiTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeployApiTaskResponse
     *
     * @param DescribeDeployApiTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeployApiTaskResponse
     */
    public function describeDeployApiTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationUid) {
            @$query['OperationUid'] = $request->operationUid;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeployApiTask',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeployApiTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the progress of an asynchronous API publishing task.
     *
     * @param request - DescribeDeployApiTaskRequest
     *
     * @returns DescribeDeployApiTaskResponse
     *
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
     * Queries the definition of an API that takes effect in an environment. The definition may differ from the definition being edited.
     *
     * @param request - DescribeDeployedApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeployedApiResponse
     *
     * @param DescribeDeployedApiRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDeployedApiResponse
     */
    public function describeDeployedApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeployedApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeployedApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the definition of an API that takes effect in an environment. The definition may differ from the definition being edited.
     *
     * @param request - DescribeDeployedApiRequest
     *
     * @returns DescribeDeployedApiResponse
     *
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
     * Queries the APIs that have been published to a specified environment.
     *
     * @remarks
     *   This API is intended for API providers.
     *
     * @param request - DescribeDeployedApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeployedApisResponse
     *
     * @param DescribeDeployedApisRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDeployedApisResponse
     */
    public function describeDeployedApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiMethod) {
            @$query['ApiMethod'] = $request->apiMethod;
        }

        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->apiPath) {
            @$query['ApiPath'] = $request->apiPath;
        }

        if (null !== $request->enableTagAuth) {
            @$query['EnableTagAuth'] = $request->enableTagAuth;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeployedApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeployedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the APIs that have been published to a specified environment.
     *
     * @remarks
     *   This API is intended for API providers.
     *
     * @param request - DescribeDeployedApisRequest
     *
     * @returns DescribeDeployedApisResponse
     *
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
     * Queries details about a bound custom domain name, including the automatically assigned second-level domain name, custom domain name, and SSL certificate.
     *
     * @param request - DescribeDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainResponse
     *
     * @param DescribeDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDomainResponse
     */
    public function describeDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomain',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details about a bound custom domain name, including the automatically assigned second-level domain name, custom domain name, and SSL certificate.
     *
     * @param request - DescribeDomainRequest
     *
     * @returns DescribeDomainResponse
     *
     * @param DescribeDomainRequest $request
     *
     * @return DescribeDomainResponse
     */
    public function describeDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainWithOptions($request, $runtime);
    }

    /**
     * Queries the average latency of an API group in an environment.
     *
     * @param request - DescribeGroupLatencyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupLatencyResponse
     *
     * @param DescribeGroupLatencyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGroupLatencyResponse
     */
    public function describeGroupLatencyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupLatency',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupLatencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the average latency of an API group in an environment.
     *
     * @param request - DescribeGroupLatencyRequest
     *
     * @returns DescribeGroupLatencyResponse
     *
     * @param DescribeGroupLatencyRequest $request
     *
     * @return DescribeGroupLatencyResponse
     */
    public function describeGroupLatency($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupLatencyWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on the number of requests directed to an API group within a period of time.
     *
     * @param request - DescribeGroupQpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupQpsResponse
     *
     * @param DescribeGroupQpsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeGroupQpsResponse
     */
    public function describeGroupQpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupQps',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on the number of requests directed to an API group within a period of time.
     *
     * @param request - DescribeGroupQpsRequest
     *
     * @returns DescribeGroupQpsResponse
     *
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
     * Queries the traffic of an API group.
     *
     * @param request - DescribeGroupTrafficRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupTrafficResponse
     *
     * @param DescribeGroupTrafficRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGroupTrafficResponse
     */
    public function describeGroupTrafficWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupTraffic',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the traffic of an API group.
     *
     * @param request - DescribeGroupTrafficRequest
     *
     * @returns DescribeGroupTrafficResponse
     *
     * @param DescribeGroupTrafficRequest $request
     *
     * @return DescribeGroupTrafficResponse
     */
    public function describeGroupTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupTrafficWithOptions($request, $runtime);
    }

    /**
     * Queries the historical versions of an API.
     *
     * @param request - DescribeHistoryApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHistoryApisResponse
     *
     * @param DescribeHistoryApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeHistoryApisResponse
     */
    public function describeHistoryApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHistoryApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHistoryApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the historical versions of an API.
     *
     * @param request - DescribeHistoryApisRequest
     *
     * @returns DescribeHistoryApisResponse
     *
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
     * Queries the result of an OAS API import task.
     *
     * @param request - DescribeImportOASTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImportOASTaskResponse
     *
     * @param DescribeImportOASTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeImportOASTaskResponse
     */
    public function describeImportOASTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationId) {
            @$query['OperationId'] = $request->operationId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImportOASTask',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImportOASTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result of an OAS API import task.
     *
     * @param request - DescribeImportOASTaskRequest
     *
     * @returns DescribeImportOASTaskResponse
     *
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
     * Queries the information about a dedicated instance cluster.
     *
     * @param request - DescribeInstanceClusterInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceClusterInfoResponse
     *
     * @param DescribeInstanceClusterInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceClusterInfoResponse
     */
    public function describeInstanceClusterInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceClusterName) {
            @$query['InstanceClusterName'] = $request->instanceClusterName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceClusterInfo',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceClusterInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a dedicated instance cluster.
     *
     * @param request - DescribeInstanceClusterInfoRequest
     *
     * @returns DescribeInstanceClusterInfoResponse
     *
     * @param DescribeInstanceClusterInfoRequest $request
     *
     * @return DescribeInstanceClusterInfoResponse
     */
    public function describeInstanceClusterInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceClusterInfoWithOptions($request, $runtime);
    }

    /**
     * Queries dedicated instance clusters.
     *
     * @param request - DescribeInstanceClusterListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceClusterListResponse
     *
     * @param DescribeInstanceClusterListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceClusterListResponse
     */
    public function describeInstanceClusterListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceClusterId) {
            @$query['InstanceClusterId'] = $request->instanceClusterId;
        }

        if (null !== $request->instanceClusterName) {
            @$query['InstanceClusterName'] = $request->instanceClusterName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceClusterList',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceClusterListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries dedicated instance clusters.
     *
     * @param request - DescribeInstanceClusterListRequest
     *
     * @returns DescribeInstanceClusterListResponse
     *
     * @param DescribeInstanceClusterListRequest $request
     *
     * @return DescribeInstanceClusterListResponse
     */
    public function describeInstanceClusterList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceClusterListWithOptions($request, $runtime);
    }

    /**
     * Queries the number of lost connections to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceDropConnectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceDropConnectionsResponse
     *
     * @param DescribeInstanceDropConnectionsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeInstanceDropConnectionsResponse
     */
    public function describeInstanceDropConnectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sbcName) {
            @$query['SbcName'] = $request->sbcName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceDropConnections',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceDropConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of lost connections to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceDropConnectionsRequest
     *
     * @returns DescribeInstanceDropConnectionsResponse
     *
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
     * Queries the number of dropped packets within a period of time.
     *
     * @param request - DescribeInstanceDropPacketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceDropPacketResponse
     *
     * @param DescribeInstanceDropPacketRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceDropPacketResponse
     */
    public function describeInstanceDropPacketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sbcName) {
            @$query['SbcName'] = $request->sbcName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceDropPacket',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceDropPacketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of dropped packets within a period of time.
     *
     * @param request - DescribeInstanceDropPacketRequest
     *
     * @returns DescribeInstanceDropPacketResponse
     *
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
     * Queries the distribution of HTTP status codes of requests to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceHttpCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceHttpCodeResponse
     *
     * @param DescribeInstanceHttpCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceHttpCodeResponse
     */
    public function describeInstanceHttpCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceHttpCode',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceHttpCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the distribution of HTTP status codes of requests to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceHttpCodeRequest
     *
     * @returns DescribeInstanceHttpCodeResponse
     *
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
     * Queries the average latency of a dedicated instance over a period of time.
     *
     * @param request - DescribeInstanceLatencyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceLatencyResponse
     *
     * @param DescribeInstanceLatencyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceLatencyResponse
     */
    public function describeInstanceLatencyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceLatency',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceLatencyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the average latency of a dedicated instance over a period of time.
     *
     * @param request - DescribeInstanceLatencyRequest
     *
     * @returns DescribeInstanceLatencyResponse
     *
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
     * Queries the number of new connections to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceNewConnectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceNewConnectionsResponse
     *
     * @param DescribeInstanceNewConnectionsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeInstanceNewConnectionsResponse
     */
    public function describeInstanceNewConnectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sbcName) {
            @$query['SbcName'] = $request->sbcName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceNewConnections',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceNewConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of new connections to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceNewConnectionsRequest
     *
     * @returns DescribeInstanceNewConnectionsResponse
     *
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
     * Queries the numbers of inbound and outbound packets of a dedicated instance within a period of time.
     *
     * @param request - DescribeInstancePacketsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancePacketsResponse
     *
     * @param DescribeInstancePacketsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstancePacketsResponse
     */
    public function describeInstancePacketsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sbcName) {
            @$query['SbcName'] = $request->sbcName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstancePackets',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancePacketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the numbers of inbound and outbound packets of a dedicated instance within a period of time.
     *
     * @param request - DescribeInstancePacketsRequest
     *
     * @returns DescribeInstancePacketsResponse
     *
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
     * Queries the number of requests to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceQpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceQpsResponse
     *
     * @param DescribeInstanceQpsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInstanceQpsResponse
     */
    public function describeInstanceQpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceQps',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceQpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of requests to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceQpsRequest
     *
     * @returns DescribeInstanceQpsResponse
     *
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
     * Queries the number of concurrent connections to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceSlbConnectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSlbConnectResponse
     *
     * @param DescribeInstanceSlbConnectRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceSlbConnectResponse
     */
    public function describeInstanceSlbConnectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sbcName) {
            @$query['SbcName'] = $request->sbcName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSlbConnect',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSlbConnectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of concurrent connections to a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceSlbConnectRequest
     *
     * @returns DescribeInstanceSlbConnectResponse
     *
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
     * Queries the request traffic and response traffic of a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceTrafficRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceTrafficResponse
     *
     * @param DescribeInstanceTrafficRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceTrafficResponse
     */
    public function describeInstanceTrafficWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceTraffic',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the request traffic and response traffic of a dedicated instance within a period of time.
     *
     * @param request - DescribeInstanceTrafficRequest
     *
     * @returns DescribeInstanceTrafficResponse
     *
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
     * Queries the details of instances in a region. The instances include shared instances and dedicated instances.
     *
     * @param request - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableTagAuthorization) {
            @$query['EnableTagAuthorization'] = $request->enableTagAuthorization;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of instances in a region. The instances include shared instances and dedicated instances.
     *
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
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
     * Queries the rule entries of an IP address-based traffic control policy.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   You can filter the query results by policy ID.
     *
     * @param request - DescribeIpControlPolicyItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIpControlPolicyItemsResponse
     *
     * @param DescribeIpControlPolicyItemsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeIpControlPolicyItemsResponse
     */
    public function describeIpControlPolicyItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyItemId) {
            @$query['PolicyItemId'] = $request->policyItemId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIpControlPolicyItems',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIpControlPolicyItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the rule entries of an IP address-based traffic control policy.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   You can filter the query results by policy ID.
     *
     * @param request - DescribeIpControlPolicyItemsRequest
     *
     * @returns DescribeIpControlPolicyItemsResponse
     *
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
     * Queries custom access control lists (ACLs) on separate pages.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   This operation is used to query the ACLs in a region. Region is a system parameter.
     * *   You can filter the query results by ACL ID, name, or type.
     * *   This operation cannot be used to query specific policies. If you want to query specific policies, call the [DescribeIpControlPolicyItems](~~DescribeIpControlPolicyItems~~) operation.
     *
     * @param request - DescribeIpControlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIpControlsResponse
     *
     * @param DescribeIpControlsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeIpControlsResponse
     */
    public function describeIpControlsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->ipControlName) {
            @$query['IpControlName'] = $request->ipControlName;
        }

        if (null !== $request->ipControlType) {
            @$query['IpControlType'] = $request->ipControlType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIpControls',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIpControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom access control lists (ACLs) on separate pages.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   This operation is used to query the ACLs in a region. Region is a system parameter.
     * *   You can filter the query results by ACL ID, name, or type.
     * *   This operation cannot be used to query specific policies. If you want to query specific policies, call the [DescribeIpControlPolicyItems](~~DescribeIpControlPolicyItems~~) operation.
     *
     * @param request - DescribeIpControlsRequest
     *
     * @returns DescribeIpControlsResponse
     *
     * @param DescribeIpControlsRequest $request
     *
     * @return DescribeIpControlsResponse
     */
    public function describeIpControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpControlsWithOptions($request, $runtime);
    }

    /**
     * 查询日志配置.
     *
     * @param request - DescribeLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogConfigResponse
     *
     * @param DescribeLogConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeLogConfigResponse
     */
    public function describeLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogConfig',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询日志配置.
     *
     * @param request - DescribeLogConfigRequest
     *
     * @returns DescribeLogConfigResponse
     *
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
     * Queries the number of remaining ordered relationships for a purchaser.
     *
     * @param request - DescribeMarketRemainsQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMarketRemainsQuotaResponse
     *
     * @param DescribeMarketRemainsQuotaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMarketRemainsQuotaResponse
     */
    public function describeMarketRemainsQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMarketRemainsQuota',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMarketRemainsQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of remaining ordered relationships for a purchaser.
     *
     * @param request - DescribeMarketRemainsQuotaRequest
     *
     * @returns DescribeMarketRemainsQuotaResponse
     *
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
     * Queries the created models of an API group.
     *
     * @remarks
     *   Fuzzy queries are supported.
     *
     * @param request - DescribeModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModelsResponse
     *
     * @param DescribeModelsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeModelsResponse
     */
    public function describeModelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->modelId) {
            @$query['ModelId'] = $request->modelId;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModels',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the created models of an API group.
     *
     * @remarks
     *   Fuzzy queries are supported.
     *
     * @param request - DescribeModelsRequest
     *
     * @returns DescribeModelsResponse
     *
     * @param DescribeModelsRequest $request
     *
     * @return DescribeModelsResponse
     */
    public function describeModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelsWithOptions($request, $runtime);
    }

    /**
     * Queries the APIs to which a specified plug-in is bound.
     *
     * @param request - DescribePluginApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePluginApisResponse
     *
     * @param DescribePluginApisRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePluginApisResponse
     */
    public function describePluginApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->method) {
            @$query['Method'] = $request->method;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePluginApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePluginApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the APIs to which a specified plug-in is bound.
     *
     * @param request - DescribePluginApisRequest
     *
     * @returns DescribePluginApisResponse
     *
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
     * Query the list of groups bound to a plugin based on the plugin ID.
     *
     * @param request - DescribePluginGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePluginGroupsResponse
     *
     * @param DescribePluginGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePluginGroupsResponse
     */
    public function describePluginGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePluginGroups',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePluginGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of groups bound to a plugin based on the plugin ID.
     *
     * @param request - DescribePluginGroupsRequest
     *
     * @returns DescribePluginGroupsResponse
     *
     * @param DescribePluginGroupsRequest $request
     *
     * @return DescribePluginGroupsResponse
     */
    public function describePluginGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginGroupsWithOptions($request, $runtime);
    }

    /**
     * 查询插件列表.
     *
     * @param request - DescribePluginSchemasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePluginSchemasResponse
     *
     * @param DescribePluginSchemasRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePluginSchemasResponse
     */
    public function describePluginSchemasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePluginSchemas',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePluginSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询插件列表.
     *
     * @param request - DescribePluginSchemasRequest
     *
     * @returns DescribePluginSchemasResponse
     *
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
     * 查询插件模板
     *
     * @param request - DescribePluginTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePluginTemplatesResponse
     *
     * @param DescribePluginTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePluginTemplatesResponse
     */
    public function describePluginTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pluginName) {
            @$query['PluginName'] = $request->pluginName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePluginTemplates',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePluginTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询插件模板
     *
     * @param request - DescribePluginTemplatesRequest
     *
     * @returns DescribePluginTemplatesResponse
     *
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
     * Queries API Gateway plug-ins and the details of the plug-ins.
     *
     * @remarks
     *   This operation supports pagination.
     * *   This operation allows you to query plug-ins by business type.
     * *   This operation allows you to query plug-ins by ID.
     * *   This operation allows you to query plug-ins by name.
     *
     * @param request - DescribePluginsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePluginsResponse
     *
     * @param DescribePluginsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribePluginsResponse
     */
    public function describePluginsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->pluginName) {
            @$query['PluginName'] = $request->pluginName;
        }

        if (null !== $request->pluginType) {
            @$query['PluginType'] = $request->pluginType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlugins',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePluginsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries API Gateway plug-ins and the details of the plug-ins.
     *
     * @remarks
     *   This operation supports pagination.
     * *   This operation allows you to query plug-ins by business type.
     * *   This operation allows you to query plug-ins by ID.
     * *   This operation allows you to query plug-ins by name.
     *
     * @param request - DescribePluginsRequest
     *
     * @returns DescribePluginsResponse
     *
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
     * Queries the plug-ins that are bound to a running API in an environment.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   This operation supports pagination.
     *
     * @param request - DescribePluginsByApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePluginsByApiResponse
     *
     * @param DescribePluginsByApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePluginsByApiResponse
     */
    public function describePluginsByApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePluginsByApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePluginsByApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the plug-ins that are bound to a running API in an environment.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   This operation supports pagination.
     *
     * @param request - DescribePluginsByApiRequest
     *
     * @returns DescribePluginsByApiResponse
     *
     * @param DescribePluginsByApiRequest $request
     *
     * @return DescribePluginsByApiResponse
     */
    public function describePluginsByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginsByApiWithOptions($request, $runtime);
    }

    /**
     * Query Plugins Bound to API Group.
     *
     * @param request - DescribePluginsByGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePluginsByGroupResponse
     *
     * @param DescribePluginsByGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePluginsByGroupResponse
     */
    public function describePluginsByGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePluginsByGroup',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePluginsByGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Plugins Bound to API Group.
     *
     * @param request - DescribePluginsByGroupRequest
     *
     * @returns DescribePluginsByGroupResponse
     *
     * @param DescribePluginsByGroupRequest $request
     *
     * @return DescribePluginsByGroupResponse
     */
    public function describePluginsByGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePluginsByGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the details about an API group purchased from Alibaba Cloud Marketplace.
     *
     * @param request - DescribePurchasedApiGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePurchasedApiGroupResponse
     *
     * @param DescribePurchasedApiGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePurchasedApiGroupResponse
     */
    public function describePurchasedApiGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePurchasedApiGroup',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePurchasedApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about an API group purchased from Alibaba Cloud Marketplace.
     *
     * @param request - DescribePurchasedApiGroupRequest
     *
     * @returns DescribePurchasedApiGroupResponse
     *
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
     * Queries the API groups purchased from Alibaba Cloud Marketplace.
     *
     * @param request - DescribePurchasedApiGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePurchasedApiGroupsResponse
     *
     * @param DescribePurchasedApiGroupsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePurchasedApiGroupsResponse
     */
    public function describePurchasedApiGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePurchasedApiGroups',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePurchasedApiGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the API groups purchased from Alibaba Cloud Marketplace.
     *
     * @param request - DescribePurchasedApiGroupsRequest
     *
     * @returns DescribePurchasedApiGroupsResponse
     *
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
     * Queries APIs that are purchased from Alibaba Cloud Marketplace.
     *
     * @param request - DescribePurchasedApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePurchasedApisResponse
     *
     * @param DescribePurchasedApisRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePurchasedApisResponse
     */
    public function describePurchasedApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->visibility) {
            @$query['Visibility'] = $request->visibility;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePurchasedApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePurchasedApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries APIs that are purchased from Alibaba Cloud Marketplace.
     *
     * @param request - DescribePurchasedApisRequest
     *
     * @returns DescribePurchasedApisResponse
     *
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
     * Queries the Alibaba Cloud regions that are supported by API Gateway.
     *
     * @remarks
     * This operation queries regions in which API Gateway is available.
     * *   This operation is intended for API providers and callers.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Alibaba Cloud regions that are supported by API Gateway.
     *
     * @remarks
     * This operation queries regions in which API Gateway is available.
     * *   This operation is intended for API providers and callers.
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

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries backend signature keys.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This operation is used to query the backend signature keys in a Region. Region is a system parameter.
     *
     * @param request - DescribeSignaturesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSignaturesResponse
     *
     * @param DescribeSignaturesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSignaturesResponse
     */
    public function describeSignaturesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->signatureId) {
            @$query['SignatureId'] = $request->signatureId;
        }

        if (null !== $request->signatureName) {
            @$query['SignatureName'] = $request->signatureName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSignatures',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSignaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries backend signature keys.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This operation is used to query the backend signature keys in a Region. Region is a system parameter.
     *
     * @param request - DescribeSignaturesRequest
     *
     * @returns DescribeSignaturesResponse
     *
     * @param DescribeSignaturesRequest $request
     *
     * @return DescribeSignaturesResponse
     */
    public function describeSignatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignaturesWithOptions($request, $runtime);
    }

    /**
     * Queries the backend signature keys that are bound to a specified API.
     *
     * @remarks
     *   This API is intended for API providers.
     *
     * @param request - DescribeSignaturesByApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSignaturesByApiResponse
     *
     * @param DescribeSignaturesByApiRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSignaturesByApiResponse
     */
    public function describeSignaturesByApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSignaturesByApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSignaturesByApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backend signature keys that are bound to a specified API.
     *
     * @remarks
     *   This API is intended for API providers.
     *
     * @param request - DescribeSignaturesByApiRequest
     *
     * @returns DescribeSignaturesByApiResponse
     *
     * @param DescribeSignaturesByApiRequest $request
     *
     * @return DescribeSignaturesByApiResponse
     */
    public function describeSignaturesByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignaturesByApiWithOptions($request, $runtime);
    }

    /**
     * Queries the number of API Gateway resources in a region.
     *
     * @param request - DescribeSummaryDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSummaryDataResponse
     *
     * @param DescribeSummaryDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSummaryDataResponse
     */
    public function describeSummaryDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSummaryData',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSummaryDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of API Gateway resources in a region.
     *
     * @param request - DescribeSummaryDataRequest
     *
     * @returns DescribeSummaryDataResponse
     *
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
     * Queries the common parameters supported by the system.
     *
     * @remarks
     *   This API is intended for API callers.
     * *   The response of this API contains the system parameters that are optional in API definitions.
     *
     * @param request - DescribeSystemParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSystemParametersResponse
     *
     * @param DescribeSystemParametersRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSystemParametersResponse
     */
    public function describeSystemParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSystemParameters',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSystemParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the common parameters supported by the system.
     *
     * @remarks
     *   This API is intended for API callers.
     * *   The response of this API contains the system parameters that are optional in API definitions.
     *
     * @param request - DescribeSystemParametersRequest
     *
     * @returns DescribeSystemParametersResponse
     *
     * @param DescribeSystemParametersRequest $request
     *
     * @return DescribeSystemParametersResponse
     */
    public function describeSystemParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemParametersWithOptions($request, $runtime);
    }

    /**
     * Queries custom throttling policies and their details. Conditional queries are supported.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API can be used to query all existing throttling policies (including special throttling policies) and their details.
     * *   You can specify query conditions. For example, you can query the throttling policies bound to a specified API or in a specified environment.
     *
     * @param request - DescribeTrafficControlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTrafficControlsResponse
     *
     * @param DescribeTrafficControlsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTrafficControlsResponse
     */
    public function describeTrafficControlsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->trafficControlId) {
            @$query['TrafficControlId'] = $request->trafficControlId;
        }

        if (null !== $request->trafficControlName) {
            @$query['TrafficControlName'] = $request->trafficControlName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrafficControls',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTrafficControlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom throttling policies and their details. Conditional queries are supported.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API can be used to query all existing throttling policies (including special throttling policies) and their details.
     * *   You can specify query conditions. For example, you can query the throttling policies bound to a specified API or in a specified environment.
     *
     * @param request - DescribeTrafficControlsRequest
     *
     * @returns DescribeTrafficControlsResponse
     *
     * @param DescribeTrafficControlsRequest $request
     *
     * @return DescribeTrafficControlsResponse
     */
    public function describeTrafficControls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficControlsWithOptions($request, $runtime);
    }

    /**
     * Queries the throttling policy that is bound to a specific API.
     *
     * @remarks
     *   This API is intended for API providers.
     *
     * @param request - DescribeTrafficControlsByApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTrafficControlsByApiResponse
     *
     * @param DescribeTrafficControlsByApiRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeTrafficControlsByApiResponse
     */
    public function describeTrafficControlsByApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTrafficControlsByApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTrafficControlsByApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the throttling policy that is bound to a specific API.
     *
     * @remarks
     *   This API is intended for API providers.
     *
     * @param request - DescribeTrafficControlsByApiRequest
     *
     * @returns DescribeTrafficControlsByApiResponse
     *
     * @param DescribeTrafficControlsByApiRequest $request
     *
     * @return DescribeTrafficControlsByApiResponse
     */
    public function describeTrafficControlsByApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficControlsByApiWithOptions($request, $runtime);
    }

    /**
     * 查询批量更新API后端元定结果.
     *
     * @param request - DescribeUpdateBackendTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUpdateBackendTaskResponse
     *
     * @param DescribeUpdateBackendTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUpdateBackendTaskResponse
     */
    public function describeUpdateBackendTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationUid) {
            @$query['OperationUid'] = $request->operationUid;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUpdateBackendTask',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUpdateBackendTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询批量更新API后端元定结果.
     *
     * @param request - DescribeUpdateBackendTaskRequest
     *
     * @returns DescribeUpdateBackendTaskResponse
     *
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
     * 查询更新VPC授权的任务
     *
     * @param request - DescribeUpdateVpcInfoTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUpdateVpcInfoTaskResponse
     *
     * @param DescribeUpdateVpcInfoTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUpdateVpcInfoTaskResponse
     */
    public function describeUpdateVpcInfoTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operationUid) {
            @$query['OperationUid'] = $request->operationUid;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUpdateVpcInfoTask',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUpdateVpcInfoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询更新VPC授权的任务
     *
     * @param request - DescribeUpdateVpcInfoTaskRequest
     *
     * @returns DescribeUpdateVpcInfoTaskResponse
     *
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
     * Queries VPC access authorizations.
     *
     * @param request - DescribeVpcAccessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVpcAccessesResponse
     *
     * @param DescribeVpcAccessesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVpcAccessesResponse
     */
    public function describeVpcAccessesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accurateQuery) {
            @$query['AccurateQuery'] = $request->accurateQuery;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vpcAccessId) {
            @$query['VpcAccessId'] = $request->vpcAccessId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVpcAccesses',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVpcAccessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries VPC access authorizations.
     *
     * @param request - DescribeVpcAccessesRequest
     *
     * @returns DescribeVpcAccessesResponse
     *
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
     * Queries zones in a region.
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries zones in a region.
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
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
     * Detaches APIs from an API product.
     *
     * @param request - DetachApiProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachApiProductResponse
     *
     * @param DetachApiProductRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetachApiProductResponse
     */
    public function detachApiProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiProductId) {
            @$query['ApiProductId'] = $request->apiProductId;
        }

        if (null !== $request->apis) {
            @$query['Apis'] = $request->apis;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachApiProduct',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches APIs from an API product.
     *
     * @param request - DetachApiProductRequest
     *
     * @returns DetachApiProductResponse
     *
     * @param DetachApiProductRequest $request
     *
     * @return DetachApiProductResponse
     */
    public function detachApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachApiProductWithOptions($request, $runtime);
    }

    /**
     * Unbind group plugin.
     *
     * @param request - DetachGroupPluginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachGroupPluginResponse
     *
     * @param DetachGroupPluginRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetachGroupPluginResponse
     */
    public function detachGroupPluginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachGroupPlugin',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachGroupPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbind group plugin.
     *
     * @param request - DetachGroupPluginRequest
     *
     * @returns DetachGroupPluginResponse
     *
     * @param DetachGroupPluginRequest $request
     *
     * @return DetachGroupPluginResponse
     */
    public function detachGroupPlugin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachGroupPluginWithOptions($request, $runtime);
    }

    /**
     * 解绑插件.
     *
     * @param request - DetachPluginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachPluginResponse
     *
     * @param DetachPluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetachPluginResponse
     */
    public function detachPluginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachPlugin',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑插件.
     *
     * @param request - DetachPluginRequest
     *
     * @returns DetachPluginResponse
     *
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
     * This feature provides instance-level access control capabilities for dedicated API Gateway instances. Disables access control on an instance.
     *
     * @param request - DisableInstanceAccessControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableInstanceAccessControlResponse
     *
     * @param DisableInstanceAccessControlRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DisableInstanceAccessControlResponse
     */
    public function disableInstanceAccessControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->addressIPVersion) {
            @$query['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableInstanceAccessControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableInstanceAccessControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This feature provides instance-level access control capabilities for dedicated API Gateway instances. Disables access control on an instance.
     *
     * @param request - DisableInstanceAccessControlRequest
     *
     * @returns DisableInstanceAccessControlResponse
     *
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
     * Disassociates an internal domain name resolution from a dedicated instance.
     *
     * @param tmpReq - DissociateInstanceWithPrivateDNSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateInstanceWithPrivateDNSResponse
     *
     * @param DissociateInstanceWithPrivateDNSRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return DissociateInstanceWithPrivateDNSResponse
     */
    public function dissociateInstanceWithPrivateDNSWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DissociateInstanceWithPrivateDNSShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->intranetDomains) {
            $request->intranetDomainsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->intranetDomains, 'IntranetDomains', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $body = [];
        if (null !== $request->intranetDomainsShrink) {
            @$body['IntranetDomains'] = $request->intranetDomainsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DissociateInstanceWithPrivateDNS',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DissociateInstanceWithPrivateDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates an internal domain name resolution from a dedicated instance.
     *
     * @param request - DissociateInstanceWithPrivateDNSRequest
     *
     * @returns DissociateInstanceWithPrivateDNSResponse
     *
     * @param DissociateInstanceWithPrivateDNSRequest $request
     *
     * @return DissociateInstanceWithPrivateDNSResponse
     */
    public function dissociateInstanceWithPrivateDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateInstanceWithPrivateDNSWithOptions($request, $runtime);
    }

    /**
     * Checks the syntax before Swagger-compliant data is imported.
     *
     * @param tmpReq - DryRunSwaggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DryRunSwaggerResponse
     *
     * @param DryRunSwaggerRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DryRunSwaggerResponse
     */
    public function dryRunSwaggerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DryRunSwaggerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->globalCondition) {
            $request->globalConditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->globalCondition, 'GlobalCondition', 'json');
        }

        $query = [];
        if (null !== $request->dataFormat) {
            @$query['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->globalConditionShrink) {
            @$query['GlobalCondition'] = $request->globalConditionShrink;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->overwrite) {
            @$query['Overwrite'] = $request->overwrite;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DryRunSwagger',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DryRunSwaggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the syntax before Swagger-compliant data is imported.
     *
     * @param request - DryRunSwaggerRequest
     *
     * @returns DryRunSwaggerResponse
     *
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
     * This feature provides instance-level access control capabilities for dedicated API Gateway instances. Specifies the access control policy of an instance.
     *
     * @param request - EnableInstanceAccessControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableInstanceAccessControlResponse
     *
     * @param EnableInstanceAccessControlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableInstanceAccessControlResponse
     */
    public function enableInstanceAccessControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclType) {
            @$query['AclType'] = $request->aclType;
        }

        if (null !== $request->addressIPVersion) {
            @$query['AddressIPVersion'] = $request->addressIPVersion;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableInstanceAccessControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableInstanceAccessControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This feature provides instance-level access control capabilities for dedicated API Gateway instances. Specifies the access control policy of an instance.
     *
     * @param request - EnableInstanceAccessControlRequest
     *
     * @returns EnableInstanceAccessControlResponse
     *
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
     * 导出OAS.
     *
     * @param tmpReq - ExportOASRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportOASResponse
     *
     * @param ExportOASRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ExportOASResponse
     */
    public function exportOASWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportOASShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiIdList) {
            $request->apiIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiIdList, 'ApiIdList', 'json');
        }

        $query = [];
        if (null !== $request->apiIdListShrink) {
            @$query['ApiIdList'] = $request->apiIdListShrink;
        }

        if (null !== $request->dataFormat) {
            @$query['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->oasVersion) {
            @$query['OasVersion'] = $request->oasVersion;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->withXExtensions) {
            @$query['WithXExtensions'] = $request->withXExtensions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportOAS',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportOASResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出OAS.
     *
     * @param request - ExportOASRequest
     *
     * @returns ExportOASResponse
     *
     * @param ExportOASRequest $request
     *
     * @return ExportOASResponse
     */
    public function exportOAS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportOASWithOptions($request, $runtime);
    }

    /**
     * Imports APIs based on the OAS standard.
     *
     * @param request - ImportOASRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportOASResponse
     *
     * @param ImportOASRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ImportOASResponse
     */
    public function importOASWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->backendName) {
            @$query['BackendName'] = $request->backendName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->ignoreWarning) {
            @$query['IgnoreWarning'] = $request->ignoreWarning;
        }

        if (null !== $request->OASVersion) {
            @$query['OASVersion'] = $request->OASVersion;
        }

        if (null !== $request->overwrite) {
            @$query['Overwrite'] = $request->overwrite;
        }

        if (null !== $request->requestMode) {
            @$query['RequestMode'] = $request->requestMode;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->skipDryRun) {
            @$query['SkipDryRun'] = $request->skipDryRun;
        }

        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportOAS',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportOASResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports APIs based on the OAS standard.
     *
     * @param request - ImportOASRequest
     *
     * @returns ImportOASResponse
     *
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
     * Creates an API by importing Swagger-compliant data.
     *
     * @remarks
     *   Alibaba Cloud supports extensions based on Swagger 2.0.
     * *   Alibaba Cloud supports Swagger configuration files in JSON and YAML formats.
     *
     * @param tmpReq - ImportSwaggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportSwaggerResponse
     *
     * @param ImportSwaggerRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ImportSwaggerResponse
     */
    public function importSwaggerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImportSwaggerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->globalCondition) {
            $request->globalConditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->globalCondition, 'GlobalCondition', 'json');
        }

        $query = [];
        if (null !== $request->dataFormat) {
            @$query['DataFormat'] = $request->dataFormat;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->globalConditionShrink) {
            @$query['GlobalCondition'] = $request->globalConditionShrink;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->overwrite) {
            @$query['Overwrite'] = $request->overwrite;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportSwagger',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportSwaggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API by importing Swagger-compliant data.
     *
     * @remarks
     *   Alibaba Cloud supports extensions based on Swagger 2.0.
     * *   Alibaba Cloud supports Swagger configuration files in JSON and YAML formats.
     *
     * @param request - ImportSwaggerRequest
     *
     * @returns ImportSwaggerResponse
     *
     * @param ImportSwaggerRequest $request
     *
     * @return ImportSwaggerResponse
     */
    public function importSwagger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importSwaggerWithOptions($request, $runtime);
    }

    /**
     * Queries internal domain name resolutions by domain name or resolution type.
     *
     * @param request - ListPrivateDNSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivateDNSResponse
     *
     * @param ListPrivateDNSRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListPrivateDNSResponse
     */
    public function listPrivateDNSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->intranetDomain) {
            @$query['IntranetDomain'] = $request->intranetDomain;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivateDNS',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrivateDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries internal domain name resolutions by domain name or resolution type.
     *
     * @param request - ListPrivateDNSRequest
     *
     * @returns ListPrivateDNSResponse
     *
     * @param ListPrivateDNSRequest $request
     *
     * @return ListPrivateDNSResponse
     */
    public function listPrivateDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateDNSWithOptions($request, $runtime);
    }

    /**
     * Queries the visible resource tags.
     *
     * @remarks
     *   The Tag.N.Key and Tag.N.Value parameters constitute a key-value pair.
     * *   ResourceId.N must meet all the key-value pairs that are entered. If you enter multiple key-value pairs, resources that contain the specified key-value pairs are returned.
     * *   This operation is used to query resource tags based on conditions. If no relationship matches the conditions, an empty list is returned.
     * *   You can query both user tags and visible system tags.
     * *   In addition to the required parameters, you can also specify ResourceId.N to query the visible resource tags of a specified resource in a region.
     * *   You can also specify Tag.N.Key to query the visible keys of a specified key in a region.
     * *   At least one of ResourceId.N, Tag.N.Key, and Tag.N.Value exists.
     * *   You can query tags of the same type or different types in a single operation.
     * *   You can query all your user types and visible system tags.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the visible resource tags.
     *
     * @remarks
     *   The Tag.N.Key and Tag.N.Value parameters constitute a key-value pair.
     * *   ResourceId.N must meet all the key-value pairs that are entered. If you enter multiple key-value pairs, resources that contain the specified key-value pairs are returned.
     * *   This operation is used to query resource tags based on conditions. If no relationship matches the conditions, an empty list is returned.
     * *   You can query both user tags and visible system tags.
     * *   In addition to the required parameters, you can also specify ResourceId.N to query the visible resource tags of a specified resource in a region.
     * *   You can also specify Tag.N.Key to query the visible keys of a specified key in a region.
     * *   At least one of ResourceId.N, Tag.N.Key, and Tag.N.Value exists.
     * *   You can query tags of the same type or different types in a single operation.
     * *   You can query all your user types and visible system tags.
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

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Modifies the definition of an API.
     *
     * @remarks
     * *This operation is intended for API providers.**
     * *   This API operation requires a full update. Updates of partial parameters are not supported.
     * *   When you modify an API name, make sure that the name of each API within the same group is unique.
     * *   When you modify the request path, make sure that each request path within the same group is unique.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifyApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApiResponse
     *
     * @param ModifyApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyApiResponse
     */
    public function modifyApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowSignatureMethod) {
            @$query['AllowSignatureMethod'] = $request->allowSignatureMethod;
        }

        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->appCodeAuthType) {
            @$query['AppCodeAuthType'] = $request->appCodeAuthType;
        }

        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->backendEnable) {
            @$query['BackendEnable'] = $request->backendEnable;
        }

        if (null !== $request->backendId) {
            @$query['BackendId'] = $request->backendId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableInternet) {
            @$query['DisableInternet'] = $request->disableInternet;
        }

        if (null !== $request->forceNonceCheck) {
            @$query['ForceNonceCheck'] = $request->forceNonceCheck;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->openIdConnectConfig) {
            @$query['OpenIdConnectConfig'] = $request->openIdConnectConfig;
        }

        if (null !== $request->requestConfig) {
            @$query['RequestConfig'] = $request->requestConfig;
        }

        if (null !== $request->resultBodyModel) {
            @$query['ResultBodyModel'] = $request->resultBodyModel;
        }

        if (null !== $request->resultType) {
            @$query['ResultType'] = $request->resultType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->serviceConfig) {
            @$query['ServiceConfig'] = $request->serviceConfig;
        }

        if (null !== $request->visibility) {
            @$query['Visibility'] = $request->visibility;
        }

        if (null !== $request->webSocketApiType) {
            @$query['WebSocketApiType'] = $request->webSocketApiType;
        }

        $body = [];
        if (null !== $request->constantParameters) {
            @$body['ConstantParameters'] = $request->constantParameters;
        }

        if (null !== $request->errorCodeSamples) {
            @$body['ErrorCodeSamples'] = $request->errorCodeSamples;
        }

        if (null !== $request->failResultSample) {
            @$body['FailResultSample'] = $request->failResultSample;
        }

        if (null !== $request->requestParameters) {
            @$body['RequestParameters'] = $request->requestParameters;
        }

        if (null !== $request->resultDescriptions) {
            @$body['ResultDescriptions'] = $request->resultDescriptions;
        }

        if (null !== $request->resultSample) {
            @$body['ResultSample'] = $request->resultSample;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        if (null !== $request->serviceParametersMap) {
            @$body['ServiceParametersMap'] = $request->serviceParametersMap;
        }

        if (null !== $request->systemParameters) {
            @$body['SystemParameters'] = $request->systemParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the definition of an API.
     *
     * @remarks
     * *This operation is intended for API providers.**
     * *   This API operation requires a full update. Updates of partial parameters are not supported.
     * *   When you modify an API name, make sure that the name of each API within the same group is unique.
     * *   When you modify the request path, make sure that each request path within the same group is unique.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifyApiRequest
     *
     * @returns ModifyApiResponse
     *
     * @param ModifyApiRequest $request
     *
     * @return ModifyApiResponse
     */
    public function modifyApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiWithOptions($request, $runtime);
    }

    /**
     * Modifies the draft definition of an API. This operation is different from the ModifyApi operation. This operation does not require all information about the API. You need to only specify the parameters that you want to modify. For example, if you want to change the authentication method of the API from Anonymous to APP, you specify APP as the value of AuthType and do not need to configure other parameters.
     *
     * @param request - ModifyApiConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApiConfigurationResponse
     *
     * @param ModifyApiConfigurationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyApiConfigurationResponse
     */
    public function modifyApiConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowSignatureMethod) {
            @$query['AllowSignatureMethod'] = $request->allowSignatureMethod;
        }

        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->appCodeAuthType) {
            @$query['AppCodeAuthType'] = $request->appCodeAuthType;
        }

        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->backendName) {
            @$query['BackendName'] = $request->backendName;
        }

        if (null !== $request->bodyFormat) {
            @$query['BodyFormat'] = $request->bodyFormat;
        }

        if (null !== $request->bodyModel) {
            @$query['BodyModel'] = $request->bodyModel;
        }

        if (null !== $request->contentTypeCategory) {
            @$query['ContentTypeCategory'] = $request->contentTypeCategory;
        }

        if (null !== $request->contentTypeValue) {
            @$query['ContentTypeValue'] = $request->contentTypeValue;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableInternet) {
            @$query['DisableInternet'] = $request->disableInternet;
        }

        if (null !== $request->errorCodeSamples) {
            @$query['ErrorCodeSamples'] = $request->errorCodeSamples;
        }

        if (null !== $request->failResultSample) {
            @$query['FailResultSample'] = $request->failResultSample;
        }

        if (null !== $request->forceNonceCheck) {
            @$query['ForceNonceCheck'] = $request->forceNonceCheck;
        }

        if (null !== $request->functionComputeConfig) {
            @$query['FunctionComputeConfig'] = $request->functionComputeConfig;
        }

        if (null !== $request->httpConfig) {
            @$query['HttpConfig'] = $request->httpConfig;
        }

        if (null !== $request->mockConfig) {
            @$query['MockConfig'] = $request->mockConfig;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->ossConfig) {
            @$query['OssConfig'] = $request->ossConfig;
        }

        if (null !== $request->postBodyDescription) {
            @$query['PostBodyDescription'] = $request->postBodyDescription;
        }

        if (null !== $request->requestHttpMethod) {
            @$query['RequestHttpMethod'] = $request->requestHttpMethod;
        }

        if (null !== $request->requestMode) {
            @$query['RequestMode'] = $request->requestMode;
        }

        if (null !== $request->requestParameters) {
            @$query['RequestParameters'] = $request->requestParameters;
        }

        if (null !== $request->requestPath) {
            @$query['RequestPath'] = $request->requestPath;
        }

        if (null !== $request->requestProtocol) {
            @$query['RequestProtocol'] = $request->requestProtocol;
        }

        if (null !== $request->resultSample) {
            @$query['ResultSample'] = $request->resultSample;
        }

        if (null !== $request->resultType) {
            @$query['ResultType'] = $request->resultType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->serviceParameters) {
            @$query['ServiceParameters'] = $request->serviceParameters;
        }

        if (null !== $request->serviceParametersMap) {
            @$query['ServiceParametersMap'] = $request->serviceParametersMap;
        }

        if (null !== $request->serviceProtocol) {
            @$query['ServiceProtocol'] = $request->serviceProtocol;
        }

        if (null !== $request->serviceTimeout) {
            @$query['ServiceTimeout'] = $request->serviceTimeout;
        }

        if (null !== $request->useBackendService) {
            @$query['UseBackendService'] = $request->useBackendService;
        }

        if (null !== $request->visibility) {
            @$query['Visibility'] = $request->visibility;
        }

        if (null !== $request->vpcConfig) {
            @$query['VpcConfig'] = $request->vpcConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApiConfiguration',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApiConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the draft definition of an API. This operation is different from the ModifyApi operation. This operation does not require all information about the API. You need to only specify the parameters that you want to modify. For example, if you want to change the authentication method of the API from Anonymous to APP, you specify APP as the value of AuthType and do not need to configure other parameters.
     *
     * @param request - ModifyApiConfigurationRequest
     *
     * @returns ModifyApiConfigurationResponse
     *
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
     * Modifies the name, description, or basepath of an existing API group.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifyApiGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApiGroupResponse
     *
     * @param ModifyApiGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyApiGroupResponse
     */
    public function modifyApiGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->basePath) {
            @$query['BasePath'] = $request->basePath;
        }

        if (null !== $request->compatibleFlags) {
            @$query['CompatibleFlags'] = $request->compatibleFlags;
        }

        if (null !== $request->customAppCodeConfig) {
            @$query['CustomAppCodeConfig'] = $request->customAppCodeConfig;
        }

        if (null !== $request->customTraceConfig) {
            @$query['CustomTraceConfig'] = $request->customTraceConfig;
        }

        if (null !== $request->customerConfigs) {
            @$query['CustomerConfigs'] = $request->customerConfigs;
        }

        if (null !== $request->defaultDomain) {
            @$query['DefaultDomain'] = $request->defaultDomain;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->filterAppCodeForBackend) {
            @$query['FilterAppCodeForBackend'] = $request->filterAppCodeForBackend;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->passthroughHeaders) {
            @$query['PassthroughHeaders'] = $request->passthroughHeaders;
        }

        if (null !== $request->rpcPattern) {
            @$query['RpcPattern'] = $request->rpcPattern;
        }

        if (null !== $request->rpsLimitForServerless) {
            @$query['RpsLimitForServerless'] = $request->rpsLimitForServerless;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->supportSSE) {
            @$query['SupportSSE'] = $request->supportSSE;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->userLogConfig) {
            @$query['UserLogConfig'] = $request->userLogConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApiGroup',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApiGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, or basepath of an existing API group.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifyApiGroupRequest
     *
     * @returns ModifyApiGroupResponse
     *
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
     * 变更分组实例.
     *
     * @param request - ModifyApiGroupInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApiGroupInstanceResponse
     *
     * @param ModifyApiGroupInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyApiGroupInstanceResponse
     */
    public function modifyApiGroupInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->targetInstanceId) {
            @$query['TargetInstanceId'] = $request->targetInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApiGroupInstance',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApiGroupInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更分组实例.
     *
     * @param request - ModifyApiGroupInstanceRequest
     *
     * @returns ModifyApiGroupInstanceResponse
     *
     * @param ModifyApiGroupInstanceRequest $request
     *
     * @return ModifyApiGroupInstanceResponse
     */
    public function modifyApiGroupInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupInstanceWithOptions($request, $runtime);
    }

    /**
     * Modifies the network policy of an API group.
     *
     * @param request - ModifyApiGroupNetworkPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApiGroupNetworkPolicyResponse
     *
     * @param ModifyApiGroupNetworkPolicyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyApiGroupNetworkPolicyResponse
     */
    public function modifyApiGroupNetworkPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->httpsPolicy) {
            @$query['HttpsPolicy'] = $request->httpsPolicy;
        }

        if (null !== $request->innerDomainEnable) {
            @$query['InnerDomainEnable'] = $request->innerDomainEnable;
        }

        if (null !== $request->internetEnable) {
            @$query['InternetEnable'] = $request->internetEnable;
        }

        if (null !== $request->internetIPV6Enable) {
            @$query['InternetIPV6Enable'] = $request->internetIPV6Enable;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcIntranetEnable) {
            @$query['VpcIntranetEnable'] = $request->vpcIntranetEnable;
        }

        if (null !== $request->vpcSlbIntranetEnable) {
            @$query['VpcSlbIntranetEnable'] = $request->vpcSlbIntranetEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApiGroupNetworkPolicy',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApiGroupNetworkPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the network policy of an API group.
     *
     * @param request - ModifyApiGroupNetworkPolicyRequest
     *
     * @returns ModifyApiGroupNetworkPolicyResponse
     *
     * @param ModifyApiGroupNetworkPolicyRequest $request
     *
     * @return ModifyApiGroupNetworkPolicyResponse
     */
    public function modifyApiGroupNetworkPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupNetworkPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies the VPC whitelist of an API group.
     *
     * @param request - ModifyApiGroupVpcWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApiGroupVpcWhitelistResponse
     *
     * @param ModifyApiGroupVpcWhitelistRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyApiGroupVpcWhitelistResponse
     */
    public function modifyApiGroupVpcWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcIds) {
            @$query['VpcIds'] = $request->vpcIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApiGroupVpcWhitelist',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApiGroupVpcWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the VPC whitelist of an API group.
     *
     * @param request - ModifyApiGroupVpcWhitelistRequest
     *
     * @returns ModifyApiGroupVpcWhitelistResponse
     *
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
     * Modifies a specified app.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   AppName or Description can be modified. If these parameters are not specified, no modifications are made and the operation will directly return a successful response.********
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifyAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppResponse
     *
     * @param ModifyAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disabled) {
            @$query['Disabled'] = $request->disabled;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApp',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a specified app.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   AppName or Description can be modified. If these parameters are not specified, no modifications are made and the operation will directly return a successful response.********
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifyAppRequest
     *
     * @returns ModifyAppResponse
     *
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
     * 修改后端服务
     *
     * @param request - ModifyBackendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackendResponse
     *
     * @param ModifyBackendRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyBackendResponse
     */
    public function modifyBackendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendId) {
            @$query['BackendId'] = $request->backendId;
        }

        if (null !== $request->backendName) {
            @$query['BackendName'] = $request->backendName;
        }

        if (null !== $request->backendType) {
            @$query['BackendType'] = $request->backendType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackend',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改后端服务
     *
     * @param request - ModifyBackendRequest
     *
     * @returns ModifyBackendResponse
     *
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
     * 修改后端服务在环境上的定义.
     *
     * @param request - ModifyBackendModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBackendModelResponse
     *
     * @param ModifyBackendModelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackendModelResponse
     */
    public function modifyBackendModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendId) {
            @$query['BackendId'] = $request->backendId;
        }

        if (null !== $request->backendModelData) {
            @$query['BackendModelData'] = $request->backendModelData;
        }

        if (null !== $request->backendModelId) {
            @$query['BackendModelId'] = $request->backendModelId;
        }

        if (null !== $request->backendType) {
            @$query['BackendType'] = $request->backendType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBackendModel',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBackendModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改后端服务在环境上的定义.
     *
     * @param request - ModifyBackendModelRequest
     *
     * @returns ModifyBackendModelResponse
     *
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
     * Modifies the name of a custom dataset.
     *
     * @param request - ModifyDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDatasetResponse
     *
     * @param ModifyDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyDatasetResponse
     */
    public function modifyDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$query['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDataset',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of a custom dataset.
     *
     * @param request - ModifyDatasetRequest
     *
     * @returns ModifyDatasetResponse
     *
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
     * Modifies the expiration time and description of a data entry in a custom dataset.
     *
     * @param request - ModifyDatasetItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDatasetItemResponse
     *
     * @param ModifyDatasetItemRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDatasetItemResponse
     */
    public function modifyDatasetItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetItemId) {
            @$query['DatasetItemId'] = $request->datasetItemId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->expiredTime) {
            @$query['ExpiredTime'] = $request->expiredTime;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDatasetItem',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDatasetItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the expiration time and description of a data entry in a custom dataset.
     *
     * @param request - ModifyDatasetItemRequest
     *
     * @returns ModifyDatasetItemResponse
     *
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
     * Modifies the properties of an API Gateway instance.
     *
     * @param tmpReq - ModifyInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAttributeResponse
     *
     * @param ModifyInstanceAttributeRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceAttributeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->toConnectVpcIpBlock) {
            $request->toConnectVpcIpBlockShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->toConnectVpcIpBlock, 'ToConnectVpcIpBlock', 'json');
        }

        $query = [];
        if (null !== $request->deleteVpcIpBlock) {
            @$query['DeleteVpcIpBlock'] = $request->deleteVpcIpBlock;
        }

        if (null !== $request->egressIpv6Enable) {
            @$query['EgressIpv6Enable'] = $request->egressIpv6Enable;
        }

        if (null !== $request->httpsPolicy) {
            @$query['HttpsPolicy'] = $request->httpsPolicy;
        }

        if (null !== $request->IPV6Enabled) {
            @$query['IPV6Enabled'] = $request->IPV6Enabled;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->intranetSegments) {
            @$query['IntranetSegments'] = $request->intranetSegments;
        }

        if (null !== $request->maintainEndTime) {
            @$query['MaintainEndTime'] = $request->maintainEndTime;
        }

        if (null !== $request->maintainStartTime) {
            @$query['MaintainStartTime'] = $request->maintainStartTime;
        }

        if (null !== $request->toConnectVpcIpBlockShrink) {
            @$query['ToConnectVpcIpBlock'] = $request->toConnectVpcIpBlockShrink;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->vpcSlbIntranetEnable) {
            @$query['VpcSlbIntranetEnable'] = $request->vpcSlbIntranetEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceAttribute',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the properties of an API Gateway instance.
     *
     * @param request - ModifyInstanceAttributeRequest
     *
     * @returns ModifyInstanceAttributeResponse
     *
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Upgrades or downgrades the configurations of an API Gateway instance.
     *
     * @param request - ModifyInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceSpecResponse
     *
     * @param ModifyInstanceSpecRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceSpecResponse
     */
    public function modifyInstanceSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceSpec) {
            @$query['InstanceSpec'] = $request->instanceSpec;
        }

        if (null !== $request->modifyAction) {
            @$query['ModifyAction'] = $request->modifyAction;
        }

        if (null !== $request->skipWaitSwitch) {
            @$query['SkipWaitSwitch'] = $request->skipWaitSwitch;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceSpec',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades or downgrades the configurations of an API Gateway instance.
     *
     * @param request - ModifyInstanceSpecRequest
     *
     * @returns ModifyInstanceSpecResponse
     *
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
     * Modify instance client VPC config.
     *
     * @param request - ModifyInstanceVpcAttributeForConsoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceVpcAttributeForConsoleResponse
     *
     * @param ModifyInstanceVpcAttributeForConsoleRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ModifyInstanceVpcAttributeForConsoleResponse
     */
    public function modifyInstanceVpcAttributeForConsoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteVpcAccess) {
            @$query['DeleteVpcAccess'] = $request->deleteVpcAccess;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcOwnerId) {
            @$query['VpcOwnerId'] = $request->vpcOwnerId;
        }

        if (null !== $request->vswitchId) {
            @$query['VswitchId'] = $request->vswitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceVpcAttributeForConsole',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceVpcAttributeForConsoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify instance client VPC config.
     *
     * @param request - ModifyInstanceVpcAttributeForConsoleRequest
     *
     * @returns ModifyInstanceVpcAttributeForConsoleResponse
     *
     * @param ModifyInstanceVpcAttributeForConsoleRequest $request
     *
     * @return ModifyInstanceVpcAttributeForConsoleResponse
     */
    public function modifyInstanceVpcAttributeForConsole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVpcAttributeForConsoleWithOptions($request, $runtime);
    }

    /**
     * Modifies the VPC domain name policy of an API group.
     *
     * @param request - ModifyIntranetDomainPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIntranetDomainPolicyResponse
     *
     * @param ModifyIntranetDomainPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyIntranetDomainPolicyResponse
     */
    public function modifyIntranetDomainPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcIntranetEnable) {
            @$query['VpcIntranetEnable'] = $request->vpcIntranetEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyIntranetDomainPolicy',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyIntranetDomainPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the VPC domain name policy of an API group.
     *
     * @param request - ModifyIntranetDomainPolicyRequest
     *
     * @returns ModifyIntranetDomainPolicyResponse
     *
     * @param ModifyIntranetDomainPolicyRequest $request
     *
     * @return ModifyIntranetDomainPolicyResponse
     */
    public function modifyIntranetDomainPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIntranetDomainPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   This operation allows you to modify only the name and description of an ACL. You cannot modify the type of the ACL.
     *
     * @param request - ModifyIpControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIpControlResponse
     *
     * @param ModifyIpControlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyIpControlResponse
     */
    public function modifyIpControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->ipControlName) {
            @$query['IpControlName'] = $request->ipControlName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyIpControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyIpControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   This operation allows you to modify only the name and description of an ACL. You cannot modify the type of the ACL.
     *
     * @param request - ModifyIpControlRequest
     *
     * @returns ModifyIpControlResponse
     *
     * @param ModifyIpControlRequest $request
     *
     * @return ModifyIpControlResponse
     */
    public function modifyIpControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpControlWithOptions($request, $runtime);
    }

    /**
     * Modifies a policy in an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The modification immediately takes effect on all the APIs that are bound to the policy.
     * *   This operation causes a full modification of the content of a policy.
     *
     * @param request - ModifyIpControlPolicyItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyIpControlPolicyItemResponse
     *
     * @param ModifyIpControlPolicyItemRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyIpControlPolicyItemResponse
     */
    public function modifyIpControlPolicyItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->cidrIp) {
            @$query['CidrIp'] = $request->cidrIp;
        }

        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->policyItemId) {
            @$query['PolicyItemId'] = $request->policyItemId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyIpControlPolicyItem',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyIpControlPolicyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a policy in an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The modification immediately takes effect on all the APIs that are bound to the policy.
     * *   This operation causes a full modification of the content of a policy.
     *
     * @param request - ModifyIpControlPolicyItemRequest
     *
     * @returns ModifyIpControlPolicyItemResponse
     *
     * @param ModifyIpControlPolicyItemRequest $request
     *
     * @return ModifyIpControlPolicyItemResponse
     */
    public function modifyIpControlPolicyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * 修改日志配置.
     *
     * @param request - ModifyLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLogConfigResponse
     *
     * @param ModifyLogConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyLogConfigResponse
     */
    public function modifyLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->slsLogStore) {
            @$query['SlsLogStore'] = $request->slsLogStore;
        }

        if (null !== $request->slsProject) {
            @$query['SlsProject'] = $request->slsProject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLogConfig',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改日志配置.
     *
     * @param request - ModifyLogConfigRequest
     *
     * @returns ModifyLogConfigResponse
     *
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
     * Updates the model of an API group.
     *
     * @param request - ModifyModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyModelResponse
     *
     * @param ModifyModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyModelResponse
     */
    public function modifyModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->newModelName) {
            @$query['NewModelName'] = $request->newModelName;
        }

        if (null !== $request->schema) {
            @$query['Schema'] = $request->schema;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyModel',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the model of an API group.
     *
     * @param request - ModifyModelRequest
     *
     * @returns ModifyModelResponse
     *
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
     * Modifies the information of a plug-in.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The name of the plug-in must be unique.
     *
     * @param request - ModifyPluginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPluginResponse
     *
     * @param ModifyPluginRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyPluginResponse
     */
    public function modifyPluginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->pluginData) {
            @$query['PluginData'] = $request->pluginData;
        }

        if (null !== $request->pluginId) {
            @$query['PluginId'] = $request->pluginId;
        }

        if (null !== $request->pluginName) {
            @$query['PluginName'] = $request->pluginName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPlugin',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information of a plug-in.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The name of the plug-in must be unique.
     *
     * @param request - ModifyPluginRequest
     *
     * @returns ModifyPluginResponse
     *
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
     * Modifies a backend signature key.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API operation modifies the name, Key value, and Secret value of an existing signature key.
     * *   Note that the modification takes effect immediately. If the key has been bound to an API, you must adjust the backend signature verification based on the new key accordingly.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifySignatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySignatureResponse
     *
     * @param ModifySignatureRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifySignatureResponse
     */
    public function modifySignatureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->signatureId) {
            @$query['SignatureId'] = $request->signatureId;
        }

        if (null !== $request->signatureKey) {
            @$query['SignatureKey'] = $request->signatureKey;
        }

        if (null !== $request->signatureName) {
            @$query['SignatureName'] = $request->signatureName;
        }

        if (null !== $request->signatureSecret) {
            @$query['SignatureSecret'] = $request->signatureSecret;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySignature',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a backend signature key.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API operation modifies the name, Key value, and Secret value of an existing signature key.
     * *   Note that the modification takes effect immediately. If the key has been bound to an API, you must adjust the backend signature verification based on the new key accordingly.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifySignatureRequest
     *
     * @returns ModifySignatureResponse
     *
     * @param ModifySignatureRequest $request
     *
     * @return ModifySignatureResponse
     */
    public function modifySignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySignatureWithOptions($request, $runtime);
    }

    /**
     * Modifies the settings of a custom throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The modifications take effect on the bound APIs instantly.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifyTrafficControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTrafficControlResponse
     *
     * @param ModifyTrafficControlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyTrafficControlResponse
     */
    public function modifyTrafficControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiDefault) {
            @$query['ApiDefault'] = $request->apiDefault;
        }

        if (null !== $request->appDefault) {
            @$query['AppDefault'] = $request->appDefault;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->trafficControlId) {
            @$query['TrafficControlId'] = $request->trafficControlId;
        }

        if (null !== $request->trafficControlName) {
            @$query['TrafficControlName'] = $request->trafficControlName;
        }

        if (null !== $request->trafficControlUnit) {
            @$query['TrafficControlUnit'] = $request->trafficControlUnit;
        }

        if (null !== $request->userDefault) {
            @$query['UserDefault'] = $request->userDefault;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTrafficControl',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTrafficControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the settings of a custom throttling policy.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The modifications take effect on the bound APIs instantly.
     * *   The QPS limit on this operation is 50 per user.
     *
     * @param request - ModifyTrafficControlRequest
     *
     * @returns ModifyTrafficControlResponse
     *
     * @param ModifyTrafficControlRequest $request
     *
     * @return ModifyTrafficControlResponse
     */
    public function modifyTrafficControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrafficControlWithOptions($request, $runtime);
    }

    /**
     * Modifies a virtual private cloud (VPC) authorization and updates the metadata of the API associated with the VPC authorization.
     *
     * @param request - ModifyVpcAccessAndUpdateApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcAccessAndUpdateApisResponse
     *
     * @param ModifyVpcAccessAndUpdateApisRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyVpcAccessAndUpdateApisResponse
     */
    public function modifyVpcAccessAndUpdateApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->needBatchWork) {
            @$query['NeedBatchWork'] = $request->needBatchWork;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->refresh) {
            @$query['Refresh'] = $request->refresh;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcTargetHostName) {
            @$query['VpcTargetHostName'] = $request->vpcTargetHostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcAccessAndUpdateApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcAccessAndUpdateApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a virtual private cloud (VPC) authorization and updates the metadata of the API associated with the VPC authorization.
     *
     * @param request - ModifyVpcAccessAndUpdateApisRequest
     *
     * @returns ModifyVpcAccessAndUpdateApisResponse
     *
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
     * 开通API网关服务
     *
     * @param request - OpenApiGatewayServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenApiGatewayServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return OpenApiGatewayServiceResponse
     */
    public function openApiGatewayServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'OpenApiGatewayService',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenApiGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通API网关服务
     *
     * @returns OpenApiGatewayServiceResponse
     *
     * @return OpenApiGatewayServiceResponse
     */
    public function openApiGatewayService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiGatewayServiceWithOptions($runtime);
    }

    /**
     * Queries the request logs of a user.
     *
     * @param request - QueryRequestLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRequestLogsResponse
     *
     * @param QueryRequestLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryRequestLogsResponse
     */
    public function queryRequestLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->requestLogId) {
            @$query['RequestLogId'] = $request->requestLogId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRequestLogs',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRequestLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the request logs of a user.
     *
     * @param request - QueryRequestLogsRequest
     *
     * @returns QueryRequestLogsResponse
     *
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
     * Reactivates a custom domain name whose validity status is Abnormal.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   You must solve the problem that is mentioned in the domain name exception prompt before you can reactivate the domain name.
     * *   A typical reason why a custom domain name becomes abnormal is that the domain name does not have an ICP filing or the domain name is included in a blacklist by the administration. When a custom domain name is abnormal, users cannot use it to call APIs.
     * *   You can call this operation to reactivate the domain name to resume normal access.
     *
     * @param request - ReactivateDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReactivateDomainResponse
     *
     * @param ReactivateDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReactivateDomainResponse
     */
    public function reactivateDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReactivateDomain',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReactivateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reactivates a custom domain name whose validity status is Abnormal.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   You must solve the problem that is mentioned in the domain name exception prompt before you can reactivate the domain name.
     * *   A typical reason why a custom domain name becomes abnormal is that the domain name does not have an ICP filing or the domain name is included in a blacklist by the administration. When a custom domain name is abnormal, users cannot use it to call APIs.
     * *   You can call this operation to reactivate the domain name to resume normal access.
     *
     * @param request - ReactivateDomainRequest
     *
     * @returns ReactivateDomainResponse
     *
     * @param ReactivateDomainRequest $request
     *
     * @return ReactivateDomainResponse
     */
    public function reactivateDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reactivateDomainWithOptions($request, $runtime);
    }

    /**
     * 删除访问控制策略中IP条目.
     *
     * @param request - RemoveAccessControlListEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveAccessControlListEntryResponse
     *
     * @param RemoveAccessControlListEntryRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveAccessControlListEntryResponse
     */
    public function removeAccessControlListEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclEntrys) {
            @$query['AclEntrys'] = $request->aclEntrys;
        }

        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveAccessControlListEntry',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveAccessControlListEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除访问控制策略中IP条目.
     *
     * @param request - RemoveAccessControlListEntryRequest
     *
     * @returns RemoveAccessControlListEntryResponse
     *
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
     * Revokes permissions on API products from an application.
     *
     * @param tmpReq - RemoveApiProductsAuthoritiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveApiProductsAuthoritiesResponse
     *
     * @param RemoveApiProductsAuthoritiesRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveApiProductsAuthoritiesResponse
     */
    public function removeApiProductsAuthoritiesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveApiProductsAuthoritiesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiProductIds) {
            $request->apiProductIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiProductIds, 'ApiProductIds', 'simple');
        }

        $query = [];
        if (null !== $request->apiProductIdsShrink) {
            @$query['ApiProductIds'] = $request->apiProductIdsShrink;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveApiProductsAuthorities',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveApiProductsAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes permissions on API products from an application.
     *
     * @param request - RemoveApiProductsAuthoritiesRequest
     *
     * @returns RemoveApiProductsAuthoritiesResponse
     *
     * @param RemoveApiProductsAuthoritiesRequest $request
     *
     * @return RemoveApiProductsAuthoritiesResponse
     */
    public function removeApiProductsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApiProductsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * Revokes the access permissions on multiple APIs from a specified application.
     *
     * @remarks
     *   This operation is intended for API providers and callers.
     * *   Before you revoke access permissions, check by whom the permissions were granted. API providers can only revoke permissions granted by a Provider, and API callers can only revoke permissions granted by a Consumer.
     *
     * @param request - RemoveApisAuthoritiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveApisAuthoritiesResponse
     *
     * @param RemoveApisAuthoritiesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveApisAuthoritiesResponse
     */
    public function removeApisAuthoritiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveApisAuthorities',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveApisAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the access permissions on multiple APIs from a specified application.
     *
     * @remarks
     *   This operation is intended for API providers and callers.
     * *   Before you revoke access permissions, check by whom the permissions were granted. API providers can only revoke permissions granted by a Provider, and API callers can only revoke permissions granted by a Consumer.
     *
     * @param request - RemoveApisAuthoritiesRequest
     *
     * @returns RemoveApisAuthoritiesResponse
     *
     * @param RemoveApisAuthoritiesRequest $request
     *
     * @return RemoveApisAuthoritiesResponse
     */
    public function removeApisAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApisAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * Revokes the access permissions on a specified API from multiple applications. In this case, multiple applications map to a single API.
     *
     * @remarks
     *   This operation is intended for API providers and callers.
     * *   Before you revoke access permissions, check by whom the permissions were granted. API providers can only revoke permissions granted by a Provider, and API callers can only revoke permissions granted by a Consumer.
     *
     * @param request - RemoveAppsAuthoritiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveAppsAuthoritiesResponse
     *
     * @param RemoveAppsAuthoritiesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveAppsAuthoritiesResponse
     */
    public function removeAppsAuthoritiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveAppsAuthorities',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveAppsAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the access permissions on a specified API from multiple applications. In this case, multiple applications map to a single API.
     *
     * @remarks
     *   This operation is intended for API providers and callers.
     * *   Before you revoke access permissions, check by whom the permissions were granted. API providers can only revoke permissions granted by a Provider, and API callers can only revoke permissions granted by a Consumer.
     *
     * @param request - RemoveAppsAuthoritiesRequest
     *
     * @returns RemoveAppsAuthoritiesResponse
     *
     * @param RemoveAppsAuthoritiesRequest $request
     *
     * @return RemoveAppsAuthoritiesResponse
     */
    public function removeAppsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAppsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * Unbinds an API from an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   The unbinding takes effect immediately. After the API is unbound from the ACL, the corresponding environment does not have any IP address access control in place for the API.
     *
     * @param request - RemoveIpControlApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveIpControlApisResponse
     *
     * @param RemoveIpControlApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveIpControlApisResponse
     */
    public function removeIpControlApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveIpControlApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveIpControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds an API from an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   The unbinding takes effect immediately. After the API is unbound from the ACL, the corresponding environment does not have any IP address access control in place for the API.
     *
     * @param request - RemoveIpControlApisRequest
     *
     * @returns RemoveIpControlApisResponse
     *
     * @param RemoveIpControlApisRequest $request
     *
     * @return RemoveIpControlApisResponse
     */
    public function removeIpControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpControlApisWithOptions($request, $runtime);
    }

    /**
     * Removes one or more policies from an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - RemoveIpControlPolicyItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveIpControlPolicyItemResponse
     *
     * @param RemoveIpControlPolicyItemRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveIpControlPolicyItemResponse
     */
    public function removeIpControlPolicyItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->policyItemIds) {
            @$query['PolicyItemIds'] = $request->policyItemIds;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveIpControlPolicyItem',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveIpControlPolicyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes one or more policies from an access control list (ACL).
     *
     * @remarks
     *   This operation is intended for API providers.
     *
     * @param request - RemoveIpControlPolicyItemRequest
     *
     * @returns RemoveIpControlPolicyItemResponse
     *
     * @param RemoveIpControlPolicyItemRequest $request
     *
     * @return RemoveIpControlPolicyItemResponse
     */
    public function removeIpControlPolicyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * Unbinds a backend signature key from APIs.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The operation takes effect immediately. The request sent from API Gateway to the backend service does not contain the signature string. The corresponding verification step can be removed from the backend.
     *
     * @param request - RemoveSignatureApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSignatureApisResponse
     *
     * @param RemoveSignatureApisRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveSignatureApisResponse
     */
    public function removeSignatureApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->signatureId) {
            @$query['SignatureId'] = $request->signatureId;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveSignatureApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveSignatureApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a backend signature key from APIs.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   The operation takes effect immediately. The request sent from API Gateway to the backend service does not contain the signature string. The corresponding verification step can be removed from the backend.
     *
     * @param request - RemoveSignatureApisRequest
     *
     * @returns RemoveSignatureApisResponse
     *
     * @param RemoveSignatureApisRequest $request
     *
     * @return RemoveSignatureApisResponse
     */
    public function removeSignatureApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSignatureApisWithOptions($request, $runtime);
    }

    /**
     * Unbinds a specified throttling policy from APIs.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API allows you to unbind a specified throttling policy from up to 100 APIs at a time.
     *
     * @param request - RemoveTrafficControlApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveTrafficControlApisResponse
     *
     * @param RemoveTrafficControlApisRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RemoveTrafficControlApisResponse
     */
    public function removeTrafficControlApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->trafficControlId) {
            @$query['TrafficControlId'] = $request->trafficControlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveTrafficControlApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveTrafficControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a specified throttling policy from APIs.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API allows you to unbind a specified throttling policy from up to 100 APIs at a time.
     *
     * @param request - RemoveTrafficControlApisRequest
     *
     * @returns RemoveTrafficControlApisResponse
     *
     * @param RemoveTrafficControlApisRequest $request
     *
     * @return RemoveTrafficControlApisResponse
     */
    public function removeTrafficControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTrafficControlApisWithOptions($request, $runtime);
    }

    /**
     * Deletes a VPC authorization without unpublishing the associated APIs.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   Revokes the permissions of API Gateway to access your VPC instance.
     * >  Deleting an authorization affects the associated API. Before you delete the authorization, make sure that it is not used by the API.
     *
     * @param request - RemoveVpcAccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveVpcAccessResponse
     *
     * @param RemoveVpcAccessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveVpcAccessResponse
     */
    public function removeVpcAccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->needBatchWork) {
            @$query['NeedBatchWork'] = $request->needBatchWork;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveVpcAccess',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveVpcAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a VPC authorization without unpublishing the associated APIs.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   Revokes the permissions of API Gateway to access your VPC instance.
     * >  Deleting an authorization affects the associated API. Before you delete the authorization, make sure that it is not used by the API.
     *
     * @param request - RemoveVpcAccessRequest
     *
     * @returns RemoveVpcAccessResponse
     *
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
     * 删除VPC授权并下线关联API.
     *
     * @param request - RemoveVpcAccessAndAbolishApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveVpcAccessAndAbolishApisResponse
     *
     * @param RemoveVpcAccessAndAbolishApisRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RemoveVpcAccessAndAbolishApisResponse
     */
    public function removeVpcAccessAndAbolishApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->needBatchWork) {
            @$query['NeedBatchWork'] = $request->needBatchWork;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveVpcAccessAndAbolishApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveVpcAccessAndAbolishApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除VPC授权并下线关联API.
     *
     * @param request - RemoveVpcAccessAndAbolishApisRequest
     *
     * @returns RemoveVpcAccessAndAbolishApisResponse
     *
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
     * Resets the AppCode of an application. You can call this operation only once per minute.
     *
     * @param request - ResetAppCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAppCodeResponse
     *
     * @param ResetAppCodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ResetAppCodeResponse
     */
    public function resetAppCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->newAppCode) {
            @$query['NewAppCode'] = $request->newAppCode;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAppCode',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the AppCode of an application. You can call this operation only once per minute.
     *
     * @param request - ResetAppCodeRequest
     *
     * @returns ResetAppCodeResponse
     *
     * @param ResetAppCodeRequest $request
     *
     * @return ResetAppCodeResponse
     */
    public function resetAppCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppCodeWithOptions($request, $runtime);
    }

    /**
     * Resets the key of an application.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   A new secret is automatically generated after you have called this operation. This secret cannot be customized.
     * *   The results returned by this operation do not contain the application secret. You can obtain the secret by calling DescribeAppSecurity.
     *
     * @param request - ResetAppSecretRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAppSecretResponse
     *
     * @param ResetAppSecretRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResetAppSecretResponse
     */
    public function resetAppSecretWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->newAppKey) {
            @$query['NewAppKey'] = $request->newAppKey;
        }

        if (null !== $request->newAppSecret) {
            @$query['NewAppSecret'] = $request->newAppSecret;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAppSecret',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAppSecretResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the key of an application.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   A new secret is automatically generated after you have called this operation. This secret cannot be customized.
     * *   The results returned by this operation do not contain the application secret. You can obtain the secret by calling DescribeAppSecurity.
     *
     * @param request - ResetAppSecretRequest
     *
     * @returns ResetAppSecretResponse
     *
     * @param ResetAppSecretRequest $request
     *
     * @return ResetAppSecretResponse
     */
    public function resetAppSecret($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppSecretWithOptions($request, $runtime);
    }

    /**
     * 根据APP生成SDK.
     *
     * @param request - SdkGenerateByAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SdkGenerateByAppResponse
     *
     * @param SdkGenerateByAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SdkGenerateByAppResponse
     */
    public function sdkGenerateByAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SdkGenerateByApp',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SdkGenerateByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据APP生成SDK.
     *
     * @param request - SdkGenerateByAppRequest
     *
     * @returns SdkGenerateByAppResponse
     *
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
     * 生成与App关联的API的SDK.
     *
     * @param request - SdkGenerateByAppForRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SdkGenerateByAppForRegionResponse
     *
     * @param SdkGenerateByAppForRegionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SdkGenerateByAppForRegionResponse
     */
    public function sdkGenerateByAppForRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SdkGenerateByAppForRegion',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SdkGenerateByAppForRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成与App关联的API的SDK.
     *
     * @param request - SdkGenerateByAppForRegionRequest
     *
     * @returns SdkGenerateByAppForRegionResponse
     *
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
     * 根据分组生成SDK.
     *
     * @param request - SdkGenerateByGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SdkGenerateByGroupResponse
     *
     * @param SdkGenerateByGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SdkGenerateByGroupResponse
     */
    public function sdkGenerateByGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SdkGenerateByGroup',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SdkGenerateByGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据分组生成SDK.
     *
     * @param request - SdkGenerateByGroupRequest
     *
     * @returns SdkGenerateByGroupResponse
     *
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
     * 修改访问控制策略的名称.
     *
     * @param request - SetAccessControlListAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAccessControlListAttributeResponse
     *
     * @param SetAccessControlListAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetAccessControlListAttributeResponse
     */
    public function setAccessControlListAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aclId) {
            @$query['AclId'] = $request->aclId;
        }

        if (null !== $request->aclName) {
            @$query['AclName'] = $request->aclName;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAccessControlListAttribute',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAccessControlListAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改访问控制策略的名称.
     *
     * @param request - SetAccessControlListAttributeRequest
     *
     * @returns SetAccessControlListAttributeResponse
     *
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
     * Grants permissions on API products to an application.
     *
     * @param tmpReq - SetApiProductsAuthoritiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetApiProductsAuthoritiesResponse
     *
     * @param SetApiProductsAuthoritiesRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SetApiProductsAuthoritiesResponse
     */
    public function setApiProductsAuthoritiesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetApiProductsAuthoritiesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiProductIds) {
            $request->apiProductIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiProductIds, 'ApiProductIds', 'simple');
        }

        $query = [];
        if (null !== $request->apiProductIdsShrink) {
            @$query['ApiProductIds'] = $request->apiProductIdsShrink;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->authValidTime) {
            @$query['AuthValidTime'] = $request->authValidTime;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetApiProductsAuthorities',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApiProductsAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants permissions on API products to an application.
     *
     * @param request - SetApiProductsAuthoritiesRequest
     *
     * @returns SetApiProductsAuthoritiesResponse
     *
     * @param SetApiProductsAuthoritiesRequest $request
     *
     * @return SetApiProductsAuthoritiesResponse
     */
    public function setApiProductsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApiProductsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * Authorizes a specified application to call multiple APIs.
     *
     * @remarks
     *   This operation is intended for API providers and callers.
     * *   API providers can authorize all applications to call their APIs.
     * *   API callers can authorize their own applications to call the APIs that they have purchased.
     *
     * @param request - SetApisAuthoritiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetApisAuthoritiesResponse
     *
     * @param SetApisAuthoritiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetApisAuthoritiesResponse
     */
    public function setApisAuthoritiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->authValidTime) {
            @$query['AuthValidTime'] = $request->authValidTime;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetApisAuthorities',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApisAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authorizes a specified application to call multiple APIs.
     *
     * @remarks
     *   This operation is intended for API providers and callers.
     * *   API providers can authorize all applications to call their APIs.
     * *   API callers can authorize their own applications to call the APIs that they have purchased.
     *
     * @param request - SetApisAuthoritiesRequest
     *
     * @returns SetApisAuthoritiesResponse
     *
     * @param SetApisAuthoritiesRequest $request
     *
     * @return SetApisAuthoritiesResponse
     */
    public function setApisAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApisAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * Authorizes multiple applications to call APIs in an API product.
     *
     * @param request - SetAppsAuthToApiProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAppsAuthToApiProductResponse
     *
     * @param SetAppsAuthToApiProductRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetAppsAuthToApiProductResponse
     */
    public function setAppsAuthToApiProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiProductId) {
            @$query['ApiProductId'] = $request->apiProductId;
        }

        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->authValidTime) {
            @$query['AuthValidTime'] = $request->authValidTime;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAppsAuthToApiProduct',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAppsAuthToApiProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authorizes multiple applications to call APIs in an API product.
     *
     * @param request - SetAppsAuthToApiProductRequest
     *
     * @returns SetAppsAuthToApiProductResponse
     *
     * @param SetAppsAuthToApiProductRequest $request
     *
     * @return SetAppsAuthToApiProductResponse
     */
    public function setAppsAuthToApiProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppsAuthToApiProductWithOptions($request, $runtime);
    }

    /**
     * Grants access permissions on a specified API to multiple applications.
     *
     * @remarks
     *   This operation is intended for API providers and callers.
     * *   API providers can authorize all applications to call their APIs.
     * *   API callers can authorize their own applications to call the APIs that they have purchased.
     *
     * @param request - SetAppsAuthoritiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAppsAuthoritiesResponse
     *
     * @param SetAppsAuthoritiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetAppsAuthoritiesResponse
     */
    public function setAppsAuthoritiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->authValidTime) {
            @$query['AuthValidTime'] = $request->authValidTime;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAppsAuthorities',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAppsAuthoritiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants access permissions on a specified API to multiple applications.
     *
     * @remarks
     *   This operation is intended for API providers and callers.
     * *   API providers can authorize all applications to call their APIs.
     * *   API callers can authorize their own applications to call the APIs that they have purchased.
     *
     * @param request - SetAppsAuthoritiesRequest
     *
     * @returns SetAppsAuthoritiesResponse
     *
     * @param SetAppsAuthoritiesRequest $request
     *
     * @return SetAppsAuthoritiesResponse
     */
    public function setAppsAuthorities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * Binds a custom domain name to a specified API group.
     *
     * @param request - SetDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDomainResponse
     *
     * @param SetDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SetDomainResponse
     */
    public function setDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindStageName) {
            @$query['BindStageName'] = $request->bindStageName;
        }

        if (null !== $request->customDomainType) {
            @$query['CustomDomainType'] = $request->customDomainType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->isForce) {
            @$query['IsForce'] = $request->isForce;
        }

        if (null !== $request->isHttpRedirectToHttps) {
            @$query['IsHttpRedirectToHttps'] = $request->isHttpRedirectToHttps;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDomain',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a custom domain name to a specified API group.
     *
     * @param request - SetDomainRequest
     *
     * @returns SetDomainResponse
     *
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
     * Uploads an SSL certificate for a specified custom domain name.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The SSL certificate must match the custom domain name.
     * *   After the SSL certificate is bound, HTTPS-based API services become available.
     *
     * @param request - SetDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDomainCertificateResponse
     *
     * @param SetDomainCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetDomainCertificateResponse
     */
    public function setDomainCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caCertificateBody) {
            @$query['CaCertificateBody'] = $request->caCertificateBody;
        }

        if (null !== $request->certificateBody) {
            @$query['CertificateBody'] = $request->certificateBody;
        }

        if (null !== $request->certificateName) {
            @$query['CertificateName'] = $request->certificateName;
        }

        if (null !== $request->certificatePrivateKey) {
            @$query['CertificatePrivateKey'] = $request->certificatePrivateKey;
        }

        if (null !== $request->clientCertSDnPassThrough) {
            @$query['ClientCertSDnPassThrough'] = $request->clientCertSDnPassThrough;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sslOcspCacheEnable) {
            @$query['SslOcspCacheEnable'] = $request->sslOcspCacheEnable;
        }

        if (null !== $request->sslOcspEnable) {
            @$query['SslOcspEnable'] = $request->sslOcspEnable;
        }

        if (null !== $request->sslVerifyDepth) {
            @$query['SslVerifyDepth'] = $request->sslVerifyDepth;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDomainCertificate',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads an SSL certificate for a specified custom domain name.
     *
     * @remarks
     *   This operation is intended for API providers.
     * *   The SSL certificate must match the custom domain name.
     * *   After the SSL certificate is bound, HTTPS-based API services become available.
     *
     * @param request - SetDomainCertificateRequest
     *
     * @returns SetDomainCertificateResponse
     *
     * @param SetDomainCertificateRequest $request
     *
     * @return SetDomainCertificateResponse
     */
    public function setDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * Enables or disables WebSocket for a custom domain name.
     *
     * @param request - SetDomainWebSocketStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDomainWebSocketStatusResponse
     *
     * @param SetDomainWebSocketStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDomainWebSocketStatusResponse
     */
    public function setDomainWebSocketStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionValue) {
            @$query['ActionValue'] = $request->actionValue;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->WSSEnable) {
            @$query['WSSEnable'] = $request->WSSEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDomainWebSocketStatus',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDomainWebSocketStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables WebSocket for a custom domain name.
     *
     * @param request - SetDomainWebSocketStatusRequest
     *
     * @returns SetDomainWebSocketStatusResponse
     *
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
     * 设置分组授权AppCode.
     *
     * @param request - SetGroupAuthAppCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetGroupAuthAppCodeResponse
     *
     * @param SetGroupAuthAppCodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetGroupAuthAppCodeResponse
     */
    public function setGroupAuthAppCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authAppCode) {
            @$query['AuthAppCode'] = $request->authAppCode;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetGroupAuthAppCode',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetGroupAuthAppCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置分组授权AppCode.
     *
     * @param request - SetGroupAuthAppCodeRequest
     *
     * @returns SetGroupAuthAppCodeResponse
     *
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
     * Creates a binding relationship between specified access control lists (ACLs) and APIs.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   A maximum of 100 APIs can be bound at a time.
     *
     * @param request - SetIpControlApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetIpControlApisResponse
     *
     * @param SetIpControlApisRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetIpControlApisResponse
     */
    public function setIpControlApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->ipControlId) {
            @$query['IpControlId'] = $request->ipControlId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetIpControlApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetIpControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a binding relationship between specified access control lists (ACLs) and APIs.
     *
     * @remarks
     *   This operation is intended for API callers.
     * *   A maximum of 100 APIs can be bound at a time.
     *
     * @param request - SetIpControlApisRequest
     *
     * @returns SetIpControlApisResponse
     *
     * @param SetIpControlApisRequest $request
     *
     * @return SetIpControlApisResponse
     */
    public function setIpControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIpControlApisWithOptions($request, $runtime);
    }

    /**
     * Binds a signature key to APIs.
     *
     * @param request - SetSignatureApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSignatureApisResponse
     *
     * @param SetSignatureApisRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetSignatureApisResponse
     */
    public function setSignatureApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->signatureId) {
            @$query['SignatureId'] = $request->signatureId;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetSignatureApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSignatureApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a signature key to APIs.
     *
     * @param request - SetSignatureApisRequest
     *
     * @returns SetSignatureApisResponse
     *
     * @param SetSignatureApisRequest $request
     *
     * @return SetSignatureApisResponse
     */
    public function setSignatureApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSignatureApisWithOptions($request, $runtime);
    }

    /**
     * Binds a throttling policy to APIs.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API allows you to bind a specific throttling policy to up to 100 APIs at a time.
     *
     * @param request - SetTrafficControlApisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetTrafficControlApisResponse
     *
     * @param SetTrafficControlApisRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetTrafficControlApisResponse
     */
    public function setTrafficControlApisWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiIds) {
            @$query['ApiIds'] = $request->apiIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        if (null !== $request->trafficControlId) {
            @$query['TrafficControlId'] = $request->trafficControlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetTrafficControlApis',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetTrafficControlApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a throttling policy to APIs.
     *
     * @remarks
     *   This API is intended for API providers.
     * *   This API allows you to bind a specific throttling policy to up to 100 APIs at a time.
     *
     * @param request - SetTrafficControlApisRequest
     *
     * @returns SetTrafficControlApisResponse
     *
     * @param SetTrafficControlApisRequest $request
     *
     * @return SetTrafficControlApisResponse
     */
    public function setTrafficControlApis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTrafficControlApisWithOptions($request, $runtime);
    }

    /**
     * Creates a virtual private cloud (VPC) access authorization and enables reverse access.
     *
     * @remarks
     * This operation is intended for API providers.
     * * This operation is used to authorize API Gateway to access your VPC instance.
     *
     * @param request - SetVpcAccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetVpcAccessResponse
     *
     * @param SetVpcAccessRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetVpcAccessResponse
     */
    public function setVpcAccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcTargetHostName) {
            @$query['VpcTargetHostName'] = $request->vpcTargetHostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetVpcAccess',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetVpcAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a virtual private cloud (VPC) access authorization and enables reverse access.
     *
     * @remarks
     * This operation is intended for API providers.
     * * This operation is used to authorize API Gateway to access your VPC instance.
     *
     * @param request - SetVpcAccessRequest
     *
     * @returns SetVpcAccessResponse
     *
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
     * Specifies a wildcard domain name template for a bound custom domain name.
     *
     * @param request - SetWildcardDomainPatternsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetWildcardDomainPatternsResponse
     *
     * @param SetWildcardDomainPatternsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetWildcardDomainPatternsResponse
     */
    public function setWildcardDomainPatternsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->wildcardDomainPatterns) {
            @$query['WildcardDomainPatterns'] = $request->wildcardDomainPatterns;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetWildcardDomainPatterns',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetWildcardDomainPatternsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies a wildcard domain name template for a bound custom domain name.
     *
     * @param request - SetWildcardDomainPatternsRequest
     *
     * @returns SetWildcardDomainPatternsResponse
     *
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
     * Switches the definition of an API in a specified runtime environment to a historical version.
     *
     * @param request - SwitchApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchApiResponse
     *
     * @param SwitchApiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SwitchApiResponse
     */
    public function switchApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->historyVersion) {
            @$query['HistoryVersion'] = $request->historyVersion;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->stageName) {
            @$query['StageName'] = $request->stageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchApi',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches the definition of an API in a specified runtime environment to a historical version.
     *
     * @param request - SwitchApiRequest
     *
     * @returns SwitchApiResponse
     *
     * @param SwitchApiRequest $request
     *
     * @return SwitchApiResponse
     */
    public function switchApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchApiWithOptions($request, $runtime);
    }

    /**
     * Creates a tag-resource relationship.
     *
     * @remarks
     *   All tags (key-value pairs) are applied to all resources of a specified ResourceId, with each resource specified as ResourceId.N.
     * *   Tag.N is a resource tag consisting of a key-value pair: Tag.N.Key and Tag.N.Value.
     * *   If you call this operation to tag multiple resources simultaneously, either all or none of the resources will be tagged.
     * *   If you specify Tag.1.Value in addition to required parameters, you must also specify Tag.1.Key. Otherwise, an InvalidParameter.TagKey error is reported. A tag that has a value must have the corresponding key, but the key can be an empty string.
     * *   If a tag with the same key has been bound to a resource, the new tag will overwrite the existing one.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a tag-resource relationship.
     *
     * @remarks
     *   All tags (key-value pairs) are applied to all resources of a specified ResourceId, with each resource specified as ResourceId.N.
     * *   Tag.N is a resource tag consisting of a key-value pair: Tag.N.Key and Tag.N.Value.
     * *   If you call this operation to tag multiple resources simultaneously, either all or none of the resources will be tagged.
     * *   If you specify Tag.1.Value in addition to required parameters, you must also specify Tag.1.Key. Otherwise, an InvalidParameter.TagKey error is reported. A tag that has a value must have the corresponding key, but the key can be an empty string.
     * *   If a tag with the same key has been bound to a resource, the new tag will overwrite the existing one.
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

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Removes tags from resources.
     *
     * @remarks
     *   If you call this operation to untag multiple resources simultaneously, either all or none of the resources will be untagged.
     * *   If you specify resource IDs without specifying tag keys and set the All parameter to true, all tags bound to the specified resources will be deleted. If a resource does not have any tags, the request is not processed but a success is returned.
     * *   If you specify resource IDs without specifying tag keys and set the All parameter to false, the request is not processed but a success is returned.
     * *   When tag keys are specified, the All parameter is invalid.
     * *   When multiple resources and key-value pairs are specified, the specified tags bound to the resources are deleted.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resources.
     *
     * @remarks
     *   If you call this operation to untag multiple resources simultaneously, either all or none of the resources will be untagged.
     * *   If you specify resource IDs without specifying tag keys and set the All parameter to true, all tags bound to the specified resources will be deleted. If a resource does not have any tags, the request is not processed but a success is returned.
     * *   If you specify resource IDs without specifying tag keys and set the All parameter to false, the request is not processed but a success is returned.
     * *   When tag keys are specified, the All parameter is invalid.
     * *   When multiple resources and key-value pairs are specified, the specified tags bound to the resources are deleted.
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

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Modifies an internal domain name resolution.
     *
     * @param tmpReq - UpdatePrivateDNSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrivateDNSResponse
     *
     * @param UpdatePrivateDNSRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdatePrivateDNSResponse
     */
    public function updatePrivateDNSWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePrivateDNSShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->records) {
            $request->recordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->records, 'Records', 'json');
        }

        $query = [];
        if (null !== $request->intranetDomain) {
            @$query['IntranetDomain'] = $request->intranetDomain;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->recordsShrink) {
            @$body['Records'] = $request->recordsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePrivateDNS',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePrivateDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an internal domain name resolution.
     *
     * @param request - UpdatePrivateDNSRequest
     *
     * @returns UpdatePrivateDNSResponse
     *
     * @param UpdatePrivateDNSRequest $request
     *
     * @return UpdatePrivateDNSResponse
     */
    public function updatePrivateDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivateDNSWithOptions($request, $runtime);
    }

    /**
     * Tests the network connectivity between an API Gateway instance and a port on an Elastic Compute Service (ECS) or Server Load Balance (SLB) instance in a virtual private cloud (VPC) access authorization.
     *
     * @param request - ValidateVpcConnectivityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateVpcConnectivityResponse
     *
     * @param ValidateVpcConnectivityRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ValidateVpcConnectivityResponse
     */
    public function validateVpcConnectivityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->vpcAccessId) {
            @$query['VpcAccessId'] = $request->vpcAccessId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateVpcConnectivity',
            'version' => '2016-07-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateVpcConnectivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tests the network connectivity between an API Gateway instance and a port on an Elastic Compute Service (ECS) or Server Load Balance (SLB) instance in a virtual private cloud (VPC) access authorization.
     *
     * @param request - ValidateVpcConnectivityRequest
     *
     * @returns ValidateVpcConnectivityResponse
     *
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
