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
     * @summary Modifies the statuses of playbooks at a time.
     *  *
     * @param BatchModifyInstanceStatusRequest $request BatchModifyInstanceStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchModifyInstanceStatusResponse BatchModifyInstanceStatusResponse
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
     * @summary Modifies the statuses of playbooks at a time.
     *  *
     * @param BatchModifyInstanceStatusRequest $request BatchModifyInstanceStatusRequest
     *
     * @return BatchModifyInstanceStatusResponse BatchModifyInstanceStatusResponse
     */
    public function batchModifyInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchModifyInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Compares configurations between two versions of a published playbook.
     *  *
     * @param ComparePlaybooksRequest $request ComparePlaybooksRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ComparePlaybooksResponse ComparePlaybooksResponse
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
     * @summary Compares configurations between two versions of a published playbook.
     *  *
     * @param ComparePlaybooksRequest $request ComparePlaybooksRequest
     *
     * @return ComparePlaybooksResponse ComparePlaybooksResponse
     */
    public function comparePlaybooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->comparePlaybooksWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a playbook.
     *  *
     * @param CreatePlaybookRequest $request CreatePlaybookRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePlaybookResponse CreatePlaybookResponse
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
        if (!Utils::isUnset($request->taskflowType)) {
            $body['TaskflowType'] = $request->taskflowType;
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
     * @summary Creates a playbook.
     *  *
     * @param CreatePlaybookRequest $request CreatePlaybookRequest
     *
     * @return CreatePlaybookResponse CreatePlaybookResponse
     */
    public function createPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Debugs a playbook.
     *  *
     * @param DebugPlaybookRequest $request DebugPlaybookRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DebugPlaybookResponse DebugPlaybookResponse
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
     * @summary Debugs a playbook.
     *  *
     * @param DebugPlaybookRequest $request DebugPlaybookRequest
     *
     * @return DebugPlaybookResponse DebugPlaybookResponse
     */
    public function debugPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->debugPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the assets in a component.
     *  *
     * @param DeleteComponentAssetRequest $request DeleteComponentAssetRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteComponentAssetResponse DeleteComponentAssetResponse
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
     * @summary Deletes the assets in a component.
     *  *
     * @param DeleteComponentAssetRequest $request DeleteComponentAssetRequest
     *
     * @return DeleteComponentAssetResponse DeleteComponentAssetResponse
     */
    public function deleteComponentAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteComponentAssetWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom playbook.
     *  *
     * @param DeletePlaybookRequest $request DeletePlaybookRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePlaybookResponse DeletePlaybookResponse
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
     * @summary Deletes a custom playbook.
     *  *
     * @param DeletePlaybookRequest $request DeletePlaybookRequest
     *
     * @return DeletePlaybookResponse DeletePlaybookResponse
     */
    public function deletePlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the API operations of the cloud service.
     *  *
     * @param DescribeApiListRequest $request DescribeApiListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApiListResponse DescribeApiListResponse
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
     * @summary Queries the API operations of the cloud service.
     *  *
     * @param DescribeApiListRequest $request DescribeApiListRequest
     *
     * @return DescribeApiListResponse DescribeApiListResponse
     */
    public function describeApiList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metadata of assets in a component. The metadata of an asset refers to the fields that describe the asset.
     *  *
     * @param DescribeComponentAssetFormRequest $request DescribeComponentAssetFormRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeComponentAssetFormResponse DescribeComponentAssetFormResponse
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
     * @summary Queries the metadata of assets in a component. The metadata of an asset refers to the fields that describe the asset.
     *  *
     * @param DescribeComponentAssetFormRequest $request DescribeComponentAssetFormRequest
     *
     * @return DescribeComponentAssetFormResponse DescribeComponentAssetFormResponse
     */
    public function describeComponentAssetForm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentAssetFormWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of assets in a component.
     *  *
     * @param DescribeComponentAssetsRequest $request DescribeComponentAssetsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeComponentAssetsResponse DescribeComponentAssetsResponse
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
     * @summary Queries a list of assets in a component.
     *  *
     * @param DescribeComponentAssetsRequest $request DescribeComponentAssetsRequest
     *
     * @return DescribeComponentAssetsResponse DescribeComponentAssetsResponse
     */
    public function describeComponentAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentAssetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of common components that are available.
     *  *
     * @param DescribeComponentListRequest $request DescribeComponentListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeComponentListResponse DescribeComponentListResponse
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
     * @summary Queries a list of common components that are available.
     *  *
     * @param DescribeComponentListRequest $request DescribeComponentListRequest
     *
     * @return DescribeComponentListResponse DescribeComponentListResponse
     */
    public function describeComponentList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of predefined components that are available.
     *  *
     * @param DescribeComponentPlaybookRequest $request DescribeComponentPlaybookRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeComponentPlaybookResponse DescribeComponentPlaybookResponse
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
     * @summary Queries a list of predefined components that are available.
     *  *
     * @param DescribeComponentPlaybookRequest $request DescribeComponentPlaybookRequest
     *
     * @return DescribeComponentPlaybookResponse DescribeComponentPlaybookResponse
     */
    public function describeComponentPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the JavaScript file of a component. The component uses the returned JavaScript file for page rendering.
     *  *
     * @param DescribeComponentsJsRequest $request DescribeComponentsJsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeComponentsJsResponse DescribeComponentsJsResponse
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
     * @summary Queries the JavaScript file of a component. The component uses the returned JavaScript file for page rendering.
     *  *
     * @param DescribeComponentsJsRequest $request DescribeComponentsJsRequest
     *
     * @return DescribeComponentsJsResponse DescribeComponentsJsResponse
     */
    public function describeComponentsJs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComponentsJsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the published versions of a playbook after deduplication.
     *  *
     * @param DescribeDistinctReleasesRequest $request DescribeDistinctReleasesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDistinctReleasesResponse DescribeDistinctReleasesResponse
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
     * @summary Queries the information about the published versions of a playbook after deduplication.
     *  *
     * @param DescribeDistinctReleasesRequest $request DescribeDistinctReleasesRequest
     *
     * @return DescribeDistinctReleasesResponse DescribeDistinctReleasesResponse
     */
    public function describeDistinctReleases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDistinctReleasesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries enumeration items that are required by a cloud service.
     *  *
     * @param DescribeEnumItemsRequest $request DescribeEnumItemsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnumItemsResponse DescribeEnumItemsResponse
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
     * @summary Queries enumeration items that are required by a cloud service.
     *  *
     * @param DescribeEnumItemsRequest $request DescribeEnumItemsRequest
     *
     * @return DescribeEnumItemsResponse DescribeEnumItemsResponse
     */
    public function describeEnumItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnumItemsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the playbooks that are available for an automatic response plan.
     *  *
     * @param DescribeExecutePlaybooksRequest $request DescribeExecutePlaybooksRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExecutePlaybooksResponse DescribeExecutePlaybooksResponse
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
     * @summary Queries the playbooks that are available for an automatic response plan.
     *  *
     * @param DescribeExecutePlaybooksRequest $request DescribeExecutePlaybooksRequest
     *
     * @return DescribeExecutePlaybooksResponse DescribeExecutePlaybooksResponse
     */
    public function describeExecutePlaybooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExecutePlaybooksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the global configuration information about a cloud service.
     *  *
     * @param DescribeFieldRequest $request DescribeFieldRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFieldResponse DescribeFieldResponse
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
     * @summary Queries the global configuration information about a cloud service.
     *  *
     * @param DescribeFieldRequest $request DescribeFieldRequest
     *
     * @return DescribeFieldResponse DescribeFieldResponse
     */
    public function describeField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFieldWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the output structure information of each node in a playbook based on the most recent running record of the playbook.
     *  *
     * @param DescribeLatestRecordSchemaRequest $request DescribeLatestRecordSchemaRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLatestRecordSchemaResponse DescribeLatestRecordSchemaResponse
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
     * @summary Queries the output structure information of each node in a playbook based on the most recent running record of the playbook.
     *  *
     * @param DescribeLatestRecordSchemaRequest $request DescribeLatestRecordSchemaRequest
     *
     * @return DescribeLatestRecordSchemaResponse DescribeLatestRecordSchemaResponse
     */
    public function describeLatestRecordSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLatestRecordSchemaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries recommended dynamic input parameters of a component for playbook orchestration.
     *  *
     * @param DescribeNodeParamTagsRequest $request DescribeNodeParamTagsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNodeParamTagsResponse DescribeNodeParamTagsResponse
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
     * @summary Queries recommended dynamic input parameters of a component for playbook orchestration.
     *  *
     * @param DescribeNodeParamTagsRequest $request DescribeNodeParamTagsRequest
     *
     * @return DescribeNodeParamTagsResponse DescribeNodeParamTagsResponse
     */
    public function describeNodeParamTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeParamTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the nodes that reference the same node in a playbook.
     *  *
     * @param DescribeNodeUsedInfosRequest $request DescribeNodeUsedInfosRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNodeUsedInfosResponse DescribeNodeUsedInfosResponse
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
     * @summary Queries the nodes that reference the same node in a playbook.
     *  *
     * @param DescribeNodeUsedInfosRequest $request DescribeNodeUsedInfosRequest
     *
     * @return DescribeNodeUsedInfosResponse DescribeNodeUsedInfosResponse
     */
    public function describeNodeUsedInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeUsedInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the XML configuration of a playbook.
     *  *
     * @param DescribePlaybookRequest $request DescribePlaybookRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlaybookResponse DescribePlaybookResponse
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
     * @summary Queries the XML configuration of a playbook.
     *  *
     * @param DescribePlaybookRequest $request DescribePlaybookRequest
     *
     * @return DescribePlaybookResponse DescribePlaybookResponse
     */
    public function describePlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the input and output parameter configurations of a playbook.
     *  *
     * @param DescribePlaybookInputOutputRequest $request DescribePlaybookInputOutputRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlaybookInputOutputResponse DescribePlaybookInputOutputResponse
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
     * @summary Queries the input and output parameter configurations of a playbook.
     *  *
     * @param DescribePlaybookInputOutputRequest $request DescribePlaybookInputOutputRequest
     *
     * @return DescribePlaybookInputOutputResponse DescribePlaybookInputOutputResponse
     */
    public function describePlaybookInputOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookInputOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metrics of a playbook. The metrics include the playbook name, playbook description, the number of times that the playbook is run, and the failure rate of the playbook.
     *  *
     * @param DescribePlaybookMetricsRequest $request DescribePlaybookMetricsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlaybookMetricsResponse DescribePlaybookMetricsResponse
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
     * @summary Queries the metrics of a playbook. The metrics include the playbook name, playbook description, the number of times that the playbook is run, and the failure rate of the playbook.
     *  *
     * @param DescribePlaybookMetricsRequest $request DescribePlaybookMetricsRequest
     *
     * @return DescribePlaybookMetricsResponse DescribePlaybookMetricsResponse
     */
    public function describePlaybookMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookMetricsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the historical output data of a component node.
     *  *
     * @param DescribePlaybookNodesOutputRequest $request DescribePlaybookNodesOutputRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlaybookNodesOutputResponse DescribePlaybookNodesOutputResponse
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
     * @summary Queries the historical output data of a component node.
     *  *
     * @param DescribePlaybookNodesOutputRequest $request DescribePlaybookNodesOutputRequest
     *
     * @return DescribePlaybookNodesOutputResponse DescribePlaybookNodesOutputResponse
     */
    public function describePlaybookNodesOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookNodesOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics of Security Orchestration Automation Response (SOAR), such as the numbers of created and enabled playbooks.
     *  *
     * @param DescribePlaybookNumberMetricsRequest $request DescribePlaybookNumberMetricsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlaybookNumberMetricsResponse DescribePlaybookNumberMetricsResponse
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
     * @summary Queries the statistics of Security Orchestration Automation Response (SOAR), such as the numbers of created and enabled playbooks.
     *  *
     * @param DescribePlaybookNumberMetricsRequest $request DescribePlaybookNumberMetricsRequest
     *
     * @return DescribePlaybookNumberMetricsResponse DescribePlaybookNumberMetricsResponse
     */
    public function describePlaybookNumberMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookNumberMetricsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the published versions of a playbook.
     *  *
     * @param DescribePlaybookReleasesRequest $request DescribePlaybookReleasesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlaybookReleasesResponse DescribePlaybookReleasesResponse
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
     * @summary Queries the information about the published versions of a playbook.
     *  *
     * @param DescribePlaybookReleasesRequest $request DescribePlaybookReleasesRequest
     *
     * @return DescribePlaybookReleasesResponse DescribePlaybookReleasesResponse
     */
    public function describePlaybookReleases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybookReleasesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries playbooks.
     *  *
     * @param DescribePlaybooksRequest $request DescribePlaybooksRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlaybooksResponse DescribePlaybooksResponse
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
     * @summary Queries playbooks.
     *  *
     * @param DescribePlaybooksRequest $request DescribePlaybooksRequest
     *
     * @return DescribePlaybooksResponse DescribePlaybooksResponse
     */
    public function describePlaybooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlaybooksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an API operation.
     *  *
     * @param DescribePopApiRequest $request DescribePopApiRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePopApiResponse DescribePopApiResponse
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
     * @summary Queries the details of an API operation.
     *  *
     * @param DescribePopApiRequest $request DescribePopApiRequest
     *
     * @return DescribePopApiResponse DescribePopApiResponse
     */
    public function describePopApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePopApiWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of API operations for an Alibaba Cloud service.
     *  *
     * @param DescribePopApiItemListRequest $request DescribePopApiItemListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePopApiItemListResponse DescribePopApiItemListResponse
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
     * @summary Queries a list of API operations for an Alibaba Cloud service.
     *  *
     * @param DescribePopApiItemListRequest $request DescribePopApiItemListRequest
     *
     * @return DescribePopApiItemListResponse DescribePopApiItemListResponse
     */
    public function describePopApiItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePopApiItemListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the version information of API operations for an Alibaba Cloud service.
     *  *
     * @param DescribePopApiVersionListRequest $request DescribePopApiVersionListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePopApiVersionListResponse DescribePopApiVersionListResponse
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
     * @summary Queries the version information of API operations for an Alibaba Cloud service.
     *  *
     * @param DescribePopApiVersionListRequest $request DescribePopApiVersionListRequest
     *
     * @return DescribePopApiVersionListResponse DescribePopApiVersionListResponse
     */
    public function describePopApiVersionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePopApiVersionListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about handling tasks. When you use Security Orchestration Automation Response (SOAR) to handle events, handling tasks are generated in the handling center.
     *  *
     * @param DescribeProcessTasksRequest $request DescribeProcessTasksRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProcessTasksResponse DescribeProcessTasksResponse
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
     * @summary Queries the information about handling tasks. When you use Security Orchestration Automation Response (SOAR) to handle events, handling tasks are generated in the handling center.
     *  *
     * @param DescribeProcessTasksRequest $request DescribeProcessTasksRequest
     *
     * @return DescribeProcessTasksResponse DescribeProcessTasksResponse
     */
    public function describeProcessTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the data that is returned when a component initiates an action in a playbook task.
     *  *
     * @param DescribeSoarRecordActionOutputListRequest $request DescribeSoarRecordActionOutputListRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSoarRecordActionOutputListResponse DescribeSoarRecordActionOutputListResponse
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
     * @summary Queries the data that is returned when a component initiates an action in a playbook task.
     *  *
     * @param DescribeSoarRecordActionOutputListRequest $request DescribeSoarRecordActionOutputListRequest
     *
     * @return DescribeSoarRecordActionOutputListResponse DescribeSoarRecordActionOutputListResponse
     */
    public function describeSoarRecordActionOutputList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSoarRecordActionOutputListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the input and output data of a component action. You can call this operation after a playbook is run.
     *  *
     * @param DescribeSoarRecordInOutputRequest $request DescribeSoarRecordInOutputRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSoarRecordInOutputResponse DescribeSoarRecordInOutputResponse
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
     * @summary Queries the input and output data of a component action. You can call this operation after a playbook is run.
     *  *
     * @param DescribeSoarRecordInOutputRequest $request DescribeSoarRecordInOutputRequest
     *
     * @return DescribeSoarRecordInOutputResponse DescribeSoarRecordInOutputResponse
     */
    public function describeSoarRecordInOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSoarRecordInOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution records of a playbook.
     *  *
     * @param DescribeSoarRecordsRequest $request DescribeSoarRecordsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSoarRecordsResponse DescribeSoarRecordsResponse
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
     * @summary Queries the execution records of a playbook.
     *  *
     * @param DescribeSoarRecordsRequest $request DescribeSoarRecordsRequest
     *
     * @return DescribeSoarRecordsResponse DescribeSoarRecordsResponse
     */
    public function describeSoarRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSoarRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution records of a component during the running of a playbook.
     *  *
     * @param DescribeSoarTaskAndActionsRequest $request DescribeSoarTaskAndActionsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSoarTaskAndActionsResponse DescribeSoarTaskAndActionsResponse
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
     * @summary Queries the execution records of a component during the running of a playbook.
     *  *
     * @param DescribeSoarTaskAndActionsRequest $request DescribeSoarTaskAndActionsRequest
     *
     * @return DescribeSoarTaskAndActionsResponse DescribeSoarTaskAndActionsResponse
     */
    public function describeSoarTaskAndActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSoarTaskAndActionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the commands that can be run to obtain objects.
     *  *
     * @param DescribeSophonCommandsRequest $request DescribeSophonCommandsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSophonCommandsResponse DescribeSophonCommandsResponse
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
     * @summary Queries the commands that can be run to obtain objects.
     *  *
     * @param DescribeSophonCommandsRequest $request DescribeSophonCommandsRequest
     *
     * @return DescribeSophonCommandsResponse DescribeSophonCommandsResponse
     */
    public function describeSophonCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSophonCommandsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the operational logs of a Python3 script by using the UUID that is returned when the script is run. The UUID is specified by requestUuid.
     *  *
     * @param DescriberPython3ScriptLogsRequest $request DescriberPython3ScriptLogsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescriberPython3ScriptLogsResponse DescriberPython3ScriptLogsResponse
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
     * @summary Queries the operational logs of a Python3 script by using the UUID that is returned when the script is run. The UUID is specified by requestUuid.
     *  *
     * @param DescriberPython3ScriptLogsRequest $request DescriberPython3ScriptLogsRequest
     *
     * @return DescriberPython3ScriptLogsResponse DescriberPython3ScriptLogsResponse
     */
    public function describerPython3ScriptLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describerPython3ScriptLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about the asset that is configured for a component.
     *  *
     * @param ModifyComponentAssetRequest $request ModifyComponentAssetRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyComponentAssetResponse ModifyComponentAssetResponse
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
     * @summary Modifies the information about the asset that is configured for a component.
     *  *
     * @param ModifyComponentAssetRequest $request ModifyComponentAssetRequest
     *
     * @return ModifyComponentAssetResponse ModifyComponentAssetResponse
     */
    public function modifyComponentAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyComponentAssetWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configuration of a playbook.
     *  *
     * @param ModifyPlaybookRequest $request ModifyPlaybookRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPlaybookResponse ModifyPlaybookResponse
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
     * @summary Modifies the configuration of a playbook.
     *  *
     * @param ModifyPlaybookRequest $request ModifyPlaybookRequest
     *
     * @return ModifyPlaybookResponse ModifyPlaybookResponse
     */
    public function modifyPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the input and output parameters of a playbook.
     *  *
     * @param ModifyPlaybookInputOutputRequest $request ModifyPlaybookInputOutputRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPlaybookInputOutputResponse ModifyPlaybookInputOutputResponse
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
     * @summary Modifies the input and output parameters of a playbook.
     *  *
     * @param ModifyPlaybookInputOutputRequest $request ModifyPlaybookInputOutputRequest
     *
     * @return ModifyPlaybookInputOutputResponse ModifyPlaybookInputOutputResponse
     */
    public function modifyPlaybookInputOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPlaybookInputOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the status of a playbook.
     *  *
     * @param ModifyPlaybookInstanceStatusRequest $request ModifyPlaybookInstanceStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPlaybookInstanceStatusResponse ModifyPlaybookInstanceStatusResponse
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
     * @summary Modifies the status of a playbook.
     *  *
     * @param ModifyPlaybookInstanceStatusRequest $request ModifyPlaybookInstanceStatusRequest
     *
     * @return ModifyPlaybookInstanceStatusResponse ModifyPlaybookInstanceStatusResponse
     */
    public function modifyPlaybookInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPlaybookInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Publishes the playbook. After the playbook is published, the playbook runs based on the new logic.
     *  *
     * @param PublishPlaybookRequest $request PublishPlaybookRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishPlaybookResponse PublishPlaybookResponse
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
     * @summary Publishes the playbook. After the playbook is published, the playbook runs based on the new logic.
     *  *
     * @param PublishPlaybookRequest $request PublishPlaybookRequest
     *
     * @return PublishPlaybookResponse PublishPlaybookResponse
     */
    public function publishPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all playbooks at a time.
     *  *
     * @param QueryTreeDataRequest $request QueryTreeDataRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTreeDataResponse QueryTreeDataResponse
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
     * @summary Queries all playbooks at a time.
     *  *
     * @param QueryTreeDataRequest $request QueryTreeDataRequest
     *
     * @return QueryTreeDataResponse QueryTreeDataResponse
     */
    public function queryTreeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTreeDataWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the name of a node in a playbook. You can call this operation during playbook orchestration. After the name of the node is changed, the reference path of the node also changes.
     *  *
     * @param RenamePlaybookNodeRequest $request RenamePlaybookNodeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RenamePlaybookNodeResponse RenamePlaybookNodeResponse
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
     * @summary Changes the name of a node in a playbook. You can call this operation during playbook orchestration. After the name of the node is changed, the reference path of the node also changes.
     *  *
     * @param RenamePlaybookNodeRequest $request RenamePlaybookNodeRequest
     *
     * @return RenamePlaybookNodeResponse RenamePlaybookNodeResponse
     */
    public function renamePlaybookNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renamePlaybookNodeWithOptions($request, $runtime);
    }

    /**
     * @summary Rolls back a playbook to a specific version. You can determine whether to publish the new playbook version during the rollback.
     *  *
     * @param RevertPlaybookReleaseRequest $request RevertPlaybookReleaseRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RevertPlaybookReleaseResponse RevertPlaybookReleaseResponse
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
     * @summary Rolls back a playbook to a specific version. You can determine whether to publish the new playbook version during the rollback.
     *  *
     * @param RevertPlaybookReleaseRequest $request RevertPlaybookReleaseRequest
     *
     * @return RevertPlaybookReleaseResponse RevertPlaybookReleaseResponse
     */
    public function revertPlaybookRelease($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertPlaybookReleaseWithOptions($request, $runtime);
    }

    /**
     * @summary Submits and runs a Python3 script. You can call this operation only for data processing.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *  *
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
     * @summary Submits and runs a Python3 script. You can call this operation only for data processing.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *  *
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
     * @summary Triggers an enabled custom playbook or a predefined playbook.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *  *
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
     * @summary Triggers an enabled custom playbook or a predefined playbook.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *  *
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
     * @summary Performs an action on a handling task that is generated by the handling center when an event is handled by using Security Orchestration Automation Response (SOAR). For example, you can call this operation to cancel blocking or isolation, or retry blocking.
     *  *
     * @param TriggerProcessTaskRequest $request TriggerProcessTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return TriggerProcessTaskResponse TriggerProcessTaskResponse
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
     * @summary Performs an action on a handling task that is generated by the handling center when an event is handled by using Security Orchestration Automation Response (SOAR). For example, you can call this operation to cancel blocking or isolation, or retry blocking.
     *  *
     * @param TriggerProcessTaskRequest $request TriggerProcessTaskRequest
     *
     * @return TriggerProcessTaskResponse TriggerProcessTaskResponse
     */
    public function triggerProcessTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerProcessTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Triggers a playbook or a command.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *  *
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
     * @summary Triggers a playbook or a command.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.aliyun.com/price/product#/sas/detail/sas).
     *  *
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
     * @summary Checks whether the configuration of the playbook is correct and whether the logic of the orchestration is reasonable.
     *  *
     * @param VerifyPlaybookRequest $request VerifyPlaybookRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyPlaybookResponse VerifyPlaybookResponse
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
     * @summary Checks whether the configuration of the playbook is correct and whether the logic of the orchestration is reasonable.
     *  *
     * @param VerifyPlaybookRequest $request VerifyPlaybookRequest
     *
     * @return VerifyPlaybookResponse VerifyPlaybookResponse
     */
    public function verifyPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the syntax of a Python code snippet is correct.
     *  *
     * @param VerifyPythonFileRequest $request VerifyPythonFileRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyPythonFileResponse VerifyPythonFileResponse
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
     * @summary Checks whether the syntax of a Python code snippet is correct.
     *  *
     * @param VerifyPythonFileRequest $request VerifyPythonFileRequest
     *
     * @return VerifyPythonFileResponse VerifyPythonFileResponse
     */
    public function verifyPythonFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyPythonFileWithOptions($request, $runtime);
    }
}
