<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary The value of the quota dimension.
     * The value range of N varies based on the number of dimensions that are supported by the related Alibaba Cloud service.
     * > This parameter is required if you set the ProductCode parameter to ecs, ecs-spec, actiontrail, or ess.
     *  *
     * @description The ID of the alert.
     *  *
     * @param CreateQuotaAlarmRequest $request CreateQuotaAlarmRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQuotaAlarmResponse CreateQuotaAlarmResponse
     */
    public function createQuotaAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmName)) {
            $body['AlarmName'] = $request->alarmName;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaDimensions)) {
            $body['QuotaDimensions'] = $request->quotaDimensions;
        }
        if (!Utils::isUnset($request->threshold)) {
            $body['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->thresholdPercent)) {
            $body['ThresholdPercent'] = $request->thresholdPercent;
        }
        if (!Utils::isUnset($request->thresholdType)) {
            $body['ThresholdType'] = $request->thresholdType;
        }
        if (!Utils::isUnset($request->webHook)) {
            $body['WebHook'] = $request->webHook;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQuotaAlarm',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQuotaAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The value of the quota dimension.
     * The value range of N varies based on the number of dimensions that are supported by the related Alibaba Cloud service.
     * > This parameter is required if you set the ProductCode parameter to ecs, ecs-spec, actiontrail, or ess.
     *  *
     * @description The ID of the alert.
     *  *
     * @param CreateQuotaAlarmRequest $request CreateQuotaAlarmRequest
     *
     * @return CreateQuotaAlarmResponse CreateQuotaAlarmResponse
     */
    public function createQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQuotaAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary Submits an application to increase a quota.
     *  *
     * @description In this example, the operation is called to submit an application to increase the value of a quota whose ID is `q_security-groups` and whose name is Maximum Number of Security Groups. The quota belongs to Elastic Compute Service (ECS). The expected value of the quota is `804`, the application reason is `Scale Out`, and the ID of the region to which the quota belongs is `cn-hangzhou`.
     *  *
     * @param CreateQuotaApplicationRequest $request CreateQuotaApplicationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQuotaApplicationResponse CreateQuotaApplicationResponse
     */
    public function createQuotaApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->auditMode)) {
            $body['AuditMode'] = $request->auditMode;
        }
        if (!Utils::isUnset($request->desireValue)) {
            $body['DesireValue'] = $request->desireValue;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $body['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $body['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->envLanguage)) {
            $body['EnvLanguage'] = $request->envLanguage;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $body['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->noticeType)) {
            $body['NoticeType'] = $request->noticeType;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaCategory)) {
            $body['QuotaCategory'] = $request->quotaCategory;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQuotaApplication',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQuotaApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits an application to increase a quota.
     *  *
     * @description In this example, the operation is called to submit an application to increase the value of a quota whose ID is `q_security-groups` and whose name is Maximum Number of Security Groups. The quota belongs to Elastic Compute Service (ECS). The expected value of the quota is `804`, the application reason is `Scale Out`, and the ID of the region to which the quota belongs is `cn-hangzhou`.
     *  *
     * @param CreateQuotaApplicationRequest $request CreateQuotaApplicationRequest
     *
     * @return CreateQuotaApplicationResponse CreateQuotaApplicationResponse
     */
    public function createQuotaApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQuotaApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a quota increase application. After you add a quota item to a quota template, the system automatically submits quota applications only for new members in the resource directory. The quota values for existing members remain unchanged. If you want to increase the quota values of existing members, you can submit a quota application for the members by applying quota templates to the members.
     *  *
     * @description ### [](#)QPS limit
     * You can add a maximum of 10 quota items to a quota template at a time.
     *  *
     * @param CreateQuotaApplicationsForTemplateRequest $request CreateQuotaApplicationsForTemplateRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQuotaApplicationsForTemplateResponse CreateQuotaApplicationsForTemplateResponse
     */
    public function createQuotaApplicationsForTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliyunUids)) {
            $body['AliyunUids'] = $request->aliyunUids;
        }
        if (!Utils::isUnset($request->desireValue)) {
            $body['DesireValue'] = $request->desireValue;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $body['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $body['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->envLanguage)) {
            $body['EnvLanguage'] = $request->envLanguage;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $body['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->noticeType)) {
            $body['NoticeType'] = $request->noticeType;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaCategory)) {
            $body['QuotaCategory'] = $request->quotaCategory;
        }
        if (!Utils::isUnset($request->reason)) {
            $body['Reason'] = $request->reason;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQuotaApplicationsForTemplate',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQuotaApplicationsForTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits a quota increase application. After you add a quota item to a quota template, the system automatically submits quota applications only for new members in the resource directory. The quota values for existing members remain unchanged. If you want to increase the quota values of existing members, you can submit a quota application for the members by applying quota templates to the members.
     *  *
     * @description ### [](#)QPS limit
     * You can add a maximum of 10 quota items to a quota template at a time.
     *  *
     * @param CreateQuotaApplicationsForTemplateRequest $request CreateQuotaApplicationsForTemplateRequest
     *
     * @return CreateQuotaApplicationsForTemplateResponse CreateQuotaApplicationsForTemplateResponse
     */
    public function createQuotaApplicationsForTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQuotaApplicationsForTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a quota template by using the management account of a resource directory. After you create a quota template, if a member is added to the resource directory, the quota template automatically submits a quota increase request for the member. The quota values for existing members remain unchanged. You can use a quota template to apply for increases on multiple quotas at the same time. This automated approach improves the efficiency of quota management across your organization.
     *  *
     * @description ### [](#)Prerequisites
     * You must set the `ServiceStatus` parameter to `1`. This ensures that the quota template is enabled.
     * You can call the [GetQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450407.html) operation to query the status of a quota template. If the `ServiceStatus` parameter is set to `0` or `-1`, you must call the [ModifyQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450406.html) operation to set the ServiceStatus parameter to `1`.
     *  *
     * @param CreateTemplateQuotaItemRequest $request CreateTemplateQuotaItemRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTemplateQuotaItemResponse CreateTemplateQuotaItemResponse
     */
    public function createTemplateQuotaItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->desireValue)) {
            $body['DesireValue'] = $request->desireValue;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $body['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $body['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->envLanguage)) {
            $body['EnvLanguage'] = $request->envLanguage;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $body['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->noticeType)) {
            $body['NoticeType'] = $request->noticeType;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaCategory)) {
            $body['QuotaCategory'] = $request->quotaCategory;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplateQuotaItem',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateQuotaItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a quota template by using the management account of a resource directory. After you create a quota template, if a member is added to the resource directory, the quota template automatically submits a quota increase request for the member. The quota values for existing members remain unchanged. You can use a quota template to apply for increases on multiple quotas at the same time. This automated approach improves the efficiency of quota management across your organization.
     *  *
     * @description ### [](#)Prerequisites
     * You must set the `ServiceStatus` parameter to `1`. This ensures that the quota template is enabled.
     * You can call the [GetQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450407.html) operation to query the status of a quota template. If the `ServiceStatus` parameter is set to `0` or `-1`, you must call the [ModifyQuotaTemplateServiceStatus](https://help.aliyun.com/document_detail/450406.html) operation to set the ServiceStatus parameter to `1`.
     *  *
     * @param CreateTemplateQuotaItemRequest $request CreateTemplateQuotaItemRequest
     *
     * @return CreateTemplateQuotaItemResponse CreateTemplateQuotaItemResponse
     */
    public function createTemplateQuotaItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateQuotaItemWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a quota alert.
     *  *
     * @description In this example, the operation is called to delete a quota alert whose ID is `6b512ab7-da3a-4142-b529-2b2a9294****`.
     *  *
     * @param DeleteQuotaAlarmRequest $request DeleteQuotaAlarmRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteQuotaAlarmResponse DeleteQuotaAlarmResponse
     */
    public function deleteQuotaAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmId)) {
            $body['AlarmId'] = $request->alarmId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteQuotaAlarm',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQuotaAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a quota alert.
     *  *
     * @description In this example, the operation is called to delete a quota alert whose ID is `6b512ab7-da3a-4142-b529-2b2a9294****`.
     *  *
     * @param DeleteQuotaAlarmRequest $request DeleteQuotaAlarmRequest
     *
     * @return DeleteQuotaAlarmResponse DeleteQuotaAlarmResponse
     */
    public function deleteQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQuotaAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a quota template by using the management account of a resource directory. After you delete a quota template, if a member is added to the resource directory, the quota template no longer automatically submits a quota increase request for the member.
     *  *
     * @param DeleteTemplateQuotaItemRequest $request DeleteTemplateQuotaItemRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateQuotaItemResponse DeleteTemplateQuotaItemResponse
     */
    public function deleteTemplateQuotaItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplateQuotaItem',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateQuotaItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a quota template by using the management account of a resource directory. After you delete a quota template, if a member is added to the resource directory, the quota template no longer automatically submits a quota increase request for the member.
     *  *
     * @param DeleteTemplateQuotaItemRequest $request DeleteTemplateQuotaItemRequest
     *
     * @return DeleteTemplateQuotaItemResponse DeleteTemplateQuotaItemResponse
     */
    public function deleteTemplateQuotaItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateQuotaItemWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the specified quota.
     *  *
     * @description In this example, the operation is called to query the details of a quota whose ID is `q_security-groups` and whose name is Maximum Number of Security Groups. This quota belongs to Elastic Compute Service (ECS). The query result shows the details of the quota. The details include the name, ID, description, quota value, used quota, unit, and dimension of the quota. In this example, the quota name is `Maximum Number of Security Groups`. The quota ID is `q_security-groups`. The description is `The maximum number of security groups that can be created for the current account`. The quota value is `801`. The used quota is `26`. The quota unit is `Number of security groups`. The quota dimension is `{"regionId":"cn-hangzhou"}`.
     *  *
     * @param GetProductQuotaRequest $request GetProductQuotaRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProductQuotaResponse GetProductQuotaResponse
     */
    public function getProductQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dimensions)) {
            $body['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProductQuota',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProductQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the specified quota.
     *  *
     * @description In this example, the operation is called to query the details of a quota whose ID is `q_security-groups` and whose name is Maximum Number of Security Groups. This quota belongs to Elastic Compute Service (ECS). The query result shows the details of the quota. The details include the name, ID, description, quota value, used quota, unit, and dimension of the quota. In this example, the quota name is `Maximum Number of Security Groups`. The quota ID is `q_security-groups`. The description is `The maximum number of security groups that can be created for the current account`. The quota value is `801`. The used quota is `26`. The quota unit is `Number of security groups`. The quota dimension is `{"regionId":"cn-hangzhou"}`.
     *  *
     * @param GetProductQuotaRequest $request GetProductQuotaRequest
     *
     * @return GetProductQuotaResponse GetProductQuotaResponse
     */
    public function getProductQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a quota dimension that is supported by an Alibaba Cloud service.
     *  *
     * @description In this example, the operation is called to query the details of a quota dimension whose key is `regionId`. The quota dimension belongs to Elastic Compute Service (ECS) Quotas by Instance Type whose service code is ecs-spec. The following query results are returned:
     * *   The values of the quota dimension include `cn-shenzhen`, `cn-beijing`, and `cn-hangzhou`.
     * *   The name of the quota dimension is `region`.
     *  *
     * @param GetProductQuotaDimensionRequest $request GetProductQuotaDimensionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProductQuotaDimensionResponse GetProductQuotaDimensionResponse
     */
    public function getProductQuotaDimensionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dependentDimensions)) {
            $body['DependentDimensions'] = $request->dependentDimensions;
        }
        if (!Utils::isUnset($request->dimensionKey)) {
            $body['DimensionKey'] = $request->dimensionKey;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProductQuotaDimension',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProductQuotaDimensionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a quota dimension that is supported by an Alibaba Cloud service.
     *  *
     * @description In this example, the operation is called to query the details of a quota dimension whose key is `regionId`. The quota dimension belongs to Elastic Compute Service (ECS) Quotas by Instance Type whose service code is ecs-spec. The following query results are returned:
     * *   The values of the quota dimension include `cn-shenzhen`, `cn-beijing`, and `cn-hangzhou`.
     * *   The name of the quota dimension is `region`.
     *  *
     * @param GetProductQuotaDimensionRequest $request GetProductQuotaDimensionRequest
     *
     * @return GetProductQuotaDimensionResponse GetProductQuotaDimensionResponse
     */
    public function getProductQuotaDimension($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductQuotaDimensionWithOptions($request, $runtime);
    }

    /**
     * @summary In this example, the operation is called to query the details of a quota alert. The details of the alert are returned. The query results include the alert ID, alert name, alert contact, and time when the quota alert was created.
     *  *
     * @description In this example, the operation is called to query the details of a quota alert whose ID is `78d7e436-4b25-4897-84b5-d7b656bb****`. The details of the alert are returned. The query result includes the alert ID, alert name, alert contact, and the time when the quota alert was created.
     *  *
     * @param GetQuotaAlarmRequest $request GetQuotaAlarmRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQuotaAlarmResponse GetQuotaAlarmResponse
     */
    public function getQuotaAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmId)) {
            $body['AlarmId'] = $request->alarmId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQuotaAlarm',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQuotaAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary In this example, the operation is called to query the details of a quota alert. The details of the alert are returned. The query results include the alert ID, alert name, alert contact, and time when the quota alert was created.
     *  *
     * @description In this example, the operation is called to query the details of a quota alert whose ID is `78d7e436-4b25-4897-84b5-d7b656bb****`. The details of the alert are returned. The query result includes the alert ID, alert name, alert contact, and the time when the quota alert was created.
     *  *
     * @param GetQuotaAlarmRequest $request GetQuotaAlarmRequest
     *
     * @return GetQuotaAlarmResponse GetQuotaAlarmResponse
     */
    public function getQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a specified application that is submitted to increase a quota.
     *  *
     * @description In this example, the operation is called to query the details about an application whose ID is `d314d6ae-867d-484c-9009-3d421a80****`. The query result shows the details about the application. The details include the application ID, application time, expected quota value, and application result.
     *  *
     * @param GetQuotaApplicationRequest $request GetQuotaApplicationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQuotaApplicationResponse GetQuotaApplicationResponse
     */
    public function getQuotaApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQuotaApplication',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQuotaApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a specified application that is submitted to increase a quota.
     *  *
     * @description In this example, the operation is called to query the details about an application whose ID is `d314d6ae-867d-484c-9009-3d421a80****`. The query result shows the details about the application. The details include the application ID, application time, expected quota value, and application result.
     *  *
     * @param GetQuotaApplicationRequest $request GetQuotaApplicationRequest
     *
     * @return GetQuotaApplicationResponse GetQuotaApplicationResponse
     */
    public function getQuotaApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about quota application approval, such as the average amount of time required for approval, whether approval reminders are supported, and the interval between two consecutive approval reminders.
     *  *
     * @description ### [](#)Prerequisites
     * Make sure that you have created an application for quota increase. For more information, see [CreateQuotaApplication](https://help.aliyun.com/document_detail/440566.html).
     *  *
     * @param GetQuotaApplicationApprovalRequest $request GetQuotaApplicationApprovalRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQuotaApplicationApprovalResponse GetQuotaApplicationApprovalResponse
     */
    public function getQuotaApplicationApprovalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQuotaApplicationApproval',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQuotaApplicationApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about quota application approval, such as the average amount of time required for approval, whether approval reminders are supported, and the interval between two consecutive approval reminders.
     *  *
     * @description ### [](#)Prerequisites
     * Make sure that you have created an application for quota increase. For more information, see [CreateQuotaApplication](https://help.aliyun.com/document_detail/440566.html).
     *  *
     * @param GetQuotaApplicationApprovalRequest $request GetQuotaApplicationApprovalRequest
     *
     * @return GetQuotaApplicationApprovalResponse GetQuotaApplicationApprovalResponse
     */
    public function getQuotaApplicationApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaApplicationApprovalWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a quota template.
     *  *
     * @param GetQuotaTemplateServiceStatusRequest $request GetQuotaTemplateServiceStatusRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQuotaTemplateServiceStatusResponse GetQuotaTemplateServiceStatusResponse
     */
    public function getQuotaTemplateServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceDirectoryId)) {
            $body['ResourceDirectoryId'] = $request->resourceDirectoryId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQuotaTemplateServiceStatus',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQuotaTemplateServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a quota template.
     *  *
     * @param GetQuotaTemplateServiceStatusRequest $request GetQuotaTemplateServiceStatusRequest
     *
     * @return GetQuotaTemplateServiceStatusResponse GetQuotaTemplateServiceStatusResponse
     */
    public function getQuotaTemplateServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaTemplateServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alert records.
     *  *
     * @param ListAlarmHistoriesRequest $request ListAlarmHistoriesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlarmHistoriesResponse ListAlarmHistoriesResponse
     */
    public function listAlarmHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmId)) {
            $body['AlarmId'] = $request->alarmId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAlarmHistories',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAlarmHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the alert records.
     *  *
     * @param ListAlarmHistoriesRequest $request ListAlarmHistoriesRequest
     *
     * @return ListAlarmHistoriesResponse ListAlarmHistoriesResponse
     */
    public function listAlarmHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmHistoriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the quotas on which a specified quota depends.
     *  *
     * @description In this example, the operation is called to query the quotas on which a Container Service for Kubernetes (ACK) quota whose ID is `q_i5uzm3` depends. This quota is the maximum number of nodes that can be created in an ACK cluster. The query result indicates that the specified quota depends on the following three quotas:
     * *   An Elastic Compute Service (ECS) quota whose ID is `q_elastic-network-interfaces`. This quota is the maximum number of ENIs (Secondary ENIs) that can be owned by an Alibaba Cloud account. The quota is available in the following regions: `cn-shenzhen`, `cn-beijing`, and `cn-hangzhou`.
     * *   A Server Load Balancer (SLB) quota whose ID is `q_fh20b0`. This quota is the number of servers that can be attached to the backend of an SLB instance.
     * *   An SLB quota whose ID is `q_3mmbsp`. This quota is the number of SLB instances that can be owned by an Alibaba Cloud account.
     *  *
     * @param ListDependentQuotasRequest $request ListDependentQuotasRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDependentQuotasResponse ListDependentQuotasResponse
     */
    public function listDependentQuotasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDependentQuotas',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDependentQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the quotas on which a specified quota depends.
     *  *
     * @description In this example, the operation is called to query the quotas on which a Container Service for Kubernetes (ACK) quota whose ID is `q_i5uzm3` depends. This quota is the maximum number of nodes that can be created in an ACK cluster. The query result indicates that the specified quota depends on the following three quotas:
     * *   An Elastic Compute Service (ECS) quota whose ID is `q_elastic-network-interfaces`. This quota is the maximum number of ENIs (Secondary ENIs) that can be owned by an Alibaba Cloud account. The quota is available in the following regions: `cn-shenzhen`, `cn-beijing`, and `cn-hangzhou`.
     * *   A Server Load Balancer (SLB) quota whose ID is `q_fh20b0`. This quota is the number of servers that can be attached to the backend of an SLB instance.
     * *   An SLB quota whose ID is `q_3mmbsp`. This quota is the number of SLB instances that can be owned by an Alibaba Cloud account.
     *  *
     * @param ListDependentQuotasRequest $request ListDependentQuotasRequest
     *
     * @return ListDependentQuotasResponse ListDependentQuotasResponse
     */
    public function listDependentQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDependentQuotasWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the dimension groups of an Alibaba Cloud service.
     *  *
     * @description This topic provides an example on how to call the ListProductDimensionGroups operation to query the dimension groups of Object Storage Service (OSS). In this example, a dimension group is returned. The group name is `OSS_Group`, the group code is `oss_wf1ngqmd7q`, and the group key is `chargeType`.
     *  *
     * @param ListProductDimensionGroupsRequest $request ListProductDimensionGroupsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductDimensionGroupsResponse ListProductDimensionGroupsResponse
     */
    public function listProductDimensionGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductDimensionGroups',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductDimensionGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the dimension groups of an Alibaba Cloud service.
     *  *
     * @description This topic provides an example on how to call the ListProductDimensionGroups operation to query the dimension groups of Object Storage Service (OSS). In this example, a dimension group is returned. The group name is `OSS_Group`, the group code is `oss_wf1ngqmd7q`, and the group key is `chargeType`.
     *  *
     * @param ListProductDimensionGroupsRequest $request ListProductDimensionGroupsRequest
     *
     * @return ListProductDimensionGroupsResponse ListProductDimensionGroupsResponse
     */
    public function listProductDimensionGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductDimensionGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the quota dimensions that are supported by the specified Alibaba Cloud service.
     *  *
     * @description In this example, the operation is called to query the quota dimensions that are supported by Elastic Compute Service (ECS). The query results show all the quota dimensions that are supported by ECS.
     *  *
     * @param ListProductQuotaDimensionsRequest $request ListProductQuotaDimensionsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductQuotaDimensionsResponse ListProductQuotaDimensionsResponse
     */
    public function listProductQuotaDimensionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaCategory)) {
            $body['QuotaCategory'] = $request->quotaCategory;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProductQuotaDimensions',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductQuotaDimensionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the quota dimensions that are supported by the specified Alibaba Cloud service.
     *  *
     * @description In this example, the operation is called to query the quota dimensions that are supported by Elastic Compute Service (ECS). The query results show all the quota dimensions that are supported by ECS.
     *  *
     * @param ListProductQuotaDimensionsRequest $request ListProductQuotaDimensionsRequest
     *
     * @return ListProductQuotaDimensionsResponse ListProductQuotaDimensionsResponse
     */
    public function listProductQuotaDimensions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductQuotaDimensionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the quotas of a specific Alibaba Cloud service.
     *  *
     * @description In this example, the operation is called to query the quotas whose instance type is `ecs.g5.2xlarge`. The quotas belong to Elastic Compute Service (ECS) Quotas by Instance Type. The query result includes the name, ID, unit, dimensions, and cycle of each quota.
     *  *
     * @param ListProductQuotasRequest $request ListProductQuotasRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductQuotasResponse ListProductQuotasResponse
     */
    public function listProductQuotasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dimensions)) {
            $body['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->groupCode)) {
            $body['GroupCode'] = $request->groupCode;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $body['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaCategory)) {
            $body['QuotaCategory'] = $request->quotaCategory;
        }
        if (!Utils::isUnset($request->sortField)) {
            $body['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProductQuotas',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the quotas of a specific Alibaba Cloud service.
     *  *
     * @description In this example, the operation is called to query the quotas whose instance type is `ecs.g5.2xlarge`. The quotas belong to Elastic Compute Service (ECS) Quotas by Instance Type. The query result includes the name, ID, unit, dimensions, and cycle of each quota.
     *  *
     * @param ListProductQuotasRequest $request ListProductQuotasRequest
     *
     * @return ListProductQuotasResponse ListProductQuotasResponse
     */
    public function listProductQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductQuotasWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Alibaba Cloud services that support Quota Center.
     *  *
     * @description The services in the query result are the same as the services listed in [Alibaba Cloud services that support Quota Center](https://help.aliyun.com/document_detail/182368.html).
     *  *
     * @param ListProductsRequest $request ListProductsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductsResponse ListProductsResponse
     */
    public function listProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProducts',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Alibaba Cloud services that support Quota Center.
     *  *
     * @description The services in the query result are the same as the services listed in [Alibaba Cloud services that support Quota Center](https://help.aliyun.com/document_detail/182368.html).
     *  *
     * @param ListProductsRequest $request ListProductsRequest
     *
     * @return ListProductsResponse ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries quota alerts.
     *  *
     * @param ListQuotaAlarmsRequest $request ListQuotaAlarmsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuotaAlarmsResponse ListQuotaAlarmsResponse
     */
    public function listQuotaAlarmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmName)) {
            $body['AlarmName'] = $request->alarmName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaDimensions)) {
            $body['QuotaDimensions'] = $request->quotaDimensions;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListQuotaAlarms',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQuotaAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries quota alerts.
     *  *
     * @param ListQuotaAlarmsRequest $request ListQuotaAlarmsRequest
     *
     * @return ListQuotaAlarmsResponse ListQuotaAlarmsResponse
     */
    public function listQuotaAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaAlarmsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries quota templates by using the management account of a resource directory.
     *  *
     * @param ListQuotaApplicationTemplatesRequest $request ListQuotaApplicationTemplatesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuotaApplicationTemplatesResponse ListQuotaApplicationTemplatesResponse
     */
    public function listQuotaApplicationTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $body = [];
        if (!Utils::isUnset($request->dimensions)) {
            $body['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaCategory)) {
            $body['QuotaCategory'] = $request->quotaCategory;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListQuotaApplicationTemplates',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQuotaApplicationTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries quota templates by using the management account of a resource directory.
     *  *
     * @param ListQuotaApplicationTemplatesRequest $request ListQuotaApplicationTemplatesRequest
     *
     * @return ListQuotaApplicationTemplatesResponse ListQuotaApplicationTemplatesResponse
     */
    public function listQuotaApplicationTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaApplicationTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an application that is submitted to increase a quota.
     *  *
     * @description In this example, the operation is called to query the details of an application that is submitted to increase a quota whose ID is `q_i5uzm3` and whose name is Maximum Number of Nodes. This quota belongs to Container Service for Kubernetes (ACK). The query result shows the details of the application. The details include the application ID, application time, requested quota, and application result. In this example, the application ID is `b926571d-cc09-4711-b547-58a615f0****`. The application time is `2021-01-15T09:13:53Z`. The expected quota value is `101`. The application result is `Agree`.
     *  *
     * @param ListQuotaApplicationsRequest $request ListQuotaApplicationsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuotaApplicationsResponse ListQuotaApplicationsResponse
     */
    public function listQuotaApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dimensions)) {
            $body['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $body['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaCategory)) {
            $body['QuotaCategory'] = $request->quotaCategory;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListQuotaApplications',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQuotaApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an application that is submitted to increase a quota.
     *  *
     * @description In this example, the operation is called to query the details of an application that is submitted to increase a quota whose ID is `q_i5uzm3` and whose name is Maximum Number of Nodes. This quota belongs to Container Service for Kubernetes (ACK). The query result shows the details of the application. The details include the application ID, application time, requested quota, and application result. In this example, the application ID is `b926571d-cc09-4711-b547-58a615f0****`. The application time is `2021-01-15T09:13:53Z`. The expected quota value is `101`. The application result is `Agree`.
     *  *
     * @param ListQuotaApplicationsRequest $request ListQuotaApplicationsRequest
     *
     * @return ListQuotaApplicationsResponse ListQuotaApplicationsResponse
     */
    public function listQuotaApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaApplicationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a quota increase application for member accounts in a resource directory.
     *  *
     * @param ListQuotaApplicationsDetailForTemplateRequest $request ListQuotaApplicationsDetailForTemplateRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuotaApplicationsDetailForTemplateResponse ListQuotaApplicationsDetailForTemplateResponse
     */
    public function listQuotaApplicationsDetailForTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliyunUid)) {
            $body['AliyunUid'] = $request->aliyunUid;
        }
        if (!Utils::isUnset($request->batchQuotaApplicationId)) {
            $body['BatchQuotaApplicationId'] = $request->batchQuotaApplicationId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaCategory)) {
            $body['QuotaCategory'] = $request->quotaCategory;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListQuotaApplicationsDetailForTemplate',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQuotaApplicationsDetailForTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a quota increase application for member accounts in a resource directory.
     *  *
     * @param ListQuotaApplicationsDetailForTemplateRequest $request ListQuotaApplicationsDetailForTemplateRequest
     *
     * @return ListQuotaApplicationsDetailForTemplateResponse ListQuotaApplicationsDetailForTemplateResponse
     */
    public function listQuotaApplicationsDetailForTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaApplicationsDetailForTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the application records of a quota template that is used to apply for quotas for member accounts.
     *  *
     * @param ListQuotaApplicationsForTemplateRequest $request ListQuotaApplicationsForTemplateRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuotaApplicationsForTemplateResponse ListQuotaApplicationsForTemplateResponse
     */
    public function listQuotaApplicationsForTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applyEndTime)) {
            $body['ApplyEndTime'] = $request->applyEndTime;
        }
        if (!Utils::isUnset($request->applyStartTime)) {
            $body['ApplyStartTime'] = $request->applyStartTime;
        }
        if (!Utils::isUnset($request->batchQuotaApplicationId)) {
            $body['BatchQuotaApplicationId'] = $request->batchQuotaApplicationId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        if (!Utils::isUnset($request->quotaCategory)) {
            $body['QuotaCategory'] = $request->quotaCategory;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListQuotaApplicationsForTemplate',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQuotaApplicationsForTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the application records of a quota template that is used to apply for quotas for member accounts.
     *  *
     * @param ListQuotaApplicationsForTemplateRequest $request ListQuotaApplicationsForTemplateRequest
     *
     * @return ListQuotaApplicationsForTemplateResponse ListQuotaApplicationsForTemplateResponse
     */
    public function listQuotaApplicationsForTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuotaApplicationsForTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the status of a quota template. By default, the quota template is not configured. If the management account of a resource directory uses a quota template for the first time, you must enable the quota template.
     *  *
     * @description ### [](#)Prerequisites
     * A resource directory is enabled. For more information, see [EnableResourceDirectory](https://help.aliyun.com/document_detail/604185.html).
     * ### [](#)Usage notes
     * If the `ServiceStatus` parameter is set to `0` or `-1`, you can call this operation to set the parameter to `1`. Then, you can call the [CreateTemplateQuotaItem](https://help.aliyun.com/document_detail/450615.html) operation to create a quota template.
     *  *
     * @param ModifyQuotaTemplateServiceStatusRequest $request ModifyQuotaTemplateServiceStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyQuotaTemplateServiceStatusResponse ModifyQuotaTemplateServiceStatusResponse
     */
    public function modifyQuotaTemplateServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceStatus)) {
            $body['ServiceStatus'] = $request->serviceStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyQuotaTemplateServiceStatus',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyQuotaTemplateServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the status of a quota template. By default, the quota template is not configured. If the management account of a resource directory uses a quota template for the first time, you must enable the quota template.
     *  *
     * @description ### [](#)Prerequisites
     * A resource directory is enabled. For more information, see [EnableResourceDirectory](https://help.aliyun.com/document_detail/604185.html).
     * ### [](#)Usage notes
     * If the `ServiceStatus` parameter is set to `0` or `-1`, you can call this operation to set the parameter to `1`. Then, you can call the [CreateTemplateQuotaItem](https://help.aliyun.com/document_detail/450615.html) operation to create a quota template.
     *  *
     * @param ModifyQuotaTemplateServiceStatusRequest $request ModifyQuotaTemplateServiceStatusRequest
     *
     * @return ModifyQuotaTemplateServiceStatusResponse ModifyQuotaTemplateServiceStatusResponse
     */
    public function modifyQuotaTemplateServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyQuotaTemplateServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the quota template.
     *  *
     * @param ModifyTemplateQuotaItemRequest $request ModifyTemplateQuotaItemRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTemplateQuotaItemResponse ModifyTemplateQuotaItemResponse
     */
    public function modifyTemplateQuotaItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->quotaCategory)) {
            $query['QuotaCategory'] = $request->quotaCategory;
        }
        $body = [];
        if (!Utils::isUnset($request->desireValue)) {
            $body['DesireValue'] = $request->desireValue;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $body['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $body['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->envLanguage)) {
            $body['EnvLanguage'] = $request->envLanguage;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $body['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->noticeType)) {
            $body['NoticeType'] = $request->noticeType;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->quotaActionCode)) {
            $body['QuotaActionCode'] = $request->quotaActionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTemplateQuotaItem',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTemplateQuotaItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the quota template.
     *  *
     * @param ModifyTemplateQuotaItemRequest $request ModifyTemplateQuotaItemRequest
     *
     * @return ModifyTemplateQuotaItemResponse ModifyTemplateQuotaItemResponse
     */
    public function modifyTemplateQuotaItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateQuotaItemWithOptions($request, $runtime);
    }

    /**
     * @summary Reminds the approver of a quota application to review the application. This operation is applicable to quota applications that support the approval reminding feature.
     *  *
     * @description >  You can call this operation to enable the approval reminder feature for quota applications that support this feature. To check whether this feature is supported, you can view the value of `SupportReminder` in the GetQuotaApplicationApproval operation. If the value of SupportReminder is `true`, this feature is supported.
     *  *
     * @param RemindQuotaApplicationApprovalRequest $request RemindQuotaApplicationApprovalRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return RemindQuotaApplicationApprovalResponse RemindQuotaApplicationApprovalResponse
     */
    public function remindQuotaApplicationApprovalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemindQuotaApplicationApproval',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemindQuotaApplicationApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Reminds the approver of a quota application to review the application. This operation is applicable to quota applications that support the approval reminding feature.
     *  *
     * @description >  You can call this operation to enable the approval reminder feature for quota applications that support this feature. To check whether this feature is supported, you can view the value of `SupportReminder` in the GetQuotaApplicationApproval operation. If the value of SupportReminder is `true`, this feature is supported.
     *  *
     * @param RemindQuotaApplicationApprovalRequest $request RemindQuotaApplicationApprovalRequest
     *
     * @return RemindQuotaApplicationApprovalResponse RemindQuotaApplicationApprovalResponse
     */
    public function remindQuotaApplicationApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->remindQuotaApplicationApprovalWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a quota alert rule.
     *  *
     * @description In this example, the operation is called to modify the information about a quota alert whose ID is `a2efa7fc-832f-47bb-8054-39e28012****` and whose name is `rules`. The alert threshold is changed from `150` to `160`.
     *  *
     * @param UpdateQuotaAlarmRequest $request UpdateQuotaAlarmRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateQuotaAlarmResponse UpdateQuotaAlarmResponse
     */
    public function updateQuotaAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmId)) {
            $body['AlarmId'] = $request->alarmId;
        }
        if (!Utils::isUnset($request->alarmName)) {
            $body['AlarmName'] = $request->alarmName;
        }
        if (!Utils::isUnset($request->threshold)) {
            $body['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->thresholdPercent)) {
            $body['ThresholdPercent'] = $request->thresholdPercent;
        }
        if (!Utils::isUnset($request->thresholdType)) {
            $body['ThresholdType'] = $request->thresholdType;
        }
        if (!Utils::isUnset($request->webHook)) {
            $body['WebHook'] = $request->webHook;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateQuotaAlarm',
            'version'     => '2020-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateQuotaAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a quota alert rule.
     *  *
     * @description In this example, the operation is called to modify the information about a quota alert whose ID is `a2efa7fc-832f-47bb-8054-39e28012****` and whose name is `rules`. The alert threshold is changed from `150` to `160`.
     *  *
     * @param UpdateQuotaAlarmRequest $request UpdateQuotaAlarmRequest
     *
     * @return UpdateQuotaAlarmResponse UpdateQuotaAlarmResponse
     */
    public function updateQuotaAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQuotaAlarmWithOptions($request, $runtime);
    }
}
