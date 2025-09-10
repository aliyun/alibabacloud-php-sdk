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
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyQuotaTemplateServiceStatusRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyQuotaTemplateServiceStatusResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyTemplateQuotaItemRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyTemplateQuotaItemResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\RemindQuotaApplicationApprovalRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\RemindQuotaApplicationApprovalResponse;
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
     * Creates a quota alert.
     *
     * @remarks
     * The quota alerting feature has been upgraded and this API operation will be deprecated. If you want to create a quota alert of the new version, call CloudMonitor API operations. For more information, see [Use API operations to manage new quota alert rules](https://help.aliyun.com/document_detail/2863234.html).
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
     * Creates a quota alert.
     *
     * @remarks
     * The quota alerting feature has been upgraded and this API operation will be deprecated. If you want to create a quota alert of the new version, call CloudMonitor API operations. For more information, see [Use API operations to manage new quota alert rules](https://help.aliyun.com/document_detail/2863234.html).
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
     * Submits an application to increase a quota.
     *
     * @remarks
     * In this example, the operation is called to submit an application to increase the value of a quota whose ID is `q_security-groups` and whose name is Maximum Number of Security Groups. The quota belongs to Elastic Compute Service (ECS). The expected value of the quota is `804`, the application reason is `Scale Out`, and the ID of the region to which the quota belongs is `cn-hangzhou`.
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
     * Submits an application to increase a quota.
     *
     * @remarks
     * In this example, the operation is called to submit an application to increase the value of a quota whose ID is `q_security-groups` and whose name is Maximum Number of Security Groups. The quota belongs to Elastic Compute Service (ECS). The expected value of the quota is `804`, the application reason is `Scale Out`, and the ID of the region to which the quota belongs is `cn-hangzhou`.
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
     * Submits a quota increase application. After you add a quota item to a quota template, the system automatically submits quota applications only for new members of the resource directory. The quota values for existing members remain unchanged. If you want to increase the quota values of existing members, you can submit a quota application for the members by applying quota templates to the members. Only the management account of a resource directory can create multiple quota applications at a time.
     *
     * @remarks
     * ### [](#)QPS limit
     * You can add a maximum of 10 quota items to a quota template at a time.
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
     * Submits a quota increase application. After you add a quota item to a quota template, the system automatically submits quota applications only for new members of the resource directory. The quota values for existing members remain unchanged. If you want to increase the quota values of existing members, you can submit a quota application for the members by applying quota templates to the members. Only the management account of a resource directory can create multiple quota applications at a time.
     *
     * @remarks
     * ### [](#)QPS limit
     * You can add a maximum of 10 quota items to a quota template at a time.
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
     * Creates a quota template by using the management account of a resource directory. After you create a quota template, if a member is added to the resource directory, the quota template automatically submits a quota increase request for the member. The quota values for existing members remain unchanged. You can use a quota template to apply for increases on multiple quotas at the same time. This automated approach improves the efficiency of quota management across your organization. Only the management account of a resource directory can create quota templates.
     *
     * @remarks
     * ### [](#)Usage notes
     * You must set the `ServiceStatus` parameter to `1`. This ensures that the quota template is enabled.
     * You can call the [GetQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450407.html) operation to query the status of a quota template. If the value of the `ServiceStatus` parameter in the response is `0` or `-1`, you must call the [ModifyQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450406.html) operation to modify the value to `1`. A value of 0 indicates that the quota template is not configured. A value of -1 indicates that the quota template is disabled. A value of 1 indicates that the quota template is enabled.
     * ### [](#)
     * After you create a quota template, you can call the [ListQuotaApplicationsForTemplate](https://help.aliyun.com/document_detail/2584864.html) operation to view the approval result. If the value of the `Status` parameter in the response is `Agree`, the quota template is approved.
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
     * Creates a quota template by using the management account of a resource directory. After you create a quota template, if a member is added to the resource directory, the quota template automatically submits a quota increase request for the member. The quota values for existing members remain unchanged. You can use a quota template to apply for increases on multiple quotas at the same time. This automated approach improves the efficiency of quota management across your organization. Only the management account of a resource directory can create quota templates.
     *
     * @remarks
     * ### [](#)Usage notes
     * You must set the `ServiceStatus` parameter to `1`. This ensures that the quota template is enabled.
     * You can call the [GetQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450407.html) operation to query the status of a quota template. If the value of the `ServiceStatus` parameter in the response is `0` or `-1`, you must call the [ModifyQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450406.html) operation to modify the value to `1`. A value of 0 indicates that the quota template is not configured. A value of -1 indicates that the quota template is disabled. A value of 1 indicates that the quota template is enabled.
     * ### [](#)
     * After you create a quota template, you can call the [ListQuotaApplicationsForTemplate](https://help.aliyun.com/document_detail/2584864.html) operation to view the approval result. If the value of the `Status` parameter in the response is `Agree`, the quota template is approved.
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
     * Deletes a quota alert.
     *
     * @remarks
     *   The quota alerting feature has been upgraded and this API operation will be deprecated. You can call this operation only to delete a quota alert rule of the old version. If you want to delete a quota alert rule of the new version, call the CloudMonitor API operation [DeleteMetricRules](https://help.aliyun.com/document_detail/2513295.html) or [DeleteMetricRuleTargets](https://help.aliyun.com/document_detail/2513294.html). For more information about how to call API operations to manage quota alert rules of the new version, see [Manage quota alerts of the new version by calling API operations](https://help.aliyun.com/document_detail/2863234.html).
     * *   In this example, the API operation is called to delete a quota alert rule whose ID is `6b512ab7-da3a-4142-b529-2b2a9294****`.
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
     * Deletes a quota alert.
     *
     * @remarks
     *   The quota alerting feature has been upgraded and this API operation will be deprecated. You can call this operation only to delete a quota alert rule of the old version. If you want to delete a quota alert rule of the new version, call the CloudMonitor API operation [DeleteMetricRules](https://help.aliyun.com/document_detail/2513295.html) or [DeleteMetricRuleTargets](https://help.aliyun.com/document_detail/2513294.html). For more information about how to call API operations to manage quota alert rules of the new version, see [Manage quota alerts of the new version by calling API operations](https://help.aliyun.com/document_detail/2863234.html).
     * *   In this example, the API operation is called to delete a quota alert rule whose ID is `6b512ab7-da3a-4142-b529-2b2a9294****`.
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
     * Deletes a quota template by using the management account of a resource directory. After you delete a quota template, if a member is added to the resource directory, the quota template no longer automatically submits a quota increase request for the member. Only the management account of a resource directory can delete quota templates.
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
     * Deletes a quota template by using the management account of a resource directory. After you delete a quota template, if a member is added to the resource directory, the quota template no longer automatically submits a quota increase request for the member. Only the management account of a resource directory can delete quota templates.
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
     * Queries the details of a quota of a cloud service.
     *
     * @remarks
     * In this example, the operation is called to query the details of a quota whose ID is `q_security-groups` and whose name is Maximum Number of Security Groups. This quota belongs to Elastic Compute Service (ECS). The query result shows the details of the quota. The details include the name, ID, description, quota value, used quota, unit, and dimension of the quota. In this example, the quota name is `Maximum Number of Security Groups`. The quota ID is `q_security-groups`. The description is `The maximum number of security groups that can be created for the current account`. The quota value is `801`. The used quota is `26`. The quota unit is `Number of security groups`. The quota dimension is `{"regionId":"cn-hangzhou"}`.
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
     * Queries the details of a quota of a cloud service.
     *
     * @remarks
     * In this example, the operation is called to query the details of a quota whose ID is `q_security-groups` and whose name is Maximum Number of Security Groups. This quota belongs to Elastic Compute Service (ECS). The query result shows the details of the quota. The details include the name, ID, description, quota value, used quota, unit, and dimension of the quota. In this example, the quota name is `Maximum Number of Security Groups`. The quota ID is `q_security-groups`. The description is `The maximum number of security groups that can be created for the current account`. The quota value is `801`. The used quota is `26`. The quota unit is `Number of security groups`. The quota dimension is `{"regionId":"cn-hangzhou"}`.
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
     * Queries the details of a quota dimension that is supported by an Alibaba Cloud service.
     *
     * @remarks
     * In this example, the operation is called to query the details of a quota dimension whose key is `regionId`. The quota dimension belongs to Elastic Compute Service (ECS) Quotas by Instance Type whose service code is ecs-spec. The following query results are returned:
     * *   The values of the quota dimension include `cn-shenzhen`, `cn-beijing`, and `cn-hangzhou`.
     * *   The name of the quota dimension is `region`.
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
     * Queries the details of a quota dimension that is supported by an Alibaba Cloud service.
     *
     * @remarks
     * In this example, the operation is called to query the details of a quota dimension whose key is `regionId`. The quota dimension belongs to Elastic Compute Service (ECS) Quotas by Instance Type whose service code is ecs-spec. The following query results are returned:
     * *   The values of the quota dimension include `cn-shenzhen`, `cn-beijing`, and `cn-hangzhou`.
     * *   The name of the quota dimension is `region`.
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
     * In this example, the operation is called to query the details of a quota alert. The details of the alert are returned. The query results include the alert ID, alert name, alert contact, and time when the quota alert was created.
     *
     * @remarks
     *   The quota alerting feature has been upgraded and this API operation will be deprecated. You can call this operation only to query the details about the quota alert rules of the old version. If you want to query the details about the quota alert rules of the new version, call CloudMonitor API operations. For more information, see [Use API operations to manage new quota alert rules](https://help.aliyun.com/document_detail/2863234.html).
     * *   In this example, the operation is called to query the details of a quota alert rule whose ID is `78d7e436-4b25-4897-84b5-d7b656bb****`. The details of the alert rule are returned. The query result includes the alert ID, alert name, alert contact, and the time when the quota alert rule was created.
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
     * In this example, the operation is called to query the details of a quota alert. The details of the alert are returned. The query results include the alert ID, alert name, alert contact, and time when the quota alert was created.
     *
     * @remarks
     *   The quota alerting feature has been upgraded and this API operation will be deprecated. You can call this operation only to query the details about the quota alert rules of the old version. If you want to query the details about the quota alert rules of the new version, call CloudMonitor API operations. For more information, see [Use API operations to manage new quota alert rules](https://help.aliyun.com/document_detail/2863234.html).
     * *   In this example, the operation is called to query the details of a quota alert rule whose ID is `78d7e436-4b25-4897-84b5-d7b656bb****`. The details of the alert rule are returned. The query result includes the alert ID, alert name, alert contact, and the time when the quota alert rule was created.
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
     * Queries the details about a specified application that is submitted to increase a quota.
     *
     * @remarks
     * In this example, the operation is called to query the details about an application whose ID is `d314d6ae-867d-484c-9009-3d421a80****`. The query result shows the details about the application. The details include the application ID, application time, expected quota value, and application result.
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
     * Queries the details about a specified application that is submitted to increase a quota.
     *
     * @remarks
     * In this example, the operation is called to query the details about an application whose ID is `d314d6ae-867d-484c-9009-3d421a80****`. The query result shows the details about the application. The details include the application ID, application time, expected quota value, and application result.
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
     * Queries the information about quota application approval, such as the average amount of time required for approval, whether approval reminders are supported, and the interval between two consecutive approval reminders.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Make sure that you have created an application for quota increase. For more information, see [CreateQuotaApplication](https://help.aliyun.com/document_detail/440566.html).
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
     * Queries the information about quota application approval, such as the average amount of time required for approval, whether approval reminders are supported, and the interval between two consecutive approval reminders.
     *
     * @remarks
     * ### [](#)Prerequisites
     * Make sure that you have created an application for quota increase. For more information, see [CreateQuotaApplication](https://help.aliyun.com/document_detail/440566.html).
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
     * Queries the status of a quota template.
     *
     * @remarks
     * By default, the value of `ServiceStatus` is `0`, which indicates that no quota template is specified. If you want to use a quota template, make sure that the quota template is enabled. In this case, the value of `ServiceStatus` is `1`.
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
     * Queries the status of a quota template.
     *
     * @remarks
     * By default, the value of `ServiceStatus` is `0`, which indicates that no quota template is specified. If you want to use a quota template, make sure that the quota template is enabled. In this case, the value of `ServiceStatus` is `1`.
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
     * Queries the alert records.
     *
     * @remarks
     * The quota alerting feature has been upgraded and this API operation will be deprecated. You can call this operation only to query the historical records of quota alert rules of the old version. If you want to query the historical records of quota alert rules of the new version, call the CloudMonitor API operation [DescribeAlertLogCount](https://help.aliyun.com/document_detail/2513275.html) or [DescribeAlertLogList](https://help.aliyun.com/document_detail/2513276.html). For more information about how to call API operations to manage quota alert rules of the new version, see [Manage quota alerts of the new version by calling API operations](https://help.aliyun.com/document_detail/2863234.html).
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
     * Queries the alert records.
     *
     * @remarks
     * The quota alerting feature has been upgraded and this API operation will be deprecated. You can call this operation only to query the historical records of quota alert rules of the old version. If you want to query the historical records of quota alert rules of the new version, call the CloudMonitor API operation [DescribeAlertLogCount](https://help.aliyun.com/document_detail/2513275.html) or [DescribeAlertLogList](https://help.aliyun.com/document_detail/2513276.html). For more information about how to call API operations to manage quota alert rules of the new version, see [Manage quota alerts of the new version by calling API operations](https://help.aliyun.com/document_detail/2863234.html).
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
     * Queries the quotas on which a specified quota depends.
     *
     * @remarks
     * In this example, the operation is called to query the quotas on which a Container Service for Kubernetes (ACK) quota whose ID is `q_i5uzm3` depends. This quota is the maximum number of nodes that can be created in an ACK cluster. The query result indicates that the specified quota depends on the following three quotas:
     * *   An Elastic Compute Service (ECS) quota whose ID is `q_elastic-network-interfaces`. This quota is the maximum number of ENIs (Secondary ENIs) that can be owned by an Alibaba Cloud account. The quota is available in the following regions: `cn-shenzhen`, `cn-beijing`, and `cn-hangzhou`.
     * *   A Server Load Balancer (SLB) quota whose ID is `q_fh20b0`. This quota is the number of servers that can be attached to the backend of an SLB instance.
     * *   An SLB quota whose ID is `q_3mmbsp`. This quota is the number of SLB instances that can be owned by an Alibaba Cloud account.
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
     * Queries the quotas on which a specified quota depends.
     *
     * @remarks
     * In this example, the operation is called to query the quotas on which a Container Service for Kubernetes (ACK) quota whose ID is `q_i5uzm3` depends. This quota is the maximum number of nodes that can be created in an ACK cluster. The query result indicates that the specified quota depends on the following three quotas:
     * *   An Elastic Compute Service (ECS) quota whose ID is `q_elastic-network-interfaces`. This quota is the maximum number of ENIs (Secondary ENIs) that can be owned by an Alibaba Cloud account. The quota is available in the following regions: `cn-shenzhen`, `cn-beijing`, and `cn-hangzhou`.
     * *   A Server Load Balancer (SLB) quota whose ID is `q_fh20b0`. This quota is the number of servers that can be attached to the backend of an SLB instance.
     * *   An SLB quota whose ID is `q_3mmbsp`. This quota is the number of SLB instances that can be owned by an Alibaba Cloud account.
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
     * Queries the dimension groups of an Alibaba Cloud service.
     *
     * @remarks
     * This topic provides an example on how to call the ListProductDimensionGroups operation to query the dimension groups of Object Storage Service (OSS). In this example, a dimension group is returned. The group name is `OSS_Group`, the group code is `oss_wf1ngqmd7q`, and the group key is `chargeType`.
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
     * Queries the dimension groups of an Alibaba Cloud service.
     *
     * @remarks
     * This topic provides an example on how to call the ListProductDimensionGroups operation to query the dimension groups of Object Storage Service (OSS). In this example, a dimension group is returned. The group name is `OSS_Group`, the group code is `oss_wf1ngqmd7q`, and the group key is `chargeType`.
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
     * Queries the quota dimensions that are supported by the specified Alibaba Cloud service.
     *
     * @remarks
     * In this example, the operation is called to query the quota dimensions that are supported by Elastic Compute Service (ECS). The query results show all the quota dimensions that are supported by ECS.
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
     * Queries the quota dimensions that are supported by the specified Alibaba Cloud service.
     *
     * @remarks
     * In this example, the operation is called to query the quota dimensions that are supported by Elastic Compute Service (ECS). The query results show all the quota dimensions that are supported by ECS.
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
     * Queries the quotas of a specific Alibaba Cloud service.
     *
     * @remarks
     * In this example, the operation is called to query the quotas whose instance type is `ecs.g5.2xlarge`. The quotas belong to Elastic Compute Service (ECS) Quotas by Instance Type. The query result includes the name, ID, unit, dimensions, and cycle of each quota.
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
     * Queries the quotas of a specific Alibaba Cloud service.
     *
     * @remarks
     * In this example, the operation is called to query the quotas whose instance type is `ecs.g5.2xlarge`. The quotas belong to Elastic Compute Service (ECS) Quotas by Instance Type. The query result includes the name, ID, unit, dimensions, and cycle of each quota.
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
     * Queries the Alibaba Cloud services that support Quota Center.
     *
     * @remarks
     * The services in the query result are the same as the services listed in [Alibaba Cloud services that support Quota Center](https://help.aliyun.com/document_detail/182368.html).
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
     * Queries the Alibaba Cloud services that support Quota Center.
     *
     * @remarks
     * The services in the query result are the same as the services listed in [Alibaba Cloud services that support Quota Center](https://help.aliyun.com/document_detail/182368.html).
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
     * Queries quota alerts.
     *
     * @remarks
     * The quota alerting feature has been upgraded and this API operation will be deprecated. You can call this operation only to query quota alert rules of the old version. If you want to query quota alert rules of the new version, call the CloudMonitor API operation [DescribeMetricRuleList](https://help.aliyun.com/document_detail/2513291.html). For more information about how to call API operations to manage quota alert rules of the new version, see [Manage quota alerts of the new version by calling API operations](https://help.aliyun.com/document_detail/2863234.html).
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
     * Queries quota alerts.
     *
     * @remarks
     * The quota alerting feature has been upgraded and this API operation will be deprecated. You can call this operation only to query quota alert rules of the old version. If you want to query quota alert rules of the new version, call the CloudMonitor API operation [DescribeMetricRuleList](https://help.aliyun.com/document_detail/2513291.html). For more information about how to call API operations to manage quota alert rules of the new version, see [Manage quota alerts of the new version by calling API operations](https://help.aliyun.com/document_detail/2863234.html).
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
     * Queries the details of an application that is submitted to increase a quota.
     *
     * @remarks
     * In this example, the operation is called to query the details of an application that is submitted to increase a quota whose ID is `q_i5uzm3` and whose name is Maximum Number of Nodes. This quota belongs to Container Service for Kubernetes (ACK). The query result shows the details of the application. The details include the application ID, application time, requested quota, and application result. In this example, the application ID is `b926571d-cc09-4711-b547-58a615f0****`. The application time is `2021-01-15T09:13:53Z`. The expected quota value is `101`. The application result is `Agree`.
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
     * Queries the details of an application that is submitted to increase a quota.
     *
     * @remarks
     * In this example, the operation is called to query the details of an application that is submitted to increase a quota whose ID is `q_i5uzm3` and whose name is Maximum Number of Nodes. This quota belongs to Container Service for Kubernetes (ACK). The query result shows the details of the application. The details include the application ID, application time, requested quota, and application result. In this example, the application ID is `b926571d-cc09-4711-b547-58a615f0****`. The application time is `2021-01-15T09:13:53Z`. The expected quota value is `101`. The application result is `Agree`.
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
     * Queries the details of a quota increase application for member accounts in a resource directory.
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
     * Queries the details of a quota increase application for member accounts in a resource directory.
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
     * Queries the application records of a quota template that is used to apply for quotas for member accounts.
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
     * Queries the application records of a quota template that is used to apply for quotas for member accounts.
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
     * The ID of the quota template.
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
     * The ID of the quota template.
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
     * Reminds the approver of a quota application to review the application. This operation is applicable to quota applications that support the approval reminding feature.
     *
     * @remarks
     * >  You can call this operation to enable the approval reminder feature for quota applications that support this feature. To check whether this feature is supported, you can view the value of `SupportReminder` in the GetQuotaApplicationApproval operation. If the value of SupportReminder is `true`, this feature is supported.
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
     * Reminds the approver of a quota application to review the application. This operation is applicable to quota applications that support the approval reminding feature.
     *
     * @remarks
     * >  You can call this operation to enable the approval reminder feature for quota applications that support this feature. To check whether this feature is supported, you can view the value of `SupportReminder` in the GetQuotaApplicationApproval operation. If the value of SupportReminder is `true`, this feature is supported.
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
     * Modifies a quota alert rule.
     *
     * @remarks
     *   The quota alerting feature has been upgraded and this API operation will be deprecated. If you want to modify the information about a specific quota alert rule of the new version, call the CloudMonitor API operation [PutResourceMetricRules](https://help.aliyun.com/document_detail/2513316.html) or [PutMetricRuleTargets](https://help.aliyun.com/document_detail/2513302.html). For more information about how to call API operations to manage quota alert rules of the new version, see [Manage quota alerts of the new version by calling API operations](https://help.aliyun.com/document_detail/2863234.html).
     * *   In this example, the API operation is called to modify the information about a quota alert rule whose ID is `a2efa7fc-832f-47bb-8054-39e28012****` and whose name is `rules`. The alert threshold is changed from `150` to `160`.
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
     * Modifies a quota alert rule.
     *
     * @remarks
     *   The quota alerting feature has been upgraded and this API operation will be deprecated. If you want to modify the information about a specific quota alert rule of the new version, call the CloudMonitor API operation [PutResourceMetricRules](https://help.aliyun.com/document_detail/2513316.html) or [PutMetricRuleTargets](https://help.aliyun.com/document_detail/2513302.html). For more information about how to call API operations to manage quota alert rules of the new version, see [Manage quota alerts of the new version by calling API operations](https://help.aliyun.com/document_detail/2863234.html).
     * *   In this example, the API operation is called to modify the information about a quota alert rule whose ID is `a2efa7fc-832f-47bb-8054-39e28012****` and whose name is `rules`. The alert threshold is changed from `150` to `160`.
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
