<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\BatchModifyInstanceStatusRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\BatchModifyInstanceStatusResponse;
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
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeUsedInfosRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeUsedInfosResponse;
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
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiItemListRequest;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePopApiItemListResponse;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchModifyInstanceStatus',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchModifyInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchModifyInstanceStatusResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ComparePlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ComparePlaybooksResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Convert XML configuration.
     *  *
     * @description Please ensure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the orchestration product before using this interface.
     *  *
     * @param ConvertPlaybookRequest $request ConvertPlaybookRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ConvertPlaybookResponse ConvertPlaybookResponse
     */
    public function convertPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $query['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        $body = [];
        if (!Utils::isUnset($request->taskflow)) {
            $body['Taskflow'] = $request->taskflow;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConvertPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConvertPlaybookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Convert XML configuration.
     *  *
     * @description Please ensure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the orchestration product before using this interface.
     *  *
     * @param ConvertPlaybookRequest $request ConvertPlaybookRequest
     *
     * @return ConvertPlaybookResponse ConvertPlaybookResponse
     */
    public function convertPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary 剧本复制
     *  *
     * @param CopyPlaybookRequest $request CopyPlaybookRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyPlaybookResponse CopyPlaybookResponse
     */
    public function copyPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $query['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->releaseVersion)) {
            $body['ReleaseVersion'] = $request->releaseVersion;
        }
        if (!Utils::isUnset($request->sourcePlaybookUuid)) {
            $body['SourcePlaybookUuid'] = $request->sourcePlaybookUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CopyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CopyPlaybookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 剧本复制
     *  *
     * @param CopyPlaybookRequest $request CopyPlaybookRequest
     *
     * @return CopyPlaybookResponse CopyPlaybookResponse
     */
    public function copyPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary New Playbook.
     *  *
     * @description Create Playbook.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreatePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePlaybookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary New Playbook.
     *  *
     * @description Create Playbook.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DebugPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DebugPlaybookResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteComponentAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteComponentAssetResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeletePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePlaybookResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeComponentAssetFormResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeComponentAssetFormResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeComponentAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeComponentAssetsResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeComponentListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeComponentListResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeComponentPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeComponentPlaybookResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeComponentsJsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeComponentsJsResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDistinctReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDistinctReleasesResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEnumItemsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEnumItemsResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeExecutePlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeExecutePlaybooksResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeFieldResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeFieldResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 获取OpenAPI的产品列表
     *  *
     * @param DescribeGroupProductionsRequest $request DescribeGroupProductionsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupProductionsResponse DescribeGroupProductionsResponse
     */
    public function describeGroupProductionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeGroupProductionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeGroupProductionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取OpenAPI的产品列表
     *  *
     * @param DescribeGroupProductionsRequest $request DescribeGroupProductionsRequest
     *
     * @return DescribeGroupProductionsResponse DescribeGroupProductionsResponse
     */
    public function describeGroupProductions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupProductionsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeLatestRecordSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLatestRecordSchemaResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeNodeParamTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNodeParamTagsResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNodeUsedInfos',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeNodeUsedInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNodeUsedInfosResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 查询通知消息模版列表
     *  *
     * @param DescribeNotifyTemplateListRequest $request DescribeNotifyTemplateListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNotifyTemplateListResponse DescribeNotifyTemplateListResponse
     */
    public function describeNotifyTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeNotifyTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNotifyTemplateListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询通知消息模版列表
     *  *
     * @param DescribeNotifyTemplateListRequest $request DescribeNotifyTemplateListRequest
     *
     * @return DescribeNotifyTemplateListResponse DescribeNotifyTemplateListResponse
     */
    public function describeNotifyTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNotifyTemplateListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取产品接口的详情
     *  *
     * @param DescribeOpenApiInfoRequest $request DescribeOpenApiInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOpenApiInfoResponse DescribeOpenApiInfoResponse
     */
    public function describeOpenApiInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeOpenApiInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOpenApiInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取产品接口的详情
     *  *
     * @param DescribeOpenApiInfoRequest $request DescribeOpenApiInfoRequest
     *
     * @return DescribeOpenApiInfoResponse DescribeOpenApiInfoResponse
     */
    public function describeOpenApiInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpenApiInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取产品的接口列表
     *  *
     * @param DescribeOpenApiListRequest $request DescribeOpenApiListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOpenApiListResponse DescribeOpenApiListResponse
     */
    public function describeOpenApiListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeOpenApiListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOpenApiListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取产品的接口列表
     *  *
     * @param DescribeOpenApiListRequest $request DescribeOpenApiListRequest
     *
     * @return DescribeOpenApiListResponse DescribeOpenApiListResponse
     */
    public function describeOpenApiList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpenApiListWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePlaybookResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePlaybookInputOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePlaybookInputOutputResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePlaybookMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePlaybookMetricsResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePlaybookNodesOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePlaybookNodesOutputResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePlaybookNumberMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePlaybookNumberMetricsResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePlaybookReleasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePlaybookReleasesResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Retrieve the list of playbooks.
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePlaybooksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Retrieve the list of playbooks.
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePopApi',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePopApiResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePopApiResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePopApiItemList',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePopApiItemListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePopApiItemListResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 获取统计信息
     *  *
     * @param DescribeProcessStatisticsRequest $request DescribeProcessStatisticsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProcessStatisticsResponse DescribeProcessStatisticsResponse
     */
    public function describeProcessStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeProcessStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProcessStatisticsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取统计信息
     *  *
     * @param DescribeProcessStatisticsRequest $request DescribeProcessStatisticsRequest
     *
     * @return DescribeProcessStatisticsResponse DescribeProcessStatisticsResponse
     */
    public function describeProcessStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Query the number of associated disposal tasks based on the entity UUID.
     *  *
     * @param DescribeProcessTaskCountRequest $request DescribeProcessTaskCountRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProcessTaskCountResponse DescribeProcessTaskCountResponse
     */
    public function describeProcessTaskCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeProcessTaskCountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProcessTaskCountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query the number of associated disposal tasks based on the entity UUID.
     *  *
     * @param DescribeProcessTaskCountRequest $request DescribeProcessTaskCountRequest
     *
     * @return DescribeProcessTaskCountResponse DescribeProcessTaskCountResponse
     */
    public function describeProcessTaskCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessTaskCountWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->entityName)) {
            $query['EntityName'] = $request->entityName;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->entityUuid)) {
            $query['EntityUuid'] = $request->entityUuid;
        }
        if (!Utils::isUnset($request->eventUuid)) {
            $query['EventUuid'] = $request->eventUuid;
        }
        if (!Utils::isUnset($request->orderField)) {
            $query['OrderField'] = $request->orderField;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->paramContent)) {
            $query['ParamContent'] = $request->paramContent;
        }
        if (!Utils::isUnset($request->processActionEnd)) {
            $query['ProcessActionEnd'] = $request->processActionEnd;
        }
        if (!Utils::isUnset($request->processActionStart)) {
            $query['ProcessActionStart'] = $request->processActionStart;
        }
        if (!Utils::isUnset($request->processRemoveEnd)) {
            $query['ProcessRemoveEnd'] = $request->processRemoveEnd;
        }
        if (!Utils::isUnset($request->processRemoveStart)) {
            $query['ProcessRemoveStart'] = $request->processRemoveStart;
        }
        if (!Utils::isUnset($request->processStrategyUuid)) {
            $query['ProcessStrategyUuid'] = $request->processStrategyUuid;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->triggerSource)) {
            $query['TriggerSource'] = $request->triggerSource;
        }
        if (!Utils::isUnset($request->yunCode)) {
            $query['YunCode'] = $request->yunCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeProcessTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeProcessTasksResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSoarRecordActionOutputListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSoarRecordActionOutputListResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSoarRecordInOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSoarRecordInOutputResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Get the execution records of a playbook.
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSoarRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSoarRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get the execution records of a playbook.
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSoarTaskAndActionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSoarTaskAndActionsResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSophonCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSophonCommandsResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 查询云厂商OpenApi列表
     *  *
     * @param DescribeVendorApiListRequest $request DescribeVendorApiListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVendorApiListResponse DescribeVendorApiListResponse
     */
    public function describeVendorApiListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->vendorCode)) {
            $query['VendorCode'] = $request->vendorCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeVendorApiListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeVendorApiListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询云厂商OpenApi列表
     *  *
     * @param DescribeVendorApiListRequest $request DescribeVendorApiListRequest
     *
     * @return DescribeVendorApiListResponse DescribeVendorApiListResponse
     */
    public function describeVendorApiList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVendorApiListWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescriberPython3ScriptLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescriberPython3ScriptLogsResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyComponentAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyComponentAssetResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyPlaybookResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyPlaybookInputOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyPlaybookInputOutputResponse::fromMap($this->execute($params, $req, $runtime));
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyPlaybookInstanceStatus',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyPlaybookInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyPlaybookInstanceStatusResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PublishPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PublishPlaybookResponse::fromMap($this->execute($params, $req, $runtime));
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryTreeDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryTreeDataResponse::fromMap($this->execute($params, $req, $runtime));
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
            'action' => 'RenamePlaybookNode',
            'version' => '2022-07-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RenamePlaybookNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenamePlaybookNodeResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RevertPlaybookReleaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevertPlaybookReleaseResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 执行通知组件-email发送消息
     *  *
     * @param RunNotifyComponentWithEmailRequest $request RunNotifyComponentWithEmailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RunNotifyComponentWithEmailResponse RunNotifyComponentWithEmailResponse
     */
    public function runNotifyComponentWithEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionName)) {
            $query['ActionName'] = $request->actionName;
        }
        if (!Utils::isUnset($request->assetId)) {
            $query['AssetId'] = $request->assetId;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $query['PlaybookUuid'] = $request->playbookUuid;
        }
        if (!Utils::isUnset($request->receivers)) {
            $query['Receivers'] = $request->receivers;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $query['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunNotifyComponentWithEmailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunNotifyComponentWithEmailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 执行通知组件-email发送消息
     *  *
     * @param RunNotifyComponentWithEmailRequest $request RunNotifyComponentWithEmailRequest
     *
     * @return RunNotifyComponentWithEmailResponse RunNotifyComponentWithEmailResponse
     */
    public function runNotifyComponentWithEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runNotifyComponentWithEmailWithOptions($request, $runtime);
    }

    /**
     * @summary 执行通知组件-消息中心发送消息
     *  *
     * @param RunNotifyComponentWithMessageCenterRequest $request RunNotifyComponentWithMessageCenterRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return RunNotifyComponentWithMessageCenterResponse RunNotifyComponentWithMessageCenterResponse
     */
    public function runNotifyComponentWithMessageCenterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionName)) {
            $query['ActionName'] = $request->actionName;
        }
        if (!Utils::isUnset($request->aliuid)) {
            $query['Aliuid'] = $request->aliuid;
        }
        if (!Utils::isUnset($request->assetId)) {
            $query['AssetId'] = $request->assetId;
        }
        if (!Utils::isUnset($request->channelTypeList)) {
            $query['ChannelTypeList'] = $request->channelTypeList;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $query['PlaybookUuid'] = $request->playbookUuid;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $query['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunNotifyComponentWithMessageCenterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunNotifyComponentWithMessageCenterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 执行通知组件-消息中心发送消息
     *  *
     * @param RunNotifyComponentWithMessageCenterRequest $request RunNotifyComponentWithMessageCenterRequest
     *
     * @return RunNotifyComponentWithMessageCenterResponse RunNotifyComponentWithMessageCenterResponse
     */
    public function runNotifyComponentWithMessageCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runNotifyComponentWithMessageCenterWithOptions($request, $runtime);
    }

    /**
     * @summary 执行通知组件-webhook发送消息
     *  *
     * @param RunNotifyComponentWithWebhookRequest $request RunNotifyComponentWithWebhookRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RunNotifyComponentWithWebhookResponse RunNotifyComponentWithWebhookResponse
     */
    public function runNotifyComponentWithWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionName)) {
            $query['ActionName'] = $request->actionName;
        }
        if (!Utils::isUnset($request->assetId)) {
            $query['AssetId'] = $request->assetId;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->msgType)) {
            $query['MsgType'] = $request->msgType;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $query['PlaybookUuid'] = $request->playbookUuid;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $query['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $query['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->secret)) {
            $query['Secret'] = $request->secret;
        }
        if (!Utils::isUnset($request->webhook)) {
            $query['Webhook'] = $request->webhook;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunNotifyComponentWithWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunNotifyComponentWithWebhookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 执行通知组件-webhook发送消息
     *  *
     * @param RunNotifyComponentWithWebhookRequest $request RunNotifyComponentWithWebhookRequest
     *
     * @return RunNotifyComponentWithWebhookResponse RunNotifyComponentWithWebhookResponse
     */
    public function runNotifyComponentWithWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runNotifyComponentWithWebhookWithOptions($request, $runtime);
    }

    /**
     * @summary Submits and runs a Python3 script. You can call this operation only for data processing.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.alibabacloud.com/en/pricing-calculator?_p_lc=1&spm=openapi-amp.newDocPublishment.0.0.4c41281fWhbdPa#/commodity/vm_intl).
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunPython3ScriptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunPython3ScriptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits and runs a Python3 script. You can call this operation only for data processing.
     *  *
     * @description Before you call this operation, make sure that you understand the billing method and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.alibabacloud.com/en/pricing-calculator?_p_lc=1&spm=openapi-amp.newDocPublishment.0.0.4c41281fWhbdPa#/commodity/vm_intl).
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
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.alibabacloud.com/en/pricing-calculator?_p_lc=1&spm=a2796.7960336.3034855210.1.7adab91arMeIx2#/commodity/vm_intl).
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TriggerPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TriggerPlaybookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Triggers an enabled custom playbook or a predefined playbook.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.alibabacloud.com/en/pricing-calculator?_p_lc=1&spm=a2796.7960336.3034855210.1.7adab91arMeIx2#/commodity/vm_intl).
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
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TriggerProcessTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TriggerProcessTaskResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.alibabacloud.com/en/pricing-calculator?_p_lc=1&spm=a2796.7960336.3034855210.1.7adab91arMeIx2#/commodity/vm_intl).
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TriggerSophonPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TriggerSophonPlaybookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Triggers a playbook or a command.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of Security Orchestration Automation Response (SOAR). For more information, see [Pricing](https://www.alibabacloud.com/en/pricing-calculator?_p_lc=1&spm=a2796.7960336.3034855210.1.7adab91arMeIx2#/commodity/vm_intl).
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return VerifyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return VerifyPlaybookResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return VerifyPythonFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return VerifyPythonFileResponse::fromMap($this->execute($params, $req, $runtime));
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
