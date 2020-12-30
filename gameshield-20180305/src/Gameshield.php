<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CleanFlexAccFwdRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CleanFlexAccFwdRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CleanFlexFwdRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CleanFlexFwdRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\ClearCcRouteRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\ClearCcRouteRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateAppKeyRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateAppKeyResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateAppRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateAppResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateBizRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateBizResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateCcRouteRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateCcRouteRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateFlexAccFwdRuleListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateFlexAccFwdRuleListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateFlexAccFwdRuleRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateFlexAccFwdRuleResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateFlexFwdRuleRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateFlexFwdRuleResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateLayer4RuleRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateLayer4RuleResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateLayer4RulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\CreateLayer4RulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteAppKeyRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteAppKeyResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteBizRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteBizResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteCcRouteRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteCcRouteRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteFlexAccFwdRuleRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteFlexAccFwdRuleResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteFlexFwdRuleRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteFlexFwdRuleResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteLayer4RuleRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DeleteLayer4RuleResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAccResSummaryRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAccResSummaryResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAllLocalIpsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAllLocalIpsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppDailyDetailsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppDailyDetailsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppDailySdkVersionsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppDailySdkVersionsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppSimpleListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAppSimpleListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAsyncOperationRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAsyncOperationResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAutomaticTraceabilitySlsLogRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAutomaticTraceabilitySlsLogResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBgpResSummaryRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBgpResSummaryResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBizListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBizListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBizSimpleListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBizSimpleListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBpsFlowRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBpsFlowResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcBlackListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcBlackListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcDevieIpListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcDevieIpListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcFlowRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcFlowResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcIDCBlockSwitchRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcIDCBlockSwitchResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcMaxFwRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcMaxFwResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcResSummaryRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcResSummaryResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcRouteRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcRouteRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcRouteSwitchRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcRouteSwitchResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcSocketDetailRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcSocketDetailResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcTotalFwRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcTotalFwResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcTunnelRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcTunnelResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcWhiteListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcWhiteListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcZoneBlockConfigRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcZoneBlockConfigResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcZonesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcZonesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDailyDetailsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDailyDetailsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDownloadUrlsForAppKeyRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDownloadUrlsForAppKeyResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDownloadUrlsForSDKRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeDownloadUrlsForSDKResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexAccConfigRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexAccConfigResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexAccFlowRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexAccFlowResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexAccFwdRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexAccFwdRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexBackupGroupsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexBackupGroupsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexConfigRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexConfigResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexFwdRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexFwdRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexSechedPolicyRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexSechedPolicyResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlowReportRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlowReportResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFullNodesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFullNodesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFullNodesSummaryRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFullNodesSummaryResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeGfResSummaryRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeGfResSummaryResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeGroupListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeGroupListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeGroupSimpleListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeGroupSimpleListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeIpFlowReportRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeIpFlowReportResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeJianYuTestGetRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeJianYuTestGetResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeJianYuTestListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeJianYuTestListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeJianYuTestPaginationRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeJianYuTestPaginationResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeL4EventsSelectiveRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeL4EventsSelectiveResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeLayer4RulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeLayer4RulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeMianLiuResSummaryRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeMianLiuResSummaryResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeNgSourceDiagnosisLogRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeNgSourceDiagnosisLogResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRemainQpsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRemainQpsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticByEsnBizIntervalRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticByEsnBizIntervalResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz1DayProvinceRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz1DayProvinceResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz1DayRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz1DayResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz1M30MRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz1M30MResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz30MRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBiz30MResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBizGroup30MRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBizGroup30MResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticLogRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticLogResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticLogRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticLogResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizISP1M30MRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizISP1M30MResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizISPIntervalRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizISPIntervalResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizProvince1DayRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizProvince1DayResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizProvince30MRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizProvince30MResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSourceFailureTopIpRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSourceFailureTopIpResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSourceFailureTrendGraphRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSourceFailureTrendGraphResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUploadPreSignRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUploadPreSignResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUserFlowInfoRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUserFlowInfoResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUserFlowReportRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUserFlowReportResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUserTotalFlowReportRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUserTotalFlowReportResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadAppKeyFileRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadAppKeyFileResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadCcRouteRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadCcRouteRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadFlexAccRulesFileRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadFlexAccRulesFileResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadLayer4RulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadLayer4RulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadSdkFileRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadSdkFileResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadUserTotalFlowReportRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DownloadUserTotalFlowReportResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\FlushLayer4RulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\FlushLayer4RulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\ReallocNgResourceRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\ReallocNgResourceResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\ReplaceCcRouteRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\ReplaceCcRouteRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\SearchFlexFwdRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\SearchFlexFwdRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateAppResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcBlackListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcBlackListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcIDCBlockSwitchRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcIDCBlockSwitchResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcRouteRulesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcRouteRulesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcRouteSwitchRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcRouteSwitchResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcTunnelGrayAndOnlyAllowRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcTunnelGrayAndOnlyAllowResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcTunnelStatusRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcTunnelStatusResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcUseRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcUseResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcWhiteListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcWhiteListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcZoneBlockConfigRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcZoneBlockConfigResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcZoneBlockStatusRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateCcZoneBlockStatusResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccFwdRuleRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccFwdRuleResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccFwdRuleV2Request;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccFwdRuleV2Response;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccStatusRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccStatusResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccTcpPortsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccTcpPortsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccUdpPortsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexAccUdpPortsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexBackupGroupsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexBackupGroupsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexFwdRuleRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexFwdRuleResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexInnerPolicyRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexInnerPolicyResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexLinkTypeRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexLinkTypeResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexPortsRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexPortsResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexStatusRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateFlexStatusResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateGroupDnsStatusRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateGroupDnsStatusResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateGroupNodesRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateGroupNodesResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateGroupStatusRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateGroupStatusResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateLayer4RuleRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UpdateLayer4RuleResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadCcRouteFileForParseRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadCcRouteFileForParseResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadCcWhiteBlackListRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadCcWhiteBlackListResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadFlexAccRulesFileForParseRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadFlexAccRulesFileForParseResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadFlexRulesFileForParseRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadFlexRulesFileForParseResponse;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadL4RulesFileForParseRequest;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadL4RulesFileForParseResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Gameshield extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gameshield', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CleanFlexAccFwdRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CleanFlexAccFwdRulesResponse
     */
    public function cleanFlexAccFwdRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CleanFlexAccFwdRulesResponse::fromMap($this->doRPCRequest('CleanFlexAccFwdRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CleanFlexAccFwdRulesRequest $request
     *
     * @return CleanFlexAccFwdRulesResponse
     */
    public function cleanFlexAccFwdRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cleanFlexAccFwdRulesWithOptions($request, $runtime);
    }

    /**
     * @param CleanFlexFwdRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CleanFlexFwdRulesResponse
     */
    public function cleanFlexFwdRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CleanFlexFwdRulesResponse::fromMap($this->doRPCRequest('CleanFlexFwdRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CleanFlexFwdRulesRequest $request
     *
     * @return CleanFlexFwdRulesResponse
     */
    public function cleanFlexFwdRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cleanFlexFwdRulesWithOptions($request, $runtime);
    }

    /**
     * @param ClearCcRouteRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ClearCcRouteRulesResponse
     */
    public function clearCcRouteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearCcRouteRulesResponse::fromMap($this->doRPCRequest('ClearCcRouteRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClearCcRouteRulesRequest $request
     *
     * @return ClearCcRouteRulesResponse
     */
    public function clearCcRouteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearCcRouteRulesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAppResponse::fromMap($this->doRPCRequest('CreateApp', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateAppKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAppKeyResponse
     */
    public function createAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAppKeyResponse::fromMap($this->doRPCRequest('CreateAppKey', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateBizRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateBizResponse
     */
    public function createBizWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBizResponse::fromMap($this->doRPCRequest('CreateBiz', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBizRequest $request
     *
     * @return CreateBizResponse
     */
    public function createBiz($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBizWithOptions($request, $runtime);
    }

    /**
     * @param CreateCcRouteRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCcRouteRulesResponse
     */
    public function createCcRouteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCcRouteRulesResponse::fromMap($this->doRPCRequest('CreateCcRouteRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCcRouteRulesRequest $request
     *
     * @return CreateCcRouteRulesResponse
     */
    public function createCcRouteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCcRouteRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlexAccFwdRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateFlexAccFwdRuleResponse
     */
    public function createFlexAccFwdRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlexAccFwdRuleResponse::fromMap($this->doRPCRequest('CreateFlexAccFwdRule', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlexAccFwdRuleRequest $request
     *
     * @return CreateFlexAccFwdRuleResponse
     */
    public function createFlexAccFwdRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlexAccFwdRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlexAccFwdRuleListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateFlexAccFwdRuleListResponse
     */
    public function createFlexAccFwdRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlexAccFwdRuleListResponse::fromMap($this->doRPCRequest('CreateFlexAccFwdRuleList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlexAccFwdRuleListRequest $request
     *
     * @return CreateFlexAccFwdRuleListResponse
     */
    public function createFlexAccFwdRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlexAccFwdRuleListWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlexFwdRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateFlexFwdRuleResponse
     */
    public function createFlexFwdRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlexFwdRuleResponse::fromMap($this->doRPCRequest('CreateFlexFwdRule', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlexFwdRuleRequest $request
     *
     * @return CreateFlexFwdRuleResponse
     */
    public function createFlexFwdRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlexFwdRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGroupResponse::fromMap($this->doRPCRequest('CreateGroup', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateLayer4RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLayer4RuleResponse
     */
    public function createLayer4RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLayer4RuleResponse::fromMap($this->doRPCRequest('CreateLayer4Rule', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLayer4RuleRequest $request
     *
     * @return CreateLayer4RuleResponse
     */
    public function createLayer4Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLayer4RuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateLayer4RulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateLayer4RulesResponse
     */
    public function createLayer4RulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLayer4RulesResponse::fromMap($this->doRPCRequest('CreateLayer4Rules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLayer4RulesRequest $request
     *
     * @return CreateLayer4RulesResponse
     */
    public function createLayer4Rules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLayer4RulesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAppResponse::fromMap($this->doRPCRequest('DeleteApp', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteAppKeyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteAppKeyResponse
     */
    public function deleteAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAppKeyResponse::fromMap($this->doRPCRequest('DeleteAppKey', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteBizRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteBizResponse
     */
    public function deleteBizWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBizResponse::fromMap($this->doRPCRequest('DeleteBiz', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteBizRequest $request
     *
     * @return DeleteBizResponse
     */
    public function deleteBiz($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBizWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCcRouteRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCcRouteRulesResponse
     */
    public function deleteCcRouteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCcRouteRulesResponse::fromMap($this->doRPCRequest('DeleteCcRouteRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCcRouteRulesRequest $request
     *
     * @return DeleteCcRouteRulesResponse
     */
    public function deleteCcRouteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCcRouteRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlexAccFwdRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteFlexAccFwdRuleResponse
     */
    public function deleteFlexAccFwdRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlexAccFwdRuleResponse::fromMap($this->doRPCRequest('DeleteFlexAccFwdRule', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlexAccFwdRuleRequest $request
     *
     * @return DeleteFlexAccFwdRuleResponse
     */
    public function deleteFlexAccFwdRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlexAccFwdRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlexFwdRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteFlexFwdRuleResponse
     */
    public function deleteFlexFwdRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlexFwdRuleResponse::fromMap($this->doRPCRequest('DeleteFlexFwdRule', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlexFwdRuleRequest $request
     *
     * @return DeleteFlexFwdRuleResponse
     */
    public function deleteFlexFwdRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlexFwdRuleWithOptions($request, $runtime);
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

        return DeleteGroupResponse::fromMap($this->doRPCRequest('DeleteGroup', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteLayer4RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLayer4RuleResponse
     */
    public function deleteLayer4RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLayer4RuleResponse::fromMap($this->doRPCRequest('DeleteLayer4Rule', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLayer4RuleRequest $request
     *
     * @return DeleteLayer4RuleResponse
     */
    public function deleteLayer4Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLayer4RuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccResSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAccResSummaryResponse
     */
    public function describeAccResSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccResSummaryResponse::fromMap($this->doRPCRequest('DescribeAccResSummary', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccResSummaryRequest $request
     *
     * @return DescribeAccResSummaryResponse
     */
    public function describeAccResSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccResSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAllLocalIpsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAllLocalIpsResponse
     */
    public function describeAllLocalIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAllLocalIpsResponse::fromMap($this->doRPCRequest('DescribeAllLocalIps', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAllLocalIpsRequest $request
     *
     * @return DescribeAllLocalIpsResponse
     */
    public function describeAllLocalIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllLocalIpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppDailyDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAppDailyDetailsResponse
     */
    public function describeAppDailyDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppDailyDetailsResponse::fromMap($this->doRPCRequest('DescribeAppDailyDetails', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppDailyDetailsRequest $request
     *
     * @return DescribeAppDailyDetailsResponse
     */
    public function describeAppDailyDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppDailyDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppDailySdkVersionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAppDailySdkVersionsResponse
     */
    public function describeAppDailySdkVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppDailySdkVersionsResponse::fromMap($this->doRPCRequest('DescribeAppDailySdkVersions', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppDailySdkVersionsRequest $request
     *
     * @return DescribeAppDailySdkVersionsResponse
     */
    public function describeAppDailySdkVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppDailySdkVersionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAppListResponse
     */
    public function describeAppListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppListResponse::fromMap($this->doRPCRequest('DescribeAppList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppListRequest $request
     *
     * @return DescribeAppListResponse
     */
    public function describeAppList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppSimpleListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAppSimpleListResponse
     */
    public function describeAppSimpleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppSimpleListResponse::fromMap($this->doRPCRequest('DescribeAppSimpleList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppSimpleListRequest $request
     *
     * @return DescribeAppSimpleListResponse
     */
    public function describeAppSimpleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppSimpleListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAsyncOperationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAsyncOperationResponse
     */
    public function describeAsyncOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAsyncOperationResponse::fromMap($this->doRPCRequest('DescribeAsyncOperation', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAsyncOperationRequest $request
     *
     * @return DescribeAsyncOperationResponse
     */
    public function describeAsyncOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAsyncOperationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutomaticTraceabilitySlsLogRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeAutomaticTraceabilitySlsLogResponse
     */
    public function describeAutomaticTraceabilitySlsLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutomaticTraceabilitySlsLogResponse::fromMap($this->doRPCRequest('DescribeAutomaticTraceabilitySlsLog', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutomaticTraceabilitySlsLogRequest $request
     *
     * @return DescribeAutomaticTraceabilitySlsLogResponse
     */
    public function describeAutomaticTraceabilitySlsLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutomaticTraceabilitySlsLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBgpResSummaryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBgpResSummaryResponse
     */
    public function describeBgpResSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBgpResSummaryResponse::fromMap($this->doRPCRequest('DescribeBgpResSummary', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBgpResSummaryRequest $request
     *
     * @return DescribeBgpResSummaryResponse
     */
    public function describeBgpResSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpResSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBizListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBizListResponse
     */
    public function describeBizListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBizListResponse::fromMap($this->doRPCRequest('DescribeBizList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBizListRequest $request
     *
     * @return DescribeBizListResponse
     */
    public function describeBizList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBizListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBizSimpleListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeBizSimpleListResponse
     */
    public function describeBizSimpleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBizSimpleListResponse::fromMap($this->doRPCRequest('DescribeBizSimpleList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBizSimpleListRequest $request
     *
     * @return DescribeBizSimpleListResponse
     */
    public function describeBizSimpleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBizSimpleListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBpsFlowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBpsFlowResponse
     */
    public function describeBpsFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBpsFlowResponse::fromMap($this->doRPCRequest('DescribeBpsFlow', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBpsFlowRequest $request
     *
     * @return DescribeBpsFlowResponse
     */
    public function describeBpsFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBpsFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcBlackListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCcBlackListResponse
     */
    public function describeCcBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcBlackListResponse::fromMap($this->doRPCRequest('DescribeCcBlackList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcBlackListRequest $request
     *
     * @return DescribeCcBlackListResponse
     */
    public function describeCcBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcBlackListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcDevieIpListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCcDevieIpListResponse
     */
    public function describeCcDevieIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcDevieIpListResponse::fromMap($this->doRPCRequest('DescribeCcDevieIpList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcDevieIpListRequest $request
     *
     * @return DescribeCcDevieIpListResponse
     */
    public function describeCcDevieIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcDevieIpListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcFlowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeCcFlowResponse
     */
    public function describeCcFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcFlowResponse::fromMap($this->doRPCRequest('DescribeCcFlow', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcFlowRequest $request
     *
     * @return DescribeCcFlowResponse
     */
    public function describeCcFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcIDCBlockSwitchRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCcIDCBlockSwitchResponse
     */
    public function describeCcIDCBlockSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcIDCBlockSwitchResponse::fromMap($this->doRPCRequest('DescribeCcIDCBlockSwitch', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcIDCBlockSwitchRequest $request
     *
     * @return DescribeCcIDCBlockSwitchResponse
     */
    public function describeCcIDCBlockSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcIDCBlockSwitchWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcMaxFwRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCcMaxFwResponse
     */
    public function describeCcMaxFwWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcMaxFwResponse::fromMap($this->doRPCRequest('DescribeCcMaxFw', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcMaxFwRequest $request
     *
     * @return DescribeCcMaxFwResponse
     */
    public function describeCcMaxFw($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcMaxFwWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcResSummaryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCcResSummaryResponse
     */
    public function describeCcResSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcResSummaryResponse::fromMap($this->doRPCRequest('DescribeCcResSummary', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcResSummaryRequest $request
     *
     * @return DescribeCcResSummaryResponse
     */
    public function describeCcResSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcResSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcRouteRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCcRouteRulesResponse
     */
    public function describeCcRouteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcRouteRulesResponse::fromMap($this->doRPCRequest('DescribeCcRouteRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcRouteRulesRequest $request
     *
     * @return DescribeCcRouteRulesResponse
     */
    public function describeCcRouteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcRouteRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcRouteSwitchRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCcRouteSwitchResponse
     */
    public function describeCcRouteSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcRouteSwitchResponse::fromMap($this->doRPCRequest('DescribeCcRouteSwitch', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcRouteSwitchRequest $request
     *
     * @return DescribeCcRouteSwitchResponse
     */
    public function describeCcRouteSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcRouteSwitchWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcSocketDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCcSocketDetailResponse
     */
    public function describeCcSocketDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcSocketDetailResponse::fromMap($this->doRPCRequest('DescribeCcSocketDetail', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcSocketDetailRequest $request
     *
     * @return DescribeCcSocketDetailResponse
     */
    public function describeCcSocketDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcSocketDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcTotalFwRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeCcTotalFwResponse
     */
    public function describeCcTotalFwWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcTotalFwResponse::fromMap($this->doRPCRequest('DescribeCcTotalFw', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcTotalFwRequest $request
     *
     * @return DescribeCcTotalFwResponse
     */
    public function describeCcTotalFw($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcTotalFwWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcTunnelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCcTunnelResponse
     */
    public function describeCcTunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcTunnelResponse::fromMap($this->doRPCRequest('DescribeCcTunnel', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcTunnelRequest $request
     *
     * @return DescribeCcTunnelResponse
     */
    public function describeCcTunnel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcTunnelWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcWhiteListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCcWhiteListResponse
     */
    public function describeCcWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcWhiteListResponse::fromMap($this->doRPCRequest('DescribeCcWhiteList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcWhiteListRequest $request
     *
     * @return DescribeCcWhiteListResponse
     */
    public function describeCcWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcZoneBlockConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCcZoneBlockConfigResponse
     */
    public function describeCcZoneBlockConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcZoneBlockConfigResponse::fromMap($this->doRPCRequest('DescribeCcZoneBlockConfig', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcZoneBlockConfigRequest $request
     *
     * @return DescribeCcZoneBlockConfigResponse
     */
    public function describeCcZoneBlockConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcZoneBlockConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCcZonesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCcZonesResponse
     */
    public function describeCcZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCcZonesResponse::fromMap($this->doRPCRequest('DescribeCcZones', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCcZonesRequest $request
     *
     * @return DescribeCcZonesResponse
     */
    public function describeCcZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCcZonesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDailyDetailsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDailyDetailsResponse
     */
    public function describeDailyDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDailyDetailsResponse::fromMap($this->doRPCRequest('DescribeDailyDetails', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDailyDetailsRequest $request
     *
     * @return DescribeDailyDetailsResponse
     */
    public function describeDailyDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDailyDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDownloadUrlsForAppKeyRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDownloadUrlsForAppKeyResponse
     */
    public function describeDownloadUrlsForAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDownloadUrlsForAppKeyResponse::fromMap($this->doRPCRequest('DescribeDownloadUrlsForAppKey', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDownloadUrlsForAppKeyRequest $request
     *
     * @return DescribeDownloadUrlsForAppKeyResponse
     */
    public function describeDownloadUrlsForAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadUrlsForAppKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDownloadUrlsForSDKRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDownloadUrlsForSDKResponse
     */
    public function describeDownloadUrlsForSDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDownloadUrlsForSDKResponse::fromMap($this->doRPCRequest('DescribeDownloadUrlsForSDK', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDownloadUrlsForSDKRequest $request
     *
     * @return DescribeDownloadUrlsForSDKResponse
     */
    public function describeDownloadUrlsForSDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDownloadUrlsForSDKWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlexAccConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeFlexAccConfigResponse
     */
    public function describeFlexAccConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlexAccConfigResponse::fromMap($this->doRPCRequest('DescribeFlexAccConfig', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlexAccConfigRequest $request
     *
     * @return DescribeFlexAccConfigResponse
     */
    public function describeFlexAccConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlexAccConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlexAccFlowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFlexAccFlowResponse
     */
    public function describeFlexAccFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlexAccFlowResponse::fromMap($this->doRPCRequest('DescribeFlexAccFlow', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlexAccFlowRequest $request
     *
     * @return DescribeFlexAccFlowResponse
     */
    public function describeFlexAccFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlexAccFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlexAccFwdRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeFlexAccFwdRulesResponse
     */
    public function describeFlexAccFwdRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlexAccFwdRulesResponse::fromMap($this->doRPCRequest('DescribeFlexAccFwdRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlexAccFwdRulesRequest $request
     *
     * @return DescribeFlexAccFwdRulesResponse
     */
    public function describeFlexAccFwdRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlexAccFwdRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlexBackupGroupsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFlexBackupGroupsResponse
     */
    public function describeFlexBackupGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlexBackupGroupsResponse::fromMap($this->doRPCRequest('DescribeFlexBackupGroups', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlexBackupGroupsRequest $request
     *
     * @return DescribeFlexBackupGroupsResponse
     */
    public function describeFlexBackupGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlexBackupGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlexConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFlexConfigResponse
     */
    public function describeFlexConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlexConfigResponse::fromMap($this->doRPCRequest('DescribeFlexConfig', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlexConfigRequest $request
     *
     * @return DescribeFlexConfigResponse
     */
    public function describeFlexConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlexConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlexFwdRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeFlexFwdRulesResponse
     */
    public function describeFlexFwdRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlexFwdRulesResponse::fromMap($this->doRPCRequest('DescribeFlexFwdRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlexFwdRulesRequest $request
     *
     * @return DescribeFlexFwdRulesResponse
     */
    public function describeFlexFwdRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlexFwdRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlexSechedPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFlexSechedPolicyResponse
     */
    public function describeFlexSechedPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlexSechedPolicyResponse::fromMap($this->doRPCRequest('DescribeFlexSechedPolicy', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlexSechedPolicyRequest $request
     *
     * @return DescribeFlexSechedPolicyResponse
     */
    public function describeFlexSechedPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlexSechedPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowReportRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFlowReportResponse
     */
    public function describeFlowReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowReportResponse::fromMap($this->doRPCRequest('DescribeFlowReport', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowReportRequest $request
     *
     * @return DescribeFlowReportResponse
     */
    public function describeFlowReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowReportWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFullNodesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFullNodesResponse
     */
    public function describeFullNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFullNodesResponse::fromMap($this->doRPCRequest('DescribeFullNodes', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFullNodesRequest $request
     *
     * @return DescribeFullNodesResponse
     */
    public function describeFullNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFullNodesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFullNodesSummaryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFullNodesSummaryResponse
     */
    public function describeFullNodesSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFullNodesSummaryResponse::fromMap($this->doRPCRequest('DescribeFullNodesSummary', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFullNodesSummaryRequest $request
     *
     * @return DescribeFullNodesSummaryResponse
     */
    public function describeFullNodesSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFullNodesSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGfResSummaryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGfResSummaryResponse
     */
    public function describeGfResSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGfResSummaryResponse::fromMap($this->doRPCRequest('DescribeGfResSummary', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGfResSummaryRequest $request
     *
     * @return DescribeGfResSummaryResponse
     */
    public function describeGfResSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGfResSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeGroupListResponse
     */
    public function describeGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGroupListResponse::fromMap($this->doRPCRequest('DescribeGroupList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGroupListRequest $request
     *
     * @return DescribeGroupListResponse
     */
    public function describeGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupSimpleListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGroupSimpleListResponse
     */
    public function describeGroupSimpleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGroupSimpleListResponse::fromMap($this->doRPCRequest('DescribeGroupSimpleList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGroupSimpleListRequest $request
     *
     * @return DescribeGroupSimpleListResponse
     */
    public function describeGroupSimpleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupSimpleListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceResponse::fromMap($this->doRPCRequest('DescribeInstance', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpFlowReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeIpFlowReportResponse
     */
    public function describeIpFlowReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpFlowReportResponse::fromMap($this->doRPCRequest('DescribeIpFlowReport', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIpFlowReportRequest $request
     *
     * @return DescribeIpFlowReportResponse
     */
    public function describeIpFlowReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpFlowReportWithOptions($request, $runtime);
    }

    /**
     * @param DescribeJianYuTestGetRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeJianYuTestGetResponse
     */
    public function describeJianYuTestGetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeJianYuTestGetResponse::fromMap($this->doRPCRequest('DescribeJianYuTestGet', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeJianYuTestGetRequest $request
     *
     * @return DescribeJianYuTestGetResponse
     */
    public function describeJianYuTestGet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJianYuTestGetWithOptions($request, $runtime);
    }

    /**
     * @param DescribeJianYuTestListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeJianYuTestListResponse
     */
    public function describeJianYuTestListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeJianYuTestListResponse::fromMap($this->doRPCRequest('DescribeJianYuTestList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeJianYuTestListRequest $request
     *
     * @return DescribeJianYuTestListResponse
     */
    public function describeJianYuTestList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJianYuTestListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeJianYuTestPaginationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeJianYuTestPaginationResponse
     */
    public function describeJianYuTestPaginationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeJianYuTestPaginationResponse::fromMap($this->doRPCRequest('DescribeJianYuTestPagination', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeJianYuTestPaginationRequest $request
     *
     * @return DescribeJianYuTestPaginationResponse
     */
    public function describeJianYuTestPagination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJianYuTestPaginationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeL4EventsSelectiveRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeL4EventsSelectiveResponse
     */
    public function describeL4EventsSelectiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeL4EventsSelectiveResponse::fromMap($this->doRPCRequest('DescribeL4EventsSelective', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeL4EventsSelectiveRequest $request
     *
     * @return DescribeL4EventsSelectiveResponse
     */
    public function describeL4EventsSelective($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeL4EventsSelectiveWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLayer4RulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLayer4RulesResponse
     */
    public function describeLayer4RulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLayer4RulesResponse::fromMap($this->doRPCRequest('DescribeLayer4Rules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLayer4RulesRequest $request
     *
     * @return DescribeLayer4RulesResponse
     */
    public function describeLayer4Rules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLayer4RulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMianLiuResSummaryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMianLiuResSummaryResponse
     */
    public function describeMianLiuResSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMianLiuResSummaryResponse::fromMap($this->doRPCRequest('DescribeMianLiuResSummary', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMianLiuResSummaryRequest $request
     *
     * @return DescribeMianLiuResSummaryResponse
     */
    public function describeMianLiuResSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMianLiuResSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNgSourceDiagnosisLogRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeNgSourceDiagnosisLogResponse
     */
    public function describeNgSourceDiagnosisLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNgSourceDiagnosisLogResponse::fromMap($this->doRPCRequest('DescribeNgSourceDiagnosisLog', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNgSourceDiagnosisLogRequest $request
     *
     * @return DescribeNgSourceDiagnosisLogResponse
     */
    public function describeNgSourceDiagnosisLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNgSourceDiagnosisLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRemainQpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeRemainQpsResponse
     */
    public function describeRemainQpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRemainQpsResponse::fromMap($this->doRPCRequest('DescribeRemainQps', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRemainQpsRequest $request
     *
     * @return DescribeRemainQpsResponse
     */
    public function describeRemainQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRemainQpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRequestStatisticByEsnBizIntervalRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeRequestStatisticByEsnBizIntervalResponse
     */
    public function describeRequestStatisticByEsnBizIntervalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRequestStatisticByEsnBizIntervalResponse::fromMap($this->doRPCRequest('DescribeRequestStatisticByEsnBizInterval', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRequestStatisticByEsnBizIntervalRequest $request
     *
     * @return DescribeRequestStatisticByEsnBizIntervalResponse
     */
    public function describeRequestStatisticByEsnBizInterval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestStatisticByEsnBizIntervalWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBiz1DayRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeRequestStatisticCountByEsnBiz1DayResponse
     */
    public function describeRequestStatisticCountByEsnBiz1DayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRequestStatisticCountByEsnBiz1DayResponse::fromMap($this->doRPCRequest('DescribeRequestStatisticCountByEsnBiz1Day', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBiz1DayRequest $request
     *
     * @return DescribeRequestStatisticCountByEsnBiz1DayResponse
     */
    public function describeRequestStatisticCountByEsnBiz1Day($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestStatisticCountByEsnBiz1DayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBiz1DayProvinceRequest $request
     * @param RuntimeOptions                                           $runtime
     *
     * @return DescribeRequestStatisticCountByEsnBiz1DayProvinceResponse
     */
    public function describeRequestStatisticCountByEsnBiz1DayProvinceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRequestStatisticCountByEsnBiz1DayProvinceResponse::fromMap($this->doRPCRequest('DescribeRequestStatisticCountByEsnBiz1DayProvince', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBiz1DayProvinceRequest $request
     *
     * @return DescribeRequestStatisticCountByEsnBiz1DayProvinceResponse
     */
    public function describeRequestStatisticCountByEsnBiz1DayProvince($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestStatisticCountByEsnBiz1DayProvinceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBiz1M30MRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeRequestStatisticCountByEsnBiz1M30MResponse
     */
    public function describeRequestStatisticCountByEsnBiz1M30MWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRequestStatisticCountByEsnBiz1M30MResponse::fromMap($this->doRPCRequest('DescribeRequestStatisticCountByEsnBiz1M30M', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBiz1M30MRequest $request
     *
     * @return DescribeRequestStatisticCountByEsnBiz1M30MResponse
     */
    public function describeRequestStatisticCountByEsnBiz1M30M($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestStatisticCountByEsnBiz1M30MWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBiz30MRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeRequestStatisticCountByEsnBiz30MResponse
     */
    public function describeRequestStatisticCountByEsnBiz30MWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRequestStatisticCountByEsnBiz30MResponse::fromMap($this->doRPCRequest('DescribeRequestStatisticCountByEsnBiz30M', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBiz30MRequest $request
     *
     * @return DescribeRequestStatisticCountByEsnBiz30MResponse
     */
    public function describeRequestStatisticCountByEsnBiz30M($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestStatisticCountByEsnBiz30MWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBizGroup30MRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeRequestStatisticCountByEsnBizGroup30MResponse
     */
    public function describeRequestStatisticCountByEsnBizGroup30MWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRequestStatisticCountByEsnBizGroup30MResponse::fromMap($this->doRPCRequest('DescribeRequestStatisticCountByEsnBizGroup30M', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRequestStatisticCountByEsnBizGroup30MRequest $request
     *
     * @return DescribeRequestStatisticCountByEsnBizGroup30MResponse
     */
    public function describeRequestStatisticCountByEsnBizGroup30M($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestStatisticCountByEsnBizGroup30MWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRequestStatisticLogRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRequestStatisticLogResponse
     */
    public function describeRequestStatisticLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRequestStatisticLogResponse::fromMap($this->doRPCRequest('DescribeRequestStatisticLog', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRequestStatisticLogRequest $request
     *
     * @return DescribeRequestStatisticLogResponse
     */
    public function describeRequestStatisticLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestStatisticLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSDKStatisticLogRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSDKStatisticLogResponse
     */
    public function describeSDKStatisticLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSDKStatisticLogResponse::fromMap($this->doRPCRequest('DescribeSDKStatisticLog', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSDKStatisticLogRequest $request
     *
     * @return DescribeSDKStatisticLogResponse
     */
    public function describeSDKStatisticLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDKStatisticLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSDKStatisticResultByEsnBizISP1M30MRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeSDKStatisticResultByEsnBizISP1M30MResponse
     */
    public function describeSDKStatisticResultByEsnBizISP1M30MWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSDKStatisticResultByEsnBizISP1M30MResponse::fromMap($this->doRPCRequest('DescribeSDKStatisticResultByEsnBizISP1M30M', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSDKStatisticResultByEsnBizISP1M30MRequest $request
     *
     * @return DescribeSDKStatisticResultByEsnBizISP1M30MResponse
     */
    public function describeSDKStatisticResultByEsnBizISP1M30M($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDKStatisticResultByEsnBizISP1M30MWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSDKStatisticResultByEsnBizISPIntervalRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeSDKStatisticResultByEsnBizISPIntervalResponse
     */
    public function describeSDKStatisticResultByEsnBizISPIntervalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSDKStatisticResultByEsnBizISPIntervalResponse::fromMap($this->doRPCRequest('DescribeSDKStatisticResultByEsnBizISPInterval', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSDKStatisticResultByEsnBizISPIntervalRequest $request
     *
     * @return DescribeSDKStatisticResultByEsnBizISPIntervalResponse
     */
    public function describeSDKStatisticResultByEsnBizISPInterval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDKStatisticResultByEsnBizISPIntervalWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSDKStatisticResultByEsnBizProvince1DayRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return DescribeSDKStatisticResultByEsnBizProvince1DayResponse
     */
    public function describeSDKStatisticResultByEsnBizProvince1DayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSDKStatisticResultByEsnBizProvince1DayResponse::fromMap($this->doRPCRequest('DescribeSDKStatisticResultByEsnBizProvince1Day', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSDKStatisticResultByEsnBizProvince1DayRequest $request
     *
     * @return DescribeSDKStatisticResultByEsnBizProvince1DayResponse
     */
    public function describeSDKStatisticResultByEsnBizProvince1Day($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDKStatisticResultByEsnBizProvince1DayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSDKStatisticResultByEsnBizProvince30MRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return DescribeSDKStatisticResultByEsnBizProvince30MResponse
     */
    public function describeSDKStatisticResultByEsnBizProvince30MWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSDKStatisticResultByEsnBizProvince30MResponse::fromMap($this->doRPCRequest('DescribeSDKStatisticResultByEsnBizProvince30M', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSDKStatisticResultByEsnBizProvince30MRequest $request
     *
     * @return DescribeSDKStatisticResultByEsnBizProvince30MResponse
     */
    public function describeSDKStatisticResultByEsnBizProvince30M($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDKStatisticResultByEsnBizProvince30MWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSourceFailureTopIpRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSourceFailureTopIpResponse
     */
    public function describeSourceFailureTopIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSourceFailureTopIpResponse::fromMap($this->doRPCRequest('DescribeSourceFailureTopIp', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSourceFailureTopIpRequest $request
     *
     * @return DescribeSourceFailureTopIpResponse
     */
    public function describeSourceFailureTopIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSourceFailureTopIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSourceFailureTrendGraphRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSourceFailureTrendGraphResponse
     */
    public function describeSourceFailureTrendGraphWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSourceFailureTrendGraphResponse::fromMap($this->doRPCRequest('DescribeSourceFailureTrendGraph', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSourceFailureTrendGraphRequest $request
     *
     * @return DescribeSourceFailureTrendGraphResponse
     */
    public function describeSourceFailureTrendGraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSourceFailureTrendGraphWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUploadPreSignRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUploadPreSignResponse
     */
    public function describeUploadPreSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUploadPreSignResponse::fromMap($this->doRPCRequest('DescribeUploadPreSign', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUploadPreSignRequest $request
     *
     * @return DescribeUploadPreSignResponse
     */
    public function describeUploadPreSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUploadPreSignWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserFlowInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUserFlowInfoResponse
     */
    public function describeUserFlowInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserFlowInfoResponse::fromMap($this->doRPCRequest('DescribeUserFlowInfo', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserFlowInfoRequest $request
     *
     * @return DescribeUserFlowInfoResponse
     */
    public function describeUserFlowInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserFlowInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserFlowReportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUserFlowReportResponse
     */
    public function describeUserFlowReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserFlowReportResponse::fromMap($this->doRPCRequest('DescribeUserFlowReport', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserFlowReportRequest $request
     *
     * @return DescribeUserFlowReportResponse
     */
    public function describeUserFlowReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserFlowReportWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserTotalFlowReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeUserTotalFlowReportResponse
     */
    public function describeUserTotalFlowReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserTotalFlowReportResponse::fromMap($this->doRPCRequest('DescribeUserTotalFlowReport', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserTotalFlowReportRequest $request
     *
     * @return DescribeUserTotalFlowReportResponse
     */
    public function describeUserTotalFlowReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserTotalFlowReportWithOptions($request, $runtime);
    }

    /**
     * @param DownloadAppKeyFileRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DownloadAppKeyFileResponse
     */
    public function downloadAppKeyFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadAppKeyFileResponse::fromMap($this->doRPCRequest('DownloadAppKeyFile', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadAppKeyFileRequest $request
     *
     * @return DownloadAppKeyFileResponse
     */
    public function downloadAppKeyFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadAppKeyFileWithOptions($request, $runtime);
    }

    /**
     * @param DownloadCcRouteRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DownloadCcRouteRulesResponse
     */
    public function downloadCcRouteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadCcRouteRulesResponse::fromMap($this->doRPCRequest('DownloadCcRouteRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadCcRouteRulesRequest $request
     *
     * @return DownloadCcRouteRulesResponse
     */
    public function downloadCcRouteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadCcRouteRulesWithOptions($request, $runtime);
    }

    /**
     * @param DownloadFlexAccRulesFileRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DownloadFlexAccRulesFileResponse
     */
    public function downloadFlexAccRulesFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadFlexAccRulesFileResponse::fromMap($this->doRPCRequest('DownloadFlexAccRulesFile', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadFlexAccRulesFileRequest $request
     *
     * @return DownloadFlexAccRulesFileResponse
     */
    public function downloadFlexAccRulesFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadFlexAccRulesFileWithOptions($request, $runtime);
    }

    /**
     * @param DownloadLayer4RulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DownloadLayer4RulesResponse
     */
    public function downloadLayer4RulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadLayer4RulesResponse::fromMap($this->doRPCRequest('DownloadLayer4Rules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadLayer4RulesRequest $request
     *
     * @return DownloadLayer4RulesResponse
     */
    public function downloadLayer4Rules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadLayer4RulesWithOptions($request, $runtime);
    }

    /**
     * @param DownloadSdkFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DownloadSdkFileResponse
     */
    public function downloadSdkFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadSdkFileResponse::fromMap($this->doRPCRequest('DownloadSdkFile', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadSdkFileRequest $request
     *
     * @return DownloadSdkFileResponse
     */
    public function downloadSdkFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadSdkFileWithOptions($request, $runtime);
    }

    /**
     * @param DownloadUserTotalFlowReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DownloadUserTotalFlowReportResponse
     */
    public function downloadUserTotalFlowReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DownloadUserTotalFlowReportResponse::fromMap($this->doRPCRequest('DownloadUserTotalFlowReport', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DownloadUserTotalFlowReportRequest $request
     *
     * @return DownloadUserTotalFlowReportResponse
     */
    public function downloadUserTotalFlowReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadUserTotalFlowReportWithOptions($request, $runtime);
    }

    /**
     * @param FlushLayer4RulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FlushLayer4RulesResponse
     */
    public function flushLayer4RulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FlushLayer4RulesResponse::fromMap($this->doRPCRequest('FlushLayer4Rules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FlushLayer4RulesRequest $request
     *
     * @return FlushLayer4RulesResponse
     */
    public function flushLayer4Rules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->flushLayer4RulesWithOptions($request, $runtime);
    }

    /**
     * @param ReallocNgResourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReallocNgResourceResponse
     */
    public function reallocNgResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReallocNgResourceResponse::fromMap($this->doRPCRequest('ReallocNgResource', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReallocNgResourceRequest $request
     *
     * @return ReallocNgResourceResponse
     */
    public function reallocNgResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reallocNgResourceWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceCcRouteRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReplaceCcRouteRulesResponse
     */
    public function replaceCcRouteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplaceCcRouteRulesResponse::fromMap($this->doRPCRequest('ReplaceCcRouteRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReplaceCcRouteRulesRequest $request
     *
     * @return ReplaceCcRouteRulesResponse
     */
    public function replaceCcRouteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceCcRouteRulesWithOptions($request, $runtime);
    }

    /**
     * @param SearchFlexFwdRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchFlexFwdRulesResponse
     */
    public function searchFlexFwdRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchFlexFwdRulesResponse::fromMap($this->doRPCRequest('SearchFlexFwdRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchFlexFwdRulesRequest $request
     *
     * @return SearchFlexFwdRulesResponse
     */
    public function searchFlexFwdRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchFlexFwdRulesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppResponse::fromMap($this->doRPCRequest('UpdateApp', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAppRequest $request
     *
     * @return UpdateAppResponse
     */
    public function updateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcBlackListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCcBlackListResponse
     */
    public function updateCcBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcBlackListResponse::fromMap($this->doRPCRequest('UpdateCcBlackList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcBlackListRequest $request
     *
     * @return UpdateCcBlackListResponse
     */
    public function updateCcBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcBlackListWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcIDCBlockSwitchRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCcIDCBlockSwitchResponse
     */
    public function updateCcIDCBlockSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcIDCBlockSwitchResponse::fromMap($this->doRPCRequest('UpdateCcIDCBlockSwitch', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcIDCBlockSwitchRequest $request
     *
     * @return UpdateCcIDCBlockSwitchResponse
     */
    public function updateCcIDCBlockSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcIDCBlockSwitchWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcRouteRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateCcRouteRulesResponse
     */
    public function updateCcRouteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcRouteRulesResponse::fromMap($this->doRPCRequest('UpdateCcRouteRules', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcRouteRulesRequest $request
     *
     * @return UpdateCcRouteRulesResponse
     */
    public function updateCcRouteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcRouteRulesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcRouteSwitchRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateCcRouteSwitchResponse
     */
    public function updateCcRouteSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcRouteSwitchResponse::fromMap($this->doRPCRequest('UpdateCcRouteSwitch', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcRouteSwitchRequest $request
     *
     * @return UpdateCcRouteSwitchResponse
     */
    public function updateCcRouteSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcRouteSwitchWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcTunnelGrayAndOnlyAllowRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateCcTunnelGrayAndOnlyAllowResponse
     */
    public function updateCcTunnelGrayAndOnlyAllowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcTunnelGrayAndOnlyAllowResponse::fromMap($this->doRPCRequest('UpdateCcTunnelGrayAndOnlyAllow', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcTunnelGrayAndOnlyAllowRequest $request
     *
     * @return UpdateCcTunnelGrayAndOnlyAllowResponse
     */
    public function updateCcTunnelGrayAndOnlyAllow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcTunnelGrayAndOnlyAllowWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcTunnelStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCcTunnelStatusResponse
     */
    public function updateCcTunnelStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcTunnelStatusResponse::fromMap($this->doRPCRequest('UpdateCcTunnelStatus', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcTunnelStatusRequest $request
     *
     * @return UpdateCcTunnelStatusResponse
     */
    public function updateCcTunnelStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcTunnelStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcUseRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateCcUseResponse
     */
    public function updateCcUseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcUseResponse::fromMap($this->doRPCRequest('UpdateCcUse', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcUseRequest $request
     *
     * @return UpdateCcUseResponse
     */
    public function updateCcUse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcUseWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcWhiteListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCcWhiteListResponse
     */
    public function updateCcWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcWhiteListResponse::fromMap($this->doRPCRequest('UpdateCcWhiteList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcWhiteListRequest $request
     *
     * @return UpdateCcWhiteListResponse
     */
    public function updateCcWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcZoneBlockConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateCcZoneBlockConfigResponse
     */
    public function updateCcZoneBlockConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcZoneBlockConfigResponse::fromMap($this->doRPCRequest('UpdateCcZoneBlockConfig', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcZoneBlockConfigRequest $request
     *
     * @return UpdateCcZoneBlockConfigResponse
     */
    public function updateCcZoneBlockConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcZoneBlockConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCcZoneBlockStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateCcZoneBlockStatusResponse
     */
    public function updateCcZoneBlockStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCcZoneBlockStatusResponse::fromMap($this->doRPCRequest('UpdateCcZoneBlockStatus', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCcZoneBlockStatusRequest $request
     *
     * @return UpdateCcZoneBlockStatusResponse
     */
    public function updateCcZoneBlockStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCcZoneBlockStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexAccFwdRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateFlexAccFwdRuleResponse
     */
    public function updateFlexAccFwdRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexAccFwdRuleResponse::fromMap($this->doRPCRequest('UpdateFlexAccFwdRule', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexAccFwdRuleRequest $request
     *
     * @return UpdateFlexAccFwdRuleResponse
     */
    public function updateFlexAccFwdRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexAccFwdRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexAccFwdRuleV2Request $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateFlexAccFwdRuleV2Response
     */
    public function updateFlexAccFwdRuleV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexAccFwdRuleV2Response::fromMap($this->doRPCRequest('UpdateFlexAccFwdRuleV2', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexAccFwdRuleV2Request $request
     *
     * @return UpdateFlexAccFwdRuleV2Response
     */
    public function updateFlexAccFwdRuleV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexAccFwdRuleV2WithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexAccStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateFlexAccStatusResponse
     */
    public function updateFlexAccStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexAccStatusResponse::fromMap($this->doRPCRequest('UpdateFlexAccStatus', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexAccStatusRequest $request
     *
     * @return UpdateFlexAccStatusResponse
     */
    public function updateFlexAccStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexAccStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexAccTcpPortsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateFlexAccTcpPortsResponse
     */
    public function updateFlexAccTcpPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexAccTcpPortsResponse::fromMap($this->doRPCRequest('UpdateFlexAccTcpPorts', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexAccTcpPortsRequest $request
     *
     * @return UpdateFlexAccTcpPortsResponse
     */
    public function updateFlexAccTcpPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexAccTcpPortsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexAccUdpPortsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateFlexAccUdpPortsResponse
     */
    public function updateFlexAccUdpPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexAccUdpPortsResponse::fromMap($this->doRPCRequest('UpdateFlexAccUdpPorts', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexAccUdpPortsRequest $request
     *
     * @return UpdateFlexAccUdpPortsResponse
     */
    public function updateFlexAccUdpPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexAccUdpPortsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexBackupGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateFlexBackupGroupsResponse
     */
    public function updateFlexBackupGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexBackupGroupsResponse::fromMap($this->doRPCRequest('UpdateFlexBackupGroups', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexBackupGroupsRequest $request
     *
     * @return UpdateFlexBackupGroupsResponse
     */
    public function updateFlexBackupGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexBackupGroupsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexFwdRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateFlexFwdRuleResponse
     */
    public function updateFlexFwdRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexFwdRuleResponse::fromMap($this->doRPCRequest('UpdateFlexFwdRule', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexFwdRuleRequest $request
     *
     * @return UpdateFlexFwdRuleResponse
     */
    public function updateFlexFwdRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexFwdRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexInnerPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateFlexInnerPolicyResponse
     */
    public function updateFlexInnerPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexInnerPolicyResponse::fromMap($this->doRPCRequest('UpdateFlexInnerPolicy', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexInnerPolicyRequest $request
     *
     * @return UpdateFlexInnerPolicyResponse
     */
    public function updateFlexInnerPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexInnerPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexLinkTypeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateFlexLinkTypeResponse
     */
    public function updateFlexLinkTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexLinkTypeResponse::fromMap($this->doRPCRequest('UpdateFlexLinkType', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexLinkTypeRequest $request
     *
     * @return UpdateFlexLinkTypeResponse
     */
    public function updateFlexLinkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexLinkTypeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexPortsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateFlexPortsResponse
     */
    public function updateFlexPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexPortsResponse::fromMap($this->doRPCRequest('UpdateFlexPorts', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexPortsRequest $request
     *
     * @return UpdateFlexPortsResponse
     */
    public function updateFlexPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexPortsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlexStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateFlexStatusResponse
     */
    public function updateFlexStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlexStatusResponse::fromMap($this->doRPCRequest('UpdateFlexStatus', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlexStatusRequest $request
     *
     * @return UpdateFlexStatusResponse
     */
    public function updateFlexStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlexStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGroupResponse::fromMap($this->doRPCRequest('UpdateGroup', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGroupRequest $request
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupDnsStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateGroupDnsStatusResponse
     */
    public function updateGroupDnsStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGroupDnsStatusResponse::fromMap($this->doRPCRequest('UpdateGroupDnsStatus', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGroupDnsStatusRequest $request
     *
     * @return UpdateGroupDnsStatusResponse
     */
    public function updateGroupDnsStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupDnsStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupNodesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateGroupNodesResponse
     */
    public function updateGroupNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGroupNodesResponse::fromMap($this->doRPCRequest('UpdateGroupNodes', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGroupNodesRequest $request
     *
     * @return UpdateGroupNodesResponse
     */
    public function updateGroupNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupNodesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGroupStatusResponse
     */
    public function updateGroupStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGroupStatusResponse::fromMap($this->doRPCRequest('UpdateGroupStatus', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGroupStatusRequest $request
     *
     * @return UpdateGroupStatusResponse
     */
    public function updateGroupStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLayer4RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateLayer4RuleResponse
     */
    public function updateLayer4RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLayer4RuleResponse::fromMap($this->doRPCRequest('UpdateLayer4Rule', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateLayer4RuleRequest $request
     *
     * @return UpdateLayer4RuleResponse
     */
    public function updateLayer4Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLayer4RuleWithOptions($request, $runtime);
    }

    /**
     * @param UploadCcRouteFileForParseRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UploadCcRouteFileForParseResponse
     */
    public function uploadCcRouteFileForParseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadCcRouteFileForParseResponse::fromMap($this->doRPCRequest('UploadCcRouteFileForParse', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadCcRouteFileForParseRequest $request
     *
     * @return UploadCcRouteFileForParseResponse
     */
    public function uploadCcRouteFileForParse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCcRouteFileForParseWithOptions($request, $runtime);
    }

    /**
     * @param UploadCcWhiteBlackListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UploadCcWhiteBlackListResponse
     */
    public function uploadCcWhiteBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadCcWhiteBlackListResponse::fromMap($this->doRPCRequest('UploadCcWhiteBlackList', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadCcWhiteBlackListRequest $request
     *
     * @return UploadCcWhiteBlackListResponse
     */
    public function uploadCcWhiteBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCcWhiteBlackListWithOptions($request, $runtime);
    }

    /**
     * @param UploadFlexAccRulesFileForParseRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UploadFlexAccRulesFileForParseResponse
     */
    public function uploadFlexAccRulesFileForParseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadFlexAccRulesFileForParseResponse::fromMap($this->doRPCRequest('UploadFlexAccRulesFileForParse', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadFlexAccRulesFileForParseRequest $request
     *
     * @return UploadFlexAccRulesFileForParseResponse
     */
    public function uploadFlexAccRulesFileForParse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadFlexAccRulesFileForParseWithOptions($request, $runtime);
    }

    /**
     * @param UploadFlexRulesFileForParseRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UploadFlexRulesFileForParseResponse
     */
    public function uploadFlexRulesFileForParseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadFlexRulesFileForParseResponse::fromMap($this->doRPCRequest('UploadFlexRulesFileForParse', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadFlexRulesFileForParseRequest $request
     *
     * @return UploadFlexRulesFileForParseResponse
     */
    public function uploadFlexRulesFileForParse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadFlexRulesFileForParseWithOptions($request, $runtime);
    }

    /**
     * @param UploadL4RulesFileForParseRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UploadL4RulesFileForParseResponse
     */
    public function uploadL4RulesFileForParseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadL4RulesFileForParseResponse::fromMap($this->doRPCRequest('UploadL4RulesFileForParse', '2018-03-05', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadL4RulesFileForParseRequest $request
     *
     * @return UploadL4RulesFileForParseResponse
     */
    public function uploadL4RulesFileForParse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadL4RulesFileForParseWithOptions($request, $runtime);
    }
}
