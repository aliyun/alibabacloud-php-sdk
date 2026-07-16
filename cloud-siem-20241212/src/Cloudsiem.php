<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CheckUpgradeItemRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CheckUpgradeItemResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateAutoDisposeConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateAutoDisposeConfigResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateResponseRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateResponseRuleResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteNormalizationSchemaRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteNormalizationSchemaResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteProductRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteProductResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteResponseRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteResponseRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteVendorRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DeleteVendorResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DisableDataIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\DisableDataIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\EnableDataIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\EnableDataIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteAutoDisposeRecordsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteAutoDisposeRecordsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteLogQueryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteLogQueryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteUpgradeRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteUpgradeResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetAlertRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetAlertResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetAutoDisposeConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetAutoDisposeConfigResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetResponseRuleStatisticRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetResponseRuleStatisticResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetUserConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetUserConfigResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAlertsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAlertsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAutoDisposeEntitiesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAutoDisposeEntitiesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAutoDisposeEntitiesShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataConnectorsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataConnectorsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataConnectorsShrinkRequest;
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
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationSecurityDomainsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationSecurityDomainsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListProductsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListProductsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListProductsShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListQueryViewsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListQueryViewsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRuleFieldsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRuleFieldsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRulesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRulesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTagsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTagsResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateAlertRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateAlertResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateAutoDisposeConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateAutoDisposeConfigResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateAutoDisposeRecordRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateAutoDisposeRecordResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataBatchIngestionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataBatchIngestionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataBatchIngestionShrinkRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataConnectorRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateDataConnectorResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateResponseRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateResponseRuleResponse;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shanghai' => 'cloud-siem.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'cloud-siem.ap-southeast-1.aliyuncs.com',
        ];
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
     * Checks for available version upgrades.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class that includes configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Checks for available version upgrades.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class that includes configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Creates an auto-dispose configuration.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. Refer to the helper class in the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java) for configuration examples.
     *
     * @param request - CreateAutoDisposeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAutoDisposeConfigResponse
     *
     * @param CreateAutoDisposeConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAutoDisposeConfigResponse
     */
    public function createAutoDisposeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoDecisionStatus) {
            @$body['AutoDecisionStatus'] = $request->autoDecisionStatus;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAutoDisposeConfig',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAutoDisposeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an auto-dispose configuration.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. Refer to the helper class in the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java) for configuration examples.
     *
     * @param request - CreateAutoDisposeConfigRequest
     *
     * @returns CreateAutoDisposeConfigResponse
     *
     * @param CreateAutoDisposeConfigRequest $request
     *
     * @return CreateAutoDisposeConfigResponse
     */
    public function createAutoDisposeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoDisposeConfigWithOptions($request, $runtime);
    }

    /**
     * Creates a data ingestion policy.
     *
     * @remarks
     * The frequency and timing of notifications are limited. Each user receives a maximum of two notifications per day between 08:00 and 20:00.
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
     * Creates a data ingestion policy.
     *
     * @remarks
     * The frequency and timing of notifications are limited. Each user receives a maximum of two notifications per day between 08:00 and 20:00.
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
     * Creates a dataset.
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
     * Creates a dataset.
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
     * Creates a data source.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON object. For a configuration example, see the supporting tool class in the [demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Creates a data source.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON object. For a configuration example, see the supporting tool class in the [demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Creates a detection rule.
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

        if (null !== $request->alertAttCkMapping) {
            @$body['AlertAttCkMapping'] = $request->alertAttCkMapping;
        }

        if (null !== $request->alertDescription) {
            @$body['AlertDescription'] = $request->alertDescription;
        }

        if (null !== $request->alertLevel) {
            @$body['AlertLevel'] = $request->alertLevel;
        }

        if (null !== $request->alertLevelMapping) {
            @$body['AlertLevelMapping'] = $request->alertLevelMapping;
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

        if (null !== $request->alertTypeMapping) {
            @$body['AlertTypeMapping'] = $request->alertTypeMapping;
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
     * Creates a detection rule.
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
     * Creates an export task.
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
     * Creates an export task.
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
     * Configure client-side storage restrictions.
     *
     * @remarks
     * The JsonConfig input parameter uses a complex JSON structure. A supporting tool class is provided to simplify this configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Configure client-side storage restrictions.
     *
     * @remarks
     * The JsonConfig input parameter uses a complex JSON structure. A supporting tool class is provided to simplify this configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Creates a normalization rule.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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

        if (null !== $request->normalizationSecurityDomainId) {
            @$body['NormalizationSecurityDomainId'] = $request->normalizationSecurityDomainId;
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
     * Creates a normalization rule.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Creates a data source.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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

        if (null !== $request->normalizationFieldSource) {
            @$body['NormalizationFieldSource'] = $request->normalizationFieldSource;
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

        if (null !== $request->normalizationSecurityDomainId) {
            @$body['NormalizationSecurityDomainId'] = $request->normalizationSecurityDomainId;
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

        if (null !== $request->targetLogStore) {
            @$body['TargetLogStore'] = $request->targetLogStore;
        }

        if (null !== $request->vendorId) {
            @$body['VendorId'] = $request->vendorId;
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
     * Creates a data source.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Creates a product.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class is available and provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Creates a product.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class is available and provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Creates an automatic response rule.
     *
     * @remarks
     * Some parameters require complex JSON configurations. We provide a helper class with configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - CreateResponseRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResponseRuleResponse
     *
     * @param CreateResponseRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateResponseRuleResponse
     */
    public function createResponseRuleWithOptions($request, $runtime)
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

        if (null !== $request->responseActionConfig) {
            @$body['ResponseActionConfig'] = $request->responseActionConfig;
        }

        if (null !== $request->responseActionType) {
            @$body['ResponseActionType'] = $request->responseActionType;
        }

        if (null !== $request->responseExecutionCondition) {
            @$body['ResponseExecutionCondition'] = $request->responseExecutionCondition;
        }

        if (null !== $request->responseRuleName) {
            @$body['ResponseRuleName'] = $request->responseRuleName;
        }

        if (null !== $request->responseRulePriority) {
            @$body['ResponseRulePriority'] = $request->responseRulePriority;
        }

        if (null !== $request->responseTriggerType) {
            @$body['ResponseTriggerType'] = $request->responseTriggerType;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResponseRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResponseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an automatic response rule.
     *
     * @remarks
     * Some parameters require complex JSON configurations. We provide a helper class with configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - CreateResponseRuleRequest
     *
     * @returns CreateResponseRuleResponse
     *
     * @param CreateResponseRuleRequest $request
     *
     * @return CreateResponseRuleResponse
     */
    public function createResponseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResponseRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a vendor.
     *
     * @remarks
     * Notifications are limited by frequency and time. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside this time frame.
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
     * Creates a vendor.
     *
     * @remarks
     * Notifications are limited by frequency and time. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside this time frame.
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
     * Deletes a data ingestion policy.
     *
     * @remarks
     * Notifications are sent only between 08:00 and 20:00. Each user can receive a maximum of two notifications per day.
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
     * Deletes a data ingestion policy.
     *
     * @remarks
     * Notifications are sent only between 08:00 and 20:00. Each user can receive a maximum of two notifications per day.
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
     * Deletes a dataset.
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
     * Deletes a dataset.
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
     * Deletes dataset records.
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
     * Deletes dataset records.
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
     * Deletes a data source.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes a data source.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes a detection rule.
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
     * Deletes a detection rule.
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
     * Deletes a Logstore.
     *
     * @remarks
     * The \\`JsonConfig\\` request parameter is a complex JSON configuration. A supporting tool class with configuration examples is available. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes a Logstore.
     *
     * @remarks
     * The \\`JsonConfig\\` request parameter is a complex JSON configuration. A supporting tool class with configuration examples is available. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes a normalization rule.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class that contains configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes a normalization rule.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class that contains configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes a normalization rule version.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class with configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes a normalization rule version.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class with configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes a normalization schema.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. We provide a utility class to help with specific configuration examples. For more information, see [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - DeleteNormalizationSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNormalizationSchemaResponse
     *
     * @param DeleteNormalizationSchemaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteNormalizationSchemaResponse
     */
    public function deleteNormalizationSchemaWithOptions($request, $runtime)
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
            'action' => 'DeleteNormalizationSchema',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNormalizationSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a normalization schema.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. We provide a utility class to help with specific configuration examples. For more information, see [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - DeleteNormalizationSchemaRequest
     *
     * @returns DeleteNormalizationSchemaResponse
     *
     * @param DeleteNormalizationSchemaRequest $request
     *
     * @return DeleteNormalizationSchemaResponse
     */
    public function deleteNormalizationSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNormalizationSchemaWithOptions($request, $runtime);
    }

    /**
     * Deletes a product.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class is provided to help you create the configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes a product.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class is provided to help you create the configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Deletes an automatic response rule.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day between 08:00 and 20:00.
     *
     * @param request - DeleteResponseRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResponseRuleResponse
     *
     * @param DeleteResponseRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteResponseRuleResponse
     */
    public function deleteResponseRuleWithOptions($request, $runtime)
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

        if (null !== $request->responseRuleId) {
            @$body['ResponseRuleId'] = $request->responseRuleId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteResponseRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteResponseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an automatic response rule.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day between 08:00 and 20:00.
     *
     * @param request - DeleteResponseRuleRequest
     *
     * @returns DeleteResponseRuleResponse
     *
     * @param DeleteResponseRuleRequest $request
     *
     * @return DeleteResponseRuleResponse
     */
    public function deleteResponseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResponseRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a vendor.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day. These notifications are sent only between 08:00 and 20:00.
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
     * Deletes a vendor.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day. These notifications are sent only between 08:00 and 20:00.
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
     * Disables a data ingestion policy.
     *
     * @remarks
     * The frequency and time of notifications are limited. Each user receives a maximum of two notifications per day between 08:00 and 20:00.
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
     * Disables a data ingestion policy.
     *
     * @remarks
     * The frequency and time of notifications are limited. Each user receives a maximum of two notifications per day between 08:00 and 20:00.
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
     * Enables the data ingestion policy.
     *
     * @remarks
     * Notification frequency is limited to a maximum of two per user per day. Notifications are sent only between 08:00 and 20:00.
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
     * Enables the data ingestion policy.
     *
     * @remarks
     * Notification frequency is limited to a maximum of two per user per day. Notifications are sent only between 08:00 and 20:00.
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
     * Manually handles alerts. Batch operations are supported.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ExecuteAutoDisposeRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteAutoDisposeRecordsResponse
     *
     * @param ExecuteAutoDisposeRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExecuteAutoDisposeRecordsResponse
     */
    public function executeAutoDisposeRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        $bodyFlat = [];
        if (null !== $request->selectedEntityList) {
            @$bodyFlat['SelectedEntityList'] = $request->selectedEntityList;
        }

        if (null !== $request->unSelectedEntityList) {
            @$bodyFlat['UnSelectedEntityList'] = $request->unSelectedEntityList;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteAutoDisposeRecords',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteAutoDisposeRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually handles alerts. Batch operations are supported.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ExecuteAutoDisposeRecordsRequest
     *
     * @returns ExecuteAutoDisposeRecordsResponse
     *
     * @param ExecuteAutoDisposeRecordsRequest $request
     *
     * @return ExecuteAutoDisposeRecordsResponse
     */
    public function executeAutoDisposeRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeAutoDisposeRecordsWithOptions($request, $runtime);
    }

    /**
     * Executes a data query.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON Configurations. A utility class is provided to help with specific configuration examples. Refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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

        if (null !== $request->logCondition) {
            @$body['LogCondition'] = $request->logCondition;
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
     * Executes a data query.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON Configurations. A utility class is provided to help with specific configuration examples. Refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Performs a version upgrade.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class is provided to assist with this configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Performs a version upgrade.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class is provided to assist with this configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves the details of an alert.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. We provide a utility class to help with specific configuration examples. For more information, see [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - GetAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlertResponse
     *
     * @param GetAlertRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAlertResponse
     */
    public function getAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertUuid) {
            @$body['AlertUuid'] = $request->alertUuid;
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

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAlert',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an alert.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. We provide a utility class to help with specific configuration examples. For more information, see [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - GetAlertRequest
     *
     * @returns GetAlertResponse
     *
     * @param GetAlertRequest $request
     *
     * @return GetAlertResponse
     */
    public function getAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlertWithOptions($request, $runtime);
    }

    /**
     * Retrieves the automatic response configuration.
     *
     * @remarks
     * The `JsonConfig` input parameter uses a complex JSON structure. Refer to the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java) for a helper utility and configuration examples.
     *
     * @param request - GetAutoDisposeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoDisposeConfigResponse
     *
     * @param GetAutoDisposeConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAutoDisposeConfigResponse
     */
    public function getAutoDisposeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAutoDisposeConfig',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoDisposeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the automatic response configuration.
     *
     * @remarks
     * The `JsonConfig` input parameter uses a complex JSON structure. Refer to the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java) for a helper utility and configuration examples.
     *
     * @param request - GetAutoDisposeConfigRequest
     *
     * @returns GetAutoDisposeConfigResponse
     *
     * @param GetAutoDisposeConfigRequest $request
     *
     * @return GetAutoDisposeConfigResponse
     */
    public function getAutoDisposeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoDisposeConfigWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a batch data ingestion task.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class with configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves the details of a batch data ingestion task.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class with configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves the details of user logs in log management.
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
     * Retrieves the details of user logs in log management.
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
     * Retrieves the count of detection rules.
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
     * Retrieves the count of detection rules.
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
     * Retrieves the progress of an export task.
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
     * Retrieves the progress of an export task.
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
     * Retrieves the details of an event.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration string. A utility class is provided to help with specific configuration examples. For more information, see [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves the details of an event.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration string. A utility class is provided to help with specific configuration examples. For more information, see [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a log ticket.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class is provided to assist with the configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a log ticket.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class is provided to assist with the configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves normalization rule information.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration string. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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

        if (null !== $request->normalizationSecurityDomainId) {
            @$body['NormalizationSecurityDomainId'] = $request->normalizationSecurityDomainId;
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
     * Retrieves normalization rule information.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration string. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves information about a normalization rule version.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class provides examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves information about a normalization rule version.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class provides examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a normalization schema.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration string. A supporting tool class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a normalization schema.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration string. A supporting tool class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves the count of automated response rules.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user receives a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time range.
     *
     * @param request - GetResponseRuleStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResponseRuleStatisticResponse
     *
     * @param GetResponseRuleStatisticRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetResponseRuleStatisticResponse
     */
    public function getResponseRuleStatisticWithOptions($request, $runtime)
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

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetResponseRuleStatistic',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResponseRuleStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the count of automated response rules.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user receives a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time range.
     *
     * @param request - GetResponseRuleStatisticRequest
     *
     * @returns GetResponseRuleStatisticResponse
     *
     * @param GetResponseRuleStatisticRequest $request
     *
     * @return GetResponseRuleStatisticResponse
     */
    public function getResponseRuleStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResponseRuleStatisticWithOptions($request, $runtime);
    }

    /**
     * Retrieves user information.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON object. A supporting tool class is provided to help you create the configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves user information.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON object. A supporting tool class is provided to help you create the configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of alerts.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. We provide a utility class with configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ListAlertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertsResponse
     *
     * @param ListAlertsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListAlertsResponse
     */
    public function listAlertsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertLevel) {
            @$body['AlertLevel'] = $request->alertLevel;
        }

        if (null !== $request->alertUuid) {
            @$body['AlertUuid'] = $request->alertUuid;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
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

        if (null !== $request->queryCondition) {
            @$body['QueryCondition'] = $request->queryCondition;
        }

        if (null !== $request->queryViewId) {
            @$body['QueryViewId'] = $request->queryViewId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
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

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAlerts',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of alerts.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. We provide a utility class with configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ListAlertsRequest
     *
     * @returns ListAlertsResponse
     *
     * @param ListAlertsRequest $request
     *
     * @return ListAlertsResponse
     */
    public function listAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertsWithOptions($request, $runtime);
    }

    /**
     * Get AI-analyzed entity list.
     *
     * @remarks
     * Each user can receive up to two notifications daily, but only between 08:00 and 20:00.
     *
     * @param tmpReq - ListAutoDisposeEntitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAutoDisposeEntitiesResponse
     *
     * @param ListAutoDisposeEntitiesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAutoDisposeEntitiesResponse
     */
    public function listAutoDisposeEntitiesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAutoDisposeEntitiesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->autoDisposeRecordIds) {
            $request->autoDisposeRecordIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->autoDisposeRecordIds, 'AutoDisposeRecordIds', 'simple');
        }

        $body = [];
        if (null !== $request->autoDisposeRecordIdsShrink) {
            @$body['AutoDisposeRecordIds'] = $request->autoDisposeRecordIdsShrink;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
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

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAutoDisposeEntities',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAutoDisposeEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get AI-analyzed entity list.
     *
     * @remarks
     * Each user can receive up to two notifications daily, but only between 08:00 and 20:00.
     *
     * @param request - ListAutoDisposeEntitiesRequest
     *
     * @returns ListAutoDisposeEntitiesResponse
     *
     * @param ListAutoDisposeEntitiesRequest $request
     *
     * @return ListAutoDisposeEntitiesResponse
     */
    public function listAutoDisposeEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoDisposeEntitiesWithOptions($request, $runtime);
    }

    /**
     * Queries collectors by paging.
     *
     * @param tmpReq - ListDataConnectorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataConnectorsResponse
     *
     * @param ListDataConnectorsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListDataConnectorsResponse
     */
    public function listDataConnectorsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataConnectorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataConnectorIds) {
            $request->dataConnectorIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataConnectorIds, 'DataConnectorIds', 'json');
        }

        $body = [];
        if (null !== $request->dataConnectorIdsShrink) {
            @$body['DataConnectorIds'] = $request->dataConnectorIdsShrink;
        }

        if (null !== $request->dataConnectorName) {
            @$body['DataConnectorName'] = $request->dataConnectorName;
        }

        if (null !== $request->dataConnectorStatus) {
            @$body['DataConnectorStatus'] = $request->dataConnectorStatus;
        }

        if (null !== $request->dataConnectorType) {
            @$body['DataConnectorType'] = $request->dataConnectorType;
        }

        if (null !== $request->destDataSourceId) {
            @$body['DestDataSourceId'] = $request->destDataSourceId;
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

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->slsIngestionJobName) {
            @$body['SlsIngestionJobName'] = $request->slsIngestionJobName;
        }

        if (null !== $request->srcDataType) {
            @$body['SrcDataType'] = $request->srcDataType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataConnectors',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries collectors by paging.
     *
     * @param request - ListDataConnectorsRequest
     *
     * @returns ListDataConnectorsResponse
     *
     * @param ListDataConnectorsRequest $request
     *
     * @return ListDataConnectorsResponse
     */
    public function listDataConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataConnectorsWithOptions($request, $runtime);
    }

    /**
     * Queries data ingestion templates.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside this time frame.
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
     * Queries data ingestion templates.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside this time frame.
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
     * Retrieves a list of data access policies.
     *
     * @remarks
     * Each user receives up to two notifications per day, sent only between 08:00 and 20:00.
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

        if (null !== $tmpReq->normalizationSchemaIds) {
            $request->normalizationSchemaIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->normalizationSchemaIds, 'NormalizationSchemaIds', 'simple');
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

        if (null !== $request->normalizationSchemaIdsShrink) {
            @$body['NormalizationSchemaIds'] = $request->normalizationSchemaIdsShrink;
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
     * Retrieves a list of data access policies.
     *
     * @remarks
     * Each user receives up to two notifications per day, sent only between 08:00 and 20:00.
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
     * Retrieves a list of dataset records.
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

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
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
     * Retrieves a list of dataset records.
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
     * Retrieves a list of datasets.
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
     * Retrieves a list of datasets.
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
     * Queries data source templates.
     *
     * @remarks
     * Notifications are limited by frequency and time. Each user receives a maximum of two notifications per day between 08:00 and 20:00.
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
     * Queries data source templates.
     *
     * @remarks
     * Notifications are limited by frequency and time. Each user receives a maximum of two notifications per day between 08:00 and 20:00.
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
     * Lists data sources.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. A maximum of two notifications are sent to each user per day, and only between 08:00 and 20:00.
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
     * Lists data sources.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. A maximum of two notifications are sent to each user per day, and only between 08:00 and 20:00.
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
     * Retrieves a list of detection rules.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day. These notifications are sent only between 08:00 and 20:00.
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
     * Retrieves a list of detection rules.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day. These notifications are sent only between 08:00 and 20:00.
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
     * Retrieves a list of events.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user receives a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time window.
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

        if (null !== $request->incidentStatusList) {
            @$body['IncidentStatusList'] = $request->incidentStatusList;
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
     * Retrieves a list of events.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user receives a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time window.
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
     * Lists log projects.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class is available to simplify this configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Lists log projects.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class is available to simplify this configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves all regions.
     *
     * @remarks
     * The \\`JsonConfig\\` request parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves all regions.
     *
     * @remarks
     * The \\`JsonConfig\\` request parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of Logstores.
     *
     * @remarks
     * The notification frequency is limited. Each user can receive up to two notifications per day between 08:00 and 20:00. No notifications are sent outside this time frame.
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
     * Retrieves a list of Logstores.
     *
     * @remarks
     * The notification frequency is limited. Each user can receive up to two notifications per day between 08:00 and 20:00. No notifications are sent outside this time frame.
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
     * Lists normalization categories.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day between 08:00 and 20:00.
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
     * Lists normalization categories.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day between 08:00 and 20:00.
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
     * Retrieves a list of normalization fields.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, see [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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

        if (null !== $request->normalizationFieldSource) {
            @$body['NormalizationFieldSource'] = $request->normalizationFieldSource;
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
     * Retrieves a list of normalization fields.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, see [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Lists the security capabilities of normalization rules.
     *
     * @remarks
     * The \\`JsonConfig\\` request parameter is a complex JSON configuration. A helper tool class is provided with configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Lists the security capabilities of normalization rules.
     *
     * @remarks
     * The \\`JsonConfig\\` request parameter is a complex JSON configuration. A helper tool class is provided with configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Queries a list of normalization rule versions.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class is available and provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Queries a list of normalization rule versions.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class is available and provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of normalization rules.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user can receive a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time window.
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

        if (null !== $request->normalizationSecurityDomainId) {
            @$body['NormalizationSecurityDomainId'] = $request->normalizationSecurityDomainId;
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
     * Retrieves a list of normalization rules.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user can receive a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time window.
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
     * Retrieves a list of normalization schemas.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class with specific configuration examples is provided. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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

        if (null !== $request->normalizationFieldSource) {
            @$body['NormalizationFieldSource'] = $request->normalizationFieldSource;
        }

        if (null !== $request->normalizationSchemaType) {
            @$body['NormalizationSchemaType'] = $request->normalizationSchemaType;
        }

        if (null !== $request->normalizationSecurityDomainId) {
            @$body['NormalizationSecurityDomainId'] = $request->normalizationSecurityDomainId;
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
     * Retrieves a list of normalization schemas.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class with specific configuration examples is provided. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of security domains.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ListNormalizationSecurityDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNormalizationSecurityDomainsResponse
     *
     * @param ListNormalizationSecurityDomainsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListNormalizationSecurityDomainsResponse
     */
    public function listNormalizationSecurityDomainsWithOptions($request, $runtime)
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
            'action' => 'ListNormalizationSecurityDomains',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNormalizationSecurityDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of security domains.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ListNormalizationSecurityDomainsRequest
     *
     * @returns ListNormalizationSecurityDomainsResponse
     *
     * @param ListNormalizationSecurityDomainsRequest $request
     *
     * @return ListNormalizationSecurityDomainsResponse
     */
    public function listNormalizationSecurityDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNormalizationSecurityDomainsWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of products.
     *
     * @remarks
     * The \\`JsonConfig\\` request parameter is a complex JSON configuration. A supporting tool class is provided that contains configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of products.
     *
     * @remarks
     * The \\`JsonConfig\\` request parameter is a complex JSON configuration. A supporting tool class is provided that contains configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of query views.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ListQueryViewsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueryViewsResponse
     *
     * @param ListQueryViewsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListQueryViewsResponse
     */
    public function listQueryViewsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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

        if (null !== $request->queryViewScene) {
            @$body['QueryViewScene'] = $request->queryViewScene;
        }

        if (null !== $request->queryViewType) {
            @$body['QueryViewType'] = $request->queryViewType;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListQueryViews',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQueryViewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of query views.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ListQueryViewsRequest
     *
     * @returns ListQueryViewsResponse
     *
     * @param ListQueryViewsRequest $request
     *
     * @return ListQueryViewsResponse
     */
    public function listQueryViews($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueryViewsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the field list of automated response rules.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user receives a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time range.
     *
     * @param request - ListResponseRuleFieldsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResponseRuleFieldsResponse
     *
     * @param ListResponseRuleFieldsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListResponseRuleFieldsResponse
     */
    public function listResponseRuleFieldsWithOptions($request, $runtime)
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

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListResponseRuleFields',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResponseRuleFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the field list of automated response rules.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user receives a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time range.
     *
     * @param request - ListResponseRuleFieldsRequest
     *
     * @returns ListResponseRuleFieldsResponse
     *
     * @param ListResponseRuleFieldsRequest $request
     *
     * @return ListResponseRuleFieldsResponse
     */
    public function listResponseRuleFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResponseRuleFieldsWithOptions($request, $runtime);
    }

    /**
     * Paginated query of auto-response rules.
     *
     * @remarks
     * Each user can receive up to two notifications per day between 08:00 and 20:00.
     *
     * @param request - ListResponseRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResponseRulesResponse
     *
     * @param ListResponseRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListResponseRulesResponse
     */
    public function listResponseRulesWithOptions($request, $runtime)
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

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->responseActionType) {
            @$body['ResponseActionType'] = $request->responseActionType;
        }

        if (null !== $request->responseRuleName) {
            @$body['ResponseRuleName'] = $request->responseRuleName;
        }

        if (null !== $request->responseRuleStatus) {
            @$body['ResponseRuleStatus'] = $request->responseRuleStatus;
        }

        if (null !== $request->responseRuleType) {
            @$body['ResponseRuleType'] = $request->responseRuleType;
        }

        if (null !== $request->responseTriggerType) {
            @$body['ResponseTriggerType'] = $request->responseTriggerType;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListResponseRules',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResponseRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paginated query of auto-response rules.
     *
     * @remarks
     * Each user can receive up to two notifications per day between 08:00 and 20:00.
     *
     * @param request - ListResponseRulesRequest
     *
     * @returns ListResponseRulesResponse
     *
     * @param ListResponseRulesRequest $request
     *
     * @return ListResponseRulesResponse
     */
    public function listResponseRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResponseRulesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tags.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ListTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
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

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->targetRelation) {
            @$body['TargetRelation'] = $request->targetRelation;
        }

        if (null !== $request->targetType) {
            @$body['TargetType'] = $request->targetType;
        }

        if (null !== $request->targetUuid) {
            @$body['TargetUuid'] = $request->targetUuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTags',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tags.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - ListTagsRequest
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of traffic statistics.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class with configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of traffic statistics.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class with configuration examples is provided. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of upgrade items.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class provides examples for this configuration. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of upgrade items.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class provides examples for this configuration. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Retrieves a list of vendors.
     *
     * @remarks
     * The frequency and time of notifications are limited. Each user can receive a maximum of two notifications per day, which are sent only between 08:00 and 20:00.
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
     * Retrieves a list of vendors.
     *
     * @remarks
     * The frequency and time of notifications are limited. Each user can receive a maximum of two notifications per day, which are sent only between 08:00 and 20:00.
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
     * Refreshes a data source.
     *
     * @remarks
     * There are limits on the frequency and time of notifications. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside of this time frame.
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
     * Refreshes a data source.
     *
     * @remarks
     * There are limits on the frequency and time of notifications. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside of this time frame.
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
     * Resets the log storage for a user.
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
     * Resets the log storage for a user.
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
     * Sets the default version of a normalization rule.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user can receive a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time window.
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
     * Sets the default version of a normalization rule.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user can receive a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time window.
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
     * Updates an alert.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user receives a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time range.
     *
     * @param request - UpdateAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAlertResponse
     *
     * @param UpdateAlertRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAlertResponse
     */
    public function updateAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertStatus) {
            @$body['AlertStatus'] = $request->alertStatus;
        }

        if (null !== $request->alertUuid) {
            @$body['AlertUuid'] = $request->alertUuid;
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

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlert',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an alert.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user receives a maximum of two notifications per day between 08:00 and 20:00. No notifications are sent outside this time range.
     *
     * @param request - UpdateAlertRequest
     *
     * @returns UpdateAlertResponse
     *
     * @param UpdateAlertRequest $request
     *
     * @return UpdateAlertResponse
     */
    public function updateAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlertWithOptions($request, $runtime);
    }

    /**
     * Updates the auto-dispose configuration.
     *
     * @remarks
     * The `JsonConfig` parameter is a complex JSON configuration. See the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java) for helper utility classes and configuration examples.
     *
     * @param request - UpdateAutoDisposeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutoDisposeConfigResponse
     *
     * @param UpdateAutoDisposeConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAutoDisposeConfigResponse
     */
    public function updateAutoDisposeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoDecisionStatus) {
            @$body['AutoDecisionStatus'] = $request->autoDecisionStatus;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAutoDisposeConfig',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAutoDisposeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the auto-dispose configuration.
     *
     * @remarks
     * The `JsonConfig` parameter is a complex JSON configuration. See the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java) for helper utility classes and configuration examples.
     *
     * @param request - UpdateAutoDisposeConfigRequest
     *
     * @returns UpdateAutoDisposeConfigResponse
     *
     * @param UpdateAutoDisposeConfigRequest $request
     *
     * @return UpdateAutoDisposeConfigResponse
     */
    public function updateAutoDisposeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoDisposeConfigWithOptions($request, $runtime);
    }

    /**
     * Updates an automatic alert analysis record.
     *
     * @remarks
     * The AutoDecisionEntityList parameter is a JSON-formatted string. A helper class is available to simplify its creation. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - UpdateAutoDisposeRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutoDisposeRecordResponse
     *
     * @param UpdateAutoDisposeRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAutoDisposeRecordResponse
     */
    public function updateAutoDisposeRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoDecisionConclusion) {
            @$body['AutoDecisionConclusion'] = $request->autoDecisionConclusion;
        }

        if (null !== $request->autoDecisionEntityList) {
            @$body['AutoDecisionEntityList'] = $request->autoDecisionEntityList;
        }

        if (null !== $request->autoDecisionResult) {
            @$body['AutoDecisionResult'] = $request->autoDecisionResult;
        }

        if (null !== $request->autoDisposeRecordId) {
            @$body['AutoDisposeRecordId'] = $request->autoDisposeRecordId;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAutoDisposeRecord',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAutoDisposeRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an automatic alert analysis record.
     *
     * @remarks
     * The AutoDecisionEntityList parameter is a JSON-formatted string. A helper class is available to simplify its creation. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
     *
     * @param request - UpdateAutoDisposeRecordRequest
     *
     * @returns UpdateAutoDisposeRecordResponse
     *
     * @param UpdateAutoDisposeRecordRequest $request
     *
     * @return UpdateAutoDisposeRecordResponse
     */
    public function updateAutoDisposeRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoDisposeRecordWithOptions($request, $runtime);
    }

    /**
     * Updates a batch data ingestion task.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class that contains configuration examples is provided to help you. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Updates a batch data ingestion task.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class that contains configuration examples is provided to help you. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Updates a collector.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user can receive a maximum of two notifications per day between 08:00 and 20:00 (UTC+8). No notifications are sent outside this time range.
     *
     * @param request - UpdateDataConnectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataConnectorResponse
     *
     * @param UpdateDataConnectorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDataConnectorResponse
     */
    public function updateDataConnectorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authConfigId) {
            @$body['AuthConfigId'] = $request->authConfigId;
        }

        if (null !== $request->authConfigProduct) {
            @$body['AuthConfigProduct'] = $request->authConfigProduct;
        }

        if (null !== $request->authConfigVendor) {
            @$body['AuthConfigVendor'] = $request->authConfigVendor;
        }

        if (null !== $request->dataConnectorConfig) {
            @$body['DataConnectorConfig'] = $request->dataConnectorConfig;
        }

        if (null !== $request->dataConnectorId) {
            @$body['DataConnectorId'] = $request->dataConnectorId;
        }

        if (null !== $request->dataConnectorStatus) {
            @$body['DataConnectorStatus'] = $request->dataConnectorStatus;
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
            'action' => 'UpdateDataConnector',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a collector.
     *
     * @remarks
     * Notifications are subject to frequency and time restrictions.
     * Each user can receive a maximum of two notifications per day between 08:00 and 20:00 (UTC+8). No notifications are sent outside this time range.
     *
     * @param request - UpdateDataConnectorRequest
     *
     * @returns UpdateDataConnectorResponse
     *
     * @param UpdateDataConnectorRequest $request
     *
     * @return UpdateDataConnectorResponse
     */
    public function updateDataConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataConnectorWithOptions($request, $runtime);
    }

    /**
     * Updates a data ingestion policy.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. A maximum of two notifications are sent to each user per day between 08:00 and 20:00.
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
     * Updates a data ingestion policy.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. A maximum of two notifications are sent to each user per day between 08:00 and 20:00.
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
     * Updates a data ingestion template.
     *
     * @remarks
     * Frequency and time limits apply to notifications. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside of this time period.
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
     * Updates a data ingestion template.
     *
     * @remarks
     * Frequency and time limits apply to notifications. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside of this time period.
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
     * Updates a dataset.
     *
     * @remarks
     * Notifications are limited by frequency and time. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside this time range.
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
     * Updates a dataset.
     *
     * @remarks
     * Notifications are limited by frequency and time. Each user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside this time range.
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
     * Updates dataset records.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day between 08:00 and 20:00.
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
     * Updates dataset records.
     *
     * @remarks
     * Notifications are subject to frequency and time limits. Each user can receive a maximum of two notifications per day between 08:00 and 20:00.
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
     * Updates a data source.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Updates a data source.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Modifies a data source template.
     *
     * @remarks
     * The JsonConfig input parameter accepts a complex JSON configuration. To simplify this process, a supporting tool class is available. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Modifies a data source template.
     *
     * @remarks
     * The JsonConfig input parameter accepts a complex JSON configuration. To simplify this process, a supporting tool class is available. For more information, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Changes the log storage region for Log Management.
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
     * Changes the log storage region for Log Management.
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
     * Updates the status of log delivery.
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
     * Updates the status of log delivery.
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
     * Modifies the storage duration for logs.
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
     * Modifies the storage duration for logs.
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
     * Updates a detection rule.
     *
     * @remarks
     * Because this operation uses complex request parameters, a supporting tool class is provided to assist with the JSON configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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

        if (null !== $request->alertAttCkMapping) {
            @$body['AlertAttCkMapping'] = $request->alertAttCkMapping;
        }

        if (null !== $request->alertDescription) {
            @$body['AlertDescription'] = $request->alertDescription;
        }

        if (null !== $request->alertLevel) {
            @$body['AlertLevel'] = $request->alertLevel;
        }

        if (null !== $request->alertLevelMapping) {
            @$body['AlertLevelMapping'] = $request->alertLevelMapping;
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

        if (null !== $request->alertTypeMapping) {
            @$body['AlertTypeMapping'] = $request->alertTypeMapping;
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
     * Updates a detection rule.
     *
     * @remarks
     * Because this operation uses complex request parameters, a supporting tool class is provided to assist with the JSON configuration. For an example, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Updates a normalization rule.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. For configuration examples, see the supporting tool class in the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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

        if (null !== $request->normalizationSecurityDomainId) {
            @$body['NormalizationSecurityDomainId'] = $request->normalizationSecurityDomainId;
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
     * Updates a normalization rule.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. For configuration examples, see the supporting tool class in the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Updates a normalization schema.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Updates a normalization schema.
     *
     * @remarks
     * The input parameter JsonConfig is a complex JSON configuration. A utility class is provided to help with specific configuration examples. For more information, refer to [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Updates a product.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. For an example of a supporting tool class with configuration examples, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Updates a product.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. For an example of a supporting tool class with configuration examples, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Updates an automatic response rule.
     *
     * @remarks
     * Some request parameters require complex JSON configurations. We provide a helper utility class with configuration examples.
     *
     * @param request - UpdateResponseRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResponseRuleResponse
     *
     * @param UpdateResponseRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateResponseRuleResponse
     */
    public function updateResponseRuleWithOptions($request, $runtime)
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

        if (null !== $request->responseActionConfig) {
            @$body['ResponseActionConfig'] = $request->responseActionConfig;
        }

        if (null !== $request->responseActionType) {
            @$body['ResponseActionType'] = $request->responseActionType;
        }

        if (null !== $request->responseExecutionCondition) {
            @$body['ResponseExecutionCondition'] = $request->responseExecutionCondition;
        }

        if (null !== $request->responseRuleId) {
            @$body['ResponseRuleId'] = $request->responseRuleId;
        }

        if (null !== $request->responseRuleName) {
            @$body['ResponseRuleName'] = $request->responseRuleName;
        }

        if (null !== $request->responseRulePriority) {
            @$body['ResponseRulePriority'] = $request->responseRulePriority;
        }

        if (null !== $request->responseRuleStatus) {
            @$body['ResponseRuleStatus'] = $request->responseRuleStatus;
        }

        if (null !== $request->responseTriggerType) {
            @$body['ResponseTriggerType'] = $request->responseTriggerType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResponseRule',
            'version' => '2024-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResponseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an automatic response rule.
     *
     * @remarks
     * Some request parameters require complex JSON configurations. We provide a helper utility class with configuration examples.
     *
     * @param request - UpdateResponseRuleRequest
     *
     * @returns UpdateResponseRuleResponse
     *
     * @param UpdateResponseRuleRequest $request
     *
     * @return UpdateResponseRuleResponse
     */
    public function updateResponseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResponseRuleWithOptions($request, $runtime);
    }

    /**
     * Updates a vendor.
     *
     * @remarks
     * The delivery of notifications is limited by frequency and time. A user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside this time period.
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
     * Updates a vendor.
     *
     * @remarks
     * The delivery of notifications is limited by frequency and time. A user can receive a maximum of two notifications per day between 08:00 and 20:00. Notifications are not sent outside this time period.
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
     * Verify log storage.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class is provided to help you create the configuration. For a code sample, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Verify log storage.
     *
     * @remarks
     * The JsonConfig request parameter is a complex JSON configuration. A supporting tool class is provided to help you create the configuration. For a code sample, see the [Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Validates a normalization rule.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
     * Validates a normalization rule.
     *
     * @remarks
     * The JsonConfig input parameter is a complex JSON configuration. A supporting tool class provides configuration examples. For more information, see the [demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java).
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
