<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\AddLogMaskConfigRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\AddLogMaskConfigResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\AssociateDbToRuleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\AssociateDbToRuleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\AssociateRuleToDbRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\AssociateRuleToDbResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ChangeAgentStatusRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ChangeAgentStatusResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ChangeLogMaskConfigStateRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ChangeLogMaskConfigStateResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ChangeRulePriorityRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ChangeRulePriorityResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ChangeRuleStatusRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ChangeRuleStatusResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CheckMailRegisteredRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CheckMailRegisteredResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ClearAgentRecordsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ClearAgentRecordsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ConfigInstanceNetworkRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ConfigInstanceNetworkResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateGradeProtectionReportRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateGradeProtectionReportResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateIntegratedReportRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateIntegratedReportResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateLogAlarmTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateLogAlarmTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreatePCIReportRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreatePCIReportResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateReportPushTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateReportPushTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateRuleGroupRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateRuleGroupResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateSOXReportRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateSOXReportResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateSqlRuleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateSqlRuleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateSystemAlarmTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\CreateSystemAlarmTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteAlarmTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteAlarmTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteReportPushTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteReportPushTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteRuleGroupRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteRuleGroupResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeregisterTemplatesFromRuleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DeregisterTemplatesFromRuleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeLoginTicketRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeLoginTicketResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeSyncInfoRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeSyncInfoResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DisableLogMaskConfigsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DisableLogMaskConfigsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DissociateRulesFromDbRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DissociateRulesFromDbResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DissociateTemplatesFromRuleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DissociateTemplatesFromRuleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\EditLogMaskConfigRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\EditLogMaskConfigResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\EnableLogMaskConfigsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\EnableLogMaskConfigsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentFileUrlRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentFileUrlResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAppointOperationRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAppointOperationResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountDistributionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountDistributionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetBaseTemplateListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetBaseTemplateListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDBAuditCountListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDBAuditCountListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetGroupDetailRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetGroupDetailResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLicenseRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLicenseResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogDetailRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogDetailResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogMaskConfigsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogMaskConfigsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogQueryConditionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogQueryConditionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogStatisticsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogStatisticsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTopDistributionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTopDistributionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTopStatisticsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTopStatisticsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTypeDistributionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTypeDistributionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetNewSqlTemplateListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetNewSqlTemplateListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetReportFileUrlRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetReportFileUrlResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRiskLevelDistributionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRiskLevelDistributionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRiskStatisticsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRiskStatisticsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRuleDetailRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRuleDetailResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRuleGroupNameRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRuleGroupNameResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionDetailRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionDetailResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionDistributionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionDistributionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionQueryConditionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionQueryConditionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSqlTemplateListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSqlTemplateListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetTopSqlTemplateListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetTopSqlTemplateListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GradeProtectionReportRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GradeProtectionReportResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ImportDataSourceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ImportDataSourceResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\IntegratedReportRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\IntegratedReportResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListAssociatedRulesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListAssociatedRulesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListLogAlarmTasksRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListLogAlarmTasksResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListReportPushTasksRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListReportPushTasksResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListRuleGroupsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListRuleGroupsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListRulesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListRulesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSqlTypeKeysForRuleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSqlTypeKeysForRuleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSqlTypesForRuleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSqlTypesForRuleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSupportDbTypesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSupportDbTypesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSystemAlarmsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSystemAlarmsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSystemAlarmTasksRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSystemAlarmTasksResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListTemplatesForSqlRuleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListTemplatesForSqlRuleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListUsedSqlTypesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListUsedSqlTypesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyBaseTemplateStateRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyBaseTemplateStateResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyCustomNameRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyCustomNameResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyDataSourceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyDataSourceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyDataSourceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyDataSourceResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyLogAlarmTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyLogAlarmTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyPlanRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyPlanResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyReportPushTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyReportPushTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyRuleGroupRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyRuleGroupResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifySystemAlarmTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifySystemAlarmTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\PciReportRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\PciReportResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\PutLoginCountRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\PutLoginCountResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ReadMarkSystemAlarmsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ReadMarkSystemAlarmsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\RefundInstanceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\RefundInstanceResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\RegisterNoticeMailRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\RegisterNoticeMailResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\RemoveLogMaskConfigRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\RemoveLogMaskConfigResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\SendVerifyCodeMailRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\SendVerifyCodeMailResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\SoxReportRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\SoxReportResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\StartAlarmTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\StartAlarmTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\StopAlarmTaskRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\StopAlarmTaskResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\UpgradeInstanceVersionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\UpgradeInstanceVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Yundundbaudit extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yundun-dbaudit', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddLogMaskConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddLogMaskConfigResponse
     */
    public function addLogMaskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddLogMaskConfigResponse::fromMap($this->doRPCRequest('AddLogMaskConfig', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddLogMaskConfigRequest $request
     *
     * @return AddLogMaskConfigResponse
     */
    public function addLogMaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLogMaskConfigWithOptions($request, $runtime);
    }

    /**
     * @param AssociateDbToRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AssociateDbToRuleResponse
     */
    public function associateDbToRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateDbToRuleResponse::fromMap($this->doRPCRequest('AssociateDbToRule', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateDbToRuleRequest $request
     *
     * @return AssociateDbToRuleResponse
     */
    public function associateDbToRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateDbToRuleWithOptions($request, $runtime);
    }

    /**
     * @param AssociateRuleToDbRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AssociateRuleToDbResponse
     */
    public function associateRuleToDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateRuleToDbResponse::fromMap($this->doRPCRequest('AssociateRuleToDb', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateRuleToDbRequest $request
     *
     * @return AssociateRuleToDbResponse
     */
    public function associateRuleToDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateRuleToDbWithOptions($request, $runtime);
    }

    /**
     * @param ChangeAgentStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ChangeAgentStatusResponse
     */
    public function changeAgentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeAgentStatusResponse::fromMap($this->doRPCRequest('ChangeAgentStatus', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeAgentStatusRequest $request
     *
     * @return ChangeAgentStatusResponse
     */
    public function changeAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @param ChangeLogMaskConfigStateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChangeLogMaskConfigStateResponse
     */
    public function changeLogMaskConfigStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeLogMaskConfigStateResponse::fromMap($this->doRPCRequest('ChangeLogMaskConfigState', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeLogMaskConfigStateRequest $request
     *
     * @return ChangeLogMaskConfigStateResponse
     */
    public function changeLogMaskConfigState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeLogMaskConfigStateWithOptions($request, $runtime);
    }

    /**
     * @param ChangeRulePriorityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ChangeRulePriorityResponse
     */
    public function changeRulePriorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeRulePriorityResponse::fromMap($this->doRPCRequest('ChangeRulePriority', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeRulePriorityRequest $request
     *
     * @return ChangeRulePriorityResponse
     */
    public function changeRulePriority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeRulePriorityWithOptions($request, $runtime);
    }

    /**
     * @param ChangeRuleStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ChangeRuleStatusResponse
     */
    public function changeRuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeRuleStatusResponse::fromMap($this->doRPCRequest('ChangeRuleStatus', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeRuleStatusRequest $request
     *
     * @return ChangeRuleStatusResponse
     */
    public function changeRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeRuleStatusWithOptions($request, $runtime);
    }

    /**
     * @param CheckMailRegisteredRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CheckMailRegisteredResponse
     */
    public function checkMailRegisteredWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckMailRegisteredResponse::fromMap($this->doRPCRequest('CheckMailRegistered', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckMailRegisteredRequest $request
     *
     * @return CheckMailRegisteredResponse
     */
    public function checkMailRegistered($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkMailRegisteredWithOptions($request, $runtime);
    }

    /**
     * @param ClearAgentRecordsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ClearAgentRecordsResponse
     */
    public function clearAgentRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearAgentRecordsResponse::fromMap($this->doRPCRequest('ClearAgentRecords', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClearAgentRecordsRequest $request
     *
     * @return ClearAgentRecordsResponse
     */
    public function clearAgentRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearAgentRecordsWithOptions($request, $runtime);
    }

    /**
     * @param ConfigInstanceNetworkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfigInstanceNetworkResponse
     */
    public function configInstanceNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigInstanceNetworkResponse::fromMap($this->doRPCRequest('ConfigInstanceNetwork', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigInstanceNetworkRequest $request
     *
     * @return ConfigInstanceNetworkResponse
     */
    public function configInstanceNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceNetworkWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDataSourceResponse::fromMap($this->doRPCRequest('CreateDataSource', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDataSourceRequest $request
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateGradeProtectionReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateGradeProtectionReportResponse
     */
    public function createGradeProtectionReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGradeProtectionReportResponse::fromMap($this->doRPCRequest('CreateGradeProtectionReport', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGradeProtectionReportRequest $request
     *
     * @return CreateGradeProtectionReportResponse
     */
    public function createGradeProtectionReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGradeProtectionReportWithOptions($request, $runtime);
    }

    /**
     * @param CreateIntegratedReportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIntegratedReportResponse
     */
    public function createIntegratedReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIntegratedReportResponse::fromMap($this->doRPCRequest('CreateIntegratedReport', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateIntegratedReportRequest $request
     *
     * @return CreateIntegratedReportResponse
     */
    public function createIntegratedReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntegratedReportWithOptions($request, $runtime);
    }

    /**
     * @param CreateLogAlarmTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLogAlarmTaskResponse
     */
    public function createLogAlarmTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLogAlarmTaskResponse::fromMap($this->doRPCRequest('CreateLogAlarmTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLogAlarmTaskRequest $request
     *
     * @return CreateLogAlarmTaskResponse
     */
    public function createLogAlarmTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogAlarmTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreatePCIReportRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePCIReportResponse
     */
    public function createPCIReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePCIReportResponse::fromMap($this->doRPCRequest('CreatePCIReport', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePCIReportRequest $request
     *
     * @return CreatePCIReportResponse
     */
    public function createPCIReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPCIReportWithOptions($request, $runtime);
    }

    /**
     * @param CreateReportPushTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateReportPushTaskResponse
     */
    public function createReportPushTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateReportPushTaskResponse::fromMap($this->doRPCRequest('CreateReportPushTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateReportPushTaskRequest $request
     *
     * @return CreateReportPushTaskResponse
     */
    public function createReportPushTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReportPushTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRuleResponse::fromMap($this->doRPCRequest('CreateRule', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRuleGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateRuleGroupResponse
     */
    public function createRuleGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRuleGroupResponse::fromMap($this->doRPCRequest('CreateRuleGroup', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRuleGroupRequest $request
     *
     * @return CreateRuleGroupResponse
     */
    public function createRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateSOXReportRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSOXReportResponse
     */
    public function createSOXReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSOXReportResponse::fromMap($this->doRPCRequest('CreateSOXReport', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSOXReportRequest $request
     *
     * @return CreateSOXReportResponse
     */
    public function createSOXReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSOXReportWithOptions($request, $runtime);
    }

    /**
     * @param CreateSqlRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSqlRuleResponse
     */
    public function createSqlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSqlRuleResponse::fromMap($this->doRPCRequest('CreateSqlRule', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSqlRuleRequest $request
     *
     * @return CreateSqlRuleResponse
     */
    public function createSqlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSqlRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSystemAlarmTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSystemAlarmTaskResponse
     */
    public function createSystemAlarmTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSystemAlarmTaskResponse::fromMap($this->doRPCRequest('CreateSystemAlarmTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSystemAlarmTaskRequest $request
     *
     * @return CreateSystemAlarmTaskResponse
     */
    public function createSystemAlarmTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSystemAlarmTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlarmTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAlarmTaskResponse
     */
    public function deleteAlarmTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAlarmTaskResponse::fromMap($this->doRPCRequest('DeleteAlarmTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAlarmTaskRequest $request
     *
     * @return DeleteAlarmTaskResponse
     */
    public function deleteAlarmTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlarmTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDataSourceResponse::fromMap($this->doRPCRequest('DeleteDataSource', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDataSourceRequest $request
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteReportPushTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteReportPushTaskResponse
     */
    public function deleteReportPushTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteReportPushTaskResponse::fromMap($this->doRPCRequest('DeleteReportPushTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteReportPushTaskRequest $request
     *
     * @return DeleteReportPushTaskResponse
     */
    public function deleteReportPushTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReportPushTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRuleResponse::fromMap($this->doRPCRequest('DeleteRule', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRuleGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteRuleGroupResponse
     */
    public function deleteRuleGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRuleGroupResponse::fromMap($this->doRPCRequest('DeleteRuleGroup', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRuleGroupRequest $request
     *
     * @return DeleteRuleGroupResponse
     */
    public function deleteRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeregisterTemplatesFromRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeregisterTemplatesFromRuleResponse
     */
    public function deregisterTemplatesFromRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeregisterTemplatesFromRuleResponse::fromMap($this->doRPCRequest('DeregisterTemplatesFromRule', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeregisterTemplatesFromRuleRequest $request
     *
     * @return DeregisterTemplatesFromRuleResponse
     */
    public function deregisterTemplatesFromRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterTemplatesFromRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAttribute', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLoginTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLoginTicketResponse
     */
    public function describeLoginTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoginTicketResponse::fromMap($this->doRPCRequest('DescribeLoginTicket', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLoginTicketRequest $request
     *
     * @return DescribeLoginTicketResponse
     */
    public function describeLoginTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoginTicketWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSyncInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSyncInfoResponse
     */
    public function describeSyncInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSyncInfoResponse::fromMap($this->doRPCRequest('DescribeSyncInfo', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSyncInfoRequest $request
     *
     * @return DescribeSyncInfoResponse
     */
    public function describeSyncInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncInfoWithOptions($request, $runtime);
    }

    /**
     * @param DisableLogMaskConfigsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DisableLogMaskConfigsResponse
     */
    public function disableLogMaskConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableLogMaskConfigsResponse::fromMap($this->doRPCRequest('DisableLogMaskConfigs', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableLogMaskConfigsRequest $request
     *
     * @return DisableLogMaskConfigsResponse
     */
    public function disableLogMaskConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLogMaskConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DissociateRulesFromDbRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DissociateRulesFromDbResponse
     */
    public function dissociateRulesFromDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateRulesFromDbResponse::fromMap($this->doRPCRequest('DissociateRulesFromDb', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DissociateRulesFromDbRequest $request
     *
     * @return DissociateRulesFromDbResponse
     */
    public function dissociateRulesFromDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateRulesFromDbWithOptions($request, $runtime);
    }

    /**
     * @param DissociateTemplatesFromRuleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DissociateTemplatesFromRuleResponse
     */
    public function dissociateTemplatesFromRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateTemplatesFromRuleResponse::fromMap($this->doRPCRequest('DissociateTemplatesFromRule', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DissociateTemplatesFromRuleRequest $request
     *
     * @return DissociateTemplatesFromRuleResponse
     */
    public function dissociateTemplatesFromRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateTemplatesFromRuleWithOptions($request, $runtime);
    }

    /**
     * @param EditLogMaskConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EditLogMaskConfigResponse
     */
    public function editLogMaskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditLogMaskConfigResponse::fromMap($this->doRPCRequest('EditLogMaskConfig', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditLogMaskConfigRequest $request
     *
     * @return EditLogMaskConfigResponse
     */
    public function editLogMaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editLogMaskConfigWithOptions($request, $runtime);
    }

    /**
     * @param EnableLogMaskConfigsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableLogMaskConfigsResponse
     */
    public function enableLogMaskConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableLogMaskConfigsResponse::fromMap($this->doRPCRequest('EnableLogMaskConfigs', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableLogMaskConfigsRequest $request
     *
     * @return EnableLogMaskConfigsResponse
     */
    public function enableLogMaskConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLogMaskConfigsWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentFileUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAgentFileUrlResponse
     */
    public function getAgentFileUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAgentFileUrlResponse::fromMap($this->doRPCRequest('GetAgentFileUrl', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentFileUrlRequest $request
     *
     * @return GetAgentFileUrlResponse
     */
    public function getAgentFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentFileUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAgentListResponse
     */
    public function getAgentListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAgentListResponse::fromMap($this->doRPCRequest('GetAgentList', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentListRequest $request
     *
     * @return GetAgentListResponse
     */
    public function getAgentList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentListWithOptions($request, $runtime);
    }

    /**
     * @param GetAppointOperationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAppointOperationResponse
     */
    public function getAppointOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAppointOperationResponse::fromMap($this->doRPCRequest('GetAppointOperation', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAppointOperationRequest $request
     *
     * @return GetAppointOperationResponse
     */
    public function getAppointOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppointOperationWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditCountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAuditCountResponse
     */
    public function getAuditCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuditCountResponse::fromMap($this->doRPCRequest('GetAuditCount', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAuditCountRequest $request
     *
     * @return GetAuditCountResponse
     */
    public function getAuditCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditCountWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditCountDistributionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAuditCountDistributionResponse
     */
    public function getAuditCountDistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuditCountDistributionResponse::fromMap($this->doRPCRequest('GetAuditCountDistribution', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAuditCountDistributionRequest $request
     *
     * @return GetAuditCountDistributionResponse
     */
    public function getAuditCountDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditCountDistributionWithOptions($request, $runtime);
    }

    /**
     * @param GetBaseTemplateListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetBaseTemplateListResponse
     */
    public function getBaseTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBaseTemplateListResponse::fromMap($this->doRPCRequest('GetBaseTemplateList', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetBaseTemplateListRequest $request
     *
     * @return GetBaseTemplateListResponse
     */
    public function getBaseTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBaseTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param GetDasUsageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetDasUsageResponse
     */
    public function getDasUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDasUsageResponse::fromMap($this->doRPCRequest('GetDasUsage', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDasUsageRequest $request
     *
     * @return GetDasUsageResponse
     */
    public function getDasUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDasUsageWithOptions($request, $runtime);
    }

    /**
     * @param GetDBAuditCountListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDBAuditCountListResponse
     */
    public function getDBAuditCountListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDBAuditCountListResponse::fromMap($this->doRPCRequest('GetDBAuditCountList', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDBAuditCountListRequest $request
     *
     * @return GetDBAuditCountListResponse
     */
    public function getDBAuditCountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBAuditCountListWithOptions($request, $runtime);
    }

    /**
     * @param GetGroupDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetGroupDetailResponse
     */
    public function getGroupDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGroupDetailResponse::fromMap($this->doRPCRequest('GetGroupDetail', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGroupDetailRequest $request
     *
     * @return GetGroupDetailResponse
     */
    public function getGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetLicenseRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetLicenseResponse
     */
    public function getLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLicenseResponse::fromMap($this->doRPCRequest('GetLicense', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLicenseRequest $request
     *
     * @return GetLicenseResponse
     */
    public function getLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLicenseWithOptions($request, $runtime);
    }

    /**
     * @param GetLogDetailRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetLogDetailResponse
     */
    public function getLogDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLogDetailResponse::fromMap($this->doRPCRequest('GetLogDetail', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogDetailRequest $request
     *
     * @return GetLogDetailResponse
     */
    public function getLogDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetLogListRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetLogListResponse
     */
    public function getLogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLogListResponse::fromMap($this->doRPCRequest('GetLogList', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogListRequest $request
     *
     * @return GetLogListResponse
     */
    public function getLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogListWithOptions($request, $runtime);
    }

    /**
     * @param GetLogMaskConfigsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetLogMaskConfigsResponse
     */
    public function getLogMaskConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLogMaskConfigsResponse::fromMap($this->doRPCRequest('GetLogMaskConfigs', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogMaskConfigsRequest $request
     *
     * @return GetLogMaskConfigsResponse
     */
    public function getLogMaskConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogMaskConfigsWithOptions($request, $runtime);
    }

    /**
     * @param GetLogQueryConditionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetLogQueryConditionResponse
     */
    public function getLogQueryConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLogQueryConditionResponse::fromMap($this->doRPCRequest('GetLogQueryCondition', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogQueryConditionRequest $request
     *
     * @return GetLogQueryConditionResponse
     */
    public function getLogQueryCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogQueryConditionWithOptions($request, $runtime);
    }

    /**
     * @param GetLogStatisticsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLogStatisticsResponse
     */
    public function getLogStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLogStatisticsResponse::fromMap($this->doRPCRequest('GetLogStatistics', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogStatisticsRequest $request
     *
     * @return GetLogStatisticsResponse
     */
    public function getLogStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetLogTopDistributionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetLogTopDistributionResponse
     */
    public function getLogTopDistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLogTopDistributionResponse::fromMap($this->doRPCRequest('GetLogTopDistribution', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogTopDistributionRequest $request
     *
     * @return GetLogTopDistributionResponse
     */
    public function getLogTopDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogTopDistributionWithOptions($request, $runtime);
    }

    /**
     * @param GetLogTopStatisticsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetLogTopStatisticsResponse
     */
    public function getLogTopStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLogTopStatisticsResponse::fromMap($this->doRPCRequest('GetLogTopStatistics', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogTopStatisticsRequest $request
     *
     * @return GetLogTopStatisticsResponse
     */
    public function getLogTopStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogTopStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetLogTypeDistributionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLogTypeDistributionResponse
     */
    public function getLogTypeDistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLogTypeDistributionResponse::fromMap($this->doRPCRequest('GetLogTypeDistribution', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLogTypeDistributionRequest $request
     *
     * @return GetLogTypeDistributionResponse
     */
    public function getLogTypeDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogTypeDistributionWithOptions($request, $runtime);
    }

    /**
     * @param GetNewSqlTemplateListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetNewSqlTemplateListResponse
     */
    public function getNewSqlTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNewSqlTemplateListResponse::fromMap($this->doRPCRequest('GetNewSqlTemplateList', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNewSqlTemplateListRequest $request
     *
     * @return GetNewSqlTemplateListResponse
     */
    public function getNewSqlTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNewSqlTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param GetReportFileUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetReportFileUrlResponse
     */
    public function getReportFileUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetReportFileUrlResponse::fromMap($this->doRPCRequest('GetReportFileUrl', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetReportFileUrlRequest $request
     *
     * @return GetReportFileUrlResponse
     */
    public function getReportFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReportFileUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetRiskLevelDistributionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRiskLevelDistributionResponse
     */
    public function getRiskLevelDistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRiskLevelDistributionResponse::fromMap($this->doRPCRequest('GetRiskLevelDistribution', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRiskLevelDistributionRequest $request
     *
     * @return GetRiskLevelDistributionResponse
     */
    public function getRiskLevelDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskLevelDistributionWithOptions($request, $runtime);
    }

    /**
     * @param GetRiskStatisticsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRiskStatisticsResponse
     */
    public function getRiskStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRiskStatisticsResponse::fromMap($this->doRPCRequest('GetRiskStatistics', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRiskStatisticsRequest $request
     *
     * @return GetRiskStatisticsResponse
     */
    public function getRiskStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetRuleDetailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRuleDetailResponse
     */
    public function getRuleDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRuleDetailResponse::fromMap($this->doRPCRequest('GetRuleDetail', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRuleDetailRequest $request
     *
     * @return GetRuleDetailResponse
     */
    public function getRuleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetRuleGroupNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetRuleGroupNameResponse
     */
    public function getRuleGroupNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRuleGroupNameResponse::fromMap($this->doRPCRequest('GetRuleGroupName', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRuleGroupNameRequest $request
     *
     * @return GetRuleGroupNameResponse
     */
    public function getRuleGroupName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleGroupNameWithOptions($request, $runtime);
    }

    /**
     * @param GetSessionDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSessionDetailResponse
     */
    public function getSessionDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSessionDetailResponse::fromMap($this->doRPCRequest('GetSessionDetail', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSessionDetailRequest $request
     *
     * @return GetSessionDetailResponse
     */
    public function getSessionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSessionDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetSessionDistributionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSessionDistributionResponse
     */
    public function getSessionDistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSessionDistributionResponse::fromMap($this->doRPCRequest('GetSessionDistribution', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSessionDistributionRequest $request
     *
     * @return GetSessionDistributionResponse
     */
    public function getSessionDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSessionDistributionWithOptions($request, $runtime);
    }

    /**
     * @param GetSessionListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSessionListResponse
     */
    public function getSessionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSessionListResponse::fromMap($this->doRPCRequest('GetSessionList', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSessionListRequest $request
     *
     * @return GetSessionListResponse
     */
    public function getSessionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSessionListWithOptions($request, $runtime);
    }

    /**
     * @param GetSessionQueryConditionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSessionQueryConditionResponse
     */
    public function getSessionQueryConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSessionQueryConditionResponse::fromMap($this->doRPCRequest('GetSessionQueryCondition', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSessionQueryConditionRequest $request
     *
     * @return GetSessionQueryConditionResponse
     */
    public function getSessionQueryCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSessionQueryConditionWithOptions($request, $runtime);
    }

    /**
     * @param GetSqlTemplateListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSqlTemplateListResponse
     */
    public function getSqlTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSqlTemplateListResponse::fromMap($this->doRPCRequest('GetSqlTemplateList', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSqlTemplateListRequest $request
     *
     * @return GetSqlTemplateListResponse
     */
    public function getSqlTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSqlTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param GetTopSqlTemplateListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetTopSqlTemplateListResponse
     */
    public function getTopSqlTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTopSqlTemplateListResponse::fromMap($this->doRPCRequest('GetTopSqlTemplateList', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTopSqlTemplateListRequest $request
     *
     * @return GetTopSqlTemplateListResponse
     */
    public function getTopSqlTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopSqlTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param GradeProtectionReportRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GradeProtectionReportResponse
     */
    public function gradeProtectionReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GradeProtectionReportResponse::fromMap($this->doRPCRequest('GradeProtectionReport', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GradeProtectionReportRequest $request
     *
     * @return GradeProtectionReportResponse
     */
    public function gradeProtectionReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->gradeProtectionReportWithOptions($request, $runtime);
    }

    /**
     * @param ImportDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ImportDataSourceResponse
     */
    public function importDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportDataSourceResponse::fromMap($this->doRPCRequest('ImportDataSource', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportDataSourceRequest $request
     *
     * @return ImportDataSourceResponse
     */
    public function importDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param IntegratedReportRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return IntegratedReportResponse
     */
    public function integratedReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return IntegratedReportResponse::fromMap($this->doRPCRequest('IntegratedReport', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param IntegratedReportRequest $request
     *
     * @return IntegratedReportResponse
     */
    public function integratedReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->integratedReportWithOptions($request, $runtime);
    }

    /**
     * @param ListAssociatedRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAssociatedRulesResponse
     */
    public function listAssociatedRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAssociatedRulesResponse::fromMap($this->doRPCRequest('ListAssociatedRules', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAssociatedRulesRequest $request
     *
     * @return ListAssociatedRulesResponse
     */
    public function listAssociatedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssociatedRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListDataSourceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDataSourceAttributeResponse
     */
    public function listDataSourceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDataSourceAttributeResponse::fromMap($this->doRPCRequest('ListDataSourceAttribute', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDataSourceAttributeRequest $request
     *
     * @return ListDataSourceAttributeResponse
     */
    public function listDataSourceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ListDataSourcesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDataSourcesResponse::fromMap($this->doRPCRequest('ListDataSources', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDataSourcesRequest $request
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListLogAlarmTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLogAlarmTasksResponse
     */
    public function listLogAlarmTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLogAlarmTasksResponse::fromMap($this->doRPCRequest('ListLogAlarmTasks', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLogAlarmTasksRequest $request
     *
     * @return ListLogAlarmTasksResponse
     */
    public function listLogAlarmTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogAlarmTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListReportPushTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListReportPushTasksResponse
     */
    public function listReportPushTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListReportPushTasksResponse::fromMap($this->doRPCRequest('ListReportPushTasks', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListReportPushTasksRequest $request
     *
     * @return ListReportPushTasksResponse
     */
    public function listReportPushTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReportPushTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListRuleGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListRuleGroupsResponse
     */
    public function listRuleGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRuleGroupsResponse::fromMap($this->doRPCRequest('ListRuleGroups', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRuleGroupsRequest $request
     *
     * @return ListRuleGroupsResponse
     */
    public function listRuleGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRuleGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListRulesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRulesResponse::fromMap($this->doRPCRequest('ListRules', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRulesRequest $request
     *
     * @return ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListSqlTypeKeysForRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListSqlTypeKeysForRuleResponse
     */
    public function listSqlTypeKeysForRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSqlTypeKeysForRuleResponse::fromMap($this->doRPCRequest('ListSqlTypeKeysForRule', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSqlTypeKeysForRuleRequest $request
     *
     * @return ListSqlTypeKeysForRuleResponse
     */
    public function listSqlTypeKeysForRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSqlTypeKeysForRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListSqlTypesForRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSqlTypesForRuleResponse
     */
    public function listSqlTypesForRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSqlTypesForRuleResponse::fromMap($this->doRPCRequest('ListSqlTypesForRule', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSqlTypesForRuleRequest $request
     *
     * @return ListSqlTypesForRuleResponse
     */
    public function listSqlTypesForRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSqlTypesForRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListSupportDbTypesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListSupportDbTypesResponse
     */
    public function listSupportDbTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSupportDbTypesResponse::fromMap($this->doRPCRequest('ListSupportDbTypes', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSupportDbTypesRequest $request
     *
     * @return ListSupportDbTypesResponse
     */
    public function listSupportDbTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSupportDbTypesWithOptions($request, $runtime);
    }

    /**
     * @param ListSystemAlarmsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSystemAlarmsResponse
     */
    public function listSystemAlarmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSystemAlarmsResponse::fromMap($this->doRPCRequest('ListSystemAlarms', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSystemAlarmsRequest $request
     *
     * @return ListSystemAlarmsResponse
     */
    public function listSystemAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemAlarmsWithOptions($request, $runtime);
    }

    /**
     * @param ListSystemAlarmTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSystemAlarmTasksResponse
     */
    public function listSystemAlarmTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSystemAlarmTasksResponse::fromMap($this->doRPCRequest('ListSystemAlarmTasks', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSystemAlarmTasksRequest $request
     *
     * @return ListSystemAlarmTasksResponse
     */
    public function listSystemAlarmTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemAlarmTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTemplatesForSqlRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListTemplatesForSqlRuleResponse
     */
    public function listTemplatesForSqlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTemplatesForSqlRuleResponse::fromMap($this->doRPCRequest('ListTemplatesForSqlRule', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTemplatesForSqlRuleRequest $request
     *
     * @return ListTemplatesForSqlRuleResponse
     */
    public function listTemplatesForSqlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesForSqlRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListUsedSqlTypesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListUsedSqlTypesResponse
     */
    public function listUsedSqlTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsedSqlTypesResponse::fromMap($this->doRPCRequest('ListUsedSqlTypes', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUsedSqlTypesRequest $request
     *
     * @return ListUsedSqlTypesResponse
     */
    public function listUsedSqlTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsedSqlTypesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBaseTemplateStateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyBaseTemplateStateResponse
     */
    public function modifyBaseTemplateStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBaseTemplateStateResponse::fromMap($this->doRPCRequest('ModifyBaseTemplateState', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBaseTemplateStateRequest $request
     *
     * @return ModifyBaseTemplateStateResponse
     */
    public function modifyBaseTemplateState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBaseTemplateStateWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCustomNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCustomNameResponse
     */
    public function modifyCustomNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCustomNameResponse::fromMap($this->doRPCRequest('ModifyCustomName', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCustomNameRequest $request
     *
     * @return ModifyCustomNameResponse
     */
    public function modifyCustomName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomNameWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDataSourceResponse
     */
    public function modifyDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDataSourceResponse::fromMap($this->doRPCRequest('ModifyDataSource', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDataSourceRequest $request
     *
     * @return ModifyDataSourceResponse
     */
    public function modifyDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDataSourceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDataSourceAttributeResponse
     */
    public function modifyDataSourceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDataSourceAttributeResponse::fromMap($this->doRPCRequest('ModifyDataSourceAttribute', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDataSourceAttributeRequest $request
     *
     * @return ModifyDataSourceAttributeResponse
     */
    public function modifyDataSourceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataSourceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAttribute', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyLogAlarmTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyLogAlarmTaskResponse
     */
    public function modifyLogAlarmTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLogAlarmTaskResponse::fromMap($this->doRPCRequest('ModifyLogAlarmTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyLogAlarmTaskRequest $request
     *
     * @return ModifyLogAlarmTaskResponse
     */
    public function modifyLogAlarmTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogAlarmTaskWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPlanRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyPlanResponse
     */
    public function modifyPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyPlanResponse::fromMap($this->doRPCRequest('ModifyPlan', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyPlanRequest $request
     *
     * @return ModifyPlanResponse
     */
    public function modifyPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPlanWithOptions($request, $runtime);
    }

    /**
     * @param ModifyReportPushTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyReportPushTaskResponse
     */
    public function modifyReportPushTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyReportPushTaskResponse::fromMap($this->doRPCRequest('ModifyReportPushTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyReportPushTaskRequest $request
     *
     * @return ModifyReportPushTaskResponse
     */
    public function modifyReportPushTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReportPushTaskWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRuleGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyRuleGroupResponse
     */
    public function modifyRuleGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRuleGroupResponse::fromMap($this->doRPCRequest('ModifyRuleGroup', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyRuleGroupRequest $request
     *
     * @return ModifyRuleGroupResponse
     */
    public function modifyRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRuleGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifySystemAlarmTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifySystemAlarmTaskResponse
     */
    public function modifySystemAlarmTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySystemAlarmTaskResponse::fromMap($this->doRPCRequest('ModifySystemAlarmTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySystemAlarmTaskRequest $request
     *
     * @return ModifySystemAlarmTaskResponse
     */
    public function modifySystemAlarmTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySystemAlarmTaskWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param PciReportRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PciReportResponse
     */
    public function pciReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PciReportResponse::fromMap($this->doRPCRequest('PciReport', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PciReportRequest $request
     *
     * @return PciReportResponse
     */
    public function pciReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pciReportWithOptions($request, $runtime);
    }

    /**
     * @param PutLoginCountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PutLoginCountResponse
     */
    public function putLoginCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutLoginCountResponse::fromMap($this->doRPCRequest('PutLoginCount', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutLoginCountRequest $request
     *
     * @return PutLoginCountResponse
     */
    public function putLoginCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putLoginCountWithOptions($request, $runtime);
    }

    /**
     * @param ReadMarkSystemAlarmsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReadMarkSystemAlarmsResponse
     */
    public function readMarkSystemAlarmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReadMarkSystemAlarmsResponse::fromMap($this->doRPCRequest('ReadMarkSystemAlarms', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReadMarkSystemAlarmsRequest $request
     *
     * @return ReadMarkSystemAlarmsResponse
     */
    public function readMarkSystemAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readMarkSystemAlarmsWithOptions($request, $runtime);
    }

    /**
     * @param RefundInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RefundInstanceResponse
     */
    public function refundInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefundInstanceResponse::fromMap($this->doRPCRequest('RefundInstance', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefundInstanceRequest $request
     *
     * @return RefundInstanceResponse
     */
    public function refundInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RegisterNoticeMailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RegisterNoticeMailResponse
     */
    public function registerNoticeMailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterNoticeMailResponse::fromMap($this->doRPCRequest('RegisterNoticeMail', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterNoticeMailRequest $request
     *
     * @return RegisterNoticeMailResponse
     */
    public function registerNoticeMail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerNoticeMailWithOptions($request, $runtime);
    }

    /**
     * @param RemoveLogMaskConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveLogMaskConfigResponse
     */
    public function removeLogMaskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveLogMaskConfigResponse::fromMap($this->doRPCRequest('RemoveLogMaskConfig', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveLogMaskConfigRequest $request
     *
     * @return RemoveLogMaskConfigResponse
     */
    public function removeLogMaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeLogMaskConfigWithOptions($request, $runtime);
    }

    /**
     * @param SendVerifyCodeMailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SendVerifyCodeMailResponse
     */
    public function sendVerifyCodeMailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendVerifyCodeMailResponse::fromMap($this->doRPCRequest('SendVerifyCodeMail', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendVerifyCodeMailRequest $request
     *
     * @return SendVerifyCodeMailResponse
     */
    public function sendVerifyCodeMail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerifyCodeMailWithOptions($request, $runtime);
    }

    /**
     * @param SoxReportRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SoxReportResponse
     */
    public function soxReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SoxReportResponse::fromMap($this->doRPCRequest('SoxReport', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SoxReportRequest $request
     *
     * @return SoxReportResponse
     */
    public function soxReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->soxReportWithOptions($request, $runtime);
    }

    /**
     * @param StartAlarmTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartAlarmTaskResponse
     */
    public function startAlarmTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartAlarmTaskResponse::fromMap($this->doRPCRequest('StartAlarmTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartAlarmTaskRequest $request
     *
     * @return StartAlarmTaskResponse
     */
    public function startAlarmTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAlarmTaskWithOptions($request, $runtime);
    }

    /**
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartInstanceResponse::fromMap($this->doRPCRequest('StartInstance', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StopAlarmTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopAlarmTaskResponse
     */
    public function stopAlarmTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopAlarmTaskResponse::fromMap($this->doRPCRequest('StopAlarmTask', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopAlarmTaskRequest $request
     *
     * @return StopAlarmTaskResponse
     */
    public function stopAlarmTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAlarmTaskWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpgradeInstanceVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeInstanceVersionResponse::fromMap($this->doRPCRequest('UpgradeInstanceVersion', '2018-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeInstanceVersionRequest $request
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceVersionWithOptions($request, $runtime);
    }
}
