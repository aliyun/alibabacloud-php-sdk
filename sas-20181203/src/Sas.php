<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddCheckInstanceResultWhiteListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddCheckInstanceResultWhiteListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddCheckResultWhiteListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddCheckResultWhiteListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddClientUserDefineRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddClientUserDefineRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddInstallCodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddInstallCodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddPrivateRegistryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddPrivateRegistryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddTagWithUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddTagWithUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddUninstallClientsByUuidsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddUninstallClientsByUuidsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddVpcHoneyPotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddVpcHoneyPotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\BatchOperateCommonOverallConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\BatchOperateCommonOverallConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\BindAuthToMachineRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\BindAuthToMachineResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CancelOnceTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CancelOnceTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckQuaraFileIdRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckQuaraFileIdResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckSecurityEventIdRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckSecurityEventIdResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckUserHasEcsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CheckUserHasEcsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ConfirmVirusEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ConfirmVirusEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAntiBruteForceRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAntiBruteForceRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateBackupPolicyShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateContainerScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateContainerScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateCustomBlockRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateCustomBlockRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateCycleTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateCycleTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotNodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotNodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotPresetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotPresetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateInterceptionRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateInterceptionRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateInterceptionRuleShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateInterceptionTargetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateInterceptionTargetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateJenkinsImageRegistryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateJenkinsImageRegistryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateOrUpdateAssetGroupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateOrUpdateAssetGroupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateRestoreJobRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateRestoreJobResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSuspEventNoteRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSuspEventNoteResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateUniBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateUniBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateUniBackupPolicyShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateUniRestorePlanRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateUniRestorePlanResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateVulAutoRepairConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateVulAutoRepairConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteAntiBruteForceRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteAntiBruteForceRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupPolicyMachineRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupPolicyMachineResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteClientUserDefineRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteClientUserDefineRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteCustomBlockRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteCustomBlockRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteCycleTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteCycleTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteHoneypotNodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteHoneypotNodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteHoneypotPresetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteHoneypotPresetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteHoneypotProbeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteHoneypotProbeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteHoneypotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteHoneypotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteInstallCodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteInstallCodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteInterceptionRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteInterceptionRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteInterceptionTargetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteInterceptionTargetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteLoginBaseConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteLoginBaseConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeletePrivateRegistryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeletePrivateRegistryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteSecurityEventMarkMissListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteSecurityEventMarkMissListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteSuspEventNodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteSuspEventNodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteTagWithUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteTagWithUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteUniBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteUniBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteVpcHoneyPotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteVpcHoneyPotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteVulWhitelistRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteVulWhitelistResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccessKeyLeakDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccessKeyLeakDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedAssetsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedAssetsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentInstallStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentInstallStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventStackInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventStackInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllEntityResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllGroupsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllGroupsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAppVulScanCycleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetsSecurityEventSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetsSecurityEventSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttackAnalysisDataRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttackAnalysisDataResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAutoDelConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupClientsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupClientsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackUpExportInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackUpExportInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupRestoreCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceRecordsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceRecordsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckEcsWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckEcsWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningMachinesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningMachinesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientConfSetupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientConfSetupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientConfStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientConfStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudCenterInstancesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudCenterInstancesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudProductFieldStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterBasicInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterBasicInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterInfoListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterInfoListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterVulStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterVulStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetResultListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetResultListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeConcernNecessityRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeConcernNecessityResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerCriteriaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerInstancesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerInstancesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerTagsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerTagsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCountNotScannedImageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCountScannedImageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCriteriaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCycleTaskListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCycleTaskListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainCountRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgUserAgreementResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventLevelCountRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventLevelCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventOnStageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventOnStageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExcludeSystemPathRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExcludeSystemPathResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExportInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExportInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedCheckWarningRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedCheckWarningResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHcExportInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHcExportInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotAuthResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotSuspStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotSuspStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineItemListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineItemListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageCriteriaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInfoListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInfoListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInstancesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInstancesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageLatestScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageLatestScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListBySensitiveFileRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListBySensitiveFileResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListBySensitiveFileShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListWithBaselineNameRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListWithBaselineNameResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoCriteriaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoDetailListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoDetailListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthorizationResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileByKeyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileByKeyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileByKeyShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileListShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCaptchaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCaptchaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCodesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceAntiBruteForceRulesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceAntiBruteForceRulesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceRebootStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceRebootStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIpTagsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIpTagsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLatestScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginSwitchConfigsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogMetaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogMetaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogShipperStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogShipperStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogstoreStorageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogstoreStorageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeMachineCanRebootRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeMachineCanRebootResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNoticeConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNoticeConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNsasSuspEventTypeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNsasSuspEventTypeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOfflineMachinesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOfflineMachinesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskLeafRecordPageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskLeafRecordPageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCountRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCronDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCronDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCronItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCronItemResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScheduleConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScheduleConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyTypeScaItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyTypeScaItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageNewestRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUsageNewestResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeQuaraFileDownloadInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeQuaraFileDownloadInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestorePlansRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestorePlansResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRisksRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRisksResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskTypeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSasPmAgentListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSasPmAgentListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeScanTaskProgressRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeScanTaskProgressResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeScanTaskStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeScanTaskStatisticsResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeServiceLinkedRoleStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeServiceLinkedRoleStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarEventScenariosRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarEventScenariosResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSnapshotsResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventExportInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventExportInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventQuaraFilesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventQuaraFilesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventUserSettingRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventUserSettingResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousOverallConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousOverallConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousUUIDConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousUUIDConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTargetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTargetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTaskErrorLogRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTaskErrorLogResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTotalStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTotalStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoNodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoNodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupDatabaseRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupDatabaseResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPoliciesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPoliciesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniRecoverableListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniRecoverableListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniSupportRegionResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulCheckTaskStatusDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulCheckTaskStatusDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulExportInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulExportInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulFixStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListPageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListPageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulNumStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulNumStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetStatisticsResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockExclusiveFileTypeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileChangeStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileChangeStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockFileTypeSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockInclusiveFileTypeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockProcessBlockStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockProcessBlockStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockProcessListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockProcessListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockTotalFileChangeCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebPathRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebPathResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DisableBruteForceRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DisableBruteForceRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DisableCustomBlockRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DisableCustomBlockRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\EnableBruteForceRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\EnableBruteForceRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\EnableCustomBlockRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\EnableCustomBlockRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExecStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExecStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportSuspEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportSuspEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportVulRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportVulResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportWarningRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportWarningResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\FixCheckWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\FixCheckWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GenerateOnceTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GenerateOnceTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAlarmMachineCountRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAlarmMachineCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyItemRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyItemResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetBackupStorageCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckProcessRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckProcessResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientUserDefineRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientUserDefineRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterCheckItemWarningStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterCheckItemWarningStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterRuleSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterRuleSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterSuspEventStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterSuspEventStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectApiInvokeInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotNodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotNodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotPresetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotPresetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotProbeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetImageScanNumInPeriodRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetImageScanNumInPeriodResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionRuleDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionRuleDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionTargetDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionTargetDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetLastOnceTaskInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetLastOnceTaskInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOnceTaskResultInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOnceTaskResultInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetPropertyScheduleConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetPropertyScheduleConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetRulesCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSuspiciousStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSuspiciousStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetVulStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetVulStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetVulWhitelistRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetVulWhitelistResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSimilarSecurityEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreCheckItemsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreCheckItemsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreHcCheckWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreHcCheckWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallBackupClientRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallBackupClientResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallCloudMonitorRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallCloudMonitorResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallPmAgentRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallPmAgentResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallUniBackupAgentRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\InstallUniBackupAgentResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\JoinWebLockProcessWhiteListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\JoinWebLockProcessWhiteListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAvailableHoneypotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAvailableHoneypotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningSummaryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningSummaryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckStandardRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckStandardResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClientUserDefineRulesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClientUserDefineRulesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClientUserDefineRuleTypesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterCnnfStatusDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterCnnfStatusDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterInterceptionConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListClusterInterceptionConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotNodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotNodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotPresetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotPresetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotProbeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotProbeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRegistryRegionResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionHistoryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionHistoryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionImageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionRulePageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionRulePageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionTargetPageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionTargetPageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPodRiskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPodRiskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateRegistryListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateRegistryListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPrivateRegistryTypeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListRuleTargetAllRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListRuleTargetAllResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemAggregationRulesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemAggregationRulesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRuleTypesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemRuleAggregationTypesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemRuleAggregationTypesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListUninstallAegisMachinesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListUninstallAegisMachinesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListUuidsByWebPathRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListUuidsByWebPathResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListVulAutoRepairConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListVulAutoRepairConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAccessKeyLeakDealRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAccessKeyLeakDealResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAntiBruteForceRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAntiBruteForceRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAppVulScanCycleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAppVulScanCycleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetGroupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetGroupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetImportantRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetImportantResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAutoDelConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAutoDelConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyBackupPolicyStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClearLogstoreStorageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClearLogstoreStorageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClientConfSetupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClientConfSetupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClientConfStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClientConfStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClientUserDefineRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClientUserDefineRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClusterCnnfStatusUserConfirmRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyClusterCnnfStatusUserConfirmResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyConcernNecessityRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyConcernNecessityResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCreateVulWhitelistRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCreateVulWhitelistResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCustomBlockRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCustomBlockRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCycleTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCycleTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyEmgVulSubmitRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyEmgVulSubmitResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyGroupPropertyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyGroupPropertyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInstanceAntiBruteForceRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInstanceAntiBruteForceRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInterceptionRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInterceptionRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInterceptionRuleShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInterceptionRuleSwitchRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInterceptionRuleSwitchResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInterceptionTargetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyInterceptionTargetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLoginBaseConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLoginBaseConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLoginSwitchConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLoginSwitchConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLogMetaStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyLogMetaStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyNoticeConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyNoticeConfigResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifySecurityEventMarkMissIndividuallyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifySecurityEventMarkMissIndividuallyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStartVulScanRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStartVulScanResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStrategyTargetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyStrategyTargetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyTagWithUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyTagWithUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyUniBackupPolicyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyUniBackupPolicyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyUniBackupPolicyShrinkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVpcHoneyPotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVpcHoneyPotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulTargetConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulTargetConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulTargetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulTargetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulWhitelistTargetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyVulWhitelistTargetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockCreateConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockCreateConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockDeleteConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockDeleteConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockProcessStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockProcessStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockStartRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockStartResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockStatusRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockStatusResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUnbindRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUnbindResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUpdateConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUpdateConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebPathRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebPathResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OpenSensitiveFileScanRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OpenSensitiveFileScanResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateAgentClientInstallRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateAgentClientInstallResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateCommonOverallConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateCommonOverallConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateCommonTargetConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateCommonTargetConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateImageBaselineWhitelistRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateImageBaselineWhitelistResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateImageVulRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateImageVulResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousOverallConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousOverallConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousTargetConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousTargetConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateVirusEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateVirusEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateVulsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateVulsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateWebLockFileEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateWebLockFileEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationCancelIgnoreSuspEventRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationCancelIgnoreSuspEventResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationSuspEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationSuspEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PageImageRegistryRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PageImageRegistryResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PauseClientRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PauseClientResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicCreateImageScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicCreateImageScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicPreCheckImageScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicPreCheckImageScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicSyncAndCreateImageScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PublicSyncAndCreateImageScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryDiscoverDatabaseRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryDiscoverDatabaseResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupedSecurityEventMarkMissListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupedSecurityEventMarkMissListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupIdByGroupNameRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGroupIdByGroupNameResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryJenkinsImageRegistryPersistenceDayRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryJenkinsImageRegistryPersistenceDayResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryPreCheckDatabaseRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryPreCheckDatabaseResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RebootMachineRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RebootMachineResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshAssetsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshAssetsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshContainerAssetsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshContainerAssetsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RemoveCheckInstanceResultWhiteListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RemoveCheckInstanceResultWhiteListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RemoveCheckResultWhiteListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RemoveCheckResultWhiteListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RollbackSuspEventQuaraFileRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RollbackSuspEventQuaraFileResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\SasInstallCodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\SasInstallCodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\SaveImageBaselineStrategyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\SaveImageBaselineStrategyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\SaveSuspEventUserSettingRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\SaveSuspEventUserSettingResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\SetClusterInterceptionConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\SetClusterInterceptionConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\SetRegistryScanDayNumRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\SetRegistryScanDayNumResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartBaselineSecurityCheckRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartBaselineSecurityCheckResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartDiscoverDatabaseTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartPreCheckDatabaseRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartPreCheckDatabaseResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartVirusScanTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartVirusScanTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\SubmitCheckResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UnbindAegisRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UnbindAegisResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UninstallBackupClientRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UninstallBackupClientResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UninstallUniBackupAgentRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UninstallUniBackupAgentResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotNodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotNodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotPresetRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotPresetResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotProbeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotProbeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateHoneypotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateJenkinsImageRegistryNameRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateJenkinsImageRegistryNameResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateJenkinsImageRegistryPersistenceDayRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateJenkinsImageRegistryPersistenceDayResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpgradeBackupPolicyVersionRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpgradeBackupPolicyVersionResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ValidateHcWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ValidateHcWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckInstanceResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckInstanceResultResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckResultRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckResultResponse;
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
     * @param AddCheckInstanceResultWhiteListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddCheckInstanceResultWhiteListResponse
     */
    public function addCheckInstanceResultWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkGroupId)) {
            $query['CheckGroupId'] = $request->checkGroupId;
        }
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCheckInstanceResultWhiteList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCheckInstanceResultWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCheckInstanceResultWhiteListRequest $request
     *
     * @return AddCheckInstanceResultWhiteListResponse
     */
    public function addCheckInstanceResultWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCheckInstanceResultWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param AddCheckResultWhiteListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddCheckResultWhiteListResponse
     */
    public function addCheckResultWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkIds)) {
            $query['CheckIds'] = $request->checkIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCheckResultWhiteList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCheckResultWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCheckResultWhiteListRequest $request
     *
     * @return AddCheckResultWhiteListResponse
     */
    public function addCheckResultWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCheckResultWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param AddClientUserDefineRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddClientUserDefineRuleResponse
     */
    public function addClientUserDefineRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->cmdline)) {
            $query['Cmdline'] = $request->cmdline;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->IP)) {
            $query['IP'] = $request->IP;
        }
        if (!Utils::isUnset($request->md5List)) {
            $query['Md5List'] = $request->md5List;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->newFilePath)) {
            $query['NewFilePath'] = $request->newFilePath;
        }
        if (!Utils::isUnset($request->parentCmdline)) {
            $query['ParentCmdline'] = $request->parentCmdline;
        }
        if (!Utils::isUnset($request->parentProcPath)) {
            $query['ParentProcPath'] = $request->parentProcPath;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->portStr)) {
            $query['PortStr'] = $request->portStr;
        }
        if (!Utils::isUnset($request->procPath)) {
            $query['ProcPath'] = $request->procPath;
        }
        if (!Utils::isUnset($request->registryContent)) {
            $query['RegistryContent'] = $request->registryContent;
        }
        if (!Utils::isUnset($request->registryKey)) {
            $query['RegistryKey'] = $request->registryKey;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddClientUserDefineRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddClientUserDefineRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddClientUserDefineRuleRequest $request
     *
     * @return AddClientUserDefineRuleResponse
     */
    public function addClientUserDefineRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClientUserDefineRuleWithOptions($request, $runtime);
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
     * @param AddPrivateRegistryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddPrivateRegistryResponse
     */
    public function addPrivateRegistryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->extraParam)) {
            $query['ExtraParam'] = $request->extraParam;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->registryHostIp)) {
            $query['RegistryHostIp'] = $request->registryHostIp;
        }
        if (!Utils::isUnset($request->registryRegionId)) {
            $query['RegistryRegionId'] = $request->registryRegionId;
        }
        if (!Utils::isUnset($request->registryType)) {
            $query['RegistryType'] = $request->registryType;
        }
        if (!Utils::isUnset($request->registryVersion)) {
            $query['RegistryVersion'] = $request->registryVersion;
        }
        if (!Utils::isUnset($request->transPerHour)) {
            $query['TransPerHour'] = $request->transPerHour;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPrivateRegistry',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddPrivateRegistryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddPrivateRegistryRequest $request
     *
     * @return AddPrivateRegistryResponse
     */
    public function addPrivateRegistry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrivateRegistryWithOptions($request, $runtime);
    }

    /**
     * @param AddTagWithUuidRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddTagWithUuidResponse
     */
    public function addTagWithUuidWithOptions($request, $runtime)
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
            'action'      => 'AddTagWithUuid',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTagWithUuidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTagWithUuidRequest $request
     *
     * @return AddTagWithUuidResponse
     */
    public function addTagWithUuid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTagWithUuidWithOptions($request, $runtime);
    }

    /**
     * @param AddUninstallClientsByUuidsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddUninstallClientsByUuidsResponse
     */
    public function addUninstallClientsByUuidsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callMethod)) {
            $query['CallMethod'] = $request->callMethod;
        }
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
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
            'action'      => 'AddUninstallClientsByUuids',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUninstallClientsByUuidsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUninstallClientsByUuidsRequest $request
     *
     * @return AddUninstallClientsByUuidsResponse
     */
    public function addUninstallClientsByUuids($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUninstallClientsByUuidsWithOptions($request, $runtime);
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
     * @param AdvanceSecurityEventOperationsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return AdvanceSecurityEventOperationsResponse
     */
    public function advanceSecurityEventOperationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AdvanceSecurityEventOperations',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AdvanceSecurityEventOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AdvanceSecurityEventOperationsRequest $request
     *
     * @return AdvanceSecurityEventOperationsResponse
     */
    public function advanceSecurityEventOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->advanceSecurityEventOperationsWithOptions($request, $runtime);
    }

    /**
     * @param BatchOperateCommonOverallConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return BatchOperateCommonOverallConfigResponse
     */
    public function batchOperateCommonOverallConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->typeList)) {
            $query['TypeList'] = $request->typeList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchOperateCommonOverallConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchOperateCommonOverallConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchOperateCommonOverallConfigRequest $request
     *
     * @return BatchOperateCommonOverallConfigResponse
     */
    public function batchOperateCommonOverallConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchOperateCommonOverallConfigWithOptions($request, $runtime);
    }

    /**
     * @param BindAuthToMachineRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BindAuthToMachineResponse
     */
    public function bindAuthToMachineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authVersion)) {
            $query['AuthVersion'] = $request->authVersion;
        }
        if (!Utils::isUnset($request->autoBind)) {
            $query['AutoBind'] = $request->autoBind;
        }
        if (!Utils::isUnset($request->bind)) {
            $query['Bind'] = $request->bind;
        }
        if (!Utils::isUnset($request->bindAll)) {
            $query['BindAll'] = $request->bindAll;
        }
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->logicalExp)) {
            $query['LogicalExp'] = $request->logicalExp;
        }
        if (!Utils::isUnset($request->unBind)) {
            $query['UnBind'] = $request->unBind;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindAuthToMachine',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindAuthToMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindAuthToMachineRequest $request
     *
     * @return BindAuthToMachineResponse
     */
    public function bindAuthToMachine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAuthToMachineWithOptions($request, $runtime);
    }

    /**
     * @param CancelOnceTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CancelOnceTaskResponse
     */
    public function cancelOnceTaskWithOptions($request, $runtime)
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
            'action'      => 'CancelOnceTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOnceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelOnceTaskRequest $request
     *
     * @return CancelOnceTaskResponse
     */
    public function cancelOnceTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOnceTaskWithOptions($request, $runtime);
    }

    /**
     * @param ChangeCheckConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ChangeCheckConfigResponse
     */
    public function changeCheckConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cycleDays)) {
            $query['CycleDays'] = $request->cycleDays;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->standardIds)) {
            $query['StandardIds'] = $request->standardIds;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeCheckConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeCheckConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeCheckConfigRequest $request
     *
     * @return ChangeCheckConfigResponse
     */
    public function changeCheckConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeCheckConfigWithOptions($request, $runtime);
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
     * @param CheckUserHasEcsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckUserHasEcsResponse
     */
    public function checkUserHasEcsWithOptions($request, $runtime)
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
            'action'      => 'CheckUserHasEcs',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUserHasEcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckUserHasEcsRequest $request
     *
     * @return CheckUserHasEcsResponse
     */
    public function checkUserHasEcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUserHasEcsWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmVirusEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfirmVirusEventsResponse
     */
    public function confirmVirusEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationAll)) {
            $query['OperationAll'] = $request->operationAll;
        }
        if (!Utils::isUnset($request->operationCode)) {
            $query['OperationCode'] = $request->operationCode;
        }
        if (!Utils::isUnset($request->operationRange)) {
            $query['OperationRange'] = $request->operationRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmVirusEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmVirusEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmVirusEventsRequest $request
     *
     * @return ConfirmVirusEventsResponse
     */
    public function confirmVirusEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmVirusEventsWithOptions($request, $runtime);
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
     * @param CreateContainerScanTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateContainerScanTaskResponse
     */
    public function createContainerScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->containerIds)) {
            $query['ContainerIds'] = $request->containerIds;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateContainerScanTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateContainerScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateContainerScanTaskRequest $request
     *
     * @return CreateContainerScanTaskResponse
     */
    public function createContainerScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContainerScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomBlockRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCustomBlockRecordResponse
     */
    public function createCustomBlockRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blockIp)) {
            $query['BlockIp'] = $request->blockIp;
        }
        if (!Utils::isUnset($request->bound)) {
            $query['Bound'] = $request->bound;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomBlockRecord',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomBlockRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCustomBlockRecordRequest $request
     *
     * @return CreateCustomBlockRecordResponse
     */
    public function createCustomBlockRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomBlockRecordWithOptions($request, $runtime);
    }

    /**
     * @param CreateCycleTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCycleTaskResponse
     */
    public function createCycleTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->firstDateStr)) {
            $query['FirstDateStr'] = $request->firstDateStr;
        }
        if (!Utils::isUnset($request->intervalPeriod)) {
            $query['IntervalPeriod'] = $request->intervalPeriod;
        }
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->targetEndTime)) {
            $query['TargetEndTime'] = $request->targetEndTime;
        }
        if (!Utils::isUnset($request->targetStartTime)) {
            $query['TargetStartTime'] = $request->targetStartTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCycleTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCycleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCycleTaskRequest $request
     *
     * @return CreateCycleTaskResponse
     */
    public function createCycleTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCycleTaskWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to push a file to the cloud for detection. Before you call this operation, make sure that the file is uploaded. You can call the CreateFileDetectUploadUrl operation to upload the file.
     *   * The HashKey parameter is included in all API operations that are related to the file detection feature. The parameter specifies the unique identifier of a file. Only MD5 hash values are supported. Before you call this operation, calculate the MD5 hash value of the file.
     *   *
     * @param CreateFileDetectRequest $request CreateFileDetectRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFileDetectResponse CreateFileDetectResponse
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
     * You can call this operation to push a file to the cloud for detection. Before you call this operation, make sure that the file is uploaded. You can call the CreateFileDetectUploadUrl operation to upload the file.
     *   * The HashKey parameter is included in all API operations that are related to the file detection feature. The parameter specifies the unique identifier of a file. Only MD5 hash values are supported. Before you call this operation, calculate the MD5 hash value of the file.
     *   *
     * @param CreateFileDetectRequest $request CreateFileDetectRequest
     *
     * @return CreateFileDetectResponse CreateFileDetectResponse
     */
    public function createFileDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileDetectWithOptions($request, $runtime);
    }

    /**
     * You can call the this operation to query the parameters that are required to upload a file for detection. If the value of the response parameter FileExist is true, the file that you want to upload for detection already exists in the cloud. In this case, you can directly push the file for detection. If the value of the response parameter FileExist is false, you must use the form upload method to upload the file to the specified Object Storage Service (OSS) bucket based on the response parameters of this operation.
     *   * The form upload method is provided by OSS. For more information, see [Form upload](https://www.alibabacloud.com/help/en/object-storage-service/latest/upload-objects-form-upload).
     *   * The HashKey parameter is included in all API operations that are related to the file detection feature. The parameter specifies the unique identifier of a file. Only MD5 hash values are supported. Before you call this operation, calculate the MD5 hash value of the file.
     *   *
     * @param CreateFileDetectUploadUrlRequest $request CreateFileDetectUploadUrlRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFileDetectUploadUrlResponse CreateFileDetectUploadUrlResponse
     */
    public function createFileDetectUploadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hashKeyContextList)) {
            $query['HashKeyContextList'] = $request->hashKeyContextList;
        }
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
     * You can call the this operation to query the parameters that are required to upload a file for detection. If the value of the response parameter FileExist is true, the file that you want to upload for detection already exists in the cloud. In this case, you can directly push the file for detection. If the value of the response parameter FileExist is false, you must use the form upload method to upload the file to the specified Object Storage Service (OSS) bucket based on the response parameters of this operation.
     *   * The form upload method is provided by OSS. For more information, see [Form upload](https://www.alibabacloud.com/help/en/object-storage-service/latest/upload-objects-form-upload).
     *   * The HashKey parameter is included in all API operations that are related to the file detection feature. The parameter specifies the unique identifier of a file. Only MD5 hash values are supported. Before you call this operation, calculate the MD5 hash value of the file.
     *   *
     * @param CreateFileDetectUploadUrlRequest $request CreateFileDetectUploadUrlRequest
     *
     * @return CreateFileDetectUploadUrlResponse CreateFileDetectUploadUrlResponse
     */
    public function createFileDetectUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileDetectUploadUrlWithOptions($request, $runtime);
    }

    /**
     * @param CreateHoneypotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateHoneypotResponse
     */
    public function createHoneypotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->honeypotImageId)) {
            $query['HoneypotImageId'] = $request->honeypotImageId;
        }
        if (!Utils::isUnset($request->honeypotImageName)) {
            $query['HoneypotImageName'] = $request->honeypotImageName;
        }
        if (!Utils::isUnset($request->honeypotName)) {
            $query['HoneypotName'] = $request->honeypotName;
        }
        if (!Utils::isUnset($request->meta)) {
            $query['Meta'] = $request->meta;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHoneypot',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHoneypotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHoneypotRequest $request
     *
     * @return CreateHoneypotResponse
     */
    public function createHoneypot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHoneypotWithOptions($request, $runtime);
    }

    /**
     * @param CreateHoneypotNodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateHoneypotNodeResponse
     */
    public function createHoneypotNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowHoneypotAccessInternet)) {
            $query['AllowHoneypotAccessInternet'] = $request->allowHoneypotAccessInternet;
        }
        if (!Utils::isUnset($request->availableProbeNum)) {
            $query['AvailableProbeNum'] = $request->availableProbeNum;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->securityGroupProbeIpList)) {
            $query['SecurityGroupProbeIpList'] = $request->securityGroupProbeIpList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHoneypotNode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHoneypotNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHoneypotNodeRequest $request
     *
     * @return CreateHoneypotNodeResponse
     */
    public function createHoneypotNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHoneypotNodeWithOptions($request, $runtime);
    }

    /**
     * @param CreateHoneypotPresetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateHoneypotPresetResponse
     */
    public function createHoneypotPresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->honeypotImageName)) {
            $query['HoneypotImageName'] = $request->honeypotImageName;
        }
        if (!Utils::isUnset($request->meta)) {
            $query['Meta'] = $request->meta;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->presetName)) {
            $query['PresetName'] = $request->presetName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHoneypotPreset',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHoneypotPresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHoneypotPresetRequest $request
     *
     * @return CreateHoneypotPresetResponse
     */
    public function createHoneypotPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHoneypotPresetWithOptions($request, $runtime);
    }

    /**
     * @param CreateHoneypotProbeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateHoneypotProbeResponse
     */
    public function createHoneypotProbeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->arp)) {
            $query['Arp'] = $request->arp;
        }
        if (!Utils::isUnset($request->businessGroupId)) {
            $query['BusinessGroupId'] = $request->businessGroupId;
        }
        if (!Utils::isUnset($request->controlNodeId)) {
            $query['ControlNodeId'] = $request->controlNodeId;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->honeypotBindList)) {
            $query['HoneypotBindList'] = $request->honeypotBindList;
        }
        if (!Utils::isUnset($request->ping)) {
            $query['Ping'] = $request->ping;
        }
        if (!Utils::isUnset($request->probeType)) {
            $query['ProbeType'] = $request->probeType;
        }
        if (!Utils::isUnset($request->probeVersion)) {
            $query['ProbeVersion'] = $request->probeVersion;
        }
        if (!Utils::isUnset($request->proxyIp)) {
            $query['ProxyIp'] = $request->proxyIp;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHoneypotProbe',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHoneypotProbeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateHoneypotProbeRequest $request
     *
     * @return CreateHoneypotProbeResponse
     */
    public function createHoneypotProbe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHoneypotProbeWithOptions($request, $runtime);
    }

    /**
     * @param CreateInterceptionRuleRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateInterceptionRuleResponse
     */
    public function createInterceptionRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateInterceptionRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dstTargetList)) {
            $request->dstTargetListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dstTargetList, 'DstTargetList', 'json');
        }
        if (!Utils::isUnset($tmpReq->srcTarget)) {
            $request->srcTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->srcTarget, 'SrcTarget', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->dstTargetListShrink)) {
            $query['DstTargetList'] = $request->dstTargetListShrink;
        }
        if (!Utils::isUnset($request->interceptType)) {
            $query['InterceptType'] = $request->interceptType;
        }
        if (!Utils::isUnset($request->orderIndex)) {
            $query['OrderIndex'] = $request->orderIndex;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleSwitch)) {
            $query['RuleSwitch'] = $request->ruleSwitch;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->srcTargetShrink)) {
            $query['SrcTarget'] = $request->srcTargetShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInterceptionRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInterceptionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInterceptionRuleRequest $request
     *
     * @return CreateInterceptionRuleResponse
     */
    public function createInterceptionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInterceptionRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateInterceptionTargetRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateInterceptionTargetResponse
     */
    public function createInterceptionTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->imageList)) {
            $query['ImageList'] = $request->imageList;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['TagList'] = $request->tagList;
        }
        if (!Utils::isUnset($request->targetName)) {
            $query['TargetName'] = $request->targetName;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInterceptionTarget',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInterceptionTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInterceptionTargetRequest $request
     *
     * @return CreateInterceptionTargetResponse
     */
    public function createInterceptionTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInterceptionTargetWithOptions($request, $runtime);
    }

    /**
     * @param CreateJenkinsImageRegistryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateJenkinsImageRegistryResponse
     */
    public function createJenkinsImageRegistryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $body = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->extraParam)) {
            $body['ExtraParam'] = $request->extraParam;
        }
        if (!Utils::isUnset($request->netType)) {
            $body['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->persistenceDay)) {
            $body['PersistenceDay'] = $request->persistenceDay;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $body['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->registryHostIp)) {
            $body['RegistryHostIp'] = $request->registryHostIp;
        }
        if (!Utils::isUnset($request->registryName)) {
            $body['RegistryName'] = $request->registryName;
        }
        if (!Utils::isUnset($request->registryType)) {
            $body['RegistryType'] = $request->registryType;
        }
        if (!Utils::isUnset($request->registryVersion)) {
            $body['RegistryVersion'] = $request->registryVersion;
        }
        if (!Utils::isUnset($request->transPerHour)) {
            $body['TransPerHour'] = $request->transPerHour;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->whiteList)) {
            $body['WhiteList'] = $request->whiteList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateJenkinsImageRegistry',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJenkinsImageRegistryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateJenkinsImageRegistryRequest $request
     *
     * @return CreateJenkinsImageRegistryResponse
     */
    public function createJenkinsImageRegistry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJenkinsImageRegistryWithOptions($request, $runtime);
    }

    /**
     * A server can belong only to one server group. If you call the CreateOrUpdateAssetGroup operation and the server specified in request parameters belongs to Server Group A, the server is removed from Server Group A and then added to the newly created or specified server group after the call is complete.
     *   *
     * @param CreateOrUpdateAssetGroupRequest $request CreateOrUpdateAssetGroupRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateAssetGroupResponse CreateOrUpdateAssetGroupResponse
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
     * A server can belong only to one server group. If you call the CreateOrUpdateAssetGroup operation and the server specified in request parameters belongs to Server Group A, the server is removed from Server Group A and then added to the newly created or specified server group after the call is complete.
     *   *
     * @param CreateOrUpdateAssetGroupRequest $request CreateOrUpdateAssetGroupRequest
     *
     * @return CreateOrUpdateAssetGroupResponse CreateOrUpdateAssetGroupResponse
     */
    public function createOrUpdateAssetGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateAssetGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateRestoreJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRestoreJobResponse
     */
    public function createRestoreJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includes)) {
            $query['Includes'] = $request->includes;
        }
        if (!Utils::isUnset($request->snapshotHash)) {
            $query['SnapshotHash'] = $request->snapshotHash;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->snapshotVersion)) {
            $query['SnapshotVersion'] = $request->snapshotVersion;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->vaultId)) {
            $query['VaultId'] = $request->vaultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRestoreJob',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRestoreJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRestoreJobRequest $request
     *
     * @return CreateRestoreJobResponse
     */
    public function createRestoreJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRestoreJobWithOptions($request, $runtime);
    }

    /**
     * For more information about service-linked roles, see [Service-linked roles](~~160674~~).
     *   *
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceLinkedRole)) {
            $query['ServiceLinkedRole'] = $request->serviceLinkedRole;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
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
     * For more information about service-linked roles, see [Service-linked roles](~~160674~~).
     *   *
     * @param CreateServiceLinkedRoleRequest $request CreateServiceLinkedRoleRequest
     *
     * @return CreateServiceLinkedRoleResponse CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
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
     * @param CreateUniBackupPolicyRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateUniBackupPolicyResponse
     */
    public function createUniBackupPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateUniBackupPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fullPlan)) {
            $request->fullPlanShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fullPlan, 'FullPlan', 'json');
        }
        if (!Utils::isUnset($tmpReq->incPlan)) {
            $request->incPlanShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->incPlan, 'IncPlan', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->databaseAddByUser)) {
            $query['DatabaseAddByUser'] = $request->databaseAddByUser;
        }
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->fullPlanShrink)) {
            $query['FullPlan'] = $request->fullPlanShrink;
        }
        if (!Utils::isUnset($request->incPlanShrink)) {
            $query['IncPlan'] = $request->incPlanShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        if (!Utils::isUnset($request->speedLimiter)) {
            $query['SpeedLimiter'] = $request->speedLimiter;
        }
        if (!Utils::isUnset($request->uniRegionId)) {
            $query['UniRegionId'] = $request->uniRegionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUniBackupPolicy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUniBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUniBackupPolicyRequest $request
     *
     * @return CreateUniBackupPolicyResponse
     */
    public function createUniBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUniBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateUniRestorePlanRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateUniRestorePlanResponse
     */
    public function createUniRestorePlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->instanceUuid)) {
            $query['InstanceUuid'] = $request->instanceUuid;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->resetScn)) {
            $query['ResetScn'] = $request->resetScn;
        }
        if (!Utils::isUnset($request->resetTime)) {
            $query['ResetTime'] = $request->resetTime;
        }
        if (!Utils::isUnset($request->restoreInfo)) {
            $query['RestoreInfo'] = $request->restoreInfo;
        }
        if (!Utils::isUnset($request->timePoint)) {
            $query['TimePoint'] = $request->timePoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUniRestorePlan',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUniRestorePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUniRestorePlanRequest $request
     *
     * @return CreateUniRestorePlanResponse
     */
    public function createUniRestorePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUniRestorePlanWithOptions($request, $runtime);
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
     * @param DeleteAntiBruteForceRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAntiBruteForceRuleResponse
     */
    public function deleteAntiBruteForceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAntiBruteForceRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAntiBruteForceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAntiBruteForceRuleRequest $request
     *
     * @return DeleteAntiBruteForceRuleResponse
     */
    public function deleteAntiBruteForceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAntiBruteForceRuleWithOptions($request, $runtime);
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
     * @param DeleteClientUserDefineRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteClientUserDefineRuleResponse
     */
    public function deleteClientUserDefineRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->idList)) {
            $query['IdList'] = $request->idList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClientUserDefineRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClientUserDefineRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteClientUserDefineRuleRequest $request
     *
     * @return DeleteClientUserDefineRuleResponse
     */
    public function deleteClientUserDefineRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientUserDefineRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomBlockRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteCustomBlockRecordResponse
     */
    public function deleteCustomBlockRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomBlockRecord',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomBlockRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomBlockRecordRequest $request
     *
     * @return DeleteCustomBlockRecordResponse
     */
    public function deleteCustomBlockRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomBlockRecordWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCycleTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCycleTaskResponse
     */
    public function deleteCycleTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCycleTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCycleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCycleTaskRequest $request
     *
     * @return DeleteCycleTaskResponse
     */
    public function deleteCycleTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCycleTaskWithOptions($request, $runtime);
    }

    /**
     * The **Default** server group that is provided by Security Center cannot be deleted. After you delete a group, the assets in this group are moved to the **Default** group.
     *   *
     * @param DeleteGroupRequest $request DeleteGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupResponse DeleteGroupResponse
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
     * The **Default** server group that is provided by Security Center cannot be deleted. After you delete a group, the assets in this group are moved to the **Default** group.
     *   *
     * @param DeleteGroupRequest $request DeleteGroupRequest
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHoneypotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteHoneypotResponse
     */
    public function deleteHoneypotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->honeypotId)) {
            $query['HoneypotId'] = $request->honeypotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHoneypot',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHoneypotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHoneypotRequest $request
     *
     * @return DeleteHoneypotResponse
     */
    public function deleteHoneypot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHoneypotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHoneypotNodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteHoneypotNodeResponse
     */
    public function deleteHoneypotNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHoneypotNode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHoneypotNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHoneypotNodeRequest $request
     *
     * @return DeleteHoneypotNodeResponse
     */
    public function deleteHoneypotNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHoneypotNodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHoneypotPresetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteHoneypotPresetResponse
     */
    public function deleteHoneypotPresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->honeypotPresetId)) {
            $query['HoneypotPresetId'] = $request->honeypotPresetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHoneypotPreset',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHoneypotPresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHoneypotPresetRequest $request
     *
     * @return DeleteHoneypotPresetResponse
     */
    public function deleteHoneypotPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHoneypotPresetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHoneypotProbeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteHoneypotProbeResponse
     */
    public function deleteHoneypotProbeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->probeId)) {
            $query['ProbeId'] = $request->probeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteHoneypotProbe',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHoneypotProbeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteHoneypotProbeRequest $request
     *
     * @return DeleteHoneypotProbeResponse
     */
    public function deleteHoneypotProbe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHoneypotProbeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstallCodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteInstallCodeResponse
     */
    public function deleteInstallCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->captchaCode)) {
            $query['CaptchaCode'] = $request->captchaCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstallCode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstallCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstallCodeRequest $request
     *
     * @return DeleteInstallCodeResponse
     */
    public function deleteInstallCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstallCodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInterceptionRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteInterceptionRuleResponse
     */
    public function deleteInterceptionRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ruleIds)) {
            $query['RuleIds'] = $request->ruleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInterceptionRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInterceptionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInterceptionRuleRequest $request
     *
     * @return DeleteInterceptionRuleResponse
     */
    public function deleteInterceptionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInterceptionRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInterceptionTargetRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteInterceptionTargetResponse
     */
    public function deleteInterceptionTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetIds)) {
            $query['TargetIds'] = $request->targetIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInterceptionTarget',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInterceptionTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInterceptionTargetRequest $request
     *
     * @return DeleteInterceptionTargetResponse
     */
    public function deleteInterceptionTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInterceptionTargetWithOptions($request, $runtime);
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
     * @param DeletePrivateRegistryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeletePrivateRegistryResponse
     */
    public function deletePrivateRegistryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->registryId)) {
            $query['RegistryId'] = $request->registryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePrivateRegistry',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePrivateRegistryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePrivateRegistryRequest $request
     *
     * @return DeletePrivateRegistryResponse
     */
    public function deletePrivateRegistry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePrivateRegistryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecurityEventMarkMissListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteSecurityEventMarkMissListResponse
     */
    public function deleteSecurityEventMarkMissListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityEventMarkMissList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityEventMarkMissListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSecurityEventMarkMissListRequest $request
     *
     * @return DeleteSecurityEventMarkMissListResponse
     */
    public function deleteSecurityEventMarkMissList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityEventMarkMissListWithOptions($request, $runtime);
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
     * @param DeleteSuspEventNodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSuspEventNodeResponse
     */
    public function deleteSuspEventNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->noteId)) {
            $query['NoteId'] = $request->noteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSuspEventNode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSuspEventNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSuspEventNodeRequest $request
     *
     * @return DeleteSuspEventNodeResponse
     */
    public function deleteSuspEventNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSuspEventNodeWithOptions($request, $runtime);
    }

    /**
     * Security Center provides asset importance tags and custom tags. You can call this operation to remove only the custom tag that is added to an asset.
     *   *
     * @param DeleteTagWithUuidRequest $request DeleteTagWithUuidRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTagWithUuidResponse DeleteTagWithUuidResponse
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
     * Security Center provides asset importance tags and custom tags. You can call this operation to remove only the custom tag that is added to an asset.
     *   *
     * @param DeleteTagWithUuidRequest $request DeleteTagWithUuidRequest
     *
     * @return DeleteTagWithUuidResponse DeleteTagWithUuidResponse
     */
    public function deleteTagWithUuid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagWithUuidWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUniBackupPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteUniBackupPolicyResponse
     */
    public function deleteUniBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyIds)) {
            $query['PolicyIds'] = $request->policyIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUniBackupPolicy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUniBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUniBackupPolicyRequest $request
     *
     * @return DeleteUniBackupPolicyResponse
     */
    public function deleteUniBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUniBackupPolicyWithOptions($request, $runtime);
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
     * @param DeleteVulWhitelistRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVulWhitelistResponse
     */
    public function deleteVulWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->whitelist)) {
            $query['Whitelist'] = $request->whitelist;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVulWhitelist',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVulWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVulWhitelistRequest $request
     *
     * @return DeleteVulWhitelistResponse
     */
    public function deleteVulWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVulWhitelistWithOptions($request, $runtime);
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
     * @param DescribeAffectedAssetsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAffectedAssetsResponse
     */
    public function describeAffectedAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->levels)) {
            $query['Levels'] = $request->levels;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAffectedAssets',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAffectedAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAffectedAssetsRequest $request
     *
     * @return DescribeAffectedAssetsResponse
     */
    public function describeAffectedAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAffectedAssetsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->containerId)) {
            $query['ContainerId'] = $request->containerId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
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
        if (!Utils::isUnset($request->maliciousMd5)) {
            $query['MaliciousMd5'] = $request->maliciousMd5;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pod)) {
            $query['Pod'] = $request->pod;
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
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
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
     * @param DescribeAgentInstallStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAgentInstallStatusResponse
     */
    public function describeAgentInstallStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeAgentInstallStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAgentInstallStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAgentInstallStatusRequest $request
     *
     * @return DescribeAgentInstallStatusResponse
     */
    public function describeAgentInstallStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgentInstallStatusWithOptions($request, $runtime);
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
     * The alert aggregation feature of Security Center analyzes the paths of alerts to aggregate multiple alerts generated on the intrusions that are launched from the same IP address or service, or on the same user.
     *   * You can call the DescribeAlarmEventList or DescribeSuspEvents operation to query alert events.
     *   * *   If your Security Center runs the Enterprise or Ultimate edition and you turned on **Alert Association** on the **Feature Settings** page of the Security Center console, you can call the DescribeAlarmEventList operation to query alert events.
     *   * *   If your Security Center runs the Enterprise or Ultimate edition but you turned off **Alert Association** on the **Feature Settings** page of the Security Center console, you can call the [DescribeSuspEvents](~~DescribeSuspEvents~~) operation to query alert events.
     *   * *   If your Security Center does not run the Enterprise or Ultimate edition, you can call the [DescribeSuspEvents](~~DescribeSuspEvents~~) operation to query alert events.
     *   *
     * @param DescribeAlarmEventListRequest $request DescribeAlarmEventListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlarmEventListResponse DescribeAlarmEventListResponse
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
        if (!Utils::isUnset($request->sortColumn)) {
            $query['SortColumn'] = $request->sortColumn;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
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
     * The alert aggregation feature of Security Center analyzes the paths of alerts to aggregate multiple alerts generated on the intrusions that are launched from the same IP address or service, or on the same user.
     *   * You can call the DescribeAlarmEventList or DescribeSuspEvents operation to query alert events.
     *   * *   If your Security Center runs the Enterprise or Ultimate edition and you turned on **Alert Association** on the **Feature Settings** page of the Security Center console, you can call the DescribeAlarmEventList operation to query alert events.
     *   * *   If your Security Center runs the Enterprise or Ultimate edition but you turned off **Alert Association** on the **Feature Settings** page of the Security Center console, you can call the [DescribeSuspEvents](~~DescribeSuspEvents~~) operation to query alert events.
     *   * *   If your Security Center does not run the Enterprise or Ultimate edition, you can call the [DescribeSuspEvents](~~DescribeSuspEvents~~) operation to query alert events.
     *   *
     * @param DescribeAlarmEventListRequest $request DescribeAlarmEventListRequest
     *
     * @return DescribeAlarmEventListResponse DescribeAlarmEventListResponse
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
     * @param DescribeAllImageBaselineRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAllImageBaselineResponse
     */
    public function describeAllImageBaselineWithOptions($request, $runtime)
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
            'action'      => 'DescribeAllImageBaseline',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAllImageBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAllImageBaselineRequest $request
     *
     * @return DescribeAllImageBaselineResponse
     */
    public function describeAllImageBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllImageBaselineWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppVulScanCycleResponse
     */
    public function describeAppVulScanCycleWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAppVulScanCycle',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppVulScanCycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeAppVulScanCycleResponse
     */
    public function describeAppVulScanCycle()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppVulScanCycleWithOptions($runtime);
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
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
     * @param DescribeAssetsSecurityEventSummaryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeAssetsSecurityEventSummaryResponse
     */
    public function describeAssetsSecurityEventSummaryWithOptions($request, $runtime)
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
            'action'      => 'DescribeAssetsSecurityEventSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAssetsSecurityEventSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAssetsSecurityEventSummaryRequest $request
     *
     * @return DescribeAssetsSecurityEventSummaryResponse
     */
    public function describeAssetsSecurityEventSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetsSecurityEventSummaryWithOptions($request, $runtime);
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
     * @param DescribeBackUpExportInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBackUpExportInfoResponse
     */
    public function describeBackUpExportInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->exportType)) {
            $query['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackUpExportInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackUpExportInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackUpExportInfoRequest $request
     *
     * @return DescribeBackUpExportInfoResponse
     */
    public function describeBackUpExportInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackUpExportInfoWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeBackupClients operation to query the servers on which the anti-ransomware agent is installed in a specified region.
     *   *
     * @param DescribeBackupClientsRequest $request DescribeBackupClientsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupClientsResponse DescribeBackupClientsResponse
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
     * You can call the DescribeBackupClients operation to query the servers on which the anti-ransomware agent is installed in a specified region.
     *   *
     * @param DescribeBackupClientsRequest $request DescribeBackupClientsRequest
     *
     * @return DescribeBackupClientsResponse DescribeBackupClientsResponse
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
     * @param DescribeBackupMachineStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeBackupMachineStatusResponse
     */
    public function describeBackupMachineStatusWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupMachineStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupMachineStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupMachineStatusRequest $request
     *
     * @return DescribeBackupMachineStatusResponse
     */
    public function describeBackupMachineStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupMachineStatusWithOptions($request, $runtime);
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
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
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
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupPolicyRequest $request
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * If you have created restoration tasks, you can call this operation to query the number of restoration tasks that are in the **restored** or **being restored** state.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupRestoreCountResponse DescribeBackupRestoreCountResponse
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
     * If you have created restoration tasks, you can call this operation to query the number of restoration tasks that are in the **restored** or **being restored** state.
     *   *
     * @return DescribeBackupRestoreCountResponse DescribeBackupRestoreCountResponse
     */
    public function describeBackupRestoreCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupRestoreCountWithOptions($runtime);
    }

    /**
     * @param DescribeBruteForceRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBruteForceRecordsResponse
     */
    public function describeBruteForceRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blockIp)) {
            $query['BlockIp'] = $request->blockIp;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'action'      => 'DescribeBruteForceRecords',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBruteForceRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBruteForceRecordsRequest $request
     *
     * @return DescribeBruteForceRecordsResponse
     */
    public function describeBruteForceRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBruteForceRecordsWithOptions($request, $runtime);
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
     * @param DescribeCheckFixDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCheckFixDetailsResponse
     */
    public function describeCheckFixDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkIds)) {
            $query['CheckIds'] = $request->checkIds;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->riskId)) {
            $query['RiskId'] = $request->riskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCheckFixDetails',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCheckFixDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCheckFixDetailsRequest $request
     *
     * @return DescribeCheckFixDetailsResponse
     */
    public function describeCheckFixDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckFixDetailsWithOptions($request, $runtime);
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
     * @param DescribeCheckWarningMachinesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCheckWarningMachinesResponse
     */
    public function describeCheckWarningMachinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->riskId)) {
            $query['RiskId'] = $request->riskId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCheckWarningMachines',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCheckWarningMachinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCheckWarningMachinesRequest $request
     *
     * @return DescribeCheckWarningMachinesResponse
     */
    public function describeCheckWarningMachines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckWarningMachinesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
        if (!Utils::isUnset($request->riskStatus)) {
            $query['RiskStatus'] = $request->riskStatus;
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
     * @param DescribeClientConfSetupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeClientConfSetupResponse
     */
    public function describeClientConfSetupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->strategyTag)) {
            $query['StrategyTag'] = $request->strategyTag;
        }
        if (!Utils::isUnset($request->strategyTagValue)) {
            $query['StrategyTagValue'] = $request->strategyTagValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClientConfSetup',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClientConfSetupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClientConfSetupRequest $request
     *
     * @return DescribeClientConfSetupResponse
     */
    public function describeClientConfSetup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientConfSetupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClientConfStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeClientConfStrategyResponse
     */
    public function describeClientConfStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tagValue)) {
            $query['TagValue'] = $request->tagValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClientConfStrategy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClientConfStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClientConfStrategyRequest $request
     *
     * @return DescribeClientConfStrategyResponse
     */
    public function describeClientConfStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientConfStrategyWithOptions($request, $runtime);
    }

    /**
     * You can search for assets by using search conditions, such as the instance ID, instance name, virtual private cloud (VPC) ID, region, and public IP address. You can also configure a logical relationship between multiple search conditions to search for the assets that meet the search conditions.
     *   *
     * @param DescribeCloudCenterInstancesRequest $request DescribeCloudCenterInstancesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudCenterInstancesResponse DescribeCloudCenterInstancesResponse
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
     * You can search for assets by using search conditions, such as the instance ID, instance name, virtual private cloud (VPC) ID, region, and public IP address. You can also configure a logical relationship between multiple search conditions to search for the assets that meet the search conditions.
     *   *
     * @param DescribeCloudCenterInstancesRequest $request DescribeCloudCenterInstancesRequest
     *
     * @return DescribeCloudCenterInstancesResponse DescribeCloudCenterInstancesResponse
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
     * @param DescribeClusterBasicInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterBasicInfoResponse
     */
    public function describeClusterBasicInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
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
            'action'      => 'DescribeClusterBasicInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterBasicInfoRequest $request
     *
     * @return DescribeClusterBasicInfoResponse
     */
    public function describeClusterBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterInfoListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeClusterInfoListResponse
     */
    public function describeClusterInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
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
            'action'      => 'DescribeClusterInfoList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterInfoListRequest $request
     *
     * @return DescribeClusterInfoListResponse
     */
    public function describeClusterInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterInfoListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterNetworkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterNetworkResponse
     */
    public function describeClusterNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterNetwork',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterNetworkRequest $request
     *
     * @return DescribeClusterNetworkResponse
     */
    public function describeClusterNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterVulStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterVulStatisticsResponse
     */
    public function describeClusterVulStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterVulStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterVulStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterVulStatisticsRequest $request
     *
     * @return DescribeClusterVulStatisticsResponse
     */
    public function describeClusterVulStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterVulStatisticsWithOptions($request, $runtime);
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
     * @param DescribeCommonOverallConfigListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeCommonOverallConfigListResponse
     */
    public function describeCommonOverallConfigListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeCommonOverallConfigList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommonOverallConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCommonOverallConfigListRequest $request
     *
     * @return DescribeCommonOverallConfigListResponse
     */
    public function describeCommonOverallConfigList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommonOverallConfigListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCommonTargetConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCommonTargetConfigResponse
     */
    public function describeCommonTargetConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeCommonTargetConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommonTargetConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCommonTargetConfigRequest $request
     *
     * @return DescribeCommonTargetConfigResponse
     */
    public function describeCommonTargetConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommonTargetConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCommonTargetResultListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCommonTargetResultListResponse
     */
    public function describeCommonTargetResultListWithOptions($request, $runtime)
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
            'action'      => 'DescribeCommonTargetResultList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommonTargetResultListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCommonTargetResultListRequest $request
     *
     * @return DescribeCommonTargetResultListResponse
     */
    public function describeCommonTargetResultList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommonTargetResultListWithOptions($request, $runtime);
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
     * @param DescribeContainerCriteriaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeContainerCriteriaResponse
     */
    public function describeContainerCriteriaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupField)) {
            $query['GroupField'] = $request->groupField;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerCriteria',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerCriteriaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContainerCriteriaRequest $request
     *
     * @return DescribeContainerCriteriaResponse
     */
    public function describeContainerCriteria($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerCriteriaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerInstancesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeContainerInstancesResponse
     */
    public function describeContainerInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
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
            'action'      => 'DescribeContainerInstances',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContainerInstancesRequest $request
     *
     * @return DescribeContainerInstancesResponse
     */
    public function describeContainerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerInstancesWithOptions($request, $runtime);
    }

    /**
     * Only users who created a Container Registry Enterprise Edition instance can call this operation.
     *   *
     * @param DescribeContainerStatisticsRequest $request DescribeContainerStatisticsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContainerStatisticsResponse DescribeContainerStatisticsResponse
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
     * Only users who created a Container Registry Enterprise Edition instance can call this operation.
     *   *
     * @param DescribeContainerStatisticsRequest $request DescribeContainerStatisticsRequest
     *
     * @return DescribeContainerStatisticsResponse DescribeContainerStatisticsResponse
     */
    public function describeContainerStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerTagsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeContainerTagsResponse
     */
    public function describeContainerTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $query['FieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['FieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerTags',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContainerTagsRequest $request
     *
     * @return DescribeContainerTagsResponse
     */
    public function describeContainerTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerTagsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCountNotScannedImageResponse
     */
    public function describeCountNotScannedImageWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeCountNotScannedImage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCountNotScannedImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeCountNotScannedImageResponse
     */
    public function describeCountNotScannedImage()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCountNotScannedImageWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCountScannedImageResponse
     */
    public function describeCountScannedImageWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeCountScannedImage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCountScannedImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeCountScannedImageResponse
     */
    public function describeCountScannedImage()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCountScannedImageWithOptions($runtime);
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
     * @param DescribeCustomBlockRecordsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCustomBlockRecordsResponse
     */
    public function describeCustomBlockRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blockIp)) {
            $query['BlockIp'] = $request->blockIp;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'action'      => 'DescribeCustomBlockRecords',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomBlockRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomBlockRecordsRequest $request
     *
     * @return DescribeCustomBlockRecordsResponse
     */
    public function describeCustomBlockRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomBlockRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCycleTaskListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCycleTaskListResponse
     */
    public function describeCycleTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCycleTaskList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCycleTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCycleTaskListRequest $request
     *
     * @return DescribeCycleTaskListResponse
     */
    public function describeCycleTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCycleTaskListWithOptions($request, $runtime);
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEmgUserAgreementResponse
     */
    public function describeEmgUserAgreementWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeEmgUserAgreement',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEmgUserAgreementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeEmgUserAgreementResponse
     */
    public function describeEmgUserAgreement()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmgUserAgreementWithOptions($runtime);
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
     * @param DescribeEventLevelCountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEventLevelCountResponse
     */
    public function describeEventLevelCountWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->containerIds)) {
            $query['ContainerIds'] = $request->containerIds;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventLevelCount',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventLevelCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventLevelCountRequest $request
     *
     * @return DescribeEventLevelCountResponse
     */
    public function describeEventLevelCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventLevelCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventOnStageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEventOnStageResponse
     */
    public function describeEventOnStageWithOptions($request, $runtime)
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
            'action'      => 'DescribeEventOnStage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventOnStageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventOnStageRequest $request
     *
     * @return DescribeEventOnStageResponse
     */
    public function describeEventOnStage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventOnStageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExcludeSystemPathRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExcludeSystemPathResponse
     */
    public function describeExcludeSystemPathWithOptions($request, $runtime)
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
            'action'      => 'DescribeExcludeSystemPath',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExcludeSystemPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExcludeSystemPathRequest $request
     *
     * @return DescribeExcludeSystemPathResponse
     */
    public function describeExcludeSystemPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExcludeSystemPathWithOptions($request, $runtime);
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
     * @param DescribeExposedCheckWarningRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeExposedCheckWarningResponse
     */
    public function describeExposedCheckWarningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeExposedCheckWarning',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExposedCheckWarningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExposedCheckWarningRequest $request
     *
     * @return DescribeExposedCheckWarningResponse
     */
    public function describeExposedCheckWarning($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExposedCheckWarningWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        if (!Utils::isUnset($request->vendors)) {
            $query['Vendors'] = $request->vendors;
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
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
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
     * @param DescribeHcExportInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHcExportInfoResponse
     */
    public function describeHcExportInfoWithOptions($request, $runtime)
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
            'action'      => 'DescribeHcExportInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHcExportInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHcExportInfoRequest $request
     *
     * @return DescribeHcExportInfoResponse
     */
    public function describeHcExportInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHcExportInfoWithOptions($request, $runtime);
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
     * @param DescribeImageRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeImageResponse
     */
    public function describeImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageInstanceId)) {
            $query['ImageInstanceId'] = $request->imageInstanceId;
        }
        if (!Utils::isUnset($request->imageRegionId)) {
            $query['ImageRegionId'] = $request->imageRegionId;
        }
        if (!Utils::isUnset($request->imageRepoId)) {
            $query['ImageRepoId'] = $request->imageRepoId;
        }
        if (!Utils::isUnset($request->imageTag)) {
            $query['ImageTag'] = $request->imageTag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageRequest $request
     *
     * @return DescribeImageResponse
     */
    public function describeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageBaselineCheckResultRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeImageBaselineCheckResultResponse
     */
    public function describeImageBaselineCheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->criteriaType)) {
            $query['CriteriaType'] = $request->criteriaType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->imageUuid)) {
            $query['ImageUuid'] = $request->imageUuid;
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
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageBaselineCheckResult',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageBaselineCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageBaselineCheckResultRequest $request
     *
     * @return DescribeImageBaselineCheckResultResponse
     */
    public function describeImageBaselineCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageBaselineCheckResultWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
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
     * @param DescribeImageBaselineDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeImageBaselineDetailResponse
     */
    public function describeImageBaselineDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baselineItemKey)) {
            $query['BaselineItemKey'] = $request->baselineItemKey;
        }
        if (!Utils::isUnset($request->imageUuid)) {
            $query['ImageUuid'] = $request->imageUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageBaselineDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageBaselineDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageBaselineDetailRequest $request
     *
     * @return DescribeImageBaselineDetailResponse
     */
    public function describeImageBaselineDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageBaselineDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageBaselineItemListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeImageBaselineItemListResponse
     */
    public function describeImageBaselineItemListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baselineClassKey)) {
            $query['BaselineClassKey'] = $request->baselineClassKey;
        }
        if (!Utils::isUnset($request->baselineNameKey)) {
            $query['BaselineNameKey'] = $request->baselineNameKey;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->imageUuid)) {
            $query['ImageUuid'] = $request->imageUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageBaselineItemList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageBaselineItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageBaselineItemListRequest $request
     *
     * @return DescribeImageBaselineItemListResponse
     */
    public function describeImageBaselineItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageBaselineItemListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageBaselineStrategyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeImageBaselineStrategyResponse
     */
    public function describeImageBaselineStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageBaselineStrategy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageBaselineStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageBaselineStrategyRequest $request
     *
     * @return DescribeImageBaselineStrategyResponse
     */
    public function describeImageBaselineStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageBaselineStrategyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageCriteriaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeImageCriteriaResponse
     */
    public function describeImageCriteriaWithOptions($request, $runtime)
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
            'action'      => 'DescribeImageCriteria',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageCriteriaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageCriteriaRequest $request
     *
     * @return DescribeImageCriteriaResponse
     */
    public function describeImageCriteria($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageCriteriaWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
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
     * @param DescribeImageInfoListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeImageInfoListResponse
     */
    public function describeImageInfoListWithOptions($request, $runtime)
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
            'action'      => 'DescribeImageInfoList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageInfoListRequest $request
     *
     * @return DescribeImageInfoListResponse
     */
    public function describeImageInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageInfoListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeImageInstancesResponse
     */
    public function describeImageInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->logicalExp)) {
            $query['LogicalExp'] = $request->logicalExp;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scanned)) {
            $query['Scanned'] = $request->scanned;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageInstances',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageInstancesRequest $request
     *
     * @return DescribeImageInstancesResponse
     */
    public function describeImageInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageLatestScanTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeImageLatestScanTaskResponse
     */
    public function describeImageLatestScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->digest)) {
            $query['Digest'] = $request->digest;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageLatestScanTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageLatestScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageLatestScanTaskRequest $request
     *
     * @return DescribeImageLatestScanTaskResponse
     */
    public function describeImageLatestScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageLatestScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageListBySensitiveFileRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeImageListBySensitiveFileResponse
     */
    public function describeImageListBySensitiveFileWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeImageListBySensitiveFileShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->scanRange)) {
            $request->scanRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scanRange, 'ScanRange', 'json');
        }
        $query = [];
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
        if (!Utils::isUnset($request->riskLevel)) {
            $query['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->scanRangeShrink)) {
            $query['ScanRange'] = $request->scanRangeShrink;
        }
        if (!Utils::isUnset($request->sensitiveFileKey)) {
            $query['SensitiveFileKey'] = $request->sensitiveFileKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageListBySensitiveFile',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageListBySensitiveFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageListBySensitiveFileRequest $request
     *
     * @return DescribeImageListBySensitiveFileResponse
     */
    public function describeImageListBySensitiveFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageListBySensitiveFileWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->containerId)) {
            $query['ContainerId'] = $request->containerId;
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
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->imageDigest)) {
            $query['ImageDigest'] = $request->imageDigest;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pod)) {
            $query['Pod'] = $request->pod;
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
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
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
     * @param DescribeImageRepoCriteriaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeImageRepoCriteriaResponse
     */
    public function describeImageRepoCriteriaWithOptions($request, $runtime)
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
            'action'      => 'DescribeImageRepoCriteria',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageRepoCriteriaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageRepoCriteriaRequest $request
     *
     * @return DescribeImageRepoCriteriaResponse
     */
    public function describeImageRepoCriteria($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageRepoCriteriaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageRepoDetailListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeImageRepoDetailListResponse
     */
    public function describeImageRepoDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
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
            'action'      => 'DescribeImageRepoDetailList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageRepoDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageRepoDetailListRequest $request
     *
     * @return DescribeImageRepoDetailListResponse
     */
    public function describeImageRepoDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageRepoDetailListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageRepoListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeImageRepoListResponse
     */
    public function describeImageRepoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $query['FieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['FieldValue'] = $request->fieldValue;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repoName)) {
            $query['RepoName'] = $request->repoName;
        }
        if (!Utils::isUnset($request->repoNamespace)) {
            $query['RepoNamespace'] = $request->repoNamespace;
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
            'action'      => 'DescribeImageRepoList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageRepoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageRepoListRequest $request
     *
     * @return DescribeImageRepoListResponse
     */
    public function describeImageRepoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageRepoListWithOptions($request, $runtime);
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
     * @return DescribeImageScanAuthorizationResponse
     */
    public function describeImageScanAuthorizationWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeImageScanAuthorization',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageScanAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeImageScanAuthorizationResponse
     */
    public function describeImageScanAuthorization()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageScanAuthorizationWithOptions($runtime);
    }

    /**
     * @param DescribeImageSensitiveFileByKeyRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeImageSensitiveFileByKeyResponse
     */
    public function describeImageSensitiveFileByKeyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeImageSensitiveFileByKeyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->scanRange)) {
            $request->scanRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scanRange, 'ScanRange', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->imageUuid)) {
            $query['ImageUuid'] = $request->imageUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scanRangeShrink)) {
            $query['ScanRange'] = $request->scanRangeShrink;
        }
        if (!Utils::isUnset($request->sensitiveFileKey)) {
            $query['SensitiveFileKey'] = $request->sensitiveFileKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageSensitiveFileByKey',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageSensitiveFileByKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageSensitiveFileByKeyRequest $request
     *
     * @return DescribeImageSensitiveFileByKeyResponse
     */
    public function describeImageSensitiveFileByKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageSensitiveFileByKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageSensitiveFileListRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeImageSensitiveFileListResponse
     */
    public function describeImageSensitiveFileListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeImageSensitiveFileListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->scanRange)) {
            $request->scanRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scanRange, 'ScanRange', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->criteria)) {
            $query['Criteria'] = $request->criteria;
        }
        if (!Utils::isUnset($request->criteriaType)) {
            $query['CriteriaType'] = $request->criteriaType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->imageUuid)) {
            $query['ImageUuid'] = $request->imageUuid;
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
        if (!Utils::isUnset($request->scanRangeShrink)) {
            $query['ScanRange'] = $request->scanRangeShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageSensitiveFileList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageSensitiveFileListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageSensitiveFileListRequest $request
     *
     * @return DescribeImageSensitiveFileListResponse
     */
    public function describeImageSensitiveFileList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageSensitiveFileListWithOptions($request, $runtime);
    }

    /**
     * Security Center can scan for security risks and collect statistics only for **Container Registry Enterprise Edition instances**.
     *   * >  Security Center cannot scan for security risks or collect statistics for **default** Container Registry instances.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImageStatisticsResponse DescribeImageStatisticsResponse
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
     * Security Center can scan for security risks and collect statistics only for **Container Registry Enterprise Edition instances**.
     *   * >  Security Center cannot scan for security risks or collect statistics for **default** Container Registry instances.
     *   *
     * @return DescribeImageStatisticsResponse DescribeImageStatisticsResponse
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
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->containerId)) {
            $query['ContainerId'] = $request->containerId;
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
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
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
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pod)) {
            $query['Pod'] = $request->pod;
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
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
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
     * @return DescribeInstallCodeResponse
     */
    public function describeInstallCodeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeInstallCode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstallCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeInstallCodeResponse
     */
    public function describeInstallCode()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstallCodeWithOptions($runtime);
    }

    /**
     * You can call the DescribeInstallCodes operation to query the commands that are used to manually install the Security Center agent. The returned results contain the installation verification code and the server information. If you want to manually install the Security Center agent on your server, you can call this operation to query installation commands.
     *   * # Limits
     *   * You can call this API operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstallCodesResponse DescribeInstallCodesResponse
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
     * You can call the DescribeInstallCodes operation to query the commands that are used to manually install the Security Center agent. The returned results contain the installation verification code and the server information. If you want to manually install the Security Center agent on your server, you can call this operation to query installation commands.
     *   * # Limits
     *   * You can call this API operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @return DescribeInstallCodesResponse DescribeInstallCodesResponse
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
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
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
     * @param DescribeIpTagsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeIpTagsResponse
     */
    public function describeIpTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->securityEventId)) {
            $query['SecurityEventId'] = $request->securityEventId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpTags',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpTagsRequest $request
     *
     * @return DescribeIpTagsResponse
     */
    public function describeIpTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpTagsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeLatestScanTaskResponse
     */
    public function describeLatestScanTaskWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeLatestScanTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLatestScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeLatestScanTaskResponse
     */
    public function describeLatestScanTask()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLatestScanTaskWithOptions($runtime);
    }

    /**
     * @param DescribeLogMetaRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeLogMetaResponse
     */
    public function describeLogMetaWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogMeta',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogMetaRequest $request
     *
     * @return DescribeLogMetaResponse
     */
    public function describeLogMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogMetaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogShipperStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLogShipperStatusResponse
     */
    public function describeLogShipperStatusWithOptions($request, $runtime)
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
            'action'      => 'DescribeLogShipperStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogShipperStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogShipperStatusRequest $request
     *
     * @return DescribeLogShipperStatusResponse
     */
    public function describeLogShipperStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogShipperStatusWithOptions($request, $runtime);
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeLoginSwitchConfigsResponse
     */
    public function describeLoginSwitchConfigsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeLoginSwitchConfigs',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoginSwitchConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeLoginSwitchConfigsResponse
     */
    public function describeLoginSwitchConfigs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoginSwitchConfigsWithOptions($runtime);
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
     * @param DescribeMachineCanRebootRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeMachineCanRebootResponse
     */
    public function describeMachineCanRebootWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeMachineCanReboot',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMachineCanRebootResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMachineCanRebootRequest $request
     *
     * @return DescribeMachineCanRebootResponse
     */
    public function describeMachineCanReboot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMachineCanRebootWithOptions($request, $runtime);
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
     * @param DescribeNsasSuspEventTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNsasSuspEventTypeResponse
     */
    public function describeNsasSuspEventTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerFieldName)) {
            $query['ContainerFieldName'] = $request->containerFieldName;
        }
        if (!Utils::isUnset($request->containerFieldValue)) {
            $query['ContainerFieldValue'] = $request->containerFieldValue;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
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
            'action'      => 'DescribeNsasSuspEventType',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNsasSuspEventTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNsasSuspEventTypeRequest $request
     *
     * @return DescribeNsasSuspEventTypeResponse
     */
    public function describeNsasSuspEventType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNsasSuspEventTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOfflineMachinesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeOfflineMachinesResponse
     */
    public function describeOfflineMachinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionIdStr)) {
            $query['RegionIdStr'] = $request->regionIdStr;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOfflineMachines',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOfflineMachinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOfflineMachinesRequest $request
     *
     * @return DescribeOfflineMachinesResponse
     */
    public function describeOfflineMachines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOfflineMachinesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
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
     * @param DescribeOnceTaskLeafRecordPageRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeOnceTaskLeafRecordPageResponse
     */
    public function describeOnceTaskLeafRecordPageWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->relateInfo)) {
            $query['RelateInfo'] = $request->relateInfo;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOnceTaskLeafRecordPage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOnceTaskLeafRecordPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOnceTaskLeafRecordPageRequest $request
     *
     * @return DescribeOnceTaskLeafRecordPageResponse
     */
    public function describeOnceTaskLeafRecordPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnceTaskLeafRecordPageWithOptions($request, $runtime);
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
     * @param DescribePropertyCronItemRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePropertyCronItemResponse
     */
    public function describePropertyCronItemWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyCronItem',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyCronItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyCronItemRequest $request
     *
     * @return DescribePropertyCronItemResponse
     */
    public function describePropertyCronItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyCronItemWithOptions($request, $runtime);
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
     * @param DescribePropertyScaItemRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePropertyScaItemResponse
     */
    public function describePropertyScaItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->biz)) {
            $query['Biz'] = $request->biz;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->forceFlush)) {
            $query['ForceFlush'] = $request->forceFlush;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchInfo)) {
            $query['SearchInfo'] = $request->searchInfo;
        }
        if (!Utils::isUnset($request->searchItem)) {
            $query['SearchItem'] = $request->searchItem;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyScaItem',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyScaItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyScaItemRequest $request
     *
     * @return DescribePropertyScaItemResponse
     */
    public function describePropertyScaItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyScaItemWithOptions($request, $runtime);
    }

    /**
     * @param DescribePropertyScheduleConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribePropertyScheduleConfigResponse
     */
    public function describePropertyScheduleConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribePropertyScheduleConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyScheduleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyScheduleConfigRequest $request
     *
     * @return DescribePropertyScheduleConfigResponse
     */
    public function describePropertyScheduleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyScheduleConfigWithOptions($request, $runtime);
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
     * @param DescribePropertyTypeScaItemRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePropertyTypeScaItemResponse
     */
    public function describePropertyTypeScaItemWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePropertyTypeScaItem',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePropertyTypeScaItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePropertyTypeScaItemRequest $request
     *
     * @return DescribePropertyTypeScaItemResponse
     */
    public function describePropertyTypeScaItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePropertyTypeScaItemWithOptions($request, $runtime);
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
     * @param DescribeQuaraFileDownloadInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeQuaraFileDownloadInfoResponse
     */
    public function describeQuaraFileDownloadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->quaraFileId)) {
            $query['QuaraFileId'] = $request->quaraFileId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQuaraFileDownloadInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeQuaraFileDownloadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQuaraFileDownloadInfoRequest $request
     *
     * @return DescribeQuaraFileDownloadInfoResponse
     */
    public function describeQuaraFileDownloadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQuaraFileDownloadInfoWithOptions($request, $runtime);
    }

    /**
     * If the data on your servers is encrypted by ransomware, you can create a restoration task to restore the data on your servers by using backup data in Security Center.
     *   * >  After you enable an anti-ransomware policy, the data on your servers is backed up based on the policy. For more information about anti-ransomware policies, see [Manage protection policies](~~164781~~).
     *   *
     * @param DescribeRestoreJobsRequest $request DescribeRestoreJobsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRestoreJobsResponse DescribeRestoreJobsResponse
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
     * If the data on your servers is encrypted by ransomware, you can create a restoration task to restore the data on your servers by using backup data in Security Center.
     *   * >  After you enable an anti-ransomware policy, the data on your servers is backed up based on the policy. For more information about anti-ransomware policies, see [Manage protection policies](~~164781~~).
     *   *
     * @param DescribeRestoreJobsRequest $request DescribeRestoreJobsRequest
     *
     * @return DescribeRestoreJobsResponse DescribeRestoreJobsResponse
     */
    public function describeRestoreJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreJobsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRestorePlansRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRestorePlansResponse
     */
    public function describeRestorePlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
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
            'action'      => 'DescribeRestorePlans',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestorePlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRestorePlansRequest $request
     *
     * @return DescribeRestorePlansResponse
     */
    public function describeRestorePlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestorePlansWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskCheckItemResultRequest $request DescribeRiskCheckItemResultRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskCheckItemResultResponse DescribeRiskCheckItemResultResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskCheckItemResultRequest $request DescribeRiskCheckItemResultRequest
     *
     * @return DescribeRiskCheckItemResultResponse DescribeRiskCheckItemResultResponse
     */
    public function describeRiskCheckItemResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskCheckItemResultWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskCheckResultRequest $request DescribeRiskCheckResultRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskCheckResultResponse DescribeRiskCheckResultResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskCheckResultRequest $request DescribeRiskCheckResultRequest
     *
     * @return DescribeRiskCheckResultResponse DescribeRiskCheckResultResponse
     */
    public function describeRiskCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskCheckResultWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskCheckSummaryRequest $request DescribeRiskCheckSummaryRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskCheckSummaryResponse DescribeRiskCheckSummaryResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskCheckSummaryRequest $request DescribeRiskCheckSummaryRequest
     *
     * @return DescribeRiskCheckSummaryResponse DescribeRiskCheckSummaryResponse
     */
    public function describeRiskCheckSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskCheckSummaryWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskItemTypeRequest $request DescribeRiskItemTypeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskItemTypeResponse DescribeRiskItemTypeResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskItemTypeRequest $request DescribeRiskItemTypeRequest
     *
     * @return DescribeRiskItemTypeResponse DescribeRiskItemTypeResponse
     */
    public function describeRiskItemType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskItemTypeWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskListCheckResultRequest $request DescribeRiskListCheckResultRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskListCheckResultResponse DescribeRiskListCheckResultResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeRiskListCheckResultRequest $request DescribeRiskListCheckResultRequest
     *
     * @return DescribeRiskListCheckResultResponse DescribeRiskListCheckResultResponse
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
     * @param DescribeRisksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRisksResponse
     */
    public function describeRisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->riskId)) {
            $query['RiskId'] = $request->riskId;
        }
        if (!Utils::isUnset($request->riskName)) {
            $query['RiskName'] = $request->riskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRisks',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRisksRequest $request
     *
     * @return DescribeRisksResponse
     */
    public function describeRisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRisksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSasPmAgentListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSasPmAgentListResponse
     */
    public function describeSasPmAgentListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSasPmAgentList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSasPmAgentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSasPmAgentListRequest $request
     *
     * @return DescribeSasPmAgentListResponse
     */
    public function describeSasPmAgentList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSasPmAgentListWithOptions($request, $runtime);
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
     * @param DescribeScanTaskStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeScanTaskStatisticsResponse
     */
    public function describeScanTaskStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->levels)) {
            $query['Levels'] = $request->levels;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScanTaskStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScanTaskStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScanTaskStatisticsRequest $request
     *
     * @return DescribeScanTaskStatisticsResponse
     */
    public function describeScanTaskStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScanTaskStatisticsWithOptions($request, $runtime);
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeSecurityCheckScheduleConfigRequest $request DescribeSecurityCheckScheduleConfigRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityCheckScheduleConfigResponse DescribeSecurityCheckScheduleConfigResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param DescribeSecurityCheckScheduleConfigRequest $request DescribeSecurityCheckScheduleConfigRequest
     *
     * @return DescribeSecurityCheckScheduleConfigResponse DescribeSecurityCheckScheduleConfigResponse
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
     * @param DescribeServiceLinkedRoleStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeServiceLinkedRoleStatusResponse
     */
    public function describeServiceLinkedRoleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceLinkedRole)) {
            $query['ServiceLinkedRole'] = $request->serviceLinkedRole;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
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
     * @param DescribeServiceLinkedRoleStatusRequest $request
     *
     * @return DescribeServiceLinkedRoleStatusResponse
     */
    public function describeServiceLinkedRoleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceLinkedRoleStatusWithOptions($request, $runtime);
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
     * @param DescribeSnapshotsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->isAliYunEcs)) {
            $query['IsAliYunEcs'] = $request->isAliYunEcs;
        }
        if (!Utils::isUnset($request->machineRegion)) {
            $query['MachineRegion'] = $request->machineRegion;
        }
        if (!Utils::isUnset($request->machineRemark)) {
            $query['MachineRemark'] = $request->machineRemark;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSnapshots',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSnapshotsRequest $request
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
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
     * @param DescribeSuspEventExportInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSuspEventExportInfoResponse
     */
    public function describeSuspEventExportInfoWithOptions($request, $runtime)
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
            'action'      => 'DescribeSuspEventExportInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspEventExportInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSuspEventExportInfoRequest $request
     *
     * @return DescribeSuspEventExportInfoResponse
     */
    public function describeSuspEventExportInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventExportInfoWithOptions($request, $runtime);
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
     * @param DescribeSuspEventUserSettingRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeSuspEventUserSettingResponse
     */
    public function describeSuspEventUserSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSuspEventUserSetting',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspEventUserSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSuspEventUserSettingRequest $request
     *
     * @return DescribeSuspEventUserSettingResponse
     */
    public function describeSuspEventUserSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventUserSettingWithOptions($request, $runtime);
    }

    /**
     * The alert aggregation feature of Security Center analyzes the paths of alerts to aggregate multiple alerts generated on the intrusions that are launched from the same IP address or service, or on the same user.
     *   * You can call the  [DescribeAlarmEventList](~~DescribeAlarmEventList~~) or [DescribeSuspEvents ](~~DescribeSuspEvents~~)  operation to query alert events.
     *   * *   If your Security Center runs the Enterprise or Ultimate edition and you enabled the alert aggregation feature in the Security Center console, you can call the [DescribeAlarmEventList](~~DescribeAlarmEventList~~) operation to query alert events.
     *   * *   If your Security Center runs the Enterprise or Ultimate edition but you did not enable the alert aggregation feature in the Security Center console, you can call the [DescribeSuspEvents ](~~DescribeSuspEvents~~) operation to query alert events.
     *   * *   If your Security Center does not run the Enterprise or Ultimate edition, you can call the [DescribeSuspEvents ](~~DescribeSuspEvents~~) operation to query alert events.
     *   *
     * @param DescribeSuspEventsRequest $request DescribeSuspEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSuspEventsResponse DescribeSuspEventsResponse
     */
    public function describeSuspEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmUniqueInfo)) {
            $query['AlarmUniqueInfo'] = $request->alarmUniqueInfo;
        }
        if (!Utils::isUnset($request->assetsTypeList)) {
            $query['AssetsTypeList'] = $request->assetsTypeList;
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
        if (!Utils::isUnset($request->sortColumn)) {
            $query['SortColumn'] = $request->sortColumn;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
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
     * The alert aggregation feature of Security Center analyzes the paths of alerts to aggregate multiple alerts generated on the intrusions that are launched from the same IP address or service, or on the same user.
     *   * You can call the  [DescribeAlarmEventList](~~DescribeAlarmEventList~~) or [DescribeSuspEvents ](~~DescribeSuspEvents~~)  operation to query alert events.
     *   * *   If your Security Center runs the Enterprise or Ultimate edition and you enabled the alert aggregation feature in the Security Center console, you can call the [DescribeAlarmEventList](~~DescribeAlarmEventList~~) operation to query alert events.
     *   * *   If your Security Center runs the Enterprise or Ultimate edition but you did not enable the alert aggregation feature in the Security Center console, you can call the [DescribeSuspEvents ](~~DescribeSuspEvents~~) operation to query alert events.
     *   * *   If your Security Center does not run the Enterprise or Ultimate edition, you can call the [DescribeSuspEvents ](~~DescribeSuspEvents~~) operation to query alert events.
     *   *
     * @param DescribeSuspEventsRequest $request DescribeSuspEventsRequest
     *
     * @return DescribeSuspEventsResponse DescribeSuspEventsResponse
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
     * @param DescribeTargetRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTargetResponse
     */
    public function describeTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTarget',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTargetRequest $request
     *
     * @return DescribeTargetResponse
     */
    public function describeTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTargetWithOptions($request, $runtime);
    }

    /**
     * # Usage notes
     *   * You can call the DescribeTaskErrorLog operation to query the error logs that record tasks failed to fix image vulnerabilities. If a task fails to fix an image vulnerability, Security Center generates an error log. You can identify the cause of the failure based on the error log.
     *   *
     *   * # Limits
     *   * You can call this operation up to 10 times per second for each account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeTaskErrorLogRequest $request DescribeTaskErrorLogRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskErrorLogResponse DescribeTaskErrorLogResponse
     */
    public function describeTaskErrorLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buildTaskId)) {
            $query['BuildTaskId'] = $request->buildTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTaskErrorLog',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskErrorLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * # Usage notes
     *   * You can call the DescribeTaskErrorLog operation to query the error logs that record tasks failed to fix image vulnerabilities. If a task fails to fix an image vulnerability, Security Center generates an error log. You can identify the cause of the failure based on the error log.
     *   *
     *   * # Limits
     *   * You can call this operation up to 10 times per second for each account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param DescribeTaskErrorLogRequest $request DescribeTaskErrorLogRequest
     *
     * @return DescribeTaskErrorLogResponse DescribeTaskErrorLogResponse
     */
    public function describeTaskErrorLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskErrorLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTotalStatisticsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTotalStatisticsResponse
     */
    public function describeTotalStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTotalStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTotalStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTotalStatisticsRequest $request
     *
     * @return DescribeTotalStatisticsResponse
     */
    public function describeTotalStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTotalStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTraceInfoDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTraceInfoDetailResponse
     */
    public function describeTraceInfoDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->incidentTime)) {
            $query['IncidentTime'] = $request->incidentTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
        if (!Utils::isUnset($request->vertexId)) {
            $query['VertexId'] = $request->vertexId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTraceInfoDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTraceInfoDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTraceInfoDetailRequest $request
     *
     * @return DescribeTraceInfoDetailResponse
     */
    public function describeTraceInfoDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTraceInfoDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTraceInfoNodeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTraceInfoNodeResponse
     */
    public function describeTraceInfoNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->incidentTime)) {
            $query['IncidentTime'] = $request->incidentTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
        if (!Utils::isUnset($request->vertexId)) {
            $query['VertexId'] = $request->vertexId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTraceInfoNode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTraceInfoNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTraceInfoNodeRequest $request
     *
     * @return DescribeTraceInfoNodeResponse
     */
    public function describeTraceInfoNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTraceInfoNodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUniBackupDatabaseRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUniBackupDatabaseResponse
     */
    public function describeUniBackupDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->uniRegionId)) {
            $query['UniRegionId'] = $request->uniRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUniBackupDatabase',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUniBackupDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUniBackupDatabaseRequest $request
     *
     * @return DescribeUniBackupDatabaseResponse
     */
    public function describeUniBackupDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUniBackupDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUniBackupPoliciesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUniBackupPoliciesResponse
     */
    public function describeUniBackupPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUniBackupPolicies',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUniBackupPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUniBackupPoliciesRequest $request
     *
     * @return DescribeUniBackupPoliciesResponse
     */
    public function describeUniBackupPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUniBackupPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUniBackupPolicyDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUniBackupPolicyDetailResponse
     */
    public function describeUniBackupPolicyDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUniBackupPolicyDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUniBackupPolicyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUniBackupPolicyDetailRequest $request
     *
     * @return DescribeUniBackupPolicyDetailResponse
     */
    public function describeUniBackupPolicyDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUniBackupPolicyDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUniRecoverableListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeUniRecoverableListResponse
     */
    public function describeUniRecoverableListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUniRecoverableList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUniRecoverableListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUniRecoverableListRequest $request
     *
     * @return DescribeUniRecoverableListResponse
     */
    public function describeUniRecoverableList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUniRecoverableListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUniSupportRegionResponse
     */
    public function describeUniSupportRegionWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeUniSupportRegion',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUniSupportRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeUniSupportRegionResponse
     */
    public function describeUniSupportRegion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUniSupportRegionWithOptions($runtime);
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
     * @param DescribeVulCheckTaskStatusDetailRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVulCheckTaskStatusDetailResponse
     */
    public function describeVulCheckTaskStatusDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskIds)) {
            $query['TaskIds'] = $request->taskIds;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulCheckTaskStatusDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulCheckTaskStatusDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulCheckTaskStatusDetailRequest $request
     *
     * @return DescribeVulCheckTaskStatusDetailResponse
     */
    public function describeVulCheckTaskStatusDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulCheckTaskStatusDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVulConfigResponse
     */
    public function describeVulConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeVulConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulConfigRequest $request
     *
     * @return DescribeVulConfigResponse
     */
    public function describeVulConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulConfigWithOptions($request, $runtime);
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeVulFixStatisticsResponse
     */
    public function describeVulFixStatisticsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeVulFixStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulFixStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeVulFixStatisticsResponse
     */
    public function describeVulFixStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulFixStatisticsWithOptions($runtime);
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
     * @param DescribeVulListPageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVulListPageResponse
     */
    public function describeVulListPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->cveId)) {
            $query['CveId'] = $request->cveId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->vulNameLike)) {
            $query['VulNameLike'] = $request->vulNameLike;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulListPage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulListPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulListPageRequest $request
     *
     * @return DescribeVulListPageResponse
     */
    public function describeVulListPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulListPageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulNumStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVulNumStatisticsResponse
     */
    public function describeVulNumStatisticsWithOptions($request, $runtime)
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
            'action'      => 'DescribeVulNumStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulNumStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulNumStatisticsRequest $request
     *
     * @return DescribeVulNumStatisticsResponse
     */
    public function describeVulNumStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulNumStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulTargetConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVulTargetConfigResponse
     */
    public function describeVulTargetConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeVulTargetConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulTargetConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulTargetConfigRequest $request
     *
     * @return DescribeVulTargetConfigResponse
     */
    public function describeVulTargetConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulTargetConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulTargetStatisticsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVulTargetStatisticsResponse
     */
    public function describeVulTargetStatisticsWithOptions($request, $runtime)
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
            'action'      => 'DescribeVulTargetStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulTargetStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVulTargetStatisticsRequest $request
     *
     * @return DescribeVulTargetStatisticsResponse
     */
    public function describeVulTargetStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulTargetStatisticsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->haveRisk)) {
            $query['HaveRisk'] = $request->haveRisk;
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeWebLockExclusiveFileTypeResponse
     */
    public function describeWebLockExclusiveFileTypeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeWebLockExclusiveFileType',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockExclusiveFileTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeWebLockExclusiveFileTypeResponse
     */
    public function describeWebLockExclusiveFileType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockExclusiveFileTypeWithOptions($runtime);
    }

    /**
     * @param DescribeWebLockFileChangeStatisticsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeWebLockFileChangeStatisticsResponse
     */
    public function describeWebLockFileChangeStatisticsWithOptions($request, $runtime)
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
            'action'      => 'DescribeWebLockFileChangeStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockFileChangeStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebLockFileChangeStatisticsRequest $request
     *
     * @return DescribeWebLockFileChangeStatisticsResponse
     */
    public function describeWebLockFileChangeStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockFileChangeStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebLockFileEventsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeWebLockFileEventsResponse
     */
    public function describeWebLockFileEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processName)) {
            $query['ProcessName'] = $request->processName;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->tsBegin)) {
            $query['TsBegin'] = $request->tsBegin;
        }
        if (!Utils::isUnset($request->tsEnd)) {
            $query['TsEnd'] = $request->tsEnd;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebLockFileEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockFileEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebLockFileEventsRequest $request
     *
     * @return DescribeWebLockFileEventsResponse
     */
    public function describeWebLockFileEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockFileEventsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeWebLockFileTypeSummaryResponse
     */
    public function describeWebLockFileTypeSummaryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeWebLockFileTypeSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockFileTypeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeWebLockFileTypeSummaryResponse
     */
    public function describeWebLockFileTypeSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockFileTypeSummaryWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeWebLockInclusiveFileTypeResponse
     */
    public function describeWebLockInclusiveFileTypeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeWebLockInclusiveFileType',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockInclusiveFileTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeWebLockInclusiveFileTypeResponse
     */
    public function describeWebLockInclusiveFileType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockInclusiveFileTypeWithOptions($runtime);
    }

    /**
     * @param DescribeWebLockProcessBlockStatisticsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeWebLockProcessBlockStatisticsResponse
     */
    public function describeWebLockProcessBlockStatisticsWithOptions($request, $runtime)
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
            'action'      => 'DescribeWebLockProcessBlockStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockProcessBlockStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebLockProcessBlockStatisticsRequest $request
     *
     * @return DescribeWebLockProcessBlockStatisticsResponse
     */
    public function describeWebLockProcessBlockStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockProcessBlockStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebLockProcessListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeWebLockProcessListResponse
     */
    public function describeWebLockProcessListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processName)) {
            $query['ProcessName'] = $request->processName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebLockProcessList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebLockProcessListRequest $request
     *
     * @return DescribeWebLockProcessListResponse
     */
    public function describeWebLockProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockProcessListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWebLockStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeWebLockStatusResponse
     */
    public function describeWebLockStatusWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWebLockStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebLockStatusRequest $request
     *
     * @return DescribeWebLockStatusResponse
     */
    public function describeWebLockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockStatusWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeWebLockTotalFileChangeCountResponse
     */
    public function describeWebLockTotalFileChangeCountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeWebLockTotalFileChangeCount',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebLockTotalFileChangeCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeWebLockTotalFileChangeCountResponse
     */
    public function describeWebLockTotalFileChangeCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebLockTotalFileChangeCountWithOptions($runtime);
    }

    /**
     * @param DescribeWebPathRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeWebPathResponse
     */
    public function describeWebPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeWebPath',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWebPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWebPathRequest $request
     *
     * @return DescribeWebPathResponse
     */
    public function describeWebPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWebPathWithOptions($request, $runtime);
    }

    /**
     * @param DisableBruteForceRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableBruteForceRecordResponse
     */
    public function disableBruteForceRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blockIp)) {
            $query['BlockIp'] = $request->blockIp;
        }
        if (!Utils::isUnset($request->bound)) {
            $query['Bound'] = $request->bound;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableBruteForceRecord',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableBruteForceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableBruteForceRecordRequest $request
     *
     * @return DisableBruteForceRecordResponse
     */
    public function disableBruteForceRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableBruteForceRecordWithOptions($request, $runtime);
    }

    /**
     * @param DisableCustomBlockRecordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableCustomBlockRecordResponse
     */
    public function disableCustomBlockRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blockIp)) {
            $query['BlockIp'] = $request->blockIp;
        }
        if (!Utils::isUnset($request->bound)) {
            $query['Bound'] = $request->bound;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableCustomBlockRecord',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableCustomBlockRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableCustomBlockRecordRequest $request
     *
     * @return DisableCustomBlockRecordResponse
     */
    public function disableCustomBlockRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableCustomBlockRecordWithOptions($request, $runtime);
    }

    /**
     * @param EnableBruteForceRecordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EnableBruteForceRecordResponse
     */
    public function enableBruteForceRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blockIp)) {
            $query['BlockIp'] = $request->blockIp;
        }
        if (!Utils::isUnset($request->bound)) {
            $query['Bound'] = $request->bound;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableBruteForceRecord',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableBruteForceRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableBruteForceRecordRequest $request
     *
     * @return EnableBruteForceRecordResponse
     */
    public function enableBruteForceRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBruteForceRecordWithOptions($request, $runtime);
    }

    /**
     * @param EnableCustomBlockRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableCustomBlockRecordResponse
     */
    public function enableCustomBlockRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blockIp)) {
            $query['BlockIp'] = $request->blockIp;
        }
        if (!Utils::isUnset($request->bound)) {
            $query['Bound'] = $request->bound;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableCustomBlockRecord',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableCustomBlockRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableCustomBlockRecordRequest $request
     *
     * @return EnableCustomBlockRecordResponse
     */
    public function enableCustomBlockRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCustomBlockRecordWithOptions($request, $runtime);
    }

    /**
     * @param ExecStrategyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExecStrategyResponse
     */
    public function execStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecStrategy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecStrategyRequest $request
     *
     * @return ExecStrategyResponse
     */
    public function execStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->execStrategyWithOptions($request, $runtime);
    }

    /**
     * You can call the operation to export the following check result lists:
     *   * *   The list of servers on the Host page.
     *   * *   The lists of image system vulnerabilities, image application vulnerabilities, image baseline check results, and malicious image samples on the Image Security page.
     *   * *   The list of attack analysis data on the Attack Awareness page.
     *   * *   The list of check results for AccessKey pair leaks on the AccessKey Leak page.
     *   *
     * @param ExportRecordRequest $request ExportRecordRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportRecordResponse ExportRecordResponse
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
     * You can call the operation to export the following check result lists:
     *   * *   The list of servers on the Host page.
     *   * *   The lists of image system vulnerabilities, image application vulnerabilities, image baseline check results, and malicious image samples on the Image Security page.
     *   * *   The list of attack analysis data on the Attack Awareness page.
     *   * *   The list of check results for AccessKey pair leaks on the AccessKey Leak page.
     *   *
     * @param ExportRecordRequest $request ExportRecordRequest
     *
     * @return ExportRecordResponse ExportRecordResponse
     */
    public function exportRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportRecordWithOptions($request, $runtime);
    }

    /**
     * @param ExportSuspEventsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExportSuspEventsResponse
     */
    public function exportSuspEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetsTypeList)) {
            $query['AssetsTypeList'] = $request->assetsTypeList;
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
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
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
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentEventTypes)) {
            $query['ParentEventTypes'] = $request->parentEventTypes;
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
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->timeEnd)) {
            $query['TimeEnd'] = $request->timeEnd;
        }
        if (!Utils::isUnset($request->timeStart)) {
            $query['TimeStart'] = $request->timeStart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportSuspEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportSuspEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportSuspEventsRequest $request
     *
     * @return ExportSuspEventsResponse
     */
    public function exportSuspEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportSuspEventsWithOptions($request, $runtime);
    }

    /**
     * You can call the ExportVul operation to export the following types of vulnerabilities: Linux software vulnerabilities, Windows system vulnerabilities, Web-CMS vulnerabilities, application vulnerabilities, and urgent vulnerabilities.
     *   * You can use this operation together with the DescribeVulExportInfo operation. After you call the ExportVul operation to create a vulnerability export task, you can call the DescribeVulExportInfo operation to query the progress of the task by specifying the ID of the task.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ExportVulRequest $request ExportVulRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportVulResponse ExportVulResponse
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
     * You can call the ExportVul operation to export the following types of vulnerabilities: Linux software vulnerabilities, Windows system vulnerabilities, Web-CMS vulnerabilities, application vulnerabilities, and urgent vulnerabilities.
     *   * You can use this operation together with the DescribeVulExportInfo operation. After you call the ExportVul operation to create a vulnerability export task, you can call the DescribeVulExportInfo operation to query the progress of the task by specifying the ID of the task.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ExportVulRequest $request ExportVulRequest
     *
     * @return ExportVulResponse ExportVulResponse
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
     * @param FindContainerNetworkConnectRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return FindContainerNetworkConnectResponse
     */
    public function findContainerNetworkConnectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FindContainerNetworkConnectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dstNode)) {
            $request->dstNodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dstNode, 'DstNode', 'json');
        }
        if (!Utils::isUnset($tmpReq->srcNode)) {
            $request->srcNodeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->srcNode, 'SrcNode', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->criteriaType)) {
            $query['CriteriaType'] = $request->criteriaType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dstNodeShrink)) {
            $query['DstNode'] = $request->dstNodeShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->srcNodeShrink)) {
            $query['SrcNode'] = $request->srcNodeShrink;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FindContainerNetworkConnect',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindContainerNetworkConnectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FindContainerNetworkConnectRequest $request
     *
     * @return FindContainerNetworkConnectResponse
     */
    public function findContainerNetworkConnect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findContainerNetworkConnectWithOptions($request, $runtime);
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
     * @param GenerateOnceTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GenerateOnceTaskResponse
     */
    public function generateOnceTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateOnceTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateOnceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateOnceTaskRequest $request
     *
     * @return GenerateOnceTaskResponse
     */
    public function generateOnceTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateOnceTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetAlarmMachineCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAlarmMachineCountResponse
     */
    public function getAlarmMachineCountWithOptions($request, $runtime)
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
            'action'      => 'GetAlarmMachineCount',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAlarmMachineCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAlarmMachineCountRequest $request
     *
     * @return GetAlarmMachineCountResponse
     */
    public function getAlarmMachineCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlarmMachineCountWithOptions($request, $runtime);
    }

    /**
     * @param GetAppNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAppNetworkResponse
     */
    public function getAppNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppNetwork',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppNetworkRequest $request
     *
     * @return GetAppNetworkResponse
     */
    public function getAppNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppNetworkWithOptions($request, $runtime);
    }

    /**
     * @param GetAssetsPropertyDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAssetsPropertyDetailResponse
     */
    public function getAssetsPropertyDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->biz)) {
            $query['Biz'] = $request->biz;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->itemName)) {
            $query['ItemName'] = $request->itemName;
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
        if (!Utils::isUnset($request->searchCriteriaList)) {
            $query['SearchCriteriaList'] = $request->searchCriteriaList;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAssetsPropertyDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAssetsPropertyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAssetsPropertyDetailRequest $request
     *
     * @return GetAssetsPropertyDetailResponse
     */
    public function getAssetsPropertyDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAssetsPropertyDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetAssetsPropertyItemRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAssetsPropertyItemResponse
     */
    public function getAssetsPropertyItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->biz)) {
            $query['Biz'] = $request->biz;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->forceFlush)) {
            $query['ForceFlush'] = $request->forceFlush;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchInfo)) {
            $query['SearchInfo'] = $request->searchInfo;
        }
        if (!Utils::isUnset($request->searchItem)) {
            $query['SearchItem'] = $request->searchItem;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAssetsPropertyItem',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAssetsPropertyItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAssetsPropertyItemRequest $request
     *
     * @return GetAssetsPropertyItemResponse
     */
    public function getAssetsPropertyItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAssetsPropertyItemWithOptions($request, $runtime);
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
     * @param GetCheckConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCheckConfigResponse
     */
    public function getCheckConfigWithOptions($request, $runtime)
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
            'action'      => 'GetCheckConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCheckConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCheckConfigRequest $request
     *
     * @return GetCheckConfigResponse
     */
    public function getCheckConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCheckConfigWithOptions($request, $runtime);
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
     * @param GetCheckProcessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCheckProcessResponse
     */
    public function getCheckProcessWithOptions($request, $runtime)
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
            'action'      => 'GetCheckProcess',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCheckProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCheckProcessRequest $request
     *
     * @return GetCheckProcessResponse
     */
    public function getCheckProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCheckProcessWithOptions($request, $runtime);
    }

    /**
     * @param GetCheckRiskStatisticsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCheckRiskStatisticsResponse
     */
    public function getCheckRiskStatisticsWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCheckRiskStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCheckRiskStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCheckRiskStatisticsRequest $request
     *
     * @return GetCheckRiskStatisticsResponse
     */
    public function getCheckRiskStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCheckRiskStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetCheckSummaryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCheckSummaryResponse
     */
    public function getCheckSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceDirectoryAccountId)) {
            $query['ResourceDirectoryAccountId'] = $request->resourceDirectoryAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCheckSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCheckSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCheckSummaryRequest $request
     *
     * @return GetCheckSummaryResponse
     */
    public function getCheckSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCheckSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetClientUserDefineRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetClientUserDefineRuleResponse
     */
    public function getClientUserDefineRuleWithOptions($request, $runtime)
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
            'action'      => 'GetClientUserDefineRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClientUserDefineRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClientUserDefineRuleRequest $request
     *
     * @return GetClientUserDefineRuleResponse
     */
    public function getClientUserDefineRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientUserDefineRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetCloudAssetDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCloudAssetDetailResponse
     */
    public function getCloudAssetDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetSubType)) {
            $query['AssetSubType'] = $request->assetSubType;
        }
        if (!Utils::isUnset($request->assetType)) {
            $query['AssetType'] = $request->assetType;
        }
        if (!Utils::isUnset($request->cloudAssetInstances)) {
            $query['CloudAssetInstances'] = $request->cloudAssetInstances;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCloudAssetDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCloudAssetDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCloudAssetDetailRequest $request
     *
     * @return GetCloudAssetDetailResponse
     */
    public function getCloudAssetDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudAssetDetailWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetCloudAssetSummaryResponse
     */
    public function getCloudAssetSummaryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetCloudAssetSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCloudAssetSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetCloudAssetSummaryResponse
     */
    public function getCloudAssetSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudAssetSummaryWithOptions($runtime);
    }

    /**
     * @param GetClusterCheckItemWarningStatisticsRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetClusterCheckItemWarningStatisticsResponse
     */
    public function getClusterCheckItemWarningStatisticsWithOptions($request, $runtime)
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
            'action'      => 'GetClusterCheckItemWarningStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClusterCheckItemWarningStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClusterCheckItemWarningStatisticsRequest $request
     *
     * @return GetClusterCheckItemWarningStatisticsResponse
     */
    public function getClusterCheckItemWarningStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterCheckItemWarningStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetClusterRuleSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetClusterRuleSummaryResponse
     */
    public function getClusterRuleSummaryWithOptions($request, $runtime)
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
            'action'      => 'GetClusterRuleSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClusterRuleSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClusterRuleSummaryRequest $request
     *
     * @return GetClusterRuleSummaryResponse
     */
    public function getClusterRuleSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterRuleSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetClusterSuspEventStatisticsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetClusterSuspEventStatisticsResponse
     */
    public function getClusterSuspEventStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClusterSuspEventStatistics',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClusterSuspEventStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClusterSuspEventStatisticsRequest $request
     *
     * @return GetClusterSuspEventStatisticsResponse
     */
    public function getClusterSuspEventStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterSuspEventStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetFileDetectApiInvokeInfoResponse
     */
    public function getFileDetectApiInvokeInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetFileDetectApiInvokeInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileDetectApiInvokeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetFileDetectApiInvokeInfoResponse
     */
    public function getFileDetectApiInvokeInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileDetectApiInvokeInfoWithOptions($runtime);
    }

    /**
     * The HashKey parameter is included in all API operations that are related to the file detection feature. The parameter specifies the unique identifier of a file. Only MD5 hash values are supported. Before you call this operation, calculate the MD5 hash value of the file.
     *   *
     * @param GetFileDetectResultRequest $request GetFileDetectResultRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFileDetectResultResponse GetFileDetectResultResponse
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
     * The HashKey parameter is included in all API operations that are related to the file detection feature. The parameter specifies the unique identifier of a file. Only MD5 hash values are supported. Before you call this operation, calculate the MD5 hash value of the file.
     *   *
     * @param GetFileDetectResultRequest $request GetFileDetectResultRequest
     *
     * @return GetFileDetectResultResponse GetFileDetectResultResponse
     */
    public function getFileDetectResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileDetectResultWithOptions($request, $runtime);
    }

    /**
     * @param GetHoneypotNodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetHoneypotNodeResponse
     */
    public function getHoneypotNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHoneypotNode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHoneypotNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHoneypotNodeRequest $request
     *
     * @return GetHoneypotNodeResponse
     */
    public function getHoneypotNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHoneypotNodeWithOptions($request, $runtime);
    }

    /**
     * @param GetHoneypotPresetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetHoneypotPresetResponse
     */
    public function getHoneypotPresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->honeypotPresetId)) {
            $query['HoneypotPresetId'] = $request->honeypotPresetId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHoneypotPreset',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHoneypotPresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHoneypotPresetRequest $request
     *
     * @return GetHoneypotPresetResponse
     */
    public function getHoneypotPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHoneypotPresetWithOptions($request, $runtime);
    }

    /**
     * @param GetHoneypotProbeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetHoneypotProbeResponse
     */
    public function getHoneypotProbeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->probeId)) {
            $query['ProbeId'] = $request->probeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHoneypotProbe',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHoneypotProbeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHoneypotProbeRequest $request
     *
     * @return GetHoneypotProbeResponse
     */
    public function getHoneypotProbe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHoneypotProbeWithOptions($request, $runtime);
    }

    /**
     * @param GetImageScanNumInPeriodRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetImageScanNumInPeriodResponse
     */
    public function getImageScanNumInPeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pastDay)) {
            $query['PastDay'] = $request->pastDay;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImageScanNumInPeriod',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageScanNumInPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetImageScanNumInPeriodRequest $request
     *
     * @return GetImageScanNumInPeriodResponse
     */
    public function getImageScanNumInPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageScanNumInPeriodWithOptions($request, $runtime);
    }

    /**
     * @param GetInterceptionRuleDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetInterceptionRuleDetailResponse
     */
    public function getInterceptionRuleDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInterceptionRuleDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInterceptionRuleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInterceptionRuleDetailRequest $request
     *
     * @return GetInterceptionRuleDetailResponse
     */
    public function getInterceptionRuleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterceptionRuleDetailWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetInterceptionSummaryResponse
     */
    public function getInterceptionSummaryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetInterceptionSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInterceptionSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetInterceptionSummaryResponse
     */
    public function getInterceptionSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterceptionSummaryWithOptions($runtime);
    }

    /**
     * @param GetInterceptionTargetDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetInterceptionTargetDetailResponse
     */
    public function getInterceptionTargetDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInterceptionTargetDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInterceptionTargetDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInterceptionTargetDetailRequest $request
     *
     * @return GetInterceptionTargetDetailResponse
     */
    public function getInterceptionTargetDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterceptionTargetDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetLastOnceTaskInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetLastOnceTaskInfoResponse
     */
    public function getLastOnceTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLastOnceTaskInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLastOnceTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLastOnceTaskInfoRequest $request
     *
     * @return GetLastOnceTaskInfoResponse
     */
    public function getLastOnceTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLastOnceTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetModuleConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetModuleConfigResponse
     */
    public function getModuleConfigWithOptions($request, $runtime)
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
            'action'      => 'GetModuleConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetModuleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetModuleConfigRequest $request
     *
     * @return GetModuleConfigResponse
     */
    public function getModuleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModuleConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetOnceTaskResultInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetOnceTaskResultInfoResponse
     */
    public function getOnceTaskResultInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOnceTaskResultInfo',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOnceTaskResultInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOnceTaskResultInfoRequest $request
     *
     * @return GetOnceTaskResultInfoResponse
     */
    public function getOnceTaskResultInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOnceTaskResultInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetPropertyScheduleConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetPropertyScheduleConfigResponse
     */
    public function getPropertyScheduleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'GetPropertyScheduleConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPropertyScheduleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPropertyScheduleConfigRequest $request
     *
     * @return GetPropertyScheduleConfigResponse
     */
    public function getPropertyScheduleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPropertyScheduleConfigWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetRulesCountResponse
     */
    public function getRulesCountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetRulesCount',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRulesCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetRulesCountResponse
     */
    public function getRulesCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRulesCountWithOptions($runtime);
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
     * @param GetVulWhitelistRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetVulWhitelistResponse
     */
    public function getVulWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->vulWhitelistId)) {
            $query['VulWhitelistId'] = $request->vulWhitelistId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVulWhitelist',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVulWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVulWhitelistRequest $request
     *
     * @return GetVulWhitelistResponse
     */
    public function getVulWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVulWhitelistWithOptions($request, $runtime);
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
     * @param IgnoreCheckItemsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return IgnoreCheckItemsResponse
     */
    public function ignoreCheckItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkAndRiskTypeList)) {
            $query['CheckAndRiskTypeList'] = $request->checkAndRiskTypeList;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
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
            'action'      => 'IgnoreCheckItems',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IgnoreCheckItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IgnoreCheckItemsRequest $request
     *
     * @return IgnoreCheckItemsResponse
     */
    public function ignoreCheckItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ignoreCheckItemsWithOptions($request, $runtime);
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
     * >  Before you call this operation, make sure that the Security Center agent on your servers is online and the servers can access Alibaba Cloud services.
     *   *
     * @param InstallCloudMonitorRequest $request InstallCloudMonitorRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallCloudMonitorResponse InstallCloudMonitorResponse
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
     * >  Before you call this operation, make sure that the Security Center agent on your servers is online and the servers can access Alibaba Cloud services.
     *   *
     * @param InstallCloudMonitorRequest $request InstallCloudMonitorRequest
     *
     * @return InstallCloudMonitorResponse InstallCloudMonitorResponse
     */
    public function installCloudMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudMonitorWithOptions($request, $runtime);
    }

    /**
     * @param InstallPmAgentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InstallPmAgentResponse
     */
    public function installPmAgentWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallPmAgent',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallPmAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallPmAgentRequest $request
     *
     * @return InstallPmAgentResponse
     */
    public function installPmAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installPmAgentWithOptions($request, $runtime);
    }

    /**
     * @param InstallUniBackupAgentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return InstallUniBackupAgentResponse
     */
    public function installUniBackupAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallUniBackupAgent',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallUniBackupAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallUniBackupAgentRequest $request
     *
     * @return InstallUniBackupAgentResponse
     */
    public function installUniBackupAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installUniBackupAgentWithOptions($request, $runtime);
    }

    /**
     * @param JoinWebLockProcessWhiteListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return JoinWebLockProcessWhiteListResponse
     */
    public function joinWebLockProcessWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->processPaths)) {
            $query['ProcessPaths'] = $request->processPaths;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinWebLockProcessWhiteList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinWebLockProcessWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinWebLockProcessWhiteListRequest $request
     *
     * @return JoinWebLockProcessWhiteListResponse
     */
    public function joinWebLockProcessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinWebLockProcessWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ListAvailableHoneypotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAvailableHoneypotResponse
     */
    public function listAvailableHoneypotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAvailableHoneypot',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvailableHoneypotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAvailableHoneypotRequest $request
     *
     * @return ListAvailableHoneypotResponse
     */
    public function listAvailableHoneypot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableHoneypotWithOptions($request, $runtime);
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
     * @param ListCheckItemWarningMachineRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCheckItemWarningMachineResponse
     */
    public function listCheckItemWarningMachineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
        if (!Utils::isUnset($request->riskType)) {
            $query['RiskType'] = $request->riskType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCheckItemWarningMachine',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCheckItemWarningMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCheckItemWarningMachineRequest $request
     *
     * @return ListCheckItemWarningMachineResponse
     */
    public function listCheckItemWarningMachine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCheckItemWarningMachineWithOptions($request, $runtime);
    }

    /**
     * @param ListCheckItemWarningSummaryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCheckItemWarningSummaryResponse
     */
    public function listCheckItemWarningSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkItemFuzzy)) {
            $query['CheckItemFuzzy'] = $request->checkItemFuzzy;
        }
        if (!Utils::isUnset($request->checkLevel)) {
            $query['CheckLevel'] = $request->checkLevel;
        }
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->checkWarningStatus)) {
            $query['CheckWarningStatus'] = $request->checkWarningStatus;
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskType)) {
            $query['RiskType'] = $request->riskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCheckItemWarningSummary',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCheckItemWarningSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCheckItemWarningSummaryRequest $request
     *
     * @return ListCheckItemWarningSummaryResponse
     */
    public function listCheckItemWarningSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCheckItemWarningSummaryWithOptions($request, $runtime);
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
     * @param ListCheckStandardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCheckStandardResponse
     */
    public function listCheckStandardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceSubTypes)) {
            $query['InstanceSubTypes'] = $request->instanceSubTypes;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->vendors)) {
            $query['Vendors'] = $request->vendors;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCheckStandard',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCheckStandardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCheckStandardRequest $request
     *
     * @return ListCheckStandardResponse
     */
    public function listCheckStandard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCheckStandardWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListClientUserDefineRuleTypesResponse
     */
    public function listClientUserDefineRuleTypesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListClientUserDefineRuleTypes',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClientUserDefineRuleTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListClientUserDefineRuleTypesResponse
     */
    public function listClientUserDefineRuleTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientUserDefineRuleTypesWithOptions($runtime);
    }

    /**
     * @param ListClientUserDefineRulesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListClientUserDefineRulesResponse
     */
    public function listClientUserDefineRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
            'action'      => 'ListClientUserDefineRules',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClientUserDefineRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClientUserDefineRulesRequest $request
     *
     * @return ListClientUserDefineRulesResponse
     */
    public function listClientUserDefineRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientUserDefineRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterCnnfStatusDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListClusterCnnfStatusDetailResponse
     */
    public function listClusterCnnfStatusDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $query['ClusterIds'] = $request->clusterIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterCnnfStatusDetail',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterCnnfStatusDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterCnnfStatusDetailRequest $request
     *
     * @return ListClusterCnnfStatusDetailResponse
     */
    public function listClusterCnnfStatusDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterCnnfStatusDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterInterceptionConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListClusterInterceptionConfigResponse
     */
    public function listClusterInterceptionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterCNNFStatus)) {
            $query['ClusterCNNFStatus'] = $request->clusterCNNFStatus;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
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
            'action'      => 'ListClusterInterceptionConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterInterceptionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterInterceptionConfigRequest $request
     *
     * @return ListClusterInterceptionConfigResponse
     */
    public function listClusterInterceptionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterInterceptionConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListHoneypotRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListHoneypotResponse
     */
    public function listHoneypotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->honeypotIds)) {
            $query['HoneypotIds'] = $request->honeypotIds;
        }
        if (!Utils::isUnset($request->honeypotName)) {
            $query['HoneypotName'] = $request->honeypotName;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHoneypot',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHoneypotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHoneypotRequest $request
     *
     * @return ListHoneypotResponse
     */
    public function listHoneypot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHoneypotWithOptions($request, $runtime);
    }

    /**
     * @param ListHoneypotAlarmEventsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListHoneypotAlarmEventsResponse
     */
    public function listHoneypotAlarmEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHoneypotAlarmEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHoneypotAlarmEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHoneypotAlarmEventsRequest $request
     *
     * @return ListHoneypotAlarmEventsResponse
     */
    public function listHoneypotAlarmEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHoneypotAlarmEventsWithOptions($request, $runtime);
    }

    /**
     * @param ListHoneypotNodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListHoneypotNodeResponse
     */
    public function listHoneypotNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHoneypotNode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHoneypotNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHoneypotNodeRequest $request
     *
     * @return ListHoneypotNodeResponse
     */
    public function listHoneypotNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHoneypotNodeWithOptions($request, $runtime);
    }

    /**
     * @param ListHoneypotPresetRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListHoneypotPresetResponse
     */
    public function listHoneypotPresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->honeypotImageName)) {
            $query['HoneypotImageName'] = $request->honeypotImageName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->presetName)) {
            $query['PresetName'] = $request->presetName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHoneypotPreset',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHoneypotPresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHoneypotPresetRequest $request
     *
     * @return ListHoneypotPresetResponse
     */
    public function listHoneypotPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHoneypotPresetWithOptions($request, $runtime);
    }

    /**
     * @param ListHoneypotProbeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListHoneypotProbeResponse
     */
    public function listHoneypotProbeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->probeStatus)) {
            $query['ProbeStatus'] = $request->probeStatus;
        }
        if (!Utils::isUnset($request->probeType)) {
            $query['ProbeType'] = $request->probeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHoneypotProbe',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHoneypotProbeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHoneypotProbeRequest $request
     *
     * @return ListHoneypotProbeResponse
     */
    public function listHoneypotProbe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHoneypotProbeWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListImageRegistryRegionResponse
     */
    public function listImageRegistryRegionWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListImageRegistryRegion',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImageRegistryRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListImageRegistryRegionResponse
     */
    public function listImageRegistryRegion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageRegistryRegionWithOptions($runtime);
    }

    /**
     * @param ListImageRiskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListImageRiskResponse
     */
    public function listImageRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImageRisk',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImageRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListImageRiskRequest $request
     *
     * @return ListImageRiskResponse
     */
    public function listImageRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageRiskWithOptions($request, $runtime);
    }

    /**
     * @param ListInterceptionHistoryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListInterceptionHistoryResponse
     */
    public function listInterceptionHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->historyName)) {
            $query['HistoryName'] = $request->historyName;
        }
        if (!Utils::isUnset($request->interceptionTypes)) {
            $query['InterceptionTypes'] = $request->interceptionTypes;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInterceptionHistory',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInterceptionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInterceptionHistoryRequest $request
     *
     * @return ListInterceptionHistoryResponse
     */
    public function listInterceptionHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterceptionHistoryWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListInterceptionImageResponse
     */
    public function listInterceptionImageWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListInterceptionImage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInterceptionImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListInterceptionImageResponse
     */
    public function listInterceptionImage()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterceptionImageWithOptions($runtime);
    }

    /**
     * @param ListInterceptionRulePageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListInterceptionRulePageResponse
     */
    public function listInterceptionRulePageWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInterceptionRulePage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInterceptionRulePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInterceptionRulePageRequest $request
     *
     * @return ListInterceptionRulePageResponse
     */
    public function listInterceptionRulePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterceptionRulePageWithOptions($request, $runtime);
    }

    /**
     * @param ListInterceptionTargetPageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListInterceptionTargetPageResponse
     */
    public function listInterceptionTargetPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->imageList)) {
            $query['ImageList'] = $request->imageList;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['TagList'] = $request->tagList;
        }
        if (!Utils::isUnset($request->targetName)) {
            $query['TargetName'] = $request->targetName;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInterceptionTargetPage',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInterceptionTargetPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInterceptionTargetPageRequest $request
     *
     * @return ListInterceptionTargetPageResponse
     */
    public function listInterceptionTargetPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterceptionTargetPageWithOptions($request, $runtime);
    }

    /**
     * @param ListPluginForUuidRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ListPluginForUuidResponse
     */
    public function listPluginForUuidWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPluginForUuidShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->types)) {
            $request->typesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->typesShrink)) {
            $query['Types'] = $request->typesShrink;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPluginForUuid',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPluginForUuidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPluginForUuidRequest $request
     *
     * @return ListPluginForUuidResponse
     */
    public function listPluginForUuid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPluginForUuidWithOptions($request, $runtime);
    }

    /**
     * @param ListPodRiskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListPodRiskResponse
     */
    public function listPodRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->podName)) {
            $query['PodName'] = $request->podName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPodRisk',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPodRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPodRiskRequest $request
     *
     * @return ListPodRiskResponse
     */
    public function listPodRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPodRiskWithOptions($request, $runtime);
    }

    /**
     * @param ListPrivateRegistryListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPrivateRegistryListResponse
     */
    public function listPrivateRegistryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->registryType)) {
            $query['RegistryType'] = $request->registryType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrivateRegistryList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrivateRegistryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrivateRegistryListRequest $request
     *
     * @return ListPrivateRegistryListResponse
     */
    public function listPrivateRegistryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateRegistryListWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListPrivateRegistryTypeResponse
     */
    public function listPrivateRegistryTypeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListPrivateRegistryType',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrivateRegistryTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListPrivateRegistryTypeResponse
     */
    public function listPrivateRegistryType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrivateRegistryTypeWithOptions($runtime);
    }

    /**
     * @param ListRuleTargetAllRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRuleTargetAllResponse
     */
    public function listRuleTargetAllWithOptions($request, $runtime)
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
            'action'      => 'ListRuleTargetAll',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRuleTargetAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRuleTargetAllRequest $request
     *
     * @return ListRuleTargetAllResponse
     */
    public function listRuleTargetAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRuleTargetAllWithOptions($request, $runtime);
    }

    /**
     * @param ListSystemAggregationRulesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListSystemAggregationRulesResponse
     */
    public function listSystemAggregationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSystemAggregationRules',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSystemAggregationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSystemAggregationRulesRequest $request
     *
     * @return ListSystemAggregationRulesResponse
     */
    public function listSystemAggregationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemAggregationRulesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListSystemClientRuleTypesResponse
     */
    public function listSystemClientRuleTypesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListSystemClientRuleTypes',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSystemClientRuleTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListSystemClientRuleTypesResponse
     */
    public function listSystemClientRuleTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemClientRuleTypesWithOptions($runtime);
    }

    /**
     * @param ListSystemClientRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSystemClientRulesResponse
     */
    public function listSystemClientRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aggregationIds)) {
            $query['AggregationIds'] = $request->aggregationIds;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->isContainer)) {
            $query['IsContainer'] = $request->isContainer;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleTypes)) {
            $query['RuleTypes'] = $request->ruleTypes;
        }
        if (!Utils::isUnset($request->systemType)) {
            $query['SystemType'] = $request->systemType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSystemClientRules',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSystemClientRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSystemClientRulesRequest $request
     *
     * @return ListSystemClientRulesResponse
     */
    public function listSystemClientRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemClientRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListSystemRuleAggregationTypesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListSystemRuleAggregationTypesResponse
     */
    public function listSystemRuleAggregationTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSystemRuleAggregationTypes',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSystemRuleAggregationTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSystemRuleAggregationTypesRequest $request
     *
     * @return ListSystemRuleAggregationTypesResponse
     */
    public function listSystemRuleAggregationTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemRuleAggregationTypesWithOptions($request, $runtime);
    }

    /**
     * @param ListUninstallAegisMachinesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUninstallAegisMachinesResponse
     */
    public function listUninstallAegisMachinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionIdStr)) {
            $query['RegionIdStr'] = $request->regionIdStr;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUninstallAegisMachines',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUninstallAegisMachinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUninstallAegisMachinesRequest $request
     *
     * @return ListUninstallAegisMachinesResponse
     */
    public function listUninstallAegisMachines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUninstallAegisMachinesWithOptions($request, $runtime);
    }

    /**
     * @param ListUuidsByWebPathRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUuidsByWebPathResponse
     */
    public function listUuidsByWebPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->webPath)) {
            $query['WebPath'] = $request->webPath;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUuidsByWebPath',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUuidsByWebPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUuidsByWebPathRequest $request
     *
     * @return ListUuidsByWebPathResponse
     */
    public function listUuidsByWebPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUuidsByWebPathWithOptions($request, $runtime);
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
     * @param ModifyAccessKeyLeakDealRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyAccessKeyLeakDealResponse
     */
    public function modifyAccessKeyLeakDealWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->idList)) {
            $query['IdList'] = $request->idList;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccessKeyLeakDeal',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccessKeyLeakDealResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAccessKeyLeakDealRequest $request
     *
     * @return ModifyAccessKeyLeakDealResponse
     */
    public function modifyAccessKeyLeakDeal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccessKeyLeakDealWithOptions($request, $runtime);
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
     * @param ModifyAppVulScanCycleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAppVulScanCycleResponse
     */
    public function modifyAppVulScanCycleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cycle)) {
            $query['Cycle'] = $request->cycle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppVulScanCycle',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppVulScanCycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAppVulScanCycleRequest $request
     *
     * @return ModifyAppVulScanCycleResponse
     */
    public function modifyAppVulScanCycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppVulScanCycleWithOptions($request, $runtime);
    }

    /**
     * You can call the ModifyAssetGroup operation to change the server group to which one or more servers belong. After you create a server group by calling the [CreateOrUpdateAssetGroup](~~CreateOrUpdateAssetGroup~~) operation, you can call the ModifyAssetGroup operation to change the server group to which your servers belong.
     *   * ### Limits
     *   * You can call this API operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyAssetGroupRequest $request ModifyAssetGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAssetGroupResponse ModifyAssetGroupResponse
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
     * You can call the ModifyAssetGroup operation to change the server group to which one or more servers belong. After you create a server group by calling the [CreateOrUpdateAssetGroup](~~CreateOrUpdateAssetGroup~~) operation, you can call the ModifyAssetGroup operation to change the server group to which your servers belong.
     *   * ### Limits
     *   * You can call this API operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyAssetGroupRequest $request ModifyAssetGroupRequest
     *
     * @return ModifyAssetGroupResponse ModifyAssetGroupResponse
     */
    public function modifyAssetGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAssetGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAssetImportantRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyAssetImportantResponse
     */
    public function modifyAssetImportantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->importantCode)) {
            $query['ImportantCode'] = $request->importantCode;
        }
        if (!Utils::isUnset($request->uuidList)) {
            $query['UuidList'] = $request->uuidList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAssetImportant',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAssetImportantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAssetImportantRequest $request
     *
     * @return ModifyAssetImportantResponse
     */
    public function modifyAssetImportant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAssetImportantWithOptions($request, $runtime);
    }

    /**
     * # **Usage notes**
     *   * You can call the ModifyAutoDelConfig operation to specify the number of days after which a detected vulnerability is automatically deleted. If you do not handle a detected vulnerability and the vulnerability is no longer detected in multiple subsequent detection, the vulnerability is automatically deleted from the Vulnerabilities page after the specified number of days. If vulnerabilities of the same type are detected, Security Center still generates alerts.
     *   *
     *   * # **Limits**
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyAutoDelConfigRequest $request ModifyAutoDelConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAutoDelConfigResponse ModifyAutoDelConfigResponse
     */
    public function modifyAutoDelConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->days)) {
            $query['Days'] = $request->days;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAutoDelConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAutoDelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * # **Usage notes**
     *   * You can call the ModifyAutoDelConfig operation to specify the number of days after which a detected vulnerability is automatically deleted. If you do not handle a detected vulnerability and the vulnerability is no longer detected in multiple subsequent detection, the vulnerability is automatically deleted from the Vulnerabilities page after the specified number of days. If vulnerabilities of the same type are detected, Security Center still generates alerts.
     *   *
     *   * # **Limits**
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param ModifyAutoDelConfigRequest $request ModifyAutoDelConfigRequest
     *
     * @return ModifyAutoDelConfigResponse ModifyAutoDelConfigResponse
     */
    public function modifyAutoDelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoDelConfigWithOptions($request, $runtime);
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
     * Deleted logs cannot be restored. Before you call this operation to delete all logs and free up log storage, we recommend that you export and save your logs to your computer.
     *   *
     * @param ModifyClearLogstoreStorageRequest $request ModifyClearLogstoreStorageRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClearLogstoreStorageResponse ModifyClearLogstoreStorageResponse
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
     * Deleted logs cannot be restored. Before you call this operation to delete all logs and free up log storage, we recommend that you export and save your logs to your computer.
     *   *
     * @param ModifyClearLogstoreStorageRequest $request ModifyClearLogstoreStorageRequest
     *
     * @return ModifyClearLogstoreStorageResponse ModifyClearLogstoreStorageResponse
     */
    public function modifyClearLogstoreStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClearLogstoreStorageWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClientConfSetupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyClientConfSetupResponse
     */
    public function modifyClientConfSetupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->strategyConfig)) {
            $query['StrategyConfig'] = $request->strategyConfig;
        }
        if (!Utils::isUnset($request->strategyTag)) {
            $query['StrategyTag'] = $request->strategyTag;
        }
        if (!Utils::isUnset($request->strategyTagValue)) {
            $query['StrategyTagValue'] = $request->strategyTagValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClientConfSetup',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClientConfSetupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClientConfSetupRequest $request
     *
     * @return ModifyClientConfSetupResponse
     */
    public function modifyClientConfSetup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClientConfSetupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClientConfStrategyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyClientConfStrategyResponse
     */
    public function modifyClientConfStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tagExt)) {
            $query['TagExt'] = $request->tagExt;
        }
        if (!Utils::isUnset($request->tagValue)) {
            $query['TagValue'] = $request->tagValue;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClientConfStrategy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClientConfStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClientConfStrategyRequest $request
     *
     * @return ModifyClientConfStrategyResponse
     */
    public function modifyClientConfStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClientConfStrategyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClientUserDefineRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClientUserDefineRuleResponse
     */
    public function modifyClientUserDefineRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->cmdline)) {
            $query['Cmdline'] = $request->cmdline;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->IP)) {
            $query['IP'] = $request->IP;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->md5List)) {
            $query['Md5List'] = $request->md5List;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->newFilePath)) {
            $query['NewFilePath'] = $request->newFilePath;
        }
        if (!Utils::isUnset($request->parentCmdline)) {
            $query['ParentCmdline'] = $request->parentCmdline;
        }
        if (!Utils::isUnset($request->parentProcPath)) {
            $query['ParentProcPath'] = $request->parentProcPath;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->portStr)) {
            $query['PortStr'] = $request->portStr;
        }
        if (!Utils::isUnset($request->procPath)) {
            $query['ProcPath'] = $request->procPath;
        }
        if (!Utils::isUnset($request->registryContent)) {
            $query['RegistryContent'] = $request->registryContent;
        }
        if (!Utils::isUnset($request->registryKey)) {
            $query['RegistryKey'] = $request->registryKey;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClientUserDefineRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClientUserDefineRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClientUserDefineRuleRequest $request
     *
     * @return ModifyClientUserDefineRuleResponse
     */
    public function modifyClientUserDefineRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClientUserDefineRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterCnnfStatusUserConfirmRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyClusterCnnfStatusUserConfirmResponse
     */
    public function modifyClusterCnnfStatusUserConfirmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $query['ClusterIds'] = $request->clusterIds;
        }
        if (!Utils::isUnset($request->userConfirm)) {
            $query['UserConfirm'] = $request->userConfirm;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterCnnfStatusUserConfirm',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterCnnfStatusUserConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterCnnfStatusUserConfirmRequest $request
     *
     * @return ModifyClusterCnnfStatusUserConfirmResponse
     */
    public function modifyClusterCnnfStatusUserConfirm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterCnnfStatusUserConfirmWithOptions($request, $runtime);
    }

    /**
     * @param ModifyConcernNecessityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyConcernNecessityResponse
     */
    public function modifyConcernNecessityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->concernNecessity)) {
            $query['ConcernNecessity'] = $request->concernNecessity;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyConcernNecessity',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyConcernNecessityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyConcernNecessityRequest $request
     *
     * @return ModifyConcernNecessityResponse
     */
    public function modifyConcernNecessity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyConcernNecessityWithOptions($request, $runtime);
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
     * @param ModifyCustomBlockRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyCustomBlockRecordResponse
     */
    public function modifyCustomBlockRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blockIp)) {
            $query['BlockIp'] = $request->blockIp;
        }
        if (!Utils::isUnset($request->bound)) {
            $query['Bound'] = $request->bound;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->uuids)) {
            $query['Uuids'] = $request->uuids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCustomBlockRecord',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCustomBlockRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCustomBlockRecordRequest $request
     *
     * @return ModifyCustomBlockRecordResponse
     */
    public function modifyCustomBlockRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomBlockRecordWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCycleTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyCycleTaskResponse
     */
    public function modifyCycleTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->firstDateStr)) {
            $query['FirstDateStr'] = $request->firstDateStr;
        }
        if (!Utils::isUnset($request->intervalPeriod)) {
            $query['IntervalPeriod'] = $request->intervalPeriod;
        }
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->targetEndTime)) {
            $query['TargetEndTime'] = $request->targetEndTime;
        }
        if (!Utils::isUnset($request->targetStartTime)) {
            $query['TargetStartTime'] = $request->targetStartTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCycleTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCycleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCycleTaskRequest $request
     *
     * @return ModifyCycleTaskResponse
     */
    public function modifyCycleTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCycleTaskWithOptions($request, $runtime);
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
     * @param ModifyInterceptionRuleRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyInterceptionRuleResponse
     */
    public function modifyInterceptionRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyInterceptionRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dstTarget)) {
            $request->dstTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dstTarget, 'DstTarget', 'json');
        }
        if (!Utils::isUnset($tmpReq->srcTarget)) {
            $request->srcTargetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->srcTarget, 'SrcTarget', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dstTargetShrink)) {
            $query['DstTarget'] = $request->dstTargetShrink;
        }
        if (!Utils::isUnset($request->interceptType)) {
            $query['InterceptType'] = $request->interceptType;
        }
        if (!Utils::isUnset($request->orderIndex)) {
            $query['OrderIndex'] = $request->orderIndex;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleSwitch)) {
            $query['RuleSwitch'] = $request->ruleSwitch;
        }
        if (!Utils::isUnset($request->srcTargetShrink)) {
            $query['SrcTarget'] = $request->srcTargetShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInterceptionRule',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInterceptionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInterceptionRuleRequest $request
     *
     * @return ModifyInterceptionRuleResponse
     */
    public function modifyInterceptionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInterceptionRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInterceptionRuleSwitchRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyInterceptionRuleSwitchResponse
     */
    public function modifyInterceptionRuleSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ruleIds)) {
            $query['RuleIds'] = $request->ruleIds;
        }
        if (!Utils::isUnset($request->ruleSwitch)) {
            $query['RuleSwitch'] = $request->ruleSwitch;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInterceptionRuleSwitch',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInterceptionRuleSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInterceptionRuleSwitchRequest $request
     *
     * @return ModifyInterceptionRuleSwitchResponse
     */
    public function modifyInterceptionRuleSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInterceptionRuleSwitchWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInterceptionTargetRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInterceptionTargetResponse
     */
    public function modifyInterceptionTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->imageList)) {
            $query['ImageList'] = $request->imageList;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['TagList'] = $request->tagList;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetName)) {
            $query['TargetName'] = $request->targetName;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInterceptionTarget',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInterceptionTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInterceptionTargetRequest $request
     *
     * @return ModifyInterceptionTargetResponse
     */
    public function modifyInterceptionTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInterceptionTargetWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogMetaStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyLogMetaStatusResponse
     */
    public function modifyLogMetaStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->logStore)) {
            $query['LogStore'] = $request->logStore;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLogMetaStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLogMetaStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLogMetaStatusRequest $request
     *
     * @return ModifyLogMetaStatusResponse
     */
    public function modifyLogMetaStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogMetaStatusWithOptions($request, $runtime);
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
     * @param ModifyNoticeConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyNoticeConfigResponse
     */
    public function modifyNoticeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->route)) {
            $query['Route'] = $request->route;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->timeLimit)) {
            $query['TimeLimit'] = $request->timeLimit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNoticeConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNoticeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNoticeConfigRequest $request
     *
     * @return ModifyNoticeConfigResponse
     */
    public function modifyNoticeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNoticeConfigWithOptions($request, $runtime);
    }

    /**
     * **Prerequisites** A service-linked role is created, and Security Center is authorized to access cloud resources. You can call the [CreateServiceLinkedRole](~~CreateServiceLinkedRole~~) operation to create service-linked roles and authorize Security Center to access cloud resources. **Scenarios** Before you use the log analysis feature of Security Center, you must call the ModifyOpenLogShipper operation to activate Log Service.
     *   *
     * @param ModifyOpenLogShipperRequest $request ModifyOpenLogShipperRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyOpenLogShipperResponse ModifyOpenLogShipperResponse
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
     * **Prerequisites** A service-linked role is created, and Security Center is authorized to access cloud resources. You can call the [CreateServiceLinkedRole](~~CreateServiceLinkedRole~~) operation to create service-linked roles and authorize Security Center to access cloud resources. **Scenarios** Before you use the log analysis feature of Security Center, you must call the ModifyOpenLogShipper operation to activate Log Service.
     *   *
     * @param ModifyOpenLogShipperRequest $request ModifyOpenLogShipperRequest
     *
     * @return ModifyOpenLogShipperResponse ModifyOpenLogShipperResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ModifyRiskCheckStatusRequest $request ModifyRiskCheckStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRiskCheckStatusResponse ModifyRiskCheckStatusResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ModifyRiskCheckStatusRequest $request ModifyRiskCheckStatusRequest
     *
     * @return ModifyRiskCheckStatusResponse ModifyRiskCheckStatusResponse
     */
    public function modifyRiskCheckStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRiskCheckStatusWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ModifyRiskSingleResultStatusRequest $request ModifyRiskSingleResultStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRiskSingleResultStatusResponse ModifyRiskSingleResultStatusResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ModifyRiskSingleResultStatusRequest $request ModifyRiskSingleResultStatusRequest
     *
     * @return ModifyRiskSingleResultStatusResponse ModifyRiskSingleResultStatusResponse
     */
    public function modifyRiskSingleResultStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRiskSingleResultStatusWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ModifySecurityCheckScheduleConfigRequest $request ModifySecurityCheckScheduleConfigRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecurityCheckScheduleConfigResponse ModifySecurityCheckScheduleConfigResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param ModifySecurityCheckScheduleConfigRequest $request ModifySecurityCheckScheduleConfigRequest
     *
     * @return ModifySecurityCheckScheduleConfigResponse ModifySecurityCheckScheduleConfigResponse
     */
    public function modifySecurityCheckScheduleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityCheckScheduleConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityEventMarkMissIndividuallyRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ModifySecurityEventMarkMissIndividuallyResponse
     */
    public function modifySecurityEventMarkMissIndividuallyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $body = [];
        if (!Utils::isUnset($request->deleteMarkMissParam)) {
            $body['DeleteMarkMissParam'] = $request->deleteMarkMissParam;
        }
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->insertMarkMissParam)) {
            $body['InsertMarkMissParam'] = $request->insertMarkMissParam;
        }
        if (!Utils::isUnset($request->lang)) {
            $body['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityEventMarkMissIndividually',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityEventMarkMissIndividuallyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySecurityEventMarkMissIndividuallyRequest $request
     *
     * @return ModifySecurityEventMarkMissIndividuallyResponse
     */
    public function modifySecurityEventMarkMissIndividually($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityEventMarkMissIndividuallyWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
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
     * @param ModifyUniBackupPolicyRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyUniBackupPolicyResponse
     */
    public function modifyUniBackupPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyUniBackupPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fullPlan)) {
            $request->fullPlanShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fullPlan, 'FullPlan', 'json');
        }
        if (!Utils::isUnset($tmpReq->incPlan)) {
            $request->incPlanShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->incPlan, 'IncPlan', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->fullPlanShrink)) {
            $query['FullPlan'] = $request->fullPlanShrink;
        }
        if (!Utils::isUnset($request->incPlanShrink)) {
            $query['IncPlan'] = $request->incPlanShrink;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyStatus)) {
            $query['PolicyStatus'] = $request->policyStatus;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        if (!Utils::isUnset($request->speedLimiter)) {
            $query['SpeedLimiter'] = $request->speedLimiter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUniBackupPolicy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUniBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUniBackupPolicyRequest $request
     *
     * @return ModifyUniBackupPolicyResponse
     */
    public function modifyUniBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUniBackupPolicyWithOptions($request, $runtime);
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
     * @param ModifyVulConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyVulConfigResponse
     */
    public function modifyVulConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVulConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVulConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVulConfigRequest $request
     *
     * @return ModifyVulConfigResponse
     */
    public function modifyVulConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVulConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVulTargetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyVulTargetResponse
     */
    public function modifyVulTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVulTarget',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVulTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVulTargetRequest $request
     *
     * @return ModifyVulTargetResponse
     */
    public function modifyVulTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVulTargetWithOptions($request, $runtime);
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
     * @param ModifyVulWhitelistTargetRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyVulWhitelistTargetResponse
     */
    public function modifyVulWhitelistTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->targetInfo)) {
            $query['TargetInfo'] = $request->targetInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVulWhitelistTarget',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVulWhitelistTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVulWhitelistTargetRequest $request
     *
     * @return ModifyVulWhitelistTargetResponse
     */
    public function modifyVulWhitelistTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVulWhitelistTargetWithOptions($request, $runtime);
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
     * After you delete a directory that has web tamper proofing enabled on a server, files in the directory are no longer protected by web tamper proofing. The information about the websites that are hosted on the server may be maliciously modified by attackers. Proceed with caution.
     *   *
     * @param ModifyWebLockDeleteConfigRequest $request ModifyWebLockDeleteConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWebLockDeleteConfigResponse ModifyWebLockDeleteConfigResponse
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
     * After you delete a directory that has web tamper proofing enabled on a server, files in the directory are no longer protected by web tamper proofing. The information about the websites that are hosted on the server may be maliciously modified by attackers. Proceed with caution.
     *   *
     * @param ModifyWebLockDeleteConfigRequest $request ModifyWebLockDeleteConfigRequest
     *
     * @return ModifyWebLockDeleteConfigResponse ModifyWebLockDeleteConfigResponse
     */
    public function modifyWebLockDeleteConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebLockDeleteConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWebLockProcessStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyWebLockProcessStatusResponse
     */
    public function modifyWebLockProcessStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dealAll)) {
            $query['DealAll'] = $request->dealAll;
        }
        if (!Utils::isUnset($request->operateInfo)) {
            $query['OperateInfo'] = $request->operateInfo;
        }
        if (!Utils::isUnset($request->processPath)) {
            $query['ProcessPath'] = $request->processPath;
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
            'action'      => 'ModifyWebLockProcessStatus',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebLockProcessStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWebLockProcessStatusRequest $request
     *
     * @return ModifyWebLockProcessStatusResponse
     */
    public function modifyWebLockProcessStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebLockProcessStatusWithOptions($request, $runtime);
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
     * @param ModifyWebLockUnbindRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyWebLockUnbindResponse
     */
    public function modifyWebLockUnbindWithOptions($request, $runtime)
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
            'action'      => 'ModifyWebLockUnbind',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebLockUnbindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWebLockUnbindRequest $request
     *
     * @return ModifyWebLockUnbindResponse
     */
    public function modifyWebLockUnbind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebLockUnbindWithOptions($request, $runtime);
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
     * @param ModifyWebPathRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyWebPathResponse
     */
    public function modifyWebPathWithOptions($request, $runtime)
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
            'action'      => 'ModifyWebPath',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWebPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWebPathRequest $request
     *
     * @return ModifyWebPathResponse
     */
    public function modifyWebPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWebPathWithOptions($request, $runtime);
    }

    /**
     * @param OpenSensitiveFileScanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OpenSensitiveFileScanResponse
     */
    public function openSensitiveFileScanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->switchOn)) {
            $query['SwitchOn'] = $request->switchOn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenSensitiveFileScan',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenSensitiveFileScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenSensitiveFileScanRequest $request
     *
     * @return OpenSensitiveFileScanResponse
     */
    public function openSensitiveFileScan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openSensitiveFileScanWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
     * @param OperateCommonTargetConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return OperateCommonTargetConfigResponse
     */
    public function operateCommonTargetConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fieldName)) {
            $query['FieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->fieldValue)) {
            $query['FieldValue'] = $request->fieldValue;
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
            'action'      => 'OperateCommonTargetConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateCommonTargetConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateCommonTargetConfigRequest $request
     *
     * @return OperateCommonTargetConfigResponse
     */
    public function operateCommonTargetConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateCommonTargetConfigWithOptions($request, $runtime);
    }

    /**
     * @param OperateImageBaselineWhitelistRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return OperateImageBaselineWhitelistResponse
     */
    public function operateImageBaselineWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baselineItemKeyList)) {
            $query['BaselineItemKeyList'] = $request->baselineItemKeyList;
        }
        if (!Utils::isUnset($request->imageUuid)) {
            $query['ImageUuid'] = $request->imageUuid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateImageBaselineWhitelist',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateImageBaselineWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateImageBaselineWhitelistRequest $request
     *
     * @return OperateImageBaselineWhitelistResponse
     */
    public function operateImageBaselineWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateImageBaselineWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param OperateImageVulRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OperateImageVulResponse
     */
    public function operateImageVulWithOptions($request, $runtime)
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
            'action'      => 'OperateImageVul',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateImageVulResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateImageVulRequest $request
     *
     * @return OperateImageVulResponse
     */
    public function operateImageVul($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateImageVulWithOptions($request, $runtime);
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
     * @param OperateVirusEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OperateVirusEventsResponse
     */
    public function operateVirusEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationAll)) {
            $query['OperationAll'] = $request->operationAll;
        }
        if (!Utils::isUnset($request->operationCode)) {
            $query['OperationCode'] = $request->operationCode;
        }
        if (!Utils::isUnset($request->operationRange)) {
            $query['OperationRange'] = $request->operationRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateVirusEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateVirusEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateVirusEventsRequest $request
     *
     * @return OperateVirusEventsResponse
     */
    public function operateVirusEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateVirusEventsWithOptions($request, $runtime);
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
     * @param OperateWebLockFileEventsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OperateWebLockFileEventsResponse
     */
    public function operateWebLockFileEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dealAll)) {
            $query['DealAll'] = $request->dealAll;
        }
        if (!Utils::isUnset($request->eventIds)) {
            $query['EventIds'] = $request->eventIds;
        }
        if (!Utils::isUnset($request->operationCode)) {
            $query['OperationCode'] = $request->operationCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateWebLockFileEvents',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateWebLockFileEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateWebLockFileEventsRequest $request
     *
     * @return OperateWebLockFileEventsResponse
     */
    public function operateWebLockFileEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateWebLockFileEventsWithOptions($request, $runtime);
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
     * @param PageImageRegistryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PageImageRegistryResponse
     */
    public function pageImageRegistryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->registryNameLike)) {
            $body['RegistryNameLike'] = $request->registryNameLike;
        }
        if (!Utils::isUnset($request->registryTypeInList)) {
            $body['RegistryTypeInList'] = $request->registryTypeInList;
        }
        if (!Utils::isUnset($request->registryTypeNotInList)) {
            $body['RegistryTypeNotInList'] = $request->registryTypeNotInList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PageImageRegistry',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageImageRegistryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PageImageRegistryRequest $request
     *
     * @return PageImageRegistryResponse
     */
    public function pageImageRegistry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageImageRegistryWithOptions($request, $runtime);
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
     * Before you call the PublicCreateImageScanTask operation, we recommend that you call the [PublicPreCheckImageScanTask](~~PublicPreCheckImageScanTask~~) operation to query the number of images to scan and the quota for container image scan to be consumed by the image scan task. Make sure that the remaining quota for container image scan is sufficient. This prevents the task from being stopped due to an insufficient quota.
     *   *
     * @param PublicCreateImageScanTaskRequest $request PublicCreateImageScanTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return PublicCreateImageScanTaskResponse PublicCreateImageScanTaskResponse
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
     * Before you call the PublicCreateImageScanTask operation, we recommend that you call the [PublicPreCheckImageScanTask](~~PublicPreCheckImageScanTask~~) operation to query the number of images to scan and the quota for container image scan to be consumed by the image scan task. Make sure that the remaining quota for container image scan is sufficient. This prevents the task from being stopped due to an insufficient quota.
     *   *
     * @param PublicCreateImageScanTaskRequest $request PublicCreateImageScanTaskRequest
     *
     * @return PublicCreateImageScanTaskResponse PublicCreateImageScanTaskResponse
     */
    public function publicCreateImageScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publicCreateImageScanTaskWithOptions($request, $runtime);
    }

    /**
     * You can call the PublicPreCheckImageScanTask operation to estimate the quota for container image scan to be consumed by the task. This ensures that you know the quota to be consumed before you perform the task. If the remaining quota for container image scan is less than the quota to be consumed by the task, you must purchase a sufficient quota. This prevents the task from being stopped due to an insufficient quota.
     *   * If you do not specify the optional parameters when you call this operation, the total number of protected images and the quota for container image scan to be consumed by scanning all the protected images are queried. If you specify the optional parameters, the number of images that meet the specified conditions and the quota for container image scan to be consumed by scanning the images are queried.
     *   *
     * @param PublicPreCheckImageScanTaskRequest $request PublicPreCheckImageScanTaskRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return PublicPreCheckImageScanTaskResponse PublicPreCheckImageScanTaskResponse
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
     * You can call the PublicPreCheckImageScanTask operation to estimate the quota for container image scan to be consumed by the task. This ensures that you know the quota to be consumed before you perform the task. If the remaining quota for container image scan is less than the quota to be consumed by the task, you must purchase a sufficient quota. This prevents the task from being stopped due to an insufficient quota.
     *   * If you do not specify the optional parameters when you call this operation, the total number of protected images and the quota for container image scan to be consumed by scanning all the protected images are queried. If you specify the optional parameters, the number of images that meet the specified conditions and the quota for container image scan to be consumed by scanning the images are queried.
     *   *
     * @param PublicPreCheckImageScanTaskRequest $request PublicPreCheckImageScanTaskRequest
     *
     * @return PublicPreCheckImageScanTaskResponse PublicPreCheckImageScanTaskResponse
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
     * @param QueryDiscoverDatabaseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryDiscoverDatabaseResponse
     */
    public function queryDiscoverDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createMark)) {
            $query['CreateMark'] = $request->createMark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDiscoverDatabase',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDiscoverDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDiscoverDatabaseRequest $request
     *
     * @return QueryDiscoverDatabaseResponse
     */
    public function queryDiscoverDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDiscoverDatabaseWithOptions($request, $runtime);
    }

    /**
     * You can call the QueryGroupIdByGroupName operation to query the ID of an asset group to which your assets belong by using the name of the asset group. When you call operations such as [GetSuspiciousStatistics](~~GetSuspiciousStatistics~~) and [DeleteGroup](~~DeleteGroup~~), you must specify the ID of the asset group. To query the ID of an asset group, call the QueryGroupIdByGroupName operation.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param QueryGroupIdByGroupNameRequest $request QueryGroupIdByGroupNameRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryGroupIdByGroupNameResponse QueryGroupIdByGroupNameResponse
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
     * You can call the QueryGroupIdByGroupName operation to query the ID of an asset group to which your assets belong by using the name of the asset group. When you call operations such as [GetSuspiciousStatistics](~~GetSuspiciousStatistics~~) and [DeleteGroup](~~DeleteGroup~~), you must specify the ID of the asset group. To query the ID of an asset group, call the QueryGroupIdByGroupName operation.
     *   * ### Limits
     *   * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param QueryGroupIdByGroupNameRequest $request QueryGroupIdByGroupNameRequest
     *
     * @return QueryGroupIdByGroupNameResponse QueryGroupIdByGroupNameResponse
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
     * @param QueryJenkinsImageRegistryPersistenceDayRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return QueryJenkinsImageRegistryPersistenceDayResponse
     */
    public function queryJenkinsImageRegistryPersistenceDayWithOptions($request, $runtime)
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
            'action'      => 'QueryJenkinsImageRegistryPersistenceDay',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryJenkinsImageRegistryPersistenceDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryJenkinsImageRegistryPersistenceDayRequest $request
     *
     * @return QueryJenkinsImageRegistryPersistenceDayResponse
     */
    public function queryJenkinsImageRegistryPersistenceDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJenkinsImageRegistryPersistenceDayWithOptions($request, $runtime);
    }

    /**
     * @param QueryPreCheckDatabaseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryPreCheckDatabaseResponse
     */
    public function queryPreCheckDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceUuid)) {
            $query['InstanceUuid'] = $request->instanceUuid;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->uniRegionId)) {
            $query['UniRegionId'] = $request->uniRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPreCheckDatabase',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPreCheckDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPreCheckDatabaseRequest $request
     *
     * @return QueryPreCheckDatabaseResponse
     */
    public function queryPreCheckDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPreCheckDatabaseWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->cloudAssetSubType)) {
            $query['CloudAssetSubType'] = $request->cloudAssetSubType;
        }
        if (!Utils::isUnset($request->cloudAssetType)) {
            $query['CloudAssetType'] = $request->cloudAssetType;
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
     * @param RemoveCheckInstanceResultWhiteListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return RemoveCheckInstanceResultWhiteListResponse
     */
    public function removeCheckInstanceResultWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveCheckInstanceResultWhiteList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveCheckInstanceResultWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveCheckInstanceResultWhiteListRequest $request
     *
     * @return RemoveCheckInstanceResultWhiteListResponse
     */
    public function removeCheckInstanceResultWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeCheckInstanceResultWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param RemoveCheckResultWhiteListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RemoveCheckResultWhiteListResponse
     */
    public function removeCheckResultWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkGroupId)) {
            $query['CheckGroupId'] = $request->checkGroupId;
        }
        if (!Utils::isUnset($request->checkIds)) {
            $query['CheckIds'] = $request->checkIds;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveCheckResultWhiteList',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveCheckResultWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveCheckResultWhiteListRequest $request
     *
     * @return RemoveCheckResultWhiteListResponse
     */
    public function removeCheckResultWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeCheckResultWhiteListWithOptions($request, $runtime);
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
     * @param SaveImageBaselineStrategyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SaveImageBaselineStrategyResponse
     */
    public function saveImageBaselineStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baselineItemList)) {
            $query['BaselineItemList'] = $request->baselineItemList;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        if (!Utils::isUnset($request->strategyName)) {
            $query['StrategyName'] = $request->strategyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveImageBaselineStrategy',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveImageBaselineStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveImageBaselineStrategyRequest $request
     *
     * @return SaveImageBaselineStrategyResponse
     */
    public function saveImageBaselineStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveImageBaselineStrategyWithOptions($request, $runtime);
    }

    /**
     * @param SaveSuspEventUserSettingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SaveSuspEventUserSettingResponse
     */
    public function saveSuspEventUserSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->levelsOn)) {
            $query['LevelsOn'] = $request->levelsOn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSuspEventUserSetting',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSuspEventUserSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveSuspEventUserSettingRequest $request
     *
     * @return SaveSuspEventUserSettingResponse
     */
    public function saveSuspEventUserSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSuspEventUserSettingWithOptions($request, $runtime);
    }

    /**
     * @param SetClusterInterceptionConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SetClusterInterceptionConfigResponse
     */
    public function setClusterInterceptionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $query['ClusterIds'] = $request->clusterIds;
        }
        if (!Utils::isUnset($request->switchOn)) {
            $query['SwitchOn'] = $request->switchOn;
        }
        if (!Utils::isUnset($request->switchType)) {
            $query['SwitchType'] = $request->switchType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetClusterInterceptionConfig',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetClusterInterceptionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetClusterInterceptionConfigRequest $request
     *
     * @return SetClusterInterceptionConfigResponse
     */
    public function setClusterInterceptionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setClusterInterceptionConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetRegistryScanDayNumRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetRegistryScanDayNumResponse
     */
    public function setRegistryScanDayNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scanDayNum)) {
            $query['ScanDayNum'] = $request->scanDayNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetRegistryScanDayNum',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetRegistryScanDayNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetRegistryScanDayNumRequest $request
     *
     * @return SetRegistryScanDayNumResponse
     */
    public function setRegistryScanDayNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRegistryScanDayNumWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param StartBaselineSecurityCheckRequest $request StartBaselineSecurityCheckRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return StartBaselineSecurityCheckResponse StartBaselineSecurityCheckResponse
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param StartBaselineSecurityCheckRequest $request StartBaselineSecurityCheckRequest
     *
     * @return StartBaselineSecurityCheckResponse StartBaselineSecurityCheckResponse
     */
    public function startBaselineSecurityCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startBaselineSecurityCheckWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return StartDiscoverDatabaseTaskResponse
     */
    public function startDiscoverDatabaseTaskWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'StartDiscoverDatabaseTask',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDiscoverDatabaseTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return StartDiscoverDatabaseTaskResponse
     */
    public function startDiscoverDatabaseTask()
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDiscoverDatabaseTaskWithOptions($runtime);
    }

    /**
     * @param StartPreCheckDatabaseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StartPreCheckDatabaseResponse
     */
    public function startPreCheckDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseType)) {
            $query['DatabaseType'] = $request->databaseType;
        }
        if (!Utils::isUnset($request->instanceUuid)) {
            $query['InstanceUuid'] = $request->instanceUuid;
        }
        if (!Utils::isUnset($request->uniRegionId)) {
            $query['UniRegionId'] = $request->uniRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartPreCheckDatabase',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartPreCheckDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartPreCheckDatabaseRequest $request
     *
     * @return StartPreCheckDatabaseResponse
     */
    public function startPreCheckDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPreCheckDatabaseWithOptions($request, $runtime);
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
     * @param RuntimeOptions $runtime
     *
     * @return SubmitCheckResponse
     */
    public function submitCheckWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'SubmitCheck',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return SubmitCheckResponse
     */
    public function submitCheck()
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCheckWithOptions($runtime);
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
     * @param UninstallUniBackupAgentRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UninstallUniBackupAgentResponse
     */
    public function uninstallUniBackupAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UninstallUniBackupAgent',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UninstallUniBackupAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UninstallUniBackupAgentRequest $request
     *
     * @return UninstallUniBackupAgentResponse
     */
    public function uninstallUniBackupAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallUniBackupAgentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateHoneypotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateHoneypotResponse
     */
    public function updateHoneypotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->honeypotId)) {
            $query['HoneypotId'] = $request->honeypotId;
        }
        if (!Utils::isUnset($request->honeypotName)) {
            $query['HoneypotName'] = $request->honeypotName;
        }
        if (!Utils::isUnset($request->meta)) {
            $query['Meta'] = $request->meta;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHoneypot',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHoneypotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHoneypotRequest $request
     *
     * @return UpdateHoneypotResponse
     */
    public function updateHoneypot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHoneypotWithOptions($request, $runtime);
    }

    /**
     * @param UpdateHoneypotNodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateHoneypotNodeResponse
     */
    public function updateHoneypotNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->availableProbeNum)) {
            $query['AvailableProbeNum'] = $request->availableProbeNum;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->securityGroupProbeIpList)) {
            $query['SecurityGroupProbeIpList'] = $request->securityGroupProbeIpList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHoneypotNode',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHoneypotNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHoneypotNodeRequest $request
     *
     * @return UpdateHoneypotNodeResponse
     */
    public function updateHoneypotNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHoneypotNodeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateHoneypotPresetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateHoneypotPresetResponse
     */
    public function updateHoneypotPresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->honeypotImageName)) {
            $query['HoneypotImageName'] = $request->honeypotImageName;
        }
        if (!Utils::isUnset($request->honeypotPresetId)) {
            $query['HoneypotPresetId'] = $request->honeypotPresetId;
        }
        if (!Utils::isUnset($request->meta)) {
            $query['Meta'] = $request->meta;
        }
        if (!Utils::isUnset($request->presetName)) {
            $query['PresetName'] = $request->presetName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHoneypotPreset',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHoneypotPresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHoneypotPresetRequest $request
     *
     * @return UpdateHoneypotPresetResponse
     */
    public function updateHoneypotPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHoneypotPresetWithOptions($request, $runtime);
    }

    /**
     * @param UpdateHoneypotProbeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateHoneypotProbeResponse
     */
    public function updateHoneypotProbeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->arp)) {
            $query['Arp'] = $request->arp;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->ping)) {
            $query['Ping'] = $request->ping;
        }
        if (!Utils::isUnset($request->probeId)) {
            $query['ProbeId'] = $request->probeId;
        }
        if (!Utils::isUnset($request->serviceIpList)) {
            $query['ServiceIpList'] = $request->serviceIpList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateHoneypotProbe',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHoneypotProbeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateHoneypotProbeRequest $request
     *
     * @return UpdateHoneypotProbeResponse
     */
    public function updateHoneypotProbe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHoneypotProbeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateJenkinsImageRegistryNameRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateJenkinsImageRegistryNameResponse
     */
    public function updateJenkinsImageRegistryNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $body = [];
        if (!Utils::isUnset($request->registryId)) {
            $body['RegistryId'] = $request->registryId;
        }
        if (!Utils::isUnset($request->registryName)) {
            $body['RegistryName'] = $request->registryName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateJenkinsImageRegistryName',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateJenkinsImageRegistryNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateJenkinsImageRegistryNameRequest $request
     *
     * @return UpdateJenkinsImageRegistryNameResponse
     */
    public function updateJenkinsImageRegistryName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJenkinsImageRegistryNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateJenkinsImageRegistryPersistenceDayRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return UpdateJenkinsImageRegistryPersistenceDayResponse
     */
    public function updateJenkinsImageRegistryPersistenceDayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $body = [];
        if (!Utils::isUnset($request->persistenceDay)) {
            $body['PersistenceDay'] = $request->persistenceDay;
        }
        if (!Utils::isUnset($request->registryId)) {
            $body['RegistryId'] = $request->registryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateJenkinsImageRegistryPersistenceDay',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateJenkinsImageRegistryPersistenceDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateJenkinsImageRegistryPersistenceDayRequest $request
     *
     * @return UpdateJenkinsImageRegistryPersistenceDayResponse
     */
    public function updateJenkinsImageRegistryPersistenceDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJenkinsImageRegistryPersistenceDayWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeBackupPolicyVersionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpgradeBackupPolicyVersionResponse
     */
    public function upgradeBackupPolicyVersionWithOptions($request, $runtime)
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
            'action'      => 'UpgradeBackupPolicyVersion',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeBackupPolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeBackupPolicyVersionRequest $request
     *
     * @return UpgradeBackupPolicyVersionResponse
     */
    public function upgradeBackupPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeBackupPolicyVersionWithOptions($request, $runtime);
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

    /**
     * @param VerifyCheckInstanceResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return VerifyCheckInstanceResultResponse
     */
    public function verifyCheckInstanceResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyCheckInstanceResult',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyCheckInstanceResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyCheckInstanceResultRequest $request
     *
     * @return VerifyCheckInstanceResultResponse
     */
    public function verifyCheckInstanceResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyCheckInstanceResultWithOptions($request, $runtime);
    }

    /**
     * @param VerifyCheckResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VerifyCheckResultResponse
     */
    public function verifyCheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkIds)) {
            $query['CheckIds'] = $request->checkIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyCheckResult',
            'version'     => '2018-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyCheckResultRequest $request
     *
     * @return VerifyCheckResultResponse
     */
    public function verifyCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyCheckResultWithOptions($request, $runtime);
    }
}
