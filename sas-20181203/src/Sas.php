<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddInstallCodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddInstallCodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddVpcHoneyPotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddVpcHoneyPotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckQuaraFileIdRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckQuaraFileIdResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckSecurityEventIdRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckSecurityEventIdResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAntiBruteForceRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAntiBruteForceRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBackupPolicyShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateOrUpdateAssetGroupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateOrUpdateAssetGroupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSuspEventNoteRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSuspEventNoteResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateVulAutoRepairConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateVulAutoRepairConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupPolicyMachineRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupPolicyMachineResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteLoginBaseConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteLoginBaseConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteTagWithUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteTagWithUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteVpcHoneyPotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteVpcHoneyPotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccessKeyLeakDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccessKeyLeakDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventStackInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventStackInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllEntityResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllGroupsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllGroupsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttackAnalysisDataRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttackAnalysisDataResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAutoDelConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupClientsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupClientsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupRestoreCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckEcsWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckEcsWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudCenterInstancesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudCenterInstancesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudProductFieldStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeConcernNecessityRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeConcernNecessityResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCriteriaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainCountRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExportInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExportInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceCriteriaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFieldStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFieldStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFrontVulPatchListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFrontVulPatchListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedInstancesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedInstancesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedMaliciousFilesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedMaliciousFilesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedTagsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedTagsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedVulRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedVulResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotAuthResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotSuspStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotSuspStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListWithBaselineNameRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListWithBaselineNameResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCaptchaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCaptchaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCodesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceAntiBruteForceRulesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceAntiBruteForceRulesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceRebootStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceRebootStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogstoreStorageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogstoreStorageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNoticeConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNoticeConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCountRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCronDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCronDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyPortDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyPortDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyPortItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyPortItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageNewestRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageNewestResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckItemResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckItemResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskItemTypeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskItemTypeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskListCheckResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskListCheckResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeScanTaskProgressRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeScanTaskProgressResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSearchConditionRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSearchConditionResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityCheckScheduleConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityCheckScheduleConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeServiceLinkedRoleStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarEventScenariosRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarEventScenariosResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyExecDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyExecDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyTargetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyTargetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSummaryInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSummaryInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSupportRegionResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventQuaraFilesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventQuaraFilesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousOverallConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousOverallConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousUUIDConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousUUIDConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBackupMachinesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBaselineAuthorizationRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBaselineAuthorizationResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserLayoutAuthorizationRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserLayoutAuthorizationResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUuidsByVulNamesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUuidsByVulNamesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVendorListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVersionConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVersionConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulExportInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulExportInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulWhitelistRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulWhitelistResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWarningExportInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWarningExportInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWarningMachinesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWarningMachinesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockBindListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockBindListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockConfigListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockConfigListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportVulRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportVulResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportWarningRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportWarningResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\FixCheckWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\FixCheckWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetBackupStorageCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSuspiciousStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSuspiciousStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetVulStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetVulStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSimilarSecurityEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreHcCheckWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreHcCheckWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallBackupClientRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallBackupClientResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallCloudMonitorRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallCloudMonitorResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListVulAutoRepairConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListVulAutoRepairConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAntiBruteForceRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAntiBruteForceRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetGroupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetGroupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClearLogstoreStorageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClearLogstoreStorageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCreateVulWhitelistRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCreateVulWhitelistResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyEmgVulSubmitRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyEmgVulSubmitResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyGroupPropertyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyGroupPropertyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInstanceAntiBruteForceRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInstanceAntiBruteForceRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLoginBaseConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLoginBaseConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLoginSwitchConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLoginSwitchConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyOpenLogShipperRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyOpenLogShipperResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyOperateVulRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyOperateVulResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPropertyScheduleConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPropertyScheduleConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyRiskCheckStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyRiskCheckStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyRiskSingleResultStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyRiskSingleResultStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifySecurityCheckScheduleConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifySecurityCheckScheduleConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStartVulScanRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStartVulScanResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStrategyTargetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStrategyTargetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyTagWithUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyTagWithUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVpcHoneyPotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVpcHoneyPotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulTargetConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulTargetConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockCreateConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockCreateConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockDeleteConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockDeleteConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockStartRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockStartResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUpdateConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUpdateConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateAgentClientInstallRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateAgentClientInstallResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateCommonOverallConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateCommonOverallConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousOverallConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousOverallConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousTargetConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousTargetConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateVulsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateVulsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationCancelIgnoreSuspEventRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationCancelIgnoreSuspEventResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationSuspEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationSuspEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PauseClientRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PauseClientResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicCreateImageScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicCreateImageScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicPreCheckImageScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicPreCheckImageScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicSyncAndCreateImageScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicSyncAndCreateImageScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupedSecurityEventMarkMissListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupedSecurityEventMarkMissListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupIdByGroupNameRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupIdByGroupNameResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RebootMachineRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RebootMachineResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshAssetsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshAssetsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshContainerAssetsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshContainerAssetsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RollbackSuspEventQuaraFileRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RollbackSuspEventQuaraFileResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\SasInstallCodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\SasInstallCodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartBaselineSecurityCheckRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartBaselineSecurityCheckResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartVirusScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartVirusScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UnbindAegisRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UnbindAegisResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UninstallBackupClientRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UninstallBackupClientResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ValidateHcWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ValidateHcWarningsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'tds.aliyuncs.com',
            'ap-southeast-1'              => 'tds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'tds.ap-southeast-3.aliyuncs.com',
            'ap-northeast-1'              => 'sas.aliyuncs.com',
            'ap-northeast-2-pop'          => 'sas.aliyuncs.com',
            'ap-south-1'                  => 'sas.aliyuncs.com',
            'ap-southeast-2'              => 'sas.aliyuncs.com',
            'ap-southeast-5'              => 'sas.aliyuncs.com',
            'cn-beijing'                  => 'sas.aliyuncs.com',
            'cn-beijing-finance-1'        => 'sas.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'sas.aliyuncs.com',
            'cn-beijing-gov-1'            => 'sas.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'sas.aliyuncs.com',
            'cn-chengdu'                  => 'sas.aliyuncs.com',
            'cn-edge-1'                   => 'sas.aliyuncs.com',
            'cn-fujian'                   => 'sas.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'sas.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'sas.aliyuncs.com',
            'cn-hangzhou-finance'         => 'sas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'sas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'sas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'sas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'sas.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'sas.aliyuncs.com',
            'cn-hongkong'                 => 'sas.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'sas.aliyuncs.com',
            'cn-huhehaote'                => 'sas.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'sas.aliyuncs.com',
            'cn-north-2-gov-1'            => 'sas.aliyuncs.com',
            'cn-qingdao'                  => 'sas.aliyuncs.com',
            'cn-qingdao-nebula'           => 'sas.aliyuncs.com',
            'cn-shanghai'                 => 'sas.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'sas.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'sas.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'sas.aliyuncs.com',
            'cn-shanghai-inner'           => 'sas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'sas.aliyuncs.com',
            'cn-shenzhen'                 => 'sas.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'sas.aliyuncs.com',
            'cn-shenzhen-inner'           => 'sas.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'sas.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'sas.aliyuncs.com',
            'cn-wuhan'                    => 'sas.aliyuncs.com',
            'cn-wulanchabu'               => 'sas.aliyuncs.com',
            'cn-yushanfang'               => 'sas.aliyuncs.com',
            'cn-zhangbei'                 => 'sas.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'sas.aliyuncs.com',
            'cn-zhangjiakou'              => 'sas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'sas.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'sas.aliyuncs.com',
            'eu-central-1'                => 'sas.aliyuncs.com',
            'eu-west-1'                   => 'sas.aliyuncs.com',
            'eu-west-1-oxs'               => 'sas.aliyuncs.com',
            'me-east-1'                   => 'sas.aliyuncs.com',
            'rus-west-1-pop'              => 'sas.aliyuncs.com',
            'us-east-1'                   => 'sas.aliyuncs.com',
            'us-west-1'                   => 'sas.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddInstallCodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddInstallCodeResponse
     */
    public function addInstallCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expiredDate)) {
            $query['ExpiredDate'] = $request->expiredDate;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->onlyImage)) {
            $query['OnlyImage'] = $request->onlyImage;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->vendorName)) {
            $query['VendorName'] = $request->vendorName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddInstallCode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddInstallCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddInstallCodeRequest $request
     *
     * @return AddInstallCodeResponse
     */
    public function addInstallCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addInstallCodeWithOptions($request, $runtime);
    }

    /**
     * @param AddVpcHoneyPotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddVpcHoneyPotResponse
     */
    public function addVpcHoneyPotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddVpcHoneyPot',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddVpcHoneyPotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddVpcHoneyPotRequest $request
     *
     * @return AddVpcHoneyPotResponse
     */
    public function addVpcHoneyPot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVpcHoneyPotWithOptions($request, $runtime);
    }

    /**
     * @param CheckQuaraFileIdRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckQuaraFileIdResponse
     */
    public function checkQuaraFileIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->quaraFileIds)) {
            $query['QuaraFileIds'] = $request->quaraFileIds;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckQuaraFileId',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckQuaraFileIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckQuaraFileIdRequest $request
     *
     * @return CheckQuaraFileIdResponse
     */
    public function checkQuaraFileId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkQuaraFileIdWithOptions($request, $runtime);
    }

    /**
     * @param CheckSecurityEventIdRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckSecurityEventIdResponse
     */
    public function checkSecurityEventIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityEventIds)) {
            $query['SecurityEventIds'] = $request->securityEventIds;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckSecurityEventId',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSecurityEventIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckSecurityEventIdRequest $request
     *
     * @return CheckSecurityEventIdResponse
     */
    public function checkSecurityEventId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSecurityEventIdWithOptions($request, $runtime);
    }

    /**
     * @param CreateAntiBruteForceRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAntiBruteForceRuleResponse
     */
    public function createAntiBruteForceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defaultRule)) {
            $query['DefaultRule'] = $request->defaultRule;
        }
        if (!Utils::isUnset($request->failCount)) {
            $query['FailCount'] = $request->failCount;
        }
        if (!Utils::isUnset($request->forbiddenTime)) {
            $query['ForbiddenTime'] = $request->forbiddenTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->span)) {
            $query['Span'] = $request->span;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAntiBruteForceRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAntiBruteForceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAntiBruteForceRuleRequest $request
     *
     * @return CreateAntiBruteForceRuleResponse
     */
    public function createAntiBruteForceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAntiBruteForceRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateBackupPolicyRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateBackupPolicyResponse
     */
    public function createBackupPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateBackupPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->policy)) {
            $request->policyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policyShrink)) {
            $query['Policy'] = $request->policyShrink;
        }
        if (!Utils::isUnset($request->policyRegionId)) {
            $query['PolicyRegionId'] = $request->policyRegionId;
        }
        if (!Utils::isUnset($request->policyVersion)) {
            $query['PolicyVersion'] = $request->policyVersion;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBackupPolicy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBackupPolicyRequest $request
     *
     * @return CreateBackupPolicyResponse
     */
    public function createBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateFileDetectRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFileDetectResponse
     */
    public function createFileDetectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hashKey)) {
            $query['HashKey'] = $request->hashKey;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFileDetect',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFileDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFileDetectRequest $request
     *
     * @return CreateFileDetectResponse
     */
    public function createFileDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileDetectWithOptions($request, $runtime);
    }

    /**
     * @param CreateFileDetectUploadUrlRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateFileDetectUploadUrlResponse
     */
    public function createFileDetectUploadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hashKeyList)) {
            $query['HashKeyList'] = $request->hashKeyList;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFileDetectUploadUrl',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFileDetectUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFileDetectUploadUrlRequest $request
     *
     * @return CreateFileDetectUploadUrlResponse
     */
    public function createFileDetectUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileDetectUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateAssetGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOrUpdateAssetGroupResponse
     */
    public function createOrUpdateAssetGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateAssetGroup',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateAssetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateAssetGroupRequest $request
     *
     * @return CreateOrUpdateAssetGroupResponse
     */
    public function createOrUpdateAssetGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateAssetGroupWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole()
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($runtime);
    }

    /**
     * @param CreateSimilarSecurityEventsQueryTaskRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateSimilarSecurityEventsQueryTaskResponse
     */
    public function createSimilarSecurityEventsQueryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityEventId)) {
            $query['SecurityEventId'] = $request->securityEventId;
        }
        if (!Utils::isUnset($request->similarEventScenarioCode)) {
            $query['SimilarEventScenarioCode'] = $request->similarEventScenarioCode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSimilarSecurityEventsQueryTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSimilarSecurityEventsQueryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSimilarSecurityEventsQueryTaskRequest $request
     *
     * @return CreateSimilarSecurityEventsQueryTaskResponse
     */
    public function createSimilarSecurityEventsQueryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimilarSecurityEventsQueryTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateSuspEventNoteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSuspEventNoteResponse
     */
    public function createSuspEventNoteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSuspEventNote',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSuspEventNoteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSuspEventNoteRequest $request
     *
     * @return CreateSuspEventNoteResponse
     */
    public function createSuspEventNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSuspEventNoteWithOptions($request, $runtime);
    }

    /**
     * @param CreateVulAutoRepairConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateVulAutoRepairConfigResponse
     */
    public function createVulAutoRepairConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vulAutoRepairConfigList)) {
            $query['VulAutoRepairConfigList'] = $request->vulAutoRepairConfigList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVulAutoRepairConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVulAutoRepairConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVulAutoRepairConfigRequest $request
     *
     * @return CreateVulAutoRepairConfigResponse
     */
    public function createVulAutoRepairConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVulAutoRepairConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteBackupPolicyResponse
     */
    public function deleteBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->policyVersion)) {
            $query['PolicyVersion'] = $request->policyVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackupPolicy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBackupPolicyRequest $request
     *
     * @return DeleteBackupPolicyResponse
     */
    public function deleteBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBackupPolicyMachineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteBackupPolicyMachineResponse
     */
    public function deleteBackupPolicyMachineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyVersion)) {
            $query['PolicyVersion'] = $request->policyVersion;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBackupPolicyMachine',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBackupPolicyMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBackupPolicyMachineRequest $request
     *
     * @return DeleteBackupPolicyMachineResponse
     */
    public function deleteBackupPolicyMachine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupPolicyMachineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGroupRequest $request
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLoginBaseConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteLoginBaseConfigResponse
     */
    public function deleteLoginBaseConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoginBaseConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLoginBaseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLoginBaseConfigRequest $request
     *
     * @return DeleteLoginBaseConfigResponse
     */
    public function deleteLoginBaseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoginBaseConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStrategyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteStrategyResponse
     */
    public function deleteStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStrategy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteStrategyRequest $request
     *
     * @return DeleteStrategyResponse
     */
    public function deleteStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStrategyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTagWithUuidRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteTagWithUuidResponse
     */
    public function deleteTagWithUuidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTagWithUuid',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTagWithUuidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTagWithUuidRequest $request
     *
     * @return DeleteTagWithUuidResponse
     */
    public function deleteTagWithUuid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagWithUuidWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVpcHoneyPotRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVpcHoneyPotResponse
     */
    public function deleteVpcHoneyPotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcHoneyPot',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVpcHoneyPotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVpcHoneyPotRequest $request
     *
     * @return DeleteVpcHoneyPotResponse
     */
    public function deleteVpcHoneyPot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcHoneyPotWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccessKeyLeakDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAccessKeyLeakDetailResponse
     */
    public function describeAccessKeyLeakDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccessKeyLeakDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccessKeyLeakDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccessKeyLeakDetailRequest $request
     *
     * @return DescribeAccessKeyLeakDetailResponse
     */
    public function describeAccessKeyLeakDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccessKeyLeakDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccesskeyLeakListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAccesskeyLeakListResponse
     */
    public function describeAccesskeyLeakListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccesskeyLeakList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccesskeyLeakListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccesskeyLeakListRequest $request
     *
     * @return DescribeAccesskeyLeakListResponse
     */
    public function describeAccesskeyLeakList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccesskeyLeakListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAffectedMaliciousFileImagesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeAffectedMaliciousFileImagesResponse
     */
    public function describeAffectedMaliciousFileImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->imageDigest)) {
            $query['ImageDigest'] = $request->imageDigest;
        }
        if (!Utils::isUnset($request->imageLayer)) {
            $query['ImageLayer'] = $request->imageLayer;
        }
        if (!Utils::isUnset($request->imageTag)) {
            $query['ImageTag'] = $request->imageTag;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->maliciousMd5)) {
            $query['MaliciousMd5'] = $request->maliciousMd5;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repoId)) {
            $query['RepoId'] = $request->repoId;
        }
        if (!Utils::isUnset($request->repoInstanceId)) {
            $query['RepoInstanceId'] = $request->repoInstanceId;
        }
        if (!Utils::isUnset($request->repoName)) {
            $query['RepoName'] = $request->repoName;
        }
        if (!Utils::isUnset($request->repoNamespace)) {
            $query['RepoNamespace'] = $request->repoNamespace;
        }
        if (!Utils::isUnset($request->repoRegionId)) {
            $query['RepoRegionId'] = $request->repoRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAffectedMaliciousFileImages',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAffectedMaliciousFileImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAffectedMaliciousFileImagesRequest $request
     *
     * @return DescribeAffectedMaliciousFileImagesResponse
     */
    public function describeAffectedMaliciousFileImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAffectedMaliciousFileImagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlarmEventDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAlarmEventDetailResponse
     */
    public function describeAlarmEventDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmUniqueInfo)) {
            $query['AlarmUniqueInfo'] = $request->alarmUniqueInfo;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlarmEventDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlarmEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlarmEventDetailRequest $request
     *
     * @return DescribeAlarmEventDetailResponse
     */
    public function describeAlarmEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmEventDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlarmEventListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAlarmEventListResponse
     */
    public function describeAlarmEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmEventName)) {
            $query['AlarmEventName'] = $request->alarmEventName;
        }
        if (!Utils::isUnset($request->alarmEventType)) {
            $query['AlarmEventType'] = $request->alarmEventType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->levels)) {
            $query['Levels'] = $request->levels;
        }
        if (!Utils::isUnset($request->operateErrorCodeList)) {
            $query['OperateErrorCodeList'] = $request->operateErrorCodeList;
        }
        if (!Utils::isUnset($request->operateTimeEnd)) {
            $query['OperateTimeEnd'] = $request->operateTimeEnd;
        }
        if (!Utils::isUnset($request->operateTimeStart)) {
            $query['OperateTimeStart'] = $request->operateTimeStart;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tacticId)) {
            $query['TacticId'] = $request->tacticId;
        }
        if (!Utils::isUnset($request->timeEnd)) {
            $query['TimeEnd'] = $request->timeEnd;
        }
        if (!Utils::isUnset($request->timeStart)) {
            $query['TimeStart'] = $request->timeStart;
        }
        if (!Utils::isUnset($request->uniqueInfo)) {
            $query['UniqueInfo'] = $request->uniqueInfo;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlarmEventList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlarmEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlarmEventListRequest $request
     *
     * @return DescribeAlarmEventListResponse
     */
    public function describeAlarmEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmEventListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlarmEventStackInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAlarmEventStackInfoResponse
     */
    public function describeAlarmEventStackInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uniqueInfo)) {
            $query['UniqueInfo'] = $request->uniqueInfo;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlarmEventStackInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlarmEventStackInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlarmEventStackInfoRequest $request
     *
     * @return DescribeAlarmEventStackInfoResponse
     */
    public function describeAlarmEventStackInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmEventStackInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAllEntityResponse
     */
    public function describeAllEntityWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAllEntity',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeAllEntityResponse
     */
    public function describeAllEntity()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllEntityWithOptions($runtime);
    }

    /**
     * @param DescribeAllGroupsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAllGroupsResponse
     */
    public function describeAllGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAllGroups',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAllGroupsRequest $request
     *
     * @return DescribeAllGroupsResponse
     */
    public function describeAllGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAntiBruteForceRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAntiBruteForceRulesResponse
     */
    public function describeAntiBruteForceRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAntiBruteForceRules',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAntiBruteForceRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAntiBruteForceRulesRequest $request
     *
     * @return DescribeAntiBruteForceRulesResponse
     */
    public function describeAntiBruteForceRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAntiBruteForceRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAssetDetailByUuidRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAssetDetailByUuidResponse
     */
    public function describeAssetDetailByUuidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAssetDetailByUuid',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetDetailByUuidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAssetDetailByUuidRequest $request
     *
     * @return DescribeAssetDetailByUuidResponse
     */
    public function describeAssetDetailByUuid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetDetailByUuidWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAssetDetailByUuidsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAssetDetailByUuidsResponse
     */
    public function describeAssetDetailByUuidsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAssetDetailByUuids',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetDetailByUuidsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAssetDetailByUuidsRequest $request
     *
     * @return DescribeAssetDetailByUuidsResponse
     */
    public function describeAssetDetailByUuids($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetDetailByUuidsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAssetSummaryResponse
     */
    public function describeAssetSummaryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAssetSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeAssetSummaryResponse
     */
    public function describeAssetSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetSummaryWithOptions($runtime);
    }

    /**
     * @param DescribeAttackAnalysisDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAttackAnalysisDataResponse
     */
    public function describeAttackAnalysisDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->base64)) {
            $query['Base64'] = $request->base64;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAttackAnalysisData',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAttackAnalysisDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAttackAnalysisDataRequest $request
     *
     * @return DescribeAttackAnalysisDataResponse
     */
    public function describeAttackAnalysisData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackAnalysisDataWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAutoDelConfigResponse
     */
    public function describeAutoDelConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAutoDelConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoDelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeAutoDelConfigResponse
     */
    public function describeAutoDelConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoDelConfigWithOptions($runtime);
    }

    /**
     * @param DescribeBackupClientsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBackupClientsResponse
     */
    public function describeBackupClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->supportRegionId)) {
            $query['SupportRegionId'] = $request->supportRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupClients',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupClientsRequest $request
     *
     * @return DescribeBackupClientsResponse
     */
    public function describeBackupClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupClientsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupFilesResponse
     */
    public function describeBackupFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->snapshotHash)) {
            $query['SnapshotHash'] = $request->snapshotHash;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupFiles',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupFilesRequest $request
     *
     * @return DescribeBackupFilesResponse
     */
    public function describeBackupFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPoliciesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackupPoliciesResponse
     */
    public function describeBackupPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->machineRemark)) {
            $query['MachineRemark'] = $request->machineRemark;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicies',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupPoliciesRequest $request
     *
     * @return DescribeBackupPoliciesResponse
     */
    public function describeBackupPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeBackupRestoreCountResponse
     */
    public function describeBackupRestoreCountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeBackupRestoreCount',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupRestoreCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeBackupRestoreCountResponse
     */
    public function describeBackupRestoreCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupRestoreCountWithOptions($runtime);
    }

    /**
     * @param DescribeBruteForceSummaryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBruteForceSummaryResponse
     */
    public function describeBruteForceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBruteForceSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBruteForceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBruteForceSummaryRequest $request
     *
     * @return DescribeBruteForceSummaryResponse
     */
    public function describeBruteForceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBruteForceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCheckEcsWarningsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCheckEcsWarningsResponse
     */
    public function describeCheckEcsWarningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCheckEcsWarnings',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCheckEcsWarningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCheckEcsWarningsRequest $request
     *
     * @return DescribeCheckEcsWarningsResponse
     */
    public function describeCheckEcsWarnings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckEcsWarningsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCheckWarningDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCheckWarningDetailResponse
     */
    public function describeCheckWarningDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkWarningId)) {
            $query['CheckWarningId'] = $request->checkWarningId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCheckWarningDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCheckWarningDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCheckWarningDetailRequest $request
     *
     * @return DescribeCheckWarningDetailResponse
     */
    public function describeCheckWarningDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckWarningDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCheckWarningSummaryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCheckWarningSummaryResponse
     */
    public function describeCheckWarningSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->containerFieldName)) {
            $query['ContainerFieldName'] = $request->containerFieldName;
        }
        if (!Utils::isUnset($request->containerFieldValue)) {
            $query['ContainerFieldValue'] = $request->containerFieldValue;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskName)) {
            $query['RiskName'] = $request->riskName;
        }
        if (!Utils::isUnset($request->riskStatus)) {
            $query['RiskStatus'] = $request->riskStatus;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->typeName)) {
            $query['TypeName'] = $request->typeName;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCheckWarningSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCheckWarningSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCheckWarningSummaryRequest $request
     *
     * @return DescribeCheckWarningSummaryResponse
     */
    public function describeCheckWarningSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckWarningSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCheckWarningsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCheckWarningsResponse
     */
    public function describeCheckWarningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskId)) {
            $query['RiskId'] = $request->riskId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCheckWarnings',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCheckWarningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCheckWarningsRequest $request
     *
     * @return DescribeCheckWarningsResponse
     */
    public function describeCheckWarnings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckWarningsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudCenterInstancesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudCenterInstancesResponse
     */
    public function describeCloudCenterInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->importance)) {
            $query['Importance'] = $request->importance;
        }
        if (!Utils::isUnset($request->logicalExp)) {
            $query['LogicalExp'] = $request->logicalExp;
        }
        if (!Utils::isUnset($request->machineTypes)) {
            $query['MachineTypes'] = $request->machineTypes;
        }
        if (!Utils::isUnset($request->noGroupTrace)) {
            $query['NoGroupTrace'] = $request->noGroupTrace;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudCenterInstances',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudCenterInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudCenterInstancesRequest $request
     *
     * @return DescribeCloudCenterInstancesResponse
     */
    public function describeCloudCenterInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudCenterInstancesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCloudProductFieldStatisticsResponse
     */
    public function describeCloudProductFieldStatisticsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeCloudProductFieldStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudProductFieldStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeCloudProductFieldStatisticsResponse
     */
    public function describeCloudProductFieldStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudProductFieldStatisticsWithOptions($runtime);
    }

    /**
     * @param DescribeCommonOverallConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCommonOverallConfigResponse
     */
    public function describeCommonOverallConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCommonOverallConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommonOverallConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCommonOverallConfigRequest $request
     *
     * @return DescribeCommonOverallConfigResponse
     */
    public function describeCommonOverallConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommonOverallConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConcernNecessityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeConcernNecessityResponse
     */
    public function describeConcernNecessityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConcernNecessity',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConcernNecessityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConcernNecessityRequest $request
     *
     * @return DescribeConcernNecessityResponse
     */
    public function describeConcernNecessity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConcernNecessityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerStatisticsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeContainerStatisticsResponse
     */
    public function describeContainerStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContainerStatisticsRequest $request
     *
     * @return DescribeContainerStatisticsResponse
     */
    public function describeContainerStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCriteriaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCriteriaResponse
     */
    public function describeCriteriaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->machineTypes)) {
            $query['MachineTypes'] = $request->machineTypes;
        }
        if (!Utils::isUnset($request->supportAutoTag)) {
            $query['SupportAutoTag'] = $request->supportAutoTag;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCriteria',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCriteriaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCriteriaRequest $request
     *
     * @return DescribeCriteriaResponse
     */
    public function describeCriteria($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCriteriaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDingTalkRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDingTalkResponse
     */
    public function describeDingTalkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleActionName)) {
            $query['RuleActionName'] = $request->ruleActionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDingTalk',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDingTalkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDingTalkRequest $request
     *
     * @return DescribeDingTalkResponse
     */
    public function describeDingTalk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDingTalkWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainCountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDomainCountResponse
     */
    public function describeDomainCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainCount',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainCountRequest $request
     *
     * @return DescribeDomainCountResponse
     */
    public function describeDomainCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainDetailResponse
     */
    public function describeDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainDetailRequest $request
     *
     * @return DescribeDomainDetailResponse
     */
    public function describeDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDomainListResponse
     */
    public function describeDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->fuzzyDomain)) {
            $query['FuzzyDomain'] = $request->fuzzyDomain;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainListRequest $request
     *
     * @return DescribeDomainListResponse
     */
    public function describeDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEmgVulItemRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEmgVulItemResponse
     */
    public function describeEmgVulItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskStatus)) {
            $query['RiskStatus'] = $request->riskStatus;
        }
        if (!Utils::isUnset($request->scanType)) {
            $query['ScanType'] = $request->scanType;
        }
        if (!Utils::isUnset($request->vulName)) {
            $query['VulName'] = $request->vulName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEmgVulItem',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEmgVulItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEmgVulItemRequest $request
     *
     * @return DescribeEmgVulItemResponse
     */
    public function describeEmgVulItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmgVulItemWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExportInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeExportInfoResponse
     */
    public function describeExportInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exportId)) {
            $query['ExportId'] = $request->exportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExportInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExportInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExportInfoRequest $request
     *
     * @return DescribeExportInfoResponse
     */
    public function describeExportInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExposedInstanceCriteriaRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeExposedInstanceCriteriaResponse
     */
    public function describeExposedInstanceCriteriaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExposedInstanceCriteria',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExposedInstanceCriteriaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExposedInstanceCriteriaRequest $request
     *
     * @return DescribeExposedInstanceCriteriaResponse
     */
    public function describeExposedInstanceCriteria($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExposedInstanceCriteriaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExposedInstanceDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeExposedInstanceDetailResponse
     */
    public function describeExposedInstanceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExposedInstanceDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExposedInstanceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExposedInstanceDetailRequest $request
     *
     * @return DescribeExposedInstanceDetailResponse
     */
    public function describeExposedInstanceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExposedInstanceDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExposedInstanceListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeExposedInstanceListResponse
     */
    public function describeExposedInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->exposureComponent)) {
            $query['ExposureComponent'] = $request->exposureComponent;
        }
        if (!Utils::isUnset($request->exposureIp)) {
            $query['ExposureIp'] = $request->exposureIp;
        }
        if (!Utils::isUnset($request->exposurePort)) {
            $query['ExposurePort'] = $request->exposurePort;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->healthStatus)) {
            $query['HealthStatus'] = $request->healthStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->vulStatus)) {
            $query['VulStatus'] = $request->vulStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExposedInstanceList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExposedInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExposedInstanceListRequest $request
     *
     * @return DescribeExposedInstanceListResponse
     */
    public function describeExposedInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExposedInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeExposedStatisticsResponse
     */
    public function describeExposedStatisticsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeExposedStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExposedStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeExposedStatisticsResponse
     */
    public function describeExposedStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExposedStatisticsWithOptions($runtime);
    }

    /**
     * @param DescribeExposedStatisticsDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeExposedStatisticsDetailResponse
     */
    public function describeExposedStatisticsDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->statisticsType)) {
            $query['StatisticsType'] = $request->statisticsType;
        }
        if (!Utils::isUnset($request->statisticsTypeGatewayType)) {
            $query['StatisticsTypeGatewayType'] = $request->statisticsTypeGatewayType;
        }
        if (!Utils::isUnset($request->statisticsTypeInstanceValue)) {
            $query['StatisticsTypeInstanceValue'] = $request->statisticsTypeInstanceValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExposedStatisticsDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExposedStatisticsDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExposedStatisticsDetailRequest $request
     *
     * @return DescribeExposedStatisticsDetailResponse
     */
    public function describeExposedStatisticsDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExposedStatisticsDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFieldStatisticsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeFieldStatisticsResponse
     */
    public function describeFieldStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->machineTypes)) {
            $query['MachineTypes'] = $request->machineTypes;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFieldStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFieldStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFieldStatisticsRequest $request
     *
     * @return DescribeFieldStatisticsResponse
     */
    public function describeFieldStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFieldStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFrontVulPatchListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeFrontVulPatchListResponse
     */
    public function describeFrontVulPatchListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->info)) {
            $query['Info'] = $request->info;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFrontVulPatchList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFrontVulPatchListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFrontVulPatchListRequest $request
     *
     * @return DescribeFrontVulPatchListResponse
     */
    public function describeFrontVulPatchList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFrontVulPatchListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupedContainerInstancesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeGroupedContainerInstancesResponse
     */
    public function describeGroupedContainerInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['FieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->groupField)) {
            $query['GroupField'] = $request->groupField;
        }
        if (!Utils::isUnset($request->logicalExp)) {
            $query['LogicalExp'] = $request->logicalExp;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupedContainerInstances',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupedContainerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGroupedContainerInstancesRequest $request
     *
     * @return DescribeGroupedContainerInstancesResponse
     */
    public function describeGroupedContainerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupedContainerInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupedInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGroupedInstancesResponse
     */
    public function describeGroupedInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['FieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->groupField)) {
            $query['GroupField'] = $request->groupField;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->machineTypes)) {
            $query['MachineTypes'] = $request->machineTypes;
        }
        if (!Utils::isUnset($request->noPage)) {
            $query['NoPage'] = $request->noPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupedInstances',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupedInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGroupedInstancesRequest $request
     *
     * @return DescribeGroupedInstancesResponse
     */
    public function describeGroupedInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupedInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupedMaliciousFilesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGroupedMaliciousFilesResponse
     */
    public function describeGroupedMaliciousFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->fuzzyMaliciousName)) {
            $query['FuzzyMaliciousName'] = $request->fuzzyMaliciousName;
        }
        if (!Utils::isUnset($request->imageDigest)) {
            $query['ImageDigest'] = $request->imageDigest;
        }
        if (!Utils::isUnset($request->imageLayer)) {
            $query['ImageLayer'] = $request->imageLayer;
        }
        if (!Utils::isUnset($request->imageTag)) {
            $query['ImageTag'] = $request->imageTag;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->levels)) {
            $query['Levels'] = $request->levels;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repoId)) {
            $query['RepoId'] = $request->repoId;
        }
        if (!Utils::isUnset($request->repoInstanceId)) {
            $query['RepoInstanceId'] = $request->repoInstanceId;
        }
        if (!Utils::isUnset($request->repoName)) {
            $query['RepoName'] = $request->repoName;
        }
        if (!Utils::isUnset($request->repoNamespace)) {
            $query['RepoNamespace'] = $request->repoNamespace;
        }
        if (!Utils::isUnset($request->repoRegionId)) {
            $query['RepoRegionId'] = $request->repoRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupedMaliciousFiles',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupedMaliciousFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGroupedMaliciousFilesRequest $request
     *
     * @return DescribeGroupedMaliciousFilesResponse
     */
    public function describeGroupedMaliciousFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupedMaliciousFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupedTagsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeGroupedTagsResponse
     */
    public function describeGroupedTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->machineTypes)) {
            $query['MachineTypes'] = $request->machineTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupedTags',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupedTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGroupedTagsRequest $request
     *
     * @return DescribeGroupedTagsResponse
     */
    public function describeGroupedTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupedTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupedVulRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeGroupedVulResponse
     */
    public function describeGroupedVulWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->attachTypes)) {
            $query['AttachTypes'] = $request->attachTypes;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchTags)) {
            $query['SearchTags'] = $request->searchTags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupedVul',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupedVulResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGroupedVulRequest $request
     *
     * @return DescribeGroupedVulResponse
     */
    public function describeGroupedVul($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupedVulWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeHoneyPotAuthResponse
     */
    public function describeHoneyPotAuthWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeHoneyPotAuth',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHoneyPotAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeHoneyPotAuthResponse
     */
    public function describeHoneyPotAuth()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHoneyPotAuthWithOptions($runtime);
    }

    /**
     * @param DescribeHoneyPotSuspStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeHoneyPotSuspStatisticsResponse
     */
    public function describeHoneyPotSuspStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->statisticsDays)) {
            $query['StatisticsDays'] = $request->statisticsDays;
        }
        if (!Utils::isUnset($request->statisticsKeyType)) {
            $query['StatisticsKeyType'] = $request->statisticsKeyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHoneyPotSuspStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHoneyPotSuspStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHoneyPotSuspStatisticsRequest $request
     *
     * @return DescribeHoneyPotSuspStatisticsResponse
     */
    public function describeHoneyPotSuspStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHoneyPotSuspStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageBaselineCheckSummaryRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeImageBaselineCheckSummaryResponse
     */
    public function describeImageBaselineCheckSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->criteriaType)) {
            $query['CriteriaType'] = $request->criteriaType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageBaselineCheckSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageBaselineCheckSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageBaselineCheckSummaryRequest $request
     *
     * @return DescribeImageBaselineCheckSummaryResponse
     */
    public function describeImageBaselineCheckSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageBaselineCheckSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageFixTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeImageFixTaskResponse
     */
    public function describeImageFixTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageFixTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageFixTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageFixTaskRequest $request
     *
     * @return DescribeImageFixTaskResponse
     */
    public function describeImageFixTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageFixTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageGroupedVulListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeImageGroupedVulListResponse
     */
    public function describeImageGroupedVulListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->cveId)) {
            $query['CveId'] = $request->cveId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->imageDigest)) {
            $query['ImageDigest'] = $request->imageDigest;
        }
        if (!Utils::isUnset($request->imageLayer)) {
            $query['ImageLayer'] = $request->imageLayer;
        }
        if (!Utils::isUnset($request->imageTag)) {
            $query['ImageTag'] = $request->imageTag;
        }
        if (!Utils::isUnset($request->isLatest)) {
            $query['IsLatest'] = $request->isLatest;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->patchId)) {
            $query['PatchId'] = $request->patchId;
        }
        if (!Utils::isUnset($request->repoId)) {
            $query['RepoId'] = $request->repoId;
        }
        if (!Utils::isUnset($request->repoInstanceId)) {
            $query['RepoInstanceId'] = $request->repoInstanceId;
        }
        if (!Utils::isUnset($request->repoName)) {
            $query['RepoName'] = $request->repoName;
        }
        if (!Utils::isUnset($request->repoNamespace)) {
            $query['RepoNamespace'] = $request->repoNamespace;
        }
        if (!Utils::isUnset($request->repoRegionId)) {
            $query['RepoRegionId'] = $request->repoRegionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageGroupedVulList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageGroupedVulListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageGroupedVulListRequest $request
     *
     * @return DescribeImageGroupedVulListResponse
     */
    public function describeImageGroupedVulList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageGroupedVulListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageListWithBaselineNameRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeImageListWithBaselineNameResponse
     */
    public function describeImageListWithBaselineNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baselineNameKey)) {
            $query['BaselineNameKey'] = $request->baselineNameKey;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->criteriaType)) {
            $query['CriteriaType'] = $request->criteriaType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->imageDigest)) {
            $query['ImageDigest'] = $request->imageDigest;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repoInstanceId)) {
            $query['RepoInstanceId'] = $request->repoInstanceId;
        }
        if (!Utils::isUnset($request->repoName)) {
            $query['RepoName'] = $request->repoName;
        }
        if (!Utils::isUnset($request->repoNamespace)) {
            $query['RepoNamespace'] = $request->repoNamespace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageListWithBaselineName',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageListWithBaselineNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageListWithBaselineNameRequest $request
     *
     * @return DescribeImageListWithBaselineNameResponse
     */
    public function describeImageListWithBaselineName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageListWithBaselineNameWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeImageScanAuthCountResponse
     */
    public function describeImageScanAuthCountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeImageScanAuthCount',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageScanAuthCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeImageScanAuthCountResponse
     */
    public function describeImageScanAuthCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageScanAuthCountWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeImageStatisticsResponse
     */
    public function describeImageStatisticsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeImageStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeImageStatisticsResponse
     */
    public function describeImageStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageStatisticsWithOptions($runtime);
    }

    /**
     * @param DescribeImageVulListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeImageVulListResponse
     */
    public function describeImageVulListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->digest)) {
            $query['Digest'] = $request->digest;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->repoId)) {
            $query['RepoId'] = $request->repoId;
        }
        if (!Utils::isUnset($request->repoId)) {
            $query['RepoId'] = $request->repoId;
        }
        if (!Utils::isUnset($request->repoInstanceId)) {
            $query['RepoInstanceId'] = $request->repoInstanceId;
        }
        if (!Utils::isUnset($request->repoName)) {
            $query['RepoName'] = $request->repoName;
        }
        if (!Utils::isUnset($request->repoName)) {
            $query['RepoName'] = $request->repoName;
        }
        if (!Utils::isUnset($request->repoNamespace)) {
            $query['RepoNamespace'] = $request->repoNamespace;
        }
        if (!Utils::isUnset($request->repoRegionId)) {
            $query['RepoRegionId'] = $request->repoRegionId;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageVulList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageVulListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageVulListRequest $request
     *
     * @return DescribeImageVulListResponse
     */
    public function describeImageVulList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageVulListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstallCaptchaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstallCaptchaResponse
     */
    public function describeInstallCaptchaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deadline)) {
            $query['Deadline'] = $request->deadline;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstallCaptcha',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstallCaptchaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstallCaptchaRequest $request
     *
     * @return DescribeInstallCaptchaResponse
     */
    public function describeInstallCaptcha($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstallCaptchaWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstallCodesResponse
     */
    public function describeInstallCodesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeInstallCodes',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstallCodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeInstallCodesResponse
     */
    public function describeInstallCodes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstallCodesWithOptions($runtime);
    }

    /**
     * @param DescribeInstanceAntiBruteForceRulesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeInstanceAntiBruteForceRulesResponse
     */
    public function describeInstanceAntiBruteForceRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAntiBruteForceRules',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAntiBruteForceRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceAntiBruteForceRulesRequest $request
     *
     * @return DescribeInstanceAntiBruteForceRulesResponse
     */
    public function describeInstanceAntiBruteForceRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAntiBruteForceRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceRebootStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeInstanceRebootStatusResponse
     */
    public function describeInstanceRebootStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceRebootStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceRebootStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceRebootStatusRequest $request
     *
     * @return DescribeInstanceRebootStatusResponse
     */
    public function describeInstanceRebootStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRebootStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceStatisticsRequest $request
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoginBaseConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLoginBaseConfigsResponse
     */
    public function describeLoginBaseConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoginBaseConfigs',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoginBaseConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLoginBaseConfigsRequest $request
     *
     * @return DescribeLoginBaseConfigsResponse
     */
    public function describeLoginBaseConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoginBaseConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogstoreStorageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLogstoreStorageResponse
     */
    public function describeLogstoreStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogstoreStorage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogstoreStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogstoreStorageRequest $request
     *
     * @return DescribeLogstoreStorageResponse
     */
    public function describeLogstoreStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogstoreStorageWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeModuleConfigResponse
     */
    public function describeModuleConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeModuleConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeModuleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeModuleConfigResponse
     */
    public function describeModuleConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModuleConfigWithOptions($runtime);
    }

    /**
     * @param DescribeNoticeConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeNoticeConfigResponse
     */
    public function describeNoticeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNoticeConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNoticeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNoticeConfigRequest $request
     *
     * @return DescribeNoticeConfigResponse
     */
    public function describeNoticeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNoticeConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOnceTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeOnceTaskResponse
     */
    public function describeOnceTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTimeQuery)) {
            $query['EndTimeQuery'] = $request->endTimeQuery;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->rootTaskId)) {
            $query['RootTaskId'] = $request->rootTaskId;
        }
        if (!Utils::isUnset($request->startTimeQuery)) {
            $query['StartTimeQuery'] = $request->startTimeQuery;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOnceTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOnceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOnceTaskRequest $request
     *
     * @return DescribeOnceTaskResponse
     */
    public function describeOnceTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnceTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyCountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePropertyCountResponse
     */
    public function describePropertyCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyCount',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyCountRequest $request
     *
     * @return DescribePropertyCountResponse
     */
    public function describePropertyCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyCronDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePropertyCronDetailResponse
     */
    public function describePropertyCronDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyCronDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyCronDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyCronDetailRequest $request
     *
     * @return DescribePropertyCronDetailResponse
     */
    public function describePropertyCronDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyCronDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyPortDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePropertyPortDetailResponse
     */
    public function describePropertyPortDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bindIp)) {
            $query['BindIp'] = $request->bindIp;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->procName)) {
            $query['ProcName'] = $request->procName;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyPortDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyPortDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyPortDetailRequest $request
     *
     * @return DescribePropertyPortDetailResponse
     */
    public function describePropertyPortDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyPortDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyPortItemRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePropertyPortItemResponse
     */
    public function describePropertyPortItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->forceFlush)) {
            $query['ForceFlush'] = $request->forceFlush;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyPortItem',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyPortItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyPortItemRequest $request
     *
     * @return DescribePropertyPortItemResponse
     */
    public function describePropertyPortItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyPortItemWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyProcDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePropertyProcDetailResponse
     */
    public function describePropertyProcDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cmdline)) {
            $query['Cmdline'] = $request->cmdline;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->procTimeEnd)) {
            $query['ProcTimeEnd'] = $request->procTimeEnd;
        }
        if (!Utils::isUnset($request->procTimeStart)) {
            $query['ProcTimeStart'] = $request->procTimeStart;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyProcDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyProcDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyProcDetailRequest $request
     *
     * @return DescribePropertyProcDetailResponse
     */
    public function describePropertyProcDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyProcDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyProcItemRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePropertyProcItemResponse
     */
    public function describePropertyProcItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->forceFlush)) {
            $query['ForceFlush'] = $request->forceFlush;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyProcItem',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyProcItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyProcItemRequest $request
     *
     * @return DescribePropertyProcItemResponse
     */
    public function describePropertyProcItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyProcItemWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyScaDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePropertyScaDetailResponse
     */
    public function describePropertyScaDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->biz)) {
            $query['Biz'] = $request->biz;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->processStartedEnd)) {
            $query['ProcessStartedEnd'] = $request->processStartedEnd;
        }
        if (!Utils::isUnset($request->processStartedStart)) {
            $query['ProcessStartedStart'] = $request->processStartedStart;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->scaName)) {
            $query['ScaName'] = $request->scaName;
        }
        if (!Utils::isUnset($request->scaNamePattern)) {
            $query['ScaNamePattern'] = $request->scaNamePattern;
        }
        if (!Utils::isUnset($request->scaVersion)) {
            $query['ScaVersion'] = $request->scaVersion;
        }
        if (!Utils::isUnset($request->searchInfo)) {
            $query['SearchInfo'] = $request->searchInfo;
        }
        if (!Utils::isUnset($request->searchInfoSub)) {
            $query['SearchInfoSub'] = $request->searchInfoSub;
        }
        if (!Utils::isUnset($request->searchItem)) {
            $query['SearchItem'] = $request->searchItem;
        }
        if (!Utils::isUnset($request->searchItemSub)) {
            $query['SearchItemSub'] = $request->searchItemSub;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyScaDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyScaDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyScaDetailRequest $request
     *
     * @return DescribePropertyScaDetailResponse
     */
    public function describePropertyScaDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyScaDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertySoftwareDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribePropertySoftwareDetailResponse
     */
    public function describePropertySoftwareDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->installTimeEnd)) {
            $query['InstallTimeEnd'] = $request->installTimeEnd;
        }
        if (!Utils::isUnset($request->installTimeStart)) {
            $query['InstallTimeStart'] = $request->installTimeStart;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->softwareVersion)) {
            $query['SoftwareVersion'] = $request->softwareVersion;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertySoftwareDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertySoftwareDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertySoftwareDetailRequest $request
     *
     * @return DescribePropertySoftwareDetailResponse
     */
    public function describePropertySoftwareDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertySoftwareDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertySoftwareItemRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePropertySoftwareItemResponse
     */
    public function describePropertySoftwareItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->forceFlush)) {
            $query['ForceFlush'] = $request->forceFlush;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertySoftwareItem',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertySoftwareItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertySoftwareItemRequest $request
     *
     * @return DescribePropertySoftwareItemResponse
     */
    public function describePropertySoftwareItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertySoftwareItemWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyUsageNewestRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePropertyUsageNewestResponse
     */
    public function describePropertyUsageNewestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyUsageNewest',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyUsageNewestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyUsageNewestRequest $request
     *
     * @return DescribePropertyUsageNewestResponse
     */
    public function describePropertyUsageNewest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyUsageNewestWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyUserDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePropertyUserDetailResponse
     */
    public function describePropertyUserDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->isRoot)) {
            $query['IsRoot'] = $request->isRoot;
        }
        if (!Utils::isUnset($request->lastLoginTimeEnd)) {
            $query['LastLoginTimeEnd'] = $request->lastLoginTimeEnd;
        }
        if (!Utils::isUnset($request->lastLoginTimeStart)) {
            $query['LastLoginTimeStart'] = $request->lastLoginTimeStart;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyUserDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyUserDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyUserDetailRequest $request
     *
     * @return DescribePropertyUserDetailResponse
     */
    public function describePropertyUserDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyUserDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyUserItemRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePropertyUserItemResponse
     */
    public function describePropertyUserItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->forceFlush)) {
            $query['ForceFlush'] = $request->forceFlush;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyUserItem',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyUserItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyUserItemRequest $request
     *
     * @return DescribePropertyUserItemResponse
     */
    public function describePropertyUserItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyUserItemWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRestoreJobsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRestoreJobsResponse
     */
    public function describeRestoreJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->machineRemark)) {
            $query['MachineRemark'] = $request->machineRemark;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreJobs',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRestoreJobsRequest $request
     *
     * @return DescribeRestoreJobsResponse
     */
    public function describeRestoreJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreJobsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskCheckItemResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRiskCheckItemResultResponse
     */
    public function describeRiskCheckItemResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskCheckItemResult',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskCheckItemResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskCheckItemResultRequest $request
     *
     * @return DescribeRiskCheckItemResultResponse
     */
    public function describeRiskCheckItemResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskCheckItemResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskCheckResultRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRiskCheckResultResponse
     */
    public function describeRiskCheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetType)) {
            $query['AssetType'] = $request->assetType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->itemIds)) {
            $query['ItemIds'] = $request->itemIds;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryFlag)) {
            $query['QueryFlag'] = $request->queryFlag;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskCheckResult',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskCheckResultRequest $request
     *
     * @return DescribeRiskCheckResultResponse
     */
    public function describeRiskCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskCheckResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskCheckSummaryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRiskCheckSummaryResponse
     */
    public function describeRiskCheckSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceDirectoryAccountId)) {
            $query['ResourceDirectoryAccountId'] = $request->resourceDirectoryAccountId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskCheckSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskCheckSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskCheckSummaryRequest $request
     *
     * @return DescribeRiskCheckSummaryResponse
     */
    public function describeRiskCheckSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskCheckSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskItemTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRiskItemTypeResponse
     */
    public function describeRiskItemTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskItemType',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskItemTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskItemTypeRequest $request
     *
     * @return DescribeRiskItemTypeResponse
     */
    public function describeRiskItemType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskItemTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskListCheckResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRiskListCheckResultResponse
     */
    public function describeRiskListCheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskListCheckResult',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskListCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskListCheckResultRequest $request
     *
     * @return DescribeRiskListCheckResultResponse
     */
    public function describeRiskListCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskListCheckResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskTypeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeRiskTypeResponse
     */
    public function describeRiskTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskType',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskTypeRequest $request
     *
     * @return DescribeRiskTypeResponse
     */
    public function describeRiskType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScanTaskProgressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScanTaskProgressResponse
     */
    public function describeScanTaskProgressWithOptions($request, $runtime)
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
            'action'      => 'DescribeScanTaskProgress',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScanTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScanTaskProgressRequest $request
     *
     * @return DescribeScanTaskProgressResponse
     */
    public function describeScanTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScanTaskProgressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSearchConditionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSearchConditionResponse
     */
    public function describeSearchConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSearchCondition',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSearchConditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSearchConditionRequest $request
     *
     * @return DescribeSearchConditionResponse
     */
    public function describeSearchCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSearchConditionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecureSuggestionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSecureSuggestionResponse
     */
    public function describeSecureSuggestionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecureSuggestion',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecureSuggestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecureSuggestionRequest $request
     *
     * @return DescribeSecureSuggestionResponse
     */
    public function describeSecureSuggestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecureSuggestionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityCheckScheduleConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeSecurityCheckScheduleConfigResponse
     */
    public function describeSecurityCheckScheduleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityCheckScheduleConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityCheckScheduleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityCheckScheduleConfigRequest $request
     *
     * @return DescribeSecurityCheckScheduleConfigResponse
     */
    public function describeSecurityCheckScheduleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityCheckScheduleConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityEventOperationStatusRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeSecurityEventOperationStatusResponse
     */
    public function describeSecurityEventOperationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityEventIds)) {
            $query['SecurityEventIds'] = $request->securityEventIds;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityEventOperationStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityEventOperationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityEventOperationStatusRequest $request
     *
     * @return DescribeSecurityEventOperationStatusResponse
     */
    public function describeSecurityEventOperationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventOperationStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityEventOperationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSecurityEventOperationsResponse
     */
    public function describeSecurityEventOperationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityEventId)) {
            $query['SecurityEventId'] = $request->securityEventId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityEventOperations',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityEventOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityEventOperationsRequest $request
     *
     * @return DescribeSecurityEventOperationsResponse
     */
    public function describeSecurityEventOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventOperationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityStatInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSecurityStatInfoResponse
     */
    public function describeSecurityStatInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceDirectoryAccountId)) {
            $query['ResourceDirectoryAccountId'] = $request->resourceDirectoryAccountId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityStatInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityStatInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityStatInfoRequest $request
     *
     * @return DescribeSecurityStatInfoResponse
     */
    public function describeSecurityStatInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityStatInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceLinkedRoleStatusResponse
     */
    public function describeServiceLinkedRoleStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeServiceLinkedRoleStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceLinkedRoleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeServiceLinkedRoleStatusResponse
     */
    public function describeServiceLinkedRoleStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceLinkedRoleStatusWithOptions($runtime);
    }

    /**
     * @param DescribeSimilarEventScenariosRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSimilarEventScenariosResponse
     */
    public function describeSimilarEventScenariosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityEventId)) {
            $query['SecurityEventId'] = $request->securityEventId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSimilarEventScenarios',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSimilarEventScenariosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSimilarEventScenariosRequest $request
     *
     * @return DescribeSimilarEventScenariosResponse
     */
    public function describeSimilarEventScenarios($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimilarEventScenariosWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSimilarSecurityEventsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSimilarSecurityEventsResponse
     */
    public function describeSimilarSecurityEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSimilarSecurityEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSimilarSecurityEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSimilarSecurityEventsRequest $request
     *
     * @return DescribeSimilarSecurityEventsResponse
     */
    public function describeSimilarSecurityEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimilarSecurityEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStrategyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeStrategyResponse
     */
    public function describeStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customType)) {
            $query['CustomType'] = $request->customType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->strategyIds)) {
            $query['StrategyIds'] = $request->strategyIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStrategy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStrategyRequest $request
     *
     * @return DescribeStrategyResponse
     */
    public function describeStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStrategyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStrategyDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeStrategyDetailResponse
     */
    public function describeStrategyDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStrategyDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStrategyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStrategyDetailRequest $request
     *
     * @return DescribeStrategyDetailResponse
     */
    public function describeStrategyDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStrategyDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStrategyExecDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeStrategyExecDetailResponse
     */
    public function describeStrategyExecDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStrategyExecDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStrategyExecDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStrategyExecDetailRequest $request
     *
     * @return DescribeStrategyExecDetailResponse
     */
    public function describeStrategyExecDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStrategyExecDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStrategyTargetRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeStrategyTargetResponse
     */
    public function describeStrategyTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStrategyTarget',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStrategyTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStrategyTargetRequest $request
     *
     * @return DescribeStrategyTargetResponse
     */
    public function describeStrategyTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStrategyTargetWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSummaryInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSummaryInfoResponse
     */
    public function describeSummaryInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceDirectoryAccountId)) {
            $query['ResourceDirectoryAccountId'] = $request->resourceDirectoryAccountId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSummaryInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSummaryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSummaryInfoRequest $request
     *
     * @return DescribeSummaryInfoResponse
     */
    public function describeSummaryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSummaryInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSupportRegionResponse
     */
    public function describeSupportRegionWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeSupportRegion',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupportRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeSupportRegionResponse
     */
    public function describeSupportRegion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportRegionWithOptions($runtime);
    }

    /**
     * @param DescribeSuspEventDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSuspEventDetailResponse
     */
    public function describeSuspEventDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->suspiciousEventId)) {
            $query['SuspiciousEventId'] = $request->suspiciousEventId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSuspEventDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSuspEventDetailRequest $request
     *
     * @return DescribeSuspEventDetailResponse
     */
    public function describeSuspEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSuspEventQuaraFilesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSuspEventQuaraFilesResponse
     */
    public function describeSuspEventQuaraFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupingId)) {
            $query['GroupingId'] = $request->groupingId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->quaraTag)) {
            $query['QuaraTag'] = $request->quaraTag;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSuspEventQuaraFiles',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspEventQuaraFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSuspEventQuaraFilesRequest $request
     *
     * @return DescribeSuspEventQuaraFilesResponse
     */
    public function describeSuspEventQuaraFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventQuaraFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSuspEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmUniqueInfo)) {
            $query['AlarmUniqueInfo'] = $request->alarmUniqueInfo;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->containerFieldName)) {
            $query['ContainerFieldName'] = $request->containerFieldName;
        }
        if (!Utils::isUnset($request->containerFieldValue)) {
            $query['ContainerFieldValue'] = $request->containerFieldValue;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->eventNames)) {
            $query['EventNames'] = $request->eventNames;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->levels)) {
            $query['Levels'] = $request->levels;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operateErrorCodeList)) {
            $query['OperateErrorCodeList'] = $request->operateErrorCodeList;
        }
        if (!Utils::isUnset($request->operateTimeEnd)) {
            $query['OperateTimeEnd'] = $request->operateTimeEnd;
        }
        if (!Utils::isUnset($request->operateTimeStart)) {
            $query['OperateTimeStart'] = $request->operateTimeStart;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentEventTypes)) {
            $query['ParentEventTypes'] = $request->parentEventTypes;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->timeEnd)) {
            $query['TimeEnd'] = $request->timeEnd;
        }
        if (!Utils::isUnset($request->timeStart)) {
            $query['TimeStart'] = $request->timeStart;
        }
        if (!Utils::isUnset($request->uniqueInfo)) {
            $query['UniqueInfo'] = $request->uniqueInfo;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $body = [];
        if (!Utils::isUnset($request->tacticId)) {
            $body['TacticId'] = $request->tacticId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSuspEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSuspEventsRequest $request
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSuspiciousOverallConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSuspiciousOverallConfigResponse
     */
    public function describeSuspiciousOverallConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSuspiciousOverallConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspiciousOverallConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSuspiciousOverallConfigRequest $request
     *
     * @return DescribeSuspiciousOverallConfigResponse
     */
    public function describeSuspiciousOverallConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspiciousOverallConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSuspiciousUUIDConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSuspiciousUUIDConfigResponse
     */
    public function describeSuspiciousUUIDConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSuspiciousUUIDConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspiciousUUIDConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSuspiciousUUIDConfigRequest $request
     *
     * @return DescribeSuspiciousUUIDConfigResponse
     */
    public function describeSuspiciousUUIDConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspiciousUUIDConfigWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserBackupMachinesResponse
     */
    public function describeUserBackupMachinesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeUserBackupMachines',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserBackupMachinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeUserBackupMachinesResponse
     */
    public function describeUserBackupMachines()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBackupMachinesWithOptions($runtime);
    }

    /**
     * @param DescribeUserBaselineAuthorizationRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeUserBaselineAuthorizationResponse
     */
    public function describeUserBaselineAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserBaselineAuthorization',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserBaselineAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserBaselineAuthorizationRequest $request
     *
     * @return DescribeUserBaselineAuthorizationResponse
     */
    public function describeUserBaselineAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBaselineAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserLayoutAuthorizationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeUserLayoutAuthorizationResponse
     */
    public function describeUserLayoutAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserLayoutAuthorization',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserLayoutAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserLayoutAuthorizationRequest $request
     *
     * @return DescribeUserLayoutAuthorizationResponse
     */
    public function describeUserLayoutAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserLayoutAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUuidsByVulNamesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeUuidsByVulNamesResponse
     */
    public function describeUuidsByVulNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $query['FieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['FieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->searchTags)) {
            $query['SearchTags'] = $request->searchTags;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vpcInstanceIds)) {
            $query['VpcInstanceIds'] = $request->vpcInstanceIds;
        }
        if (!Utils::isUnset($request->vulNames)) {
            $query['VulNames'] = $request->vulNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUuidsByVulNames',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUuidsByVulNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUuidsByVulNamesRequest $request
     *
     * @return DescribeUuidsByVulNamesResponse
     */
    public function describeUuidsByVulNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUuidsByVulNamesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeVendorListResponse
     */
    public function describeVendorListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeVendorList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVendorListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeVendorListResponse
     */
    public function describeVendorList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVendorListWithOptions($runtime);
    }

    /**
     * @param DescribeVersionConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVersionConfigResponse
     */
    public function describeVersionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceDirectoryAccountId)) {
            $query['ResourceDirectoryAccountId'] = $request->resourceDirectoryAccountId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVersionConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVersionConfigRequest $request
     *
     * @return DescribeVersionConfigResponse
     */
    public function describeVersionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVersionConfigWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeVpcHoneyPotCriteriaResponse
     */
    public function describeVpcHoneyPotCriteriaWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeVpcHoneyPotCriteria',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcHoneyPotCriteriaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeVpcHoneyPotCriteriaResponse
     */
    public function describeVpcHoneyPotCriteria()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcHoneyPotCriteriaWithOptions($runtime);
    }

    /**
     * @param DescribeVpcHoneyPotListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVpcHoneyPotListResponse
     */
    public function describeVpcHoneyPotListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->honeyPotExistence)) {
            $query['HoneyPotExistence'] = $request->honeyPotExistence;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcName)) {
            $query['VpcName'] = $request->vpcName;
        }
        if (!Utils::isUnset($request->vpcRegionId)) {
            $query['VpcRegionId'] = $request->vpcRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVpcHoneyPotList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcHoneyPotListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVpcHoneyPotListRequest $request
     *
     * @return DescribeVpcHoneyPotListResponse
     */
    public function describeVpcHoneyPotList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcHoneyPotListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeVpcListResponse
     */
    public function describeVpcListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeVpcList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVpcListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeVpcListResponse
     */
    public function describeVpcList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcListWithOptions($runtime);
    }

    /**
     * @param DescribeVulDetailsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeVulDetailsResponse
     */
    public function describeVulDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulDetails',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulDetailsRequest $request
     *
     * @return DescribeVulDetailsResponse
     */
    public function describeVulDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulExportInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVulExportInfoResponse
     */
    public function describeVulExportInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exportId)) {
            $query['ExportId'] = $request->exportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulExportInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulExportInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulExportInfoRequest $request
     *
     * @return DescribeVulExportInfoResponse
     */
    public function describeVulExportInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulExportInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeVulListResponse
     */
    public function describeVulListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->attachTypes)) {
            $query['AttachTypes'] = $request->attachTypes;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        if (!Utils::isUnset($request->vpcInstanceIds)) {
            $query['VpcInstanceIds'] = $request->vpcInstanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulListRequest $request
     *
     * @return DescribeVulListResponse
     */
    public function describeVulList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVulWhitelistResponse
     */
    public function describeVulWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulWhitelist',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulWhitelistRequest $request
     *
     * @return DescribeVulWhitelistResponse
     */
    public function describeVulWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWarningExportInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeWarningExportInfoResponse
     */
    public function describeWarningExportInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exportId)) {
            $query['ExportId'] = $request->exportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWarningExportInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWarningExportInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWarningExportInfoRequest $request
     *
     * @return DescribeWarningExportInfoResponse
     */
    public function describeWarningExportInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWarningExportInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWarningMachinesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWarningMachinesResponse
     */
    public function describeWarningMachinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->containerFieldName)) {
            $query['ContainerFieldName'] = $request->containerFieldName;
        }
        if (!Utils::isUnset($request->containerFieldValue)) {
            $query['ContainerFieldValue'] = $request->containerFieldValue;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->machineName)) {
            $query['MachineName'] = $request->machineName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskId)) {
            $query['RiskId'] = $request->riskId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWarningMachines',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWarningMachinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWarningMachinesRequest $request
     *
     * @return DescribeWarningMachinesResponse
     */
    public function describeWarningMachines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWarningMachinesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebLockBindListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWebLockBindListResponse
     */
    public function describeWebLockBindListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebLockBindList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockBindListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebLockBindListRequest $request
     *
     * @return DescribeWebLockBindListResponse
     */
    public function describeWebLockBindList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockBindListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebLockConfigListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeWebLockConfigListResponse
     */
    public function describeWebLockConfigListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebLockConfigList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebLockConfigListRequest $request
     *
     * @return DescribeWebLockConfigListResponse
     */
    public function describeWebLockConfigList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockConfigListWithOptions($request, $runtime);
    }

    /**
     * @param ExportRecordRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExportRecordResponse
     */
    public function exportRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exportType)) {
            $query['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportRecord',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportRecordRequest $request
     *
     * @return ExportRecordResponse
     */
    public function exportRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportRecordWithOptions($request, $runtime);
    }

    /**
     * @param ExportVulRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ExportVulResponse
     */
    public function exportVulWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->attachTypes)) {
            $query['AttachTypes'] = $request->attachTypes;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->searchTags)) {
            $query['SearchTags'] = $request->searchTags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        if (!Utils::isUnset($request->vpcInstanceIds)) {
            $query['VpcInstanceIds'] = $request->vpcInstanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportVul',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportVulResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportVulRequest $request
     *
     * @return ExportVulResponse
     */
    public function exportVul($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportVulWithOptions($request, $runtime);
    }

    /**
     * @param ExportWarningRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ExportWarningResponse
     */
    public function exportWarningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->exportType)) {
            $query['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->isCleartextPwd)) {
            $query['IsCleartextPwd'] = $request->isCleartextPwd;
        }
        if (!Utils::isUnset($request->isSummaryExport)) {
            $query['IsSummaryExport'] = $request->isSummaryExport;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->riskIds)) {
            $query['RiskIds'] = $request->riskIds;
        }
        if (!Utils::isUnset($request->riskLevels)) {
            $query['RiskLevels'] = $request->riskLevels;
        }
        if (!Utils::isUnset($request->riskName)) {
            $query['RiskName'] = $request->riskName;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        if (!Utils::isUnset($request->subTypeNames)) {
            $query['SubTypeNames'] = $request->subTypeNames;
        }
        if (!Utils::isUnset($request->typeName)) {
            $query['TypeName'] = $request->typeName;
        }
        if (!Utils::isUnset($request->typeNames)) {
            $query['TypeNames'] = $request->typeNames;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportWarning',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportWarningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportWarningRequest $request
     *
     * @return ExportWarningResponse
     */
    public function exportWarning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportWarningWithOptions($request, $runtime);
    }

    /**
     * @param FixCheckWarningsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FixCheckWarningsResponse
     */
    public function fixCheckWarningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkParams)) {
            $query['CheckParams'] = $request->checkParams;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->riskId)) {
            $query['RiskId'] = $request->riskId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FixCheckWarnings',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FixCheckWarningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FixCheckWarningsRequest $request
     *
     * @return FixCheckWarningsResponse
     */
    public function fixCheckWarnings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fixCheckWarningsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetBackupStorageCountResponse
     */
    public function getBackupStorageCountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetBackupStorageCount',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBackupStorageCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetBackupStorageCountResponse
     */
    public function getBackupStorageCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupStorageCountWithOptions($runtime);
    }

    /**
     * @param GetCheckDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCheckDetailResponse
     */
    public function getCheckDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCheckDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCheckDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCheckDetailRequest $request
     *
     * @return GetCheckDetailResponse
     */
    public function getCheckDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCheckDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetFileDetectResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetFileDetectResultResponse
     */
    public function getFileDetectResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hashKeyList)) {
            $query['HashKeyList'] = $request->hashKeyList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFileDetectResult',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileDetectResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFileDetectResultRequest $request
     *
     * @return GetFileDetectResultResponse
     */
    public function getFileDetectResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileDetectResultWithOptions($request, $runtime);
    }

    /**
     * @param GetSuspiciousStatisticsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSuspiciousStatisticsResponse
     */
    public function getSuspiciousStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupIdList)) {
            $query['GroupIdList'] = $request->groupIdList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSuspiciousStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSuspiciousStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSuspiciousStatisticsRequest $request
     *
     * @return GetSuspiciousStatisticsResponse
     */
    public function getSuspiciousStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSuspiciousStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetVulStatisticsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVulStatisticsResponse
     */
    public function getVulStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupIdList)) {
            $query['GroupIdList'] = $request->groupIdList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->typeList)) {
            $query['TypeList'] = $request->typeList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVulStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVulStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVulStatisticsRequest $request
     *
     * @return GetVulStatisticsResponse
     */
    public function getVulStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param HandleSecurityEventsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return HandleSecurityEventsResponse
     */
    public function handleSecurityEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->markBatch)) {
            $query['MarkBatch'] = $request->markBatch;
        }
        if (!Utils::isUnset($request->markMissParam)) {
            $query['MarkMissParam'] = $request->markMissParam;
        }
        if (!Utils::isUnset($request->operationCode)) {
            $query['OperationCode'] = $request->operationCode;
        }
        if (!Utils::isUnset($request->operationParams)) {
            $query['OperationParams'] = $request->operationParams;
        }
        if (!Utils::isUnset($request->securityEventIds)) {
            $query['SecurityEventIds'] = $request->securityEventIds;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HandleSecurityEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HandleSecurityEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HandleSecurityEventsRequest $request
     *
     * @return HandleSecurityEventsResponse
     */
    public function handleSecurityEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleSecurityEventsWithOptions($request, $runtime);
    }

    /**
     * @param HandleSimilarSecurityEventsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return HandleSimilarSecurityEventsResponse
     */
    public function handleSimilarSecurityEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->markMissParam)) {
            $query['MarkMissParam'] = $request->markMissParam;
        }
        if (!Utils::isUnset($request->operationCode)) {
            $query['OperationCode'] = $request->operationCode;
        }
        if (!Utils::isUnset($request->operationParams)) {
            $query['OperationParams'] = $request->operationParams;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HandleSimilarSecurityEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HandleSimilarSecurityEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HandleSimilarSecurityEventsRequest $request
     *
     * @return HandleSimilarSecurityEventsResponse
     */
    public function handleSimilarSecurityEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleSimilarSecurityEventsWithOptions($request, $runtime);
    }

    /**
     * @param IgnoreHcCheckWarningsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return IgnoreHcCheckWarningsResponse
     */
    public function ignoreHcCheckWarningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkIds)) {
            $query['CheckIds'] = $request->checkIds;
        }
        if (!Utils::isUnset($request->checkWarningIds)) {
            $query['CheckWarningIds'] = $request->checkWarningIds;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->riskId)) {
            $query['RiskId'] = $request->riskId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IgnoreHcCheckWarnings',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IgnoreHcCheckWarningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IgnoreHcCheckWarningsRequest $request
     *
     * @return IgnoreHcCheckWarningsResponse
     */
    public function ignoreHcCheckWarnings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreHcCheckWarningsWithOptions($request, $runtime);
    }

    /**
     * @param InstallBackupClientRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return InstallBackupClientResponse
     */
    public function installBackupClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyVersion)) {
            $query['PolicyVersion'] = $request->policyVersion;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallBackupClient',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallBackupClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallBackupClientRequest $request
     *
     * @return InstallBackupClientResponse
     */
    public function installBackupClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installBackupClientWithOptions($request, $runtime);
    }

    /**
     * @param InstallCloudMonitorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return InstallCloudMonitorResponse
     */
    public function installCloudMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentAccessKey)) {
            $query['AgentAccessKey'] = $request->agentAccessKey;
        }
        if (!Utils::isUnset($request->agentSecretKey)) {
            $query['AgentSecretKey'] = $request->agentSecretKey;
        }
        if (!Utils::isUnset($request->argusVersion)) {
            $query['ArgusVersion'] = $request->argusVersion;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallCloudMonitor',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallCloudMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallCloudMonitorRequest $request
     *
     * @return InstallCloudMonitorResponse
     */
    public function installCloudMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudMonitorWithOptions($request, $runtime);
    }

    /**
     * @param ListCheckInstanceResultRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListCheckInstanceResultResponse
     */
    public function listCheckInstanceResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceIdKey)) {
            $query['InstanceIdKey'] = $request->instanceIdKey;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceNameKey)) {
            $query['InstanceNameKey'] = $request->instanceNameKey;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionIdKey)) {
            $query['RegionIdKey'] = $request->regionIdKey;
        }
        if (!Utils::isUnset($request->sortTypes)) {
            $query['SortTypes'] = $request->sortTypes;
        }
        if (!Utils::isUnset($request->statuses)) {
            $query['Statuses'] = $request->statuses;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCheckInstanceResult',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCheckInstanceResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCheckInstanceResultRequest $request
     *
     * @return ListCheckInstanceResultResponse
     */
    public function listCheckInstanceResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCheckInstanceResultWithOptions($request, $runtime);
    }

    /**
     * @param ListCheckResultRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCheckResultResponse
     */
    public function listCheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkKey)) {
            $query['CheckKey'] = $request->checkKey;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->requirementIds)) {
            $query['RequirementIds'] = $request->requirementIds;
        }
        if (!Utils::isUnset($request->riskLevels)) {
            $query['RiskLevels'] = $request->riskLevels;
        }
        if (!Utils::isUnset($request->sortTypes)) {
            $query['SortTypes'] = $request->sortTypes;
        }
        if (!Utils::isUnset($request->standardIds)) {
            $query['StandardIds'] = $request->standardIds;
        }
        if (!Utils::isUnset($request->statuses)) {
            $query['Statuses'] = $request->statuses;
        }
        if (!Utils::isUnset($request->vendors)) {
            $query['Vendors'] = $request->vendors;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCheckResult',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCheckResultRequest $request
     *
     * @return ListCheckResultResponse
     */
    public function listCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCheckResultWithOptions($request, $runtime);
    }

    /**
     * @param ListVulAutoRepairConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListVulAutoRepairConfigResponse
     */
    public function listVulAutoRepairConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVulAutoRepairConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVulAutoRepairConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVulAutoRepairConfigRequest $request
     *
     * @return ListVulAutoRepairConfigResponse
     */
    public function listVulAutoRepairConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVulAutoRepairConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAntiBruteForceRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAntiBruteForceRuleResponse
     */
    public function modifyAntiBruteForceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defaultRule)) {
            $query['DefaultRule'] = $request->defaultRule;
        }
        if (!Utils::isUnset($request->failCount)) {
            $query['FailCount'] = $request->failCount;
        }
        if (!Utils::isUnset($request->forbiddenTime)) {
            $query['ForbiddenTime'] = $request->forbiddenTime;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->span)) {
            $query['Span'] = $request->span;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAntiBruteForceRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAntiBruteForceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAntiBruteForceRuleRequest $request
     *
     * @return ModifyAntiBruteForceRuleResponse
     */
    public function modifyAntiBruteForceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAntiBruteForceRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAssetGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyAssetGroupResponse
     */
    public function modifyAssetGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAssetGroup',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAssetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAssetGroupRequest $request
     *
     * @return ModifyAssetGroupResponse
     */
    public function modifyAssetGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAssetGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupPolicyRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyBackupPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->policy)) {
            $request->policyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->policy, 'Policy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policyShrink)) {
            $query['Policy'] = $request->policyShrink;
        }
        if (!Utils::isUnset($request->policyRegionId)) {
            $query['PolicyRegionId'] = $request->policyRegionId;
        }
        if (!Utils::isUnset($request->policyVersion)) {
            $query['PolicyVersion'] = $request->policyVersion;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPolicy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBackupPolicyRequest $request
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupPolicyStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyBackupPolicyStatusResponse
     */
    public function modifyBackupPolicyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->policyVersion)) {
            $query['PolicyVersion'] = $request->policyVersion;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBackupPolicyStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBackupPolicyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyBackupPolicyStatusRequest $request
     *
     * @return ModifyBackupPolicyStatusResponse
     */
    public function modifyBackupPolicyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClearLogstoreStorageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClearLogstoreStorageResponse
     */
    public function modifyClearLogstoreStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userLogStore)) {
            $query['UserLogStore'] = $request->userLogStore;
        }
        if (!Utils::isUnset($request->userProject)) {
            $query['UserProject'] = $request->userProject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClearLogstoreStorage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClearLogstoreStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClearLogstoreStorageRequest $request
     *
     * @return ModifyClearLogstoreStorageResponse
     */
    public function modifyClearLogstoreStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClearLogstoreStorageWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCreateVulWhitelistRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyCreateVulWhitelistResponse
     */
    public function modifyCreateVulWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->targetInfo)) {
            $query['TargetInfo'] = $request->targetInfo;
        }
        if (!Utils::isUnset($request->whitelist)) {
            $query['Whitelist'] = $request->whitelist;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCreateVulWhitelist',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCreateVulWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCreateVulWhitelistRequest $request
     *
     * @return ModifyCreateVulWhitelistResponse
     */
    public function modifyCreateVulWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCreateVulWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEmgVulSubmitRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyEmgVulSubmitResponse
     */
    public function modifyEmgVulSubmitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->userAgreement)) {
            $query['UserAgreement'] = $request->userAgreement;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEmgVulSubmit',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEmgVulSubmitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyEmgVulSubmitRequest $request
     *
     * @return ModifyEmgVulSubmitResponse
     */
    public function modifyEmgVulSubmit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEmgVulSubmitWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGroupPropertyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyGroupPropertyResponse
     */
    public function modifyGroupPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGroupProperty',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGroupPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGroupPropertyRequest $request
     *
     * @return ModifyGroupPropertyResponse
     */
    public function modifyGroupProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupPropertyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAntiBruteForceRuleRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyInstanceAntiBruteForceRuleResponse
     */
    public function modifyInstanceAntiBruteForceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newRuleId)) {
            $query['NewRuleId'] = $request->newRuleId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAntiBruteForceRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAntiBruteForceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceAntiBruteForceRuleRequest $request
     *
     * @return ModifyInstanceAntiBruteForceRuleResponse
     */
    public function modifyInstanceAntiBruteForceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAntiBruteForceRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLoginBaseConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyLoginBaseConfigResponse
     */
    public function modifyLoginBaseConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLoginBaseConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLoginBaseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLoginBaseConfigRequest $request
     *
     * @return ModifyLoginBaseConfigResponse
     */
    public function modifyLoginBaseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoginBaseConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLoginSwitchConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyLoginSwitchConfigResponse
     */
    public function modifyLoginSwitchConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->item)) {
            $query['Item'] = $request->item;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLoginSwitchConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLoginSwitchConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLoginSwitchConfigRequest $request
     *
     * @return ModifyLoginSwitchConfigResponse
     */
    public function modifyLoginSwitchConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoginSwitchConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOpenLogShipperRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyOpenLogShipperResponse
     */
    public function modifyOpenLogShipperWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyOpenLogShipper',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOpenLogShipperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyOpenLogShipperRequest $request
     *
     * @return ModifyOpenLogShipperResponse
     */
    public function modifyOpenLogShipper($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOpenLogShipperWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOperateVulRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyOperateVulResponse
     */
    public function modifyOperateVulWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->info)) {
            $query['Info'] = $request->info;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyOperateVul',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOperateVulResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyOperateVulRequest $request
     *
     * @return ModifyOperateVulResponse
     */
    public function modifyOperateVul($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOperateVulWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPropertyScheduleConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyPropertyScheduleConfigResponse
     */
    public function modifyPropertyScheduleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scheduleTime)) {
            $query['ScheduleTime'] = $request->scheduleTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPropertyScheduleConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPropertyScheduleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPropertyScheduleConfigRequest $request
     *
     * @return ModifyPropertyScheduleConfigResponse
     */
    public function modifyPropertyScheduleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPropertyScheduleConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPushAllTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPushAllTaskResponse
     */
    public function modifyPushAllTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tasks)) {
            $query['Tasks'] = $request->tasks;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPushAllTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPushAllTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPushAllTaskRequest $request
     *
     * @return ModifyPushAllTaskResponse
     */
    public function modifyPushAllTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPushAllTaskWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRiskCheckStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyRiskCheckStatusResponse
     */
    public function modifyRiskCheckStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRiskCheckStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRiskCheckStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRiskCheckStatusRequest $request
     *
     * @return ModifyRiskCheckStatusResponse
     */
    public function modifyRiskCheckStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRiskCheckStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRiskSingleResultStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyRiskSingleResultStatusResponse
     */
    public function modifyRiskSingleResultStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRiskSingleResultStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRiskSingleResultStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRiskSingleResultStatusRequest $request
     *
     * @return ModifyRiskSingleResultStatusResponse
     */
    public function modifyRiskSingleResultStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRiskSingleResultStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityCheckScheduleConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifySecurityCheckScheduleConfigResponse
     */
    public function modifySecurityCheckScheduleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->daysOfWeek)) {
            $query['DaysOfWeek'] = $request->daysOfWeek;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityCheckScheduleConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityCheckScheduleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySecurityCheckScheduleConfigRequest $request
     *
     * @return ModifySecurityCheckScheduleConfigResponse
     */
    public function modifySecurityCheckScheduleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityCheckScheduleConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyStartVulScanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyStartVulScanResponse
     */
    public function modifyStartVulScanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStartVulScan',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStartVulScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyStartVulScanRequest $request
     *
     * @return ModifyStartVulScanResponse
     */
    public function modifyStartVulScan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStartVulScanWithOptions($request, $runtime);
    }

    /**
     * @param ModifyStrategyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyStrategyResponse
     */
    public function modifyStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customType)) {
            $query['CustomType'] = $request->customType;
        }
        if (!Utils::isUnset($request->cycleDays)) {
            $query['CycleDays'] = $request->cycleDays;
        }
        if (!Utils::isUnset($request->cycleStartTime)) {
            $query['CycleStartTime'] = $request->cycleStartTime;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->riskCustomParams)) {
            $query['RiskCustomParams'] = $request->riskCustomParams;
        }
        if (!Utils::isUnset($request->riskSubTypeName)) {
            $query['RiskSubTypeName'] = $request->riskSubTypeName;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStrategy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyStrategyRequest $request
     *
     * @return ModifyStrategyResponse
     */
    public function modifyStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStrategyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyStrategyTargetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyStrategyTargetResponse
     */
    public function modifyStrategyTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyStrategyTarget',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyStrategyTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyStrategyTargetRequest $request
     *
     * @return ModifyStrategyTargetResponse
     */
    public function modifyStrategyTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyStrategyTargetWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTagWithUuidRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyTagWithUuidResponse
     */
    public function modifyTagWithUuidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->machineTypes)) {
            $query['MachineTypes'] = $request->machineTypes;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['TagList'] = $request->tagList;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTagWithUuid',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTagWithUuidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTagWithUuidRequest $request
     *
     * @return ModifyTagWithUuidResponse
     */
    public function modifyTagWithUuid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTagWithUuidWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVpcHoneyPotRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyVpcHoneyPotResponse
     */
    public function modifyVpcHoneyPotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->honeyPotAction)) {
            $query['HoneyPotAction'] = $request->honeyPotAction;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcHoneyPot',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVpcHoneyPotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVpcHoneyPotRequest $request
     *
     * @return ModifyVpcHoneyPotResponse
     */
    public function modifyVpcHoneyPot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcHoneyPotWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVulTargetConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyVulTargetConfigResponse
     */
    public function modifyVulTargetConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVulTargetConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVulTargetConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVulTargetConfigRequest $request
     *
     * @return ModifyVulTargetConfigResponse
     */
    public function modifyVulTargetConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVulTargetConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebLockCreateConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyWebLockCreateConfigResponse
     */
    public function modifyWebLockCreateConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenceMode)) {
            $query['DefenceMode'] = $request->defenceMode;
        }
        if (!Utils::isUnset($request->dir)) {
            $query['Dir'] = $request->dir;
        }
        if (!Utils::isUnset($request->exclusiveDir)) {
            $query['ExclusiveDir'] = $request->exclusiveDir;
        }
        if (!Utils::isUnset($request->exclusiveFile)) {
            $query['ExclusiveFile'] = $request->exclusiveFile;
        }
        if (!Utils::isUnset($request->exclusiveFileType)) {
            $query['ExclusiveFileType'] = $request->exclusiveFileType;
        }
        if (!Utils::isUnset($request->inclusiveFile)) {
            $query['InclusiveFile'] = $request->inclusiveFile;
        }
        if (!Utils::isUnset($request->inclusiveFileType)) {
            $query['InclusiveFileType'] = $request->inclusiveFileType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->localBackupDir)) {
            $query['LocalBackupDir'] = $request->localBackupDir;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebLockCreateConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebLockCreateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWebLockCreateConfigRequest $request
     *
     * @return ModifyWebLockCreateConfigResponse
     */
    public function modifyWebLockCreateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebLockCreateConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebLockDeleteConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyWebLockDeleteConfigResponse
     */
    public function modifyWebLockDeleteConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebLockDeleteConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebLockDeleteConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWebLockDeleteConfigRequest $request
     *
     * @return ModifyWebLockDeleteConfigResponse
     */
    public function modifyWebLockDeleteConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebLockDeleteConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebLockStartRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyWebLockStartResponse
     */
    public function modifyWebLockStartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenceMode)) {
            $query['DefenceMode'] = $request->defenceMode;
        }
        if (!Utils::isUnset($request->dir)) {
            $query['Dir'] = $request->dir;
        }
        if (!Utils::isUnset($request->exclusiveDir)) {
            $query['ExclusiveDir'] = $request->exclusiveDir;
        }
        if (!Utils::isUnset($request->exclusiveFile)) {
            $query['ExclusiveFile'] = $request->exclusiveFile;
        }
        if (!Utils::isUnset($request->exclusiveFileType)) {
            $query['ExclusiveFileType'] = $request->exclusiveFileType;
        }
        if (!Utils::isUnset($request->inclusiveFileType)) {
            $query['InclusiveFileType'] = $request->inclusiveFileType;
        }
        if (!Utils::isUnset($request->localBackupDir)) {
            $query['LocalBackupDir'] = $request->localBackupDir;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebLockStart',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebLockStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWebLockStartRequest $request
     *
     * @return ModifyWebLockStartResponse
     */
    public function modifyWebLockStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebLockStartWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebLockStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyWebLockStatusResponse
     */
    public function modifyWebLockStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebLockStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebLockStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWebLockStatusRequest $request
     *
     * @return ModifyWebLockStatusResponse
     */
    public function modifyWebLockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebLockStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebLockUpdateConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyWebLockUpdateConfigResponse
     */
    public function modifyWebLockUpdateConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenceMode)) {
            $query['DefenceMode'] = $request->defenceMode;
        }
        if (!Utils::isUnset($request->dir)) {
            $query['Dir'] = $request->dir;
        }
        if (!Utils::isUnset($request->exclusiveDir)) {
            $query['ExclusiveDir'] = $request->exclusiveDir;
        }
        if (!Utils::isUnset($request->exclusiveFile)) {
            $query['ExclusiveFile'] = $request->exclusiveFile;
        }
        if (!Utils::isUnset($request->exclusiveFileType)) {
            $query['ExclusiveFileType'] = $request->exclusiveFileType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->inclusiveFile)) {
            $query['InclusiveFile'] = $request->inclusiveFile;
        }
        if (!Utils::isUnset($request->inclusiveFileType)) {
            $query['InclusiveFileType'] = $request->inclusiveFileType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->localBackupDir)) {
            $query['LocalBackupDir'] = $request->localBackupDir;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWebLockUpdateConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebLockUpdateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWebLockUpdateConfigRequest $request
     *
     * @return ModifyWebLockUpdateConfigResponse
     */
    public function modifyWebLockUpdateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebLockUpdateConfigWithOptions($request, $runtime);
    }

    /**
     * @param OperateAgentClientInstallRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return OperateAgentClientInstallResponse
     */
    public function operateAgentClientInstallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateAgentClientInstall',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateAgentClientInstallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateAgentClientInstallRequest $request
     *
     * @return OperateAgentClientInstallResponse
     */
    public function operateAgentClientInstall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAgentClientInstallWithOptions($request, $runtime);
    }

    /**
     * @param OperateCommonOverallConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return OperateCommonOverallConfigResponse
     */
    public function operateCommonOverallConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateCommonOverallConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateCommonOverallConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateCommonOverallConfigRequest $request
     *
     * @return OperateCommonOverallConfigResponse
     */
    public function operateCommonOverallConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateCommonOverallConfigWithOptions($request, $runtime);
    }

    /**
     * @param OperateSuspiciousOverallConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return OperateSuspiciousOverallConfigResponse
     */
    public function operateSuspiciousOverallConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->noTargetAsOn)) {
            $query['NoTargetAsOn'] = $request->noTargetAsOn;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateSuspiciousOverallConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateSuspiciousOverallConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateSuspiciousOverallConfigRequest $request
     *
     * @return OperateSuspiciousOverallConfigResponse
     */
    public function operateSuspiciousOverallConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateSuspiciousOverallConfigWithOptions($request, $runtime);
    }

    /**
     * @param OperateSuspiciousTargetConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return OperateSuspiciousTargetConfigResponse
     */
    public function operateSuspiciousTargetConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->targetOperations)) {
            $query['TargetOperations'] = $request->targetOperations;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateSuspiciousTargetConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateSuspiciousTargetConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateSuspiciousTargetConfigRequest $request
     *
     * @return OperateSuspiciousTargetConfigResponse
     */
    public function operateSuspiciousTargetConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateSuspiciousTargetConfigWithOptions($request, $runtime);
    }

    /**
     * @param OperateVulsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return OperateVulsResponse
     */
    public function operateVulsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        if (!Utils::isUnset($request->vulNames)) {
            $query['VulNames'] = $request->vulNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateVuls',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateVulsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateVulsRequest $request
     *
     * @return OperateVulsResponse
     */
    public function operateVuls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateVulsWithOptions($request, $runtime);
    }

    /**
     * @param OperationCancelIgnoreSuspEventRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return OperationCancelIgnoreSuspEventResponse
     */
    public function operationCancelIgnoreSuspEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityEventIds)) {
            $query['SecurityEventIds'] = $request->securityEventIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperationCancelIgnoreSuspEvent',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperationCancelIgnoreSuspEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperationCancelIgnoreSuspEventRequest $request
     *
     * @return OperationCancelIgnoreSuspEventResponse
     */
    public function operationCancelIgnoreSuspEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operationCancelIgnoreSuspEventWithOptions($request, $runtime);
    }

    /**
     * @param OperationSuspEventsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OperationSuspEventsResponse
     */
    public function operationSuspEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->subOperation)) {
            $query['SubOperation'] = $request->subOperation;
        }
        if (!Utils::isUnset($request->suspiciousEventIds)) {
            $query['SuspiciousEventIds'] = $request->suspiciousEventIds;
        }
        if (!Utils::isUnset($request->warnType)) {
            $query['WarnType'] = $request->warnType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperationSuspEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperationSuspEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperationSuspEventsRequest $request
     *
     * @return OperationSuspEventsResponse
     */
    public function operationSuspEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operationSuspEventsWithOptions($request, $runtime);
    }

    /**
     * @param PauseClientRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return PauseClientResponse
     */
    public function pauseClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PauseClient',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PauseClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PauseClientRequest $request
     *
     * @return PauseClientResponse
     */
    public function pauseClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseClientWithOptions($request, $runtime);
    }

    /**
     * @param PublicCreateImageScanTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PublicCreateImageScanTaskResponse
     */
    public function publicCreateImageScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->digests)) {
            $query['Digests'] = $request->digests;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->regionIds)) {
            $query['RegionIds'] = $request->regionIds;
        }
        if (!Utils::isUnset($request->registryTypes)) {
            $query['RegistryTypes'] = $request->registryTypes;
        }
        if (!Utils::isUnset($request->repoIds)) {
            $query['RepoIds'] = $request->repoIds;
        }
        if (!Utils::isUnset($request->repoNames)) {
            $query['RepoNames'] = $request->repoNames;
        }
        if (!Utils::isUnset($request->repoNamespaces)) {
            $query['RepoNamespaces'] = $request->repoNamespaces;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublicCreateImageScanTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublicCreateImageScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublicCreateImageScanTaskRequest $request
     *
     * @return PublicCreateImageScanTaskResponse
     */
    public function publicCreateImageScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publicCreateImageScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param PublicPreCheckImageScanTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PublicPreCheckImageScanTaskResponse
     */
    public function publicPreCheckImageScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->digests)) {
            $query['Digests'] = $request->digests;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->regionIds)) {
            $query['RegionIds'] = $request->regionIds;
        }
        if (!Utils::isUnset($request->registryTypes)) {
            $query['RegistryTypes'] = $request->registryTypes;
        }
        if (!Utils::isUnset($request->repoIds)) {
            $query['RepoIds'] = $request->repoIds;
        }
        if (!Utils::isUnset($request->repoNames)) {
            $query['RepoNames'] = $request->repoNames;
        }
        if (!Utils::isUnset($request->repoNamespaces)) {
            $query['RepoNamespaces'] = $request->repoNamespaces;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublicPreCheckImageScanTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublicPreCheckImageScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublicPreCheckImageScanTaskRequest $request
     *
     * @return PublicPreCheckImageScanTaskResponse
     */
    public function publicPreCheckImageScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publicPreCheckImageScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param PublicSyncAndCreateImageScanTaskRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PublicSyncAndCreateImageScanTaskResponse
     */
    public function publicSyncAndCreateImageScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->images)) {
            $query['Images'] = $request->images;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublicSyncAndCreateImageScanTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublicSyncAndCreateImageScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublicSyncAndCreateImageScanTaskRequest $request
     *
     * @return PublicSyncAndCreateImageScanTaskResponse
     */
    public function publicSyncAndCreateImageScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publicSyncAndCreateImageScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param QueryGroupIdByGroupNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryGroupIdByGroupNameResponse
     */
    public function queryGroupIdByGroupNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGroupIdByGroupName',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGroupIdByGroupNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGroupIdByGroupNameRequest $request
     *
     * @return QueryGroupIdByGroupNameResponse
     */
    public function queryGroupIdByGroupName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGroupIdByGroupNameWithOptions($request, $runtime);
    }

    /**
     * @param QueryGroupedSecurityEventMarkMissListRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return QueryGroupedSecurityEventMarkMissListResponse
     */
    public function queryGroupedSecurityEventMarkMissListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->disposalWay)) {
            $query['DisposalWay'] = $request->disposalWay;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->eventName)) {
            $body['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->lang)) {
            $body['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryGroupedSecurityEventMarkMissList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGroupedSecurityEventMarkMissListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGroupedSecurityEventMarkMissListRequest $request
     *
     * @return QueryGroupedSecurityEventMarkMissListResponse
     */
    public function queryGroupedSecurityEventMarkMissList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGroupedSecurityEventMarkMissListWithOptions($request, $runtime);
    }

    /**
     * @param RebootMachineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RebootMachineResponse
     */
    public function rebootMachineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootMachine',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebootMachineRequest $request
     *
     * @return RebootMachineResponse
     */
    public function rebootMachine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootMachineWithOptions($request, $runtime);
    }

    /**
     * @param RefreshAssetsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RefreshAssetsResponse
     */
    public function refreshAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetType)) {
            $query['AssetType'] = $request->assetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshAssets',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshAssetsRequest $request
     *
     * @return RefreshAssetsResponse
     */
    public function refreshAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAssetsWithOptions($request, $runtime);
    }

    /**
     * @param RefreshContainerAssetsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RefreshContainerAssetsResponse
     */
    public function refreshContainerAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetType)) {
            $query['AssetType'] = $request->assetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshContainerAssets',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshContainerAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshContainerAssetsRequest $request
     *
     * @return RefreshContainerAssetsResponse
     */
    public function refreshContainerAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshContainerAssetsWithOptions($request, $runtime);
    }

    /**
     * @param RollbackSuspEventQuaraFileRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RollbackSuspEventQuaraFileResponse
     */
    public function rollbackSuspEventQuaraFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->quaraFileId)) {
            $query['QuaraFileId'] = $request->quaraFileId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackSuspEventQuaraFile',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackSuspEventQuaraFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackSuspEventQuaraFileRequest $request
     *
     * @return RollbackSuspEventQuaraFileResponse
     */
    public function rollbackSuspEventQuaraFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackSuspEventQuaraFileWithOptions($request, $runtime);
    }

    /**
     * @param SasInstallCodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SasInstallCodeResponse
     */
    public function sasInstallCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SasInstallCode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SasInstallCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SasInstallCodeRequest $request
     *
     * @return SasInstallCodeResponse
     */
    public function sasInstallCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sasInstallCodeWithOptions($request, $runtime);
    }

    /**
     * @param StartBaselineSecurityCheckRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return StartBaselineSecurityCheckResponse
     */
    public function startBaselineSecurityCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->itemIds)) {
            $query['ItemIds'] = $request->itemIds;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartBaselineSecurityCheck',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartBaselineSecurityCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartBaselineSecurityCheckRequest $request
     *
     * @return StartBaselineSecurityCheckResponse
     */
    public function startBaselineSecurityCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBaselineSecurityCheckWithOptions($request, $runtime);
    }

    /**
     * @param StartVirusScanTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartVirusScanTaskResponse
     */
    public function startVirusScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetInfo)) {
            $query['TargetInfo'] = $request->targetInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartVirusScanTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartVirusScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartVirusScanTaskRequest $request
     *
     * @return StartVirusScanTaskResponse
     */
    public function startVirusScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startVirusScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param UnbindAegisRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnbindAegisResponse
     */
    public function unbindAegisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindAegis',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindAegisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindAegisRequest $request
     *
     * @return UnbindAegisResponse
     */
    public function unbindAegis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAegisWithOptions($request, $runtime);
    }

    /**
     * @param UninstallBackupClientRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UninstallBackupClientResponse
     */
    public function uninstallBackupClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyVersion)) {
            $query['PolicyVersion'] = $request->policyVersion;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UninstallBackupClient',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UninstallBackupClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UninstallBackupClientRequest $request
     *
     * @return UninstallBackupClientResponse
     */
    public function uninstallBackupClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallBackupClientWithOptions($request, $runtime);
    }

    /**
     * @param ValidateHcWarningsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ValidateHcWarningsResponse
     */
    public function validateHcWarningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->riskIds)) {
            $query['RiskIds'] = $request->riskIds;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateHcWarnings',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateHcWarningsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateHcWarningsRequest $request
     *
     * @return ValidateHcWarningsResponse
     */
    public function validateHcWarnings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateHcWarningsWithOptions($request, $runtime);
    }
}
