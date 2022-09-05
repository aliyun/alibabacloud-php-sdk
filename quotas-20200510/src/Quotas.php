<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaApplicationResponse;
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
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyQuotaTemplateServiceStatusRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyQuotaTemplateServiceStatusResponse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyTemplateQuotaItemRequest;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ModifyTemplateQuotaItemResponse;
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
     * @param CreateQuotaAlarmRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateQuotaAlarmResponse
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
     * @param CreateQuotaApplicationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateQuotaApplicationResponse
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
        if (!Utils::isUnset($request->envLanguage)) {
            $body['EnvLanguage'] = $request->envLanguage;
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
     * @param CreateTemplateQuotaItemRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateTemplateQuotaItemResponse
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
        if (!Utils::isUnset($request->envLanguage)) {
            $body['EnvLanguage'] = $request->envLanguage;
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
     * @param DeleteQuotaAlarmRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteQuotaAlarmResponse
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
     * @param DeleteTemplateQuotaItemRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteTemplateQuotaItemResponse
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
     * @param GetProductQuotaRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetProductQuotaResponse
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
     * @param GetProductQuotaDimensionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetProductQuotaDimensionResponse
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
     * @param GetQuotaAlarmRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetQuotaAlarmResponse
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
     * @param GetQuotaApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetQuotaApplicationResponse
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
     * @param GetQuotaTemplateServiceStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetQuotaTemplateServiceStatusResponse
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
     * @param ListAlarmHistoriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAlarmHistoriesResponse
     */
    public function listAlarmHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
     * @param ListDependentQuotasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDependentQuotasResponse
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
     * @param ListProductDimensionGroupsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListProductDimensionGroupsResponse
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
     * @param ListProductQuotaDimensionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListProductQuotaDimensionsResponse
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
     * @param ListProductQuotasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListProductQuotasResponse
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
     * @param ListProductsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
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
     * @param ListQuotaAlarmsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListQuotaAlarmsResponse
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
     * @param ListQuotaApplicationTemplatesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListQuotaApplicationTemplatesResponse
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
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
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
     * @param ListQuotaApplicationsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListQuotaApplicationsResponse
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
     * @param ModifyQuotaTemplateServiceStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyQuotaTemplateServiceStatusResponse
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
     * @param ModifyTemplateQuotaItemRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyTemplateQuotaItemResponse
     */
    public function modifyTemplateQuotaItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->desireValue)) {
            $body['DesireValue'] = $request->desireValue;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $body['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->envLanguage)) {
            $body['EnvLanguage'] = $request->envLanguage;
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
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param UpdateQuotaAlarmRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateQuotaAlarmResponse
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
