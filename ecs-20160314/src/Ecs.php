<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ecs\V20160314\Models\AddMigratableInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\AddMigratableInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\AllocateDedicatedHostsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\AllocateDedicatedHostsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CancelMigrationInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CancelMigrationInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CancelMigrationPlanRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CancelMigrationPlanResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ConfigureSecurityGroupPermissionsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ConfigureSecurityGroupPermissionsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ConfirmReservationDemandRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ConfirmReservationDemandResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateCapacityReservationRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateCapacityReservationResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDedicatedBlockStorageClusterRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDedicatedBlockStorageClusterResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDedicatedHostClusterRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDedicatedHostClusterResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDefaultAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDefaultAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnoseRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnoseResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnosisOperateRecordsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnosisOperateRecordsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnosticReportRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnosticReportResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDisksRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDisksResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateElasticityAssuranceRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateElasticityAssuranceResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateEniQosGroupRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateEniQosGroupResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateFunctionFeedbackRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateFunctionFeedbackResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateImageCacheRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateImageCacheResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateIssueCategoryReportRelationRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateIssueCategoryReportRelationResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateNetworkInsightsPathRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateNetworkInsightsPathResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateReservationDemandRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateReservationDemandResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateStorageSetRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateStorageSetResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateUserQuotaApplicationRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateUserQuotaApplicationResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateVolumesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateVolumesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateWaitingOrderRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateWaitingOrderResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteDedicatedHostClusterRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteDedicatedHostClusterResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteEniQosGroupRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteEniQosGroupResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteImageCacheRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteImageCacheResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteMigratableInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteMigratableInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteNetworkInsightsAnalysisRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteNetworkInsightsAnalysisResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteNetworkInsightsPathRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteNetworkInsightsPathResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteReservationDemandRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteReservationDemandResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteStorageSetRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteStorageSetResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteUserQuotaApplicationRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteUserQuotaApplicationResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteWaitingOrdersRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DeleteWaitingOrdersResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountLimitsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountLimitsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountQuotaAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountQuotaAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAutoProvisioningGroupCapacitiesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAutoProvisioningGroupCapacitiesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeBandwidthPriceRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeBandwidthPriceResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeCapacityReservationsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeCapacityReservationsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeCustomerIssueCategoryRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeCustomerIssueCategoryResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostAutoRenewRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostAutoRenewResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostClustersRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostClustersResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostTypesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostTypesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnoseRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnoseResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosisOperateRecordsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosisOperateRecordsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiskReplicaPairsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiskReplicaPairsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEniQosGroupInfoRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEniQosGroupInfoResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeFunctionFeedbackRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeFunctionFeedbackResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeHavsInstanceTypesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeHavsInstanceTypesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeImageAgreementRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeImageAgreementResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeImageCachesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeImageCachesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeImageFamiliesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeImageFamiliesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceAutoRebootTimeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceAutoRebootTimeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceHealthStatusRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceHealthStatusResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceMaintenanceAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceMaintenanceAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceModificationPriceRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceModificationPriceResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceNeedRebootRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceNeedRebootResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstancePerformanceRestrictHistoryRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstancePerformanceRestrictHistoryResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceTypeResourceRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceTypeResourceResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeKMSKeyAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeKMSKeyAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeKMSKeysRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeKMSKeysResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLinkedKMSKeysRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLinkedKMSKeysResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPlansRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPlansResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPreferencesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPreferencesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsPathsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsPathsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeOrderAutoRebootTimeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeOrderAutoRebootTimeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePrePaidResourceRefundPriceRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePrePaidResourceRefundPriceResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePrivatePoolsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePrivatePoolsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRecommendProductResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandCommittedAmountRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandCommittedAmountResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceAllocationsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceAllocationsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceCategoriesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceCategoriesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstancePriceRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstancePriceResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAggregationsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAggregationsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAllocationRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAllocationResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceFilterAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceFilterAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceRecommendFiltersRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceRecommendFiltersResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceSolutionsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceSolutionsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourcesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourcesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRiUtilizationRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRiUtilizationResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeScenePurchaseRecommendRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeScenePurchaseRecommendResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSceneResourceRecommendRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSceneResourceRecommendResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSpotInstanceAdviceRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSpotInstanceAdviceResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeStorageCapacityUnitAllocationsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeStorageCapacityUnitAllocationsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeStorageCapacityUnitDeductFactorRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeStorageCapacityUnitDeductFactorResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeStorageSetDetailsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeStorageSetDetailsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeStorageSetsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeStorageSetsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVpcAndVSwitchRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVpcAndVSwitchResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVpcsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVpcsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVSwitchesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVSwitchesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeUserAvailableIpServiceProvidersRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeUserAvailableIpServiceProvidersResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeUserQuotaApplicationsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeUserQuotaApplicationsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeVpcHavsInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeWaitingOrdersRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeWaitingOrdersResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\FeedbackDiagnoseRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\FeedbackDiagnoseResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\GetLaunchTemplateDataRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\GetLaunchTemplateDataResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\InnerDescribeNetworkInterfaceInGroupRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\InnerDescribeNetworkInterfaceInGroupResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\JoinEniQosGroupRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\JoinEniQosGroupResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\LeaveEniQosGroupRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\LeaveEniQosGroupResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ListAccountEcsQuotasRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ListAccountEcsQuotasResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ListServiceSettingsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ListServiceSettingsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyCapacityReservationRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyCapacityReservationResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDedicatedHostAutoReleaseTimeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDedicatedHostAutoReleaseTimeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDedicatedHostAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDedicatedHostAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDedicatedHostClusterAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDedicatedHostClusterAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDiagnoseRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDiagnoseResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDiskSpecRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyDiskSpecResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyEniQosGroupRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyEniQosGroupResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyImageAdvancedAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyImageAdvancedAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceAutoRebootTimeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceAutoRebootTimeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceCapacityReservationAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceCapacityReservationAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceDeploymentRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceDeploymentResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceMaintenanceAttributesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyInstanceMaintenanceAttributesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyMigratableInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyMigratableInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyMigrationInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyMigrationInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyMigrationPlanRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyMigrationPlanResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyOrderAutoRebootTimeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyOrderAutoRebootTimeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyPrivatePoolRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyPrivatePoolResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyReservationDemandRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyReservationDemandResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyReservedInstanceAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyReservedInstanceAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyReservedInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyReservedInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyResourceDiagnosisStatusRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyResourceDiagnosisStatusResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyResourceMetaRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyResourceMetaResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyStorageSetAttributeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyStorageSetAttributeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyWaitingOrderRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyWaitingOrderResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\PurchaseReservedInstancesOfferingRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\PurchaseReservedInstancesOfferingResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\PurchaseSavingPlanOfferingRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\PurchaseSavingPlanOfferingResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\PurchaseStorageCapacityUnitRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\PurchaseStorageCapacityUnitResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\QueryEniQosGroupByEniRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\QueryEniQosGroupByEniResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\QueryEniQosGroupByInstanceRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\QueryEniQosGroupByInstanceResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ReAddMigrationTaskInPlanRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ReAddMigrationTaskInPlanResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ReleaseCapacityReservationRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ReleaseCapacityReservationResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ReleaseDedicatedHostRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ReleaseDedicatedHostResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\RenewDedicatedHostsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\RenewDedicatedHostsResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ReviewDiagnosticReportRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ReviewDiagnosticReportResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\RunInstancesRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\RunInstancesResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\SetInstanceAutoReleaseTimeRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\SetInstanceAutoReleaseTimeResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\StartNetworkInsightsAnalysisRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\StartNetworkInsightsAnalysisResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\UnmountPEDiskRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\UnmountPEDiskResponse;
use AlibabaCloud\SDK\Ecs\V20160314\Models\UpdateServiceSettingsRequest;
use AlibabaCloud\SDK\Ecs\V20160314\Models\UpdateServiceSettingsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ecs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-north-2-gov-1'            => 'ecs.aliyuncs.com',
            'ap-northeast-2-pop'          => 'ecs.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ecs.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ecs.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-edge-1'                   => 'ecs.cn-qingdao-nebula.aliyuncs.com',
            'cn-fujian'                   => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ecs.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ecs.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'ecs.cn-qingdao-nebula.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shanghai-inner'           => 'ecs.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ecs.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-wuhan'                    => 'ecs.aliyuncs.com',
            'cn-yushanfang'               => 'ecs.aliyuncs.com',
            'cn-zhangbei'                 => 'ecs.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ecs-cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ecs.cn-zhangjiakou.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ecs.cn-qingdao-nebula.aliyuncs.com',
            'eu-west-1-oxs'               => 'ecs.cn-shenzhen-cloudstone.aliyuncs.com',
            'rus-west-1-pop'              => 'ecs.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddMigratableInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddMigratableInstancesResponse
     */
    public function addMigratableInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessMigrationType)) {
            $query['BusinessMigrationType'] = $request->businessMigrationType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkMigrationType)) {
            $query['NetworkMigrationType'] = $request->networkMigrationType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMigratableInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMigratableInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMigratableInstancesRequest $request
     *
     * @return AddMigratableInstancesResponse
     */
    public function addMigratableInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMigratableInstancesWithOptions($request, $runtime);
    }

    /**
     * @param AllocateDedicatedHostsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AllocateDedicatedHostsResponse
     */
    public function allocateDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionOnMaintenance)) {
            $query['ActionOnMaintenance'] = $request->actionOnMaintenance;
        }
        if (!Utils::isUnset($request->autoPlacement)) {
            $query['AutoPlacement'] = $request->autoPlacement;
        }
        if (!Utils::isUnset($request->autoReleaseTime)) {
            $query['AutoReleaseTime'] = $request->autoReleaseTime;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cpuOverCommitRatio)) {
            $query['CpuOverCommitRatio'] = $request->cpuOverCommitRatio;
        }
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }
        if (!Utils::isUnset($request->dedicatedHostName)) {
            $query['DedicatedHostName'] = $request->dedicatedHostName;
        }
        if (!Utils::isUnset($request->dedicatedHostType)) {
            $query['DedicatedHostType'] = $request->dedicatedHostType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->minQuantity)) {
            $query['MinQuantity'] = $request->minQuantity;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->networkAttributes)) {
            $query['NetworkAttributes'] = $request->networkAttributes;
        }
        if (!Utils::isUnset($request->schedulerOptions)) {
            $query['SchedulerOptions'] = $request->schedulerOptions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateDedicatedHosts',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateDedicatedHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocateDedicatedHostsRequest $request
     *
     * @return AllocateDedicatedHostsResponse
     */
    public function allocateDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param CancelMigrationInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelMigrationInstancesResponse
     */
    public function cancelMigrationInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkMigrationType)) {
            $query['NetworkMigrationType'] = $request->networkMigrationType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelMigrationInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelMigrationInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelMigrationInstancesRequest $request
     *
     * @return CancelMigrationInstancesResponse
     */
    public function cancelMigrationInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelMigrationInstancesWithOptions($request, $runtime);
    }

    /**
     * @param CancelMigrationPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelMigrationPlanResponse
     */
    public function cancelMigrationPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->migrationPlanId)) {
            $query['MigrationPlanId'] = $request->migrationPlanId;
        }
        if (!Utils::isUnset($request->onlyCancelPlan)) {
            $query['OnlyCancelPlan'] = $request->onlyCancelPlan;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelMigrationPlan',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelMigrationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelMigrationPlanRequest $request
     *
     * @return CancelMigrationPlanResponse
     */
    public function cancelMigrationPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelMigrationPlanWithOptions($request, $runtime);
    }

    /**
     * @param ConfigureSecurityGroupPermissionsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ConfigureSecurityGroupPermissionsResponse
     */
    public function configureSecurityGroupPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizePermission)) {
            $query['AuthorizePermission'] = $request->authorizePermission;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->revokePermission)) {
            $query['RevokePermission'] = $request->revokePermission;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSecurityGroupPermissions',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSecurityGroupPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigureSecurityGroupPermissionsRequest $request
     *
     * @return ConfigureSecurityGroupPermissionsResponse
     */
    public function configureSecurityGroupPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSecurityGroupPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmReservationDemandRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ConfirmReservationDemandResponse
     */
    public function confirmReservationDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->demandId)) {
            $query['DemandId'] = $request->demandId;
        }
        if (!Utils::isUnset($request->demandId)) {
            $query['DemandId'] = $request->demandId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmReservationDemand',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmReservationDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmReservationDemandRequest $request
     *
     * @return ConfirmReservationDemandResponse
     */
    public function confirmReservationDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmReservationDemandWithOptions($request, $runtime);
    }

    /**
     * @param CreateCapacityReservationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCapacityReservationResponse
     */
    public function createCapacityReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->capacityReservationName)) {
            $query['CapacityReservationName'] = $request->capacityReservationName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endDateType)) {
            $query['EndDateType'] = $request->endDateType;
        }
        if (!Utils::isUnset($request->instanceCount)) {
            $query['InstanceCount'] = $request->instanceCount;
        }
        if (!Utils::isUnset($request->instanceMatchCriteria)) {
            $query['InstanceMatchCriteria'] = $request->instanceMatchCriteria;
        }
        if (!Utils::isUnset($request->instancePlatform)) {
            $query['InstancePlatform'] = $request->instancePlatform;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->timeSlot)) {
            $query['TimeSlot'] = $request->timeSlot;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCapacityReservation',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCapacityReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCapacityReservationRequest $request
     *
     * @return CreateCapacityReservationResponse
     */
    public function createCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedBlockStorageClusterRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateDedicatedBlockStorageClusterResponse
     */
    public function createDedicatedBlockStorageClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedicatedBlockStorageClusterName)) {
            $query['DedicatedBlockStorageClusterName'] = $request->dedicatedBlockStorageClusterName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedBlockStorageCluster',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedBlockStorageClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedBlockStorageClusterRequest $request
     *
     * @return CreateDedicatedBlockStorageClusterResponse
     */
    public function createDedicatedBlockStorageCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedBlockStorageClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostClusterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDedicatedHostClusterResponse
     */
    public function createDedicatedHostClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostClusterName)) {
            $query['DedicatedHostClusterName'] = $request->dedicatedHostClusterName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->schedulerOptions)) {
            $query['SchedulerOptions'] = $request->schedulerOptions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedHostCluster',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedHostClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostClusterRequest $request
     *
     * @return CreateDedicatedHostClusterResponse
     */
    public function createDedicatedHostCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateDefaultAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateDefaultAutoSnapshotPolicyResponse
     */
    public function createDefaultAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDefaultAutoSnapshotPolicy',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDefaultAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDefaultAutoSnapshotPolicyRequest $request
     *
     * @return CreateDefaultAutoSnapshotPolicyResponse
     */
    public function createDefaultAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefaultAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateDiagnoseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDiagnoseResponse
     */
    public function createDiagnoseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->diagnoseAction)) {
            $query['DiagnoseAction'] = $request->diagnoseAction;
        }
        if (!Utils::isUnset($request->diagnoseErrorCode)) {
            $query['DiagnoseErrorCode'] = $request->diagnoseErrorCode;
        }
        if (!Utils::isUnset($request->diagnoseProduct)) {
            $query['DiagnoseProduct'] = $request->diagnoseProduct;
        }
        if (!Utils::isUnset($request->diagnoseRequestId)) {
            $query['DiagnoseRequestId'] = $request->diagnoseRequestId;
        }
        if (!Utils::isUnset($request->diagnoseRequestParams)) {
            $query['DiagnoseRequestParams'] = $request->diagnoseRequestParams;
        }
        if (!Utils::isUnset($request->diagnoseResponse)) {
            $query['DiagnoseResponse'] = $request->diagnoseResponse;
        }
        if (!Utils::isUnset($request->diskCategory)) {
            $query['DiskCategory'] = $request->diskCategory;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceTypeName)) {
            $query['InstanceTypeName'] = $request->instanceTypeName;
        }
        if (!Utils::isUnset($request->izNo)) {
            $query['IzNo'] = $request->izNo;
        }
        if (!Utils::isUnset($request->mark)) {
            $query['Mark'] = $request->mark;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDiagnose',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDiagnoseRequest $request
     *
     * @return CreateDiagnoseResponse
     */
    public function createDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnoseWithOptions($request, $runtime);
    }

    /**
     * @param CreateDiagnosisOperateRecordsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateDiagnosisOperateRecordsResponse
     */
    public function createDiagnosisOperateRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->errorCode)) {
            $query['ErrorCode'] = $request->errorCode;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->newInstanceType)) {
            $query['NewInstanceType'] = $request->newInstanceType;
        }
        if (!Utils::isUnset($request->newZoneId)) {
            $query['NewZoneId'] = $request->newZoneId;
        }
        if (!Utils::isUnset($request->operateRecordType)) {
            $query['OperateRecordType'] = $request->operateRecordType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDiagnosisOperateRecords',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiagnosisOperateRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDiagnosisOperateRecordsRequest $request
     *
     * @return CreateDiagnosisOperateRecordsResponse
     */
    public function createDiagnosisOperateRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosisOperateRecordsWithOptions($request, $runtime);
    }

    /**
     * @param CreateDiagnosticReportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commandName)) {
            $query['CommandName'] = $request->commandName;
        }
        if (!Utils::isUnset($request->commandType)) {
            $query['CommandType'] = $request->commandType;
        }
        if (!Utils::isUnset($request->diagnosticCategory)) {
            $query['DiagnosticCategory'] = $request->diagnosticCategory;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pluginVersion)) {
            $query['PluginVersion'] = $request->pluginVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sourceSystem)) {
            $query['SourceSystem'] = $request->sourceSystem;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->sourceSystem)) {
            $query['sourceSystem'] = $request->sourceSystem;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDiagnosticReport',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiagnosticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDiagnosticReportRequest $request
     *
     * @return CreateDiagnosticReportResponse
     */
    public function createDiagnosticReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticReportWithOptions($request, $runtime);
    }

    /**
     * @param CreateDisksRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateDisksResponse
     */
    public function createDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->autoSnapshotPolicyId)) {
            $query['AutoSnapshotPolicyId'] = $request->autoSnapshotPolicyId;
        }
        if (!Utils::isUnset($request->burstingEnabled)) {
            $query['BurstingEnabled'] = $request->burstingEnabled;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->diskName)) {
            $query['DiskName'] = $request->diskName;
        }
        if (!Utils::isUnset($request->encryptAlgorithm)) {
            $query['EncryptAlgorithm'] = $request->encryptAlgorithm;
        }
        if (!Utils::isUnset($request->encrypted)) {
            $query['Encrypted'] = $request->encrypted;
        }
        if (!Utils::isUnset($request->KMSKeyId)) {
            $query['KMSKeyId'] = $request->KMSKeyId;
        }
        if (!Utils::isUnset($request->multiAttach)) {
            $query['MultiAttach'] = $request->multiAttach;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->performanceLevel)) {
            $query['PerformanceLevel'] = $request->performanceLevel;
        }
        if (!Utils::isUnset($request->provisionedIops)) {
            $query['ProvisionedIops'] = $request->provisionedIops;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->storageClusterId)) {
            $query['StorageClusterId'] = $request->storageClusterId;
        }
        if (!Utils::isUnset($request->storageSetId)) {
            $query['StorageSetId'] = $request->storageSetId;
        }
        if (!Utils::isUnset($request->storageSetPartitionNumber)) {
            $query['StorageSetPartitionNumber'] = $request->storageSetPartitionNumber;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDisks',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDisksRequest $request
     *
     * @return CreateDisksResponse
     */
    public function createDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDisksWithOptions($request, $runtime);
    }

    /**
     * @param CreateElasticityAssuranceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateElasticityAssuranceResponse
     */
    public function createElasticityAssuranceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assuranceTimes)) {
            $query['AssuranceTimes'] = $request->assuranceTimes;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceAmount)) {
            $query['InstanceAmount'] = $request->instanceAmount;
        }
        if (!Utils::isUnset($request->instanceCpuCoreCount)) {
            $query['InstanceCpuCoreCount'] = $request->instanceCpuCoreCount;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateElasticityAssurance',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateElasticityAssuranceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateElasticityAssuranceRequest $request
     *
     * @return CreateElasticityAssuranceResponse
     */
    public function createElasticityAssurance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticityAssuranceWithOptions($request, $runtime);
    }

    /**
     * @param CreateEniQosGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEniQosGroupResponse
     */
    public function createEniQosGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qosGroupName)) {
            $query['QosGroupName'] = $request->qosGroupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->rx)) {
            $query['Rx'] = $request->rx;
        }
        if (!Utils::isUnset($request->rxPps)) {
            $query['RxPps'] = $request->rxPps;
        }
        if (!Utils::isUnset($request->tx)) {
            $query['Tx'] = $request->tx;
        }
        if (!Utils::isUnset($request->txPps)) {
            $query['TxPps'] = $request->txPps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEniQosGroup',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEniQosGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEniQosGroupRequest $request
     *
     * @return CreateEniQosGroupResponse
     */
    public function createEniQosGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEniQosGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateFunctionFeedbackRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateFunctionFeedbackResponse
     */
    public function createFunctionFeedbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->suggestion)) {
            $query['Suggestion'] = $request->suggestion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFunctionFeedback',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFunctionFeedbackRequest $request
     *
     * @return CreateFunctionFeedbackResponse
     */
    public function createFunctionFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFunctionFeedbackWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageCacheRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImageCache',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateImageCacheRequest $request
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageCacheWithOptions($request, $runtime);
    }

    /**
     * @param CreateIssueCategoryReportRelationRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateIssueCategoryReportRelationResponse
     */
    public function createIssueCategoryReportRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->relationModelList)) {
            $query['RelationModelList'] = $request->relationModelList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIssueCategoryReportRelation',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIssueCategoryReportRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIssueCategoryReportRelationRequest $request
     *
     * @return CreateIssueCategoryReportRelationResponse
     */
    public function createIssueCategoryReportRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIssueCategoryReportRelationWithOptions($request, $runtime);
    }

    /**
     * @param CreateMigrationPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateMigrationPlanResponse
     */
    public function createMigrationPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customMigrationTimes)) {
            $query['CustomMigrationTimes'] = $request->customMigrationTimes;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->enableAutoCreateVSwitch)) {
            $query['EnableAutoCreateVSwitch'] = $request->enableAutoCreateVSwitch;
        }
        if (!Utils::isUnset($request->ensureNetworkConnectivity)) {
            $query['EnsureNetworkConnectivity'] = $request->ensureNetworkConnectivity;
        }
        if (!Utils::isUnset($request->globalMigrationTime)) {
            $query['GlobalMigrationTime'] = $request->globalMigrationTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remainPrivateIp)) {
            $query['RemainPrivateIp'] = $request->remainPrivateIp;
        }
        if (!Utils::isUnset($request->remainPublicMacAsPriority)) {
            $query['RemainPublicMacAsPriority'] = $request->remainPublicMacAsPriority;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->targetSecurityGroupIds)) {
            $query['TargetSecurityGroupIds'] = $request->targetSecurityGroupIds;
        }
        if (!Utils::isUnset($request->targetVSwitchId)) {
            $query['TargetVSwitchId'] = $request->targetVSwitchId;
        }
        if (!Utils::isUnset($request->targetVpcId)) {
            $query['TargetVpcId'] = $request->targetVpcId;
        }
        if (!Utils::isUnset($request->targetZoneId)) {
            $query['TargetZoneId'] = $request->targetZoneId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMigrationPlan',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMigrationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMigrationPlanRequest $request
     *
     * @return CreateMigrationPlanResponse
     */
    public function createMigrationPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMigrationPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateNetworkInsightsPathRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateNetworkInsightsPathResponse
     */
    public function createNetworkInsightsPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationPort)) {
            $query['DestinationPort'] = $request->destinationPort;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->needDiagnoseGuest)) {
            $query['NeedDiagnoseGuest'] = $request->needDiagnoseGuest;
        }
        if (!Utils::isUnset($request->networkInsightsPathName)) {
            $query['NetworkInsightsPathName'] = $request->networkInsightsPathName;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkInsightsPath',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkInsightsPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNetworkInsightsPathRequest $request
     *
     * @return CreateNetworkInsightsPathResponse
     */
    public function createNetworkInsightsPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkInsightsPathWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->affinity)) {
            $query['Affinity'] = $request->affinity;
        }
        if (!Utils::isUnset($request->asyncPattern)) {
            $query['AsyncPattern'] = $request->asyncPattern;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodity)) {
            $query['Commodity'] = $request->commodity;
        }
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tenancy)) {
            $query['Tenancy'] = $request->tenancy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrder',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateReservationDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateReservationDemandResponse
     */
    public function createReservationDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->confirmType)) {
            $query['ConfirmType'] = $request->confirmType;
        }
        if (!Utils::isUnset($request->couponAuto)) {
            $query['CouponAuto'] = $request->couponAuto;
        }
        if (!Utils::isUnset($request->couponType)) {
            $query['CouponType'] = $request->couponType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceAmount)) {
            $query['InstanceAmount'] = $request->instanceAmount;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceCpuCoreCount)) {
            $query['InstanceCpuCoreCount'] = $request->instanceCpuCoreCount;
        }
        if (!Utils::isUnset($request->instanceTypeFamily)) {
            $query['InstanceTypeFamily'] = $request->instanceTypeFamily;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->matchCriteria)) {
            $query['MatchCriteria'] = $request->matchCriteria;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedInstanceDescription)) {
            $query['ReservedInstanceDescription'] = $request->reservedInstanceDescription;
        }
        if (!Utils::isUnset($request->reservedInstanceName)) {
            $query['ReservedInstanceName'] = $request->reservedInstanceName;
        }
        if (!Utils::isUnset($request->reservedInstanceOfferingType)) {
            $query['ReservedInstanceOfferingType'] = $request->reservedInstanceOfferingType;
        }
        if (!Utils::isUnset($request->reservedInstanceScope)) {
            $query['ReservedInstanceScope'] = $request->reservedInstanceScope;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceSupplyType)) {
            $query['ResourceSupplyType'] = $request->resourceSupplyType;
        }
        if (!Utils::isUnset($request->savingPlanDescription)) {
            $query['SavingPlanDescription'] = $request->savingPlanDescription;
        }
        if (!Utils::isUnset($request->savingPlanHourFee)) {
            $query['SavingPlanHourFee'] = $request->savingPlanHourFee;
        }
        if (!Utils::isUnset($request->savingPlanId)) {
            $query['SavingPlanId'] = $request->savingPlanId;
        }
        if (!Utils::isUnset($request->savingPlanInstanceTypeFamilyGroup)) {
            $query['SavingPlanInstanceTypeFamilyGroup'] = $request->savingPlanInstanceTypeFamilyGroup;
        }
        if (!Utils::isUnset($request->savingPlanName)) {
            $query['SavingPlanName'] = $request->savingPlanName;
        }
        if (!Utils::isUnset($request->savingPlanPayMode)) {
            $query['SavingPlanPayMode'] = $request->savingPlanPayMode;
        }
        if (!Utils::isUnset($request->savingPlanSavingType)) {
            $query['SavingPlanSavingType'] = $request->savingPlanSavingType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneIds)) {
            $query['ZoneIds'] = $request->zoneIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateReservationDemand',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateReservationDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateReservationDemandRequest $request
     *
     * @return CreateReservationDemandResponse
     */
    public function createReservationDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReservationDemandWithOptions($request, $runtime);
    }

    /**
     * @param CreateStorageSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateStorageSetResponse
     */
    public function createStorageSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->maxPartitionNumber)) {
            $query['MaxPartitionNumber'] = $request->maxPartitionNumber;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageSetName)) {
            $query['StorageSetName'] = $request->storageSetName;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStorageSet',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStorageSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStorageSetRequest $request
     *
     * @return CreateStorageSetResponse
     */
    public function createStorageSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStorageSetWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserQuotaApplicationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateUserQuotaApplicationResponse
     */
    public function createUserQuotaApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->quotaType)) {
            $query['QuotaType'] = $request->quotaType;
        }
        if (!Utils::isUnset($request->quotaValue)) {
            $query['QuotaValue'] = $request->quotaValue;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserQuotaApplication',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserQuotaApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUserQuotaApplicationRequest $request
     *
     * @return CreateUserQuotaApplicationResponse
     */
    public function createUserQuotaApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserQuotaApplicationWithOptions($request, $runtime);
    }

    /**
     * @param CreateVolumesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateVolumesResponse
     */
    public function createVolumesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->KMSKeyId)) {
            $query['KMSKeyId'] = $request->KMSKeyId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->storageSetId)) {
            $query['StorageSetId'] = $request->storageSetId;
        }
        if (!Utils::isUnset($request->storageSetPartitionNumber)) {
            $query['StorageSetPartitionNumber'] = $request->storageSetPartitionNumber;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->volumeCategory)) {
            $query['VolumeCategory'] = $request->volumeCategory;
        }
        if (!Utils::isUnset($request->volumeEncrypted)) {
            $query['VolumeEncrypted'] = $request->volumeEncrypted;
        }
        if (!Utils::isUnset($request->volumeName)) {
            $query['VolumeName'] = $request->volumeName;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVolumes',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVolumesRequest $request
     *
     * @return CreateVolumesResponse
     */
    public function createVolumes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVolumesWithOptions($request, $runtime);
    }

    /**
     * @param CreateWaitingOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateWaitingOrderResponse
     */
    public function createWaitingOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->affinity)) {
            $query['Affinity'] = $request->affinity;
        }
        if (!Utils::isUnset($request->arn)) {
            $query['Arn'] = $request->arn;
        }
        if (!Utils::isUnset($request->autoReleaseTime)) {
            $query['AutoReleaseTime'] = $request->autoReleaseTime;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->creditSpecification)) {
            $query['CreditSpecification'] = $request->creditSpecification;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->deploymentSetGroupNo)) {
            $query['DeploymentSetGroupNo'] = $request->deploymentSetGroupNo;
        }
        if (!Utils::isUnset($request->deploymentSetId)) {
            $query['DeploymentSetId'] = $request->deploymentSetId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->hostNames)) {
            $query['HostNames'] = $request->hostNames;
        }
        if (!Utils::isUnset($request->hpcClusterId)) {
            $query['HpcClusterId'] = $request->hpcClusterId;
        }
        if (!Utils::isUnset($request->httpEndpoint)) {
            $query['HttpEndpoint'] = $request->httpEndpoint;
        }
        if (!Utils::isUnset($request->httpPutResponseHopLimit)) {
            $query['HttpPutResponseHopLimit'] = $request->httpPutResponseHopLimit;
        }
        if (!Utils::isUnset($request->httpTokens)) {
            $query['HttpTokens'] = $request->httpTokens;
        }
        if (!Utils::isUnset($request->imageFamily)) {
            $query['ImageFamily'] = $request->imageFamily;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthIn)) {
            $query['InternetMaxBandwidthIn'] = $request->internetMaxBandwidthIn;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->ipv6Address)) {
            $query['Ipv6Address'] = $request->ipv6Address;
        }
        if (!Utils::isUnset($request->ipv6AddressCount)) {
            $query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->launchTemplateId)) {
            $query['LaunchTemplateId'] = $request->launchTemplateId;
        }
        if (!Utils::isUnset($request->launchTemplateName)) {
            $query['LaunchTemplateName'] = $request->launchTemplateName;
        }
        if (!Utils::isUnset($request->launchTemplateVersion)) {
            $query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }
        if (!Utils::isUnset($request->maxAmount)) {
            $query['MaxAmount'] = $request->maxAmount;
        }
        if (!Utils::isUnset($request->minAmount)) {
            $query['MinAmount'] = $request->minAmount;
        }
        if (!Utils::isUnset($request->networkInterface)) {
            $query['NetworkInterface'] = $request->networkInterface;
        }
        if (!Utils::isUnset($request->networkInterfaceQueueNumber)) {
            $query['NetworkInterfaceQueueNumber'] = $request->networkInterfaceQueueNumber;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordInherit)) {
            $query['PasswordInherit'] = $request->passwordInherit;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityEnhancementStrategy)) {
            $query['SecurityEnhancementStrategy'] = $request->securityEnhancementStrategy;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $query['SecurityGroupIds'] = $request->securityGroupIds;
        }
        if (!Utils::isUnset($request->spotDuration)) {
            $query['SpotDuration'] = $request->spotDuration;
        }
        if (!Utils::isUnset($request->spotInterruptionBehavior)) {
            $query['SpotInterruptionBehavior'] = $request->spotInterruptionBehavior;
        }
        if (!Utils::isUnset($request->spotPriceLimit)) {
            $query['SpotPriceLimit'] = $request->spotPriceLimit;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->storageSetId)) {
            $query['StorageSetId'] = $request->storageSetId;
        }
        if (!Utils::isUnset($request->storageSetPartitionNumber)) {
            $query['StorageSetPartitionNumber'] = $request->storageSetPartitionNumber;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tenancy)) {
            $query['Tenancy'] = $request->tenancy;
        }
        if (!Utils::isUnset($request->uniqueSuffix)) {
            $query['UniqueSuffix'] = $request->uniqueSuffix;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->cpuOptions)) {
            $query['CpuOptions'] = $request->cpuOptions;
        }
        if (!Utils::isUnset($request->hibernationOptions)) {
            $query['HibernationOptions'] = $request->hibernationOptions;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        if (!Utils::isUnset($request->schedulerOptions)) {
            $query['SchedulerOptions'] = $request->schedulerOptions;
        }
        if (!Utils::isUnset($request->securityOptions)) {
            $query['SecurityOptions'] = $request->securityOptions;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWaitingOrder',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWaitingOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWaitingOrderRequest $request
     *
     * @return CreateWaitingOrderResponse
     */
    public function createWaitingOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWaitingOrderWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDedicatedHostClusterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDedicatedHostClusterResponse
     */
    public function deleteDedicatedHostClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDedicatedHostCluster',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDedicatedHostClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDedicatedHostClusterRequest $request
     *
     * @return DeleteDedicatedHostClusterResponse
     */
    public function deleteDedicatedHostCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEniQosGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEniQosGroupResponse
     */
    public function deleteEniQosGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qosGroupName)) {
            $query['QosGroupName'] = $request->qosGroupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEniQosGroup',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEniQosGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEniQosGroupRequest $request
     *
     * @return DeleteEniQosGroupResponse
     */
    public function deleteEniQosGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEniQosGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageCacheRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImageCache',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImageCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteImageCacheRequest $request
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageCacheWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMigratableInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMigratableInstancesResponse
     */
    public function deleteMigratableInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMigratableInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMigratableInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMigratableInstancesRequest $request
     *
     * @return DeleteMigratableInstancesResponse
     */
    public function deleteMigratableInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMigratableInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNetworkInsightsAnalysisRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteNetworkInsightsAnalysisResponse
     */
    public function deleteNetworkInsightsAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->networkInsightsAnalysisId)) {
            $query['NetworkInsightsAnalysisId'] = $request->networkInsightsAnalysisId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkInsightsAnalysis',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkInsightsAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNetworkInsightsAnalysisRequest $request
     *
     * @return DeleteNetworkInsightsAnalysisResponse
     */
    public function deleteNetworkInsightsAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkInsightsAnalysisWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNetworkInsightsPathRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteNetworkInsightsPathResponse
     */
    public function deleteNetworkInsightsPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->networkInsightsPathId)) {
            $query['NetworkInsightsPathId'] = $request->networkInsightsPathId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkInsightsPath',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkInsightsPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNetworkInsightsPathRequest $request
     *
     * @return DeleteNetworkInsightsPathResponse
     */
    public function deleteNetworkInsightsPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkInsightsPathWithOptions($request, $runtime);
    }

    /**
     * @param DeleteReservationDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteReservationDemandResponse
     */
    public function deleteReservationDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->demandId)) {
            $query['DemandId'] = $request->demandId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteReservationDemand',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteReservationDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteReservationDemandRequest $request
     *
     * @return DeleteReservationDemandResponse
     */
    public function deleteReservationDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReservationDemandWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStorageSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteStorageSetResponse
     */
    public function deleteStorageSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageSetId)) {
            $query['StorageSetId'] = $request->storageSetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStorageSet',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStorageSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteStorageSetRequest $request
     *
     * @return DeleteStorageSetResponse
     */
    public function deleteStorageSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStorageSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserQuotaApplicationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteUserQuotaApplicationResponse
     */
    public function deleteUserQuotaApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserQuotaApplication',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserQuotaApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserQuotaApplicationRequest $request
     *
     * @return DeleteUserQuotaApplicationResponse
     */
    public function deleteUserQuotaApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserQuotaApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWaitingOrdersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteWaitingOrdersResponse
     */
    public function deleteWaitingOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->waitingOrderId)) {
            $query['WaitingOrderId'] = $request->waitingOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWaitingOrders',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWaitingOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWaitingOrdersRequest $request
     *
     * @return DeleteWaitingOrdersResponse
     */
    public function deleteWaitingOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaitingOrdersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountAttributesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAccountAttributesResponse
     */
    public function describeAccountAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attributeName)) {
            $query['AttributeName'] = $request->attributeName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountAttributes',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccountAttributesRequest $request
     *
     * @return DescribeAccountAttributesResponse
     */
    public function describeAccountAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountLimitsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAccountLimitsResponse
     */
    public function describeAccountLimitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountLimits',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountLimitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccountLimitsRequest $request
     *
     * @return DescribeAccountLimitsResponse
     */
    public function describeAccountLimits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountLimitsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountQuotaAttributesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeAccountQuotaAttributesResponse
     */
    public function describeAccountQuotaAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountQuotaAttributes',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountQuotaAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccountQuotaAttributesRequest $request
     *
     * @return DescribeAccountQuotaAttributesResponse
     */
    public function describeAccountQuotaAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountQuotaAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoProvisioningGroupCapacitiesRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeAutoProvisioningGroupCapacitiesResponse
     */
    public function describeAutoProvisioningGroupCapacitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoProvisioningGroupId)) {
            $query['AutoProvisioningGroupId'] = $request->autoProvisioningGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoProvisioningGroupCapacities',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoProvisioningGroupCapacitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAutoProvisioningGroupCapacitiesRequest $request
     *
     * @return DescribeAutoProvisioningGroupCapacitiesResponse
     */
    public function describeAutoProvisioningGroupCapacities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoProvisioningGroupCapacitiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandwidthPriceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBandwidthPriceResponse
     */
    public function describeBandwidthPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priceUnit)) {
            $query['PriceUnit'] = $request->priceUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBandwidthPrice',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBandwidthPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBandwidthPriceRequest $request
     *
     * @return DescribeBandwidthPriceResponse
     */
    public function describeBandwidthPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwidthPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCapacityReservationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCapacityReservationsResponse
     */
    public function describeCapacityReservationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->capacityReservationIds)) {
            $query['CapacityReservationIds'] = $request->capacityReservationIds;
        }
        if (!Utils::isUnset($request->capacityReservationName)) {
            $query['CapacityReservationName'] = $request->capacityReservationName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCapacityReservations',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCapacityReservationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCapacityReservationsRequest $request
     *
     * @return DescribeCapacityReservationsResponse
     */
    public function describeCapacityReservations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapacityReservationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomerIssueCategoryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCustomerIssueCategoryResponse
     */
    public function describeCustomerIssueCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->layer)) {
            $query['Layer'] = $request->layer;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomerIssueCategory',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomerIssueCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomerIssueCategoryRequest $request
     *
     * @return DescribeCustomerIssueCategoryResponse
     */
    public function describeCustomerIssueCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomerIssueCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostAutoRenewRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDedicatedHostAutoRenewResponse
     */
    public function describeDedicatedHostAutoRenewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedHostAutoRenew',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostAutoRenewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostAutoRenewRequest $request
     *
     * @return DescribeDedicatedHostAutoRenewResponse
     */
    public function describeDedicatedHostAutoRenew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostAutoRenewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostClustersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDedicatedHostClustersResponse
     */
    public function describeDedicatedHostClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostClusterIds)) {
            $query['DedicatedHostClusterIds'] = $request->dedicatedHostClusterIds;
        }
        if (!Utils::isUnset($request->dedicatedHostClusterName)) {
            $query['DedicatedHostClusterName'] = $request->dedicatedHostClusterName;
        }
        if (!Utils::isUnset($request->lockReason)) {
            $query['LockReason'] = $request->lockReason;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->schedulerOptions)) {
            $query['SchedulerOptions'] = $request->schedulerOptions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedHostClusters',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostClustersRequest $request
     *
     * @return DescribeDedicatedHostClustersResponse
     */
    public function describeDedicatedHostClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostTypesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDedicatedHostTypesResponse
     */
    public function describeDedicatedHostTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostType)) {
            $query['DedicatedHostType'] = $request->dedicatedHostType;
        }
        if (!Utils::isUnset($request->generation)) {
            $query['Generation'] = $request->generation;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->supportInstanceTypeFamily)) {
            $query['SupportInstanceTypeFamily'] = $request->supportInstanceTypeFamily;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedHostTypes',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostTypesRequest $request
     *
     * @return DescribeDedicatedHostTypesResponse
     */
    public function describeDedicatedHostTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }
        if (!Utils::isUnset($request->dedicatedHostIds)) {
            $query['DedicatedHostIds'] = $request->dedicatedHostIds;
        }
        if (!Utils::isUnset($request->dedicatedHostName)) {
            $query['DedicatedHostName'] = $request->dedicatedHostName;
        }
        if (!Utils::isUnset($request->dedicatedHostType)) {
            $query['DedicatedHostType'] = $request->dedicatedHostType;
        }
        if (!Utils::isUnset($request->lockReason)) {
            $query['LockReason'] = $request->lockReason;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->schedulerOptions)) {
            $query['SchedulerOptions'] = $request->schedulerOptions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedHosts',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiagnoseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDiagnoseResponse
     */
    public function describeDiagnoseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diagnoseAction)) {
            $query['DiagnoseAction'] = $request->diagnoseAction;
        }
        if (!Utils::isUnset($request->diagnoseId)) {
            $query['DiagnoseId'] = $request->diagnoseId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnose',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDiagnoseRequest $request
     *
     * @return DescribeDiagnoseResponse
     */
    public function describeDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnoseWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiagnosisOperateRecordsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDiagnosisOperateRecordsResponse
     */
    public function describeDiagnosisOperateRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->errorCode)) {
            $query['ErrorCode'] = $request->errorCode;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->operateRecordType)) {
            $query['OperateRecordType'] = $request->operateRecordType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosisOperateRecords',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosisOperateRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDiagnosisOperateRecordsRequest $request
     *
     * @return DescribeDiagnosisOperateRecordsResponse
     */
    public function describeDiagnosisOperateRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosisOperateRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiagnosticReportsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDiagnosticReportsResponse
     */
    public function describeDiagnosticReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->sourceSystem)) {
            $query['SourceSystem'] = $request->sourceSystem;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnosticReports',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosticReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDiagnosticReportsRequest $request
     *
     * @return DescribeDiagnosticReportsResponse
     */
    public function describeDiagnosticReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticReportsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiskReplicaPairsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiskReplicaPairsResponse
     */
    public function describeDiskReplicaPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskReplicaPairs',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiskReplicaPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDiskReplicaPairsRequest $request
     *
     * @return DescribeDiskReplicaPairsResponse
     */
    public function describeDiskReplicaPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskReplicaPairsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEcsScenarioFacadeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEcsScenarioFacadeResponse
     */
    public function describeEcsScenarioFacadeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->extMap)) {
            $query['ExtMap'] = $request->extMap;
        }
        if (!Utils::isUnset($request->extParam)) {
            $query['ExtParam'] = $request->extParam;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scenarioList)) {
            $query['ScenarioList'] = $request->scenarioList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEcsScenarioFacade',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEcsScenarioFacadeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEcsScenarioFacadeRequest $request
     *
     * @return DescribeEcsScenarioFacadeResponse
     */
    public function describeEcsScenarioFacade($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEcsScenarioFacadeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEniQosGroupInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEniQosGroupInfoResponse
     */
    public function describeEniQosGroupInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qosGroupName)) {
            $query['QosGroupName'] = $request->qosGroupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEniQosGroupInfo',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEniQosGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEniQosGroupInfoRequest $request
     *
     * @return DescribeEniQosGroupInfoResponse
     */
    public function describeEniQosGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEniQosGroupInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFunctionFeedbackRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFunctionFeedbackResponse
     */
    public function describeFunctionFeedbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFunctionFeedback',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFunctionFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFunctionFeedbackRequest $request
     *
     * @return DescribeFunctionFeedbackResponse
     */
    public function describeFunctionFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFunctionFeedbackWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHavsInstanceTypesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHavsInstanceTypesResponse
     */
    public function describeHavsInstanceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHavsInstanceTypes',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHavsInstanceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHavsInstanceTypesRequest $request
     *
     * @return DescribeHavsInstanceTypesResponse
     */
    public function describeHavsInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHavsInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageAgreementRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeImageAgreementResponse
     */
    public function describeImageAgreementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agreementType)) {
            $query['AgreementType'] = $request->agreementType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageAgreement',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageAgreementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageAgreementRequest $request
     *
     * @return DescribeImageAgreementResponse
     */
    public function describeImageAgreement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageAgreementWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageCachesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeImageCachesResponse
     */
    public function describeImageCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageCaches',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageCachesRequest $request
     *
     * @return DescribeImageCachesResponse
     */
    public function describeImageCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageCachesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageFamiliesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeImageFamiliesResponse
     */
    public function describeImageFamiliesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageFamilies',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageFamiliesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageFamiliesRequest $request
     *
     * @return DescribeImageFamiliesResponse
     */
    public function describeImageFamilies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageFamiliesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAutoRebootTimeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeInstanceAutoRebootTimeResponse
     */
    public function describeInstanceAutoRebootTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRebootTimeFrom)) {
            $query['AutoRebootTimeFrom'] = $request->autoRebootTimeFrom;
        }
        if (!Utils::isUnset($request->autoRebootTimeTo)) {
            $query['AutoRebootTimeTo'] = $request->autoRebootTimeTo;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAutoRebootTime',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAutoRebootTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceAutoRebootTimeRequest $request
     *
     * @return DescribeInstanceAutoRebootTimeResponse
     */
    public function describeInstanceAutoRebootTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRebootTimeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceHealthStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeInstanceHealthStatusResponse
     */
    public function describeInstanceHealthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceHealthStatus',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceHealthStatusRequest $request
     *
     * @return DescribeInstanceHealthStatusResponse
     */
    public function describeInstanceHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceHealthStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceMaintenanceAttributesRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeInstanceMaintenanceAttributesResponse
     */
    public function describeInstanceMaintenanceAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceMaintenanceAttributes',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceMaintenanceAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceMaintenanceAttributesRequest $request
     *
     * @return DescribeInstanceMaintenanceAttributesResponse
     */
    public function describeInstanceMaintenanceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMaintenanceAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceModificationPriceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeInstanceModificationPriceResponse
     */
    public function describeInstanceModificationPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceModificationPrice',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceModificationPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceModificationPriceRequest $request
     *
     * @return DescribeInstanceModificationPriceResponse
     */
    public function describeInstanceModificationPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceModificationPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceNeedRebootRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceNeedRebootResponse
     */
    public function describeInstanceNeedRebootWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceNeedReboot',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceNeedRebootResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceNeedRebootRequest $request
     *
     * @return DescribeInstanceNeedRebootResponse
     */
    public function describeInstanceNeedReboot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceNeedRebootWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancePerformanceRestrictHistoryRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeInstancePerformanceRestrictHistoryResponse
     */
    public function describeInstancePerformanceRestrictHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstancePerformanceRestrictHistory',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancePerformanceRestrictHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancePerformanceRestrictHistoryRequest $request
     *
     * @return DescribeInstancePerformanceRestrictHistoryResponse
     */
    public function describeInstancePerformanceRestrictHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancePerformanceRestrictHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTypeResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeInstanceTypeResourceResponse
     */
    public function describeInstanceTypeResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cores)) {
            $query['Cores'] = $request->cores;
        }
        if (!Utils::isUnset($request->instanceTypeFamilies)) {
            $query['InstanceTypeFamilies'] = $request->instanceTypeFamilies;
        }
        if (!Utils::isUnset($request->instanceTypeMatchMode)) {
            $query['InstanceTypeMatchMode'] = $request->instanceTypeMatchMode;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->memories)) {
            $query['Memories'] = $request->memories;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->searchTypes)) {
            $query['SearchTypes'] = $request->searchTypes;
        }
        if (!Utils::isUnset($request->zoneIds)) {
            $query['ZoneIds'] = $request->zoneIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceTypeResource',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTypeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceTypeResourceRequest $request
     *
     * @return DescribeInstanceTypeResourceResponse
     */
    public function describeInstanceTypeResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypeResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKMSKeyAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeKMSKeyAttributeResponse
     */
    public function describeKMSKeyAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->KMSKeyId)) {
            $query['KMSKeyId'] = $request->KMSKeyId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['appKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKMSKeyAttribute',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKMSKeyAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeKMSKeyAttributeRequest $request
     *
     * @return DescribeKMSKeyAttributeResponse
     */
    public function describeKMSKeyAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKMSKeyAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKMSKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeKMSKeysResponse
     */
    public function describeKMSKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['appKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKMSKeys',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKMSKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeKMSKeysRequest $request
     *
     * @return DescribeKMSKeysResponse
     */
    public function describeKMSKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKMSKeysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLinkedKMSKeysRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLinkedKMSKeysResponse
     */
    public function describeLinkedKMSKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['appKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->proxyId)) {
            $query['proxyId'] = $request->proxyId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLinkedKMSKeys',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLinkedKMSKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLinkedKMSKeysRequest $request
     *
     * @return DescribeLinkedKMSKeysResponse
     */
    public function describeLinkedKMSKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLinkedKMSKeysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLocalDiskRepairActivitiesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLocalDiskRepairActivitiesResponse
     */
    public function describeLocalDiskRepairActivitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->includeHistory)) {
            $query['IncludeHistory'] = $request->includeHistory;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLocalDiskRepairActivities',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLocalDiskRepairActivitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLocalDiskRepairActivitiesRequest $request
     *
     * @return DescribeLocalDiskRepairActivitiesResponse
     */
    public function describeLocalDiskRepairActivities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLocalDiskRepairActivitiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMigrationInstancesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMigrationInstancesResponse
     */
    public function describeMigrationInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessMigrationType)) {
            $query['BusinessMigrationType'] = $request->businessMigrationType;
        }
        if (!Utils::isUnset($request->hostname)) {
            $query['Hostname'] = $request->hostname;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->migrationPlanId)) {
            $query['MigrationPlanId'] = $request->migrationPlanId;
        }
        if (!Utils::isUnset($request->migrationStatus)) {
            $query['MigrationStatus'] = $request->migrationStatus;
        }
        if (!Utils::isUnset($request->networkMigrationType)) {
            $query['NetworkMigrationType'] = $request->networkMigrationType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrationInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrationInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMigrationInstancesRequest $request
     *
     * @return DescribeMigrationInstancesResponse
     */
    public function describeMigrationInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMigrationPlansRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMigrationPlansResponse
     */
    public function describeMigrationPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->migrationPlanId)) {
            $query['MigrationPlanId'] = $request->migrationPlanId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrationPlans',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrationPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMigrationPlansRequest $request
     *
     * @return DescribeMigrationPlansResponse
     */
    public function describeMigrationPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationPlansWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMigrationPreferencesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeMigrationPreferencesResponse
     */
    public function describeMigrationPreferencesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->migrationNetworkType)) {
            $query['MigrationNetworkType'] = $request->migrationNetworkType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrationPreferences',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrationPreferencesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMigrationPreferencesRequest $request
     *
     * @return DescribeMigrationPreferencesResponse
     */
    public function describeMigrationPreferences($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationPreferencesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkInsightsAnalysisResultRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeNetworkInsightsAnalysisResultResponse
     */
    public function describeNetworkInsightsAnalysisResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkInsightsAnalysisResult',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkInsightsAnalysisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNetworkInsightsAnalysisResultRequest $request
     *
     * @return DescribeNetworkInsightsAnalysisResultResponse
     */
    public function describeNetworkInsightsAnalysisResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInsightsAnalysisResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkInsightsAnalysisesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeNetworkInsightsAnalysisesResponse
     */
    public function describeNetworkInsightsAnalysisesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkInsightsAnalysises',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkInsightsAnalysisesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNetworkInsightsAnalysisesRequest $request
     *
     * @return DescribeNetworkInsightsAnalysisesResponse
     */
    public function describeNetworkInsightsAnalysises($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInsightsAnalysisesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkInsightsPathsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeNetworkInsightsPathsResponse
     */
    public function describeNetworkInsightsPathsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->networkInsightsPathId)) {
            $query['NetworkInsightsPathId'] = $request->networkInsightsPathId;
        }
        if (!Utils::isUnset($request->networkPathFound)) {
            $query['NetworkPathFound'] = $request->networkPathFound;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkInsightsPaths',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkInsightsPathsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNetworkInsightsPathsRequest $request
     *
     * @return DescribeNetworkInsightsPathsResponse
     */
    public function describeNetworkInsightsPaths($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInsightsPathsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrderAutoRebootTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeOrderAutoRebootTimeResponse
     */
    public function describeOrderAutoRebootTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOrderAutoRebootTime',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOrderAutoRebootTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOrderAutoRebootTimeRequest $request
     *
     * @return DescribeOrderAutoRebootTimeResponse
     */
    public function describeOrderAutoRebootTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrderAutoRebootTimeWithOptions($request, $runtime);
    }

    /**
     * @param DescribePrePaidResourceRefundPriceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribePrePaidResourceRefundPriceResponse
     */
    public function describePrePaidResourceRefundPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrePaidResourceRefundPrice',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePrePaidResourceRefundPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePrePaidResourceRefundPriceRequest $request
     *
     * @return DescribePrePaidResourceRefundPriceResponse
     */
    public function describePrePaidResourceRefundPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrePaidResourceRefundPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->commodity)) {
            $query['Commodity'] = $request->commodity;
        }
        if (!Utils::isUnset($request->defaultVpc)) {
            $query['DefaultVpc'] = $request->defaultVpc;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->needSpotPrice)) {
            $query['NeedSpotPrice'] = $request->needSpotPrice;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrice',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePriceRequest $request
     *
     * @return DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribePrivatePoolsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePrivatePoolsResponse
     */
    public function describePrivatePoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTimeType)) {
            $query['StartTimeType'] = $request->startTimeType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrivatePools',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePrivatePoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePrivatePoolsRequest $request
     *
     * @return DescribePrivatePoolsResponse
     */
    public function describePrivatePools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrivatePoolsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecommendProductRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecommendProductResponse
     */
    public function describeRecommendProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->cores)) {
            $query['Cores'] = $request->cores;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceFamilyLevel)) {
            $query['InstanceFamilyLevel'] = $request->instanceFamilyLevel;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->instanceTypeFamily)) {
            $query['InstanceTypeFamily'] = $request->instanceTypeFamily;
        }
        if (!Utils::isUnset($request->instanceTypeSupportIPv6)) {
            $query['InstanceTypeSupportIPv6'] = $request->instanceTypeSupportIPv6;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->maxPrice)) {
            $query['MaxPrice'] = $request->maxPrice;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->priorityStrategy)) {
            $query['PriorityStrategy'] = $request->priorityStrategy;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->systemDiskCategory)) {
            $query['SystemDiskCategory'] = $request->systemDiskCategory;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->zoneMatchMode)) {
            $query['ZoneMatchMode'] = $request->zoneMatchMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecommendProduct',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecommendProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecommendProductRequest $request
     *
     * @return DescribeRecommendProductResponse
     */
    public function describeRecommendProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendProductWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReservationDemandCommittedAmountRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeReservationDemandCommittedAmountResponse
     */
    public function describeReservationDemandCommittedAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->demandPlan)) {
            $query['DemandPlan'] = $request->demandPlan;
        }
        if (!Utils::isUnset($request->instanceFamily)) {
            $query['InstanceFamily'] = $request->instanceFamily;
        }
        if (!Utils::isUnset($request->instanceFamilySet)) {
            $query['InstanceFamilySet'] = $request->instanceFamilySet;
        }
        if (!Utils::isUnset($request->offeringType)) {
            $query['OfferingType'] = $request->offeringType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->planType)) {
            $query['PlanType'] = $request->planType;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->purchaseMethod)) {
            $query['PurchaseMethod'] = $request->purchaseMethod;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeReservationDemandCommittedAmount',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReservationDemandCommittedAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReservationDemandCommittedAmountRequest $request
     *
     * @return DescribeReservationDemandCommittedAmountResponse
     */
    public function describeReservationDemandCommittedAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservationDemandCommittedAmountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReservationDemandsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeReservationDemandsResponse
     */
    public function describeReservationDemandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->demandId)) {
            $query['DemandId'] = $request->demandId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeReservationDemands',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReservationDemandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReservationDemandsRequest $request
     *
     * @return DescribeReservationDemandsResponse
     */
    public function describeReservationDemands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservationDemandsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReservedInstanceAllocationsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeReservedInstanceAllocationsResponse
     */
    public function describeReservedInstanceAllocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedInstanceId)) {
            $query['ReservedInstanceId'] = $request->reservedInstanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeReservedInstanceAllocations',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReservedInstanceAllocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReservedInstanceAllocationsRequest $request
     *
     * @return DescribeReservedInstanceAllocationsResponse
     */
    public function describeReservedInstanceAllocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedInstanceAllocationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReservedInstanceCategoriesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeReservedInstanceCategoriesResponse
     */
    public function describeReservedInstanceCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeReservedInstanceCategories',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReservedInstanceCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReservedInstanceCategoriesRequest $request
     *
     * @return DescribeReservedInstanceCategoriesResponse
     */
    public function describeReservedInstanceCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedInstanceCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReservedInstancePriceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeReservedInstancePriceResponse
     */
    public function describeReservedInstancePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedInstanceId)) {
            $query['ReservedInstanceId'] = $request->reservedInstanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeReservedInstancePrice',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReservedInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReservedInstancePriceRequest $request
     *
     * @return DescribeReservedInstancePriceResponse
     */
    public function describeReservedInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReservedInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeReservedInstancesResponse
     */
    public function describeReservedInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationType)) {
            $query['AllocationType'] = $request->allocationType;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->instanceTypeFamily)) {
            $query['InstanceTypeFamily'] = $request->instanceTypeFamily;
        }
        if (!Utils::isUnset($request->lockReason)) {
            $query['LockReason'] = $request->lockReason;
        }
        if (!Utils::isUnset($request->offeringType)) {
            $query['OfferingType'] = $request->offeringType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedInstanceId)) {
            $query['ReservedInstanceId'] = $request->reservedInstanceId;
        }
        if (!Utils::isUnset($request->reservedInstanceName)) {
            $query['ReservedInstanceName'] = $request->reservedInstanceName;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeReservedInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReservedInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReservedInstancesRequest $request
     *
     * @return DescribeReservedInstancesResponse
     */
    public function describeReservedInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceAggregationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeResourceAggregationsResponse
     */
    public function describeResourceAggregationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregators)) {
            $query['Aggregators'] = $request->aggregators;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->global_)) {
            $query['Global'] = $request->global_;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagFilter)) {
            $query['TagFilter'] = $request->tagFilter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceAggregations',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceAggregationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceAggregationsRequest $request
     *
     * @return DescribeResourceAggregationsResponse
     */
    public function describeResourceAggregations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceAggregationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceAllocationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeResourceAllocationResponse
     */
    public function describeResourceAllocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cores)) {
            $query['Cores'] = $request->cores;
        }
        if (!Utils::isUnset($request->dataDiskCategory)) {
            $query['DataDiskCategory'] = $request->dataDiskCategory;
        }
        if (!Utils::isUnset($request->defaultTargetCapacityType)) {
            $query['DefaultTargetCapacityType'] = $request->defaultTargetCapacityType;
        }
        if (!Utils::isUnset($request->instanceFamilyLevel)) {
            $query['InstanceFamilyLevel'] = $request->instanceFamilyLevel;
        }
        if (!Utils::isUnset($request->instanceTypeModel)) {
            $query['InstanceTypeModel'] = $request->instanceTypeModel;
        }
        if (!Utils::isUnset($request->instanceTypeSupportIPv6)) {
            $query['InstanceTypeSupportIPv6'] = $request->instanceTypeSupportIPv6;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->maxPrice)) {
            $query['MaxPrice'] = $request->maxPrice;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->postPaidBaseCapacity)) {
            $query['PostPaidBaseCapacity'] = $request->postPaidBaseCapacity;
        }
        if (!Utils::isUnset($request->priorityStrategy)) {
            $query['PriorityStrategy'] = $request->priorityStrategy;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceAmountType)) {
            $query['ResourceAmountType'] = $request->resourceAmountType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spotBaseCapacity)) {
            $query['SpotBaseCapacity'] = $request->spotBaseCapacity;
        }
        if (!Utils::isUnset($request->spotInstancePools)) {
            $query['SpotInstancePools'] = $request->spotInstancePools;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->strictSatisfiedTargetCapacity)) {
            $query['StrictSatisfiedTargetCapacity'] = $request->strictSatisfiedTargetCapacity;
        }
        if (!Utils::isUnset($request->systemDiskCategory)) {
            $query['SystemDiskCategory'] = $request->systemDiskCategory;
        }
        if (!Utils::isUnset($request->targetCapacity)) {
            $query['TargetCapacity'] = $request->targetCapacity;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceAllocation',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceAllocationRequest $request
     *
     * @return DescribeResourceAllocationResponse
     */
    public function describeResourceAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceAllocationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceDisplayRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeResourceDisplayResponse
     */
    public function describeResourceDisplayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->firstBizLevel)) {
            $query['FirstBizLevel'] = $request->firstBizLevel;
        }
        if (!Utils::isUnset($request->instanceCategoryType)) {
            $query['InstanceCategoryType'] = $request->instanceCategoryType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secondBizLevel)) {
            $query['SecondBizLevel'] = $request->secondBizLevel;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->templateTag)) {
            $query['TemplateTag'] = $request->templateTag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceDisplay',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceDisplayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceDisplayRequest $request
     *
     * @return DescribeResourceDisplayResponse
     */
    public function describeResourceDisplay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceDisplayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceFilterAttributesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeResourceFilterAttributesResponse
     */
    public function describeResourceFilterAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->templateTag)) {
            $query['TemplateTag'] = $request->templateTag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceFilterAttributes',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceFilterAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceFilterAttributesRequest $request
     *
     * @return DescribeResourceFilterAttributesResponse
     */
    public function describeResourceFilterAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceFilterAttributesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceRecommendFiltersRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeResourceRecommendFiltersResponse
     */
    public function describeResourceRecommendFiltersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attributeName)) {
            $query['AttributeName'] = $request->attributeName;
        }
        if (!Utils::isUnset($request->attributeValue)) {
            $query['AttributeValue'] = $request->attributeValue;
        }
        if (!Utils::isUnset($request->global_)) {
            $query['Global'] = $request->global_;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->templateTag)) {
            $query['TemplateTag'] = $request->templateTag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceRecommendFilters',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceRecommendFiltersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceRecommendFiltersRequest $request
     *
     * @return DescribeResourceRecommendFiltersResponse
     */
    public function describeResourceRecommendFilters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceRecommendFiltersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceSolutionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeResourceSolutionsResponse
     */
    public function describeResourceSolutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cores)) {
            $query['Cores'] = $request->cores;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceFamilyLevel)) {
            $query['InstanceFamilyLevel'] = $request->instanceFamilyLevel;
        }
        if (!Utils::isUnset($request->instanceTypeModel)) {
            $query['InstanceTypeModel'] = $request->instanceTypeModel;
        }
        if (!Utils::isUnset($request->instanceTypeSupportIPv6)) {
            $query['InstanceTypeSupportIPv6'] = $request->instanceTypeSupportIPv6;
        }
        if (!Utils::isUnset($request->matchOpenInstances)) {
            $query['MatchOpenInstances'] = $request->matchOpenInstances;
        }
        if (!Utils::isUnset($request->maxPrice)) {
            $query['MaxPrice'] = $request->maxPrice;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceAmountType)) {
            $query['ResourceAmountType'] = $request->resourceAmountType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->systemDiskCategory)) {
            $query['SystemDiskCategory'] = $request->systemDiskCategory;
        }
        if (!Utils::isUnset($request->targetCapacity)) {
            $query['TargetCapacity'] = $request->targetCapacity;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceSolutions',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceSolutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceSolutionsRequest $request
     *
     * @return DescribeResourceSolutionsResponse
     */
    public function describeResourceSolutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceSolutionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeResourcesResponse
     */
    public function describeResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->global_)) {
            $query['Global'] = $request->global_;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxItems)) {
            $query['MaxItems'] = $request->maxItems;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagFilter)) {
            $query['TagFilter'] = $request->tagFilter;
        }
        if (!Utils::isUnset($request->templateTag)) {
            $query['TemplateTag'] = $request->templateTag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResources',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourcesRequest $request
     *
     * @return DescribeResourcesResponse
     */
    public function describeResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiUtilizationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRiUtilizationResponse
     */
    public function describeRiUtilizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedInstanceId)) {
            $query['ReservedInstanceId'] = $request->reservedInstanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiUtilization',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiUtilizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiUtilizationRequest $request
     *
     * @return DescribeRiUtilizationResponse
     */
    public function describeRiUtilization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiUtilizationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScenePurchaseRecommendRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeScenePurchaseRecommendResponse
     */
    public function describeScenePurchaseRecommendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        if (!Utils::isUnset($request->tenancy)) {
            $query['Tenancy'] = $request->tenancy;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        if (!Utils::isUnset($request->schedulerOptions)) {
            $query['SchedulerOptions'] = $request->schedulerOptions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScenePurchaseRecommend',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScenePurchaseRecommendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScenePurchaseRecommendRequest $request
     *
     * @return DescribeScenePurchaseRecommendResponse
     */
    public function describeScenePurchaseRecommend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScenePurchaseRecommendWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSceneResourceRecommendRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSceneResourceRecommendResponse
     */
    public function describeSceneResourceRecommendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSceneResourceRecommend',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSceneResourceRecommendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSceneResourceRecommendRequest $request
     *
     * @return DescribeSceneResourceRecommendResponse
     */
    public function describeSceneResourceRecommend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSceneResourceRecommendWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSpotInstanceAdviceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSpotInstanceAdviceResponse
     */
    public function describeSpotInstanceAdviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cores)) {
            $query['Cores'] = $request->cores;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->minCores)) {
            $query['MinCores'] = $request->minCores;
        }
        if (!Utils::isUnset($request->minMemory)) {
            $query['MinMemory'] = $request->minMemory;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSpotInstanceAdvice',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSpotInstanceAdviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSpotInstanceAdviceRequest $request
     *
     * @return DescribeSpotInstanceAdviceResponse
     */
    public function describeSpotInstanceAdvice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpotInstanceAdviceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStorageCapacityUnitAllocationsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeStorageCapacityUnitAllocationsResponse
     */
    public function describeStorageCapacityUnitAllocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageCapacityUnitId)) {
            $query['StorageCapacityUnitId'] = $request->storageCapacityUnitId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStorageCapacityUnitAllocations',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStorageCapacityUnitAllocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStorageCapacityUnitAllocationsRequest $request
     *
     * @return DescribeStorageCapacityUnitAllocationsResponse
     */
    public function describeStorageCapacityUnitAllocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageCapacityUnitAllocationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStorageCapacityUnitDeductFactorRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeStorageCapacityUnitDeductFactorResponse
     */
    public function describeStorageCapacityUnitDeductFactorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deductField)) {
            $query['DeductField'] = $request->deductField;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->performanceLevel)) {
            $query['PerformanceLevel'] = $request->performanceLevel;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStorageCapacityUnitDeductFactor',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStorageCapacityUnitDeductFactorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStorageCapacityUnitDeductFactorRequest $request
     *
     * @return DescribeStorageCapacityUnitDeductFactorResponse
     */
    public function describeStorageCapacityUnitDeductFactor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageCapacityUnitDeductFactorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStorageSetDetailsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeStorageSetDetailsResponse
     */
    public function describeStorageSetDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->diskIds)) {
            $query['DiskIds'] = $request->diskIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageSetId)) {
            $query['StorageSetId'] = $request->storageSetId;
        }
        if (!Utils::isUnset($request->storageSetPartitionNumber)) {
            $query['StorageSetPartitionNumber'] = $request->storageSetPartitionNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStorageSetDetails',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStorageSetDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStorageSetDetailsRequest $request
     *
     * @return DescribeStorageSetDetailsResponse
     */
    public function describeStorageSetDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageSetDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStorageSetsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeStorageSetsResponse
     */
    public function describeStorageSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageSetIds)) {
            $query['StorageSetIds'] = $request->storageSetIds;
        }
        if (!Utils::isUnset($request->storageSetName)) {
            $query['StorageSetName'] = $request->storageSetName;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStorageSets',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStorageSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStorageSetsRequest $request
     *
     * @return DescribeStorageSetsResponse
     */
    public function describeStorageSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageSetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTransitionVSwitchesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeTransitionVSwitchesResponse
     */
    public function describeTransitionVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransitionVSwitches',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransitionVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTransitionVSwitchesRequest $request
     *
     * @return DescribeTransitionVSwitchesResponse
     */
    public function describeTransitionVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransitionVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTransitionVpcAndVSwitchRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeTransitionVpcAndVSwitchResponse
     */
    public function describeTransitionVpcAndVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransitionVpcAndVSwitch',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransitionVpcAndVSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTransitionVpcAndVSwitchRequest $request
     *
     * @return DescribeTransitionVpcAndVSwitchResponse
     */
    public function describeTransitionVpcAndVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransitionVpcAndVSwitchWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTransitionVpcsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeTransitionVpcsResponse
     */
    public function describeTransitionVpcsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransitionVpcs',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransitionVpcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTransitionVpcsRequest $request
     *
     * @return DescribeTransitionVpcsResponse
     */
    public function describeTransitionVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransitionVpcsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserAvailableIpServiceProvidersRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeUserAvailableIpServiceProvidersResponse
     */
    public function describeUserAvailableIpServiceProvidersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserAvailableIpServiceProviders',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserAvailableIpServiceProvidersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserAvailableIpServiceProvidersRequest $request
     *
     * @return DescribeUserAvailableIpServiceProvidersResponse
     */
    public function describeUserAvailableIpServiceProviders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserAvailableIpServiceProvidersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserQuotaApplicationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserQuotaApplicationsResponse
     */
    public function describeUserQuotaApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->quotaType)) {
            $query['QuotaType'] = $request->quotaType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserQuotaApplications',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserQuotaApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserQuotaApplicationsRequest $request
     *
     * @return DescribeUserQuotaApplicationsResponse
     */
    public function describeUserQuotaApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserQuotaApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcHavsInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVpcHavsInstancesResponse
     */
    public function describeVpcHavsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResultSize)) {
            $query['MaxResultSize'] = $request->maxResultSize;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpcIdList)) {
            $query['VpcIdList'] = $request->vpcIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcHavsInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcHavsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpcHavsInstancesRequest $request
     *
     * @return DescribeVpcHavsInstancesResponse
     */
    public function describeVpcHavsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcHavsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWaitingOrdersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeWaitingOrdersResponse
     */
    public function describeWaitingOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->waitingOrderId)) {
            $query['WaitingOrderId'] = $request->waitingOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWaitingOrders',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWaitingOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWaitingOrdersRequest $request
     *
     * @return DescribeWaitingOrdersResponse
     */
    public function describeWaitingOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWaitingOrdersWithOptions($request, $runtime);
    }

    /**
     * @param FeedbackDiagnoseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FeedbackDiagnoseResponse
     */
    public function feedbackDiagnoseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diagnoseId)) {
            $query['DiagnoseId'] = $request->diagnoseId;
        }
        if (!Utils::isUnset($request->mark)) {
            $query['Mark'] = $request->mark;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->star)) {
            $query['Star'] = $request->star;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FeedbackDiagnose',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FeedbackDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FeedbackDiagnoseRequest $request
     *
     * @return FeedbackDiagnoseResponse
     */
    public function feedbackDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->feedbackDiagnoseWithOptions($request, $runtime);
    }

    /**
     * @param GetLaunchTemplateDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetLaunchTemplateDataResponse
     */
    public function getLaunchTemplateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLaunchTemplateData',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLaunchTemplateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLaunchTemplateDataRequest $request
     *
     * @return GetLaunchTemplateDataResponse
     */
    public function getLaunchTemplateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLaunchTemplateDataWithOptions($request, $runtime);
    }

    /**
     * @param InnerDescribeNetworkInterfaceInGroupRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return InnerDescribeNetworkInterfaceInGroupResponse
     */
    public function innerDescribeNetworkInterfaceInGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InnerDescribeNetworkInterfaceInGroup',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InnerDescribeNetworkInterfaceInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InnerDescribeNetworkInterfaceInGroupRequest $request
     *
     * @return InnerDescribeNetworkInterfaceInGroupResponse
     */
    public function innerDescribeNetworkInterfaceInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->innerDescribeNetworkInterfaceInGroupWithOptions($request, $runtime);
    }

    /**
     * @param JoinEniQosGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return JoinEniQosGroupResponse
     */
    public function joinEniQosGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qosGroupName)) {
            $query['QosGroupName'] = $request->qosGroupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinEniQosGroup',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinEniQosGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinEniQosGroupRequest $request
     *
     * @return JoinEniQosGroupResponse
     */
    public function joinEniQosGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinEniQosGroupWithOptions($request, $runtime);
    }

    /**
     * @param LeaveEniQosGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return LeaveEniQosGroupResponse
     */
    public function leaveEniQosGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LeaveEniQosGroup',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LeaveEniQosGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LeaveEniQosGroupRequest $request
     *
     * @return LeaveEniQosGroupResponse
     */
    public function leaveEniQosGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveEniQosGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListAccountEcsQuotasRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAccountEcsQuotasResponse
     */
    public function listAccountEcsQuotasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->quotaResourceName)) {
            $query['QuotaResourceName'] = $request->quotaResourceName;
        }
        if (!Utils::isUnset($request->quotaResourceType)) {
            $query['QuotaResourceType'] = $request->quotaResourceType;
        }
        if (!Utils::isUnset($request->quotaUnit)) {
            $query['QuotaUnit'] = $request->quotaUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccountEcsQuotas',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccountEcsQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAccountEcsQuotasRequest $request
     *
     * @return ListAccountEcsQuotasResponse
     */
    public function listAccountEcsQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountEcsQuotasWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceSettingsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListServiceSettingsResponse
     */
    public function listServiceSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cloudAssistantDeliverySettings)) {
            $query['CloudAssistantDeliverySettings'] = $request->cloudAssistantDeliverySettings;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceSettings',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceSettingsRequest $request
     *
     * @return ListServiceSettingsResponse
     */
    public function listServiceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceSettingsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCapacityReservationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyCapacityReservationResponse
     */
    public function modifyCapacityReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->capacityReservationId)) {
            $query['CapacityReservationId'] = $request->capacityReservationId;
        }
        if (!Utils::isUnset($request->instanceCount)) {
            $query['InstanceCount'] = $request->instanceCount;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCapacityReservation',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCapacityReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCapacityReservationRequest $request
     *
     * @return ModifyCapacityReservationResponse
     */
    public function modifyCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionOnMaintenance)) {
            $query['ActionOnMaintenance'] = $request->actionOnMaintenance;
        }
        if (!Utils::isUnset($request->autoPlacement)) {
            $query['AutoPlacement'] = $request->autoPlacement;
        }
        if (!Utils::isUnset($request->cpuOverCommitRatio)) {
            $query['CpuOverCommitRatio'] = $request->cpuOverCommitRatio;
        }
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->dedicatedHostName)) {
            $query['DedicatedHostName'] = $request->dedicatedHostName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->networkAttributes)) {
            $query['NetworkAttributes'] = $request->networkAttributes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedHostAttribute',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAutoReleaseTimeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyDedicatedHostAutoReleaseTimeResponse
     */
    public function modifyDedicatedHostAutoReleaseTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoReleaseTime)) {
            $query['AutoReleaseTime'] = $request->autoReleaseTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedHostAutoReleaseTime',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostAutoReleaseTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAutoReleaseTimeRequest $request
     *
     * @return ModifyDedicatedHostAutoReleaseTimeResponse
     */
    public function modifyDedicatedHostAutoReleaseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAutoReleaseTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAutoRenewAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyDedicatedHostAutoRenewAttributeResponse
     */
    public function modifyDedicatedHostAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->renewalStatus)) {
            $query['RenewalStatus'] = $request->renewalStatus;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedHostAutoRenewAttribute',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAutoRenewAttributeRequest $request
     *
     * @return ModifyDedicatedHostAutoRenewAttributeResponse
     */
    public function modifyDedicatedHostAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostClusterAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyDedicatedHostClusterAttributeResponse
     */
    public function modifyDedicatedHostClusterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }
        if (!Utils::isUnset($request->dedicatedHostClusterName)) {
            $query['DedicatedHostClusterName'] = $request->dedicatedHostClusterName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedHostClusterAttribute',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostClusterAttributeRequest $request
     *
     * @return ModifyDedicatedHostClusterAttributeResponse
     */
    public function modifyDedicatedHostClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDiagnoseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDiagnoseResponse
     */
    public function modifyDiagnoseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diagnoseId)) {
            $query['DiagnoseId'] = $request->diagnoseId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDiagnose',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDiagnoseRequest $request
     *
     * @return ModifyDiagnoseResponse
     */
    public function modifyDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiagnoseWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDiskSpecRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDiskSpecResponse
     */
    public function modifyDiskSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->diskCategory)) {
            $query['DiskCategory'] = $request->diskCategory;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->performanceLevel)) {
            $query['PerformanceLevel'] = $request->performanceLevel;
        }
        if (!Utils::isUnset($request->provisionedIops)) {
            $query['ProvisionedIops'] = $request->provisionedIops;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDiskSpec',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDiskSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDiskSpecRequest $request
     *
     * @return ModifyDiskSpecResponse
     */
    public function modifyDiskSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEniQosGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEniQosGroupResponse
     */
    public function modifyEniQosGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qosGroupName)) {
            $query['QosGroupName'] = $request->qosGroupName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->rx)) {
            $query['Rx'] = $request->rx;
        }
        if (!Utils::isUnset($request->rxPps)) {
            $query['RxPps'] = $request->rxPps;
        }
        if (!Utils::isUnset($request->tx)) {
            $query['Tx'] = $request->tx;
        }
        if (!Utils::isUnset($request->txPps)) {
            $query['TxPps'] = $request->txPps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEniQosGroup',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEniQosGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyEniQosGroupRequest $request
     *
     * @return ModifyEniQosGroupResponse
     */
    public function modifyEniQosGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEniQosGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyImageAdvancedAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyImageAdvancedAttributeResponse
     */
    public function modifyImageAdvancedAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flag)) {
            $query['Flag'] = $request->flag;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->supportIoOptimized)) {
            $query['SupportIoOptimized'] = $request->supportIoOptimized;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyImageAdvancedAttribute',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyImageAdvancedAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyImageAdvancedAttributeRequest $request
     *
     * @return ModifyImageAdvancedAttributeResponse
     */
    public function modifyImageAdvancedAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageAdvancedAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAutoRebootTimeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyInstanceAutoRebootTimeResponse
     */
    public function modifyInstanceAutoRebootTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRebootTime)) {
            $query['AutoRebootTime'] = $request->autoRebootTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAutoRebootTime',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAutoRebootTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceAutoRebootTimeRequest $request
     *
     * @return ModifyInstanceAutoRebootTimeResponse
     */
    public function modifyInstanceAutoRebootTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRebootTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceCapacityReservationAttributesRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return ModifyInstanceCapacityReservationAttributesResponse
     */
    public function modifyInstanceCapacityReservationAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->capacityReservationId)) {
            $query['CapacityReservationId'] = $request->capacityReservationId;
        }
        if (!Utils::isUnset($request->capacityReservationPreference)) {
            $query['CapacityReservationPreference'] = $request->capacityReservationPreference;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceCapacityReservationAttributes',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceCapacityReservationAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceCapacityReservationAttributesRequest $request
     *
     * @return ModifyInstanceCapacityReservationAttributesResponse
     */
    public function modifyInstanceCapacityReservationAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceCapacityReservationAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceChargeTypeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->couponNo)) {
            $query['CouponNo'] = $request->couponNo;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->includeDataDisks)) {
            $query['IncludeDataDisks'] = $request->includeDataDisks;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->isDetailFee)) {
            $query['IsDetailFee'] = $request->isDetailFee;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceChargeType',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceChargeTypeRequest $request
     *
     * @return ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceDeploymentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceDeploymentResponse
     */
    public function modifyInstanceDeploymentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->affinity)) {
            $query['Affinity'] = $request->affinity;
        }
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->migrationType)) {
            $query['MigrationType'] = $request->migrationType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tenancy)) {
            $query['Tenancy'] = $request->tenancy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceDeployment',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceDeploymentRequest $request
     *
     * @return ModifyInstanceDeploymentResponse
     */
    public function modifyInstanceDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceDeploymentWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceMaintenanceAttributesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyInstanceMaintenanceAttributesResponse
     */
    public function modifyInstanceMaintenanceAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionOnMaintenance)) {
            $query['ActionOnMaintenance'] = $request->actionOnMaintenance;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->liveMigration)) {
            $query['LiveMigration'] = $request->liveMigration;
        }
        if (!Utils::isUnset($request->maintenanceWindow)) {
            $query['MaintenanceWindow'] = $request->maintenanceWindow;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceMaintenanceAttributes',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceMaintenanceAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceMaintenanceAttributesRequest $request
     *
     * @return ModifyInstanceMaintenanceAttributesResponse
     */
    public function modifyInstanceMaintenanceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMaintenanceAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMigratableInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyMigratableInstancesResponse
     */
    public function modifyMigratableInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessMigrationType)) {
            $query['BusinessMigrationType'] = $request->businessMigrationType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkMigrationType)) {
            $query['NetworkMigrationType'] = $request->networkMigrationType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMigratableInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMigratableInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMigratableInstancesRequest $request
     *
     * @return ModifyMigratableInstancesResponse
     */
    public function modifyMigratableInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMigratableInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMigrationInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyMigrationInstancesResponse
     */
    public function modifyMigrationInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalMigrationTime)) {
            $query['GlobalMigrationTime'] = $request->globalMigrationTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkMigrationType)) {
            $query['NetworkMigrationType'] = $request->networkMigrationType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMigrationInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMigrationInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMigrationInstancesRequest $request
     *
     * @return ModifyMigrationInstancesResponse
     */
    public function modifyMigrationInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMigrationInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMigrationPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyMigrationPlanResponse
     */
    public function modifyMigrationPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->migrationPlanId)) {
            $query['MigrationPlanId'] = $request->migrationPlanId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMigrationPlan',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMigrationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMigrationPlanRequest $request
     *
     * @return ModifyMigrationPlanResponse
     */
    public function modifyMigrationPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMigrationPlanWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOrderAutoRebootTimeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyOrderAutoRebootTimeResponse
     */
    public function modifyOrderAutoRebootTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRebootTime)) {
            $query['AutoRebootTime'] = $request->autoRebootTime;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyOrderAutoRebootTime',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOrderAutoRebootTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyOrderAutoRebootTimeRequest $request
     *
     * @return ModifyOrderAutoRebootTimeResponse
     */
    public function modifyOrderAutoRebootTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOrderAutoRebootTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPrivatePoolRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPrivatePoolResponse
     */
    public function modifyPrivatePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->endTimeType)) {
            $query['EndTimeType'] = $request->endTimeType;
        }
        if (!Utils::isUnset($request->instanceAmount)) {
            $query['InstanceAmount'] = $request->instanceAmount;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPrivatePool',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPrivatePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPrivatePoolRequest $request
     *
     * @return ModifyPrivatePoolResponse
     */
    public function modifyPrivatePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrivatePoolWithOptions($request, $runtime);
    }

    /**
     * @param ModifyReservationDemandRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyReservationDemandResponse
     */
    public function modifyReservationDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->confirmType)) {
            $query['ConfirmType'] = $request->confirmType;
        }
        if (!Utils::isUnset($request->couponAuto)) {
            $query['CouponAuto'] = $request->couponAuto;
        }
        if (!Utils::isUnset($request->couponType)) {
            $query['CouponType'] = $request->couponType;
        }
        if (!Utils::isUnset($request->demandId)) {
            $query['DemandId'] = $request->demandId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceAmount)) {
            $query['InstanceAmount'] = $request->instanceAmount;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceCpuCoreCount)) {
            $query['InstanceCpuCoreCount'] = $request->instanceCpuCoreCount;
        }
        if (!Utils::isUnset($request->instanceTypeFamily)) {
            $query['InstanceTypeFamily'] = $request->instanceTypeFamily;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->matchCriteria)) {
            $query['MatchCriteria'] = $request->matchCriteria;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedInstanceDescription)) {
            $query['ReservedInstanceDescription'] = $request->reservedInstanceDescription;
        }
        if (!Utils::isUnset($request->reservedInstanceGroupId)) {
            $query['ReservedInstanceGroupId'] = $request->reservedInstanceGroupId;
        }
        if (!Utils::isUnset($request->reservedInstanceName)) {
            $query['ReservedInstanceName'] = $request->reservedInstanceName;
        }
        if (!Utils::isUnset($request->reservedInstanceOfferingType)) {
            $query['ReservedInstanceOfferingType'] = $request->reservedInstanceOfferingType;
        }
        if (!Utils::isUnset($request->reservedInstanceScope)) {
            $query['ReservedInstanceScope'] = $request->reservedInstanceScope;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceSupplyType)) {
            $query['ResourceSupplyType'] = $request->resourceSupplyType;
        }
        if (!Utils::isUnset($request->savingPlanDescription)) {
            $query['SavingPlanDescription'] = $request->savingPlanDescription;
        }
        if (!Utils::isUnset($request->savingPlanHourFee)) {
            $query['SavingPlanHourFee'] = $request->savingPlanHourFee;
        }
        if (!Utils::isUnset($request->savingPlanId)) {
            $query['SavingPlanId'] = $request->savingPlanId;
        }
        if (!Utils::isUnset($request->savingPlanInstanceTypeFamilyGroup)) {
            $query['SavingPlanInstanceTypeFamilyGroup'] = $request->savingPlanInstanceTypeFamilyGroup;
        }
        if (!Utils::isUnset($request->savingPlanName)) {
            $query['SavingPlanName'] = $request->savingPlanName;
        }
        if (!Utils::isUnset($request->savingPlanPayMode)) {
            $query['SavingPlanPayMode'] = $request->savingPlanPayMode;
        }
        if (!Utils::isUnset($request->savingPlanSavingType)) {
            $query['SavingPlanSavingType'] = $request->savingPlanSavingType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneIds)) {
            $query['ZoneIds'] = $request->zoneIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyReservationDemand',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyReservationDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyReservationDemandRequest $request
     *
     * @return ModifyReservationDemandResponse
     */
    public function modifyReservationDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReservationDemandWithOptions($request, $runtime);
    }

    /**
     * @param ModifyReservedInstanceAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyReservedInstanceAttributeResponse
     */
    public function modifyReservedInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedInstanceId)) {
            $query['ReservedInstanceId'] = $request->reservedInstanceId;
        }
        if (!Utils::isUnset($request->reservedInstanceName)) {
            $query['ReservedInstanceName'] = $request->reservedInstanceName;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyReservedInstanceAttribute',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyReservedInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyReservedInstanceAttributeRequest $request
     *
     * @return ModifyReservedInstanceAttributeResponse
     */
    public function modifyReservedInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReservedInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyReservedInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyReservedInstancesResponse
     */
    public function modifyReservedInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configuration)) {
            $query['Configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedInstanceId)) {
            $query['ReservedInstanceId'] = $request->reservedInstanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyReservedInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyReservedInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyReservedInstancesRequest $request
     *
     * @return ModifyReservedInstancesResponse
     */
    public function modifyReservedInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReservedInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourceDiagnosisStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyResourceDiagnosisStatusResponse
     */
    public function modifyResourceDiagnosisStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diagnosisStatus)) {
            $query['DiagnosisStatus'] = $request->diagnosisStatus;
        }
        if (!Utils::isUnset($request->errorCode)) {
            $query['ErrorCode'] = $request->errorCode;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourceDiagnosisStatus',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyResourceDiagnosisStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyResourceDiagnosisStatusRequest $request
     *
     * @return ModifyResourceDiagnosisStatusResponse
     */
    public function modifyResourceDiagnosisStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceDiagnosisStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourceMetaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyResourceMetaResponse
     */
    public function modifyResourceMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->meta)) {
            $query['Meta'] = $request->meta;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourceMeta',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyResourceMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyResourceMetaRequest $request
     *
     * @return ModifyResourceMetaResponse
     */
    public function modifyResourceMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceMetaWithOptions($request, $runtime);
    }

    /**
     * @param ModifyStorageSetAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyStorageSetAttributeResponse
     */
    public function modifyStorageSetAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->storageSetId)) {
            $query['StorageSetId'] = $request->storageSetId;
        }
        if (!Utils::isUnset($request->storageSetName)) {
            $query['StorageSetName'] = $request->storageSetName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStorageSetAttribute',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStorageSetAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyStorageSetAttributeRequest $request
     *
     * @return ModifyStorageSetAttributeResponse
     */
    public function modifyStorageSetAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStorageSetAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWaitingOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyWaitingOrderResponse
     */
    public function modifyWaitingOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceAmount)) {
            $query['InstanceAmount'] = $request->instanceAmount;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->waitingOrderId)) {
            $query['WaitingOrderId'] = $request->waitingOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWaitingOrder',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWaitingOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWaitingOrderRequest $request
     *
     * @return ModifyWaitingOrderResponse
     */
    public function modifyWaitingOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWaitingOrderWithOptions($request, $runtime);
    }

    /**
     * @param PurchaseReservedInstancesOfferingRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return PurchaseReservedInstancesOfferingResponse
     */
    public function purchaseReservedInstancesOfferingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->instanceAmount)) {
            $query['InstanceAmount'] = $request->instanceAmount;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->offeringType)) {
            $query['OfferingType'] = $request->offeringType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reservedInstanceName)) {
            $query['ReservedInstanceName'] = $request->reservedInstanceName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PurchaseReservedInstancesOffering',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PurchaseReservedInstancesOfferingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PurchaseReservedInstancesOfferingRequest $request
     *
     * @return PurchaseReservedInstancesOfferingResponse
     */
    public function purchaseReservedInstancesOffering($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseReservedInstancesOfferingWithOptions($request, $runtime);
    }

    /**
     * @param PurchaseSavingPlanOfferingRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PurchaseSavingPlanOfferingResponse
     */
    public function purchaseSavingPlanOfferingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->committedAmount)) {
            $query['CommittedAmount'] = $request->committedAmount;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceFamily)) {
            $query['InstanceFamily'] = $request->instanceFamily;
        }
        if (!Utils::isUnset($request->instanceFamilySet)) {
            $query['InstanceFamilySet'] = $request->instanceFamilySet;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->offeringType)) {
            $query['OfferingType'] = $request->offeringType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->planType)) {
            $query['PlanType'] = $request->planType;
        }
        if (!Utils::isUnset($request->purchaseMethod)) {
            $query['PurchaseMethod'] = $request->purchaseMethod;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PurchaseSavingPlanOffering',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PurchaseSavingPlanOfferingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PurchaseSavingPlanOfferingRequest $request
     *
     * @return PurchaseSavingPlanOfferingResponse
     */
    public function purchaseSavingPlanOffering($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseSavingPlanOfferingWithOptions($request, $runtime);
    }

    /**
     * @param PurchaseStorageCapacityUnitRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PurchaseStorageCapacityUnitResponse
     */
    public function purchaseStorageCapacityUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->extendParams)) {
            $query['ExtendParams'] = $request->extendParams;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PurchaseStorageCapacityUnit',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PurchaseStorageCapacityUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PurchaseStorageCapacityUnitRequest $request
     *
     * @return PurchaseStorageCapacityUnitResponse
     */
    public function purchaseStorageCapacityUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseStorageCapacityUnitWithOptions($request, $runtime);
    }

    /**
     * @param QueryEniQosGroupByEniRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryEniQosGroupByEniResponse
     */
    public function queryEniQosGroupByEniWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEniQosGroupByEni',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEniQosGroupByEniResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryEniQosGroupByEniRequest $request
     *
     * @return QueryEniQosGroupByEniResponse
     */
    public function queryEniQosGroupByEni($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEniQosGroupByEniWithOptions($request, $runtime);
    }

    /**
     * @param QueryEniQosGroupByInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryEniQosGroupByInstanceResponse
     */
    public function queryEniQosGroupByInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEniQosGroupByInstance',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEniQosGroupByInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryEniQosGroupByInstanceRequest $request
     *
     * @return QueryEniQosGroupByInstanceResponse
     */
    public function queryEniQosGroupByInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEniQosGroupByInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ReAddMigrationTaskInPlanRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReAddMigrationTaskInPlanResponse
     */
    public function reAddMigrationTaskInPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->migrationPlanId)) {
            $query['MigrationPlanId'] = $request->migrationPlanId;
        }
        if (!Utils::isUnset($request->migrationTime)) {
            $query['MigrationTime'] = $request->migrationTime;
        }
        if (!Utils::isUnset($request->networkMigrationType)) {
            $query['NetworkMigrationType'] = $request->networkMigrationType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReAddMigrationTaskInPlan',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReAddMigrationTaskInPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReAddMigrationTaskInPlanRequest $request
     *
     * @return ReAddMigrationTaskInPlanResponse
     */
    public function reAddMigrationTaskInPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reAddMigrationTaskInPlanWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseCapacityReservationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ReleaseCapacityReservationResponse
     */
    public function releaseCapacityReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->capacityReservationId)) {
            $query['CapacityReservationId'] = $request->capacityReservationId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseCapacityReservation',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseCapacityReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseCapacityReservationRequest $request
     *
     * @return ReleaseCapacityReservationResponse
     */
    public function releaseCapacityReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseCapacityReservationWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReleaseDedicatedHostResponse
     */
    public function releaseDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseDedicatedHost',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseDedicatedHostRequest $request
     *
     * @return ReleaseDedicatedHostResponse
     */
    public function releaseDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param RenewDedicatedHostsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RenewDedicatedHostsResponse
     */
    public function renewDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedicatedHostIds)) {
            $query['DedicatedHostIds'] = $request->dedicatedHostIds;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewDedicatedHosts',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewDedicatedHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenewDedicatedHostsRequest $request
     *
     * @return RenewDedicatedHostsResponse
     */
    public function renewDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param ReviewDiagnosticReportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReviewDiagnosticReportResponse
     */
    public function reviewDiagnosticReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceSystem)) {
            $query['SourceSystem'] = $request->sourceSystem;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReviewDiagnosticReport',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReviewDiagnosticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReviewDiagnosticReportRequest $request
     *
     * @return ReviewDiagnosticReportResponse
     */
    public function reviewDiagnosticReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reviewDiagnosticReportWithOptions($request, $runtime);
    }

    /**
     * @param RunInstancesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RunInstancesResponse
     */
    public function runInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->affinity)) {
            $query['Affinity'] = $request->affinity;
        }
        if (!Utils::isUnset($request->autoReleaseTime)) {
            $query['AutoReleaseTime'] = $request->autoReleaseTime;
        }
        if (!Utils::isUnset($request->businessInfo)) {
            $query['BusinessInfo'] = $request->businessInfo;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->creditSpecification)) {
            $query['CreditSpecification'] = $request->creditSpecification;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->defaultVpc)) {
            $query['DefaultVpc'] = $request->defaultVpc;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->deploymentSetGroupNo)) {
            $query['DeploymentSetGroupNo'] = $request->deploymentSetGroupNo;
        }
        if (!Utils::isUnset($request->deploymentSetId)) {
            $query['DeploymentSetId'] = $request->deploymentSetId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fromApp)) {
            $query['FromApp'] = $request->fromApp;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->hostNames)) {
            $query['HostNames'] = $request->hostNames;
        }
        if (!Utils::isUnset($request->hpcClusterId)) {
            $query['HpcClusterId'] = $request->hpcClusterId;
        }
        if (!Utils::isUnset($request->httpEndpoint)) {
            $query['HttpEndpoint'] = $request->httpEndpoint;
        }
        if (!Utils::isUnset($request->httpPutResponseHopLimit)) {
            $query['HttpPutResponseHopLimit'] = $request->httpPutResponseHopLimit;
        }
        if (!Utils::isUnset($request->httpTokens)) {
            $query['HttpTokens'] = $request->httpTokens;
        }
        if (!Utils::isUnset($request->imageFamily)) {
            $query['ImageFamily'] = $request->imageFamily;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageOptions)) {
            $query['ImageOptions'] = $request->imageOptions;
        }
        if (!Utils::isUnset($request->instance)) {
            $query['Instance'] = $request->instance;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthIn)) {
            $query['InternetMaxBandwidthIn'] = $request->internetMaxBandwidthIn;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->ipv6Address)) {
            $query['Ipv6Address'] = $request->ipv6Address;
        }
        if (!Utils::isUnset($request->ipv6AddressCount)) {
            $query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->maxAmount)) {
            $query['MaxAmount'] = $request->maxAmount;
        }
        if (!Utils::isUnset($request->minAmount)) {
            $query['MinAmount'] = $request->minAmount;
        }
        if (!Utils::isUnset($request->networkInterface)) {
            $query['NetworkInterface'] = $request->networkInterface;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->nodeControllerId)) {
            $query['NodeControllerId'] = $request->nodeControllerId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordInherit)) {
            $query['PasswordInherit'] = $request->passwordInherit;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->recycleBinResourceId)) {
            $query['RecycleBinResourceId'] = $request->recycleBinResourceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->relationOrderId)) {
            $query['RelationOrderId'] = $request->relationOrderId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityEnhancementStrategy)) {
            $query['SecurityEnhancementStrategy'] = $request->securityEnhancementStrategy;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $query['SecurityGroupIds'] = $request->securityGroupIds;
        }
        if (!Utils::isUnset($request->securityGroupRule)) {
            $query['SecurityGroupRule'] = $request->securityGroupRule;
        }
        if (!Utils::isUnset($request->spotDuration)) {
            $query['SpotDuration'] = $request->spotDuration;
        }
        if (!Utils::isUnset($request->spotInterruptionBehavior)) {
            $query['SpotInterruptionBehavior'] = $request->spotInterruptionBehavior;
        }
        if (!Utils::isUnset($request->spotPriceLimit)) {
            $query['SpotPriceLimit'] = $request->spotPriceLimit;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->storageSetId)) {
            $query['StorageSetId'] = $request->storageSetId;
        }
        if (!Utils::isUnset($request->storageSetPartitionNumber)) {
            $query['StorageSetPartitionNumber'] = $request->storageSetPartitionNumber;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tenancy)) {
            $query['Tenancy'] = $request->tenancy;
        }
        if (!Utils::isUnset($request->uniqueSuffix)) {
            $query['UniqueSuffix'] = $request->uniqueSuffix;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->hibernationOptions)) {
            $query['HibernationOptions'] = $request->hibernationOptions;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        if (!Utils::isUnset($request->schedulerOptions)) {
            $query['SchedulerOptions'] = $request->schedulerOptions;
        }
        if (!Utils::isUnset($request->securityOptions)) {
            $query['SecurityOptions'] = $request->securityOptions;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunInstances',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunInstancesRequest $request
     *
     * @return RunInstancesResponse
     */
    public function runInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runInstancesWithOptions($request, $runtime);
    }

    /**
     * @param SetInstanceAutoReleaseTimeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetInstanceAutoReleaseTimeResponse
     */
    public function setInstanceAutoReleaseTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoReleaseTime)) {
            $query['AutoReleaseTime'] = $request->autoReleaseTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetInstanceAutoReleaseTime',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetInstanceAutoReleaseTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetInstanceAutoReleaseTimeRequest $request
     *
     * @return SetInstanceAutoReleaseTimeResponse
     */
    public function setInstanceAutoReleaseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceAutoReleaseTimeWithOptions($request, $runtime);
    }

    /**
     * @param StartNetworkInsightsAnalysisRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return StartNetworkInsightsAnalysisResponse
     */
    public function startNetworkInsightsAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->networkInsightsPathId)) {
            $query['NetworkInsightsPathId'] = $request->networkInsightsPathId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartNetworkInsightsAnalysis',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartNetworkInsightsAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartNetworkInsightsAnalysisRequest $request
     *
     * @return StartNetworkInsightsAnalysisResponse
     */
    public function startNetworkInsightsAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startNetworkInsightsAnalysisWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceSettingsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateServiceSettingsResponse
     */
    public function updateServiceSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->cloudAssistantDeliverySettings)) {
            $query['CloudAssistantDeliverySettings'] = $request->cloudAssistantDeliverySettings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceSettings',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceSettingsRequest $request
     *
     * @return UpdateServiceSettingsResponse
     */
    public function updateServiceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceSettingsWithOptions($request, $runtime);
    }

    /**
     * @param UnmountPEDiskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UnmountPEDiskResponse
     */
    public function unmountPEDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceSystem)) {
            $query['SourceSystem'] = $request->sourceSystem;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'unmountPEDisk',
            'version'     => '2016-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnmountPEDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnmountPEDiskRequest $request
     *
     * @return UnmountPEDiskResponse
     */
    public function unmountPEDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unmountPEDiskWithOptions($request, $runtime);
    }
}
