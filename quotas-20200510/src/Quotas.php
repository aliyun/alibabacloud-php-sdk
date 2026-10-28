<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationsForTemplateRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationsForTemplateResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateTemplateQuotaItemRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateTemplateQuotaItemResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\DeleteQuotaAlarmRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\DeleteQuotaAlarmResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\DeleteTemplateQuotaItemRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\DeleteTemplateQuotaItemResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaDimensionResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaAlarmRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaAlarmResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationApprovalRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationApprovalResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaApplicationResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaTemplateServiceStatusRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaTemplateServiceStatusResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaUtilizationOverviewRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaUtilizationOverviewResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListAlarmHistoriesRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListAlarmHistoriesResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListDependentQuotasRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListDependentQuotasResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductDimensionGroupsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductDimensionGroupsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaAlarmsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsDetailForTemplateRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsDetailForTemplateResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsForTemplateRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsForTemplateResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaUtilizationReportRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaUtilizationReportResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyQuotaTemplateServiceStatusRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyQuotaTemplateServiceStatusResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyTemplateQuotaItemRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyTemplateQuotaItemResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\RemindQuotaApplicationApprovalRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\RemindQuotaApplicationApprovalResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\StartQuotaUtilizationReportRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\StartQuotaUtilizationReportResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\UpdateQuotaAlarmRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\UpdateQuotaAlarmResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Quotas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('quotas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates an alert rule for a quota item.
     *
     * @remarks
     * The quota alerting feature has been upgraded and this API operation will be deprecated. Use the CloudMonitor API operations [PutResourceMetricRules](https://help.aliyun.com/document_detail/2513316.html) and [PutMetricRuleTargets](https://help.aliyun.com/document_detail/2513302.html) to create alert rules for the new version of quota alerting.
     * For more information about how to use API operations to manage the new version of quota alerting, see [Manage new quota alerts by using API operations](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - CreateQuotaAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQuotaAlarmResponse
     *
     * @param CreateQuotaAlarmRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateQuotaAlarmResponse
     */
    public function createQuotaAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alarmName) {
            @$body['AlarmName'] = $request->alarmName;
        }

        if (null !== $request->originalContext) {
            @$body['OriginalContext'] = $request->originalContext;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaDimensions) {
            @$body['QuotaDimensions'] = $request->quotaDimensions;
        }

        if (null !== $request->threshold) {
            @$body['Threshold'] = $request->threshold;
        }

        if (null !== $request->thresholdPercent) {
            @$body['ThresholdPercent'] = $request->thresholdPercent;
        }

        if (null !== $request->thresholdType) {
            @$body['ThresholdType'] = $request->thresholdType;
        }

        if (null !== $request->webHook) {
            @$body['WebHook'] = $request->webHook;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateQuotaAlarm',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQuotaAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an alert rule for a quota item.
     *
     * @remarks
     * The quota alerting feature has been upgraded and this API operation will be deprecated. Use the CloudMonitor API operations [PutResourceMetricRules](https://help.aliyun.com/document_detail/2513316.html) and [PutMetricRuleTargets](https://help.aliyun.com/document_detail/2513302.html) to create alert rules for the new version of quota alerting.
     * For more information about how to use API operations to manage the new version of quota alerting, see [Manage new quota alerts by using API operations](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - CreateQuotaAlarmRequest
     *
     * @returns CreateQuotaAlarmResponse
     *
     * @param CreateQuotaAlarmRequest $request
     *
     * @return CreateQuotaAlarmResponse
     */
    public function createQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQuotaAlarmWithOptions($request, $runtime);
    }

    /**
     * Creates a quota increase request.
     *
     * @remarks
     * > After you create a quota increase request, you can call the [ListQuotaApplications](https://help.aliyun.com/document_detail/440568.html) operation to view the approval result. If the value of `Status` is `Agree`, the request is approved.
     *
     * @param request - CreateQuotaApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQuotaApplicationResponse
     *
     * @param CreateQuotaApplicationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateQuotaApplicationResponse
     */
    public function createQuotaApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->auditMode) {
            @$body['AuditMode'] = $request->auditMode;
        }

        if (null !== $request->desireValue) {
            @$body['DesireValue'] = $request->desireValue;
        }

        if (null !== $request->dimensions) {
            @$body['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->effectiveTime) {
            @$body['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->envLanguage) {
            @$body['EnvLanguage'] = $request->envLanguage;
        }

        if (null !== $request->expireTime) {
            @$body['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->noticeType) {
            @$body['NoticeType'] = $request->noticeType;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        if (null !== $request->reason) {
            @$body['Reason'] = $request->reason;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateQuotaApplication',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQuotaApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a quota increase request.
     *
     * @remarks
     * > After you create a quota increase request, you can call the [ListQuotaApplications](https://help.aliyun.com/document_detail/440568.html) operation to view the approval result. If the value of `Status` is `Agree`, the request is approved.
     *
     * @param request - CreateQuotaApplicationRequest
     *
     * @returns CreateQuotaApplicationResponse
     *
     * @param CreateQuotaApplicationRequest $request
     *
     * @return CreateQuotaApplicationResponse
     */
    public function createQuotaApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQuotaApplicationWithOptions($request, $runtime);
    }

    /**
     * Creates batch quota increase applications for members in a resource folder. When you add a quota item to a quota template, only new members in the resource folder autocommit quota increase applications, and existing members remain unchanged. To increase quotas for existing members by using a quota template, you can select the quota template to commit batch quota increase applications for multiple members in the resource folder. Only the administrator account of the resource folder can create batch quota applications.
     *
     * @remarks
     * ### Limits
     * A single application can include a maximum of 10 quota items.
     *
     * @param request - CreateQuotaApplicationsForTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQuotaApplicationsForTemplateResponse
     *
     * @param CreateQuotaApplicationsForTemplateRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateQuotaApplicationsForTemplateResponse
     */
    public function createQuotaApplicationsForTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliyunUids) {
            @$body['AliyunUids'] = $request->aliyunUids;
        }

        if (null !== $request->desireValue) {
            @$body['DesireValue'] = $request->desireValue;
        }

        if (null !== $request->dimensions) {
            @$body['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->effectiveTime) {
            @$body['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->envLanguage) {
            @$body['EnvLanguage'] = $request->envLanguage;
        }

        if (null !== $request->expireTime) {
            @$body['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->noticeType) {
            @$body['NoticeType'] = $request->noticeType;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        if (null !== $request->reason) {
            @$body['Reason'] = $request->reason;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateQuotaApplicationsForTemplate',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQuotaApplicationsForTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates batch quota increase applications for members in a resource folder. When you add a quota item to a quota template, only new members in the resource folder autocommit quota increase applications, and existing members remain unchanged. To increase quotas for existing members by using a quota template, you can select the quota template to commit batch quota increase applications for multiple members in the resource folder. Only the administrator account of the resource folder can create batch quota applications.
     *
     * @remarks
     * ### Limits
     * A single application can include a maximum of 10 quota items.
     *
     * @param request - CreateQuotaApplicationsForTemplateRequest
     *
     * @returns CreateQuotaApplicationsForTemplateResponse
     *
     * @param CreateQuotaApplicationsForTemplateRequest $request
     *
     * @return CreateQuotaApplicationsForTemplateResponse
     */
    public function createQuotaApplicationsForTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQuotaApplicationsForTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a quota template. After the management account creates a quota template, the template automatically submits quota increase applications for new members added to the resource directory. Existing members remain unaffected. You can use a quota template to apply for increases to multiple quota items at a time, improving the efficiency and automation of quota management across the organization. Only the management account of a resource directory can create a quota template.
     *
     * @remarks
     * ### Before you begin
     * Make sure that the status of the quota template is enabled (that is, `ServiceStatus` is `1`).
     * Call the [GetQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450407.html) operation to query the status of the quota template. If the `ServiceStatus` of the quota template is `0` (not configured) or `-1` (disabled), call the [ModifyQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450406.html) operation to change the status to `1` (enabled).
     * ### Usage notes
     * After you create a quota template, you can call the [ListQuotaApplicationsForTemplate](https://help.aliyun.com/document_detail/2584864.html) operation to view the approval result. If `Status` is displayed as `Agree`, the application is approved.
     *
     * @param request - CreateTemplateQuotaItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateQuotaItemResponse
     *
     * @param CreateTemplateQuotaItemRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateTemplateQuotaItemResponse
     */
    public function createTemplateQuotaItemWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->desireValue) {
            @$body['DesireValue'] = $request->desireValue;
        }

        if (null !== $request->dimensions) {
            @$body['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->effectiveTime) {
            @$body['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->envLanguage) {
            @$body['EnvLanguage'] = $request->envLanguage;
        }

        if (null !== $request->expireTime) {
            @$body['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->noticeType) {
            @$body['NoticeType'] = $request->noticeType;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplateQuotaItem',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTemplateQuotaItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a quota template. After the management account creates a quota template, the template automatically submits quota increase applications for new members added to the resource directory. Existing members remain unaffected. You can use a quota template to apply for increases to multiple quota items at a time, improving the efficiency and automation of quota management across the organization. Only the management account of a resource directory can create a quota template.
     *
     * @remarks
     * ### Before you begin
     * Make sure that the status of the quota template is enabled (that is, `ServiceStatus` is `1`).
     * Call the [GetQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450407.html) operation to query the status of the quota template. If the `ServiceStatus` of the quota template is `0` (not configured) or `-1` (disabled), call the [ModifyQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450406.html) operation to change the status to `1` (enabled).
     * ### Usage notes
     * After you create a quota template, you can call the [ListQuotaApplicationsForTemplate](https://help.aliyun.com/document_detail/2584864.html) operation to view the approval result. If `Status` is displayed as `Agree`, the application is approved.
     *
     * @param request - CreateTemplateQuotaItemRequest
     *
     * @returns CreateTemplateQuotaItemResponse
     *
     * @param CreateTemplateQuotaItemRequest $request
     *
     * @return CreateTemplateQuotaItemResponse
     */
    public function createTemplateQuotaItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateQuotaItemWithOptions($request, $runtime);
    }

    /**
     * Deletes a quota usage alert.
     *
     * @remarks
     * The quota alerting feature has been upgraded, and this API operation will be deprecated soon. This API operation can only delete legacy quota usage alerts. To delete new-version quota usage alerts, use the CloudMonitor API operations [DeleteMetricRules](https://help.aliyun.com/document_detail/2513295.html) and [DeleteMetricRuleTargets](https://help.aliyun.com/document_detail/2513294.html).
     * For more information about managing new-version quota alerts by using API operations, see [Manage new-version quota alerts by using API operations](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - DeleteQuotaAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQuotaAlarmResponse
     *
     * @param DeleteQuotaAlarmRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteQuotaAlarmResponse
     */
    public function deleteQuotaAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alarmId) {
            @$body['AlarmId'] = $request->alarmId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteQuotaAlarm',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQuotaAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a quota usage alert.
     *
     * @remarks
     * The quota alerting feature has been upgraded, and this API operation will be deprecated soon. This API operation can only delete legacy quota usage alerts. To delete new-version quota usage alerts, use the CloudMonitor API operations [DeleteMetricRules](https://help.aliyun.com/document_detail/2513295.html) and [DeleteMetricRuleTargets](https://help.aliyun.com/document_detail/2513294.html).
     * For more information about managing new-version quota alerts by using API operations, see [Manage new-version quota alerts by using API operations](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - DeleteQuotaAlarmRequest
     *
     * @returns DeleteQuotaAlarmResponse
     *
     * @param DeleteQuotaAlarmRequest $request
     *
     * @return DeleteQuotaAlarmResponse
     */
    public function deleteQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQuotaAlarmWithOptions($request, $runtime);
    }

    /**
     * Deletes a quota template. After the management account deletes a quota template, the template no longer automatically submits quota increase requests for new members added to the resource directory. Only the management account of the resource directory can delete quota templates.
     *
     * @param request - DeleteTemplateQuotaItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateQuotaItemResponse
     *
     * @param DeleteTemplateQuotaItemRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteTemplateQuotaItemResponse
     */
    public function deleteTemplateQuotaItemWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplateQuotaItem',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateQuotaItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a quota template. After the management account deletes a quota template, the template no longer automatically submits quota increase requests for new members added to the resource directory. Only the management account of the resource directory can delete quota templates.
     *
     * @param request - DeleteTemplateQuotaItemRequest
     *
     * @returns DeleteTemplateQuotaItemResponse
     *
     * @param DeleteTemplateQuotaItemRequest $request
     *
     * @return DeleteTemplateQuotaItemResponse
     */
    public function deleteTemplateQuotaItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateQuotaItemWithOptions($request, $runtime);
    }

    /**
     * Queries the quota details of a specified cloud service.
     *
     * @param request - GetProductQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductQuotaResponse
     *
     * @param GetProductQuotaRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetProductQuotaResponse
     */
    public function getProductQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dimensions) {
            @$body['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetProductQuota',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProductQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the quota details of a specified cloud service.
     *
     * @param request - GetProductQuotaRequest
     *
     * @returns GetProductQuotaResponse
     *
     * @param GetProductQuotaRequest $request
     *
     * @return GetProductQuotaResponse
     */
    public function getProductQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductQuotaWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the quota dimensions supported by the target cloud service.
     *
     * @param request - GetProductQuotaDimensionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductQuotaDimensionResponse
     *
     * @param GetProductQuotaDimensionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetProductQuotaDimensionResponse
     */
    public function getProductQuotaDimensionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dependentDimensions) {
            @$body['DependentDimensions'] = $request->dependentDimensions;
        }

        if (null !== $request->dimensionKey) {
            @$body['DimensionKey'] = $request->dimensionKey;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetProductQuotaDimension',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProductQuotaDimensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the quota dimensions supported by the target cloud service.
     *
     * @param request - GetProductQuotaDimensionRequest
     *
     * @returns GetProductQuotaDimensionResponse
     *
     * @param GetProductQuotaDimensionRequest $request
     *
     * @return GetProductQuotaDimensionResponse
     */
    public function getProductQuotaDimension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductQuotaDimensionWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified quota alert.
     *
     * @remarks
     * The quota alert feature has been upgraded. This API operation will be deprecated soon. This API operation can only query the details of legacy quota usage alerts. To query the details of new-version quota usage alerts, use the CloudMonitor API operation [DescribeMetricRuleList](https://help.aliyun.com/document_detail/2513291.html). For more information about how to use API operations to manage new-version quota alerts, see [Use API operations to manage new-version quota alerts](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - GetQuotaAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaAlarmResponse
     *
     * @param GetQuotaAlarmRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetQuotaAlarmResponse
     */
    public function getQuotaAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alarmId) {
            @$body['AlarmId'] = $request->alarmId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetQuotaAlarm',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQuotaAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified quota alert.
     *
     * @remarks
     * The quota alert feature has been upgraded. This API operation will be deprecated soon. This API operation can only query the details of legacy quota usage alerts. To query the details of new-version quota usage alerts, use the CloudMonitor API operation [DescribeMetricRuleList](https://help.aliyun.com/document_detail/2513291.html). For more information about how to use API operations to manage new-version quota alerts, see [Use API operations to manage new-version quota alerts](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - GetQuotaAlarmRequest
     *
     * @returns GetQuotaAlarmResponse
     *
     * @param GetQuotaAlarmRequest $request
     *
     * @return GetQuotaAlarmResponse
     */
    public function getQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaAlarmWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a quota increase application.
     *
     * @param request - GetQuotaApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaApplicationResponse
     *
     * @param GetQuotaApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetQuotaApplicationResponse
     */
    public function getQuotaApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetQuotaApplication',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQuotaApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a quota increase application.
     *
     * @param request - GetQuotaApplicationRequest
     *
     * @returns GetQuotaApplicationResponse
     *
     * @param GetQuotaApplicationRequest $request
     *
     * @return GetQuotaApplicationResponse
     */
    public function getQuotaApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the approval information of a quota application, including the average approval time, whether approval reminders are supported, and the approval reminder interval.
     *
     * @remarks
     * ### Before you begin
     * Make sure that you have created a quota increase application. For more information, see [CreateQuotaApplication](https://help.aliyun.com/document_detail/440566.html).
     *
     * @param request - GetQuotaApplicationApprovalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaApplicationApprovalResponse
     *
     * @param GetQuotaApplicationApprovalRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetQuotaApplicationApprovalResponse
     */
    public function getQuotaApplicationApprovalWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetQuotaApplicationApproval',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQuotaApplicationApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the approval information of a quota application, including the average approval time, whether approval reminders are supported, and the approval reminder interval.
     *
     * @remarks
     * ### Before you begin
     * Make sure that you have created a quota increase application. For more information, see [CreateQuotaApplication](https://help.aliyun.com/document_detail/440566.html).
     *
     * @param request - GetQuotaApplicationApprovalRequest
     *
     * @returns GetQuotaApplicationApprovalResponse
     *
     * @param GetQuotaApplicationApprovalRequest $request
     *
     * @return GetQuotaApplicationApprovalResponse
     */
    public function getQuotaApplicationApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaApplicationApprovalWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the quota template.
     *
     * @remarks
     * The default status of a quota template is unset (that is, `ServiceStatus` is `0`). You can use the features of the quota template only when its status is enabled (that is, `ServiceStatus` is `1`).
     *
     * @param request - GetQuotaTemplateServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaTemplateServiceStatusResponse
     *
     * @param GetQuotaTemplateServiceStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetQuotaTemplateServiceStatusResponse
     */
    public function getQuotaTemplateServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceDirectoryId) {
            @$body['ResourceDirectoryId'] = $request->resourceDirectoryId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetQuotaTemplateServiceStatus',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQuotaTemplateServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the quota template.
     *
     * @remarks
     * The default status of a quota template is unset (that is, `ServiceStatus` is `0`). You can use the features of the quota template only when its status is enabled (that is, `ServiceStatus` is `1`).
     *
     * @param request - GetQuotaTemplateServiceStatusRequest
     *
     * @returns GetQuotaTemplateServiceStatusResponse
     *
     * @param GetQuotaTemplateServiceStatusRequest $request
     *
     * @return GetQuotaTemplateServiceStatusResponse
     */
    public function getQuotaTemplateServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaTemplateServiceStatusWithOptions($request, $runtime);
    }

    /**
     * 获取配额使用率概览.
     *
     * @param request - GetQuotaUtilizationOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaUtilizationOverviewResponse
     *
     * @param GetQuotaUtilizationOverviewRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetQuotaUtilizationOverviewResponse
     */
    public function getQuotaUtilizationOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetQuotaUtilizationOverview',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQuotaUtilizationOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取配额使用率概览.
     *
     * @param request - GetQuotaUtilizationOverviewRequest
     *
     * @returns GetQuotaUtilizationOverviewResponse
     *
     * @param GetQuotaUtilizationOverviewRequest $request
     *
     * @return GetQuotaUtilizationOverviewResponse
     */
    public function getQuotaUtilizationOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaUtilizationOverviewWithOptions($request, $runtime);
    }

    /**
     * Queries the history of quota alerts.
     *
     * @remarks
     * The quota alert feature has been upgraded and this API operation will be deprecated. This API operation can only query the history of legacy quota usage alerts. To query the history of new quota usage alerts, use the CloudMonitor API operations [DescribeAlertLogCount](https://help.aliyun.com/document_detail/2513275.html) and [DescribeAlertLogList](https://help.aliyun.com/document_detail/2513276.html). For more information about how to use API operations to manage new quota alerts, see [Use API operations to manage new quota alerts](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - ListAlarmHistoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlarmHistoriesResponse
     *
     * @param ListAlarmHistoriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAlarmHistoriesResponse
     */
    public function listAlarmHistoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alarmId) {
            @$body['AlarmId'] = $request->alarmId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAlarmHistories',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAlarmHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the history of quota alerts.
     *
     * @remarks
     * The quota alert feature has been upgraded and this API operation will be deprecated. This API operation can only query the history of legacy quota usage alerts. To query the history of new quota usage alerts, use the CloudMonitor API operations [DescribeAlertLogCount](https://help.aliyun.com/document_detail/2513275.html) and [DescribeAlertLogList](https://help.aliyun.com/document_detail/2513276.html). For more information about how to use API operations to manage new quota alerts, see [Use API operations to manage new quota alerts](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - ListAlarmHistoriesRequest
     *
     * @returns ListAlarmHistoriesResponse
     *
     * @param ListAlarmHistoriesRequest $request
     *
     * @return ListAlarmHistoriesResponse
     */
    public function listAlarmHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmHistoriesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of quotas associated with a specific quota. Some quotas are interdependent and should be increased simultaneously.
     *
     * @param request - ListDependentQuotasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDependentQuotasResponse
     *
     * @param ListDependentQuotasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDependentQuotasResponse
     */
    public function listDependentQuotasWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDependentQuotas',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDependentQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of quotas associated with a specific quota. Some quotas are interdependent and should be increased simultaneously.
     *
     * @param request - ListDependentQuotasRequest
     *
     * @returns ListDependentQuotasResponse
     *
     * @param ListDependentQuotasRequest $request
     *
     * @return ListDependentQuotasResponse
     */
    public function listDependentQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDependentQuotasWithOptions($request, $runtime);
    }

    /**
     * This operation queries the dimension groups of a specified Alibaba Cloud service.
     *
     * @param request - ListProductDimensionGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductDimensionGroupsResponse
     *
     * @param ListProductDimensionGroupsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListProductDimensionGroupsResponse
     */
    public function listProductDimensionGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductDimensionGroups',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductDimensionGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation queries the dimension groups of a specified Alibaba Cloud service.
     *
     * @param request - ListProductDimensionGroupsRequest
     *
     * @returns ListProductDimensionGroupsResponse
     *
     * @param ListProductDimensionGroupsRequest $request
     *
     * @return ListProductDimensionGroupsResponse
     */
    public function listProductDimensionGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductDimensionGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the quota dimensions supported by the specified cloud service.
     *
     * @param request - ListProductQuotaDimensionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductQuotaDimensionsResponse
     *
     * @param ListProductQuotaDimensionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListProductQuotaDimensionsResponse
     */
    public function listProductQuotaDimensionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProductQuotaDimensions',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductQuotaDimensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the quota dimensions supported by the specified cloud service.
     *
     * @param request - ListProductQuotaDimensionsRequest
     *
     * @returns ListProductQuotaDimensionsResponse
     *
     * @param ListProductQuotaDimensionsRequest $request
     *
     * @return ListProductQuotaDimensionsResponse
     */
    public function listProductQuotaDimensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductQuotaDimensionsWithOptions($request, $runtime);
    }

    /**
     * Queries the quotas of a specified cloud service.
     *
     * @param request - ListProductQuotasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductQuotasResponse
     *
     * @param ListProductQuotasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListProductQuotasResponse
     */
    public function listProductQuotasWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dimensions) {
            @$body['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->groupCode) {
            @$body['GroupCode'] = $request->groupCode;
        }

        if (null !== $request->keyWord) {
            @$body['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$body['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProductQuotas',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the quotas of a specified cloud service.
     *
     * @param request - ListProductQuotasRequest
     *
     * @returns ListProductQuotasResponse
     *
     * @param ListProductQuotasRequest $request
     *
     * @return ListProductQuotasResponse
     */
    public function listProductQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductQuotasWithOptions($request, $runtime);
    }

    /**
     * Queries the list of Alibaba Cloud services supported by Quota Center.
     *
     * @remarks
     * The query results are the same as those in [Alibaba Cloud services supported by Quota Center](https://help.aliyun.com/document_detail/182368.html).
     *
     * @param request - ListProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Alibaba Cloud services supported by Quota Center.
     *
     * @remarks
     * The query results are the same as those in [Alibaba Cloud services supported by Quota Center](https://help.aliyun.com/document_detail/182368.html).
     *
     * @param request - ListProductsRequest
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductsWithOptions($request, $runtime);
    }

    /**
     * Queries quota usage alerts.
     *
     * @remarks
     * The quota alert feature has been upgraded. This API operation is scheduled for deprecation and queries only earlier-version quota usage alerts. To query new-version quota usage alerts, call the CloudMonitor API operation [DescribeMetricRuleList](https://help.aliyun.com/document_detail/2513291.html). For more information about how to manage new-version quota alerts using API operations, see [Use API operations to manage new-version quota alerts](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - ListQuotaAlarmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotaAlarmsResponse
     *
     * @param ListQuotaAlarmsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListQuotaAlarmsResponse
     */
    public function listQuotaAlarmsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alarmName) {
            @$body['AlarmName'] = $request->alarmName;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaDimensions) {
            @$body['QuotaDimensions'] = $request->quotaDimensions;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListQuotaAlarms',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQuotaAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries quota usage alerts.
     *
     * @remarks
     * The quota alert feature has been upgraded. This API operation is scheduled for deprecation and queries only earlier-version quota usage alerts. To query new-version quota usage alerts, call the CloudMonitor API operation [DescribeMetricRuleList](https://help.aliyun.com/document_detail/2513291.html). For more information about how to manage new-version quota alerts using API operations, see [Use API operations to manage new-version quota alerts](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - ListQuotaAlarmsRequest
     *
     * @returns ListQuotaAlarmsResponse
     *
     * @param ListQuotaAlarmsRequest $request
     *
     * @return ListQuotaAlarmsResponse
     */
    public function listQuotaAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaAlarmsWithOptions($request, $runtime);
    }

    /**
     * Queries quota templates by using the management account of a resource directory.
     *
     * @param request - ListQuotaApplicationTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotaApplicationTemplatesResponse
     *
     * @param ListQuotaApplicationTemplatesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListQuotaApplicationTemplatesResponse
     */
    public function listQuotaApplicationTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $body = [];
        if (null !== $request->dimensions) {
            @$body['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListQuotaApplicationTemplates',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQuotaApplicationTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries quota templates by using the management account of a resource directory.
     *
     * @param request - ListQuotaApplicationTemplatesRequest
     *
     * @returns ListQuotaApplicationTemplatesResponse
     *
     * @param ListQuotaApplicationTemplatesRequest $request
     *
     * @return ListQuotaApplicationTemplatesResponse
     */
    public function listQuotaApplicationTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaApplicationTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of quota increase applications.
     *
     * @param request - ListQuotaApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotaApplicationsResponse
     *
     * @param ListQuotaApplicationsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListQuotaApplicationsResponse
     */
    public function listQuotaApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dimensions) {
            @$body['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->keyWord) {
            @$body['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListQuotaApplications',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQuotaApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of quota increase applications.
     *
     * @param request - ListQuotaApplicationsRequest
     *
     * @returns ListQuotaApplicationsResponse
     *
     * @param ListQuotaApplicationsRequest $request
     *
     * @return ListQuotaApplicationsResponse
     */
    public function listQuotaApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaApplicationsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of quota increase applications for a member in a resource directory.
     *
     * @param request - ListQuotaApplicationsDetailForTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotaApplicationsDetailForTemplateResponse
     *
     * @param ListQuotaApplicationsDetailForTemplateRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListQuotaApplicationsDetailForTemplateResponse
     */
    public function listQuotaApplicationsDetailForTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliyunUid) {
            @$body['AliyunUid'] = $request->aliyunUid;
        }

        if (null !== $request->batchQuotaApplicationId) {
            @$body['BatchQuotaApplicationId'] = $request->batchQuotaApplicationId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListQuotaApplicationsDetailForTemplate',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQuotaApplicationsDetailForTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of quota increase applications for a member in a resource directory.
     *
     * @param request - ListQuotaApplicationsDetailForTemplateRequest
     *
     * @returns ListQuotaApplicationsDetailForTemplateResponse
     *
     * @param ListQuotaApplicationsDetailForTemplateRequest $request
     *
     * @return ListQuotaApplicationsDetailForTemplateResponse
     */
    public function listQuotaApplicationsDetailForTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaApplicationsDetailForTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the history of batch requests for member quotas submitted using a quota template.
     *
     * @param request - ListQuotaApplicationsForTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotaApplicationsForTemplateResponse
     *
     * @param ListQuotaApplicationsForTemplateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListQuotaApplicationsForTemplateResponse
     */
    public function listQuotaApplicationsForTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applyEndTime) {
            @$body['ApplyEndTime'] = $request->applyEndTime;
        }

        if (null !== $request->applyStartTime) {
            @$body['ApplyStartTime'] = $request->applyStartTime;
        }

        if (null !== $request->batchQuotaApplicationId) {
            @$body['BatchQuotaApplicationId'] = $request->batchQuotaApplicationId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListQuotaApplicationsForTemplate',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQuotaApplicationsForTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the history of batch requests for member quotas submitted using a quota template.
     *
     * @param request - ListQuotaApplicationsForTemplateRequest
     *
     * @returns ListQuotaApplicationsForTemplateResponse
     *
     * @param ListQuotaApplicationsForTemplateRequest $request
     *
     * @return ListQuotaApplicationsForTemplateResponse
     */
    public function listQuotaApplicationsForTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaApplicationsForTemplateWithOptions($request, $runtime);
    }

    /**
     * 列举配额使用率报告.
     *
     * @param request - ListQuotaUtilizationReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotaUtilizationReportResponse
     *
     * @param ListQuotaUtilizationReportRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListQuotaUtilizationReportResponse
     */
    public function listQuotaUtilizationReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adjustable) {
            @$body['Adjustable'] = $request->adjustable;
        }

        if (null !== $request->keyWords) {
            @$body['KeyWords'] = $request->keyWords;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaCategory) {
            @$body['QuotaCategory'] = $request->quotaCategory;
        }

        if (null !== $request->quotaRegionId) {
            @$body['QuotaRegionId'] = $request->quotaRegionId;
        }

        if (null !== $request->utilizationStatuses) {
            @$body['UtilizationStatuses'] = $request->utilizationStatuses;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListQuotaUtilizationReport',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQuotaUtilizationReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举配额使用率报告.
     *
     * @param request - ListQuotaUtilizationReportRequest
     *
     * @returns ListQuotaUtilizationReportResponse
     *
     * @param ListQuotaUtilizationReportRequest $request
     *
     * @return ListQuotaUtilizationReportResponse
     */
    public function listQuotaUtilizationReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaUtilizationReportWithOptions($request, $runtime);
    }

    /**
     * Changes the status of a quota template. By default, the quota template is not configured. If the management account of a resource directory uses a quota template for the first time, you must enable the quota template. Only the management account of a resource directory can change the status of quota templates.
     *
     * @remarks
     * ### [](#)Prerequisites
     * A resource directory is enabled. For more information, see [EnableResourceDirectory](https://help.aliyun.com/document_detail/604185.html).
     * ### [](#)Usage notes
     * If the `ServiceStatus` parameter is set to `0` or `-1`, you can call this operation to set the parameter to `1`. Then, you can call the [CreateTemplateQuotaItem](https://help.aliyun.com/document_detail/450615.html) operation to create a quota template.
     *
     * @param request - ModifyQuotaTemplateServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyQuotaTemplateServiceStatusResponse
     *
     * @param ModifyQuotaTemplateServiceStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyQuotaTemplateServiceStatusResponse
     */
    public function modifyQuotaTemplateServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceStatus) {
            @$body['ServiceStatus'] = $request->serviceStatus;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyQuotaTemplateServiceStatus',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyQuotaTemplateServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the status of a quota template. By default, the quota template is not configured. If the management account of a resource directory uses a quota template for the first time, you must enable the quota template. Only the management account of a resource directory can change the status of quota templates.
     *
     * @remarks
     * ### [](#)Prerequisites
     * A resource directory is enabled. For more information, see [EnableResourceDirectory](https://help.aliyun.com/document_detail/604185.html).
     * ### [](#)Usage notes
     * If the `ServiceStatus` parameter is set to `0` or `-1`, you can call this operation to set the parameter to `1`. Then, you can call the [CreateTemplateQuotaItem](https://help.aliyun.com/document_detail/450615.html) operation to create a quota template.
     *
     * @param request - ModifyQuotaTemplateServiceStatusRequest
     *
     * @returns ModifyQuotaTemplateServiceStatusResponse
     *
     * @param ModifyQuotaTemplateServiceStatusRequest $request
     *
     * @return ModifyQuotaTemplateServiceStatusResponse
     */
    public function modifyQuotaTemplateServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyQuotaTemplateServiceStatusWithOptions($request, $runtime);
    }

    /**
     * Only the administrator account of a resource directory can modify a quota template. Modifications to a quota template apply only to new members that are added to the resource directory and do not affect existing members.
     *
     * @param request - ModifyTemplateQuotaItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTemplateQuotaItemResponse
     *
     * @param ModifyTemplateQuotaItemRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyTemplateQuotaItemResponse
     */
    public function modifyTemplateQuotaItemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->quotaCategory) {
            @$query['QuotaCategory'] = $request->quotaCategory;
        }

        $body = [];
        if (null !== $request->desireValue) {
            @$body['DesireValue'] = $request->desireValue;
        }

        if (null !== $request->dimensions) {
            @$body['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->effectiveTime) {
            @$body['EffectiveTime'] = $request->effectiveTime;
        }

        if (null !== $request->envLanguage) {
            @$body['EnvLanguage'] = $request->envLanguage;
        }

        if (null !== $request->expireTime) {
            @$body['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->noticeType) {
            @$body['NoticeType'] = $request->noticeType;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->quotaActionCode) {
            @$body['QuotaActionCode'] = $request->quotaActionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTemplateQuotaItem',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTemplateQuotaItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Only the administrator account of a resource directory can modify a quota template. Modifications to a quota template apply only to new members that are added to the resource directory and do not affect existing members.
     *
     * @param request - ModifyTemplateQuotaItemRequest
     *
     * @returns ModifyTemplateQuotaItemResponse
     *
     * @param ModifyTemplateQuotaItemRequest $request
     *
     * @return ModifyTemplateQuotaItemResponse
     */
    public function modifyTemplateQuotaItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateQuotaItemWithOptions($request, $runtime);
    }

    /**
     * Sends a reminder for a quota application that is pending approval.
     *
     * @remarks
     * > This operation applies only to quota applications that support reminders. In the GetQuotaApplicationApproval response, the `SupportReminder` parameter for these applications is `true`.
     *
     * @param request - RemindQuotaApplicationApprovalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemindQuotaApplicationApprovalResponse
     *
     * @param RemindQuotaApplicationApprovalRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemindQuotaApplicationApprovalResponse
     */
    public function remindQuotaApplicationApprovalWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemindQuotaApplicationApproval',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemindQuotaApplicationApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a reminder for a quota application that is pending approval.
     *
     * @remarks
     * > This operation applies only to quota applications that support reminders. In the GetQuotaApplicationApproval response, the `SupportReminder` parameter for these applications is `true`.
     *
     * @param request - RemindQuotaApplicationApprovalRequest
     *
     * @returns RemindQuotaApplicationApprovalResponse
     *
     * @param RemindQuotaApplicationApprovalRequest $request
     *
     * @return RemindQuotaApplicationApprovalResponse
     */
    public function remindQuotaApplicationApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->remindQuotaApplicationApprovalWithOptions($request, $runtime);
    }

    /**
     * 发起配额使用率报告查询.
     *
     * @param request - StartQuotaUtilizationReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartQuotaUtilizationReportResponse
     *
     * @param StartQuotaUtilizationReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return StartQuotaUtilizationReportResponse
     */
    public function startQuotaUtilizationReportWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'StartQuotaUtilizationReport',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartQuotaUtilizationReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发起配额使用率报告查询.
     *
     * @param request - StartQuotaUtilizationReportRequest
     *
     * @returns StartQuotaUtilizationReportResponse
     *
     * @param StartQuotaUtilizationReportRequest $request
     *
     * @return StartQuotaUtilizationReportResponse
     */
    public function startQuotaUtilizationReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startQuotaUtilizationReportWithOptions($request, $runtime);
    }

    /**
     * Modifies quota alert information.
     *
     * @remarks
     * This API operation is deprecated because the quota alert feature has been upgraded. To modify information about new quota usage alerts, use the CloudMonitor API operations [PutResourceMetricRules](https://help.aliyun.com/document_detail/2513316.html) and [PutMetricRuleTargets](https://help.aliyun.com/document_detail/2513302.html). For more information about using API operations to manage new quota alerts, see [Use API operations to manage new quota alerts](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - UpdateQuotaAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQuotaAlarmResponse
     *
     * @param UpdateQuotaAlarmRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateQuotaAlarmResponse
     */
    public function updateQuotaAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alarmId) {
            @$body['AlarmId'] = $request->alarmId;
        }

        if (null !== $request->alarmName) {
            @$body['AlarmName'] = $request->alarmName;
        }

        if (null !== $request->threshold) {
            @$body['Threshold'] = $request->threshold;
        }

        if (null !== $request->thresholdPercent) {
            @$body['ThresholdPercent'] = $request->thresholdPercent;
        }

        if (null !== $request->thresholdType) {
            @$body['ThresholdType'] = $request->thresholdType;
        }

        if (null !== $request->webHook) {
            @$body['WebHook'] = $request->webHook;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateQuotaAlarm',
            'version' => '2020-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateQuotaAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies quota alert information.
     *
     * @remarks
     * This API operation is deprecated because the quota alert feature has been upgraded. To modify information about new quota usage alerts, use the CloudMonitor API operations [PutResourceMetricRules](https://help.aliyun.com/document_detail/2513316.html) and [PutMetricRuleTargets](https://help.aliyun.com/document_detail/2513302.html). For more information about using API operations to manage new quota alerts, see [Use API operations to manage new quota alerts](https://help.aliyun.com/document_detail/2863234.html).
     *
     * @param request - UpdateQuotaAlarmRequest
     *
     * @returns UpdateQuotaAlarmResponse
     *
     * @param UpdateQuotaAlarmRequest $request
     *
     * @return UpdateQuotaAlarmResponse
     */
    public function updateQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQuotaAlarmWithOptions($request, $runtime);
    }
}
