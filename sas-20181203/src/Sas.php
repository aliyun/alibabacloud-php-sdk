<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddVpcHoneyPotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddVpcHoneyPotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAntiBruteForceRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAntiBruteForceRuleResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateOrUpdateAssetGroupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateOrUpdateAssetGroupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSasOrderRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSasOrderResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateSimilarSecurityEventsQueryTaskResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteLoginBaseConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteLoginBaseConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteTagWithUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteTagWithUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteVpcHoneyPotRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteVpcHoneyPotResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAccesskeyLeakListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedMaliciousFileImagesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllEntityRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllEntityResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllGroupsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllGroupsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllRegionsStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllRegionsStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAutoDelConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAutoDelConfigResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudProductFieldStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudProductFieldStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeConcernNecessityRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeConcernNecessityResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCriteriaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDialogMessagesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDialogMessagesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDingTalkResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainCountRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainCountResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulGroupRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulGroupResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExportInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExportInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceCriteriaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFieldStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFieldStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedMaliciousFilesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedMaliciousFilesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedTagsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedTagsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedVulRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedVulResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotAuthRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotAuthResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotSuspStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotSuspStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageGroupedVulListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCaptchaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstallCaptchaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceAntiBruteForceRulesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceAntiBruteForceRulesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceStatisticsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceStatisticsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIpInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIpInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNoticeConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNoticeConfigResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSasAssetStatisticsColumnRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSasAssetStatisticsColumnResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarEventScenariosRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarEventScenariosResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarSecurityEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyExecDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyExecDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStratetyRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStratetyResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSummaryInfoRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSummaryInfoResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventDetailRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventDetailResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventQuaraFilesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventQuaraFilesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBaselineAuthorizationRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBaselineAuthorizationResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserLayoutAuthorizationRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserLayoutAuthorizationResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVersionConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVersionConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVolDingdingMessageRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVolDingdingMessageResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotCriteriaRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotCriteriaResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulWhitelistRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulWhitelistResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWarningMachinesRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWarningMachinesResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockBindListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockBindListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockConfigListRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockConfigListResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportRecordRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportRecordResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\FixCheckWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\FixCheckWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetIncIOCsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetIncIOCsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetIOCsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetIOCsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSecurityEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\HandleSimilarSecurityEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreHcCheckWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreHcCheckWarningsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAntiBruteForceRuleRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAntiBruteForceRuleResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyNoticeConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyNoticeConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyOperateVulRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyOperateVulResponse;
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
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUnbindRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUnbindResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUpdateConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyWebLockUpdateConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousTargetConfigRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateSuspiciousTargetConfigResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationSuspEventsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperationSuspEventsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\PauseClientRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\PauseClientResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshContainerAssetsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RefreshContainerAssetsResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\RollbackSuspEventQuaraFileRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\RollbackSuspEventQuaraFileResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\SasInstallCodeRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\SasInstallCodeResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartBaselineSecurityCheckRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartBaselineSecurityCheckResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartImageVulScanRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\StartImageVulScanResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\ValidateHcWarningsRequest;
use AlibabaCloud\SDK\Sas\V20181203\Models\ValidateHcWarningsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Sas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-hangzhou'         => 'tds.aliyuncs.com',
            'ap-southeast-3'      => 'tds.ap-southeast-3.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'tds.cn-shanghai-et2-b01.aliyuncs.com',
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
     * @param AddVpcHoneyPotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddVpcHoneyPotResponse
     */
    public function addVpcHoneyPotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVpcHoneyPotResponse::fromMap($this->doRPCRequest('AddVpcHoneyPot', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateAntiBruteForceRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAntiBruteForceRuleResponse
     */
    public function createAntiBruteForceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAntiBruteForceRuleResponse::fromMap($this->doRPCRequest('CreateAntiBruteForceRule', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateOrUpdateAssetGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOrUpdateAssetGroupResponse
     */
    public function createOrUpdateAssetGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOrUpdateAssetGroupResponse::fromMap($this->doRPCRequest('CreateOrUpdateAssetGroup', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSasOrderRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSasOrderResponse
     */
    public function createSasOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSasOrderResponse::fromMap($this->doRPCRequest('CreateSasOrder', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSasOrderRequest $request
     *
     * @return CreateSasOrderResponse
     */
    public function createSasOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSasOrderWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSimilarSecurityEventsQueryTaskResponse::fromMap($this->doRPCRequest('CreateSimilarSecurityEventsQueryTask', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGroupResponse::fromMap($this->doRPCRequest('DeleteGroup', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLoginBaseConfigResponse::fromMap($this->doRPCRequest('DeleteLoginBaseConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteTagWithUuidRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteTagWithUuidResponse
     */
    public function deleteTagWithUuidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTagWithUuidResponse::fromMap($this->doRPCRequest('DeleteTagWithUuid', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVpcHoneyPotResponse::fromMap($this->doRPCRequest('DeleteVpcHoneyPot', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAccesskeyLeakListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAccesskeyLeakListResponse
     */
    public function describeAccesskeyLeakListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccesskeyLeakListResponse::fromMap($this->doRPCRequest('DescribeAccesskeyLeakList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAffectedMaliciousFileImagesResponse::fromMap($this->doRPCRequest('DescribeAffectedMaliciousFileImages', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAlarmEventDetailResponse::fromMap($this->doRPCRequest('DescribeAlarmEventDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAlarmEventListResponse::fromMap($this->doRPCRequest('DescribeAlarmEventList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAllEntityRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAllEntityResponse
     */
    public function describeAllEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAllEntityResponse::fromMap($this->doRPCRequest('DescribeAllEntity', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAllEntityRequest $request
     *
     * @return DescribeAllEntityResponse
     */
    public function describeAllEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllEntityWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAllGroupsResponse::fromMap($this->doRPCRequest('DescribeAllGroups', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAllRegionsStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAllRegionsStatisticsResponse
     */
    public function describeAllRegionsStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAllRegionsStatisticsResponse::fromMap($this->doRPCRequest('DescribeAllRegionsStatistics', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAllRegionsStatisticsRequest $request
     *
     * @return DescribeAllRegionsStatisticsResponse
     */
    public function describeAllRegionsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllRegionsStatisticsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAntiBruteForceRulesResponse::fromMap($this->doRPCRequest('DescribeAntiBruteForceRules', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAssetDetailByUuidResponse::fromMap($this->doRPCRequest('DescribeAssetDetailByUuid', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAssetDetailByUuidsResponse::fromMap($this->doRPCRequest('DescribeAssetDetailByUuids', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAutoDelConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAutoDelConfigResponse
     */
    public function describeAutoDelConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoDelConfigResponse::fromMap($this->doRPCRequest('DescribeAutoDelConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoDelConfigRequest $request
     *
     * @return DescribeAutoDelConfigResponse
     */
    public function describeAutoDelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoDelConfigWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBruteForceSummaryResponse::fromMap($this->doRPCRequest('DescribeBruteForceSummary', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCheckEcsWarningsResponse::fromMap($this->doRPCRequest('DescribeCheckEcsWarnings', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCheckWarningDetailResponse::fromMap($this->doRPCRequest('DescribeCheckWarningDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCheckWarningsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCheckWarningsResponse
     */
    public function describeCheckWarningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCheckWarningsResponse::fromMap($this->doRPCRequest('DescribeCheckWarnings', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCheckWarningSummaryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCheckWarningSummaryResponse
     */
    public function describeCheckWarningSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCheckWarningSummaryResponse::fromMap($this->doRPCRequest('DescribeCheckWarningSummary', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCloudCenterInstancesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudCenterInstancesResponse
     */
    public function describeCloudCenterInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCloudCenterInstancesResponse::fromMap($this->doRPCRequest('DescribeCloudCenterInstances', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCloudProductFieldStatisticsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCloudProductFieldStatisticsResponse
     */
    public function describeCloudProductFieldStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCloudProductFieldStatisticsResponse::fromMap($this->doRPCRequest('DescribeCloudProductFieldStatistics', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCloudProductFieldStatisticsRequest $request
     *
     * @return DescribeCloudProductFieldStatisticsResponse
     */
    public function describeCloudProductFieldStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudProductFieldStatisticsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeConcernNecessityResponse::fromMap($this->doRPCRequest('DescribeConcernNecessity', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeContainerStatisticsResponse::fromMap($this->doRPCRequest('DescribeContainerStatistics', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCriteriaResponse::fromMap($this->doRPCRequest('DescribeCriteria', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDialogMessagesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDialogMessagesResponse
     */
    public function describeDialogMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDialogMessagesResponse::fromMap($this->doRPCRequest('DescribeDialogMessages', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDialogMessagesRequest $request
     *
     * @return DescribeDialogMessagesResponse
     */
    public function describeDialogMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDialogMessagesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDingTalkResponse::fromMap($this->doRPCRequest('DescribeDingTalk', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainCountResponse::fromMap($this->doRPCRequest('DescribeDomainCount', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainDetailResponse::fromMap($this->doRPCRequest('DescribeDomainDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainListResponse::fromMap($this->doRPCRequest('DescribeDomainList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeEmgVulGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEmgVulGroupResponse
     */
    public function describeEmgVulGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEmgVulGroupResponse::fromMap($this->doRPCRequest('DescribeEmgVulGroup', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEmgVulGroupRequest $request
     *
     * @return DescribeEmgVulGroupResponse
     */
    public function describeEmgVulGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmgVulGroupWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExportInfoResponse::fromMap($this->doRPCRequest('DescribeExportInfo', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExposedInstanceCriteriaResponse::fromMap($this->doRPCRequest('DescribeExposedInstanceCriteria', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExposedInstanceDetailResponse::fromMap($this->doRPCRequest('DescribeExposedInstanceDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExposedInstanceListResponse::fromMap($this->doRPCRequest('DescribeExposedInstanceList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeExposedStatisticsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExposedStatisticsResponse
     */
    public function describeExposedStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExposedStatisticsResponse::fromMap($this->doRPCRequest('DescribeExposedStatistics', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeExposedStatisticsRequest $request
     *
     * @return DescribeExposedStatisticsResponse
     */
    public function describeExposedStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExposedStatisticsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFieldStatisticsResponse::fromMap($this->doRPCRequest('DescribeFieldStatistics', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeGraph4InvestigationOnlineRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeGraph4InvestigationOnlineResponse
     */
    public function describeGraph4InvestigationOnlineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGraph4InvestigationOnlineResponse::fromMap($this->doRPCRequest('DescribeGraph4InvestigationOnline', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGraph4InvestigationOnlineRequest $request
     *
     * @return DescribeGraph4InvestigationOnlineResponse
     */
    public function describeGraph4InvestigationOnline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGraph4InvestigationOnlineWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGroupedContainerInstancesResponse::fromMap($this->doRPCRequest('DescribeGroupedContainerInstances', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeGroupedMaliciousFilesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeGroupedMaliciousFilesResponse
     */
    public function describeGroupedMaliciousFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGroupedMaliciousFilesResponse::fromMap($this->doRPCRequest('DescribeGroupedMaliciousFiles', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGroupedTagsResponse::fromMap($this->doRPCRequest('DescribeGroupedTags', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGroupedVulResponse::fromMap($this->doRPCRequest('DescribeGroupedVul', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeHoneyPotAuthRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHoneyPotAuthResponse
     */
    public function describeHoneyPotAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHoneyPotAuthResponse::fromMap($this->doRPCRequest('DescribeHoneyPotAuth', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHoneyPotAuthRequest $request
     *
     * @return DescribeHoneyPotAuthResponse
     */
    public function describeHoneyPotAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHoneyPotAuthWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHoneyPotSuspStatisticsResponse::fromMap($this->doRPCRequest('DescribeHoneyPotSuspStatistics', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeImageGroupedVulListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeImageGroupedVulListResponse
     */
    public function describeImageGroupedVulListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImageGroupedVulListResponse::fromMap($this->doRPCRequest('DescribeImageGroupedVulList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeImageStatisticsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeImageStatisticsResponse
     */
    public function describeImageStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImageStatisticsResponse::fromMap($this->doRPCRequest('DescribeImageStatistics', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeImageStatisticsRequest $request
     *
     * @return DescribeImageStatisticsResponse
     */
    public function describeImageStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageStatisticsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImageVulListResponse::fromMap($this->doRPCRequest('DescribeImageVulList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstallCaptchaResponse::fromMap($this->doRPCRequest('DescribeInstallCaptcha', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceAntiBruteForceRulesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeInstanceAntiBruteForceRulesResponse
     */
    public function describeInstanceAntiBruteForceRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAntiBruteForceRulesResponse::fromMap($this->doRPCRequest('DescribeInstanceAntiBruteForceRules', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceStatisticsResponse::fromMap($this->doRPCRequest('DescribeInstanceStatistics', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeIpInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeIpInfoResponse
     */
    public function describeIpInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpInfoResponse::fromMap($this->doRPCRequest('DescribeIpInfo', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIpInfoRequest $request
     *
     * @return DescribeIpInfoResponse
     */
    public function describeIpInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeModuleConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeModuleConfigResponse
     */
    public function describeModuleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeModuleConfigResponse::fromMap($this->doRPCRequest('DescribeModuleConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeModuleConfigRequest $request
     *
     * @return DescribeModuleConfigResponse
     */
    public function describeModuleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModuleConfigWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNoticeConfigResponse::fromMap($this->doRPCRequest('DescribeNoticeConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribePropertyCountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePropertyCountResponse
     */
    public function describePropertyCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyCountResponse::fromMap($this->doRPCRequest('DescribePropertyCount', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyCronDetailResponse::fromMap($this->doRPCRequest('DescribePropertyCronDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyPortDetailResponse::fromMap($this->doRPCRequest('DescribePropertyPortDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyPortItemResponse::fromMap($this->doRPCRequest('DescribePropertyPortItem', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyProcDetailResponse::fromMap($this->doRPCRequest('DescribePropertyProcDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyProcItemResponse::fromMap($this->doRPCRequest('DescribePropertyProcItem', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyScaDetailResponse::fromMap($this->doRPCRequest('DescribePropertyScaDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertySoftwareDetailResponse::fromMap($this->doRPCRequest('DescribePropertySoftwareDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertySoftwareItemResponse::fromMap($this->doRPCRequest('DescribePropertySoftwareItem', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyUsageNewestResponse::fromMap($this->doRPCRequest('DescribePropertyUsageNewest', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyUserDetailResponse::fromMap($this->doRPCRequest('DescribePropertyUserDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePropertyUserItemResponse::fromMap($this->doRPCRequest('DescribePropertyUserItem', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRiskCheckItemResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRiskCheckItemResultResponse
     */
    public function describeRiskCheckItemResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRiskCheckItemResultResponse::fromMap($this->doRPCRequest('DescribeRiskCheckItemResult', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRiskCheckResultResponse::fromMap($this->doRPCRequest('DescribeRiskCheckResult', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRiskCheckSummaryResponse::fromMap($this->doRPCRequest('DescribeRiskCheckSummary', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRiskItemTypeResponse::fromMap($this->doRPCRequest('DescribeRiskItemType', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRiskListCheckResultResponse::fromMap($this->doRPCRequest('DescribeRiskListCheckResult', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSasAssetStatisticsColumnRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeSasAssetStatisticsColumnResponse
     */
    public function describeSasAssetStatisticsColumnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSasAssetStatisticsColumnResponse::fromMap($this->doRPCRequest('DescribeSasAssetStatisticsColumn', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSasAssetStatisticsColumnRequest $request
     *
     * @return DescribeSasAssetStatisticsColumnResponse
     */
    public function describeSasAssetStatisticsColumn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSasAssetStatisticsColumnWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSearchConditionResponse::fromMap($this->doRPCRequest('DescribeSearchCondition', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecureSuggestionResponse::fromMap($this->doRPCRequest('DescribeSecureSuggestion', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityCheckScheduleConfigResponse::fromMap($this->doRPCRequest('DescribeSecurityCheckScheduleConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSecurityEventOperationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSecurityEventOperationsResponse
     */
    public function describeSecurityEventOperationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityEventOperationsResponse::fromMap($this->doRPCRequest('DescribeSecurityEventOperations', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSecurityEventOperationStatusRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeSecurityEventOperationStatusResponse
     */
    public function describeSecurityEventOperationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityEventOperationStatusResponse::fromMap($this->doRPCRequest('DescribeSecurityEventOperationStatus', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSecurityStatInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSecurityStatInfoResponse
     */
    public function describeSecurityStatInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityStatInfoResponse::fromMap($this->doRPCRequest('DescribeSecurityStatInfo', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSimilarEventScenariosRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSimilarEventScenariosResponse
     */
    public function describeSimilarEventScenariosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSimilarEventScenariosResponse::fromMap($this->doRPCRequest('DescribeSimilarEventScenarios', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSimilarSecurityEventsResponse::fromMap($this->doRPCRequest('DescribeSimilarSecurityEvents', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeStrategyExecDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeStrategyExecDetailResponse
     */
    public function describeStrategyExecDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStrategyExecDetailResponse::fromMap($this->doRPCRequest('DescribeStrategyExecDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeStratetyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeStratetyResponse
     */
    public function describeStratetyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStratetyResponse::fromMap($this->doRPCRequest('DescribeStratety', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStratetyRequest $request
     *
     * @return DescribeStratetyResponse
     */
    public function describeStratety($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStratetyWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSummaryInfoResponse::fromMap($this->doRPCRequest('DescribeSummaryInfo', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSuspEventDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSuspEventDetailResponse
     */
    public function describeSuspEventDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSuspEventDetailResponse::fromMap($this->doRPCRequest('DescribeSuspEventDetail', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSuspEventQuaraFilesResponse::fromMap($this->doRPCRequest('DescribeSuspEventQuaraFiles', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSuspEventsResponse::fromMap($this->doRPCRequest('DescribeSuspEvents', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeUserBaselineAuthorizationRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeUserBaselineAuthorizationResponse
     */
    public function describeUserBaselineAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserBaselineAuthorizationResponse::fromMap($this->doRPCRequest('DescribeUserBaselineAuthorization', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserLayoutAuthorizationResponse::fromMap($this->doRPCRequest('DescribeUserLayoutAuthorization', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVersionConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVersionConfigResponse
     */
    public function describeVersionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVersionConfigResponse::fromMap($this->doRPCRequest('DescribeVersionConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVolDingdingMessageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVolDingdingMessageResponse
     */
    public function describeVolDingdingMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVolDingdingMessageResponse::fromMap($this->doRPCRequest('DescribeVolDingdingMessage', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVolDingdingMessageRequest $request
     *
     * @return DescribeVolDingdingMessageResponse
     */
    public function describeVolDingdingMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVolDingdingMessageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVpcHoneyPotCriteriaRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVpcHoneyPotCriteriaResponse
     */
    public function describeVpcHoneyPotCriteriaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcHoneyPotCriteriaResponse::fromMap($this->doRPCRequest('DescribeVpcHoneyPotCriteria', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVpcHoneyPotCriteriaRequest $request
     *
     * @return DescribeVpcHoneyPotCriteriaResponse
     */
    public function describeVpcHoneyPotCriteria($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcHoneyPotCriteriaWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcHoneyPotListResponse::fromMap($this->doRPCRequest('DescribeVpcHoneyPotList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVpcListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeVpcListResponse
     */
    public function describeVpcListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVpcListResponse::fromMap($this->doRPCRequest('DescribeVpcList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVpcListRequest $request
     *
     * @return DescribeVpcListResponse
     */
    public function describeVpcList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcListWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVulDetailsResponse::fromMap($this->doRPCRequest('DescribeVulDetails', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVulListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeVulListResponse
     */
    public function describeVulListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVulListResponse::fromMap($this->doRPCRequest('DescribeVulList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVulWhitelistResponse::fromMap($this->doRPCRequest('DescribeVulWhitelist', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeWarningMachinesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeWarningMachinesResponse
     */
    public function describeWarningMachinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWarningMachinesResponse::fromMap($this->doRPCRequest('DescribeWarningMachines', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebLockBindListResponse::fromMap($this->doRPCRequest('DescribeWebLockBindList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWebLockConfigListResponse::fromMap($this->doRPCRequest('DescribeWebLockConfigList', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExportRecordResponse::fromMap($this->doRPCRequest('ExportRecord', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param FixCheckWarningsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FixCheckWarningsResponse
     */
    public function fixCheckWarningsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FixCheckWarningsResponse::fromMap($this->doRPCRequest('FixCheckWarnings', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetIncIOCsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetIncIOCsResponse
     */
    public function getIncIOCsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetIncIOCsResponse::fromMap($this->doRPCRequest('GetIncIOCs', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetIncIOCsRequest $request
     *
     * @return GetIncIOCsResponse
     */
    public function getIncIOCs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIncIOCsWithOptions($request, $runtime);
    }

    /**
     * @param GetIOCsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetIOCsResponse
     */
    public function getIOCsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetIOCsResponse::fromMap($this->doRPCRequest('GetIOCs', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetIOCsRequest $request
     *
     * @return GetIOCsResponse
     */
    public function getIOCs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIOCsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HandleSecurityEventsResponse::fromMap($this->doRPCRequest('HandleSecurityEvents', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HandleSimilarSecurityEventsResponse::fromMap($this->doRPCRequest('HandleSimilarSecurityEvents', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return IgnoreHcCheckWarningsResponse::fromMap($this->doRPCRequest('IgnoreHcCheckWarnings', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyAntiBruteForceRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAntiBruteForceRuleResponse
     */
    public function modifyAntiBruteForceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAntiBruteForceRuleResponse::fromMap($this->doRPCRequest('ModifyAntiBruteForceRule', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyCreateVulWhitelistRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyCreateVulWhitelistResponse
     */
    public function modifyCreateVulWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCreateVulWhitelistResponse::fromMap($this->doRPCRequest('ModifyCreateVulWhitelist', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyEmgVulSubmitResponse::fromMap($this->doRPCRequest('ModifyEmgVulSubmit', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyGroupPropertyResponse::fromMap($this->doRPCRequest('ModifyGroupProperty', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAntiBruteForceRuleResponse::fromMap($this->doRPCRequest('ModifyInstanceAntiBruteForceRule', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLoginBaseConfigResponse::fromMap($this->doRPCRequest('ModifyLoginBaseConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLoginSwitchConfigResponse::fromMap($this->doRPCRequest('ModifyLoginSwitchConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNoticeConfigResponse::fromMap($this->doRPCRequest('ModifyNoticeConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyOperateVulRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyOperateVulResponse
     */
    public function modifyOperateVulWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyOperateVulResponse::fromMap($this->doRPCRequest('ModifyOperateVul', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyPushAllTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPushAllTaskResponse
     */
    public function modifyPushAllTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPushAllTaskResponse::fromMap($this->doRPCRequest('ModifyPushAllTask', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRiskCheckStatusResponse::fromMap($this->doRPCRequest('ModifyRiskCheckStatus', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRiskSingleResultStatusResponse::fromMap($this->doRPCRequest('ModifyRiskSingleResultStatus', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityCheckScheduleConfigResponse::fromMap($this->doRPCRequest('ModifySecurityCheckScheduleConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyStartVulScanResponse::fromMap($this->doRPCRequest('ModifyStartVulScan', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyTagWithUuidRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyTagWithUuidResponse
     */
    public function modifyTagWithUuidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTagWithUuidResponse::fromMap($this->doRPCRequest('ModifyTagWithUuid', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVpcHoneyPotResponse::fromMap($this->doRPCRequest('ModifyVpcHoneyPot', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyVulTargetConfigResponse::fromMap($this->doRPCRequest('ModifyVulTargetConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebLockCreateConfigResponse::fromMap($this->doRPCRequest('ModifyWebLockCreateConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebLockDeleteConfigResponse::fromMap($this->doRPCRequest('ModifyWebLockDeleteConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebLockStartResponse::fromMap($this->doRPCRequest('ModifyWebLockStart', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyWebLockUnbindRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyWebLockUnbindResponse
     */
    public function modifyWebLockUnbindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebLockUnbindResponse::fromMap($this->doRPCRequest('ModifyWebLockUnbind', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWebLockUpdateConfigResponse::fromMap($this->doRPCRequest('ModifyWebLockUpdateConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OperateSuspiciousTargetConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return OperateSuspiciousTargetConfigResponse
     */
    public function operateSuspiciousTargetConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OperateSuspiciousTargetConfigResponse::fromMap($this->doRPCRequest('OperateSuspiciousTargetConfig', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OperationSuspEventsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OperationSuspEventsResponse
     */
    public function operationSuspEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OperationSuspEventsResponse::fromMap($this->doRPCRequest('OperationSuspEvents', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PauseClientResponse::fromMap($this->doRPCRequest('PauseClient', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RefreshContainerAssetsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RefreshContainerAssetsResponse
     */
    public function refreshContainerAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshContainerAssetsResponse::fromMap($this->doRPCRequest('RefreshContainerAssets', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RollbackSuspEventQuaraFileResponse::fromMap($this->doRPCRequest('RollbackSuspEventQuaraFile', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SasInstallCodeResponse::fromMap($this->doRPCRequest('SasInstallCode', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartBaselineSecurityCheckResponse::fromMap($this->doRPCRequest('StartBaselineSecurityCheck', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartImageVulScanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartImageVulScanResponse
     */
    public function startImageVulScanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartImageVulScanResponse::fromMap($this->doRPCRequest('StartImageVulScan', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartImageVulScanRequest $request
     *
     * @return StartImageVulScanResponse
     */
    public function startImageVulScan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startImageVulScanWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ValidateHcWarningsResponse::fromMap($this->doRPCRequest('ValidateHcWarnings', '2018-12-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
