<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ActivateAllInOneGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ActivateAllInOneGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ActivateGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ActivateGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\AddSharesToExpressSyncRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\AddSharesToExpressSyncResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\AddTagsToGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\AddTagsToGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckActivationKeyRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckActivationKeyResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckBlockVolumeNameRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckBlockVolumeNameResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckGatewayEssdSupportRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckGatewayEssdSupportResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckMnsServiceRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckMnsServiceResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckRoleRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckRoleResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckSlrRoleRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckSlrRoleResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckUpgradeVersionRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CheckUpgradeVersionResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateCacheRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateCacheResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateElasticGatewayPrivateZoneRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateElasticGatewayPrivateZoneResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateExpressSyncRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateExpressSyncResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayBlockVolumeRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayBlockVolumeResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayCacheDiskRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayCacheDiskResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayFileShareRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayFileShareResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayLoggingRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayLoggingResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewaySMBUserRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateGatewaySMBUserResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateStorageBundleRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\CreateStorageBundleResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteCSGClientsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteCSGClientsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteCSGClientsShrinkRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteElasticGatewayPrivateZoneRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteElasticGatewayPrivateZoneResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteExpressSyncRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteExpressSyncResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayBlockVolumesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayBlockVolumesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayCacheDiskRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayCacheDiskResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayFileSharesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayFileSharesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayLoggingRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayLoggingResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewaySMBUserRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteGatewaySMBUserResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteStorageBundleRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeleteStorageBundleResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeployCacheDiskRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeployCacheDiskResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeployCSGClientsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeployCSGClientsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeployCSGClientsShrinkRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeployGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DeployGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeAccountConfigRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeAccountConfigResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeBlockVolumeSnapshotsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeBlockVolumeSnapshotsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeCSGClientsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeCSGClientsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeCSGClientTasksRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeCSGClientTasksResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeDashboardRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeDashboardResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpireCachesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpireCachesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncSharesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncSharesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayActionsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayActionsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayADInfoRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayADInfoResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayAuthInfoRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayAuthInfoResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayAutoPlansRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayAutoPlansResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayAutoUpgradeConfigurationRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayAutoUpgradeConfigurationResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBlockVolumesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBlockVolumesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBucketCachesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBucketCachesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCachesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCachesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCapacityLimitRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCapacityLimitResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCategoriesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCategoriesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayClassesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayClassesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCredentialRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCredentialResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayDNSRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayDNSResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayFileSharesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayFileSharesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayFileStatusRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayFileStatusResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayImagesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayImagesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayInfoRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayInfoResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayLDAPInfoRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayLDAPInfoResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayLocationsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayLocationsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayLoggingRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayLoggingResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayLogsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayLogsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayModificationClassesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayModificationClassesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayNFSClientsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayNFSClientsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysForCmsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysForCmsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaySMBUsersRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaySMBUsersResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysTagsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysTagsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayStatisticsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayStatisticsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayStockRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayStockResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayTypesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayTypesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeKmsKeyRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeKmsKeyResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeMqttConfigRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeMqttConfigResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeOssBucketInfoRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeOssBucketInfoResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeOssBucketsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeOssBucketsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribePayAsYouGoPriceRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribePayAsYouGoPriceResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeSharesBucketInfoForExpressSyncRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeSharesBucketInfoForExpressSyncResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeStorageBundleRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeStorageBundleResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeStorageBundlesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeStorageBundlesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeSubscriptionPriceRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeSubscriptionPriceResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeUserBusinessStatusRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeUserBusinessStatusResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeVpcsRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeVpcsResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DisableGatewayLoggingRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DisableGatewayLoggingResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DisableGatewayNFSVersionRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\DisableGatewayNFSVersionResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\EnableGatewayIpv6Request;
use AlibabaCloud\SDK\Sgw\V20180511\Models\EnableGatewayIpv6Response;
use AlibabaCloud\SDK\Sgw\V20180511\Models\EnableGatewayLoggingRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\EnableGatewayLoggingResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ExpandCacheDiskRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ExpandCacheDiskResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ExpandGatewayFileShareRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ExpandGatewayFileShareResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ExpandGatewayNetworkBandwidthRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ExpandGatewayNetworkBandwidthResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\GenerateGatewayTokenRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\GenerateGatewayTokenResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\GenerateMqttTokenRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\GenerateMqttTokenResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\GenerateStsTokenRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\GenerateStsTokenResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\HandleGatewayAutoPlanRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\HandleGatewayAutoPlanResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayBlockVolumeRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayBlockVolumeResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayClassRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayClassResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayFileShareRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayFileShareResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayFileShareWatermarkRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayFileShareWatermarkResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyStorageBundleRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ModifyStorageBundleResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\OpenSgwServiceResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\OperateGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\OperateGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReleaseServiceRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReleaseServiceResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\RemoveSharesFromExpressSyncRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\RemoveSharesFromExpressSyncResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\RemoveTagsFromGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\RemoveTagsFromGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReportBlockVolumesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReportBlockVolumesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReportFileSharesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReportFileSharesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReportGatewayInfoRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReportGatewayInfoResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReportGatewayUsageRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ReportGatewayUsageResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ResetGatewayPasswordRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ResetGatewayPasswordResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\RestartFileSharesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\RestartFileSharesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SetGatewayADInfoRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SetGatewayADInfoResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SetGatewayAutoUpgradeConfigurationRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SetGatewayAutoUpgradeConfigurationResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SetGatewayDNSRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SetGatewayDNSResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SetGatewayLDAPInfoRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SetGatewayLDAPInfoResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SwitchCSGClientsReverseSyncConfigurationRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SwitchCSGClientsReverseSyncConfigurationResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SwitchCSGClientsReverseSyncConfigurationShrinkRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SwitchGatewayExpirationPolicyRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SwitchGatewayExpirationPolicyResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SwitchToSubscriptionRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\SwitchToSubscriptionResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\TriggerGatewayRemoteSyncRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\TriggerGatewayRemoteSyncResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UpdateGatewayBlockVolumeRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UpdateGatewayBlockVolumeResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UpdateGatewayFileShareRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UpdateGatewayFileShareResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UpgradeGatewayRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UpgradeGatewayResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UploadCSGClientLogRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UploadCSGClientLogResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UploadGatewayLogRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\UploadGatewayLogResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ValidateExpressSyncConfigRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ValidateExpressSyncConfigResponse;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ValidateGatewayNameRequest;
use AlibabaCloud\SDK\Sgw\V20180511\Models\ValidateGatewayNameResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sgw extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'     => 'sgw.cn-shanghai.aliyuncs.com',
            'cn-beijing'     => 'sgw.cn-shanghai.aliyuncs.com',
            'cn-chengdu'     => 'sgw.cn-shanghai.aliyuncs.com',
            'cn-zhangjiakou' => 'sgw.cn-shanghai.aliyuncs.com',
            'cn-huhehaote'   => 'sgw.cn-shanghai.aliyuncs.com',
            'cn-hangzhou'    => 'sgw.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'    => 'sgw.cn-shanghai.aliyuncs.com',
            'cn-hongkong'    => 'sgw.cn-shanghai.aliyuncs.com',
            'us-east-1'      => 'sgw.us-west-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sgw', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivateAllInOneGatewayRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ActivateAllInOneGatewayResponse
     */
    public function activateAllInOneGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientUUID)) {
            $query['ClientUUID'] = $request->clientUUID;
        }
        if (!Utils::isUnset($request->deviceNumber)) {
            $query['DeviceNumber'] = $request->deviceNumber;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateAllInOneGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateAllInOneGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActivateAllInOneGatewayRequest $request
     *
     * @return ActivateAllInOneGatewayResponse
     */
    public function activateAllInOneGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateAllInOneGatewayWithOptions($request, $runtime);
    }

    /**
     * @param ActivateGatewayRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ActivateGatewayResponse
     */
    public function activateGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientUUID)) {
            $query['ClientUUID'] = $request->clientUUID;
        }
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActivateGatewayRequest $request
     *
     * @return ActivateGatewayResponse
     */
    public function activateGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateGatewayWithOptions($request, $runtime);
    }

    /**
     * @param AddSharesToExpressSyncRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddSharesToExpressSyncResponse
     */
    public function addSharesToExpressSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expressSyncId)) {
            $query['ExpressSyncId'] = $request->expressSyncId;
        }
        if (!Utils::isUnset($request->gatewayShares)) {
            $query['GatewayShares'] = $request->gatewayShares;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSharesToExpressSync',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSharesToExpressSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSharesToExpressSyncRequest $request
     *
     * @return AddSharesToExpressSyncResponse
     */
    public function addSharesToExpressSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSharesToExpressSyncWithOptions($request, $runtime);
    }

    /**
     * @param AddTagsToGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddTagsToGatewayResponse
     */
    public function addTagsToGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTagsToGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTagsToGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTagsToGatewayRequest $request
     *
     * @return AddTagsToGatewayResponse
     */
    public function addTagsToGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagsToGatewayWithOptions($request, $runtime);
    }

    /**
     * @param CheckActivationKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckActivationKeyResponse
     */
    public function checkActivationKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cryptKey)) {
            $query['CryptKey'] = $request->cryptKey;
        }
        if (!Utils::isUnset($request->cryptText)) {
            $query['CryptText'] = $request->cryptText;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckActivationKey',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckActivationKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckActivationKeyRequest $request
     *
     * @return CheckActivationKeyResponse
     */
    public function checkActivationKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkActivationKeyWithOptions($request, $runtime);
    }

    /**
     * @param CheckBlockVolumeNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckBlockVolumeNameResponse
     */
    public function checkBlockVolumeNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketEndpoint)) {
            $query['BucketEndpoint'] = $request->bucketEndpoint;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->volumeName)) {
            $query['VolumeName'] = $request->volumeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckBlockVolumeName',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckBlockVolumeNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckBlockVolumeNameRequest $request
     *
     * @return CheckBlockVolumeNameResponse
     */
    public function checkBlockVolumeName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkBlockVolumeNameWithOptions($request, $runtime);
    }

    /**
     * @param CheckGatewayEssdSupportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckGatewayEssdSupportResponse
     */
    public function checkGatewayEssdSupportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckGatewayEssdSupport',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckGatewayEssdSupportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckGatewayEssdSupportRequest $request
     *
     * @return CheckGatewayEssdSupportResponse
     */
    public function checkGatewayEssdSupport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkGatewayEssdSupportWithOptions($request, $runtime);
    }

    /**
     * @param CheckMnsServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckMnsServiceResponse
     */
    public function checkMnsServiceWithOptions($request, $runtime)
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
            'action'      => 'CheckMnsService',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckMnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckMnsServiceRequest $request
     *
     * @return CheckMnsServiceResponse
     */
    public function checkMnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMnsServiceWithOptions($request, $runtime);
    }

    /**
     * @param CheckRoleRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CheckRoleResponse
     */
    public function checkRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckRole',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckRoleRequest $request
     *
     * @return CheckRoleResponse
     */
    public function checkRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkRoleWithOptions($request, $runtime);
    }

    /**
     * @param CheckSlrRoleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CheckSlrRoleResponse
     */
    public function checkSlrRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createIfNotExist)) {
            $query['CreateIfNotExist'] = $request->createIfNotExist;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckSlrRole',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSlrRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckSlrRoleRequest $request
     *
     * @return CheckSlrRoleResponse
     */
    public function checkSlrRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSlrRoleWithOptions($request, $runtime);
    }

    /**
     * @param CheckUpgradeVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CheckUpgradeVersionResponse
     */
    public function checkUpgradeVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientUUID)) {
            $query['ClientUUID'] = $request->clientUUID;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayVersion)) {
            $query['GatewayVersion'] = $request->gatewayVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckUpgradeVersion',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUpgradeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckUpgradeVersionRequest $request
     *
     * @return CheckUpgradeVersionResponse
     */
    public function checkUpgradeVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUpgradeVersionWithOptions($request, $runtime);
    }

    /**
     * @param CreateCacheRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateCacheResponse
     */
    public function createCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sizeInGB)) {
            $query['SizeInGB'] = $request->sizeInGB;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCache',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCacheRequest $request
     *
     * @return CreateCacheResponse
     */
    public function createCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCacheWithOptions($request, $runtime);
    }

    /**
     * @param CreateElasticGatewayPrivateZoneRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateElasticGatewayPrivateZoneResponse
     */
    public function createElasticGatewayPrivateZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateElasticGatewayPrivateZone',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateElasticGatewayPrivateZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateElasticGatewayPrivateZoneRequest $request
     *
     * @return CreateElasticGatewayPrivateZoneResponse
     */
    public function createElasticGatewayPrivateZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticGatewayPrivateZoneWithOptions($request, $runtime);
    }

    /**
     * @param CreateExpressSyncRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateExpressSyncResponse
     */
    public function createExpressSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->bucketPrefix)) {
            $query['BucketPrefix'] = $request->bucketPrefix;
        }
        if (!Utils::isUnset($request->bucketRegion)) {
            $query['BucketRegion'] = $request->bucketRegion;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateExpressSync',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExpressSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateExpressSyncRequest $request
     *
     * @return CreateExpressSyncResponse
     */
    public function createExpressSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExpressSyncWithOptions($request, $runtime);
    }

    /**
     * @param CreateGatewayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGatewayResponse
     */
    public function createGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->gatewayClass)) {
            $query['GatewayClass'] = $request->gatewayClass;
        }
        if (!Utils::isUnset($request->location)) {
            $query['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->postPaid)) {
            $query['PostPaid'] = $request->postPaid;
        }
        if (!Utils::isUnset($request->publicNetworkBandwidth)) {
            $query['PublicNetworkBandwidth'] = $request->publicNetworkBandwidth;
        }
        if (!Utils::isUnset($request->releaseAfterExpiration)) {
            $query['ReleaseAfterExpiration'] = $request->releaseAfterExpiration;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->secondaryVSwitchId)) {
            $query['SecondaryVSwitchId'] = $request->secondaryVSwitchId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->storageBundleId)) {
            $query['StorageBundleId'] = $request->storageBundleId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->untrustedEnvId)) {
            $query['UntrustedEnvId'] = $request->untrustedEnvId;
        }
        if (!Utils::isUnset($request->untrustedEnvInstanceType)) {
            $query['UntrustedEnvInstanceType'] = $request->untrustedEnvInstanceType;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGatewayRequest $request
     *
     * @return CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayWithOptions($request, $runtime);
    }

    /**
     * @param CreateGatewayBlockVolumeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateGatewayBlockVolumeResponse
     */
    public function createGatewayBlockVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheMode)) {
            $query['CacheMode'] = $request->cacheMode;
        }
        if (!Utils::isUnset($request->chapEnabled)) {
            $query['ChapEnabled'] = $request->chapEnabled;
        }
        if (!Utils::isUnset($request->chapInPassword)) {
            $query['ChapInPassword'] = $request->chapInPassword;
        }
        if (!Utils::isUnset($request->chapInUser)) {
            $query['ChapInUser'] = $request->chapInUser;
        }
        if (!Utils::isUnset($request->chunkSize)) {
            $query['ChunkSize'] = $request->chunkSize;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->localFilePath)) {
            $query['LocalFilePath'] = $request->localFilePath;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $query['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossBucketSsl)) {
            $query['OssBucketSsl'] = $request->ossBucketSsl;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->recovery)) {
            $query['Recovery'] = $request->recovery;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->volumeProtocol)) {
            $query['VolumeProtocol'] = $request->volumeProtocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayBlockVolume',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayBlockVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGatewayBlockVolumeRequest $request
     *
     * @return CreateGatewayBlockVolumeResponse
     */
    public function createGatewayBlockVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayBlockVolumeWithOptions($request, $runtime);
    }

    /**
     * @param CreateGatewayCacheDiskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateGatewayCacheDiskResponse
     */
    public function createGatewayCacheDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheDiskCategory)) {
            $query['CacheDiskCategory'] = $request->cacheDiskCategory;
        }
        if (!Utils::isUnset($request->cacheDiskSizeInGB)) {
            $query['CacheDiskSizeInGB'] = $request->cacheDiskSizeInGB;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->performanceLevel)) {
            $query['PerformanceLevel'] = $request->performanceLevel;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayCacheDisk',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayCacheDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGatewayCacheDiskRequest $request
     *
     * @return CreateGatewayCacheDiskResponse
     */
    public function createGatewayCacheDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayCacheDiskWithOptions($request, $runtime);
    }

    /**
     * @param CreateGatewayFileShareRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateGatewayFileShareResponse
     */
    public function createGatewayFileShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessBasedEnumeration)) {
            $query['AccessBasedEnumeration'] = $request->accessBasedEnumeration;
        }
        if (!Utils::isUnset($request->backendLimit)) {
            $query['BackendLimit'] = $request->backendLimit;
        }
        if (!Utils::isUnset($request->browsable)) {
            $query['Browsable'] = $request->browsable;
        }
        if (!Utils::isUnset($request->bypassCacheRead)) {
            $query['BypassCacheRead'] = $request->bypassCacheRead;
        }
        if (!Utils::isUnset($request->cacheMode)) {
            $query['CacheMode'] = $request->cacheMode;
        }
        if (!Utils::isUnset($request->clientSideCmk)) {
            $query['ClientSideCmk'] = $request->clientSideCmk;
        }
        if (!Utils::isUnset($request->clientSideEncryption)) {
            $query['ClientSideEncryption'] = $request->clientSideEncryption;
        }
        if (!Utils::isUnset($request->directIO)) {
            $query['DirectIO'] = $request->directIO;
        }
        if (!Utils::isUnset($request->downloadLimit)) {
            $query['DownloadLimit'] = $request->downloadLimit;
        }
        if (!Utils::isUnset($request->fastReclaim)) {
            $query['FastReclaim'] = $request->fastReclaim;
        }
        if (!Utils::isUnset($request->frontendLimit)) {
            $query['FrontendLimit'] = $request->frontendLimit;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->ignoreDelete)) {
            $query['IgnoreDelete'] = $request->ignoreDelete;
        }
        if (!Utils::isUnset($request->inPlace)) {
            $query['InPlace'] = $request->inPlace;
        }
        if (!Utils::isUnset($request->kmsRotatePeriod)) {
            $query['KmsRotatePeriod'] = $request->kmsRotatePeriod;
        }
        if (!Utils::isUnset($request->lagPeriod)) {
            $query['LagPeriod'] = $request->lagPeriod;
        }
        if (!Utils::isUnset($request->localFilePath)) {
            $query['LocalFilePath'] = $request->localFilePath;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nfsV4Optimization)) {
            $query['NfsV4Optimization'] = $request->nfsV4Optimization;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $query['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossBucketSsl)) {
            $query['OssBucketSsl'] = $request->ossBucketSsl;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->partialSyncPaths)) {
            $query['PartialSyncPaths'] = $request->partialSyncPaths;
        }
        if (!Utils::isUnset($request->pathPrefix)) {
            $query['PathPrefix'] = $request->pathPrefix;
        }
        if (!Utils::isUnset($request->pollingInterval)) {
            $query['PollingInterval'] = $request->pollingInterval;
        }
        if (!Utils::isUnset($request->readOnlyClientList)) {
            $query['ReadOnlyClientList'] = $request->readOnlyClientList;
        }
        if (!Utils::isUnset($request->readOnlyUserList)) {
            $query['ReadOnlyUserList'] = $request->readOnlyUserList;
        }
        if (!Utils::isUnset($request->readWriteClientList)) {
            $query['ReadWriteClientList'] = $request->readWriteClientList;
        }
        if (!Utils::isUnset($request->readWriteUserList)) {
            $query['ReadWriteUserList'] = $request->readWriteUserList;
        }
        if (!Utils::isUnset($request->remoteSync)) {
            $query['RemoteSync'] = $request->remoteSync;
        }
        if (!Utils::isUnset($request->remoteSyncDownload)) {
            $query['RemoteSyncDownload'] = $request->remoteSyncDownload;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverSideAlgorithm)) {
            $query['ServerSideAlgorithm'] = $request->serverSideAlgorithm;
        }
        if (!Utils::isUnset($request->serverSideCmk)) {
            $query['ServerSideCmk'] = $request->serverSideCmk;
        }
        if (!Utils::isUnset($request->serverSideEncryption)) {
            $query['ServerSideEncryption'] = $request->serverSideEncryption;
        }
        if (!Utils::isUnset($request->shareProtocol)) {
            $query['ShareProtocol'] = $request->shareProtocol;
        }
        if (!Utils::isUnset($request->squash)) {
            $query['Squash'] = $request->squash;
        }
        if (!Utils::isUnset($request->supportArchive)) {
            $query['SupportArchive'] = $request->supportArchive;
        }
        if (!Utils::isUnset($request->transferAcceleration)) {
            $query['TransferAcceleration'] = $request->transferAcceleration;
        }
        if (!Utils::isUnset($request->windowsAcl)) {
            $query['WindowsAcl'] = $request->windowsAcl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayFileShare',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayFileShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGatewayFileShareRequest $request
     *
     * @return CreateGatewayFileShareResponse
     */
    public function createGatewayFileShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayFileShareWithOptions($request, $runtime);
    }

    /**
     * @param CreateGatewayLoggingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateGatewayLoggingResponse
     */
    public function createGatewayLoggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->slsLogstore)) {
            $query['SlsLogstore'] = $request->slsLogstore;
        }
        if (!Utils::isUnset($request->slsProject)) {
            $query['SlsProject'] = $request->slsProject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayLogging',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayLoggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGatewayLoggingRequest $request
     *
     * @return CreateGatewayLoggingResponse
     */
    public function createGatewayLogging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewayLoggingWithOptions($request, $runtime);
    }

    /**
     * @param CreateGatewaySMBUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateGatewaySMBUserResponse
     */
    public function createGatewaySMBUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewaySMBUser',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGatewaySMBUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGatewaySMBUserRequest $request
     *
     * @return CreateGatewaySMBUserResponse
     */
    public function createGatewaySMBUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGatewaySMBUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateStorageBundleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateStorageBundleResponse
     */
    public function createStorageBundleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendBucketRegionId)) {
            $query['BackendBucketRegionId'] = $request->backendBucketRegionId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStorageBundle',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStorageBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStorageBundleRequest $request
     *
     * @return CreateStorageBundleResponse
     */
    public function createStorageBundle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStorageBundleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCSGClientsRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCSGClientsResponse
     */
    public function deleteCSGClientsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteCSGClientsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clientIds)) {
            $request->clientIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientIdsShrink)) {
            $query['ClientIds'] = $request->clientIdsShrink;
        }
        if (!Utils::isUnset($request->clientRegionId)) {
            $query['ClientRegionId'] = $request->clientRegionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCSGClients',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCSGClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCSGClientsRequest $request
     *
     * @return DeleteCSGClientsResponse
     */
    public function deleteCSGClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCSGClientsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteElasticGatewayPrivateZoneRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteElasticGatewayPrivateZoneResponse
     */
    public function deleteElasticGatewayPrivateZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteElasticGatewayPrivateZone',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteElasticGatewayPrivateZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteElasticGatewayPrivateZoneRequest $request
     *
     * @return DeleteElasticGatewayPrivateZoneResponse
     */
    public function deleteElasticGatewayPrivateZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteElasticGatewayPrivateZoneWithOptions($request, $runtime);
    }

    /**
     * @param DeleteExpressSyncRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteExpressSyncResponse
     */
    public function deleteExpressSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expressSyncId)) {
            $query['ExpressSyncId'] = $request->expressSyncId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteExpressSync',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExpressSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteExpressSyncRequest $request
     *
     * @return DeleteExpressSyncResponse
     */
    public function deleteExpressSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExpressSyncWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->reasonDetail)) {
            $query['ReasonDetail'] = $request->reasonDetail;
        }
        if (!Utils::isUnset($request->reasonType)) {
            $query['ReasonType'] = $request->reasonType;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayRequest $request
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayBlockVolumesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteGatewayBlockVolumesResponse
     */
    public function deleteGatewayBlockVolumesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->isSourceDeletion)) {
            $query['IsSourceDeletion'] = $request->isSourceDeletion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayBlockVolumes',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayBlockVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayBlockVolumesRequest $request
     *
     * @return DeleteGatewayBlockVolumesResponse
     */
    public function deleteGatewayBlockVolumes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayBlockVolumesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayCacheDiskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteGatewayCacheDiskResponse
     */
    public function deleteGatewayCacheDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheId)) {
            $query['CacheId'] = $request->cacheId;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->localFilePath)) {
            $query['LocalFilePath'] = $request->localFilePath;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayCacheDisk',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayCacheDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayCacheDiskRequest $request
     *
     * @return DeleteGatewayCacheDiskResponse
     */
    public function deleteGatewayCacheDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayCacheDiskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayFileSharesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteGatewayFileSharesResponse
     */
    public function deleteGatewayFileSharesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayFileShares',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayFileSharesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayFileSharesRequest $request
     *
     * @return DeleteGatewayFileSharesResponse
     */
    public function deleteGatewayFileShares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayFileSharesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewayLoggingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGatewayLoggingResponse
     */
    public function deleteGatewayLoggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayLogging',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayLoggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewayLoggingRequest $request
     *
     * @return DeleteGatewayLoggingResponse
     */
    public function deleteGatewayLogging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewayLoggingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGatewaySMBUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGatewaySMBUserResponse
     */
    public function deleteGatewaySMBUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewaySMBUser',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewaySMBUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGatewaySMBUserRequest $request
     *
     * @return DeleteGatewaySMBUserResponse
     */
    public function deleteGatewaySMBUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGatewaySMBUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStorageBundleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteStorageBundleResponse
     */
    public function deleteStorageBundleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->storageBundleId)) {
            $query['StorageBundleId'] = $request->storageBundleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStorageBundle',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStorageBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteStorageBundleRequest $request
     *
     * @return DeleteStorageBundleResponse
     */
    public function deleteStorageBundle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStorageBundleWithOptions($request, $runtime);
    }

    /**
     * @param DeployCSGClientsRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return DeployCSGClientsResponse
     */
    public function deployCSGClientsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeployCSGClientsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecsInstanceIds)) {
            $request->ecsInstanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecsInstanceIds, 'EcsInstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientRegionId)) {
            $query['ClientRegionId'] = $request->clientRegionId;
        }
        if (!Utils::isUnset($request->ecsInstanceIdsShrink)) {
            $query['EcsInstanceIds'] = $request->ecsInstanceIdsShrink;
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
            'action'      => 'DeployCSGClients',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployCSGClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployCSGClientsRequest $request
     *
     * @return DeployCSGClientsResponse
     */
    public function deployCSGClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployCSGClientsWithOptions($request, $runtime);
    }

    /**
     * @param DeployCacheDiskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeployCacheDiskResponse
     */
    public function deployCacheDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheConfig)) {
            $query['CacheConfig'] = $request->cacheConfig;
        }
        if (!Utils::isUnset($request->diskCategory)) {
            $query['DiskCategory'] = $request->diskCategory;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sizeInGB)) {
            $query['SizeInGB'] = $request->sizeInGB;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployCacheDisk',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployCacheDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployCacheDiskRequest $request
     *
     * @return DeployCacheDiskResponse
     */
    public function deployCacheDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployCacheDiskWithOptions($request, $runtime);
    }

    /**
     * @param DeployGatewayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeployGatewayResponse
     */
    public function deployGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayClass)) {
            $query['GatewayClass'] = $request->gatewayClass;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployGatewayRequest $request
     *
     * @return DeployGatewayResponse
     */
    public function deployGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAccountConfigResponse
     */
    public function describeAccountConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountConfig',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccountConfigRequest $request
     *
     * @return DescribeAccountConfigResponse
     */
    public function describeAccountConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockVolumeSnapshotsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeBlockVolumeSnapshotsResponse
     */
    public function describeBlockVolumeSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
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
            'action'      => 'DescribeBlockVolumeSnapshots',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockVolumeSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockVolumeSnapshotsRequest $request
     *
     * @return DescribeBlockVolumeSnapshotsResponse
     */
    public function describeBlockVolumeSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockVolumeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCSGClientTasksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCSGClientTasksResponse
     */
    public function describeCSGClientTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientRegionId)) {
            $query['ClientRegionId'] = $request->clientRegionId;
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
            'action'      => 'DescribeCSGClientTasks',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCSGClientTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCSGClientTasksRequest $request
     *
     * @return DescribeCSGClientTasksResponse
     */
    public function describeCSGClientTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCSGClientTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCSGClientsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCSGClientsResponse
     */
    public function describeCSGClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientRegionId)) {
            $query['ClientRegionId'] = $request->clientRegionId;
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
            'action'      => 'DescribeCSGClients',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCSGClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCSGClientsRequest $request
     *
     * @return DescribeCSGClientsResponse
     */
    public function describeCSGClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCSGClientsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDashboardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDashboardResponse
     */
    public function describeDashboardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendBucketRegionId)) {
            $query['BackendBucketRegionId'] = $request->backendBucketRegionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDashboard',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDashboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDashboardRequest $request
     *
     * @return DescribeDashboardResponse
     */
    public function describeDashboard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDashboardWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExpireCachesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeExpireCachesResponse
     */
    public function describeExpireCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExpireCaches',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpireCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExpireCachesRequest $request
     *
     * @return DescribeExpireCachesResponse
     */
    public function describeExpireCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpireCachesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExpressSyncSharesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExpressSyncSharesResponse
     */
    public function describeExpressSyncSharesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expressSyncIds)) {
            $query['ExpressSyncIds'] = $request->expressSyncIds;
        }
        if (!Utils::isUnset($request->isExternal)) {
            $query['IsExternal'] = $request->isExternal;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExpressSyncShares',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressSyncSharesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExpressSyncSharesRequest $request
     *
     * @return DescribeExpressSyncSharesResponse
     */
    public function describeExpressSyncShares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressSyncSharesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExpressSyncsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeExpressSyncsResponse
     */
    public function describeExpressSyncsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->bucketPrefix)) {
            $query['BucketPrefix'] = $request->bucketPrefix;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExpressSyncs',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpressSyncsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExpressSyncsRequest $request
     *
     * @return DescribeExpressSyncsResponse
     */
    public function describeExpressSyncs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpressSyncsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeGatewayResponse
     */
    public function describeGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayRequest $request
     *
     * @return DescribeGatewayResponse
     */
    public function describeGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayADInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeGatewayADInfoResponse
     */
    public function describeGatewayADInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayADInfo',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayADInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayADInfoRequest $request
     *
     * @return DescribeGatewayADInfoResponse
     */
    public function describeGatewayADInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayADInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayActionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGatewayActionsResponse
     */
    public function describeGatewayActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayActions',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayActionsRequest $request
     *
     * @return DescribeGatewayActionsResponse
     */
    public function describeGatewayActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayActionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayAuthInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGatewayAuthInfoResponse
     */
    public function describeGatewayAuthInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayAuthInfo',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayAuthInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayAuthInfoRequest $request
     *
     * @return DescribeGatewayAuthInfoResponse
     */
    public function describeGatewayAuthInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayAuthInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayAutoPlansRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGatewayAutoPlansResponse
     */
    public function describeGatewayAutoPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
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
            'action'      => 'DescribeGatewayAutoPlans',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayAutoPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayAutoPlansRequest $request
     *
     * @return DescribeGatewayAutoPlansResponse
     */
    public function describeGatewayAutoPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayAutoPlansWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayAutoUpgradeConfigurationRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeGatewayAutoUpgradeConfigurationResponse
     */
    public function describeGatewayAutoUpgradeConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayAutoUpgradeConfiguration',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayAutoUpgradeConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayAutoUpgradeConfigurationRequest $request
     *
     * @return DescribeGatewayAutoUpgradeConfigurationResponse
     */
    public function describeGatewayAutoUpgradeConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayAutoUpgradeConfigurationWithOptions($request, $runtime);
    }

    /**
     * ****
     *   *
     * @param DescribeGatewayBlockVolumesRequest $request DescribeGatewayBlockVolumesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGatewayBlockVolumesResponse DescribeGatewayBlockVolumesResponse
     */
    public function describeGatewayBlockVolumesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->refresh)) {
            $query['Refresh'] = $request->refresh;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayBlockVolumes',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayBlockVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ****
     *   *
     * @param DescribeGatewayBlockVolumesRequest $request DescribeGatewayBlockVolumesRequest
     *
     * @return DescribeGatewayBlockVolumesResponse DescribeGatewayBlockVolumesResponse
     */
    public function describeGatewayBlockVolumes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayBlockVolumesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayBucketCachesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeGatewayBucketCachesResponse
     */
    public function describeGatewayBucketCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
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
            'action'      => 'DescribeGatewayBucketCaches',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayBucketCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayBucketCachesRequest $request
     *
     * @return DescribeGatewayBucketCachesResponse
     */
    public function describeGatewayBucketCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayBucketCachesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayCachesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeGatewayCachesResponse
     */
    public function describeGatewayCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayCaches',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayCachesRequest $request
     *
     * @return DescribeGatewayCachesResponse
     */
    public function describeGatewayCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayCachesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayCapacityLimitRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeGatewayCapacityLimitResponse
     */
    public function describeGatewayCapacityLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sizeInGB)) {
            $query['SizeInGB'] = $request->sizeInGB;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayCapacityLimit',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayCapacityLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayCapacityLimitRequest $request
     *
     * @return DescribeGatewayCapacityLimitResponse
     */
    public function describeGatewayCapacityLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayCapacityLimitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayCategoriesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGatewayCategoriesResponse
     */
    public function describeGatewayCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayLocation)) {
            $query['GatewayLocation'] = $request->gatewayLocation;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayCategories',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayCategoriesRequest $request
     *
     * @return DescribeGatewayCategoriesResponse
     */
    public function describeGatewayCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayClassesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGatewayClassesResponse
     */
    public function describeGatewayClassesWithOptions($request, $runtime)
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
            'action'      => 'DescribeGatewayClasses',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayClassesRequest $request
     *
     * @return DescribeGatewayClassesResponse
     */
    public function describeGatewayClasses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayClassesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayCredentialRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGatewayCredentialResponse
     */
    public function describeGatewayCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayCredential',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayCredentialRequest $request
     *
     * @return DescribeGatewayCredentialResponse
     */
    public function describeGatewayCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayCredentialWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayDNSRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeGatewayDNSResponse
     */
    public function describeGatewayDNSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayDNS',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayDNSRequest $request
     *
     * @return DescribeGatewayDNSResponse
     */
    public function describeGatewayDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayDNSWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayFileSharesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGatewayFileSharesResponse
     */
    public function describeGatewayFileSharesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->refresh)) {
            $query['Refresh'] = $request->refresh;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayFileShares',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayFileSharesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayFileSharesRequest $request
     *
     * @return DescribeGatewayFileSharesResponse
     */
    public function describeGatewayFileShares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayFileSharesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayFileStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGatewayFileStatusResponse
     */
    public function describeGatewayFileStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayFileStatus',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayFileStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayFileStatusRequest $request
     *
     * @return DescribeGatewayFileStatusResponse
     */
    public function describeGatewayFileStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayFileStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayImagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeGatewayImagesResponse
     */
    public function describeGatewayImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayImages',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayImagesRequest $request
     *
     * @return DescribeGatewayImagesResponse
     */
    public function describeGatewayImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayImagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeGatewayInfoResponse
     */
    public function describeGatewayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayInfo',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayInfoRequest $request
     *
     * @return DescribeGatewayInfoResponse
     */
    public function describeGatewayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayLDAPInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGatewayLDAPInfoResponse
     */
    public function describeGatewayLDAPInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayLDAPInfo',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayLDAPInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayLDAPInfoRequest $request
     *
     * @return DescribeGatewayLDAPInfoResponse
     */
    public function describeGatewayLDAPInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayLDAPInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayLocationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGatewayLocationsResponse
     */
    public function describeGatewayLocationsWithOptions($request, $runtime)
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
            'action'      => 'DescribeGatewayLocations',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayLocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayLocationsRequest $request
     *
     * @return DescribeGatewayLocationsResponse
     */
    public function describeGatewayLocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayLocationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayLoggingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGatewayLoggingResponse
     */
    public function describeGatewayLoggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayLogging',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayLoggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayLoggingRequest $request
     *
     * @return DescribeGatewayLoggingResponse
     */
    public function describeGatewayLogging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayLoggingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayLogsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeGatewayLogsResponse
     */
    public function describeGatewayLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->logFilePath)) {
            $query['LogFilePath'] = $request->logFilePath;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayLogs',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayLogsRequest $request
     *
     * @return DescribeGatewayLogsResponse
     */
    public function describeGatewayLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayModificationClassesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeGatewayModificationClassesResponse
     */
    public function describeGatewayModificationClassesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayModificationClasses',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayModificationClassesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayModificationClassesRequest $request
     *
     * @return DescribeGatewayModificationClassesResponse
     */
    public function describeGatewayModificationClasses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayModificationClassesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayNFSClientsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGatewayNFSClientsResponse
     */
    public function describeGatewayNFSClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
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
            'action'      => 'DescribeGatewayNFSClients',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayNFSClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayNFSClientsRequest $request
     *
     * @return DescribeGatewayNFSClientsResponse
     */
    public function describeGatewayNFSClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayNFSClientsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewaySMBUsersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGatewaySMBUsersResponse
     */
    public function describeGatewaySMBUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
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
            'action'      => 'DescribeGatewaySMBUsers',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewaySMBUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewaySMBUsersRequest $request
     *
     * @return DescribeGatewaySMBUsersResponse
     */
    public function describeGatewaySMBUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewaySMBUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayStatisticsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGatewayStatisticsResponse
     */
    public function describeGatewayStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->gatewayCategory)) {
            $query['GatewayCategory'] = $request->gatewayCategory;
        }
        if (!Utils::isUnset($request->gatewayLocation)) {
            $query['GatewayLocation'] = $request->gatewayLocation;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        if (!Utils::isUnset($request->targetAccountId)) {
            $query['TargetAccountId'] = $request->targetAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayStatistics',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayStatisticsRequest $request
     *
     * @return DescribeGatewayStatisticsResponse
     */
    public function describeGatewayStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayStockRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGatewayStockResponse
     */
    public function describeGatewayStockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayRegionId)) {
            $query['GatewayRegionId'] = $request->gatewayRegionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayStock',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayStockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayStockRequest $request
     *
     * @return DescribeGatewayStockResponse
     */
    public function describeGatewayStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayStockWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewayTypesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGatewayTypesResponse
     */
    public function describeGatewayTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayLocation)) {
            $query['GatewayLocation'] = $request->gatewayLocation;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewayTypes',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewayTypesRequest $request
     *
     * @return DescribeGatewayTypesResponse
     */
    public function describeGatewayTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewayTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewaysRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeGatewaysResponse
     */
    public function describeGatewaysWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->storageBundleId)) {
            $query['StorageBundleId'] = $request->storageBundleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGateways',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewaysRequest $request
     *
     * @return DescribeGatewaysResponse
     */
    public function describeGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewaysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewaysForCmsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeGatewaysForCmsResponse
     */
    public function describeGatewaysForCmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayRegionId)) {
            $query['GatewayRegionId'] = $request->gatewayRegionId;
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
            'action'      => 'DescribeGatewaysForCms',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewaysForCmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewaysForCmsRequest $request
     *
     * @return DescribeGatewaysForCmsResponse
     */
    public function describeGatewaysForCms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewaysForCmsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGatewaysTagsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGatewaysTagsResponse
     */
    public function describeGatewaysTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayIds)) {
            $query['GatewayIds'] = $request->gatewayIds;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->storageBundleId)) {
            $query['StorageBundleId'] = $request->storageBundleId;
        }
        if (!Utils::isUnset($request->tagCategory)) {
            $query['TagCategory'] = $request->tagCategory;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGatewaysTags',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewaysTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGatewaysTagsRequest $request
     *
     * @return DescribeGatewaysTagsResponse
     */
    public function describeGatewaysTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGatewaysTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKmsKeyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeKmsKeyResponse
     */
    public function describeKmsKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->kmsKey)) {
            $query['KmsKey'] = $request->kmsKey;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKmsKey',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKmsKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeKmsKeyRequest $request
     *
     * @return DescribeKmsKeyResponse
     */
    public function describeKmsKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKmsKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMqttConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMqttConfigResponse
     */
    public function describeMqttConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMqttConfig',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMqttConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMqttConfigRequest $request
     *
     * @return DescribeMqttConfigResponse
     */
    public function describeMqttConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMqttConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssBucketInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeOssBucketInfoResponse
     */
    public function describeOssBucketInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketEndpoint)) {
            $query['BucketEndpoint'] = $request->bucketEndpoint;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssBucketInfo',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssBucketInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssBucketInfoRequest $request
     *
     * @return DescribeOssBucketInfoResponse
     */
    public function describeOssBucketInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssBucketInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssBucketsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOssBucketsResponse
     */
    public function describeOssBucketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketEndpoint)) {
            $query['BucketEndpoint'] = $request->bucketEndpoint;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssBuckets',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssBucketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssBucketsRequest $request
     *
     * @return DescribeOssBucketsResponse
     */
    public function describeOssBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssBucketsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePayAsYouGoPriceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePayAsYouGoPriceResponse
     */
    public function describePayAsYouGoPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayClass)) {
            $query['GatewayClass'] = $request->gatewayClass;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePayAsYouGoPrice',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePayAsYouGoPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePayAsYouGoPriceRequest $request
     *
     * @return DescribePayAsYouGoPriceResponse
     */
    public function describePayAsYouGoPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePayAsYouGoPriceWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2018-05-11',
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
     * @param DescribeSharesBucketInfoForExpressSyncRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeSharesBucketInfoForExpressSyncResponse
     */
    public function describeSharesBucketInfoForExpressSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->bucketRegion)) {
            $query['BucketRegion'] = $request->bucketRegion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSharesBucketInfoForExpressSync',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSharesBucketInfoForExpressSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSharesBucketInfoForExpressSyncRequest $request
     *
     * @return DescribeSharesBucketInfoForExpressSyncResponse
     */
    public function describeSharesBucketInfoForExpressSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSharesBucketInfoForExpressSyncWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStorageBundleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeStorageBundleResponse
     */
    public function describeStorageBundleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->storageBundleId)) {
            $query['StorageBundleId'] = $request->storageBundleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStorageBundle',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStorageBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStorageBundleRequest $request
     *
     * @return DescribeStorageBundleResponse
     */
    public function describeStorageBundle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageBundleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStorageBundlesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeStorageBundlesResponse
     */
    public function describeStorageBundlesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendBucketRegionId)) {
            $query['BackendBucketRegionId'] = $request->backendBucketRegionId;
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
            'action'      => 'DescribeStorageBundles',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStorageBundlesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStorageBundlesRequest $request
     *
     * @return DescribeStorageBundlesResponse
     */
    public function describeStorageBundles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageBundlesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSubscriptionPriceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSubscriptionPriceResponse
     */
    public function describeSubscriptionPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheCloudEfficiencySize)) {
            $query['CacheCloudEfficiencySize'] = $request->cacheCloudEfficiencySize;
        }
        if (!Utils::isUnset($request->cacheESSDPl1Size)) {
            $query['CacheESSDPl1Size'] = $request->cacheESSDPl1Size;
        }
        if (!Utils::isUnset($request->cacheSSDSize)) {
            $query['CacheSSDSize'] = $request->cacheSSDSize;
        }
        if (!Utils::isUnset($request->gatewayClass)) {
            $query['GatewayClass'] = $request->gatewayClass;
        }
        if (!Utils::isUnset($request->periodQuantity)) {
            $query['PeriodQuantity'] = $request->periodQuantity;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscriptionPrice',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscriptionPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSubscriptionPriceRequest $request
     *
     * @return DescribeSubscriptionPriceResponse
     */
    public function describeSubscriptionPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionPriceWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2018-05-11',
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
     * @param DescribeUserBusinessStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeUserBusinessStatusResponse
     */
    public function describeUserBusinessStatusWithOptions($request, $runtime)
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
            'action'      => 'DescribeUserBusinessStatus',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserBusinessStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserBusinessStatusRequest $request
     *
     * @return DescribeUserBusinessStatusResponse
     */
    public function describeUserBusinessStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBusinessStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->storageBundleId)) {
            $query['StorageBundleId'] = $request->storageBundleId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVSwitches',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->storageBundleId)) {
            $query['StorageBundleId'] = $request->storageBundleId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcs',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpcsRequest $request
     *
     * @return DescribeVpcsResponse
     */
    public function describeVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2018-05-11',
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
     * @param DisableGatewayLoggingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableGatewayLoggingResponse
     */
    public function disableGatewayLoggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableGatewayLogging',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableGatewayLoggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableGatewayLoggingRequest $request
     *
     * @return DisableGatewayLoggingResponse
     */
    public function disableGatewayLogging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableGatewayLoggingWithOptions($request, $runtime);
    }

    /**
     * @param DisableGatewayNFSVersionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableGatewayNFSVersionResponse
     */
    public function disableGatewayNFSVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->NFSVersion)) {
            $query['NFSVersion'] = $request->NFSVersion;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableGatewayNFSVersion',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableGatewayNFSVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableGatewayNFSVersionRequest $request
     *
     * @return DisableGatewayNFSVersionResponse
     */
    public function disableGatewayNFSVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableGatewayNFSVersionWithOptions($request, $runtime);
    }

    /**
     * @param EnableGatewayIpv6Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableGatewayIpv6Response
     */
    public function enableGatewayIpv6WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableGatewayIpv6',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableGatewayIpv6Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableGatewayIpv6Request $request
     *
     * @return EnableGatewayIpv6Response
     */
    public function enableGatewayIpv6($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableGatewayIpv6WithOptions($request, $runtime);
    }

    /**
     * @param EnableGatewayLoggingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableGatewayLoggingResponse
     */
    public function enableGatewayLoggingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableGatewayLogging',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableGatewayLoggingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableGatewayLoggingRequest $request
     *
     * @return EnableGatewayLoggingResponse
     */
    public function enableGatewayLogging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableGatewayLoggingWithOptions($request, $runtime);
    }

    /**
     * @param ExpandCacheDiskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExpandCacheDiskResponse
     */
    public function expandCacheDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->localFilePath)) {
            $query['LocalFilePath'] = $request->localFilePath;
        }
        if (!Utils::isUnset($request->newSizeInGB)) {
            $query['NewSizeInGB'] = $request->newSizeInGB;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExpandCacheDisk',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExpandCacheDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExpandCacheDiskRequest $request
     *
     * @return ExpandCacheDiskResponse
     */
    public function expandCacheDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->expandCacheDiskWithOptions($request, $runtime);
    }

    /**
     * @param ExpandGatewayFileShareRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExpandGatewayFileShareResponse
     */
    public function expandGatewayFileShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExpandGatewayFileShare',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExpandGatewayFileShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExpandGatewayFileShareRequest $request
     *
     * @return ExpandGatewayFileShareResponse
     */
    public function expandGatewayFileShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->expandGatewayFileShareWithOptions($request, $runtime);
    }

    /**
     * @param ExpandGatewayNetworkBandwidthRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ExpandGatewayNetworkBandwidthResponse
     */
    public function expandGatewayNetworkBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->newNetworkBandwidth)) {
            $query['NewNetworkBandwidth'] = $request->newNetworkBandwidth;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExpandGatewayNetworkBandwidth',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExpandGatewayNetworkBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExpandGatewayNetworkBandwidthRequest $request
     *
     * @return ExpandGatewayNetworkBandwidthResponse
     */
    public function expandGatewayNetworkBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->expandGatewayNetworkBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param GenerateGatewayTokenRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateGatewayTokenResponse
     */
    public function generateGatewayTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateGatewayToken',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateGatewayTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateGatewayTokenRequest $request
     *
     * @return GenerateGatewayTokenResponse
     */
    public function generateGatewayToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateGatewayTokenWithOptions($request, $runtime);
    }

    /**
     * @param GenerateMqttTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateMqttTokenResponse
     */
    public function generateMqttTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientUUID)) {
            $query['ClientUUID'] = $request->clientUUID;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateMqttToken',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateMqttTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateMqttTokenRequest $request
     *
     * @return GenerateMqttTokenResponse
     */
    public function generateMqttToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateMqttTokenWithOptions($request, $runtime);
    }

    /**
     * @param GenerateStsTokenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GenerateStsTokenResponse
     */
    public function generateStsTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expireInSeconds)) {
            $query['ExpireInSeconds'] = $request->expireInSeconds;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tokenType)) {
            $query['TokenType'] = $request->tokenType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateStsToken',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateStsTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateStsTokenRequest $request
     *
     * @return GenerateStsTokenResponse
     */
    public function generateStsToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateStsTokenWithOptions($request, $runtime);
    }

    /**
     * @param HandleGatewayAutoPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return HandleGatewayAutoPlanResponse
     */
    public function handleGatewayAutoPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cancel)) {
            $query['Cancel'] = $request->cancel;
        }
        if (!Utils::isUnset($request->delayHours)) {
            $query['DelayHours'] = $request->delayHours;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HandleGatewayAutoPlan',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HandleGatewayAutoPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HandleGatewayAutoPlanRequest $request
     *
     * @return HandleGatewayAutoPlanResponse
     */
    public function handleGatewayAutoPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleGatewayAutoPlanWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
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
            'action'      => 'ListTagResources',
            'version'     => '2018-05-11',
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
     * @param ModifyGatewayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyGatewayResponse
     */
    public function modifyGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGatewayRequest $request
     *
     * @return ModifyGatewayResponse
     */
    public function modifyGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGatewayWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGatewayBlockVolumeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyGatewayBlockVolumeResponse
     */
    public function modifyGatewayBlockVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheConfig)) {
            $query['CacheConfig'] = $request->cacheConfig;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGatewayBlockVolume',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGatewayBlockVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGatewayBlockVolumeRequest $request
     *
     * @return ModifyGatewayBlockVolumeResponse
     */
    public function modifyGatewayBlockVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGatewayBlockVolumeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGatewayClassRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyGatewayClassResponse
     */
    public function modifyGatewayClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayClass)) {
            $query['GatewayClass'] = $request->gatewayClass;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGatewayClass',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGatewayClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGatewayClassRequest $request
     *
     * @return ModifyGatewayClassResponse
     */
    public function modifyGatewayClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGatewayClassWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGatewayFileShareRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyGatewayFileShareResponse
     */
    public function modifyGatewayFileShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheConfig)) {
            $query['CacheConfig'] = $request->cacheConfig;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGatewayFileShare',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGatewayFileShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGatewayFileShareRequest $request
     *
     * @return ModifyGatewayFileShareResponse
     */
    public function modifyGatewayFileShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGatewayFileShareWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGatewayFileShareWatermarkRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyGatewayFileShareWatermarkResponse
     */
    public function modifyGatewayFileShareWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->watermark)) {
            $query['Watermark'] = $request->watermark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGatewayFileShareWatermark',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGatewayFileShareWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGatewayFileShareWatermarkRequest $request
     *
     * @return ModifyGatewayFileShareWatermarkResponse
     */
    public function modifyGatewayFileShareWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGatewayFileShareWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param ModifyStorageBundleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyStorageBundleResponse
     */
    public function modifyStorageBundleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->storageBundleId)) {
            $query['StorageBundleId'] = $request->storageBundleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStorageBundle',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStorageBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyStorageBundleRequest $request
     *
     * @return ModifyStorageBundleResponse
     */
    public function modifyStorageBundle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStorageBundleWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return OpenSgwServiceResponse
     */
    public function openSgwServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenSgwService',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenSgwServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return OpenSgwServiceResponse
     */
    public function openSgwService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openSgwServiceWithOptions($runtime);
    }

    /**
     * @param OperateGatewayRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OperateGatewayResponse
     */
    public function operateGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->operateAction)) {
            $query['OperateAction'] = $request->operateAction;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateGatewayRequest $request
     *
     * @return OperateGatewayResponse
     */
    public function operateGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateGatewayWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseServiceResponse
     */
    public function releaseServiceWithOptions($request, $runtime)
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
            'action'      => 'ReleaseService',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseServiceRequest $request
     *
     * @return ReleaseServiceResponse
     */
    public function releaseService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseServiceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSharesFromExpressSyncRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveSharesFromExpressSyncResponse
     */
    public function removeSharesFromExpressSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expressSyncId)) {
            $query['ExpressSyncId'] = $request->expressSyncId;
        }
        if (!Utils::isUnset($request->gatewayShares)) {
            $query['GatewayShares'] = $request->gatewayShares;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveSharesFromExpressSync',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSharesFromExpressSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveSharesFromExpressSyncRequest $request
     *
     * @return RemoveSharesFromExpressSyncResponse
     */
    public function removeSharesFromExpressSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSharesFromExpressSyncWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTagsFromGatewayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveTagsFromGatewayResponse
     */
    public function removeTagsFromGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTagsFromGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTagsFromGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveTagsFromGatewayRequest $request
     *
     * @return RemoveTagsFromGatewayResponse
     */
    public function removeTagsFromGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagsFromGatewayWithOptions($request, $runtime);
    }

    /**
     * @param ReportBlockVolumesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReportBlockVolumesResponse
     */
    public function reportBlockVolumesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientUUID)) {
            $query['ClientUUID'] = $request->clientUUID;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->info)) {
            $query['Info'] = $request->info;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportBlockVolumes',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportBlockVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportBlockVolumesRequest $request
     *
     * @return ReportBlockVolumesResponse
     */
    public function reportBlockVolumes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportBlockVolumesWithOptions($request, $runtime);
    }

    /**
     * @param ReportFileSharesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReportFileSharesResponse
     */
    public function reportFileSharesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientUUID)) {
            $query['ClientUUID'] = $request->clientUUID;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->info)) {
            $query['Info'] = $request->info;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportFileShares',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportFileSharesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportFileSharesRequest $request
     *
     * @return ReportFileSharesResponse
     */
    public function reportFileShares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportFileSharesWithOptions($request, $runtime);
    }

    /**
     * @param ReportGatewayInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReportGatewayInfoResponse
     */
    public function reportGatewayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientUUID)) {
            $query['ClientUUID'] = $request->clientUUID;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayStatus)) {
            $query['GatewayStatus'] = $request->gatewayStatus;
        }
        if (!Utils::isUnset($request->info)) {
            $query['Info'] = $request->info;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->time)) {
            $query['Time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportGatewayInfo',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportGatewayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportGatewayInfoRequest $request
     *
     * @return ReportGatewayInfoResponse
     */
    public function reportGatewayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportGatewayInfoWithOptions($request, $runtime);
    }

    /**
     * @param ReportGatewayUsageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReportGatewayUsageResponse
     */
    public function reportGatewayUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientUUID)) {
            $query['ClientUUID'] = $request->clientUUID;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->usage)) {
            $query['Usage'] = $request->usage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportGatewayUsage',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportGatewayUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportGatewayUsageRequest $request
     *
     * @return ReportGatewayUsageResponse
     */
    public function reportGatewayUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportGatewayUsageWithOptions($request, $runtime);
    }

    /**
     * @param ResetGatewayPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetGatewayPasswordResponse
     */
    public function resetGatewayPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetGatewayPassword',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetGatewayPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetGatewayPasswordRequest $request
     *
     * @return ResetGatewayPasswordResponse
     */
    public function resetGatewayPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetGatewayPasswordWithOptions($request, $runtime);
    }

    /**
     * @param RestartFileSharesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartFileSharesResponse
     */
    public function restartFileSharesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->shareProtocol)) {
            $query['ShareProtocol'] = $request->shareProtocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartFileShares',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartFileSharesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartFileSharesRequest $request
     *
     * @return RestartFileSharesResponse
     */
    public function restartFileShares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartFileSharesWithOptions($request, $runtime);
    }

    /**
     * @param SetGatewayADInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetGatewayADInfoResponse
     */
    public function setGatewayADInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->isEnabled)) {
            $query['IsEnabled'] = $request->isEnabled;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverIp)) {
            $query['ServerIp'] = $request->serverIp;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGatewayADInfo',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGatewayADInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGatewayADInfoRequest $request
     *
     * @return SetGatewayADInfoResponse
     */
    public function setGatewayADInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGatewayADInfoWithOptions($request, $runtime);
    }

    /**
     * @param SetGatewayAutoUpgradeConfigurationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SetGatewayAutoUpgradeConfigurationResponse
     */
    public function setGatewayAutoUpgradeConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoUpgradeEndHour)) {
            $query['AutoUpgradeEndHour'] = $request->autoUpgradeEndHour;
        }
        if (!Utils::isUnset($request->autoUpgradeStartHour)) {
            $query['AutoUpgradeStartHour'] = $request->autoUpgradeStartHour;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->isAutoUpgrade)) {
            $query['IsAutoUpgrade'] = $request->isAutoUpgrade;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGatewayAutoUpgradeConfiguration',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGatewayAutoUpgradeConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGatewayAutoUpgradeConfigurationRequest $request
     *
     * @return SetGatewayAutoUpgradeConfigurationResponse
     */
    public function setGatewayAutoUpgradeConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGatewayAutoUpgradeConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param SetGatewayDNSRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SetGatewayDNSResponse
     */
    public function setGatewayDNSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dnsServer)) {
            $query['DnsServer'] = $request->dnsServer;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGatewayDNS',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGatewayDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGatewayDNSRequest $request
     *
     * @return SetGatewayDNSResponse
     */
    public function setGatewayDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGatewayDNSWithOptions($request, $runtime);
    }

    /**
     * @param SetGatewayLDAPInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetGatewayLDAPInfoResponse
     */
    public function setGatewayLDAPInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseDN)) {
            $query['BaseDN'] = $request->baseDN;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->isEnabled)) {
            $query['IsEnabled'] = $request->isEnabled;
        }
        if (!Utils::isUnset($request->isTls)) {
            $query['IsTls'] = $request->isTls;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->rootDN)) {
            $query['RootDN'] = $request->rootDN;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverIp)) {
            $query['ServerIp'] = $request->serverIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGatewayLDAPInfo',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGatewayLDAPInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGatewayLDAPInfoRequest $request
     *
     * @return SetGatewayLDAPInfoResponse
     */
    public function setGatewayLDAPInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGatewayLDAPInfoWithOptions($request, $runtime);
    }

    /**
     * @param SwitchCSGClientsReverseSyncConfigurationRequest $tmpReq
     * @param RuntimeOptions                                  $runtime
     *
     * @return SwitchCSGClientsReverseSyncConfigurationResponse
     */
    public function switchCSGClientsReverseSyncConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SwitchCSGClientsReverseSyncConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clientIds)) {
            $request->clientIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clientIds, 'ClientIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->clientIdsShrink)) {
            $query['ClientIds'] = $request->clientIdsShrink;
        }
        if (!Utils::isUnset($request->clientRegionId)) {
            $query['ClientRegionId'] = $request->clientRegionId;
        }
        if (!Utils::isUnset($request->isReverseSync)) {
            $query['IsReverseSync'] = $request->isReverseSync;
        }
        if (!Utils::isUnset($request->reverseSyncInternalSecond)) {
            $query['ReverseSyncInternalSecond'] = $request->reverseSyncInternalSecond;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchCSGClientsReverseSyncConfiguration',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchCSGClientsReverseSyncConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchCSGClientsReverseSyncConfigurationRequest $request
     *
     * @return SwitchCSGClientsReverseSyncConfigurationResponse
     */
    public function switchCSGClientsReverseSyncConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchCSGClientsReverseSyncConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param SwitchGatewayExpirationPolicyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SwitchGatewayExpirationPolicyResponse
     */
    public function switchGatewayExpirationPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchGatewayExpirationPolicy',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchGatewayExpirationPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchGatewayExpirationPolicyRequest $request
     *
     * @return SwitchGatewayExpirationPolicyResponse
     */
    public function switchGatewayExpirationPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchGatewayExpirationPolicyWithOptions($request, $runtime);
    }

    /**
     * @param SwitchToSubscriptionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SwitchToSubscriptionResponse
     */
    public function switchToSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchToSubscription',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchToSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchToSubscriptionRequest $request
     *
     * @return SwitchToSubscriptionResponse
     */
    public function switchToSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchToSubscriptionWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
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
            'version'     => '2018-05-11',
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
     * @param TriggerGatewayRemoteSyncRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TriggerGatewayRemoteSyncResponse
     */
    public function triggerGatewayRemoteSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
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
            'action'      => 'TriggerGatewayRemoteSync',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerGatewayRemoteSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TriggerGatewayRemoteSyncRequest $request
     *
     * @return TriggerGatewayRemoteSyncResponse
     */
    public function triggerGatewayRemoteSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerGatewayRemoteSyncWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
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
            'version'     => '2018-05-11',
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
     * @param UpdateGatewayBlockVolumeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateGatewayBlockVolumeResponse
     */
    public function updateGatewayBlockVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chapEnabled)) {
            $query['ChapEnabled'] = $request->chapEnabled;
        }
        if (!Utils::isUnset($request->chapInPassword)) {
            $query['ChapInPassword'] = $request->chapInPassword;
        }
        if (!Utils::isUnset($request->chapInUser)) {
            $query['ChapInUser'] = $request->chapInUser;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayBlockVolume',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayBlockVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayBlockVolumeRequest $request
     *
     * @return UpdateGatewayBlockVolumeResponse
     */
    public function updateGatewayBlockVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayBlockVolumeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayFileShareRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGatewayFileShareResponse
     */
    public function updateGatewayFileShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessBasedEnumeration)) {
            $query['AccessBasedEnumeration'] = $request->accessBasedEnumeration;
        }
        if (!Utils::isUnset($request->backendLimit)) {
            $query['BackendLimit'] = $request->backendLimit;
        }
        if (!Utils::isUnset($request->browsable)) {
            $query['Browsable'] = $request->browsable;
        }
        if (!Utils::isUnset($request->bypassCacheRead)) {
            $query['BypassCacheRead'] = $request->bypassCacheRead;
        }
        if (!Utils::isUnset($request->cacheMode)) {
            $query['CacheMode'] = $request->cacheMode;
        }
        if (!Utils::isUnset($request->clientSideCmk)) {
            $query['ClientSideCmk'] = $request->clientSideCmk;
        }
        if (!Utils::isUnset($request->clientSideEncryption)) {
            $query['ClientSideEncryption'] = $request->clientSideEncryption;
        }
        if (!Utils::isUnset($request->directIO)) {
            $query['DirectIO'] = $request->directIO;
        }
        if (!Utils::isUnset($request->downloadLimit)) {
            $query['DownloadLimit'] = $request->downloadLimit;
        }
        if (!Utils::isUnset($request->fastReclaim)) {
            $query['FastReclaim'] = $request->fastReclaim;
        }
        if (!Utils::isUnset($request->frontendLimit)) {
            $query['FrontendLimit'] = $request->frontendLimit;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->ignoreDelete)) {
            $query['IgnoreDelete'] = $request->ignoreDelete;
        }
        if (!Utils::isUnset($request->inPlace)) {
            $query['InPlace'] = $request->inPlace;
        }
        if (!Utils::isUnset($request->indexId)) {
            $query['IndexId'] = $request->indexId;
        }
        if (!Utils::isUnset($request->kmsRotatePeriod)) {
            $query['KmsRotatePeriod'] = $request->kmsRotatePeriod;
        }
        if (!Utils::isUnset($request->lagPeriod)) {
            $query['LagPeriod'] = $request->lagPeriod;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nfsV4Optimization)) {
            $query['NfsV4Optimization'] = $request->nfsV4Optimization;
        }
        if (!Utils::isUnset($request->pollingInterval)) {
            $query['PollingInterval'] = $request->pollingInterval;
        }
        if (!Utils::isUnset($request->readOnlyClientList)) {
            $query['ReadOnlyClientList'] = $request->readOnlyClientList;
        }
        if (!Utils::isUnset($request->readOnlyUserList)) {
            $query['ReadOnlyUserList'] = $request->readOnlyUserList;
        }
        if (!Utils::isUnset($request->readWriteClientList)) {
            $query['ReadWriteClientList'] = $request->readWriteClientList;
        }
        if (!Utils::isUnset($request->readWriteUserList)) {
            $query['ReadWriteUserList'] = $request->readWriteUserList;
        }
        if (!Utils::isUnset($request->remoteSync)) {
            $query['RemoteSync'] = $request->remoteSync;
        }
        if (!Utils::isUnset($request->remoteSyncDownload)) {
            $query['RemoteSyncDownload'] = $request->remoteSyncDownload;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverSideCmk)) {
            $query['ServerSideCmk'] = $request->serverSideCmk;
        }
        if (!Utils::isUnset($request->serverSideEncryption)) {
            $query['ServerSideEncryption'] = $request->serverSideEncryption;
        }
        if (!Utils::isUnset($request->squash)) {
            $query['Squash'] = $request->squash;
        }
        if (!Utils::isUnset($request->transferAcceleration)) {
            $query['TransferAcceleration'] = $request->transferAcceleration;
        }
        if (!Utils::isUnset($request->windowsAcl)) {
            $query['WindowsAcl'] = $request->windowsAcl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayFileShare',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayFileShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGatewayFileShareRequest $request
     *
     * @return UpdateGatewayFileShareResponse
     */
    public function updateGatewayFileShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayFileShareWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeGatewayRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeGatewayResponse
     */
    public function upgradeGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeGateway',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeGatewayRequest $request
     *
     * @return UpgradeGatewayResponse
     */
    public function upgradeGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeGatewayWithOptions($request, $runtime);
    }

    /**
     * @param UploadCSGClientLogRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UploadCSGClientLogResponse
     */
    public function uploadCSGClientLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientRegionId)) {
            $query['ClientRegionId'] = $request->clientRegionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadCSGClientLog',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadCSGClientLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadCSGClientLogRequest $request
     *
     * @return UploadCSGClientLogResponse
     */
    public function uploadCSGClientLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCSGClientLogWithOptions($request, $runtime);
    }

    /**
     * @param UploadGatewayLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UploadGatewayLogResponse
     */
    public function uploadGatewayLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadGatewayLog',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadGatewayLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadGatewayLogRequest $request
     *
     * @return UploadGatewayLogResponse
     */
    public function uploadGatewayLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadGatewayLogWithOptions($request, $runtime);
    }

    /**
     * @param ValidateExpressSyncConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ValidateExpressSyncConfigResponse
     */
    public function validateExpressSyncConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->bucketPrefix)) {
            $query['BucketPrefix'] = $request->bucketPrefix;
        }
        if (!Utils::isUnset($request->bucketRegion)) {
            $query['BucketRegion'] = $request->bucketRegion;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateExpressSyncConfig',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateExpressSyncConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateExpressSyncConfigRequest $request
     *
     * @return ValidateExpressSyncConfigResponse
     */
    public function validateExpressSyncConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateExpressSyncConfigWithOptions($request, $runtime);
    }

    /**
     * @param ValidateGatewayNameRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ValidateGatewayNameResponse
     */
    public function validateGatewayNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->storageBundleId)) {
            $query['StorageBundleId'] = $request->storageBundleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateGatewayName',
            'version'     => '2018-05-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateGatewayNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateGatewayNameRequest $request
     *
     * @return ValidateGatewayNameResponse
     */
    public function validateGatewayName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateGatewayNameWithOptions($request, $runtime);
    }
}
