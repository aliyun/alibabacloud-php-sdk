<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CheckUpgradeItemRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CheckUpgradeItemResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataSetRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataSetResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDataSourceShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDetectionRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateDetectionRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateExportTaskRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateExportTaskResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateLogStoreRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateLogStoreResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateNormalizationRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateNormalizationRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateNormalizationRuleShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateNormalizationSchemaRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateNormalizationSchemaResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateProductRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateProductResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateVendorRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateVendorResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDataIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDataIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDataSetRecordRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDataSetRecordResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDataSetRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDataSetResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDetectionRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteDetectionRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteLogStoreRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteLogStoreResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteNormalizationRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteNormalizationRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteNormalizationRuleVersionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteNormalizationRuleVersionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteProductRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteProductResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteVendorRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteVendorResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DisableDataIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DisableDataIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\EnableDataIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\EnableDataIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteLogQueryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteLogQueryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteUpgradeRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteUpgradeResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataBatchIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataBatchIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDetectionStatisticRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDetectionStatisticResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetExportTaskRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetExportTaskResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetIncidentRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetIncidentResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetLogTicketRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetLogTicketResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationRuleVersionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationRuleVersionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationSchemaRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationSchemaResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetUserConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetUserConfigResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataIngestionsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataIngestionsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataIngestionsShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataIngestionTemplatesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataIngestionTemplatesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetRecordsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetRecordsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSetsShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourcesShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourceTemplatesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourceTemplatesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourceTemplatesShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListIncidentsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListIncidentsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListIncidentsShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListLogProjectsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListLogProjectsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListLogRegionsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListLogRegionsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListLogStoresRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListLogStoresResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationCategoriesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationCategoriesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationFieldsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationFieldsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRuleCapacitiesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRuleCapacitiesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRuleCapacitiesShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRulesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRulesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRulesShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRuleVersionsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRuleVersionsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationSchemasRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationSchemasResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListProductsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListProductsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListProductsShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTrafficStatisticsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTrafficStatisticsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTrafficStatisticsShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListUpgradeItemsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListUpgradeItemsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListVendorsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListVendorsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListVendorsShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\RefreshDataSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\RefreshDataSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ResetDataStorageRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ResetDataStorageResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\SetDefaultNormalizationRuleVersionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\SetDefaultNormalizationRuleVersionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataBatchIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataBatchIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataBatchIngestionShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataIngestionTemplateRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataIngestionTemplateResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSetRecordRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSetRecordResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSetRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSetResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSourceTemplateRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSourceTemplateResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataSourceTemplateShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataStorageDeliveryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataStorageDeliveryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataStorageRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataStorageResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataStorageTtlRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataStorageTtlResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDetectionRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDetectionRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateNormalizationRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateNormalizationRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateNormalizationRuleShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateNormalizationSchemaRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateNormalizationSchemaResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateProductRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateProductResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateVendorRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateVendorResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ValidateLogStoreRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ValidateLogStoreResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ValidateNormalizationRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ValidateNormalizationRuleResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudsiem extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloud-siem', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 检查升级项.
     *
     * @param request - CheckUpgradeItemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckUpgradeItemResponse
     *
     * @param CheckUpgradeItemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckUpgradeItemResponse
     */
    public function checkUpgradeItemWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->upgradeItemId) {
            @$body['UpgradeItemId'] = $request->upgradeItemId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckUpgradeItem',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckUpgradeItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查升级项.
     *
     * @param request - CheckUpgradeItemRequest
     *
     * @returns CheckUpgradeItemResponse
     *
     * @param CheckUpgradeItemRequest $request
     *
     * @return CheckUpgradeItemResponse
     */
    public function checkUpgradeItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUpgradeItemWithOptions($request, $runtime);
    }

    /**
     * 创建数据源.
     *
     * @param request - CreateDataIngestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataIngestionResponse
     *
     * @param CreateDataIngestionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDataIngestionResponse
     */
    public function createDataIngestionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->capacityCount) {
            @$body['CapacityCount'] = $request->capacityCount;
        }

        if (null !== $request->dataIngestionMode) {
            @$body['DataIngestionMode'] = $request->dataIngestionMode;
        }

        if (null !== $request->dataIngestionStateCode) {
            @$body['DataIngestionStateCode'] = $request->dataIngestionStateCode;
        }

        if (null !== $request->dataIngestionType) {
            @$body['DataIngestionType'] = $request->dataIngestionType;
        }

        if (null !== $request->dataSourceEditable) {
            @$body['DataSourceEditable'] = $request->dataSourceEditable;
        }

        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationRuleEditable) {
            @$body['NormalizationRuleEditable'] = $request->normalizationRuleEditable;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->scanDataSourceId) {
            @$body['ScanDataSourceId'] = $request->scanDataSourceId;
        }

        if (null !== $request->streamJobId) {
            @$body['StreamJobId'] = $request->streamJobId;
        }

        if (null !== $request->updateTime) {
            @$body['UpdateTime'] = $request->updateTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataIngestion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataIngestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据源.
     *
     * @param request - CreateDataIngestionRequest
     *
     * @returns CreateDataIngestionResponse
     *
     * @param CreateDataIngestionRequest $request
     *
     * @return CreateDataIngestionResponse
     */
    public function createDataIngestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataIngestionWithOptions($request, $runtime);
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataSetResponse
     *
     * @param CreateDataSetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDataSetResponse
     */
    public function createDataSetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSetDescription) {
            @$body['DataSetDescription'] = $request->dataSetDescription;
        }

        if (null !== $request->dataSetFieldKeyName) {
            @$body['DataSetFieldKeyName'] = $request->dataSetFieldKeyName;
        }

        if (null !== $request->dataSetFileName) {
            @$body['DataSetFileName'] = $request->dataSetFileName;
        }

        if (null !== $request->dataSetName) {
            @$body['DataSetName'] = $request->dataSetName;
        }

        if (null !== $request->dataSetStatus) {
            @$body['DataSetStatus'] = $request->dataSetStatus;
        }

        if (null !== $request->dataSetType) {
            @$body['DataSetType'] = $request->dataSetType;
        }

        $bodyFlat = [];
        if (null !== $request->ipWhitelistRecognizers) {
            @$bodyFlat['IpWhitelistRecognizers'] = $request->ipWhitelistRecognizers;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataSet',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDataSetRequest
     *
     * @returns CreateDataSetResponse
     *
     * @param CreateDataSetRequest $request
     *
     * @return CreateDataSetResponse
     */
    public function createDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSetWithOptions($request, $runtime);
    }

    /**
     * 创建数据源.
     *
     * @param tmpReq - CreateDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataSourceResponse
     *
     * @param CreateDataSourceRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDataSourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataSourceIds) {
            $request->dataSourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceIds, 'DataSourceIds', 'json');
        }

        if (null !== $tmpReq->dataSourceReferences) {
            $request->dataSourceReferencesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceReferences, 'DataSourceReferences', 'json');
        }

        $body = [];
        if (null !== $request->dataSourceFrom) {
            @$body['DataSourceFrom'] = $request->dataSourceFrom;
        }

        if (null !== $request->dataSourceIdsShrink) {
            @$body['DataSourceIds'] = $request->dataSourceIdsShrink;
        }

        if (null !== $request->dataSourceName) {
            @$body['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->dataSourceRecognizeEnabled) {
            @$body['DataSourceRecognizeEnabled'] = $request->dataSourceRecognizeEnabled;
        }

        if (null !== $request->dataSourceRecognizer) {
            @$body['DataSourceRecognizer'] = $request->dataSourceRecognizer;
        }

        if (null !== $request->dataSourceReferencesShrink) {
            @$body['DataSourceReferences'] = $request->dataSourceReferencesShrink;
        }

        $bodyFlat = [];
        if (null !== $request->dataSourceStores) {
            @$bodyFlat['DataSourceStores'] = $request->dataSourceStores;
        }

        if (null !== $request->dataSourceTemplateId) {
            @$body['DataSourceTemplateId'] = $request->dataSourceTemplateId;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logProjectName) {
            @$body['LogProjectName'] = $request->logProjectName;
        }

        if (null !== $request->logRegionId) {
            @$body['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataSource',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据源.
     *
     * @param request - CreateDataSourceRequest
     *
     * @returns CreateDataSourceResponse
     *
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
     * 创建检测规则.
     *
     * @param request - CreateDetectionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDetectionRuleResponse
     *
     * @param CreateDetectionRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDetectionRuleResponse
     */
    public function createDetectionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertAttCk) {
            @$body['AlertAttCk'] = $request->alertAttCk;
        }

        if (null !== $request->alertDescription) {
            @$body['AlertDescription'] = $request->alertDescription;
        }

        if (null !== $request->alertLevel) {
            @$body['AlertLevel'] = $request->alertLevel;
        }

        if (null !== $request->alertName) {
            @$body['AlertName'] = $request->alertName;
        }

        if (null !== $request->alertSchemaId) {
            @$body['AlertSchemaId'] = $request->alertSchemaId;
        }

        if (null !== $request->alertTacticId) {
            @$body['AlertTacticId'] = $request->alertTacticId;
        }

        if (null !== $request->alertThresholdCount) {
            @$body['AlertThresholdCount'] = $request->alertThresholdCount;
        }

        if (null !== $request->alertThresholdGroup) {
            @$body['AlertThresholdGroup'] = $request->alertThresholdGroup;
        }

        if (null !== $request->alertThresholdPeriod) {
            @$body['AlertThresholdPeriod'] = $request->alertThresholdPeriod;
        }

        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->detectionExpressionContent) {
            @$body['DetectionExpressionContent'] = $request->detectionExpressionContent;
        }

        if (null !== $request->detectionExpressionType) {
            @$body['DetectionExpressionType'] = $request->detectionExpressionType;
        }

        if (null !== $request->detectionRuleDescription) {
            @$body['DetectionRuleDescription'] = $request->detectionRuleDescription;
        }

        if (null !== $request->detectionRuleName) {
            @$body['DetectionRuleName'] = $request->detectionRuleName;
        }

        if (null !== $request->detectionRuleStatus) {
            @$body['DetectionRuleStatus'] = $request->detectionRuleStatus;
        }

        if (null !== $request->detectionRuleTemplateId) {
            @$body['DetectionRuleTemplateId'] = $request->detectionRuleTemplateId;
        }

        if (null !== $request->detectionRuleTemplateVersion) {
            @$body['DetectionRuleTemplateVersion'] = $request->detectionRuleTemplateVersion;
        }

        if (null !== $request->detectionRuleType) {
            @$body['DetectionRuleType'] = $request->detectionRuleType;
        }

        if (null !== $request->entityMappings) {
            @$body['EntityMappings'] = $request->entityMappings;
        }

        if (null !== $request->incidentAggregationExpression) {
            @$body['IncidentAggregationExpression'] = $request->incidentAggregationExpression;
        }

        if (null !== $request->incidentAggregationType) {
            @$body['IncidentAggregationType'] = $request->incidentAggregationType;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logCategoryId) {
            @$body['LogCategoryId'] = $request->logCategoryId;
        }

        if (null !== $request->logSchemaId) {
            @$body['LogSchemaId'] = $request->logSchemaId;
        }

        if (null !== $request->playbookParameters) {
            @$body['PlaybookParameters'] = $request->playbookParameters;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->scheduleBeginTime) {
            @$body['ScheduleBeginTime'] = $request->scheduleBeginTime;
        }

        if (null !== $request->scheduleExpression) {
            @$body['ScheduleExpression'] = $request->scheduleExpression;
        }

        if (null !== $request->scheduleMaxRetries) {
            @$body['ScheduleMaxRetries'] = $request->scheduleMaxRetries;
        }

        if (null !== $request->scheduleMaxTimeout) {
            @$body['ScheduleMaxTimeout'] = $request->scheduleMaxTimeout;
        }

        if (null !== $request->scheduleType) {
            @$body['ScheduleType'] = $request->scheduleType;
        }

        if (null !== $request->scheduleWindow) {
            @$body['ScheduleWindow'] = $request->scheduleWindow;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDetectionRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDetectionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建检测规则.
     *
     * @param request - CreateDetectionRuleRequest
     *
     * @returns CreateDetectionRuleResponse
     *
     * @param CreateDetectionRuleRequest $request
     *
     * @return CreateDetectionRuleResponse
     */
    public function createDetectionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDetectionRuleWithOptions($request, $runtime);
    }

    /**
     * 创建导出任务
     *
     * @param request - CreateExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExportTaskResponse
     *
     * @param CreateExportTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateExportTaskResponse
     */
    public function createExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exportTaskParameter) {
            @$body['ExportTaskParameter'] = $request->exportTaskParameter;
        }

        if (null !== $request->exportTaskType) {
            @$body['ExportTaskType'] = $request->exportTaskType;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExportTask',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建导出任务
     *
     * @param request - CreateExportTaskRequest
     *
     * @returns CreateExportTaskResponse
     *
     * @param CreateExportTaskRequest $request
     *
     * @return CreateExportTaskResponse
     */
    public function createExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExportTaskWithOptions($request, $runtime);
    }

    /**
     * 创建LogStore.
     *
     * @param request - CreateLogStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogStoreResponse
     *
     * @param CreateLogStoreRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLogStoreResponse
     */
    public function createLogStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logProjectName) {
            @$body['LogProjectName'] = $request->logProjectName;
        }

        if (null !== $request->logRegionId) {
            @$body['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLogStore',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLogStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建LogStore.
     *
     * @param request - CreateLogStoreRequest
     *
     * @returns CreateLogStoreResponse
     *
     * @param CreateLogStoreRequest $request
     *
     * @return CreateLogStoreResponse
     */
    public function createLogStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogStoreWithOptions($request, $runtime);
    }

    /**
     * 创建标准化规则.
     *
     * @param tmpReq - CreateNormalizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNormalizationRuleResponse
     *
     * @param CreateNormalizationRuleRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateNormalizationRuleResponse
     */
    public function createNormalizationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateNormalizationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->normalizationRuleIds) {
            $request->normalizationRuleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->normalizationRuleIds, 'NormalizationRuleIds', 'json');
        }

        $body = [];
        if (null !== $request->extendContentPacked) {
            @$body['ExtendContentPacked'] = $request->extendContentPacked;
        }

        if (null !== $request->extendFieldStoreMode) {
            @$body['ExtendFieldStoreMode'] = $request->extendFieldStoreMode;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationCategoryId) {
            @$body['NormalizationCategoryId'] = $request->normalizationCategoryId;
        }

        if (null !== $request->normalizationRuleDescription) {
            @$body['NormalizationRuleDescription'] = $request->normalizationRuleDescription;
        }

        if (null !== $request->normalizationRuleExpression) {
            @$body['NormalizationRuleExpression'] = $request->normalizationRuleExpression;
        }

        if (null !== $request->normalizationRuleFormat) {
            @$body['NormalizationRuleFormat'] = $request->normalizationRuleFormat;
        }

        if (null !== $request->normalizationRuleIdsShrink) {
            @$body['NormalizationRuleIds'] = $request->normalizationRuleIdsShrink;
        }

        if (null !== $request->normalizationRuleMode) {
            @$body['NormalizationRuleMode'] = $request->normalizationRuleMode;
        }

        if (null !== $request->normalizationRuleName) {
            @$body['NormalizationRuleName'] = $request->normalizationRuleName;
        }

        if (null !== $request->normalizationRuleType) {
            @$body['NormalizationRuleType'] = $request->normalizationRuleType;
        }

        if (null !== $request->normalizationRuleVersion) {
            @$body['NormalizationRuleVersion'] = $request->normalizationRuleVersion;
        }

        if (null !== $request->normalizationSchemaId) {
            @$body['NormalizationSchemaId'] = $request->normalizationSchemaId;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorId) {
            @$body['VendorId'] = $request->vendorId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNormalizationRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNormalizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建标准化规则.
     *
     * @param request - CreateNormalizationRuleRequest
     *
     * @returns CreateNormalizationRuleResponse
     *
     * @param CreateNormalizationRuleRequest $request
     *
     * @return CreateNormalizationRuleResponse
     */
    public function createNormalizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNormalizationRuleWithOptions($request, $runtime);
    }

    /**
     * 创建标准化结构.
     *
     * @param request - CreateNormalizationSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNormalizationSchemaResponse
     *
     * @param CreateNormalizationSchemaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateNormalizationSchemaResponse
     */
    public function createNormalizationSchemaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationCategoryId) {
            @$body['NormalizationCategoryId'] = $request->normalizationCategoryId;
        }

        if (null !== $request->normalizationFields) {
            @$body['NormalizationFields'] = $request->normalizationFields;
        }

        if (null !== $request->normalizationSchemaDescription) {
            @$body['NormalizationSchemaDescription'] = $request->normalizationSchemaDescription;
        }

        if (null !== $request->normalizationSchemaId) {
            @$body['NormalizationSchemaId'] = $request->normalizationSchemaId;
        }

        if (null !== $request->normalizationSchemaName) {
            @$body['NormalizationSchemaName'] = $request->normalizationSchemaName;
        }

        if (null !== $request->normalizationSchemaType) {
            @$body['NormalizationSchemaType'] = $request->normalizationSchemaType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->targetLogStore) {
            @$body['TargetLogStore'] = $request->targetLogStore;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateNormalizationSchema',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNormalizationSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建标准化结构.
     *
     * @param request - CreateNormalizationSchemaRequest
     *
     * @returns CreateNormalizationSchemaResponse
     *
     * @param CreateNormalizationSchemaRequest $request
     *
     * @return CreateNormalizationSchemaResponse
     */
    public function createNormalizationSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNormalizationSchemaWithOptions($request, $runtime);
    }

    /**
     * 创建产品
     *
     * @param request - CreateProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->productName) {
            @$body['ProductName'] = $request->productName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorName) {
            @$body['VendorName'] = $request->vendorName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProduct',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建产品
     *
     * @param request - CreateProductRequest
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductWithOptions($request, $runtime);
    }

    /**
     * 创建厂商.
     *
     * @param request - CreateVendorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVendorResponse
     *
     * @param CreateVendorRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateVendorResponse
     */
    public function createVendorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorName) {
            @$body['VendorName'] = $request->vendorName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVendor',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVendorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建厂商.
     *
     * @param request - CreateVendorRequest
     *
     * @returns CreateVendorResponse
     *
     * @param CreateVendorRequest $request
     *
     * @return CreateVendorResponse
     */
    public function createVendor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVendorWithOptions($request, $runtime);
    }

    /**
     * 删除数据接入.
     *
     * @param request - DeleteDataIngestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataIngestionResponse
     *
     * @param DeleteDataIngestionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDataIngestionResponse
     */
    public function deleteDataIngestionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataIngestionId) {
            @$body['DataIngestionId'] = $request->dataIngestionId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDataIngestion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataIngestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据接入.
     *
     * @param request - DeleteDataIngestionRequest
     *
     * @returns DeleteDataIngestionResponse
     *
     * @param DeleteDataIngestionRequest $request
     *
     * @return DeleteDataIngestionResponse
     */
    public function deleteDataIngestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataIngestionWithOptions($request, $runtime);
    }

    /**
     * 删除数据集.
     *
     * @param request - DeleteDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataSetResponse
     *
     * @param DeleteDataSetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDataSetResponse
     */
    public function deleteDataSetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSetId) {
            @$body['DataSetId'] = $request->dataSetId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDataSet',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据集.
     *
     * @param request - DeleteDataSetRequest
     *
     * @returns DeleteDataSetResponse
     *
     * @param DeleteDataSetRequest $request
     *
     * @return DeleteDataSetResponse
     */
    public function deleteDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSetWithOptions($request, $runtime);
    }

    /**
     * 删除数据集记录.
     *
     * @param request - DeleteDataSetRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataSetRecordResponse
     *
     * @param DeleteDataSetRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDataSetRecordResponse
     */
    public function deleteDataSetRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSetId) {
            @$body['DataSetId'] = $request->dataSetId;
        }

        if (null !== $request->dataSetRecordIds) {
            @$body['DataSetRecordIds'] = $request->dataSetRecordIds;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDataSetRecord',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataSetRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据集记录.
     *
     * @param request - DeleteDataSetRecordRequest
     *
     * @returns DeleteDataSetRecordResponse
     *
     * @param DeleteDataSetRecordRequest $request
     *
     * @return DeleteDataSetRecordResponse
     */
    public function deleteDataSetRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSetRecordWithOptions($request, $runtime);
    }

    /**
     * 删除数据源.
     *
     * @param request - DeleteDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataSourceResponse
     *
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDataSource',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据源.
     *
     * @param request - DeleteDataSourceRequest
     *
     * @returns DeleteDataSourceResponse
     *
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
     * 删除检测规则.
     *
     * @param request - DeleteDetectionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDetectionRuleResponse
     *
     * @param DeleteDetectionRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDetectionRuleResponse
     */
    public function deleteDetectionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->detectionRuleId) {
            @$body['DetectionRuleId'] = $request->detectionRuleId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDetectionRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDetectionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除检测规则.
     *
     * @param request - DeleteDetectionRuleRequest
     *
     * @returns DeleteDetectionRuleResponse
     *
     * @param DeleteDetectionRuleRequest $request
     *
     * @return DeleteDetectionRuleResponse
     */
    public function deleteDetectionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDetectionRuleWithOptions($request, $runtime);
    }

    /**
     * 删除LogStore.
     *
     * @param request - DeleteLogStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLogStoreResponse
     *
     * @param DeleteLogStoreRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteLogStoreResponse
     */
    public function deleteLogStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logProjectName) {
            @$body['LogProjectName'] = $request->logProjectName;
        }

        if (null !== $request->logRegionId) {
            @$body['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteLogStore',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLogStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除LogStore.
     *
     * @param request - DeleteLogStoreRequest
     *
     * @returns DeleteLogStoreResponse
     *
     * @param DeleteLogStoreRequest $request
     *
     * @return DeleteLogStoreResponse
     */
    public function deleteLogStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogStoreWithOptions($request, $runtime);
    }

    /**
     * 删除标准化规则.
     *
     * @param request - DeleteNormalizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNormalizationRuleResponse
     *
     * @param DeleteNormalizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteNormalizationRuleResponse
     */
    public function deleteNormalizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteNormalizationRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNormalizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除标准化规则.
     *
     * @param request - DeleteNormalizationRuleRequest
     *
     * @returns DeleteNormalizationRuleResponse
     *
     * @param DeleteNormalizationRuleRequest $request
     *
     * @return DeleteNormalizationRuleResponse
     */
    public function deleteNormalizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNormalizationRuleWithOptions($request, $runtime);
    }

    /**
     * 删除标准化规则版本.
     *
     * @param request - DeleteNormalizationRuleVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNormalizationRuleVersionResponse
     *
     * @param DeleteNormalizationRuleVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteNormalizationRuleVersionResponse
     */
    public function deleteNormalizationRuleVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->normalizationRuleVersion) {
            @$body['NormalizationRuleVersion'] = $request->normalizationRuleVersion;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteNormalizationRuleVersion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNormalizationRuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除标准化规则版本.
     *
     * @param request - DeleteNormalizationRuleVersionRequest
     *
     * @returns DeleteNormalizationRuleVersionResponse
     *
     * @param DeleteNormalizationRuleVersionRequest $request
     *
     * @return DeleteNormalizationRuleVersionResponse
     */
    public function deleteNormalizationRuleVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNormalizationRuleVersionWithOptions($request, $runtime);
    }

    /**
     * 删除产品
     *
     * @param request - DeleteProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProductResponse
     *
     * @param DeleteProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteProduct',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除产品
     *
     * @param request - DeleteProductRequest
     *
     * @returns DeleteProductResponse
     *
     * @param DeleteProductRequest $request
     *
     * @return DeleteProductResponse
     */
    public function deleteProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProductWithOptions($request, $runtime);
    }

    /**
     * 删除厂商.
     *
     * @param request - DeleteVendorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVendorResponse
     *
     * @param DeleteVendorRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteVendorResponse
     */
    public function deleteVendorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorId) {
            @$body['VendorId'] = $request->vendorId;
        }

        if (null !== $request->vendorName) {
            @$body['VendorName'] = $request->vendorName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVendor',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVendorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除厂商.
     *
     * @param request - DeleteVendorRequest
     *
     * @returns DeleteVendorResponse
     *
     * @param DeleteVendorRequest $request
     *
     * @return DeleteVendorResponse
     */
    public function deleteVendor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVendorWithOptions($request, $runtime);
    }

    /**
     * 停止数据接入.
     *
     * @param request - DisableDataIngestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDataIngestionResponse
     *
     * @param DisableDataIngestionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DisableDataIngestionResponse
     */
    public function disableDataIngestionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataIngestionId) {
            @$body['DataIngestionId'] = $request->dataIngestionId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableDataIngestion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDataIngestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止数据接入.
     *
     * @param request - DisableDataIngestionRequest
     *
     * @returns DisableDataIngestionResponse
     *
     * @param DisableDataIngestionRequest $request
     *
     * @return DisableDataIngestionResponse
     */
    public function disableDataIngestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDataIngestionWithOptions($request, $runtime);
    }

    /**
     * 启动数据接入.
     *
     * @param request - EnableDataIngestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDataIngestionResponse
     *
     * @param EnableDataIngestionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnableDataIngestionResponse
     */
    public function enableDataIngestionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataIngestionId) {
            @$body['DataIngestionId'] = $request->dataIngestionId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableDataIngestion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableDataIngestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动数据接入.
     *
     * @param request - EnableDataIngestionRequest
     *
     * @returns EnableDataIngestionResponse
     *
     * @param EnableDataIngestionRequest $request
     *
     * @return EnableDataIngestionResponse
     */
    public function enableDataIngestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDataIngestionWithOptions($request, $runtime);
    }

    /**
     * 查看LogStore.
     *
     * @param request - ExecuteLogQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteLogQueryResponse
     *
     * @param ExecuteLogQueryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecuteLogQueryResponse
     */
    public function executeLogQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->extendContentPacked) {
            @$body['ExtendContentPacked'] = $request->extendContentPacked;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logProjectName) {
            @$body['LogProjectName'] = $request->logProjectName;
        }

        if (null !== $request->logQuery) {
            @$body['LogQuery'] = $request->logQuery;
        }

        if (null !== $request->logRegionId) {
            @$body['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->normalizationSchemaId) {
            @$body['NormalizationSchemaId'] = $request->normalizationSchemaId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteLogQuery',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteLogQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看LogStore.
     *
     * @param request - ExecuteLogQueryRequest
     *
     * @returns ExecuteLogQueryResponse
     *
     * @param ExecuteLogQueryRequest $request
     *
     * @return ExecuteLogQueryResponse
     */
    public function executeLogQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeLogQueryWithOptions($request, $runtime);
    }

    /**
     * 执行升级.
     *
     * @param request - ExecuteUpgradeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteUpgradeResponse
     *
     * @param ExecuteUpgradeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExecuteUpgradeResponse
     */
    public function executeUpgradeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteUpgrade',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行升级.
     *
     * @param request - ExecuteUpgradeRequest
     *
     * @returns ExecuteUpgradeResponse
     *
     * @param ExecuteUpgradeRequest $request
     *
     * @return ExecuteUpgradeResponse
     */
    public function executeUpgrade($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeUpgradeWithOptions($request, $runtime);
    }

    /**
     * 获取数据批量接入.
     *
     * @param request - GetDataBatchIngestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataBatchIngestionResponse
     *
     * @param GetDataBatchIngestionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDataBatchIngestionResponse
     */
    public function getDataBatchIngestionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDataBatchIngestion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataBatchIngestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据批量接入.
     *
     * @param request - GetDataBatchIngestionRequest
     *
     * @returns GetDataBatchIngestionResponse
     *
     * @param GetDataBatchIngestionRequest $request
     *
     * @return GetDataBatchIngestionResponse
     */
    public function getDataBatchIngestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataBatchIngestionWithOptions($request, $runtime);
    }

    /**
     * 获取日志管理页面里用户数据存储的详情。
     *
     * @param request - GetDataStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataStorageResponse
     *
     * @param GetDataStorageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetDataStorageResponse
     */
    public function getDataStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDataStorage',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日志管理页面里用户数据存储的详情。
     *
     * @param request - GetDataStorageRequest
     *
     * @returns GetDataStorageResponse
     *
     * @param GetDataStorageRequest $request
     *
     * @return GetDataStorageResponse
     */
    public function getDataStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataStorageWithOptions($request, $runtime);
    }

    /**
     * 更新检测规则.
     *
     * @param request - GetDetectionStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDetectionStatisticResponse
     *
     * @param GetDetectionStatisticRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDetectionStatisticResponse
     */
    public function getDetectionStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDetectionStatistic',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDetectionStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新检测规则.
     *
     * @param request - GetDetectionStatisticRequest
     *
     * @returns GetDetectionStatisticResponse
     *
     * @param GetDetectionStatisticRequest $request
     *
     * @return GetDetectionStatisticResponse
     */
    public function getDetectionStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectionStatisticWithOptions($request, $runtime);
    }

    /**
     * 获取导出任务进度.
     *
     * @param request - GetExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExportTaskResponse
     *
     * @param GetExportTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetExportTaskResponse
     */
    public function getExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exportId) {
            @$body['ExportId'] = $request->exportId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetExportTask',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取导出任务进度.
     *
     * @param request - GetExportTaskRequest
     *
     * @returns GetExportTaskResponse
     *
     * @param GetExportTaskRequest $request
     *
     * @return GetExportTaskResponse
     */
    public function getExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExportTaskWithOptions($request, $runtime);
    }

    /**
     * 获取事件列表.
     *
     * @param request - GetIncidentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIncidentResponse
     *
     * @param GetIncidentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetIncidentResponse
     */
    public function getIncidentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetIncident',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取事件列表.
     *
     * @param request - GetIncidentRequest
     *
     * @returns GetIncidentResponse
     *
     * @param GetIncidentRequest $request
     *
     * @return GetIncidentResponse
     */
    public function getIncident($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIncidentWithOptions($request, $runtime);
    }

    /**
     * 查看LogStore.
     *
     * @param request - GetLogTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogTicketResponse
     *
     * @param GetLogTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetLogTicketResponse
     */
    public function getLogTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLogTicket',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看LogStore.
     *
     * @param request - GetLogTicketRequest
     *
     * @returns GetLogTicketResponse
     *
     * @param GetLogTicketRequest $request
     *
     * @return GetLogTicketResponse
     */
    public function getLogTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogTicketWithOptions($request, $runtime);
    }

    /**
     * 获取标准化规则.
     *
     * @param request - GetNormalizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNormalizationRuleResponse
     *
     * @param GetNormalizationRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetNormalizationRuleResponse
     */
    public function getNormalizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNormalizationRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNormalizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标准化规则.
     *
     * @param request - GetNormalizationRuleRequest
     *
     * @returns GetNormalizationRuleResponse
     *
     * @param GetNormalizationRuleRequest $request
     *
     * @return GetNormalizationRuleResponse
     */
    public function getNormalizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNormalizationRuleWithOptions($request, $runtime);
    }

    /**
     * 获取标准化规则指定版本信息.
     *
     * @param request - GetNormalizationRuleVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNormalizationRuleVersionResponse
     *
     * @param GetNormalizationRuleVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetNormalizationRuleVersionResponse
     */
    public function getNormalizationRuleVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->normalizationRuleVersion) {
            @$body['NormalizationRuleVersion'] = $request->normalizationRuleVersion;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNormalizationRuleVersion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNormalizationRuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标准化规则指定版本信息.
     *
     * @param request - GetNormalizationRuleVersionRequest
     *
     * @returns GetNormalizationRuleVersionResponse
     *
     * @param GetNormalizationRuleVersionRequest $request
     *
     * @return GetNormalizationRuleVersionResponse
     */
    public function getNormalizationRuleVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNormalizationRuleVersionWithOptions($request, $runtime);
    }

    /**
     * 获取Schema信息以及字段.
     *
     * @param request - GetNormalizationSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNormalizationSchemaResponse
     *
     * @param GetNormalizationSchemaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetNormalizationSchemaResponse
     */
    public function getNormalizationSchemaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationSchemaId) {
            @$body['NormalizationSchemaId'] = $request->normalizationSchemaId;
        }

        if (null !== $request->normalizationSchemaType) {
            @$body['NormalizationSchemaType'] = $request->normalizationSchemaType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNormalizationSchema',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNormalizationSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Schema信息以及字段.
     *
     * @param request - GetNormalizationSchemaRequest
     *
     * @returns GetNormalizationSchemaResponse
     *
     * @param GetNormalizationSchemaRequest $request
     *
     * @return GetNormalizationSchemaResponse
     */
    public function getNormalizationSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNormalizationSchemaWithOptions($request, $runtime);
    }

    /**
     * 获取用户配置信息.
     *
     * @param request - GetUserConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserConfigResponse
     *
     * @param GetUserConfigRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetUserConfigResponse
     */
    public function getUserConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserConfig',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户配置信息.
     *
     * @param request - GetUserConfigRequest
     *
     * @returns GetUserConfigResponse
     *
     * @param GetUserConfigRequest $request
     *
     * @return GetUserConfigResponse
     */
    public function getUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserConfigWithOptions($request, $runtime);
    }

    /**
     * 查询接入模板
     *
     * @param request - ListDataIngestionTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataIngestionTemplatesResponse
     *
     * @param ListDataIngestionTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListDataIngestionTemplatesResponse
     */
    public function listDataIngestionTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataIngestionTemplateStatus) {
            @$body['DataIngestionTemplateStatus'] = $request->dataIngestionTemplateStatus;
        }

        if (null !== $request->dataSourceTemplateIds) {
            @$body['DataSourceTemplateIds'] = $request->dataSourceTemplateIds;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataIngestionTemplates',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataIngestionTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询接入模板
     *
     * @param request - ListDataIngestionTemplatesRequest
     *
     * @returns ListDataIngestionTemplatesResponse
     *
     * @param ListDataIngestionTemplatesRequest $request
     *
     * @return ListDataIngestionTemplatesResponse
     */
    public function listDataIngestionTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataIngestionTemplatesWithOptions($request, $runtime);
    }

    /**
     * 获取数据接入任务列表.
     *
     * @param tmpReq - ListDataIngestionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataIngestionsResponse
     *
     * @param ListDataIngestionsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListDataIngestionsResponse
     */
    public function listDataIngestionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataIngestionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataIngestionIds) {
            $request->dataIngestionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataIngestionIds, 'DataIngestionIds', 'simple');
        }

        if (null !== $tmpReq->dataIngestionTemplateIds) {
            $request->dataIngestionTemplateIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataIngestionTemplateIds, 'DataIngestionTemplateIds', 'simple');
        }

        $body = [];
        if (null !== $request->dataIngestionIdsShrink) {
            @$body['DataIngestionIds'] = $request->dataIngestionIdsShrink;
        }

        if (null !== $request->dataIngestionStatus) {
            @$body['DataIngestionStatus'] = $request->dataIngestionStatus;
        }

        if (null !== $request->dataIngestionTemplateIdsShrink) {
            @$body['DataIngestionTemplateIds'] = $request->dataIngestionTemplateIdsShrink;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataIngestions',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataIngestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据接入任务列表.
     *
     * @param request - ListDataIngestionsRequest
     *
     * @returns ListDataIngestionsResponse
     *
     * @param ListDataIngestionsRequest $request
     *
     * @return ListDataIngestionsResponse
     */
    public function listDataIngestions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataIngestionsWithOptions($request, $runtime);
    }

    /**
     * 获取数据集记录列表.
     *
     * @param request - ListDataSetRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSetRecordsResponse
     *
     * @param ListDataSetRecordsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDataSetRecordsResponse
     */
    public function listDataSetRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSetId) {
            @$body['DataSetId'] = $request->dataSetId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataSetRecords',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSetRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据集记录列表.
     *
     * @param request - ListDataSetRecordsRequest
     *
     * @returns ListDataSetRecordsResponse
     *
     * @param ListDataSetRecordsRequest $request
     *
     * @return ListDataSetRecordsResponse
     */
    public function listDataSetRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSetRecordsWithOptions($request, $runtime);
    }

    /**
     * 获取数据集列表.
     *
     * @param tmpReq - ListDataSetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSetsResponse
     *
     * @param ListDataSetsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListDataSetsResponse
     */
    public function listDataSetsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataSetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataSetIds) {
            $request->dataSetIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSetIds, 'DataSetIds', 'simple');
        }

        $body = [];
        if (null !== $request->dataSetId) {
            @$body['DataSetId'] = $request->dataSetId;
        }

        if (null !== $request->dataSetIdsShrink) {
            @$body['DataSetIds'] = $request->dataSetIdsShrink;
        }

        if (null !== $request->dataSetName) {
            @$body['DataSetName'] = $request->dataSetName;
        }

        if (null !== $request->dataSetStatus) {
            @$body['DataSetStatus'] = $request->dataSetStatus;
        }

        if (null !== $request->dataSetType) {
            @$body['DataSetType'] = $request->dataSetType;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderDirection) {
            @$body['OrderDirection'] = $request->orderDirection;
        }

        if (null !== $request->orderFieldName) {
            @$body['OrderFieldName'] = $request->orderFieldName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataSets',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据集列表.
     *
     * @param request - ListDataSetsRequest
     *
     * @returns ListDataSetsResponse
     *
     * @param ListDataSetsRequest $request
     *
     * @return ListDataSetsResponse
     */
    public function listDataSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSetsWithOptions($request, $runtime);
    }

    /**
     * 查询数据源模板
     *
     * @param tmpReq - ListDataSourceTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceTemplatesResponse
     *
     * @param ListDataSourceTemplatesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDataSourceTemplatesResponse
     */
    public function listDataSourceTemplatesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataSourceTemplatesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataSourceTemplateIds) {
            $request->dataSourceTemplateIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceTemplateIds, 'DataSourceTemplateIds', 'simple');
        }

        $body = [];
        if (null !== $request->dataSourceTemplateIdsShrink) {
            @$body['DataSourceTemplateIds'] = $request->dataSourceTemplateIdsShrink;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataSourceTemplates',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSourceTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据源模板
     *
     * @param request - ListDataSourceTemplatesRequest
     *
     * @returns ListDataSourceTemplatesResponse
     *
     * @param ListDataSourceTemplatesRequest $request
     *
     * @return ListDataSourceTemplatesResponse
     */
    public function listDataSourceTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceTemplatesWithOptions($request, $runtime);
    }

    /**
     * 获取厂商列表.
     *
     * @param tmpReq - ListDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourcesResponse
     *
     * @param ListDataSourcesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataSourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataSourceIds) {
            $request->dataSourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceIds, 'DataSourceIds', 'simple');
        }

        if (null !== $tmpReq->dataSourceTemplateIds) {
            $request->dataSourceTemplateIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataSourceTemplateIds, 'DataSourceTemplateIds', 'simple');
        }

        if (null !== $tmpReq->logUserIds) {
            $request->logUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->logUserIds, 'LogUserIds', 'simple');
        }

        $body = [];
        if (null !== $request->dataSourceFrom) {
            @$body['DataSourceFrom'] = $request->dataSourceFrom;
        }

        if (null !== $request->dataSourceIdsShrink) {
            @$body['DataSourceIds'] = $request->dataSourceIdsShrink;
        }

        if (null !== $request->dataSourceName) {
            @$body['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->dataSourceStatus) {
            @$body['DataSourceStatus'] = $request->dataSourceStatus;
        }

        if (null !== $request->dataSourceStoreStatus) {
            @$body['DataSourceStoreStatus'] = $request->dataSourceStoreStatus;
        }

        if (null !== $request->dataSourceTemplateIdsShrink) {
            @$body['DataSourceTemplateIds'] = $request->dataSourceTemplateIdsShrink;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logProjectName) {
            @$body['LogProjectName'] = $request->logProjectName;
        }

        if (null !== $request->logRegionId) {
            @$body['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->logUserIdsShrink) {
            @$body['LogUserIds'] = $request->logUserIdsShrink;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataSources',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取厂商列表.
     *
     * @param request - ListDataSourcesRequest
     *
     * @returns ListDataSourcesResponse
     *
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
     * 获取检测规则列表.
     *
     * @param tmpReq - ListDetectionRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDetectionRulesResponse
     *
     * @param ListDetectionRulesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListDetectionRulesResponse
     */
    public function listDetectionRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDetectionRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->detectionRuleIds) {
            $request->detectionRuleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->detectionRuleIds, 'DetectionRuleIds', 'simple');
        }

        $body = [];
        if (null !== $request->alertAttCk) {
            @$body['AlertAttCk'] = $request->alertAttCk;
        }

        if (null !== $request->alertLevel) {
            @$body['AlertLevel'] = $request->alertLevel;
        }

        if (null !== $request->alertTacticId) {
            @$body['AlertTacticId'] = $request->alertTacticId;
        }

        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->detectionExpressionType) {
            @$body['DetectionExpressionType'] = $request->detectionExpressionType;
        }

        if (null !== $request->detectionRuleId) {
            @$body['DetectionRuleId'] = $request->detectionRuleId;
        }

        if (null !== $request->detectionRuleIdsShrink) {
            @$body['DetectionRuleIds'] = $request->detectionRuleIdsShrink;
        }

        if (null !== $request->detectionRuleName) {
            @$body['DetectionRuleName'] = $request->detectionRuleName;
        }

        if (null !== $request->detectionRuleStatus) {
            @$body['DetectionRuleStatus'] = $request->detectionRuleStatus;
        }

        if (null !== $request->detectionRuleType) {
            @$body['DetectionRuleType'] = $request->detectionRuleType;
        }

        if (null !== $request->incidentAggregationType) {
            @$body['IncidentAggregationType'] = $request->incidentAggregationType;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logCategoryId) {
            @$body['LogCategoryId'] = $request->logCategoryId;
        }

        if (null !== $request->logSchemaId) {
            @$body['LogSchemaId'] = $request->logSchemaId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderDirection) {
            @$body['OrderDirection'] = $request->orderDirection;
        }

        if (null !== $request->orderFieldName) {
            @$body['OrderFieldName'] = $request->orderFieldName;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDetectionRules',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDetectionRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取检测规则列表.
     *
     * @param request - ListDetectionRulesRequest
     *
     * @returns ListDetectionRulesResponse
     *
     * @param ListDetectionRulesRequest $request
     *
     * @return ListDetectionRulesResponse
     */
    public function listDetectionRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDetectionRulesWithOptions($request, $runtime);
    }

    /**
     * 获取事件列表.
     *
     * @param tmpReq - ListIncidentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIncidentsResponse
     *
     * @param ListIncidentsRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListIncidentsResponse
     */
    public function listIncidentsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListIncidentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->incidentUuids) {
            $request->incidentUuidsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->incidentUuids, 'IncidentUuids', 'simple');
        }

        $query = [];
        if (null !== $request->incidentName) {
            @$query['IncidentName'] = $request->incidentName;
        }

        if (null !== $request->incidentUuidsShrink) {
            @$query['IncidentUuids'] = $request->incidentUuidsShrink;
        }

        $body = [];
        if (null !== $request->alertUuid) {
            @$body['AlertUuid'] = $request->alertUuid;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->incidentStatus) {
            @$body['IncidentStatus'] = $request->incidentStatus;
        }

        if (null !== $request->incidentTags) {
            @$body['IncidentTags'] = $request->incidentTags;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderDirection) {
            @$body['OrderDirection'] = $request->orderDirection;
        }

        if (null !== $request->orderFieldName) {
            @$body['OrderFieldName'] = $request->orderFieldName;
        }

        if (null !== $request->owners) {
            @$body['Owners'] = $request->owners;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->relateAssetId) {
            @$body['RelateAssetId'] = $request->relateAssetId;
        }

        if (null !== $request->relateEntityId) {
            @$body['RelateEntityId'] = $request->relateEntityId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->threatLevel) {
            @$body['ThreatLevel'] = $request->threatLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListIncidents',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIncidentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取事件列表.
     *
     * @param request - ListIncidentsRequest
     *
     * @returns ListIncidentsResponse
     *
     * @param ListIncidentsRequest $request
     *
     * @return ListIncidentsResponse
     */
    public function listIncidents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIncidentsWithOptions($request, $runtime);
    }

    /**
     * 获取日志Project列表.
     *
     * @param request - ListLogProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogProjectsResponse
     *
     * @param ListLogProjectsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListLogProjectsResponse
     */
    public function listLogProjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logRegionId) {
            @$body['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLogProjects',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLogProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日志Project列表.
     *
     * @param request - ListLogProjectsRequest
     *
     * @returns ListLogProjectsResponse
     *
     * @param ListLogProjectsRequest $request
     *
     * @return ListLogProjectsResponse
     */
    public function listLogProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogProjectsWithOptions($request, $runtime);
    }

    /**
     * 获取所有的区域
     *
     * @param request - ListLogRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogRegionsResponse
     *
     * @param ListLogRegionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListLogRegionsResponse
     */
    public function listLogRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLogRegions',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLogRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取所有的区域
     *
     * @param request - ListLogRegionsRequest
     *
     * @returns ListLogRegionsResponse
     *
     * @param ListLogRegionsRequest $request
     *
     * @return ListLogRegionsResponse
     */
    public function listLogRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogRegionsWithOptions($request, $runtime);
    }

    /**
     * 获取日志store列表.
     *
     * @param request - ListLogStoresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogStoresResponse
     *
     * @param ListLogStoresRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListLogStoresResponse
     */
    public function listLogStoresWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logProjectName) {
            @$body['LogProjectName'] = $request->logProjectName;
        }

        if (null !== $request->logRegionId) {
            @$body['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListLogStores',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLogStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日志store列表.
     *
     * @param request - ListLogStoresRequest
     *
     * @returns ListLogStoresResponse
     *
     * @param ListLogStoresRequest $request
     *
     * @return ListLogStoresResponse
     */
    public function listLogStores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogStoresWithOptions($request, $runtime);
    }

    /**
     * 获取标准化目录.
     *
     * @param request - ListNormalizationCategoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNormalizationCategoriesResponse
     *
     * @param ListNormalizationCategoriesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListNormalizationCategoriesResponse
     */
    public function listNormalizationCategoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->normalizationCategoryType) {
            @$body['NormalizationCategoryType'] = $request->normalizationCategoryType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNormalizationCategories',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNormalizationCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标准化目录.
     *
     * @param request - ListNormalizationCategoriesRequest
     *
     * @returns ListNormalizationCategoriesResponse
     *
     * @param ListNormalizationCategoriesRequest $request
     *
     * @return ListNormalizationCategoriesResponse
     */
    public function listNormalizationCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNormalizationCategoriesWithOptions($request, $runtime);
    }

    /**
     * 获取标准化日志所有字段.
     *
     * @param request - ListNormalizationFieldsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNormalizationFieldsResponse
     *
     * @param ListNormalizationFieldsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListNormalizationFieldsResponse
     */
    public function listNormalizationFieldsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNormalizationFields',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNormalizationFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标准化日志所有字段.
     *
     * @param request - ListNormalizationFieldsRequest
     *
     * @returns ListNormalizationFieldsResponse
     *
     * @param ListNormalizationFieldsRequest $request
     *
     * @return ListNormalizationFieldsResponse
     */
    public function listNormalizationFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNormalizationFieldsWithOptions($request, $runtime);
    }

    /**
     * 获取规则的安全能力.
     *
     * @param tmpReq - ListNormalizationRuleCapacitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNormalizationRuleCapacitiesResponse
     *
     * @param ListNormalizationRuleCapacitiesRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return ListNormalizationRuleCapacitiesResponse
     */
    public function listNormalizationRuleCapacitiesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListNormalizationRuleCapacitiesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->normalizationRuleIds) {
            $request->normalizationRuleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->normalizationRuleIds, 'NormalizationRuleIds', 'simple');
        }

        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->normalizationRuleIdsShrink) {
            @$body['NormalizationRuleIds'] = $request->normalizationRuleIdsShrink;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNormalizationRuleCapacities',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNormalizationRuleCapacitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取规则的安全能力.
     *
     * @param request - ListNormalizationRuleCapacitiesRequest
     *
     * @returns ListNormalizationRuleCapacitiesResponse
     *
     * @param ListNormalizationRuleCapacitiesRequest $request
     *
     * @return ListNormalizationRuleCapacitiesResponse
     */
    public function listNormalizationRuleCapacities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNormalizationRuleCapacitiesWithOptions($request, $runtime);
    }

    /**
     * 获取标准化规则版本列表.
     *
     * @param request - ListNormalizationRuleVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNormalizationRuleVersionsResponse
     *
     * @param ListNormalizationRuleVersionsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListNormalizationRuleVersionsResponse
     */
    public function listNormalizationRuleVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNormalizationRuleVersions',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNormalizationRuleVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标准化规则版本列表.
     *
     * @param request - ListNormalizationRuleVersionsRequest
     *
     * @returns ListNormalizationRuleVersionsResponse
     *
     * @param ListNormalizationRuleVersionsRequest $request
     *
     * @return ListNormalizationRuleVersionsResponse
     */
    public function listNormalizationRuleVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNormalizationRuleVersionsWithOptions($request, $runtime);
    }

    /**
     * 获取标准化规则列表.
     *
     * @param tmpReq - ListNormalizationRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNormalizationRulesResponse
     *
     * @param ListNormalizationRulesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListNormalizationRulesResponse
     */
    public function listNormalizationRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListNormalizationRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->normalizationRuleIds) {
            $request->normalizationRuleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->normalizationRuleIds, 'NormalizationRuleIds', 'simple');
        }

        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->normalizationCategoryId) {
            @$body['NormalizationCategoryId'] = $request->normalizationCategoryId;
        }

        if (null !== $request->normalizationRuleIdsShrink) {
            @$body['NormalizationRuleIds'] = $request->normalizationRuleIdsShrink;
        }

        if (null !== $request->normalizationRuleName) {
            @$body['NormalizationRuleName'] = $request->normalizationRuleName;
        }

        if (null !== $request->normalizationRuleType) {
            @$body['NormalizationRuleType'] = $request->normalizationRuleType;
        }

        if (null !== $request->normalizationSchemaId) {
            @$body['NormalizationSchemaId'] = $request->normalizationSchemaId;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->orderType) {
            @$body['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorId) {
            @$body['VendorId'] = $request->vendorId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNormalizationRules',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNormalizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标准化规则列表.
     *
     * @param request - ListNormalizationRulesRequest
     *
     * @returns ListNormalizationRulesResponse
     *
     * @param ListNormalizationRulesRequest $request
     *
     * @return ListNormalizationRulesResponse
     */
    public function listNormalizationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNormalizationRulesWithOptions($request, $runtime);
    }

    /**
     * 获取标准化类目.
     *
     * @param request - ListNormalizationSchemasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNormalizationSchemasResponse
     *
     * @param ListNormalizationSchemasRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListNormalizationSchemasResponse
     */
    public function listNormalizationSchemasWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->normalizationCategoryId) {
            @$body['NormalizationCategoryId'] = $request->normalizationCategoryId;
        }

        if (null !== $request->normalizationSchemaType) {
            @$body['NormalizationSchemaType'] = $request->normalizationSchemaType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNormalizationSchemas',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNormalizationSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标准化类目.
     *
     * @param request - ListNormalizationSchemasRequest
     *
     * @returns ListNormalizationSchemasResponse
     *
     * @param ListNormalizationSchemasRequest $request
     *
     * @return ListNormalizationSchemasResponse
     */
    public function listNormalizationSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNormalizationSchemasWithOptions($request, $runtime);
    }

    /**
     * 获取产品列表.
     *
     * @param tmpReq - ListProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProductsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->productIds) {
            $request->productIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->productIds, 'ProductIds', 'simple');
        }

        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productIdsShrink) {
            @$body['ProductIds'] = $request->productIdsShrink;
        }

        if (null !== $request->productName) {
            @$body['ProductName'] = $request->productName;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorId) {
            @$body['VendorId'] = $request->vendorId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2024-12-12',
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
     * 获取产品列表.
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
     * 获取接入流量统计
     *
     * @param tmpReq - ListTrafficStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrafficStatisticsResponse
     *
     * @param ListTrafficStatisticsRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListTrafficStatisticsResponse
     */
    public function listTrafficStatisticsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTrafficStatisticsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->logUserIds) {
            $request->logUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->logUserIds, 'LogUserIds', 'simple');
        }

        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logUserIdsShrink) {
            @$body['LogUserIds'] = $request->logUserIdsShrink;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionTag) {
            @$body['RegionTag'] = $request->regionTag;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->trafficStatisticPeriod) {
            @$body['TrafficStatisticPeriod'] = $request->trafficStatisticPeriod;
        }

        if (null !== $request->trafficStatisticPeriodType) {
            @$body['TrafficStatisticPeriodType'] = $request->trafficStatisticPeriodType;
        }

        if (null !== $request->trafficStatisticType) {
            @$body['TrafficStatisticType'] = $request->trafficStatisticType;
        }

        if (null !== $request->trafficType) {
            @$body['TrafficType'] = $request->trafficType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTrafficStatistics',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTrafficStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取接入流量统计
     *
     * @param request - ListTrafficStatisticsRequest
     *
     * @returns ListTrafficStatisticsResponse
     *
     * @param ListTrafficStatisticsRequest $request
     *
     * @return ListTrafficStatisticsResponse
     */
    public function listTrafficStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrafficStatisticsWithOptions($request, $runtime);
    }

    /**
     * 获取升级项列表.
     *
     * @param request - ListUpgradeItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUpgradeItemsResponse
     *
     * @param ListUpgradeItemsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListUpgradeItemsResponse
     */
    public function listUpgradeItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUpgradeItems',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUpgradeItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取升级项列表.
     *
     * @param request - ListUpgradeItemsRequest
     *
     * @returns ListUpgradeItemsResponse
     *
     * @param ListUpgradeItemsRequest $request
     *
     * @return ListUpgradeItemsResponse
     */
    public function listUpgradeItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUpgradeItemsWithOptions($request, $runtime);
    }

    /**
     * 获取厂商列表.
     *
     * @param tmpReq - ListVendorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVendorsResponse
     *
     * @param ListVendorsRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListVendorsResponse
     */
    public function listVendorsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListVendorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->vendorIds) {
            $request->vendorIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vendorIds, 'VendorIds', 'simple');
        }

        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorIdsShrink) {
            @$body['VendorIds'] = $request->vendorIdsShrink;
        }

        if (null !== $request->vendorName) {
            @$body['VendorName'] = $request->vendorName;
        }

        if (null !== $request->vendorType) {
            @$body['VendorType'] = $request->vendorType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVendors',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVendorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取厂商列表.
     *
     * @param request - ListVendorsRequest
     *
     * @returns ListVendorsResponse
     *
     * @param ListVendorsRequest $request
     *
     * @return ListVendorsResponse
     */
    public function listVendors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVendorsWithOptions($request, $runtime);
    }

    /**
     * 刷新数据源.
     *
     * @param request - RefreshDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshDataSourceResponse
     *
     * @param RefreshDataSourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RefreshDataSourceResponse
     */
    public function refreshDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RefreshDataSource',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 刷新数据源.
     *
     * @param request - RefreshDataSourceRequest
     *
     * @returns RefreshDataSourceResponse
     *
     * @param RefreshDataSourceRequest $request
     *
     * @return RefreshDataSourceResponse
     */
    public function refreshDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDataSourceWithOptions($request, $runtime);
    }

    /**
     * 数据存储的清空操作，该动作会删除已有的数据，重新初始化物理存储。
     *
     * @param request - ResetDataStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetDataStorageResponse
     *
     * @param ResetDataStorageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ResetDataStorageResponse
     */
    public function resetDataStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetDataStorage',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetDataStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 数据存储的清空操作，该动作会删除已有的数据，重新初始化物理存储。
     *
     * @param request - ResetDataStorageRequest
     *
     * @returns ResetDataStorageResponse
     *
     * @param ResetDataStorageRequest $request
     *
     * @return ResetDataStorageResponse
     */
    public function resetDataStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDataStorageWithOptions($request, $runtime);
    }

    /**
     * 设置标准化规则默认版本.
     *
     * @param request - SetDefaultNormalizationRuleVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDefaultNormalizationRuleVersionResponse
     *
     * @param SetDefaultNormalizationRuleVersionRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return SetDefaultNormalizationRuleVersionResponse
     */
    public function setDefaultNormalizationRuleVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->normalizationRuleVersion) {
            @$body['NormalizationRuleVersion'] = $request->normalizationRuleVersion;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetDefaultNormalizationRuleVersion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDefaultNormalizationRuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置标准化规则默认版本.
     *
     * @param request - SetDefaultNormalizationRuleVersionRequest
     *
     * @returns SetDefaultNormalizationRuleVersionResponse
     *
     * @param SetDefaultNormalizationRuleVersionRequest $request
     *
     * @return SetDefaultNormalizationRuleVersionResponse
     */
    public function setDefaultNormalizationRuleVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultNormalizationRuleVersionWithOptions($request, $runtime);
    }

    /**
     * 更新数据批量接入.
     *
     * @param tmpReq - UpdateDataBatchIngestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataBatchIngestionResponse
     *
     * @param UpdateDataBatchIngestionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateDataBatchIngestionResponse
     */
    public function updateDataBatchIngestionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataBatchIngestionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataIngestionIds) {
            $request->dataIngestionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataIngestionIds, 'DataIngestionIds', 'simple');
        }

        if (null !== $tmpReq->logUserIds) {
            $request->logUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->logUserIds, 'LogUserIds', 'simple');
        }

        $body = [];
        if (null !== $request->autoScanNew) {
            @$body['AutoScanNew'] = $request->autoScanNew;
        }

        if (null !== $request->dataBatchIngestionMode) {
            @$body['DataBatchIngestionMode'] = $request->dataBatchIngestionMode;
        }

        if (null !== $request->dataIngestionIdsShrink) {
            @$body['DataIngestionIds'] = $request->dataIngestionIdsShrink;
        }

        if (null !== $request->dataSourceRecognizeEnabled) {
            @$body['DataSourceRecognizeEnabled'] = $request->dataSourceRecognizeEnabled;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logUserIdsShrink) {
            @$body['LogUserIds'] = $request->logUserIdsShrink;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataBatchIngestion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataBatchIngestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据批量接入.
     *
     * @param request - UpdateDataBatchIngestionRequest
     *
     * @returns UpdateDataBatchIngestionResponse
     *
     * @param UpdateDataBatchIngestionRequest $request
     *
     * @return UpdateDataBatchIngestionResponse
     */
    public function updateDataBatchIngestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataBatchIngestionWithOptions($request, $runtime);
    }

    /**
     * 更新数据接入信息.
     *
     * @param request - UpdateDataIngestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataIngestionResponse
     *
     * @param UpdateDataIngestionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDataIngestionResponse
     */
    public function updateDataIngestionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataIngestionId) {
            @$body['DataIngestionId'] = $request->dataIngestionId;
        }

        if (null !== $request->dataIngestionMode) {
            @$body['DataIngestionMode'] = $request->dataIngestionMode;
        }

        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataIngestion',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataIngestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据接入信息.
     *
     * @param request - UpdateDataIngestionRequest
     *
     * @returns UpdateDataIngestionResponse
     *
     * @param UpdateDataIngestionRequest $request
     *
     * @return UpdateDataIngestionResponse
     */
    public function updateDataIngestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataIngestionWithOptions($request, $runtime);
    }

    /**
     * 更新接入模板
     *
     * @param request - UpdateDataIngestionTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataIngestionTemplateResponse
     *
     * @param UpdateDataIngestionTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateDataIngestionTemplateResponse
     */
    public function updateDataIngestionTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataIngestionStatus) {
            @$body['DataIngestionStatus'] = $request->dataIngestionStatus;
        }

        if (null !== $request->dataIngestionTemplateId) {
            @$body['DataIngestionTemplateId'] = $request->dataIngestionTemplateId;
        }

        if (null !== $request->dataIngestionTemplateName) {
            @$body['DataIngestionTemplateName'] = $request->dataIngestionTemplateName;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataIngestionTemplate',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataIngestionTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新接入模板
     *
     * @param request - UpdateDataIngestionTemplateRequest
     *
     * @returns UpdateDataIngestionTemplateResponse
     *
     * @param UpdateDataIngestionTemplateRequest $request
     *
     * @return UpdateDataIngestionTemplateResponse
     */
    public function updateDataIngestionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataIngestionTemplateWithOptions($request, $runtime);
    }

    /**
     * 更新数据集.
     *
     * @param request - UpdateDataSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataSetResponse
     *
     * @param UpdateDataSetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDataSetResponse
     */
    public function updateDataSetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSetDescription) {
            @$body['DataSetDescription'] = $request->dataSetDescription;
        }

        if (null !== $request->dataSetFileName) {
            @$body['DataSetFileName'] = $request->dataSetFileName;
        }

        if (null !== $request->dataSetId) {
            @$body['DataSetId'] = $request->dataSetId;
        }

        if (null !== $request->dataSetName) {
            @$body['DataSetName'] = $request->dataSetName;
        }

        if (null !== $request->dataSetStatus) {
            @$body['DataSetStatus'] = $request->dataSetStatus;
        }

        $bodyFlat = [];
        if (null !== $request->ipWhitelistRecognizers) {
            @$bodyFlat['IpWhitelistRecognizers'] = $request->ipWhitelistRecognizers;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataSet',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据集.
     *
     * @param request - UpdateDataSetRequest
     *
     * @returns UpdateDataSetResponse
     *
     * @param UpdateDataSetRequest $request
     *
     * @return UpdateDataSetResponse
     */
    public function updateDataSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSetWithOptions($request, $runtime);
    }

    /**
     * 更新数据集记录.
     *
     * @param request - UpdateDataSetRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataSetRecordResponse
     *
     * @param UpdateDataSetRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDataSetRecordResponse
     */
    public function updateDataSetRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSetFileName) {
            @$body['DataSetFileName'] = $request->dataSetFileName;
        }

        if (null !== $request->dataSetId) {
            @$body['DataSetId'] = $request->dataSetId;
        }

        if (null !== $request->dataSetRecords) {
            @$body['DataSetRecords'] = $request->dataSetRecords;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataSetRecord',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataSetRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据集记录.
     *
     * @param request - UpdateDataSetRecordRequest
     *
     * @returns UpdateDataSetRecordResponse
     *
     * @param UpdateDataSetRecordRequest $request
     *
     * @return UpdateDataSetRecordResponse
     */
    public function updateDataSetRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSetRecordWithOptions($request, $runtime);
    }

    /**
     * 更新数据源.
     *
     * @param request - UpdateDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataSourceResponse
     *
     * @param UpdateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataSourceFrom) {
            @$body['DataSourceFrom'] = $request->dataSourceFrom;
        }

        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->dataSourceName) {
            @$body['DataSourceName'] = $request->dataSourceName;
        }

        if (null !== $request->dataSourceRecognizeEnabled) {
            @$body['DataSourceRecognizeEnabled'] = $request->dataSourceRecognizeEnabled;
        }

        $bodyFlat = [];
        if (null !== $request->dataSourceStores) {
            @$bodyFlat['DataSourceStores'] = $request->dataSourceStores;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logProjectName) {
            @$body['LogProjectName'] = $request->logProjectName;
        }

        if (null !== $request->logRegionId) {
            @$body['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataSource',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据源.
     *
     * @param request - UpdateDataSourceRequest
     *
     * @returns UpdateDataSourceResponse
     *
     * @param UpdateDataSourceRequest $request
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceWithOptions($request, $runtime);
    }

    /**
     * 修改数据源模板
     *
     * @param tmpReq - UpdateDataSourceTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataSourceTemplateResponse
     *
     * @param UpdateDataSourceTemplateRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateDataSourceTemplateResponse
     */
    public function updateDataSourceTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDataSourceTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->logUserIds) {
            $request->logUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->logUserIds, 'LogUserIds', 'simple');
        }

        $query = [];
        if (null !== $request->dataSourceRecognizeEnabled) {
            @$query['DataSourceRecognizeEnabled'] = $request->dataSourceRecognizeEnabled;
        }

        $body = [];
        if (null !== $request->autoScanNew) {
            @$body['AutoScanNew'] = $request->autoScanNew;
        }

        if (null !== $request->dataSourceTemplateId) {
            @$body['DataSourceTemplateId'] = $request->dataSourceTemplateId;
        }

        if (null !== $request->dataSourceTemplateName) {
            @$body['DataSourceTemplateName'] = $request->dataSourceTemplateName;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logProjectPattern) {
            @$body['LogProjectPattern'] = $request->logProjectPattern;
        }

        if (null !== $request->logRegionIds) {
            @$body['LogRegionIds'] = $request->logRegionIds;
        }

        if (null !== $request->logStorePattern) {
            @$body['LogStorePattern'] = $request->logStorePattern;
        }

        if (null !== $request->logUserIdsShrink) {
            @$body['LogUserIds'] = $request->logUserIdsShrink;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataSourceTemplate',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataSourceTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改数据源模板
     *
     * @param request - UpdateDataSourceTemplateRequest
     *
     * @returns UpdateDataSourceTemplateResponse
     *
     * @param UpdateDataSourceTemplateRequest $request
     *
     * @return UpdateDataSourceTemplateResponse
     */
    public function updateDataSourceTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceTemplateWithOptions($request, $runtime);
    }

    /**
     * 获取日志管理页面里用户数据存储的详情。
     *
     * @param request - UpdateDataStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataStorageResponse
     *
     * @param UpdateDataStorageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDataStorageResponse
     */
    public function updateDataStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataStorageRegionId) {
            @$body['DataStorageRegionId'] = $request->dataStorageRegionId;
        }

        if (null !== $request->deliveryStatus) {
            @$body['DeliveryStatus'] = $request->deliveryStatus;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataStorage',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日志管理页面里用户数据存储的详情。
     *
     * @param request - UpdateDataStorageRequest
     *
     * @returns UpdateDataStorageResponse
     *
     * @param UpdateDataStorageRequest $request
     *
     * @return UpdateDataStorageResponse
     */
    public function updateDataStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataStorageWithOptions($request, $runtime);
    }

    /**
     * 操作日志投递.
     *
     * @param request - UpdateDataStorageDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataStorageDeliveryResponse
     *
     * @param UpdateDataStorageDeliveryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateDataStorageDeliveryResponse
     */
    public function updateDataStorageDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logCode) {
            @$body['LogCode'] = $request->logCode;
        }

        if (null !== $request->logDeliveryStatus) {
            @$body['LogDeliveryStatus'] = $request->logDeliveryStatus;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataStorageDelivery',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataStorageDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 操作日志投递.
     *
     * @param request - UpdateDataStorageDeliveryRequest
     *
     * @returns UpdateDataStorageDeliveryResponse
     *
     * @param UpdateDataStorageDeliveryRequest $request
     *
     * @return UpdateDataStorageDeliveryResponse
     */
    public function updateDataStorageDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataStorageDeliveryWithOptions($request, $runtime);
    }

    /**
     * 更新数据存储中日志的数据保存天数。
     *
     * @param request - UpdateDataStorageTtlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataStorageTtlResponse
     *
     * @param UpdateDataStorageTtlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDataStorageTtlResponse
     */
    public function updateDataStorageTtlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logStoreColdTtl) {
            @$body['LogStoreColdTtl'] = $request->logStoreColdTtl;
        }

        if (null !== $request->logStoreHotTtl) {
            @$body['LogStoreHotTtl'] = $request->logStoreHotTtl;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->logStoreTtl) {
            @$body['LogStoreTtl'] = $request->logStoreTtl;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataStorageTtl',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataStorageTtlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据存储中日志的数据保存天数。
     *
     * @param request - UpdateDataStorageTtlRequest
     *
     * @returns UpdateDataStorageTtlResponse
     *
     * @param UpdateDataStorageTtlRequest $request
     *
     * @return UpdateDataStorageTtlResponse
     */
    public function updateDataStorageTtl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataStorageTtlWithOptions($request, $runtime);
    }

    /**
     * 更新检测规则.
     *
     * @param request - UpdateDetectionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDetectionRuleResponse
     *
     * @param UpdateDetectionRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDetectionRuleResponse
     */
    public function updateDetectionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertAttCk) {
            @$body['AlertAttCk'] = $request->alertAttCk;
        }

        if (null !== $request->alertDescription) {
            @$body['AlertDescription'] = $request->alertDescription;
        }

        if (null !== $request->alertLevel) {
            @$body['AlertLevel'] = $request->alertLevel;
        }

        if (null !== $request->alertName) {
            @$body['AlertName'] = $request->alertName;
        }

        if (null !== $request->alertSchemaId) {
            @$body['AlertSchemaId'] = $request->alertSchemaId;
        }

        if (null !== $request->alertTacticId) {
            @$body['AlertTacticId'] = $request->alertTacticId;
        }

        if (null !== $request->alertThresholdCount) {
            @$body['AlertThresholdCount'] = $request->alertThresholdCount;
        }

        if (null !== $request->alertThresholdGroup) {
            @$body['AlertThresholdGroup'] = $request->alertThresholdGroup;
        }

        if (null !== $request->alertThresholdPeriod) {
            @$body['AlertThresholdPeriod'] = $request->alertThresholdPeriod;
        }

        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->detectionExpressionContent) {
            @$body['DetectionExpressionContent'] = $request->detectionExpressionContent;
        }

        if (null !== $request->detectionExpressionType) {
            @$body['DetectionExpressionType'] = $request->detectionExpressionType;
        }

        if (null !== $request->detectionRuleDescription) {
            @$body['DetectionRuleDescription'] = $request->detectionRuleDescription;
        }

        if (null !== $request->detectionRuleId) {
            @$body['DetectionRuleId'] = $request->detectionRuleId;
        }

        if (null !== $request->detectionRuleName) {
            @$body['DetectionRuleName'] = $request->detectionRuleName;
        }

        if (null !== $request->detectionRuleStatus) {
            @$body['DetectionRuleStatus'] = $request->detectionRuleStatus;
        }

        if (null !== $request->detectionRuleType) {
            @$body['DetectionRuleType'] = $request->detectionRuleType;
        }

        if (null !== $request->entityMappings) {
            @$body['EntityMappings'] = $request->entityMappings;
        }

        if (null !== $request->incidentAggregationExpression) {
            @$body['IncidentAggregationExpression'] = $request->incidentAggregationExpression;
        }

        if (null !== $request->incidentAggregationType) {
            @$body['IncidentAggregationType'] = $request->incidentAggregationType;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logCategoryId) {
            @$body['LogCategoryId'] = $request->logCategoryId;
        }

        if (null !== $request->logSchemaId) {
            @$body['LogSchemaId'] = $request->logSchemaId;
        }

        if (null !== $request->playbookParameters) {
            @$body['PlaybookParameters'] = $request->playbookParameters;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->scheduleBeginTime) {
            @$body['ScheduleBeginTime'] = $request->scheduleBeginTime;
        }

        if (null !== $request->scheduleExpression) {
            @$body['ScheduleExpression'] = $request->scheduleExpression;
        }

        if (null !== $request->scheduleMaxRetries) {
            @$body['ScheduleMaxRetries'] = $request->scheduleMaxRetries;
        }

        if (null !== $request->scheduleMaxTimeout) {
            @$body['ScheduleMaxTimeout'] = $request->scheduleMaxTimeout;
        }

        if (null !== $request->scheduleType) {
            @$body['ScheduleType'] = $request->scheduleType;
        }

        if (null !== $request->scheduleWindow) {
            @$body['ScheduleWindow'] = $request->scheduleWindow;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDetectionRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDetectionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新检测规则.
     *
     * @param request - UpdateDetectionRuleRequest
     *
     * @returns UpdateDetectionRuleResponse
     *
     * @param UpdateDetectionRuleRequest $request
     *
     * @return UpdateDetectionRuleResponse
     */
    public function updateDetectionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDetectionRuleWithOptions($request, $runtime);
    }

    /**
     * 更新标准化规则.
     *
     * @param tmpReq - UpdateNormalizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNormalizationRuleResponse
     *
     * @param UpdateNormalizationRuleRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateNormalizationRuleResponse
     */
    public function updateNormalizationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateNormalizationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->normalizationRuleIds) {
            $request->normalizationRuleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->normalizationRuleIds, 'NormalizationRuleIds', 'json');
        }

        $body = [];
        if (null !== $request->extendContentPacked) {
            @$body['ExtendContentPacked'] = $request->extendContentPacked;
        }

        if (null !== $request->extendFieldStoreMode) {
            @$body['ExtendFieldStoreMode'] = $request->extendFieldStoreMode;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationCategoryId) {
            @$body['NormalizationCategoryId'] = $request->normalizationCategoryId;
        }

        if (null !== $request->normalizationRuleDescription) {
            @$body['NormalizationRuleDescription'] = $request->normalizationRuleDescription;
        }

        if (null !== $request->normalizationRuleExpression) {
            @$body['NormalizationRuleExpression'] = $request->normalizationRuleExpression;
        }

        if (null !== $request->normalizationRuleFormat) {
            @$body['NormalizationRuleFormat'] = $request->normalizationRuleFormat;
        }

        if (null !== $request->normalizationRuleId) {
            @$body['NormalizationRuleId'] = $request->normalizationRuleId;
        }

        if (null !== $request->normalizationRuleIdsShrink) {
            @$body['NormalizationRuleIds'] = $request->normalizationRuleIdsShrink;
        }

        if (null !== $request->normalizationRuleMode) {
            @$body['NormalizationRuleMode'] = $request->normalizationRuleMode;
        }

        if (null !== $request->normalizationRuleName) {
            @$body['NormalizationRuleName'] = $request->normalizationRuleName;
        }

        if (null !== $request->normalizationRuleType) {
            @$body['NormalizationRuleType'] = $request->normalizationRuleType;
        }

        if (null !== $request->normalizationSchemaId) {
            @$body['NormalizationSchemaId'] = $request->normalizationSchemaId;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorId) {
            @$body['VendorId'] = $request->vendorId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNormalizationRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNormalizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新标准化规则.
     *
     * @param request - UpdateNormalizationRuleRequest
     *
     * @returns UpdateNormalizationRuleResponse
     *
     * @param UpdateNormalizationRuleRequest $request
     *
     * @return UpdateNormalizationRuleResponse
     */
    public function updateNormalizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNormalizationRuleWithOptions($request, $runtime);
    }

    /**
     * 更新标准化结构.
     *
     * @param request - UpdateNormalizationSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNormalizationSchemaResponse
     *
     * @param UpdateNormalizationSchemaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateNormalizationSchemaResponse
     */
    public function updateNormalizationSchemaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->normalizationFields) {
            @$body['NormalizationFields'] = $request->normalizationFields;
        }

        if (null !== $request->normalizationSchemaDescription) {
            @$body['NormalizationSchemaDescription'] = $request->normalizationSchemaDescription;
        }

        if (null !== $request->normalizationSchemaId) {
            @$body['NormalizationSchemaId'] = $request->normalizationSchemaId;
        }

        if (null !== $request->normalizationSchemaName) {
            @$body['NormalizationSchemaName'] = $request->normalizationSchemaName;
        }

        if (null !== $request->normalizationSchemaType) {
            @$body['NormalizationSchemaType'] = $request->normalizationSchemaType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNormalizationSchema',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNormalizationSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新标准化结构.
     *
     * @param request - UpdateNormalizationSchemaRequest
     *
     * @returns UpdateNormalizationSchemaResponse
     *
     * @param UpdateNormalizationSchemaRequest $request
     *
     * @return UpdateNormalizationSchemaResponse
     */
    public function updateNormalizationSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNormalizationSchemaWithOptions($request, $runtime);
    }

    /**
     * 更新产品品
     *
     * @param request - UpdateProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProductResponse
     *
     * @param UpdateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProductResponse
     */
    public function updateProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productName) {
            @$body['ProductName'] = $request->productName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorName) {
            @$body['VendorName'] = $request->vendorName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProduct',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新产品品
     *
     * @param request - UpdateProductRequest
     *
     * @returns UpdateProductResponse
     *
     * @param UpdateProductRequest $request
     *
     * @return UpdateProductResponse
     */
    public function updateProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProductWithOptions($request, $runtime);
    }

    /**
     * 更新厂商.
     *
     * @param request - UpdateVendorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVendorResponse
     *
     * @param UpdateVendorRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateVendorResponse
     */
    public function updateVendorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorId) {
            @$body['VendorId'] = $request->vendorId;
        }

        if (null !== $request->vendorName) {
            @$body['VendorName'] = $request->vendorName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVendor',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVendorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新厂商.
     *
     * @param request - UpdateVendorRequest
     *
     * @returns UpdateVendorResponse
     *
     * @param UpdateVendorRequest $request
     *
     * @return UpdateVendorResponse
     */
    public function updateVendor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVendorWithOptions($request, $runtime);
    }

    /**
     * 校验LogStore.
     *
     * @param request - ValidateLogStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateLogStoreResponse
     *
     * @param ValidateLogStoreRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ValidateLogStoreResponse
     */
    public function validateLogStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logProjectName) {
            @$body['LogProjectName'] = $request->logProjectName;
        }

        if (null !== $request->logRegionId) {
            @$body['LogRegionId'] = $request->logRegionId;
        }

        if (null !== $request->logStoreName) {
            @$body['LogStoreName'] = $request->logStoreName;
        }

        if (null !== $request->logUserId) {
            @$body['LogUserId'] = $request->logUserId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateLogStore',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateLogStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验LogStore.
     *
     * @param request - ValidateLogStoreRequest
     *
     * @returns ValidateLogStoreResponse
     *
     * @param ValidateLogStoreRequest $request
     *
     * @return ValidateLogStoreResponse
     */
    public function validateLogStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateLogStoreWithOptions($request, $runtime);
    }

    /**
     * 校验规则和数据.
     *
     * @param request - ValidateNormalizationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateNormalizationRuleResponse
     *
     * @param ValidateNormalizationRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ValidateNormalizationRuleResponse
     */
    public function validateNormalizationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->extendFieldStoreMode) {
            @$body['ExtendFieldStoreMode'] = $request->extendFieldStoreMode;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->logSample) {
            @$body['LogSample'] = $request->logSample;
        }

        if (null !== $request->normalizationCategoryId) {
            @$body['NormalizationCategoryId'] = $request->normalizationCategoryId;
        }

        if (null !== $request->normalizationRuleExpression) {
            @$body['NormalizationRuleExpression'] = $request->normalizationRuleExpression;
        }

        if (null !== $request->normalizationRuleMode) {
            @$body['NormalizationRuleMode'] = $request->normalizationRuleMode;
        }

        if (null !== $request->normalizationSchemaId) {
            @$body['NormalizationSchemaId'] = $request->normalizationSchemaId;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->vendorId) {
            @$body['VendorId'] = $request->vendorId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateNormalizationRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateNormalizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验规则和数据.
     *
     * @param request - ValidateNormalizationRuleRequest
     *
     * @returns ValidateNormalizationRuleResponse
     *
     * @param ValidateNormalizationRuleRequest $request
     *
     * @return ValidateNormalizationRuleResponse
     */
    public function validateNormalizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateNormalizationRuleWithOptions($request, $runtime);
    }
}
