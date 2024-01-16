<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\BatchModifyInstanceStatusRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\BatchModifyInstanceStatusResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ComparePlaybooksRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ComparePlaybooksResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CreatePlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\CreatePlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DebugPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DebugPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DeleteComponentAssetRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DeleteComponentAssetResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DeletePlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DeletePlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeApiListRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeApiListResponse;
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
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeParamTagsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeParamTagsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeUsedInfosRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeUsedInfosResponse;
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
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiItemListRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiItemListResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiVersionListRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiVersionListResponse;
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
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyComponentAssetRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyComponentAssetResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookInputOutputRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookInputOutputResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookInstanceStatusRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookInstanceStatusResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ModifyPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\PublishPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\PublishPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\QueryTreeDataRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\QueryTreeDataResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RenamePlaybookNodeRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RenamePlaybookNodeResponse;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RevertPlaybookReleaseRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\RevertPlaybookReleaseResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sophonsoar extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param BatchModifyInstanceStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchModifyInstanceStatusResponse
     */
    public function batchModifyInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $body = [];
        if (!Utils::isUnset($request->active)) {
            $body['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchModifyInstanceStatus',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchModifyInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchModifyInstanceStatusRequest $request
     *
     * @return BatchModifyInstanceStatusResponse
     */
    public function batchModifyInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchModifyInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param ComparePlaybooksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ComparePlaybooksResponse
     */
    public function comparePlaybooksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newPlaybookReleaseId)) {
            $query['NewPlaybookReleaseId'] = $request->newPlaybookReleaseId;
        }
        if (!Utils::isUnset($request->oldPlaybookReleaseId)) {
            $query['OldPlaybookReleaseId'] = $request->oldPlaybookReleaseId;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $query['PlaybookUuid'] = $request->playbookUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ComparePlaybooks',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ComparePlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreatePlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePlaybookResponse
     */
    public function createPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->lang)) {
            $body['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DebugPlaybookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DebugPlaybookResponse
     */
    public function debugPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lang)) {
            $body['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        if (!Utils::isUnset($request->record)) {
            $body['Record'] = $request->record;
        }
        if (!Utils::isUnset($request->taskflow)) {
            $body['Taskflow'] = $request->taskflow;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DebugPlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DebugPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteComponentAssetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteComponentAssetResponse
     */
    public function deleteComponentAssetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetId)) {
            $query['AssetId'] = $request->assetId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteComponentAsset',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteComponentAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeletePlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePlaybookResponse
     */
    public function deletePlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lang)) {
            $body['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeApiListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeApiListResponse
     */
    public function describeApiListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApiList',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApiListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApiListRequest $request
     *
     * @return DescribeApiListResponse
     */
    public function describeApiList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeComponentAssetFormRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeComponentAssetFormResponse
     */
    public function describeComponentAssetFormWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComponentAssetForm',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComponentAssetFormResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeComponentAssetsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeComponentAssetsResponse
     */
    public function describeComponentAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComponentAssets',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComponentAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeComponentListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeComponentListResponse
     */
    public function describeComponentListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComponentList',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComponentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeComponentPlaybookRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeComponentPlaybookResponse
     */
    public function describeComponentPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComponentPlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComponentPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeComponentsJsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeComponentsJsResponse
     */
    public function describeComponentsJsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComponentsJs',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComponentsJsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeDistinctReleasesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDistinctReleasesResponse
     */
    public function describeDistinctReleasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDistinctReleases',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDistinctReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeEnumItemsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeEnumItemsResponse
     */
    public function describeEnumItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnumItems',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnumItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeExecutePlaybooksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeExecutePlaybooksResponse
     */
    public function describeExecutePlaybooksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExecutePlaybooks',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExecutePlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeFieldRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeFieldResponse
     */
    public function describeFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeField',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeLatestRecordSchemaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeLatestRecordSchemaResponse
     */
    public function describeLatestRecordSchemaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLatestRecordSchema',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLatestRecordSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeNodeParamTagsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeNodeParamTagsResponse
     */
    public function describeNodeParamTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNodeParamTags',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNodeParamTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeNodeUsedInfosRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeNodeUsedInfosResponse
     */
    public function describeNodeUsedInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNodeUsedInfos',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNodeUsedInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNodeUsedInfosRequest $request
     *
     * @return DescribeNodeUsedInfosResponse
     */
    public function describeNodeUsedInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeUsedInfosWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlaybookRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePlaybookResponse
     */
    public function describePlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePlaybookInputOutputRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePlaybookInputOutputResponse
     */
    public function describePlaybookInputOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlaybookInputOutput',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlaybookInputOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePlaybookMetricsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePlaybookMetricsResponse
     */
    public function describePlaybookMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlaybookMetrics',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlaybookMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePlaybookNodesOutputRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePlaybookNodesOutputResponse
     */
    public function describePlaybookNodesOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlaybookNodesOutput',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlaybookNodesOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePlaybookNumberMetricsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePlaybookNumberMetricsResponse
     */
    public function describePlaybookNumberMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlaybookNumberMetrics',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlaybookNumberMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePlaybookReleasesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePlaybookReleasesResponse
     */
    public function describePlaybookReleasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlaybookReleases',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlaybookReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePlaybooksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribePlaybooksResponse
     */
    public function describePlaybooksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlaybooks',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePopApiRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribePopApiResponse
     */
    public function describePopApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePopApi',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePopApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePopApiItemListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePopApiItemListResponse
     */
    public function describePopApiItemListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePopApiItemList',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePopApiItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePopApiItemListRequest $request
     *
     * @return DescribePopApiItemListResponse
     */
    public function describePopApiItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePopApiItemListWithOptions($request, $runtime);
    }

    /**
     * @param DescribePopApiVersionListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePopApiVersionListResponse
     */
    public function describePopApiVersionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePopApiVersionList',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePopApiVersionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePopApiVersionListRequest $request
     *
     * @return DescribePopApiVersionListResponse
     */
    public function describePopApiVersionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePopApiVersionListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProcessTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeProcessTasksResponse
     */
    public function describeProcessTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProcessTasks',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProcessTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSoarRecordActionOutputListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSoarRecordActionOutputListResponse
     */
    public function describeSoarRecordActionOutputListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSoarRecordActionOutputList',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSoarRecordActionOutputListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSoarRecordInOutputRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSoarRecordInOutputResponse
     */
    public function describeSoarRecordInOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSoarRecordInOutput',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSoarRecordInOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSoarRecordsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSoarRecordsResponse
     */
    public function describeSoarRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSoarRecords',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSoarRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSoarTaskAndActionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSoarTaskAndActionsResponse
     */
    public function describeSoarTaskAndActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSoarTaskAndActions',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSoarTaskAndActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSophonCommandsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSophonCommandsResponse
     */
    public function describeSophonCommandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSophonCommands',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSophonCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescriberPython3ScriptLogsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescriberPython3ScriptLogsResponse
     */
    public function describerPython3ScriptLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescriberPython3ScriptLogs',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescriberPython3ScriptLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyComponentAssetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyComponentAssetResponse
     */
    public function modifyComponentAssetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetConfig)) {
            $query['AssetConfig'] = $request->assetConfig;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyComponentAsset',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyComponentAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyPlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyPlaybookResponse
     */
    public function modifyPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->lang)) {
            $body['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        if (!Utils::isUnset($request->taskflow)) {
            $body['Taskflow'] = $request->taskflow;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyPlaybookInputOutputRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyPlaybookInputOutputResponse
     */
    public function modifyPlaybookInputOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->exeConfig)) {
            $body['ExeConfig'] = $request->exeConfig;
        }
        if (!Utils::isUnset($request->inputParams)) {
            $body['InputParams'] = $request->inputParams;
        }
        if (!Utils::isUnset($request->lang)) {
            $body['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->outputParams)) {
            $body['OutputParams'] = $request->outputParams;
        }
        if (!Utils::isUnset($request->paramType)) {
            $body['ParamType'] = $request->paramType;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPlaybookInputOutput',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPlaybookInputOutputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyPlaybookInstanceStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyPlaybookInstanceStatusResponse
     */
    public function modifyPlaybookInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $body = [];
        if (!Utils::isUnset($request->active)) {
            $body['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPlaybookInstanceStatus',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPlaybookInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPlaybookInstanceStatusRequest $request
     *
     * @return ModifyPlaybookInstanceStatusResponse
     */
    public function modifyPlaybookInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPlaybookInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param PublishPlaybookRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PublishPlaybookResponse
     */
    public function publishPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishPlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryTreeDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryTreeDataResponse
     */
    public function queryTreeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTreeData',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTreeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RenamePlaybookNodeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RenamePlaybookNodeResponse
     */
    public function renamePlaybookNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newNodeName)) {
            $query['NewNodeName'] = $request->newNodeName;
        }
        if (!Utils::isUnset($request->oldNodeName)) {
            $query['OldNodeName'] = $request->oldNodeName;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $query['PlaybookUuid'] = $request->playbookUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenamePlaybookNode',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenamePlaybookNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenamePlaybookNodeRequest $request
     *
     * @return RenamePlaybookNodeResponse
     */
    public function renamePlaybookNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renamePlaybookNodeWithOptions($request, $runtime);
    }

    /**
     * @param RevertPlaybookReleaseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RevertPlaybookReleaseResponse
     */
    public function revertPlaybookReleaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->isPublish)) {
            $body['IsPublish'] = $request->isPublish;
        }
        if (!Utils::isUnset($request->playReleaseId)) {
            $body['PlayReleaseId'] = $request->playReleaseId;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevertPlaybookRelease',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevertPlaybookReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *   *
     * @param RunPython3ScriptRequest $request RunPython3ScriptRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RunPython3ScriptResponse RunPython3ScriptResponse
     */
    public function runPython3ScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->nodeName)) {
            $body['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        if (!Utils::isUnset($request->pythonScript)) {
            $body['PythonScript'] = $request->pythonScript;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunPython3Script',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunPython3ScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *   *
     * @param RunPython3ScriptRequest $request RunPython3ScriptRequest
     *
     * @return RunPython3ScriptResponse RunPython3ScriptResponse
     */
    public function runPython3Script($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runPython3ScriptWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *   *
     * @param TriggerPlaybookRequest $request TriggerPlaybookRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return TriggerPlaybookResponse TriggerPlaybookResponse
     */
    public function triggerPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->inputParam)) {
            $body['InputParam'] = $request->inputParam;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TriggerPlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *   *
     * @param TriggerPlaybookRequest $request TriggerPlaybookRequest
     *
     * @return TriggerPlaybookResponse TriggerPlaybookResponse
     */
    public function triggerPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerPlaybookWithOptions($request, $runtime);
    }

    /**
     * @param TriggerProcessTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TriggerProcessTaskResponse
     */
    public function triggerProcessTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TriggerProcessTask',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerProcessTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *   *
     * @param TriggerSophonPlaybookRequest $request TriggerSophonPlaybookRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return TriggerSophonPlaybookResponse TriggerSophonPlaybookResponse
     */
    public function triggerSophonPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandName)) {
            $query['CommandName'] = $request->commandName;
        }
        if (!Utils::isUnset($request->inputParams)) {
            $query['InputParams'] = $request->inputParams;
        }
        if (!Utils::isUnset($request->sophonTaskId)) {
            $query['SophonTaskId'] = $request->sophonTaskId;
        }
        if (!Utils::isUnset($request->triggerType)) {
            $query['TriggerType'] = $request->triggerType;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TriggerSophonPlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerSophonPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *   *
     * @param TriggerSophonPlaybookRequest $request TriggerSophonPlaybookRequest
     *
     * @return TriggerSophonPlaybookResponse TriggerSophonPlaybookResponse
     */
    public function triggerSophonPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerSophonPlaybookWithOptions($request, $runtime);
    }

    /**
     * @param VerifyPlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyPlaybookResponse
     */
    public function verifyPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        if (!Utils::isUnset($request->taskFlow)) {
            $body['TaskFlow'] = $request->taskFlow;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyPlaybook',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param VerifyPythonFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return VerifyPythonFileResponse
     */
    public function verifyPythonFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyPythonFile',
            'version'     => '2022-07-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyPythonFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
