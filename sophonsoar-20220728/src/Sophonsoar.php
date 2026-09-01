<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ComparePlaybooksRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ComparePlaybooksResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ConvertPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ConvertPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CopyPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CopyPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CreatePlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CreatePlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DebugPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DebugPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DeleteComponentAssetRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DeleteComponentAssetResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DeletePlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DeletePlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentAssetFormRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentAssetFormResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentAssetsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentAssetsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentListRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentListResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentsJsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeComponentsJsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeDistinctReleasesRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeDistinctReleasesResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeEnumItemsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeEnumItemsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeExecutePlaybooksRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeExecutePlaybooksResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeFieldRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeFieldResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeParamTagsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeParamTagsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNotifyTemplateListRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNotifyTemplateListResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeOpenApiInfoRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeOpenApiInfoResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeOpenApiListRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeOpenApiListResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookInputOutputRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookInputOutputResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookMetricsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookMetricsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNodesOutputRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNodesOutputResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNumberMetricsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNumberMetricsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookReleasesRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookReleasesResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybooksRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybooksResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessStatisticsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessStatisticsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTaskCountRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTaskCountResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTasksRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTasksResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescriberPython3ScriptLogsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescriberPython3ScriptLogsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordActionOutputListRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordActionOutputListResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordInOutputRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordInOutputResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSophonCommandsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSophonCommandsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeVendorApiListRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeVendorApiListResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyComponentAssetRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyComponentAssetResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookInputOutputRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookInputOutputResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\PublishPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\PublishPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\QueryTreeDataRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\QueryTreeDataResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RevertPlaybookReleaseRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RevertPlaybookReleaseResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RunNotifyComponentWithEmailRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RunNotifyComponentWithEmailResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RunNotifyComponentWithMessageCenterRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RunNotifyComponentWithMessageCenterResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RunNotifyComponentWithWebhookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RunNotifyComponentWithWebhookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RunPython3ScriptRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RunPython3ScriptResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\TriggerPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\TriggerPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\TriggerProcessTaskRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\TriggerProcessTaskResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\TriggerSophonPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\TriggerSophonPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPythonFileRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPythonFileResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Sophonsoar extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-southeast-1' => 'sophonsoar.ap-southeast-1.aliyuncs.com',
            'public' => 'sophonsoar.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sophonsoar', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Compares the configurations of two published playbook versions.
     *
     * @param request - ComparePlaybooksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ComparePlaybooksResponse
     *
     * @param ComparePlaybooksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ComparePlaybooksResponse
     */
    public function comparePlaybooksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->newPlaybookReleaseId) {
            @$query['NewPlaybookReleaseId'] = $request->newPlaybookReleaseId;
        }

        if (null !== $request->oldPlaybookReleaseId) {
            @$query['OldPlaybookReleaseId'] = $request->oldPlaybookReleaseId;
        }

        if (null !== $request->playbookUuid) {
            @$query['PlaybookUuid'] = $request->playbookUuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ComparePlaybooks',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ComparePlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Compares the configurations of two published playbook versions.
     *
     * @param request - ComparePlaybooksRequest
     *
     * @returns ComparePlaybooksResponse
     *
     * @param ComparePlaybooksRequest $request
     *
     * @return ComparePlaybooksResponse
     */
    public function comparePlaybooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->comparePlaybooksWithOptions($request, $runtime);
    }

    /**
     * Convert XML configuration.
     *
     * @remarks
     * Please ensure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the orchestration product before using this interface.
     *
     * @param request - ConvertPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertPlaybookResponse
     *
     * @param ConvertPlaybookRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConvertPlaybookResponse
     */
    public function convertPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->roleFor) {
            @$query['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$query['RoleType'] = $request->roleType;
        }

        $body = [];
        if (null !== $request->taskflow) {
            @$body['Taskflow'] = $request->taskflow;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConvertPlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Convert XML configuration.
     *
     * @remarks
     * Please ensure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the orchestration product before using this interface.
     *
     * @param request - ConvertPlaybookRequest
     *
     * @returns ConvertPlaybookResponse
     *
     * @param ConvertPlaybookRequest $request
     *
     * @return ConvertPlaybookResponse
     */
    public function convertPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertPlaybookWithOptions($request, $runtime);
    }

    /**
     * Copies a playbook.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR) or pricing for the log data added to the Cloud Threat Detection and Response (CTDR) feature. For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *
     * @param request - CopyPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyPlaybookResponse
     *
     * @param CopyPlaybookRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CopyPlaybookResponse
     */
    public function copyPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->roleFor) {
            @$query['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$query['RoleType'] = $request->roleType;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->releaseVersion) {
            @$body['ReleaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->sourcePlaybookUuid) {
            @$body['SourcePlaybookUuid'] = $request->sourcePlaybookUuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CopyPlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies a playbook.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR) or pricing for the log data added to the Cloud Threat Detection and Response (CTDR) feature. For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *
     * @param request - CopyPlaybookRequest
     *
     * @returns CopyPlaybookResponse
     *
     * @param CopyPlaybookRequest $request
     *
     * @return CopyPlaybookResponse
     */
    public function copyPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyPlaybookWithOptions($request, $runtime);
    }

    /**
     * Creates a new playbook.
     *
     * @param request - CreatePlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePlaybookResponse
     *
     * @param CreatePlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePlaybookResponse
     */
    public function createPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->inputParams) {
            @$body['InputParams'] = $request->inputParams;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->outputParams) {
            @$body['OutputParams'] = $request->outputParams;
        }

        if (null !== $request->taskflowType) {
            @$body['TaskflowType'] = $request->taskflowType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a new playbook.
     *
     * @param request - CreatePlaybookRequest
     *
     * @returns CreatePlaybookResponse
     *
     * @param CreatePlaybookRequest $request
     *
     * @return CreatePlaybookResponse
     */
    public function createPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPlaybookWithOptions($request, $runtime);
    }

    /**
     * Debugs a playbook.
     *
     * @param request - DebugPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DebugPlaybookResponse
     *
     * @param DebugPlaybookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DebugPlaybookResponse
     */
    public function debugPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->record) {
            @$body['Record'] = $request->record;
        }

        if (null !== $request->taskflow) {
            @$body['Taskflow'] = $request->taskflow;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DebugPlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DebugPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Debugs a playbook.
     *
     * @param request - DebugPlaybookRequest
     *
     * @returns DebugPlaybookResponse
     *
     * @param DebugPlaybookRequest $request
     *
     * @return DebugPlaybookResponse
     */
    public function debugPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->debugPlaybookWithOptions($request, $runtime);
    }

    /**
     * Deletes a component asset.
     *
     * @param request - DeleteComponentAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteComponentAssetResponse
     *
     * @param DeleteComponentAssetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteComponentAssetResponse
     */
    public function deleteComponentAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assetId) {
            @$query['AssetId'] = $request->assetId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteComponentAsset',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteComponentAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a component asset.
     *
     * @param request - DeleteComponentAssetRequest
     *
     * @returns DeleteComponentAssetResponse
     *
     * @param DeleteComponentAssetRequest $request
     *
     * @return DeleteComponentAssetResponse
     */
    public function deleteComponentAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteComponentAssetWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified custom playbook.
     *
     * @param request - DeletePlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePlaybookResponse
     *
     * @param DeletePlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePlaybookResponse
     */
    public function deletePlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified custom playbook.
     *
     * @param request - DeletePlaybookRequest
     *
     * @returns DeletePlaybookResponse
     *
     * @param DeletePlaybookRequest $request
     *
     * @return DeletePlaybookResponse
     */
    public function deletePlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePlaybookWithOptions($request, $runtime);
    }

    /**
     * Obtains the metadata for a component asset, which defines the fields that constitute the asset.
     *
     * @param request - DescribeComponentAssetFormRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComponentAssetFormResponse
     *
     * @param DescribeComponentAssetFormRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeComponentAssetFormResponse
     */
    public function describeComponentAssetFormWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeComponentAssetForm',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeComponentAssetFormResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the metadata for a component asset, which defines the fields that constitute the asset.
     *
     * @param request - DescribeComponentAssetFormRequest
     *
     * @returns DescribeComponentAssetFormResponse
     *
     * @param DescribeComponentAssetFormRequest $request
     *
     * @return DescribeComponentAssetFormResponse
     */
    public function describeComponentAssetForm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentAssetFormWithOptions($request, $runtime);
    }

    /**
     * Retrieves the asset list for a component.
     *
     * @param request - DescribeComponentAssetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComponentAssetsResponse
     *
     * @param DescribeComponentAssetsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeComponentAssetsResponse
     */
    public function describeComponentAssetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeComponentAssets',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeComponentAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the asset list for a component.
     *
     * @param request - DescribeComponentAssetsRequest
     *
     * @returns DescribeComponentAssetsResponse
     *
     * @param DescribeComponentAssetsRequest $request
     *
     * @return DescribeComponentAssetsResponse
     */
    public function describeComponentAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentAssetsWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of standard components that you can use.
     *
     * @param request - DescribeComponentListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComponentListResponse
     *
     * @param DescribeComponentListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeComponentListResponse
     */
    public function describeComponentListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeComponentList',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeComponentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of standard components that you can use.
     *
     * @param request - DescribeComponentListRequest
     *
     * @returns DescribeComponentListResponse
     *
     * @param DescribeComponentListRequest $request
     *
     * @return DescribeComponentListResponse
     */
    public function describeComponentList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentListWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of predefined components.
     *
     * @param request - DescribeComponentPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComponentPlaybookResponse
     *
     * @param DescribeComponentPlaybookRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeComponentPlaybookResponse
     */
    public function describeComponentPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeComponentPlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeComponentPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of predefined components.
     *
     * @param request - DescribeComponentPlaybookRequest
     *
     * @returns DescribeComponentPlaybookResponse
     *
     * @param DescribeComponentPlaybookRequest $request
     *
     * @return DescribeComponentPlaybookResponse
     */
    public function describeComponentPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentPlaybookWithOptions($request, $runtime);
    }

    /**
     * Obtains the JavaScript (JS) file that a component uses to render the page.
     *
     * @param request - DescribeComponentsJsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComponentsJsResponse
     *
     * @param DescribeComponentsJsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeComponentsJsResponse
     */
    public function describeComponentsJsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeComponentsJs',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeComponentsJsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the JavaScript (JS) file that a component uses to render the page.
     *
     * @param request - DescribeComponentsJsRequest
     *
     * @returns DescribeComponentsJsResponse
     *
     * @param DescribeComponentsJsRequest $request
     *
     * @return DescribeComponentsJsResponse
     */
    public function describeComponentsJs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentsJsWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of distinct playbook releases.
     *
     * @param request - DescribeDistinctReleasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDistinctReleasesResponse
     *
     * @param DescribeDistinctReleasesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDistinctReleasesResponse
     */
    public function describeDistinctReleasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDistinctReleases',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDistinctReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of distinct playbook releases.
     *
     * @param request - DescribeDistinctReleasesRequest
     *
     * @returns DescribeDistinctReleasesResponse
     *
     * @param DescribeDistinctReleasesRequest $request
     *
     * @return DescribeDistinctReleasesResponse
     */
    public function describeDistinctReleases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDistinctReleasesWithOptions($request, $runtime);
    }

    /**
     * Queries the enumeration information for a product.
     *
     * @param request - DescribeEnumItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnumItemsResponse
     *
     * @param DescribeEnumItemsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeEnumItemsResponse
     */
    public function describeEnumItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnumItems',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnumItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the enumeration information for a product.
     *
     * @param request - DescribeEnumItemsRequest
     *
     * @returns DescribeEnumItemsResponse
     *
     * @param DescribeEnumItemsRequest $request
     *
     * @return DescribeEnumItemsResponse
     */
    public function describeEnumItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnumItemsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of executable playbooks that are used to configure automated response plans.
     *
     * @param request - DescribeExecutePlaybooksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExecutePlaybooksResponse
     *
     * @param DescribeExecutePlaybooksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeExecutePlaybooksResponse
     */
    public function describeExecutePlaybooksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExecutePlaybooks',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExecutePlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of executable playbooks that are used to configure automated response plans.
     *
     * @param request - DescribeExecutePlaybooksRequest
     *
     * @returns DescribeExecutePlaybooksResponse
     *
     * @param DescribeExecutePlaybooksRequest $request
     *
     * @return DescribeExecutePlaybooksResponse
     */
    public function describeExecutePlaybooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExecutePlaybooksWithOptions($request, $runtime);
    }

    /**
     * Retrieves global configuration information for the product.
     *
     * @param request - DescribeFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFieldResponse
     *
     * @param DescribeFieldRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeFieldResponse
     */
    public function describeFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeField',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves global configuration information for the product.
     *
     * @param request - DescribeFieldRequest
     *
     * @returns DescribeFieldResponse
     *
     * @param DescribeFieldRequest $request
     *
     * @return DescribeFieldResponse
     */
    public function describeField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFieldWithOptions($request, $runtime);
    }

    /**
     * Queries groups of Alibaba Cloud services.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *
     * @param request - DescribeGroupProductionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupProductionsResponse
     *
     * @param DescribeGroupProductionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGroupProductionsResponse
     */
    public function describeGroupProductionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroupProductions',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupProductionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries groups of Alibaba Cloud services.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *
     * @param request - DescribeGroupProductionsRequest
     *
     * @returns DescribeGroupProductionsResponse
     *
     * @param DescribeGroupProductionsRequest $request
     *
     * @return DescribeGroupProductionsResponse
     */
    public function describeGroupProductions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupProductionsWithOptions($request, $runtime);
    }

    /**
     * Describes the output structure of each node in a playbook based on the latest execution record.
     *
     * @param request - DescribeLatestRecordSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLatestRecordSchemaResponse
     *
     * @param DescribeLatestRecordSchemaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeLatestRecordSchemaResponse
     */
    public function describeLatestRecordSchemaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLatestRecordSchema',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLatestRecordSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Describes the output structure of each node in a playbook based on the latest execution record.
     *
     * @param request - DescribeLatestRecordSchemaRequest
     *
     * @returns DescribeLatestRecordSchemaResponse
     *
     * @param DescribeLatestRecordSchemaRequest $request
     *
     * @return DescribeLatestRecordSchemaResponse
     */
    public function describeLatestRecordSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLatestRecordSchemaWithOptions($request, $runtime);
    }

    /**
     * Returns the reference paths for component inputs in a playbook orchestration.
     *
     * @param request - DescribeNodeParamTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNodeParamTagsResponse
     *
     * @param DescribeNodeParamTagsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeNodeParamTagsResponse
     */
    public function describeNodeParamTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNodeParamTags',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNodeParamTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns the reference paths for component inputs in a playbook orchestration.
     *
     * @param request - DescribeNodeParamTagsRequest
     *
     * @returns DescribeNodeParamTagsResponse
     *
     * @param DescribeNodeParamTagsRequest $request
     *
     * @return DescribeNodeParamTagsResponse
     */
    public function describeNodeParamTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeParamTagsWithOptions($request, $runtime);
    }

    /**
     * Queries notification templates.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *
     * @param request - DescribeNotifyTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNotifyTemplateListResponse
     *
     * @param DescribeNotifyTemplateListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeNotifyTemplateListResponse
     */
    public function describeNotifyTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNotifyTemplateList',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNotifyTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries notification templates.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *
     * @param request - DescribeNotifyTemplateListRequest
     *
     * @returns DescribeNotifyTemplateListResponse
     *
     * @param DescribeNotifyTemplateListRequest $request
     *
     * @return DescribeNotifyTemplateListResponse
     */
    public function describeNotifyTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNotifyTemplateListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an API operation.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR) or pricing for the log data added to the Cloud Threat Detection and Response (CTDR) feature. For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *
     * @param request - DescribeOpenApiInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOpenApiInfoResponse
     *
     * @param DescribeOpenApiInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOpenApiInfoResponse
     */
    public function describeOpenApiInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOpenApiInfo',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOpenApiInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an API operation.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR) or pricing for the log data added to the Cloud Threat Detection and Response (CTDR) feature. For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *
     * @param request - DescribeOpenApiInfoRequest
     *
     * @returns DescribeOpenApiInfoResponse
     *
     * @param DescribeOpenApiInfoRequest $request
     *
     * @return DescribeOpenApiInfoResponse
     */
    public function describeOpenApiInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpenApiInfoWithOptions($request, $runtime);
    }

    /**
     * Retrieve the API list for a product.
     *
     * @remarks
     * Before you use this API, review the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) for the orchestration product, which supports threat analysis, response, log access, and traffic monitoring.
     *
     * @param request - DescribeOpenApiListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOpenApiListResponse
     *
     * @param DescribeOpenApiListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOpenApiListResponse
     */
    public function describeOpenApiListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOpenApiList',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOpenApiListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the API list for a product.
     *
     * @remarks
     * Before you use this API, review the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) for the orchestration product, which supports threat analysis, response, log access, and traffic monitoring.
     *
     * @param request - DescribeOpenApiListRequest
     *
     * @returns DescribeOpenApiListResponse
     *
     * @param DescribeOpenApiListRequest $request
     *
     * @return DescribeOpenApiListResponse
     */
    public function describeOpenApiList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpenApiListWithOptions($request, $runtime);
    }

    /**
     * Retrieves the XML configuration of a playbook.
     *
     * @param request - DescribePlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlaybookResponse
     *
     * @param DescribePlaybookRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePlaybookResponse
     */
    public function describePlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the XML configuration of a playbook.
     *
     * @param request - DescribePlaybookRequest
     *
     * @returns DescribePlaybookResponse
     *
     * @param DescribePlaybookRequest $request
     *
     * @return DescribePlaybookResponse
     */
    public function describePlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookWithOptions($request, $runtime);
    }

    /**
     * Retrieves the input and output parameter configurations for a playbook.
     *
     * @param request - DescribePlaybookInputOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlaybookInputOutputResponse
     *
     * @param DescribePlaybookInputOutputRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePlaybookInputOutputResponse
     */
    public function describePlaybookInputOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlaybookInputOutput',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlaybookInputOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the input and output parameter configurations for a playbook.
     *
     * @param request - DescribePlaybookInputOutputRequest
     *
     * @returns DescribePlaybookInputOutputResponse
     *
     * @param DescribePlaybookInputOutputRequest $request
     *
     * @return DescribePlaybookInputOutputResponse
     */
    public function describePlaybookInputOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookInputOutputWithOptions($request, $runtime);
    }

    /**
     * Queries playbook metadata, including its name, description, number of runs, and failure rate.
     *
     * @param request - DescribePlaybookMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlaybookMetricsResponse
     *
     * @param DescribePlaybookMetricsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePlaybookMetricsResponse
     */
    public function describePlaybookMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlaybookMetrics',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlaybookMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries playbook metadata, including its name, description, number of runs, and failure rate.
     *
     * @param request - DescribePlaybookMetricsRequest
     *
     * @returns DescribePlaybookMetricsResponse
     *
     * @param DescribePlaybookMetricsRequest $request
     *
     * @return DescribePlaybookMetricsResponse
     */
    public function describePlaybookMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookMetricsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the historical output data of a component.
     *
     * @param request - DescribePlaybookNodesOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlaybookNodesOutputResponse
     *
     * @param DescribePlaybookNodesOutputRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePlaybookNodesOutputResponse
     */
    public function describePlaybookNodesOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlaybookNodesOutput',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlaybookNodesOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the historical output data of a component.
     *
     * @param request - DescribePlaybookNodesOutputRequest
     *
     * @returns DescribePlaybookNodesOutputResponse
     *
     * @param DescribePlaybookNodesOutputRequest $request
     *
     * @return DescribePlaybookNodesOutputResponse
     */
    public function describePlaybookNodesOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookNodesOutputWithOptions($request, $runtime);
    }

    /**
     * Retrieves metrics for the response orchestration product, including the total number of playbooks and the number of enabled playbooks.
     *
     * @param request - DescribePlaybookNumberMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlaybookNumberMetricsResponse
     *
     * @param DescribePlaybookNumberMetricsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePlaybookNumberMetricsResponse
     */
    public function describePlaybookNumberMetricsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlaybookNumberMetrics',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlaybookNumberMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves metrics for the response orchestration product, including the total number of playbooks and the number of enabled playbooks.
     *
     * @param request - DescribePlaybookNumberMetricsRequest
     *
     * @returns DescribePlaybookNumberMetricsResponse
     *
     * @param DescribePlaybookNumberMetricsRequest $request
     *
     * @return DescribePlaybookNumberMetricsResponse
     */
    public function describePlaybookNumberMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookNumberMetricsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of published versions of a playbook.
     *
     * @param request - DescribePlaybookReleasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlaybookReleasesResponse
     *
     * @param DescribePlaybookReleasesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePlaybookReleasesResponse
     */
    public function describePlaybookReleasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlaybookReleases',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlaybookReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of published versions of a playbook.
     *
     * @param request - DescribePlaybookReleasesRequest
     *
     * @returns DescribePlaybookReleasesResponse
     *
     * @param DescribePlaybookReleasesRequest $request
     *
     * @return DescribePlaybookReleasesResponse
     */
    public function describePlaybookReleases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookReleasesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of playbooks.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) for Security Orchestration, Automation, and Response (SOAR).
     *
     * @param request - DescribePlaybooksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePlaybooksResponse
     *
     * @param DescribePlaybooksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribePlaybooksResponse
     */
    public function describePlaybooksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePlaybooks',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of playbooks.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) for Security Orchestration, Automation, and Response (SOAR).
     *
     * @param request - DescribePlaybooksRequest
     *
     * @returns DescribePlaybooksResponse
     *
     * @param DescribePlaybooksRequest $request
     *
     * @return DescribePlaybooksResponse
     */
    public function describePlaybooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybooksWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an OpenAPI.
     *
     * @param request - DescribePopApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePopApiResponse
     *
     * @param DescribePopApiRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribePopApiResponse
     */
    public function describePopApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->apiVersion) {
            @$query['ApiVersion'] = $request->apiVersion;
        }

        if (null !== $request->popCode) {
            @$query['PopCode'] = $request->popCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePopApi',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePopApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an OpenAPI.
     *
     * @param request - DescribePopApiRequest
     *
     * @returns DescribePopApiResponse
     *
     * @param DescribePopApiRequest $request
     *
     * @return DescribePopApiResponse
     */
    public function describePopApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePopApiWithOptions($request, $runtime);
    }

    /**
     * Retrieves statistics information.
     *
     * @remarks
     * Make sure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product (Cloud Threat Detection and Response (CTDR) log traffic) before you call this operation.
     *
     * @param request - DescribeProcessStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProcessStatisticsResponse
     *
     * @param DescribeProcessStatisticsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeProcessStatisticsResponse
     */
    public function describeProcessStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProcessStatistics',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProcessStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves statistics information.
     *
     * @remarks
     * Make sure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product (Cloud Threat Detection and Response (CTDR) log traffic) before you call this operation.
     *
     * @param request - DescribeProcessStatisticsRequest
     *
     * @returns DescribeProcessStatisticsResponse
     *
     * @param DescribeProcessStatisticsRequest $request
     *
     * @return DescribeProcessStatisticsResponse
     */
    public function describeProcessStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the count of response tasks associated with an entity UUID.
     *
     * @param request - DescribeProcessTaskCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProcessTaskCountResponse
     *
     * @param DescribeProcessTaskCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeProcessTaskCountResponse
     */
    public function describeProcessTaskCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProcessTaskCount',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProcessTaskCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the count of response tasks associated with an entity UUID.
     *
     * @param request - DescribeProcessTaskCountRequest
     *
     * @returns DescribeProcessTaskCountResponse
     *
     * @param DescribeProcessTaskCountRequest $request
     *
     * @return DescribeProcessTaskCountResponse
     */
    public function describeProcessTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessTaskCountWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of disposal tasks.
     *
     * @remarks
     * Make sure that you are familiar with the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration feature (the log traffic of Cloud Threat Detection and Response (CTDR)) before you call this operation.
     *
     * @param request - DescribeProcessTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProcessTasksResponse
     *
     * @param DescribeProcessTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeProcessTasksResponse
     */
    public function describeProcessTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertId) {
            @$query['AlertId'] = $request->alertId;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->entityName) {
            @$query['EntityName'] = $request->entityName;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->entityUuid) {
            @$query['EntityUuid'] = $request->entityUuid;
        }

        if (null !== $request->eventUuid) {
            @$query['EventUuid'] = $request->eventUuid;
        }

        if (null !== $request->executeUuid) {
            @$query['ExecuteUuid'] = $request->executeUuid;
        }

        if (null !== $request->orderField) {
            @$query['OrderField'] = $request->orderField;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paramContent) {
            @$query['ParamContent'] = $request->paramContent;
        }

        if (null !== $request->processActionEnd) {
            @$query['ProcessActionEnd'] = $request->processActionEnd;
        }

        if (null !== $request->processActionStart) {
            @$query['ProcessActionStart'] = $request->processActionStart;
        }

        if (null !== $request->processRemoveEnd) {
            @$query['ProcessRemoveEnd'] = $request->processRemoveEnd;
        }

        if (null !== $request->processRemoveStart) {
            @$query['ProcessRemoveStart'] = $request->processRemoveStart;
        }

        if (null !== $request->processStrategyUuid) {
            @$query['ProcessStrategyUuid'] = $request->processStrategyUuid;
        }

        if (null !== $request->reqUuid) {
            @$query['ReqUuid'] = $request->reqUuid;
        }

        if (null !== $request->responseRuleId) {
            @$query['ResponseRuleId'] = $request->responseRuleId;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->triggerSource) {
            @$query['TriggerSource'] = $request->triggerSource;
        }

        if (null !== $request->yunCode) {
            @$query['YunCode'] = $request->yunCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProcessTasks',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProcessTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of disposal tasks.
     *
     * @remarks
     * Make sure that you are familiar with the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration feature (the log traffic of Cloud Threat Detection and Response (CTDR)) before you call this operation.
     *
     * @param request - DescribeProcessTasksRequest
     *
     * @returns DescribeProcessTasksResponse
     *
     * @param DescribeProcessTasksRequest $request
     *
     * @return DescribeProcessTasksResponse
     */
    public function describeProcessTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessTasksWithOptions($request, $runtime);
    }

    /**
     * Retrieves the output data generated by a component for an action in a playbook task.
     *
     * @param request - DescribeSoarRecordActionOutputListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSoarRecordActionOutputListResponse
     *
     * @param DescribeSoarRecordActionOutputListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSoarRecordActionOutputListResponse
     */
    public function describeSoarRecordActionOutputListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSoarRecordActionOutputList',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSoarRecordActionOutputListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the output data generated by a component for an action in a playbook task.
     *
     * @param request - DescribeSoarRecordActionOutputListRequest
     *
     * @returns DescribeSoarRecordActionOutputListResponse
     *
     * @param DescribeSoarRecordActionOutputListRequest $request
     *
     * @return DescribeSoarRecordActionOutputListResponse
     */
    public function describeSoarRecordActionOutputList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSoarRecordActionOutputListWithOptions($request, $runtime);
    }

    /**
     * Retrieves the input and output data of a component action after a playbook task is executed.
     *
     * @param request - DescribeSoarRecordInOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSoarRecordInOutputResponse
     *
     * @param DescribeSoarRecordInOutputRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSoarRecordInOutputResponse
     */
    public function describeSoarRecordInOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSoarRecordInOutput',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSoarRecordInOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the input and output data of a component action after a playbook task is executed.
     *
     * @param request - DescribeSoarRecordInOutputRequest
     *
     * @returns DescribeSoarRecordInOutputResponse
     *
     * @param DescribeSoarRecordInOutputRequest $request
     *
     * @return DescribeSoarRecordInOutputResponse
     */
    public function describeSoarRecordInOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSoarRecordInOutputWithOptions($request, $runtime);
    }

    /**
     * Queries the execution records for a playbook.
     *
     * @param request - DescribeSoarRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSoarRecordsResponse
     *
     * @param DescribeSoarRecordsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSoarRecordsResponse
     */
    public function describeSoarRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSoarRecords',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSoarRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution records for a playbook.
     *
     * @param request - DescribeSoarRecordsRequest
     *
     * @returns DescribeSoarRecordsResponse
     *
     * @param DescribeSoarRecordsRequest $request
     *
     * @return DescribeSoarRecordsResponse
     */
    public function describeSoarRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSoarRecordsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the component execution records for a single playbook run.
     *
     * @param request - DescribeSoarTaskAndActionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSoarTaskAndActionsResponse
     *
     * @param DescribeSoarTaskAndActionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSoarTaskAndActionsResponse
     */
    public function describeSoarTaskAndActionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSoarTaskAndActions',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSoarTaskAndActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the component execution records for a single playbook run.
     *
     * @param request - DescribeSoarTaskAndActionsRequest
     *
     * @returns DescribeSoarTaskAndActionsResponse
     *
     * @param DescribeSoarTaskAndActionsRequest $request
     *
     * @return DescribeSoarTaskAndActionsResponse
     */
    public function describeSoarTaskAndActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSoarTaskAndActionsWithOptions($request, $runtime);
    }

    /**
     * Queries the commands that are used to manage entities.
     *
     * @param request - DescribeSophonCommandsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSophonCommandsResponse
     *
     * @param DescribeSophonCommandsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSophonCommandsResponse
     */
    public function describeSophonCommandsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSophonCommands',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSophonCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the commands that are used to manage entities.
     *
     * @param request - DescribeSophonCommandsRequest
     *
     * @returns DescribeSophonCommandsResponse
     *
     * @param DescribeSophonCommandsRequest $request
     *
     * @return DescribeSophonCommandsResponse
     */
    public function describeSophonCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSophonCommandsWithOptions($request, $runtime);
    }

    /**
     * Queries the API operations of a cloud service provider.
     *
     * @remarks
     * Please ensure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product (i.e., threat analysis and response log access traffic) before using this interface.
     *
     * @param request - DescribeVendorApiListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVendorApiListResponse
     *
     * @param DescribeVendorApiListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVendorApiListResponse
     */
    public function describeVendorApiListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->vendorCode) {
            @$query['VendorCode'] = $request->vendorCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVendorApiList',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVendorApiListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the API operations of a cloud service provider.
     *
     * @remarks
     * Please ensure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product (i.e., threat analysis and response log access traffic) before using this interface.
     *
     * @param request - DescribeVendorApiListRequest
     *
     * @returns DescribeVendorApiListResponse
     *
     * @param DescribeVendorApiListRequest $request
     *
     * @return DescribeVendorApiListResponse
     */
    public function describeVendorApiList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVendorApiListWithOptions($request, $runtime);
    }

    /**
     * After you submit a task for a Python 3 script, use the returned requestUuid to retrieve the operational logs.
     *
     * @param request - DescriberPython3ScriptLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescriberPython3ScriptLogsResponse
     *
     * @param DescriberPython3ScriptLogsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescriberPython3ScriptLogsResponse
     */
    public function describerPython3ScriptLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescriberPython3ScriptLogs',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescriberPython3ScriptLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you submit a task for a Python 3 script, use the returned requestUuid to retrieve the operational logs.
     *
     * @param request - DescriberPython3ScriptLogsRequest
     *
     * @returns DescriberPython3ScriptLogsResponse
     *
     * @param DescriberPython3ScriptLogsRequest $request
     *
     * @return DescriberPython3ScriptLogsResponse
     */
    public function describerPython3ScriptLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describerPython3ScriptLogsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the asset information for a component.
     *
     * @param request - ModifyComponentAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyComponentAssetResponse
     *
     * @param ModifyComponentAssetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyComponentAssetResponse
     */
    public function modifyComponentAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assetConfig) {
            @$query['AssetConfig'] = $request->assetConfig;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyComponentAsset',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyComponentAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the asset information for a component.
     *
     * @param request - ModifyComponentAssetRequest
     *
     * @returns ModifyComponentAssetResponse
     *
     * @param ModifyComponentAssetRequest $request
     *
     * @return ModifyComponentAssetResponse
     */
    public function modifyComponentAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyComponentAssetWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of a playbook.
     *
     * @param request - ModifyPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPlaybookResponse
     *
     * @param ModifyPlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyPlaybookResponse
     */
    public function modifyPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->taskflow) {
            @$body['Taskflow'] = $request->taskflow;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a playbook.
     *
     * @param request - ModifyPlaybookRequest
     *
     * @returns ModifyPlaybookResponse
     *
     * @param ModifyPlaybookRequest $request
     *
     * @return ModifyPlaybookResponse
     */
    public function modifyPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPlaybookWithOptions($request, $runtime);
    }

    /**
     * Modifies the input and output parameters of a playbook.
     *
     * @param request - ModifyPlaybookInputOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPlaybookInputOutputResponse
     *
     * @param ModifyPlaybookInputOutputRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyPlaybookInputOutputResponse
     */
    public function modifyPlaybookInputOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exeConfig) {
            @$body['ExeConfig'] = $request->exeConfig;
        }

        if (null !== $request->inputParams) {
            @$body['InputParams'] = $request->inputParams;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->outputParams) {
            @$body['OutputParams'] = $request->outputParams;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPlaybookInputOutput',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPlaybookInputOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the input and output parameters of a playbook.
     *
     * @param request - ModifyPlaybookInputOutputRequest
     *
     * @returns ModifyPlaybookInputOutputResponse
     *
     * @param ModifyPlaybookInputOutputRequest $request
     *
     * @return ModifyPlaybookInputOutputResponse
     */
    public function modifyPlaybookInputOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPlaybookInputOutputWithOptions($request, $runtime);
    }

    /**
     * Publishes a playbook. Once published, the playbook runs with the new logic.
     *
     * @param request - PublishPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishPlaybookResponse
     *
     * @param PublishPlaybookRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PublishPlaybookResponse
     */
    public function publishPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishPlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a playbook. Once published, the playbook runs with the new logic.
     *
     * @param request - PublishPlaybookRequest
     *
     * @returns PublishPlaybookResponse
     *
     * @param PublishPlaybookRequest $request
     *
     * @return PublishPlaybookResponse
     */
    public function publishPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishPlaybookWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of all playbooks.
     *
     * @param request - QueryTreeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTreeDataResponse
     *
     * @param QueryTreeDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryTreeDataResponse
     */
    public function queryTreeDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTreeData',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTreeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of all playbooks.
     *
     * @param request - QueryTreeDataRequest
     *
     * @returns QueryTreeDataResponse
     *
     * @param QueryTreeDataRequest $request
     *
     * @return QueryTreeDataResponse
     */
    public function queryTreeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTreeDataWithOptions($request, $runtime);
    }

    /**
     * Rolls back a playbook to a specified version. You can also specify whether to publish that version after the rollback.
     *
     * @param request - RevertPlaybookReleaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevertPlaybookReleaseResponse
     *
     * @param RevertPlaybookReleaseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevertPlaybookReleaseResponse
     */
    public function revertPlaybookReleaseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isPublish) {
            @$body['IsPublish'] = $request->isPublish;
        }

        if (null !== $request->playReleaseId) {
            @$body['PlayReleaseId'] = $request->playReleaseId;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevertPlaybookRelease',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevertPlaybookReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back a playbook to a specified version. You can also specify whether to publish that version after the rollback.
     *
     * @param request - RevertPlaybookReleaseRequest
     *
     * @returns RevertPlaybookReleaseResponse
     *
     * @param RevertPlaybookReleaseRequest $request
     *
     * @return RevertPlaybookReleaseResponse
     */
    public function revertPlaybookRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertPlaybookReleaseWithOptions($request, $runtime);
    }

    /**
     * Runs the notification component to send an email message.
     *
     * @remarks
     * Before calling this operation, understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) for Security Orchestration Application Response (SOAR). SOAR is billed based on the log traffic added to the service.
     *
     * @param request - RunNotifyComponentWithEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunNotifyComponentWithEmailResponse
     *
     * @param RunNotifyComponentWithEmailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RunNotifyComponentWithEmailResponse
     */
    public function runNotifyComponentWithEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->assetId) {
            @$query['AssetId'] = $request->assetId;
        }

        if (null !== $request->componentName) {
            @$query['ComponentName'] = $request->componentName;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->nodeName) {
            @$query['NodeName'] = $request->nodeName;
        }

        if (null !== $request->playbookUuid) {
            @$query['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->receivers) {
            @$query['Receivers'] = $request->receivers;
        }

        if (null !== $request->roleFor) {
            @$query['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$query['RoleType'] = $request->roleType;
        }

        if (null !== $request->subject) {
            @$query['Subject'] = $request->subject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunNotifyComponentWithEmail',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunNotifyComponentWithEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs the notification component to send an email message.
     *
     * @remarks
     * Before calling this operation, understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) for Security Orchestration Application Response (SOAR). SOAR is billed based on the log traffic added to the service.
     *
     * @param request - RunNotifyComponentWithEmailRequest
     *
     * @returns RunNotifyComponentWithEmailResponse
     *
     * @param RunNotifyComponentWithEmailRequest $request
     *
     * @return RunNotifyComponentWithEmailResponse
     */
    public function runNotifyComponentWithEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runNotifyComponentWithEmailWithOptions($request, $runtime);
    }

    /**
     * Sends a message using the notification component in Message Center.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of Security Orchestration Automation Response (SOAR). The service is billed based on the log traffic for threat analysis and response.
     *
     * @param request - RunNotifyComponentWithMessageCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunNotifyComponentWithMessageCenterResponse
     *
     * @param RunNotifyComponentWithMessageCenterRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return RunNotifyComponentWithMessageCenterResponse
     */
    public function runNotifyComponentWithMessageCenterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->aliuid) {
            @$query['Aliuid'] = $request->aliuid;
        }

        if (null !== $request->assetId) {
            @$query['AssetId'] = $request->assetId;
        }

        if (null !== $request->channelTypeList) {
            @$query['ChannelTypeList'] = $request->channelTypeList;
        }

        if (null !== $request->componentName) {
            @$query['ComponentName'] = $request->componentName;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->nodeName) {
            @$query['NodeName'] = $request->nodeName;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->playbookUuid) {
            @$query['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->roleFor) {
            @$query['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$query['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunNotifyComponentWithMessageCenter',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunNotifyComponentWithMessageCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a message using the notification component in Message Center.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of Security Orchestration Automation Response (SOAR). The service is billed based on the log traffic for threat analysis and response.
     *
     * @param request - RunNotifyComponentWithMessageCenterRequest
     *
     * @returns RunNotifyComponentWithMessageCenterResponse
     *
     * @param RunNotifyComponentWithMessageCenterRequest $request
     *
     * @return RunNotifyComponentWithMessageCenterResponse
     */
    public function runNotifyComponentWithMessageCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runNotifyComponentWithMessageCenterWithOptions($request, $runtime);
    }

    /**
     * Sends a message from a notification component using a webhook.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of response orchestration. This feature is billed based on the log traffic for threat analysis and response.
     *
     * @param request - RunNotifyComponentWithWebhookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunNotifyComponentWithWebhookResponse
     *
     * @param RunNotifyComponentWithWebhookRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RunNotifyComponentWithWebhookResponse
     */
    public function runNotifyComponentWithWebhookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->assetId) {
            @$query['AssetId'] = $request->assetId;
        }

        if (null !== $request->componentName) {
            @$query['ComponentName'] = $request->componentName;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->msgType) {
            @$query['MsgType'] = $request->msgType;
        }

        if (null !== $request->nodeName) {
            @$query['NodeName'] = $request->nodeName;
        }

        if (null !== $request->playbookUuid) {
            @$query['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->roleFor) {
            @$query['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$query['RoleType'] = $request->roleType;
        }

        if (null !== $request->secret) {
            @$query['Secret'] = $request->secret;
        }

        if (null !== $request->webhook) {
            @$query['Webhook'] = $request->webhook;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunNotifyComponentWithWebhook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunNotifyComponentWithWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a message from a notification component using a webhook.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of response orchestration. This feature is billed based on the log traffic for threat analysis and response.
     *
     * @param request - RunNotifyComponentWithWebhookRequest
     *
     * @returns RunNotifyComponentWithWebhookResponse
     *
     * @param RunNotifyComponentWithWebhookRequest $request
     *
     * @return RunNotifyComponentWithWebhookResponse
     */
    public function runNotifyComponentWithWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runNotifyComponentWithWebhookWithOptions($request, $runtime);
    }

    /**
     * Executes a Python 3 code snippet for data processing.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product.
     *
     * @param request - RunPython3ScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunPython3ScriptResponse
     *
     * @param RunPython3ScriptRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RunPython3ScriptResponse
     */
    public function runPython3ScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pythonVersion) {
            @$query['PythonVersion'] = $request->pythonVersion;
        }

        $body = [];
        if (null !== $request->nodeName) {
            @$body['NodeName'] = $request->nodeName;
        }

        if (null !== $request->params) {
            @$body['Params'] = $request->params;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->pythonScript) {
            @$body['PythonScript'] = $request->pythonScript;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunPython3Script',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunPython3ScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes a Python 3 code snippet for data processing.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product.
     *
     * @param request - RunPython3ScriptRequest
     *
     * @returns RunPython3ScriptResponse
     *
     * @param RunPython3ScriptRequest $request
     *
     * @return RunPython3ScriptResponse
     */
    public function runPython3Script($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runPython3ScriptWithOptions($request, $runtime);
    }

    /**
     * Triggers an enabled custom or predefined playbook.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of Response Orchestration.
     *
     * @param request - TriggerPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerPlaybookResponse
     *
     * @param TriggerPlaybookRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TriggerPlaybookResponse
     */
    public function triggerPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->inputParam) {
            @$body['InputParam'] = $request->inputParam;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TriggerPlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TriggerPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers an enabled custom or predefined playbook.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of Response Orchestration.
     *
     * @param request - TriggerPlaybookRequest
     *
     * @returns TriggerPlaybookResponse
     *
     * @param TriggerPlaybookRequest $request
     *
     * @return TriggerPlaybookResponse
     */
    public function triggerPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerPlaybookWithOptions($request, $runtime);
    }

    /**
     * When an event is handled using response orchestration, the response center creates a task. Perform follow-up actions on the task, such as unblocking, retrying a block, and removing from isolation.
     *
     * @param request - TriggerProcessTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerProcessTaskResponse
     *
     * @param TriggerProcessTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TriggerProcessTaskResponse
     */
    public function triggerProcessTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TriggerProcessTask',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TriggerProcessTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When an event is handled using response orchestration, the response center creates a task. Perform follow-up actions on the task, such as unblocking, retrying a block, and removing from isolation.
     *
     * @param request - TriggerProcessTaskRequest
     *
     * @returns TriggerProcessTaskResponse
     *
     * @param TriggerProcessTaskRequest $request
     *
     * @return TriggerProcessTaskResponse
     */
    public function triggerProcessTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerProcessTaskWithOptions($request, $runtime);
    }

    /**
     * Triggers a playbook or a response command.
     *
     * @remarks
     * Make sure that you are familiar with the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of Security Orchestration Automation Response (SOAR) before you call this operation.
     *
     * @param request - TriggerSophonPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerSophonPlaybookResponse
     *
     * @param TriggerSophonPlaybookRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TriggerSophonPlaybookResponse
     */
    public function triggerSophonPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->commandName) {
            @$query['CommandName'] = $request->commandName;
        }

        if (null !== $request->inputParams) {
            @$query['InputParams'] = $request->inputParams;
        }

        if (null !== $request->sophonTaskId) {
            @$query['SophonTaskId'] = $request->sophonTaskId;
        }

        if (null !== $request->triggerType) {
            @$query['TriggerType'] = $request->triggerType;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TriggerSophonPlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TriggerSophonPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers a playbook or a response command.
     *
     * @remarks
     * Make sure that you are familiar with the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of Security Orchestration Automation Response (SOAR) before you call this operation.
     *
     * @param request - TriggerSophonPlaybookRequest
     *
     * @returns TriggerSophonPlaybookResponse
     *
     * @param TriggerSophonPlaybookRequest $request
     *
     * @return TriggerSophonPlaybookResponse
     */
    public function triggerSophonPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerSophonPlaybookWithOptions($request, $runtime);
    }

    /**
     * Verifies that a playbook configuration is correct and its orchestration logic is valid.
     *
     * @param request - VerifyPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyPlaybookResponse
     *
     * @param VerifyPlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyPlaybookResponse
     */
    public function verifyPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->taskFlow) {
            @$body['TaskFlow'] = $request->taskFlow;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VerifyPlaybook',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies that a playbook configuration is correct and its orchestration logic is valid.
     *
     * @param request - VerifyPlaybookRequest
     *
     * @returns VerifyPlaybookResponse
     *
     * @param VerifyPlaybookRequest $request
     *
     * @return VerifyPlaybookResponse
     */
    public function verifyPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyPlaybookWithOptions($request, $runtime);
    }

    /**
     * Verifies the syntax of a Python code snippet.
     *
     * @param request - VerifyPythonFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyPythonFileResponse
     *
     * @param VerifyPythonFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return VerifyPythonFileResponse
     */
    public function verifyPythonFileWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VerifyPythonFile',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyPythonFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the syntax of a Python code snippet.
     *
     * @param request - VerifyPythonFileRequest
     *
     * @returns VerifyPythonFileResponse
     *
     * @param VerifyPythonFileRequest $request
     *
     * @return VerifyPythonFileResponse
     */
    public function verifyPythonFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyPythonFileWithOptions($request, $runtime);
    }
}
